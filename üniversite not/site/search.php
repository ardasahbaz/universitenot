<!DOCTYPE html>
<html lang="en">
<head>
    <title>404</title>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <meta name = "format-detection" content = "telephone=no" />
    <!--CSS-->
    <link rel="stylesheet" href="css/bootstrap.css" >
      <link rel="stylesheet" href="css/style.css">
    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="search/search.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/superfish.js"></script>
    <script>
    $(document).ready(function(){
        $().UItoTop({ easingType: 'easeOutQuart' });               
     });
    </script>
    
    <!--[if lt IE 9]>
    <link rel="stylesheet" media="screen" href="css/ie.css">
    <script src="docs-assets/js/ie8-responsive-file-warning.js"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
  <![endif]-->

</head>
<body>

<!--==============================header=================================-->
<header id="header"> 
    <div class="menu_block">
        <div class="container">
            <div class="row">
                <article class="col-lg-12">
                    <h1 class="navbar-brand navbar-brand_"><a href="index.html"><img src="img/logo.png" alt=""></a></h1>
                     <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
                        <ul class="nav sf-menu clearfix">
                            <li><a href="index.html">home</a>
                                <ul>
                                    <li><a href="#">Vestibulum iaculis</a></li>
                                    <li><a href="#"> Fusce euismod conuat</a>
                                        <ul>
                                            <li><a href="#">Pellentesque sed</a></li>
                                            <li><a href="#">Aliquam congue ferm</a></li>
                                            <li><a href="#">Mauris accum</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pellentesque</a></li>
                                </ul>
                            </li>
                            <li><a href="index-1.html">about</a></li>
                            <li><a href="index-2.html">Services</a></li>
                            <li><a href="index-3.html">Contacts</a></li>
                            <li><a href="index-4.html">Blog</a></li>
                        </ul>
                    </nav>    
                </article>
            </div>
        </div>
    </div>    
</header>
<div class="main_bg">
<div class="h_bot">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="h_phone">
                    <span><span class="fa fa-phone"></span>(800) 3451-9562</span>
                    Lowest storage prices. Guaranteed.
                </div>
                <form id="search" action="search.php" method="GET">
                    <div class="rel">
                    <label>
                      <input type="text" name="s" value="search the site"
                       onblur="if (this.value == '') {this.value = 'search the site';}"    
                       onfocus="if (this.value == 'search the site') {this.value = '';}">
                    </label>
                    <a onClick="document.getElementById('search').submit()" class="fa fa-search"></a>
                    </div>
                     <div class="clear"></div>
                </form>
                <div class="clear"></div>
                <div class="h_hor"></div>
            </div>
         </div>
    </div>
</div>    

<!-- ___________________Content_____________________ -->
<div id="content" class="prv">
    <div class="container">
        <div class="row">
            <article class="col-lg-12 col-md-12 col-sm-12">
                <h3>Search result:</h3>
                <div id="search-results"></div>
            </article>
         </div>   
    </div>
</div>
<!-- Footer -->
</div>
<footer>
<div class="f_top">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <h4>Products</h4>
                <ul>
                    <li><a href="#">Vestibulum</a></li>
                    <li><a href="#">Culis lacinia</a></li>
                    <li><a href="#">Proin dictum</a></li>
                    <li><a href="#">Fusce euismod</a></li>
                    <li><a href="#">Consequat</a></li>
                    <li><a href="#">Adipiscing elit</a></li>
                </ul>
                <h4>our Solutions</h4>
                <ul>
                    <li><a href="#">Sed ut perspiciatis unde</a></li>
                    <li><a href="#">Omnis iste natus</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <h4>Technology</h4>
                <ul>
                    <li><a href="#">Vatus error sivolu</a></li>
                    <li><a href="#">Tatem accus</a></li>
                </ul>
                <h4>Information</h4>
                <ul>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Clients</a></li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">Reseller</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
            <div class="none"></div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">New Services</a></li>
                    <li><a href="#">Recent Projects</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
                <div class="soc">
                <h4>Follow us</h4>
                    <ul class="">
                        <li>
                            <div class="fa fa-google-plus"></div>
                            <a href="#">Google +</a>
                        </li>
                        <li>
                            <div class="fa fa-twitter"></div>
                            <a href="#">Twitter</a>
                        </li>
                        <li>
                            <div class="fa fa-facebook"></div>
                            <a href="#">Facebook</a>
                        </li>
                        <li>
                            <div class="fa fa-linkedin"></div>
                            <a href="#">LinkedIn</a>
                        </li>
                        <li>
                            <div class="fa fa-rss"></div>
                            <a href="#">RSS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3  col-xs-6 alright">
                <h4>Contact</h4>
                <address>
                Telephone:   +1 959 603 6035 <br>
                FAX:            + 1 504 889 9898 <br>
                E-mail: <a href="#">mail@demolink.org</a>
                </address>
                <h4>Headquarter</h4>
                8901 Marmora Road <br>
                Glasgow, DO4 89GR.
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a href="index.html" class="f_logo"><img src="img/f_logo.png" alt=""></a>
            <div class="copy">
            Self Storage CO. Theme &copy; <span id="copyright-year"></span>  <a href="index-5.html">Privacy policy</a>
            <ul>
                <li><a href="#">Sed ut</a>&nbsp; |</li>
                <li><a href="#">Perspiciatis unde</a>&nbsp; |</li>
                <li><a href="#">Omnis iste natus</a>&nbsp; |</li>
                <li><a href="#">Sit voluptatem</a>&nbsp; |</li>
                <li><a href="#">Accusantium</a>&nbsp; |</li>
                <li><a href="#">Doloremque laudantium</a></li>
            </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
</body>
</html>