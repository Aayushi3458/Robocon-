<?php
    session_start();
    $Iam = $_SESSION['Iam'];
    if($Iam === 'Admin') $redirect = './index.php';
    session_destroy();
    echo '<script>'."window.location = '$redirect'".'</script>';
?>