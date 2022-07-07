<?php
  session_start();
  if(isset($_SESSION['emailId'])) {
    $Iam = $_SESSION['Iam'];
    if($Iam == "Student" || $Iam == "Faculty") {
      $redirect = "./index.php";
    } else if($Iam == "Admin") {
      $redirect = "./nodues/admin/home.php";
    }
    echo '<script>'."alert('Already Logged In!'); window.location = '$redirect'".'</script>';
  }
  if(isset($_GET['loginAs'])) { $loginAs = $_GET['loginAs'];} else { $loginAs = 0; }
  $loginTitle;
  if($loginAs == '0') {
    $loginTitle = "Student";
  } else if($loginAs == '1') {
    $loginTitle = "Faculty";
  } else if($loginAs == 'admin') {
    $loginTitle = "Admin";
  } else {
    // other then 0, 1 and admin, make default login as Student
    $loginTitle = "Student";
    $loginAs = '0';
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="assets/js/javaScript.js" rel="text/javascript"> </script>

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class=" d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.php">
        <img src="assets\images\Logo.png" alt="Logo" style="max-width:95%;" class="somaiyaLogo"/>
        </a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
    <main id="main" style="margin-top:-60px">
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
    <div class="rectangle1">
      <div class="rectangle2">
      </div>
    </div> 
    
    <div style="width:100%; height:100%;">

      <div  style="background-color:#b8242c; width:36px; max-width:36px; height:600px; max-height: 100%; float:left;"></div>

      <div class="container" data-aos="fade-up" >
        <br>
      <div class="row">


        <div class="col-lg-7 t-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" style="margin-left:-15px;">
            
        <div class="col-lg-12 d-flex align-items-stretch" >
          <img src="./assets/images/College.png" style="width:inherit;height:575px" id="disabledCollegeImage"/>
        </div>


          </div>

          <!-- ======= Student Login ======= -->
          <div id="studentLoginPage" class="col-lg-5 mt-5 mt-lg-0 t-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200" style="float:top; text-align:left; z-index:100;">
            <form action="./backend/login.php" method="post" role="form" style="margin-top:30px; width: 100%; padding: 30px; background: #fff; box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);">
            <h3 style="text-align:center"><b><?php if(isset($loginTitle)) echo $loginTitle; ?>'s Login</b></h3>  
            <div class="form-group mt-3">
                <label for="name">Email Id</label>
                <input type="text" class="form-control" name="emailId" id="emailId" placeholder="xyz@somaiya.edu" required value="<?php if(isset($_GET['emailId'])) { echo $_GET['emailId'];}?>">
                <input type="hidden" name="loginAs" value="<?php if(isset($loginTitle)) echo $loginAs?>" />
            </div>
            <div class="form-group mt-3">
              <label for="name">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" class="bi bi-eye"required>
            </div>
            <div class="etc-login-form">
              <p style="text-align:right"><a href="" onclick="forgotPassword(this)"><b style="color:black"><u>Forgot Password?</u></b></a></p>
            </div>
              <br>
              <?php if(isset($_GET['errorCode'])) {
                  $errorMsg = ""; 
                  if($_GET['errorCode'] == 0) {
                    $errorMsg = "Invalid Username or Password";
                  } else if($_GET['errorCode'] == 1) {
                    $errorMsg = "Your Request is Under Review, you be notified soon!";
                  } else if($_GET['errorCode'] == 2) {
                    $errorMsg = "Your account is Temporarily Blocked!,<br> Please contact to respective admin for further information";
                  } else if($_GET['errorCode'] == 3) {
                    $errorMsg = "Please Enter Your Email ID first!";
                  } else if($_GET['errorCode'] == 4) {
                    $errorMsg = "Please Enter a Valid Email ID";
                  } else if($_GET['errorCode'] == 5) {
                    $errorMsg = "This user doesn't exist!!";
                  }
              ?>
              
                <div style="text-align:center; color:red; background-color: #fbe9ea; border: 1px solid red; border-radius:10px; vertical-align:middle; margin:10px;">
                  <h5 ><b><?php echo $errorMsg; ?></b></h5>
                </div> 
              <?php }?>
              <div class="text-center"><input type="submit" name="submit" style="background:green; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;" value="Login"/></div>
              <br>
            <div class="text-center"><a href="./signup.php?signUpAs=<?php echo $loginAs; ?>" style="text-decoration:none;"><input type="button" style="background:blue; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;" value="Don't have an account? Sign Up" /><a></div>
            </form>
          </div>

        </div>

      </div>
      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>