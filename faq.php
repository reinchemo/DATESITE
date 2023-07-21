<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Matrimony | Faq :: Matrimony
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">FAQ</li>
     </ul>
   </div>
   <dl class="faq-list">
	<dt class="faq-list_h">
	<h4 class="marker">Q?</h4>
	<h4>How does the matching algorithm work?</h4>
	</dt>
	<dd>
	<h4 class="marker1">A.</h4>
	<p class="m_4">Our matching algorithm is designed to connect you with potential matches based on various factors, including your interests, preferences, and location. When you create your profile, you'll provide information about yourself and the type of person you're looking for. Our smart algorithm then analyzes this data to suggest compatible profiles, increasing the likelihood of finding someone who shares your values and interests.</p>
	</dd>
	<dt class="faq-list_h">
	<h4 class="marker">Q?</h4>
	<h4>Is my personal information secure?</h4>
	</dt>
	<dd>
	<h4 class="marker">A.</h4>
	<p class="m_4">Yes, absolutely! We take your privacy and security seriously. All your personal information, such as your email, phone number, and location, is kept confidential and will never be shared with third parties without your consent. We use industry-standard encryption and security measures to safeguard your data, ensuring a safe and secure dating experience</p>
	</dd>
	<dt class="faq-list_h">
	<h4 class="marker">Q?</h4>
	<h4>How can I report or block a user?</h4>
	</dt>
	<dd>
	<h4 class="marker">A.</h4>
	<p class="m_4">Your safety is our priority. If you encounter any suspicious or inappropriate behavior from another user, you can easily report them through their profile or conversation page. Just click on the "Report" button, and our support team will review the issue promptly. If you wish to block a user to prevent further interactions, you can do so by accessing their profile and selecting the "Block User" option. This will ensure that the user can no longer contact you on the platform..</p>
	</dd>

	
  </div>
</div>


<?php include_once("footer.php");?>

