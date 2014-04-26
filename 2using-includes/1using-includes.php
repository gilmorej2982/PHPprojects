<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>PHP Includes</title>
<style type="text/css">
body {
	font-family: courier, monospace;
	color:#FF6633;
	}
	
.instructions {
	color: #666666;
	font-family: georgia, serif;
	}
</style>
</head>

<body>
<header>
<h1 class="instructions">Using Includes</h1>
</header>
<article>
<p class="instructions">Write a script below that includes the list of things to keep in mind about pathnames within scripts and pathnames within includes (<code>list.inc</code>). This include has no php scripts, so it isn't saved as a .php file (saves the server some work)</p>
<!-- include the list here -->
<?php include 'includes/list.inc';?>
<p class="instructions">Write a script below that includes the list of things to keep in mind about pathnames within scripts and pathnames within includes (<code>list.php</code>). This include has some .php script on it, so it needs to be parsed.</p>
<!-- include the list here -->
<?php include 'includes/list.php';?>
<p class="instructions">Write a script below that includes the list of things to keep in mind about pathnames within scripts and pathnames within includes (<code>list-unsafe.inc</code>). This include has a php script in it, and it will parse on this page and display correctly, just like list.php. However, if anyone were to view <code>list-unsafe.inc</code> on its own, it wouldn't be parsed and would display plain text. This exposes your script! So always save files with php scripts on them as .php files so they are parsed before anyone can view them. Of course, you can save all your includes as .php irrespective of whether they have scripts on them, but those without scripts then cause the server to work harder. Could slow site performance. However, it is considered best practices to save them *all* with .php file extensions. Chances are most of your includes will be files with scripts on them anyway!</p>
<!-- include the list here -->
<?php include 'includes/list-unsafe.inc';?>
</article>
</body>
</html>
