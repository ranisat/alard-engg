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
                    <h1>Department of Computer Engineering</h1>
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
                    <div class="col-md-12">
                        <div class="course-title">
                            <h3>Department of Computer Engineering:</h3>
                        </div>
                        <div class="article-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Faculty Photo</th>
                                            <th>Name of Faculty</th>
                                            <th>Designation</th>
                                            <th>Qualification</th>
                                            <th>Experience in Years</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $a =0;
                                         $h = array('1','2','3','4','5','6','7','8','9','10','11');

                                         $f = array('f-1.png','f-2.png','f-3.png','f-4.png','f-5.png','f-6.png','f-7.png','f-8.png','f-9.png','f-11.png','f-12.png');

                                         $s = array('Prof. Zarina Shaikh','Dr.  Nitika Singhi','Prof. Bhavani Veermani','Prof. Chetana Baviskar','Prof. Vanita Agrawal','Prof. Trupti Tekale','Prof. Roshni Kharche','Prof. Swapnil Wagh','Prof. Smita Khade','Prof. Somya Rastogi','Mr. Pradip Avad');
                                         
                                         $d = array('HOD, Assistant Professor','Assistant Professor','Assistant Professor','Assistant Professor','Assistant Professor','Assistant Professor','Assistant Professor','Assistant Professor','Assistant Professor','Assistant Professor','Assistant to System Admin');


                                         $y = array('ME','Ph.D ','ME','ME','ME','ME','ME','M. Tech','PhD Pursuing','M. Tech','Computer Hardware Networking,  M.A. Appear');

                                         $q = array('13','11 ','4.5','5.8','7.5','6.5','4','4.6','10.5','2.3','6');


                                         foreach ($h as $k) {
                                        ?>
                                        <tr>
                                            <td><?php echo $a+1; ?></td>
                                            <td><img src="my-img/department/<?= $f[$a]; ?>"></td>
                                            <td><?= $s[$a]; ?></td>
                                            <td><?= $d[$a]; ?></td>
                                            <td><?= $y[$a]; ?></td>
                                            <td><?= $q[$a]; ?></td>
                                        </tr>  
                                        <?php
                                          $a++; }
                                        ?>
                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

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