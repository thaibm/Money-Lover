<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Money Lover</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <?php 
    echo $this->HTML->css(array(
    'bootstrap/css/bootstrap.min.css',
    'font-awesome/css/font-awesome.min.css',
    'css/form-elements.css',
    'css/style.css'
    ));
    ?>


    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/form-elements.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

            <!-- Favicon and touch icons -->
        <!-- <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Money Lover</strong></h1>
                            <div class="description">
                            	<p>
                                  Personal finance with no stress, live the life you want!
                                  <strong></strong>  
                              </p>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-4"></div>
                    <!-- Login -->
                    <div class="col-sm-4">
                        <div class="form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Login to our site</h3>
                                    <p>Enter email and password:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                             <?php 
                             echo $this->fetch('content');
                             ?>
                         </div>
                     </div>

                     <!-- <div class="social-login">
                        <h3>...or login with:</h3>
                        <div class="social-login-buttons">
                     
                            <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                                <i class="fa fa-facebook"></i> Facebook
                            </a>
                     
                            <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                                <i class="fa fa-google-plus"></i> Google Plus
                            </a>
                     
                            <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                                <i class="fa fa-twitter"></i> Twitter
                            </a>
                     
                        </div>
                                         </div> -->

                </div>



                        <!-- <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div> -->
                        <!-- Sigup	 -->
                        
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>Made by <a href="#" target="_blank"><strong>VAT</strong></a> of 
        					UET - VNU</p>
                     </div>

                 </div>
             </div>
         </footer>

         <!-- Javascript -->
         <?php
         echo $this->HTML->script(array(
         'jquery-1.11.1.min.js',
         'bootstrap.min.js',
         'jquery.backstretch.min.js',
         'scripts.js'
         ));

         ?>
         <!-- <script src="assets/js/jquery-1.11.1.min.js"></script> -->
         <!-- <script src="assets/bootstrap/js/bootstrap.min.js"></script> -->
         <!-- <script src="assets/js/jquery.backstretch.min.js"></script> -->
         <!-- <script src="assets/js/scripts.js"></script> -->

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
            <![endif]-->

        </body>

        </html>