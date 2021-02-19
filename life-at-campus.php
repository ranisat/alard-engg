<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alard Education Institute</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="myimg/favicon.png" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/rani.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css/style-mob.css" rel="stylesheet" />
   
</head>

<body>


    <?php include 'header.php'; ?>

<section class="mysvg">
    <div class="head-2" id="lifeat">
        <div class="container">
            <div class="head-2-inn head-2-inn-padd-top">
                <h1>Life At Campus</h1>
            </div>
        </div>
    </div>
    <?php include 'anim.svg'; ?>
</section>
    
    <section>
        <div class="ab-es">
		  <div class="container pad-bot-70">
              <div class="row mt-40">
                 <div class="col-lg-12 col-md-12 col-xs-12">
                   <div class="life-campus">
                       <h3>Life at Campus :</h3>
                       <div class="life-content text-justify">
                           <p>The management,faculty members and staff at Alard college of pharmacy, are committed to develop a positive environment where a student enjoys and experiences the most memorable moments of campus life. Life at Alard is all about holistic development that eventually makes every student an evolved individual. </p>
                    </div>
                   </div>
                 </div>
                
                <div class="row">
                    <?php 
                      $l = array('1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg','9.jpg','10.jpg','11.jpg','12.jpg','13.jpg','14.jpg','15.jpg','16.jpg','17.jpg','18.jpg','19.jpg','20.jpg','21.jpg','22.jpg','23.jpg','24.jpg','27.jpg','26.jpg','25.jpg');
                      for($i=0; $i<count($l); $i++){
                    ?>
                    <div class="col-md-3 col-xs-12">
                       <div class="life-at-camp-img">
                           <img src="myimg/life-campus/<?php echo $l[$i]; ?>" alt="" class="img-responsive img-rounded">
                     </div>
                 </div>
                 <?php
                 }
                 ?>
                
              </div>

              <div class="col-lg-12 col-md-12 col-xs-12">
                   <div class="life-campus">
                       <h3>Achievements :</h3>
                       <div class="life-content text-justify">
                           <p>Our college is said to thrive when the faculty and students produce results that are visible. We are privileged to have suchStaff and student  achievements, which have shined in their endeavors and we are immensely proud of their accomplishment.This creates learning and working environments that inspires all to reach their goals and discover their unique capabilities.</p>
                    </div>
                   </div>
                 </div>
              </div>
            </div>
      </section>
	
    <!--SECTION START-->
  <?php include 'footer.php'; ?>

    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
    
</body>

</html>