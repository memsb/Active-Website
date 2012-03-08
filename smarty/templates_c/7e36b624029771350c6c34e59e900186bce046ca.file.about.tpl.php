<?php /* Smarty version Smarty-3.1.7, created on 2012-03-08 20:37:58
         compiled from "smarty/templates/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10284913064f57cf0e177182-14584923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e36b624029771350c6c34e59e900186bce046ca' => 
    array (
      0 => 'smarty/templates/about.tpl',
      1 => 1331239035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10284913064f57cf0e177182-14584923',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f57cf0e282dc',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f57cf0e282dc')) {function content_4f57cf0e282dc($_smarty_tpl) {?><div class="post">
	<h2 class="title">Active Development</h2>
	<p class="meta">Posted by <a href="mailto:mbuckley@gmail.com">Martin</a> on 8th March 2012</p>
	<div class="entry">
		<p>This website was developed to demo the Exerciser web service for logging and tracking events online. The site allows users to register, manage their details and submit / edit workouts. Basic usage statistics are compiled and displayed for the user. The site is open source and is available via GitHub.<br/>
		<a href="https://github.com/memsb/Active-Website">Active-Website GitHub page</a>
		</p>
	</div>
</div>

<div class="post">
	<h2 class="title">Exerciser Development</h2>
	<p class="meta">Posted by <a href="mailto:mbuckley@gmail.com">Martin</a> on 8th March 2012</p>
	<div class="entry">
		<p>The exerciser web service was developed as an example of a RESTful web service. It was developped using the MVC architecture using multiple views to support YAML, XML and JSON data formats. The site is open source and is available via GitHub.<br/>
	<a href="https://github.com/memsb/Active-Website">Active-Website GitHub page</a>
		</p>
	</div>
</div>
<div class="post">
	<h2 class="title">Site Technology</h2>
	<p class="meta">Posted by <a href="mailto:mbuckley@gmail.com">Martin</a> on 8th March 2012</p>
	<div class="entry">
		<div class="about">
			<h3>Server Side Coding</h3>
			<div class="about-info">				
				<div class="about-img">
					<a href="http://www.php.net/"><img src="images/php-logo.gif"/></a>
				</div>
				<div class="about-link">
					<a href="http://www.php.net/">php.net</a>
				</div>
			</div>
			<p>Server side coding was done in PHP 5.3.5. The code uses an Model-View-Controller (MVC) architecture to break the design into reusable elements. Views are provided using templated HTML together with inserted variables using the Smarty library. The site makes use of a RESTful web service also programmed in PHP and accessed using cURL.</p>
		</div>
		<div class="about">
			<h3>Content Templates</h3>
			<div class="about-info">				
				<div class="about-img">
					<a href="http://www.smarty.net/"><img src="images/smarty-logo.png"/></a>
				</div>
				<div class="about-link">
					<a href="http://www.smarty.net/">smarty.net</a>
				</div>
			</div>
			<p>The Smarty library provides a simple way to seperate template text from back end code. The templates may be loaded and variables assigned to produce the final page view.</p>
		</div>
		<div class="about">
			<h3>RESTful API</h3>
			<div class="about-info">				
				<div class="about-img">
					<a href="http://peej.github.com/tonic/"><img src="images/tonic-logo.png"/></a>
				</div>
				<div class="about-link">
					<a href="http://peej.github.com/tonic/">peej.github.com/tonic</a>
				</div>
			</div>
			<p>REST is a method of making a web API availale similar to XML-RPC or SOAP. Rest is stateless and uses HTTP methods to pass data back and forth such as GET, POST, PUT & DELETE. Security is implemented using an API key and Basic Auth. XML, JSON & YAML are all supported data types, though this site operates using XML.</p>
		</div>
		<div class="about">
			<h3>Page Design</h3>
			<div class="about-info">				
				<div class="about-img">
					<a href="http://www.freecsstemplates.org/"><img src="images/free-css-templates-logo.png"/></a>
				</div>
				<div class="about-link">
					<a href="http://www.freecsstemplates.org/">freecsstemplates.org</a>
				</div>
			</div>
			<p>The basic site design comes from Free CSS Templates, however this has been revised to accomodate new features and content.</p>
		</div>
		<div class="about">
			<h3>Database</h3>
			<div class="about-info">				
				<div class="about-img">
					<a href="http://www.mysql.com/"><img src="images/mysql-logo.png"/></a>
				</div>
				<div class="about-link">
					<a href="http://www.mysql.com/">mysql.com</a>
				</div>
			</div>
			<p>The site is powered by a relational mySQL database.</p>
		</div>
		<div class="about">
			<h3>Javascript</h3>
			<div class="about-info">				
				<div class="about-img">
					<a href="http://jquery.com/"><img src="images/jquery-logo.gif"/></a>
				</div>				
				<div class="about-link">
					<a href="http://jquery.com/">jquery.com</a>
				</div>
			</div>
			<p>Javascript events and AJAX are powered using jQuery.</p>
		</div>
		<div class="about">
			<h3>Interactive Charts</h3>
			<div class="about-info">				
				<div class="about-img">
					<a href="http://code.google.com/apis/chart/"><img src="images/google-chart-logo.png"/></a>
				</div>
				<div class="about-link">
					<a href="http://code.google.com/apis/chart/">code.google.com/apis/chart</a>
				</div>
			</div>
			<p>Interactive charts are loaded using AJAX and created using the Google Chart API. Chart Data feeds are provided using JSON.</p>
		</div>
		<div class="about">
			<h3>User Interface Widgets</h3>
			<div class="about-info">				
				<div class="about-img">
					<a href="http://jqueryui.com/"><img src="images/jquery-ui-logo.gif"/></a>
				</div>
				<div class="about-link">
					<a href="http://jqueryui.com/">jqueryui.com</a>
				</div>
			</div>
			<p>jQuery UI supplies interactive user intrface components to increase form interactivity and dynamically alter content.</p>
		</div>
		<div class="about">
			<h3>URL Library</h3>
			<div class="about-info">				
				<div class="about-img">
					<a href="http://php.net/manual/en/book.curl.php"><img src="images/curl-logo.png"/></a>
				</div>
				<div class="about-link">
					<a href="http://php.net/manual/en/book.curl.php">php.net/manual/en/book.curl</a>
				</div>
			</div>
			<p>cURL allows for the automation of URL calls made server side for the purposes of querying the web servce using GET, POST, PUT & DELETE HTTP requests.</p>
		</div>
		<div class="about">
			<h3>Unit Testing</h3>
			<div class="about-info">				
				<div class="about-img">
					<a href="http://www.simpletest.org/"><img src="images/simpletest-logo.png"/></a>
				</div>
				<div class="about-link">
					<a href="http://www.simpletest.org/">simpletest.org</a>
				</div>
			</div>
			<p>Simpletest provides a Junit style environment for unit testing. Tests can be run either from command line or from a URL.</p>			
		</div>
		<div class="about">
			<h3>Documentation</h3>
			<div class="about-info">				
				<div class="about-img">
					<a href="http://peej.github.com/phpdoctor/"><img src="images/phpdoctor-logo.png"/></a>
				</div>
				<div class="about-link">
					<a href="http://peej.github.com/phpdoctor/">peej.github.com/phpdoctor</a>	
				</div>
			</div>
			<p>PHP Doctor provides a lightweight open source library for JavaDoc style documentation of projects. The documentation can be found <a href="apidocs/">here</a></p>
		</div>
		<div class="about">
			<h3>Development Environment</h3>
			<div class="about-info">				
				<div class="about-img">
					<a href="http://www.ubuntu.com/"><img src="images/ubuntu-logo.png"/></a>
				</div>
				<div class="about-link">
					<a href="http://www.ubuntu.com/">ubuntu.com</a>
				</div>
			</div>
			<p>Popular open source operating system Ubuntu was used as both the development environment and as the development host for the website.</p>
		</div>
		<div class="about">
			<h3>Server</h3>
			<div class="about-info">				
				<div class="about-img">
					<a href="http://httpd.apache.org/"><img src="images/apache-logo.gif"/></a>
				</div>
				<div class="about-link">
					<a href="http://httpd.apache.org/">http://httpd.apache.org</a>
				</div>
			</div>
			<p>Apache Server was used as the web server for both development and hosting of this site.</p>
		</div>
		<div class="about">
			<h3>Graphics</h3>
			<div class="about-info">			
				<div class="about-img">
					<a href="http://www.gimp.org/"><img src="images/gimp-logo.png"/></a>
				</div>
				<div class="about-link">
					<a href="http://www.gimp.org/">gimp.org</a>
				</div>
			</div>
			<p>The GNU Image Manipulation Program (GIMP) Is an open source alternative to Photoshop. It has been used to create and edit all images on this site.</p>
		</div>
		<div class="about">
			<h3>Browser</h3>
			<div class="about-info">				
				<div class="about-img">
					<a href="http://www.chromium.org/Home"><img src="images/chromium-logo.png"/></a>
				</div>
				<div class="about-link">
					<a href="http://www.chromium.org/Home">chromium.org/Home</a>
				</div>
			</div>
			<p>Chromium is an open source browser used as the basis for Googles chrome browser. Used in combination with the <a href="http://chrispederick.com/work/web-developer/">Web-Developer</a> plugin it was used to develop an test this website.</p>
		</div>
	</div>
</div>
<?php }} ?>