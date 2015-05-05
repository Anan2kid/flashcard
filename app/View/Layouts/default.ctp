<!DOCTYPE html>
<html> 
<head>     
	<?php echo $this->Html->charset(); ?>     
	<meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=no">
	<title><?php echo $title_for_layout; ?></title>     
	<?php     
		echo $this->Html->css('bootstrap/css/bootstrap.css');
        echo $this->Html->css('style.css');
        echo $this->Html->css('light-box/bootstrap-lightbox.css');
        echo $this->Html->css('bootcards-desktop.css');

		echo $this->fetch('meta');     
		echo $this->fetch('css');     
	?> 
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
	<meta charset="utf-8">
	<title>The Flash Card</title>
	<meta name="generator" content="Bootply">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="/bootstrap/img/favicon.ico">
	<link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">
<!--	<link rel="stylesheet" media="screen" href="bootstrap/css/bootstrap.css">-->
<!--	<link rel="stylesheet" media="screen" href="bootstrap/css/style.css">   -->
	<style type="text/css">
		@import url(http://fonts.googleapis.com/css?family=Droid+Sans+Mono);

		html,body {
		  height: 100%;
		  font-family: 'Droid Sans Mono', sans-serif;
		}

		p,h1,h2,h3,h4 {
		  font-family: 'Droid Sans Mono', sans-serif;
		}

		hr {
		  border-color:#191919;
		}

		/* wrapper for page content to push down footer */
		.page-container {
		  min-height: 100%;
		  height: auto !important;
		  height: 100%;
		  /* negative indent footer by its height */
		  margin: 0 auto -120px;
		  /* pad bottom by footer height */
		  padding: 0 0 120px;
		}

		/* set the fixed height of the footer here */
		footer {
		  height: 120px;
		  background-color: #222222;
		  border:0 solid #080808;
		  border-top-width: 1px;
		  margin-top:50px;
		}

		footer > .container {
		  padding: 20px;
		}

		body {
		  padding-top: 51px; 
		  background: #1E1E1E;
		  color: #f9f9f9;
		}
		a {
		  color:#bcbcbc;
		}
		.text-center {
		  padding-top: 20px;
		}

		#sidebar {
		  height: 100%;
		  padding-right: 0;
		  padding-top: 20px;
		}

		#sidebar .affix {
		  position:fixed;
		  top:55;
		  width:220px;
		}

		#sidebar .affix-bottom {
		  position:fixed;
		  top:55;
		  width:220px;
		}

		#sidebar .nav {
		  width: 95%;
		}
		#sidebar li {
		  border:0 #1e1e1e solid;
		  border-bottom-width:1px;
		}
		#sidebar li a {
		  padding-left:1px;
		}
		#sidebar li a:hover {
		  background-color:#222222;
		  color:#ffffff;
		}

		/* collapsed sidebar styles */
		@media screen and (max-width: 767px) {
		  .row-offcanvas {
		    position: relative;
		    -webkit-transition: all 0.25s ease-out;
		    -moz-transition: all 0.25s ease-out;
		    transition: all 0.25s ease-out;
		  }
		  .row-offcanvas-right
		  .sidebar-offcanvas {
		    right: -41.6%;
		  }

		  .row-offcanvas-left
		  .sidebar-offcanvas {
		    left: -41.6%;
		  }
		  .row-offcanvas-right.active {
		    right: 41.6%;
		  }
		  .row-offcanvas-left.active {
		    left: 41.6%;
		  }
		  .sidebar-offcanvas {
		    position: absolute;
		    top: 0;
		    width: 41.6%;
		  }
		  #sidebar {
		    background-color:#3b3b3b;
		    padding-top:0;
		  }
		  #sidebar .nav>li {
		    color: #ddd;
		    background: linear-gradient(#3E3E3E, #383838);
		    border-top: 1px solid #484848;
		    border-bottom: 1px solid #2E2E2E;
		    padding-left:10px;
		  }
		  #sidebar .nav>li:first-child {
		    border-top:0;
		  }
		  #sidebar .nav>li>a {
		    color: #ddd;
		  }
		  #sidebar .nav>li>a>img {
		    max-width: 14px;
		  }
		  #sidebar .nav>li>a:hover, #sidebar .nav>li>a:focus {
		    text-decoration: none;
		    background: linear-gradient(#373737, #323232);
		    color: #fff;  
		  }
		  #sidebar .nav .caret {
		    border-top-color: #fff;
		    border-bottom-color: #fff;
		  }
		  #sidebar .nav a:hover .caret{
		    border-top-color: #fff;
		    border-bottom-color: #fff;
		  }
		}

		/* theme */
		.btn,.form-control,.alert,.progress,.panel,.list-group,.well,.list-group-item:first-child {border-radius:1px;box-shadow:0 0 0;}
		.btn {border-color:transparent;}
		.btn-default,.well {
		  background-color:#cccccc;
		  border-color:#c0c0c0;
		}
		.btn-primary,.label-primary,.list-group-item.active,.list-group-item.active:hover,.list-group-item.active:focus,.btn.active,a.list-group-item.active, a.list-group-item.active:hover, a.list-group-item.active:focus {
		   background-color:#0099CC;
		   border-color:transparent;
		}
		.btn-info,.label-info,.progress-bar-info {
		  background-color:#33b5e5;
		}
		.btn-success,.label-success,.progress-bar-success {
		  background-color:#669900;
		}
		.btn-danger,.label-danger,.progress-bar-danger {
		  background-color:#FF4444;
		}
		.btn-warning,.label-warning,.progress-bar-warning {
		  background-color:#FFBB33;
		  color:#444444;
		}
		.nav-tabs>li>a {
		  border-radius:0;
		}
		     

		.panel hr {
		   border-color:#efefef;
		}
	</style>
	<script id="_carbonads_projs" type="text/javascript" src="//srv.carbonads.net/ads/C6AILKT.json?segment=placement:bootplycom&amp;callback=_carbonads_go"></script>
</head> 
<body>     
    <?php     
    	echo $this->Html->script('jquery/jquery-2.1.3.js');     
        echo $this->fetch('script');



        //echo $this->element('slidebar');
    ?>
    <script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>      
        <script type="text/javascript">    
            $(document).ready(function() {

                $('[data-toggle=offcanvas]').click(function() {
                    $('.row-offcanvas').toggleClass('active');
                });

                $('.btn-toggle').click(function() {
                  $(this).find('.btn').toggleClass('active').toggleClass('btn-default').toggleClass('btn-primary');
                });
            });
        </script>
        
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-40413119-1', 'bootply.com');
          ga('send', 'pageview');
        </script>

        
         <div id="content" class="panel-body">
             <?php echo $this->Session->flash(); ?>
             <?php echo $this->fetch('content'); ?>
         </div>
</body>

<footer><!--footer-->
  <div class="jumbotron" style="background-color:black">
  <div class="container">
    <h1 >The Flash Card</h1>
    <h1 ><?php echo $allCategories[0]['Category']['name']; ?></h1>

    <p>Copyright at Webservices and Technologies, 2015.</p>
  </div>
</div>
</footer> 
</html> 