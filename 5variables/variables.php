<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>variables</title>
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
<h1 class="instructions">Using Variables</h1>
</header>
<article>
<h2 class="instructions">Concatenating multiple variables and re-defining a single variable</h2>
<p class="instructions">Write a script with three separate variables. Remember the correct syntax required for creating a variable. Generally the names of variables describe the kind of information they hold or the purpose to which they will be put, so name your variables accordingly. I'll suggest variable names here, but when you create your own, keep naming conventions in mind. Don't forget to use the "assignment operator" (the equals sign). Remember that it does not mean "equals" but rather "is set to" or "is assigned to."</p>
<ol class="instructions">
<li>Variable 1 <code>$copyright_text</code>: the text 'Copyright 2008-'</li>
<li>Variable 2 <code>$copyright_date</code>: the date function calling the four-digit year</li>
<li>Variable 3 <code>$company_name</code>: the text ' Breakfast Bonanza' (note that there is literal space to make it read correctly)</li>
<li>Then have them print to the page. Use echo, and concatenate the three variables.</li>
</ol>
<p><!-- write script here -->
<?php 
$copyright_text = 'Copyright 2008-';
$copyright_date = date('Y');
$company_name = ' Breakfast Bonanza';
echo $copyright_text.$copyright_date.$company_name;
?>

</p>

<p class="instructions">That is a fairly long-winded script with all the concatenation. In this instance, you can simply re-define the variable at each stage to add the next step in the process. Write a script with only one variable, <code>$copyright_text</code>, but redefine it for steps 2 and 3 so you get the entire copyright script in one variable. Have it print to the page.</p>
<p><!-- write new script here that redefines the variable -->
<?php 
$copyright_text = 'Copyright 2008-'.date('Y').' Breakfast Bonanza';
echo $copyright_text;
?>

</p>

<p class="instructions">The output for both scripts will look identical, but the second script is much more efficient. You'll do this for the copyright info in the Breakfast Bonanza and Gummy World footers. Once you do this, you'll see how useful variables can be. When you're just hardcoding the value to the variable, it seems silly: why not just write it all in? But often times your variables will be retrieving information that is not known, and that is where the true usefulness lies.</p>

<h2 class="instructions">Writing variables to hold values for our functions</h2>

<p class="instructions">Now let's look at simplifying the complex concatenated pathname we used in our functions for calling the banner, sidebar and footer in Breakfast Bonanza. Write a script that gets the server root for the site. Remember that your scripts concatenated this server root with the site root pathname to each of the includes. This will be the first part of your <code>$root_pathname</code> variable. </p>
<p><!-- write script here -->
<?php
$root_pathname = $_SERVER['DOCUMENT_ROOT'].'/php424/2breakfast-bonanza/includes/'; //assigns value to $root_path
echo $root_pathname;  //printing root_path to the page
function get_banner()  //defining a function
{
	global $root_pathname;
	include $root_pathname.'banner.php';
}
get_banner();  //calling a function
?>
</p>
<h2 class="instructions">Scope of your variable within a function</h2>

<p class="instructions">Sometimes you want to define a variable, and then use it within a function. Because most variables are "local" in scope, you need to specify when you want a variable to work with a "global" scope (inside a function within which the variable has *not* been defined)
</p>
<p class="instructions">Consider the following function:</p>
<pre style="color: #666666;"> 
$number = 10;
function print_number()
{
echo $number;
}
print_number();
</pre>
<p class="instructions">It does not work, and will throw a <code>Notice:  Undefined variable</code> error.</p>

<p class="instructions">If you want it to work, you have to specify that this variable has a global scope: </p>
<pre style="color: #666666;"> 
$number = 10;
function print_number()
{
global $number;
echo $number;
}
print_number();
</pre>

<p class="instructions">You want to create a variable that concatenates the server and site roots so that you can use it in the functions that call your includes and scripts into the page. Since this page isn't in the Breakfast Bonanza site, rather than using "include" in your function, use "echo" so the path will print to the page, and you can see what it looks like. On the Breakfast Bonanza site, we'll use "include" because that is what you want the function to do! <strong>You will need to remember where your Breakfast Bonanza site is on your server to write the site root pathnames to the includes directory!</strong></p>
<p class="instructions">Also, because you will be using the same variable for each function, you'll need to declare it as a global variable; otherwise, you have to declare the variable in each function you create.</p>
<p class="instructions">Helpful hint: write statements to print the break tag after you call each function, so that the pathnames don't print on the same line.</p>
<p><!-- write function here -->

</p>

<p class="instructions">
Now do this in your Breakfast Bonanza functions page. Re-write your functions to put in the variable for the server root and site root pathname. 
<p>

</article>
</body>
</html>
