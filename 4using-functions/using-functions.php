<?php include 'scripts/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>PHP Functions</title>
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
<h1 class="instructions">PHP Functions</h1>
</header>
<article>
<h2 class="instructions">Create your own functions</h2>
<p class="instructions">There are hundreds of functions that come along with your PHP install. They do a lot of useful things. However, there are times when you want to create a function to do something specific for YOUR site. So you can easily define your own function!</p>
<ol>
<li class="instructions">Build a function that will print the full day, date without leading 0, full month and 4-digit year to the page. Call the function print_date</li>
<li class="instructions">Build a function that prints your site's server root (remember that useful superglobal array?). Call the function get_root.</li>
</ol>
<p class="instructions">Write your functions here:</p>
<p>
<?php 
function get_root()
{
	echo $_SERVER['DOCUMENT_ROOT'];
}

function print_date()
{
	echo date('l, d F Y');
}
get_root();
echo '<br />';
print_date();
?>
</p>

<p class="instructions">You'll create more useful functions for the Breakfast Bonanza site to call include files to the page, and will then apply that to Gummy World. For now, write a function called get_list that includes the <code>list.php</code> file in the includes directory. Even though there is only one file in this exercise, be sure you use a robust pathname that would work on any page in a site with nested directories in its file hierarchy.</p>
<!-- write your function here -->

<p class="instructions">Now, write a function on a separate <code>functions.php</code> page that you will include in the page above the DOCTYPE declaration. This function will be called get_content and will include the content in the page. Three steps: 
</p>
<ol class="instructions">
<li>Create new document and save as <code>functions.php</code> in the scripts directory.</li>
<li>Write the script to define the get_content function on <code>functions.php</code> page. </li>
<li>Write a script to include the functions page on *this* page so that the content will display below.</li>
</ol>
<!-- call get_content() function here; don't forget to include the external file at the top of the page! -->
<?php 
get_content(); 
?>
</article>
</body>
</html>
