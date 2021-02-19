<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alard College Of Engineering</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword"
        content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="myimg/favicon.png" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700"
        rel="stylesheet">
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
    <link href="css/sheder.css" rel="stylesheet">
    <link href="css/rani2.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">



</head>

<body>


    <?php include 'header.php'; ?>

    <section class="mysvg">
        <div class="head-2" id="place_act">
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1>Activities</h1>
                </div>
            </div>
        </div>
        <?php include 'anim.svg'; ?>
    </section>


    <!-- sec 0 -->
    <section>
        <div class="ab-es">
            <div class="container infra-com">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <p>Imparting outcome and skill-based Technical education  that leads to the acquisition of knowledge and skills necessary to achieve career advancement, personal development, leadership, and service to mankind.</p>
                    </div>
                </div>
                   <?php
                    $y = array ('act-1.jpg','act-2.jpg','act-3.jpg','act-4.jpg','act-5.jpg','act-6.jpg','act-7.jpg','act-9.jpg','act-10.jpg');
                     for ($i=0; $i < count($y) ; $i++) { 
                     
                   ?>
              
                    <div class="col-md-4 col-xs-12">
                       <div class="act-img">
                           <img src="my-img/<?php echo $y[$i]; ?>" alt="" class="img-responsive center-block">
                       </div>
                    </div>
                    <?php
                      }
                     ?>
             

            </div>
        </div>
    </section>


    <!--SECTION START-->
    <?php include 'footer.php'; ?>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        loop: true,
                        autoslide: true

                    },
                    600: {
                        items: 3,
                        loop: true,
                        autoslide: true

                    },
                    1000: {
                        items: 5,
                        loop: true,
                        autoslide: true
                    }
                }
            })

        });
    </script>
</body>

</html>