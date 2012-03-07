<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Active {$page|default:''}</title>
<!--
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<link type="text/css" href="jquery-ui/css/ui-lightness/jquery-ui-1.8.18.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="jquery-ui/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery-ui/js/jquery-ui-1.8.18.custom.min.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="{$javascript|default:''}"></script>
{$heading|default:''}
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="banner">
				<div id="logo"><a href="homepage"></a></div>
				<h1><a href="#">Active</a></h1>
				<p>Where being active really counts</p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li {if $page eq 'Homepage'}class="current_page_item"{/if}><a href="Homepage">Homepage</a></li>
				<li {if $page eq 'Users'}class="current_page_item"{/if}><a href="Users">Users</a></li>
				<li {if $page eq 'Workouts'}class="current_page_item"{/if}><a href="Workouts">Workouts</a></li>
				<li {if $page eq 'Activities'}class="current_page_item"{/if}><a href="Activities">Activities</a></li>
				<li {if $page eq 'About'}class="current_page_item"{/if}><a href="About">About</a></li>
				<li {if $page eq 'Links'}class="current_page_item"{/if}><a href="Links">Links</a></li>
				<li {if $page eq 'Contact'}class="current_page_item"{/if}><a href="Contact">Contact</a></li>
			</ul>
		</div>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="page-content">
					<div id="content">
						{$content}						
						<div id="clear"></div>
					</div>
					<!-- end #content -->
					<div id="sidebar">
						<ul>
							{$menu|default:''}						
						</ul>
					</div>
					<!-- end #sidebar -->
				</div>
				<div id="clear"></div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) 2012 Active.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/"> CSS Templates</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
