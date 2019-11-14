<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>TruckFuelNet</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">   
    <link rel="stylesheet" type="text/css" href="css/custom.css">    
</head>

<body>
    
<!-- BANNER & NAV -->
 <?php require_once('inc/banner.html') ?>   
<!-- MARQUEE -->
<!-- iFrame content Gregg -->
    <div class="container scroller">
        <div class="row">
            <div class="col-md-3 pz-logo"><a href="promo_zone.php"><img src="images/pixel.gif" width="100%" height="80" alt=""/></a></div>
            <div class="col-md-9 pp_info"><?php require("iframe/price_project.html"); ?></div>
        </div>
    </div>    
<!-- INTRO -->
<div class="container intro">
    <div class="row">
        <div class="col-lg-8 h1green align-middle">
            <img class="pull-left h1img" src="images/promo_icon.png"  alt=""/>
            <img class="pull-right h1arw" src="images/green_chev.png"  alt=""/>
            <h1>Your area for daily discounts on fuel and more!</h1>
        </div>
    </div>
    <p class="clearfix"></p>

</div>    
<!-- HOME CARDS -->
 <div class="container">
    <div class="row">
        <article class="col-md-8">
            <div class="container">
              <p><img class="pull-right logopage" src="images/promozone_alt.png" alt="Refuel2Win"/>PromoZone  is the area where we feature <strong>exciting  additional discounts</strong> on fuel and service costs. You <strong>never know</strong> what you <strong>might  find</strong>, so be sure to check it out <strong>every  day</strong>. </p>
                <ul type="disc">
                    <li><strong>Save between 5 - 40cpl</strong> on fuel!</li>
                    <li>Promotion <strong>discounts</strong> also available on <strong>truck stop driver services</strong>.</li>
                    <li>Only available at <strong>TFN Refuel2Save</strong> sites.</li>
                    <li><a style ="color:#F47321" href="https://app.tfn.co.za/Application/Promotions/frmPromoZone.aspx" target="_blank"><strong>View</strong></a> all <strong>PromoZone</strong> promotions</li>
                </ul>
<h4 class="cta">Register now to enjoy these fantastic benefits! </h4>
                
                
                <div class="container">
                    <div class="row dwlds">
                        <div class="col-md-6 bd">
                            <strong class="orgtxt">Watch Video</strong>
                            <hr class="hrs" />
                            <a href="#" data-toggle="modal" data-target="#promozone"><img class="img-fluid" src="images/vid.png" width="200" height="37" alt=""/> 
                                                   
                        </div>
                        <div class="col-md-6">
                            <!--
<strong class="orgtxt">Download Brochure</strong>
                            <hr class="hrs" />
                            <img class="img-fluid" src="images/pdf.png" width="200" height="37" alt=""/> 
-->
                        </div>
                    </div>
                </div>
            </div>
            
            
              
            
            
          
            
        </article>

  <!-- ASIDE -->      
      
 <?php require_once('inc/aside.html') ?>   
    </div>
</div>

<!-- FOOTER -->
 <?php require_once('inc/footer.html') ?>  
 <?php include_once("analyticstracking.php") ?>
 <?php require_once('inc/vid_promozone.html') ?>   
    <script src="js/jquery_3_3_1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
     <script>
     $(function(){
    $('#promozone').modal({
        show: false
    }).on('hidden.bs.modal', function(){
        $(this).find('video')[0].pause();
    });
});
     </script>
</body>
</html>