<!DOCTYPE html>
<html>
   <head>
      <title>Scale App, סקיילאפ - ניהול אורח חיים בריא</title>
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="UTF-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="css/style.css" />
      <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
      <link rel="stylesheet" type="text/css" href="css/animate.css" />
      <link rel="stylesheet" type="text/css" href="css/hover.css" />
      <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
      <link rel="icon" href="logo.png" type="image/gif" sizes="16x16">
   </head>
   <style>
      body {
         font-family: 'Assistant', sans-serif;
      }
       .media-left, .media>.pull-left {
          padding-left: 10px;
      }
      }
      .nav-tabs>li {
       float: right !important;
   }
   .tabbable-line > .nav-tabs > li {
       margin-left: 15px !important;
   }
   .scaleup ul {
       text-align: right;
       padding-right: 0 !important;
       direction: rtl;
   }
   </style>
   <body>

      <!-- header -->
      <div class="header-background">
         <nav class="navbar navbar-default mynav">
            <div class="container">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar top-bar"></span>
                  <span class="icon-bar middle-bar"></span>
                  <span class="icon-bar bottom-bar"></span>
                  </button>
                  <a href="/he"><img alt="Logo" src="images/logo.png" class="logo" /></a>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">

                     <?php
                     if ($_SERVER['REQUEST_URI'] == '/he/index.php' || $_SERVER['REQUEST_URI'] == '/he/') {
                        echo '
                           <li><a href="#whatisscaleapp">?מזה סקיילאפ</a></li>
                           <li><a href="#worlds">עולמות התוכן</a></li>
                           <li><a href="#recco">ממליצים</a></li>
                        ';   
                     }

                     ?>
                     
                     <li><a id="buynow" href="https://scale-app.com/he/purchase.php#response" class="btn btn-buyNow hvr-pulse-shrink">קנה עכשיו</a></li>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </nav>
         <div class="header-text">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-7 headerLeft wow fadeInLeft">
                     <h1 style="direction:rtl;">סקיילאפ גרסא 1.0 + <span class="block"></span>משקל חכם אלחוטי</h1>
                     <p style="direction:rtl;">Scale App: הצעה בלעדית ששווה לשקול
לרגל ההשקה: משקל חכם ואפליקציה תומכת במחיר מוזל של 75 ש"ח לחודש
למשך 12 חודשים במקום המחיר המלא של 175 לחודש.
</p>
                     <div class="row">
                        <div class="col-md-3 col-sm-4">
                           <h2>₪899</h2>
                        </div>
                        <div class="col-md-9 col-sm-8">
                           <h4><s>₪2,100</s></h4>
                           <p>השקה חד פעמית ומוגבלת</p>
                        </div>
                     </div>
                     <p>
                        <a href="https://scale-app.com/he/purchase.php#response" class="btn btn-buy hvr-pulse">קנה עכשיו</a>
                        <a href="#whatisscaleapp" class="btn btn-tryit hvr-pulse">קרא עוד</a>
                     </p>
                  </div>
                  <div class="col-md-6 col-sm-5 wow fadeInRight">
                     <div class="images-group">
                        <div class="iphone-images">
                           <div class="phone-screen">
                              <img alt="Home-iPhone" src="images/home-in-phone.png" class="img-in-phone" />
                           </div>
                           <img alt="iPhone" src="images/iphone.png" class="iphone" />
                        </div>
                        <img alt="tablet" src="images/tablet.png" class="tablet-img" />
                     </div>
                  </div>
               </div>
               <!-- row -->
            </div>
            <!-- container -->
         </div>
         <!-- header-text -->
      </div>