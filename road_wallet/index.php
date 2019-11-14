<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>TruckFuelNet</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
</head>

<body>

<!-- BANNER & NAV -->
 <?php require_once('../inc/banner.html') ?>
<!-- MARQUEE -->
<!-- iFrame content Gregg -->
    <div class="container scroller">
        <div class="row">
            <div class="col-md-3 pz-logo"><a href="/promo_zone/"><img src="/images/pixel.gif" width="100%" height="80" alt=""/></a></div>
            <div class="col-md-9 pp_info"><?php require("../iframe/price_project.html"); ?></div>
        </div>
    </div>
<!-- INTRO -->
<div class="container intro">
    <div class="row">
        <div class="col-lg-8 h1green align-middle">
            <img class="pull-left h1img" src="/images/wallet_icon.png"  alt=""/>
            <img class="pull-right h1arw" src="/images/green_chev.png"  alt=""/>
            <h1>Road Wallet &ndash; real-time on-road cost control</h1>
        </div>
    </div>
    <p class="clearfix"></p>

</div>
<!-- HOME CARDS -->
 <div class="container">
    <div class="row">
        <article class="col-md-8">
            <div class="container">
                <p><img class="pull-right logopage" src="/images/road_wallet.png" alt="RoadWallet"/>Introducing <strong>Road Wallet</strong>, our exclusive <strong>on-line</strong> function to help you <strong>plan</strong>, <strong>manage</strong>, <strong>administer</strong> and <strong>pay</strong> for  your driver on-road <strong>spending</strong>!</p>
                <ul type="disc">
                    <li>Puts you in <strong>full control</strong> of where, when and how       much <strong>your driver</strong> can spend <strong>on-road</strong>, removing the need to <strong>allocate cash</strong> or <strong>EFT</strong> travelling allowances. </li>
                    <li>Also includes <strong>real-time</strong> transaction reporting on <strong>all</strong> <strong>driver spending</strong>. </li>
                </ul>
<h4 class="cta">Register now to enjoy these fantastic benefits! </h4>


                <div class="container">
                    <div class="row dwlds">
                        <div class="col-md-6 bd">
                            <strong class="orgtxt">Download Brochure</strong>
                            <hr class="hrs" />
                            <a href="/downloads/RoadWallet.pdf" target="_blank"><img class="img-fluid" src="/images/pdf.png" width="200" height="37" alt=""/></a>
                        </div>
                        <div class="col-md-6">
                            <strong class="orgtxt">Watch Video</strong>
                            <hr class="hrs" />
                            <img class="img-fluid" src="/images/vid.png" width="200" height="37" alt=""/>
                        </div>
                    </div>
                </div>
            </div>







        </article>

  <!-- ASIDE -->

 <?php require_once('../inc/aside.html') ?>
    </div>
</div>

<!-- FOOTER -->
 <?php require_once('../inc/footer.html') ?>
 <?php include_once("../analyticstracking.php") ?>
    <script src="/js/jquery_3_3_1.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/popper.min.js"></script>
</body>
</html>