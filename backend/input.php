<?php

session_start();
if(!(isset($_SESSION['emailId']))) {
  echo '<script>'."window.location = '../../index.php?'".'</script>';
} else if(isset($_SESSION['Iam']) && !($_SESSION['Iam'] === "Student")) {
    $Iam = $_SESSION['Iam'];
    if($Iam === 'Faculty') $redirect = '../../../index.php'; 
    if($Iam === 'Admin') {
      $projectName = $_SESSION['activeFor'];
       if($projectName === 'nodues')  $redirect = '../../../nodues/admin/home.php';
       //
       // Check Rest of the projects and redirect them accordingly 
       //
    }
    echo '<script>'."alert('You are not allowed to access this Resource!'); window.location = '$redirect'".'</script>';
}

$studentName = $_SESSION['username'];
$emailId = $_SESSION['emailId'];
$deptId = $_SESSION['dept'];

include('../../../connect.php');

if($_SERVER['REQUEST_METHOD'] === 'GET') {
        $selectRecord = "SELECT `id`, `Team1`, `ps1`, `pt1`, `ss1`, `st1`, `bs1`, `bt1`, `Team2`, `ps2`, `pt2`, `ss2`, `st2`, `bs2`, `bt2` FROM `robocondata` WHERE 1";
        $result = $conn->query($selectRecord);
        if($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            if($data['alumni_edit']!="0") {
                $newRemark = "Below Data has been updated: ".$data['alumni_remark'];
                $updateRecord = "UPDATE `no_dues` SET `alumni_remark`='$newRemark', `alumni_status`='0',  `alumni_edit`='0' WHERE `email_id`='".$emailId."'";
                $status = $conn->query($updateRecord);
            } else {
                echo '<script>
                  alert("PLease do not make falsy request!\nOtherwise you will get blocked!!");
                  window.location = "../../../nodues/student/status.php"; </script>';
            }
        } else {
            echo '<script>
                  alert("No Record Found!");
                  window.location = "../../../nodues/student/status.php"; </script>';
        }
        echo '<script>
                  alert("Thank you!\n you will get further updates soon!!");
                  window.location = "../../../nodues/student/status.php"; </script>';
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(isset($_POST['update'])) {
        // 1. fetch data from alumni, accoding to question number, do required action
        $selectRecord = "SELECT `alumni_edit` FROM `no_dues` WHERE `email_id`='".$emailId."'";
        $result = $conn->query($selectRecord);
       
        if($result->num_rows > 0 && $result->fetch_assoc()['alumni_edit']=="1") {

                $fetchQuery = "SELECT * FROM `alumni_form` WHERE `email_id`='".$emailId."'";
                $result = $conn->query($fetchQuery);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                            // Student Record Available.
                            $prePath = "../../../";
                            $questionNum = NULL;
                            if($row["question_num"] == "23") {
                                $fileName = $prePath.$row["uploaded_file"];
                                move_uploaded_file($_FILES['photo']['tmp_name'], $fileName);
                                continue;
                            }

                            if($row["question_num"] == "3") {
                                $uploadedFile = $row["uploaded_file"];
                                // when file was not uploaded
                                if($uploadedFile == NULL) {
                                    // Save Student's Files in the correct year of apply.
                                    $selectRecord = "SELECT `applied_date` FROM `no_dues` WHERE `email_id`='".$emailId."'";
                                    $result = $conn->query($selectRecord);
                                    $dateResult = $result->fetch_assoc();
                                    $curYear = $dateResult["applied_date"];
                                    $fileExtension = explode(".", $_FILES['scorefile']['name']);
                                    $uploadedFile = "uploads/nodues/".substr($curYear, 0, 4)."/".$emailId."/alumni-scorefile.".end($fileExtension);
                                }

                                $fileName = $prePath.$uploadedFile;
                                if(move_uploaded_file($_FILES['scorefile']['tmp_name'], $fileName)) {
                                    $questionNum = 3;

                                    $updateAnswer = "UPDATE `alumni_form` SET `answer`='1', `uploaded_file`='$uploadedFile' WHERE `question_num`='$questionNum' and `email_id`='".$emailId."'";
                                    $status = $conn->query($updateAnswer);
                                }
                                continue;
                            }
                
                            $questionNum = $row["question_num"];
                            $fieldName = "q".$questionNum;
                            $value = NULL;
                            if(isset($_POST[$fieldName])) {
                                $value = $_POST[$fieldName];
                            }
                            
                            if($value != NULL) {
                                $updateAnswer = "UPDATE `alumni_form` SET `answer`='$value' WHERE `question_num`='$questionNum' and `email_id`='".$emailId."'";
                                $status = $conn->query($updateAnswer);
                            }
        
                    }
                    echo '<script>
                        alert("Record Successfully Updated, \nNow you can resend the data by clicking Done button");
                        window.location = "../../../nodues/student/status.php"; </script>';

                } else {
                    // some error.
                    echo '<script>
                            alert("Something went wrong, please try again after sometime!");
                            window.location = "../../../nodues/student/alumniform.php"; </script>';
                }
        } else {
            // You are not allowed to make changes!!!
            echo '<script>
                        alert("You are not allowed to make changes\nPlease contact respective faculty!");
                        window.location = "../../../nodues/student/alumniform.php"; </script>';
        }

    } else {

        $target_directory="../../../uploads/nodues/".date('Y')."/".$emailId."/";
        $pathToBeStored = "uploads/nodues/".date('Y')."/".$emailId."/";
        
        if (!file_exists($target_directory)) {
            mkdir($target_directory, 0777, true);
        }
        
        $fileName1 = NULL;
        $fileName2 = NULL;
        $fileName3 = NULL;
        $pathToBeStored1 = NULL;
        $pathToBeStored2 = NULL;
        $pathToBeStored3 = NULL;

        if($_FILES['scorefile']['name']) {
            $fileExtension = explode(".", $_FILES['scorefile']['name']);
            $fileName1 = $target_directory."alumni-scorefile.".end($fileExtension);
            $pathToBeStored1 = $pathToBeStored."alumni-scorefile.".end($fileExtension);
        }
        if($_FILES['photo']['name']) {
            $fileExtension = explode(".", $_FILES['photo']['name']);
            $fileName2 = $target_directory."alumni-photo.".end($fileExtension);
            $pathToBeStored2 = $pathToBeStored."alumni-photo.".end($fileExtension);
        }

        if(move_uploaded_file($_FILES['photo']['tmp_name'], $fileName2)) {
            $insertQuery = "INSERT INTO `alumni_form`(`email_id`, `question_num`, `answer`, `uploaded_file`) VALUES('$emailId','23','1','$pathToBeStored2')";
            $result = $conn->query($insertQuery);
        } 
        
        if(move_uploaded_file($_FILES['scorefile']['tmp_name'], $fileName1)) {
            $insertQuery = "INSERT INTO `alumni_form`(`email_id`, `question_num`, `answer`, `uploaded_file`) VALUES('$emailId','3','1','$pathToBeStored1')";        
        } else {
            $insertQuery = "INSERT INTO `alumni_form`(`email_id`, `question_num`, `answer`, `uploaded_file`) VALUES('$emailId','3','0','$pathToBeStored1')";
        }

        $result = $conn->query($insertQuery);

        $path = NULL;
        
        for ($i = 1; $i <= 23; $i++) {
            if($i == 3 || $i == 23) { continue; } 
            $fieldName = "q".$i;
            $value = $_POST[$fieldName];
            if(!isset($value)) $value = 0;
            
            $insertQuery = "INSERT INTO `alumni_form`(`email_id`, `question_num`, `answer`, `uploaded_file`) VALUES ('$emailId','$i','$value','$path')";
            $result = $conn->query($insertQuery);
        }

        $today = date("Y-m-d");
        $numOfQuestions = 23;
        $status = 0;
        $remark = "Pending...";

        // Update Informatio of student in no_dues table.
        $updateNodues = "UPDATE `no_dues` SET `applied_date`='$today',`num_alumni_questions`='$numOfQuestions', `alumni_status`='$status', `alumni_remark`='$remark' WHERE `email_id`='".$emailId."'";
        $status = $conn->query($updateNodues);

        echo '<script>
                alert("Successfully Submitted!");
                window.location = "../../../nodues/student/t-pform.php"; </script>';
    }
}
?>