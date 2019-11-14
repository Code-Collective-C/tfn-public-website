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
            <img class="pull-left h1img" src="/images/win_icon.png"  alt=""/>
            <img class="pull-right h1arw" src="/images/green_chev.png"  alt=""/>
            <h1>Refuel2Win &ndash; rich rewards direct to your bottom line</h1>
        </div>
    </div>
    <p class="clearfix"></p>

</div>
<!-- HOME CARDS -->
 <div class="container">
    <div class="row">
        <article class="col-md-8">
            <div class="container">
                <p><img class="pull-right logopage" src="/images/refuel2win.png" alt="Refuel2Win"/><strong>Refuel2Win</strong> is TFN's customer <strong>appreciation  programme</strong> that rewards customers and drivers with <strong>extra benefits</strong>! </p>
                <ul type="disc">
                    <li>Apart from enjoying a <strong>great diesel price</strong>, you'll be richly <strong>rewarded</strong> for your <strong>loyalty</strong> and business. </li>
                    <li>The more you purchase, the <strong>higher you go </strong>up the loyalty ladder.</li>
                    <li>All customers – <strong>big and small</strong> – can earn the       rewards. </li>
                </ul>
<h4 class="cta">Register now to enjoy these fantastic benefits! </h4>


                <div class="container">
                    <div class="row dwlds">
                        <div class="col-md-6 bd">
                            <strong class="orgtxt">Download Brochure</strong>
                            <hr class="hrs" />
                            <a href="/downloads/Refuel2Win.pdf" target="_blank"><img class="img-fluid" src="/images/pdf.png" width="200" height="37" alt=""/></a>
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