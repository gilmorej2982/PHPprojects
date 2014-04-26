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
<h1 class="instructions">Pathnames with Includes</h1>
</header>
<article>
<h2 class="instructions">Using PHP Superglobal Arrays to help with pathnames.</h2>
<p class="instructions">Using pathnames on PHP scripts is more complex than on a static website. Very often, you want to write a script that is as flexible and universal as possible, so that if you move your site from one server to another, the pathnames still work. Or, you are creating an include for navigation that needs to work on all pages, irrespective of their location within the site hierarchy. Keep the following in mind:</p>
<ol class="instructions">
<li>There are several different kinds of pathnames you can write: absolute pathnames, document relative pathnames, web or site root pathnames, and server root pathnames. Whew. They each have a different purpose.</li>
<li>If you are using the include function, you cannot use an absolute pathname. You can use a relative pathname but that isn't useful if your script is on a template page, or otherwise needs to be usable from different locations within site hierarchy. </li>
<li>However, it is possible to write a very useful pathname using a "superglobal array" rather than a relative pathname. The <pre>$_SERVER['DOCUMENT_ROOT']</pre> superglobal array will give you the <strong>server root</strong>. You can then append your web root pathname to it, and there you go. Just be sure the web root hierarchy is the same on both servers should you be creating a local site that will be moved to a live server. This is something that will come into play when we work with WordPress: most developers make local sites in development, and then move them to a live server when they are complete.</li>
<li>If you have links on your include (like navigation), you need to make decisions about the kind of pathname you want there. You CAN use an absolute pathname hardcoded in, but it isn't the best choice. If you move your site from one server to another, that absolute pathname will send you back to the other server! Not good! But a regular relative pathname will not work either, unless you have a flat site and that is bad. So, use a <strong>site/web root relative pathname</strong>, and it will work from anywhere, unless you change your site files hierarchy. As mentioned before, it is common to work locally and move the site live when development phase is over. You don't want to have to change pathnames for this move, so consider the structure of the live site when you create your local development site.
</ol>
<p class="instructions">Write a script below that prints (echos) the server root to the page (so you can see what it is):</p>
<!-- write script here -->
<?php echo $_SERVER['DOCUMENT_ROOT']; ?>
<p class="instructions">Write a script below that concatenates the site/web root pathname of THIS PAGE (that is the stuff you see in your browser address bar after the host, which is probably <code>www.domainename.com</code> for a live server and <code>localhost:8888</code> for a local testing servers) to the server root:</p>
<!-- write script here -->
<?php echo $_SERVER['DOCUMENT_ROOT'].'/php424/2using-includes/2includes-pathnames.php'; ?>
<p class="instructions">You'll apply using includes to the Gummy World site; this is for practice with the superglobal array syntax and what it returns for you.</p>
</article>
</body>
</html>
