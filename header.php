<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ) ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- build:css style.css -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<!-- endbuild -->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>

</head>

<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" role="navigation">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">n8g.com</a>
	    </div><!-- /.navbar-header -->

		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="index.html">index</a></li>
				<li><a href="post.html">post</a></li>
				<li><a href="category.html">category / archive</a></li>
<!-- -->				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">dropdown <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
				<li><a href="page.html">page</a></li>
				<li><a href="contact">contact</a></li>
			</ul>
		</div><!-- /.collapse navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav><!-- /.navbar navbar-default -->