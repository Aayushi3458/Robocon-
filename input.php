<?php
$ps1 = $pt1 = $ss1= $st1 = $bs1 = $bt1 = "";
$ps2 = $pt2 = $ss2= $st2 = $bs2 = $bt2 = "";
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Robotics</title>
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
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Ninestars - v4.7.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>Robocon</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#" style="cursor:pointer"><span>Events</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="events\result.php">Result</a></li>
                  <li><a href="events\ranking.php">Ranking</a></li>
                  <li><a href="events\award.php">Awards</a></li>
                  <li><a href="events\media.php">Media</a></li>
                </ul>
          </li>
          <li><a class="nav-link scrollto" style="cursor:pointer" href="teams.php">Team</a></li>
          <li class="dropdown"><a href="#" style="cursor:pointer"><span>Guidance</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="guidance\stage1.php">Stage 1</a></li>
                  <li><a href="guidance\stage2.php">Stage 2</a></li>
                  <li><a href="guidance\stage3.php">Stage 3</a></li>
                </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <main id="main">
     <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Team Details</p>
        </div>
        <div class="formbox" style="background-color:white; border-radius:15px;box-shadow: 0 10px 29px 0 rgba(68, 88, 144, 0.1);text-align:center;overflow-x:auto;">
        <form name="Teamform" action="connect.php" method="POST" enctype="multipart/form-data">    
        <form action="/action_page.php">
          <label for="quantity">Match Number:</label>
          <input type="number" id="quantity" name="quantity" min="1" max="120">
        </form>
        <div class="column">
            <div class="row"> 
            <h3 style="text-align:center">Team 1</h3>
            <form action="/action_page.php">
              <label for="team1" style="text-align:left">Team Name</label>
              <select id="team1" name="team1" style="width:70%">
              <option value="#" >A.C.Patil College of Engineering</option>
              <option value="#">A.D. Patel Institute of Technology</option>
              <option value="#">Ajay Kumar Garg Engineering College</option>
              <option value="#">Bannari Amman Institute of Technology (Team:ASSAULT)</option>
              <option value="#">Bannari Amman Institute of Technology (Team: NOVA)</option>
              <option value="#">Bannari Amman Institute of Technology (Team: Innovators)</option>
              <option value="#">Bannari Amman Institute of Technology (Team: ALPHA)</option>
              <option value="#">Bannari Amman Institute of Technology (Team: Vitality)</option>
              <option value="#">Birla Vishvakarma Mahavidyalaya</option>
              <option value="#">BRACT's Vishwakarma Institute of Technology</option>
              <option value="#">College of Engineering</option>
              <option value="#">College of Engineering</option>
              <option value="#">Fr. Conceicao Rodrigues College of Engineering,Mumbai</option>
              <option value="#">Fr. Conceicao Rodrigues Institute of Technology,Vashi</option>
              <option value="#">Government College of Engineering and Research Avasari Khurd</option>
              <option value="#">Government College of Engineering</option>
              <option value="#">Government Engineering College</option>
              <option value="#">Gujarat Technological University</option>
              <option value="#">Institute of Technology, Nirma University</option>
              <option value="#">JSPM Rajarshi shahu college of engineering</option>
              <option value="#">K.J. Somaiya Institute of Engineering and Information Technology</option>
              <option value="#">Kalinga Institute of Industrial Technology</option>
              <option value="#">KJ Somaiya College of Engineering</option>
              <option value="#">LD College of Engineering</option>
              <option value="#">LJ University</option>
              <option value="#">Mahindra University</option>
              <option value="#">Manipal Institute of Technology</option>
              <option value="#">Marathwada Mitra Mandal's College of Engineering</option>
              <option value="#">MIT Academy of Engineering</option>
              <option value="#">MIT World Peace University</option>
              <option value="#">MIT-ADT University</option>
              <option value="#">MKSSS's Cummins College Of Engineering For Women</option>
              <option value="#">P.E.S. Modern College of Engineering</option>
              <option value="#">Padmabhooshan Vasantdada Patil Institute of Technology</option>
              <option value="#">Parul Institute of Technology, Parul University</option>
              <option value="#">Pimpri Chinchwad College of Engineering</option>
              <option value="#">Presidency University</option>
              <option value="#">Pune Institute of Computer Technology</option>
              <option value="#">Sardar Patel College of Engineering</option>
              <option value="#">Sardar Vallabhbhai National Institute of Technology (SVNIT)</option>
              <option value="#">Shri Guru Gobind Singhji Institute and Engineering and Technology</option>
              <option value="#">SRM Institute of Science and Technology, KTR Campus</option>
              <option value="#">St. Francis Institute of Technology</option>
              <option value="#">SVKM's Dwarkadas J Sanghvi College of Engineering</option>
              <option value="#">SVKM's NMIMS Mukesh Patel School of Technology Management and Engineering</option>
              <option value="#">U.V.PATEL College of Engineering,Ganppat University</option>
            </select>
            
            </form>
           </div>
          <table>
                    <thread>
                      <tr>
                    <th style="text-align:center">Task</th>
                    <th style="text-align:center">Score</th>
                    <th style="text-align:center">Time</th>
                     </tr>
                    </thread>
                    <tbody>
                      <tr>
                      <td>Piling</td>
                      <td><input type="number" class="form-control" id ="ps1" name="ps1" /></td>
                      <td><input type="number" class="form-control" id="pt1" name="pt1" /></td>
                      </tr>
                      <tr>
                      <td>Shooting</td>
                      <td><input type="number" class="form-control" id="S2" name="ss1" /></td>
                      <td><input type="number" class="form-control" id="T2" name="st1" /></td>
                      </tr>
                      <tr>
                      <td>Ball on Head</td>
                      <td><input type="number" class="form-control" id="S2" name="bs1" /></td>
                      <td><input type="number" class="form-control" id="T2" name="bt1" /></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

            <div class="row" style="margin-top:1%">
            <h3 style="text-align:center">Team 2</h3>
            <div>
            <form action="/action_page.php">
              <label for="team2" style="float:left;border:none">Team Name</label>
              <select id="team2" name="team2" style="width:70%;float:left">
              <option value="#" >A.C.Patil College of Engineering</option>
              <option value="#">A.D. Patel Institute of Technology</option>
              <option value="#">Ajay Kumar Garg Engineering College</option>
              <option value="#">Bannari Amman Institute of Technology (Team:ASSAULT)</option>
              <option value="#">Bannari Amman Institute of Technology (Team: NOVA)</option>
              <option value="#">Bannari Amman Institute of Technology (Team: Innovators)</option>
              <option value="#">Bannari Amman Institute of Technology (Team: ALPHA)</option>
              <option value="#">Bannari Amman Institute of Technology (Team: Vitality)</option>
              <option value="#">Birla Vishvakarma Mahavidyalaya</option>
              <option value="#">BRACT's Vishwakarma Institute of Technology</option>
              <option value="#">College of Engineering</option>
              <option value="#">College of Engineering</option>
              <option value="#">Fr. Conceicao Rodrigues College of Engineering,Mumbai</option>
              <option value="#">Fr. Conceicao Rodrigues Institute of Technology,Vashi</option>
              <option value="#">Government College of Engineering and Research Avasari Khurd</option>
              <option value="#">Government College of Engineering</option>
              <option value="#">Government Engineering College</option>
              <option value="#">Gujarat Technological University</option>
              <option value="#">Institute of Technology, Nirma University</option>
              <option value="#">JSPM Rajarshi shahu college of engineering</option>
              <option value="#">K.J. Somaiya Institute of Engineering and Information Technology</option>
              <option value="#">Kalinga Institute of Industrial Technology</option>
              <option value="#">KJ Somaiya College of Engineering</option>
              <option value="#">LD College of Engineering</option>
              <option value="#">LJ University</option>
              <option value="#">Mahindra University</option>
              <option value="#">Manipal Institute of Technology</option>
              <option value="#">Marathwada Mitra Mandal's College of Engineering</option>
              <option value="#">MIT Academy of Engineering</option>
              <option value="#">MIT World Peace University</option>
              <option value="#">MIT-ADT University</option>
              <option value="#">MKSSS's Cummins College Of Engineering For Women</option>
              <option value="#">P.E.S. Modern College of Engineering</option>
              <option value="#">Padmabhooshan Vasantdada Patil Institute of Technology</option>
              <option value="#">Parul Institute of Technology, Parul University</option>
              <option value="#">Pimpri Chinchwad College of Engineering</option>
              <option value="#">Presidency University</option>
              <option value="#">Pune Institute of Computer Technology</option>
              <option value="#">Sardar Patel College of Engineering</option>
              <option value="#">Sardar Vallabhbhai National Institute of Technology (SVNIT)</option>
              <option value="#">Shri Guru Gobind Singhji Institute and Engineering and Technology</option>
              <option value="#">SRM Institute of Science and Technology, KTR Campus</option>
              <option value="#">St. Francis Institute of Technology</option>
              <option value="#">SVKM's Dwarkadas J Sanghvi College of Engineering</option>
              <option value="#">SVKM's NMIMS Mukesh Patel School of Technology Management and Engineering</option>
              <option value="#">U.V.PATEL College of Engineering,Ganppat University</option>
            </select>
            </form>
            <br>
          </div>
        
          <table>
                    <thread>
                      <tr>
                    <th style="text-align:center">Task</th>
                    <th style="text-align:center">Score</th>
                    <th style="text-align:center">Time</th>
                     </tr>
                    </thread>
                    <tbody>
                      <tr>
                      <td>Piling</td>
                      <td><input type="number" class="form-control" id="S1" name="s1" /></td>
                      <td><input type="number" class="form-control" id="T1" name="t1" /></td>
                      </tr>
                      <tr>
                      <td>Shooting</td>
                      <td><input type="number" class="form-control" id="S2" name="s2" /></td>
                      <td><input type="number" class="form-control" id="T2" name="t2" /></td>
                      </tr>
                      <tr>
                      <td>Ball on Head</td>
                      <td><input type="number" class="form-control" id="S2" name="s2" /></td>
                      <td><input type="number" class="form-control" id="T2" name="t2" /></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <br>
                <?php if(isset($_GET['edit']) && $_GET['edit'] == 1) {?>
          <div class="text-center"><input type="submit" name="update" style="background:green; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;" value="Update"/></div>
        <?php } else {?>
          <div class="text-center"><input type="submit" name="submit" style="background:green; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;" value="Submit"/></div>
        <?php } ?>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background:#1f1f24">
    <div class="footer-top" style="background:#1f1f24; color:white; text-align:center">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" style="float:left">
          <img src="assets\img\tis.png" alt="TIS Logo" style="width:100%; height:100%; max-width:250px; max-height:150px; margin-top:3%"/>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
          <img src="assets\img\rlogo.png" alt="ROBOCON Logo" style="padding-top:50px"/>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
          </div>

          <div class="col-lg-3 col-md-6 footer-links" style="vertical-align: middle">
            <div class="social-links mt-3">
              <p>Follow Us</p>
              <a href="https://theinnovationstory.com/" target="_blank" class="instagram"><i class='bx bx-globe'></i></a>
              <a href="https://www.instagram.com/the_innovationstory/?igshid=YmMyMTA2M2Y=" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>       
              <a href="https://www.youtube.com/channel/UCqaGgSjjwN1xgZT7nbo-5QQ" target="_blank" class="google-plus"><i class="bx bxl-youtube"></i></a>
              <a href="https://www.linkedin.com/company/the-innovation-story/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <br>
            <p style="font-size:15px"><b>
              Email Id: reachout@theinnovationstory.com
            <br>
           Phone No: +91 - 9594074979
</b>
          </p>
          </div>
        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

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