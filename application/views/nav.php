<head>
<link rel="icon" 
      type="image/png" 
      href="<?= base_url();?>/assets/events/j.jpg">
       
<link href="<?=base_url()?>/assets/nav.css" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script src="./assets/nav.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>

    <div id="wrapper">
     
        <!-- Sidebar -->
        <nav class="navbar  navbar-fixed-top navbar-inverse" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       Shopping 
                    </a>
                </li>
                <li>
                    <a href="<?= base_url();?>/main">HOME</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">JEWELLERY<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header"></li>
                    <li><a href="<?= base_url();?>/upload">&nbsp &nbsp UPLOAD</a></li>
                    <li><a href="<?= base_url();?>/view">&nbsp &nbsp VIEW</a></li>
                    
                  </ul>
                </li>
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">STOCK<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
				  <li class="dropdown-header"></li>
                    <li><a href="<?= base_url();?>/stock">&nbsp &nbsp CURRENT VIEW</a></li>
                   
                  </ul>
                </li>
                <li>
                    <a href="<?= base_url();?>/search">OPTIMISED SEARCH</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">REPORT<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header"></li>
                    <li><a href="<?= base_url();?>/report">&nbsp &nbsp FEEDBACK REPORT</a></li>
                    
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">DEAL<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header"></li>
                    <li> <a href="<?= base_url();?>/deals">&nbsp UPLOAD DEAL</a></li>
                    <li><a href="<?= base_url();?>/deal"> &nbspVIEW DEAL PRODUCTS</a></li>
                    
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="<?= base_url();?>/offer">OFFER</a>
                 
                </li>
				
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">ANNOUNCEMENT<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header"></li>
                    <li><a href="<?= base_url();?>/announcement">&nbsp &nbsp ADD ANNOUNCEMENT</a></li>
                    <li><a href="<?= base_url();?>/announcementview">&nbsp &nbsp VIEW</a></li>
                    
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">SLIDER<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header"></li>
                    <li><a href="<?= base_url();?>/slider">&nbsp &nbsp ADD SLIDER</a></li>
                    <li><a href="<?= base_url();?>/sliderview">&nbsp &nbsp VIEW</a></li>
                    
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">BLOCKS LIST<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header"></li>
                    <li><a href="<?= base_url();?>/blocklist">&nbsp &nbsp ADD BLOCKS</a></li>
                    <li><a href="<?= base_url();?>/viewblock">&nbsp &nbsp VIEW</a></li>
                    
                  </ul>
                </li>
                <li>
                    <a href="<?= base_url();?>/top_images">TOP IMAGES</a>
                </li>

				<li>
                    <a href="<?= base_url();?>/orders">ORDERS</a>
                </li>
                <li>
                    <a href="<?= base_url();?>/aboutus">ABOUT US</a>
                </li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">SETTINGS<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header"></li>
                    <li><a href="<?= base_url();?>/admindetails">&nbsp &nbsp MODIFY DETAILS</a></li>
                    <li><a href="<?= base_url();?>/adminpassword">&nbsp &nbsp CHANGE PASSWORD</a></li>
                    
                  </ul>
                </li>
                
                <li>
                    <a href="<?= base_url();?>/logout">LOGOUT</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
			
            
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script>
$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });
});



</script>
	
	