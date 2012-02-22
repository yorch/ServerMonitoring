<?php
/**
 * Server Monitoring
 *
 * Based on the work of Martin Dixon (Tutorial-Resource.com)
 *
 *
 * Copyright (C) 2012 Jorge Barnaby
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom
 * the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or
 * substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
 * PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE
 * FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
 * OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 * @author     Jorge Barnaby <jorge.barnaby at gmail.com>
 * @version    SVN: $Id$
 */

$title = "Server Monitoring";
$description = "";

# Get our Bootstrap file.
require_once("ss_bootstrap.php");
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">

		<!-- Use the .htaccess and remove these lines to avoid edge case issues.
			More info: h5bp.com/i/378 -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php echo $title; ?></title>
		<meta name="description" content="<?php echo $description; ?>">
		<meta name="author" content="Jorge Barnaby">
		
		<!-- Mobile viewport optimized: h5bp.com/viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Le styles -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.css">
		
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
		
		<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

		<!-- All JavaScript at the bottom, except this Modernizr build.
		Modernizr enables HTML5 elements & feature detects for optimal performance. -->
		<script src="js/libs/modernizr-2.5.2.min.js"></script>
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="#"><?php echo $title; ?></a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
						<p class="navbar-text pull-right">
							Logged in as <a href="#">username</a>
						</p>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span3">
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							<li class="nav-header">
								Sidebar
							</li>
							<li class="active">
								<a href="#">Link</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
							<li class="nav-header">
								Sidebar
							</li>
							<li>
								<a href="#">Link</a>
							</li>
						</ul>
					</div><!--/.well -->
				</div><!--/span-->
				<div class="span9">
					<?php foreach ($servers as $server) { ?>
					<div class="row-fluid">
						<div class="span9">
							<h2>Server Status for <?php echo $server->hostname; ?></h2>
							<table>
								<tr>
									<th>Service</th>
									<th>Status</th>
								</tr>
								<?php foreach ($server->services as $service) { ?>
								<tr>
									<td><?php echo $service->FullName(); ?></td>
									<td><?php echo $service->TextStatus(); ?></td>
								</tr>
								<?php } ?>
							</table>
						</div>
					<?php } ?>
					</div>
				</div><!--/span-->
			</div><!--/row-->
			<hr>
			<footer>
				<p>
					&copy; Graphium.Net 2012
				</p>
			</footer>
		</div><!--/.fluid-container-->
		
		<!-- JavaScript at the bottom for fast page loading -->
		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
		<!-- scripts concatenated and minified via build script -->
		<script src="js/libs/bootstrap.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/script.js"></script>
		<!-- end scripts -->
	</body>
</html>