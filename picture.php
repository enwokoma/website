<?php
include 'core/init.php';
protect_page();
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Gigabyte Developers Incorporated | Update Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="images/gigaicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <!-- <div class="codrops-top">
                <a href="">
                    <strong>&laquo; Previous Demo: </strong>Responsive Content Navigator
                </a>
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div> --><!--/ Codrops top bar -->
            <header>
                <a href="index"><h1>Gigabyte Developers Incorporated</h1></a>
				<!-- <nav class="codrops-demos">
					<span>Click <strong>"Join us"</strong> to see the form switch</span>
					<a href="index.html">Demo 1</a>
					<a href="index2.html">Demo 2</a>
					<a href="index3.html" class="current-demo">Demo 3</a>
				</nav> -->
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
<?php

?>
<h1>Update Profile</h1>

<?php
if (isset($_FILES['profile']) === true) {
	if (empty($_FILES['profile']['name']) === true) {
		echo 'Please choose a file';
	} else {
		$allowed = array('jpg', 'jpeg', 'png');
		
		$file_name = $_FILES['profile']['name'];
		$file_extn = strtolower(end(explode('.', $file_name)));
		$file_temp = $_FILES['profile']['tmp_name'];
		
		if (in_array($file_extn, $allowed) === true) {
			change_profile_image($session_user_id, $file_temp, $file_extn);
			echo 'Your profile picture has been updated';
			
		} else {
			echo 'Invalid picture format allowed:';
			echo implode(', ', $allowed);
		}
	}
}
?>

	<form action="" method="post" enctype="multipart/form-data">
			<p>
				<label for="profile" class="profile" gigabyte-icon="fa-picture" >Update Picture  Picture</label>
				<input type="file" name="profile" value="Select a valid picture" placeholder="Select a valid picture">
			</p>
			<p class="recover buttons">
				<input type="submit" value="Update Profile">
			</p>
	</form>