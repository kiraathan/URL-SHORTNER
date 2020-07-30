
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<!--[if IE]><![endif]-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title></title>
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<!-- !CSS -->
	<link rel="stylesheet" href="/css/style.css?v=1">
</head>
<!-- !Body -->
<body>
	<div id="container">
		<h1>URL Shortener</h1>
		<section id="main">
		<?php

$this->load->helper('form');

echo form_open();
echo form_label('URL to Shorten', 'url');
echo form_input('url');
echo form_submit('shorty','Get Shorty');
echo form_close();

if(isset($short_url))
{
	echo '<a href="'.base_url().$short_url.'" target="_blank" class="shorty_url">'.base_url().$short_url.'</a>';
}

if(isset($error))
{
	echo '<div class="errors">'.$error.'</div>';
}
?>

		</section><!-- /main -->

	</div><!--!/#container -->
</body>
</html>
