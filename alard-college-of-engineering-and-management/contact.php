<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alard College Of Engineering</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Alard Pharmacy College">
    <meta name="keyword" content="Alard Pharmacy College">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="myimg/favicon.png" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
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
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
        <?php include 'anim.svg'; ?>
    </section>

    <!--SECTION START-->
    <section class="pt-30">
        <div class="container com-sp pad-bot-70 mb-40">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                    <div class="con-title">
                    <h2><span>Contact <b>Us</b></span></h2>
                </div>
                    </div>
                    <div class="pg-contact">
                        <div class="col-md-offset-2 col-md-4 new-con new-con1"> <img src="img/contact/1.png" alt="">
                            <h4>Address</h4>
                            <p>ALARD Knowledge Park, Survey No. 50, Hinjawadi Marunje, Near Rajiv Gandhi IT Park, Hinjewadi, Pune - 411 057.</p>
                        </div>
                        <div class="col-md-4 new-con new-con3"> <img src="img/contact/2.png" alt="">
                            <h4>CONTACT INFO:</h4>
                            <p> <a href="tel:9822437729" class="contact-icon"><b>Phone:</b> +91 9822437729</a>
                                <br> <a href="tel:+918411010602" class="contact-icon"><b>Mobile:</b> +91 8411010602</a>
                                <br> <a href="mailto:info@alardinstitutes.com" class="contact-icon"><b>Email:</b> info@alardinstitutes.com</a> </p>
                        </div>
                        <!-- <div class="col-md-4 new-con new-con4"> <img src="img/contact/3.png" alt="">
                            <h4>Social Media</h4>
                            <p> <a href="#">Website: www.mycompany.com</a>
                                <br> <a href="#">Facebook: www.facebook/my</a>
                                <br> <a href="#">Blog: www.blog.mycompany.com</a> </p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

    <section id="map">
        <div class="row contact-map">
            <!-- IFRAME: GET YOUR LOCATION FROM GOOGLE MAP -->
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8993.364098640015!2d73.72033440634337!3d18.608100178800917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x15613cd56d36ef28!2sAlard%20College%20of%20Engineering%20and%20Management!5e0!3m2!1sen!2sin!4v1611832996461!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="container">
                <div class="overlay-contact footer-part footer-part-form">
                    <!-- <div class="map-head">
                        <p>Inquiry Us</p>
                         </div> -->
                    <!-- ENQUIRY FORM -->
                    <form id="contact_form" name="contact_form" action="send.php">
                        <ul>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f1" value="" name="f1" placeholder="Name" required=""> </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f2" value="" name="f2" placeholder="Phone" required=""> </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f3" value="" name="f3" placeholder="City" required=""> </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f4" value="" name="f4" placeholder="Country" required=""> </li>
                            <li class="col-md-12 col-sm-12 col-xs-12 contact-input-spac">
                                <textarea id="f5" name="f5" required=""></textarea>
                            </li>
                            <li class="col-md-6">
                                <input type="submit" value="SUBMIT"> </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>