<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Pseudo-code and built-in PHP functions</title>
<style type="text/css">
body {
	font-family: courier, monospace;
	color:#FF6633;
	}
	
.instructions {
	color: #666666;
	font-family: georgia, serif;
	}
blockquote {
	font-family: arial;
	color: #666;
	border: 1px dotted #666;
	padding: 10px;
	}
</style>
</head>

<body>
<header>
<h1 class="instructions">Pseudo-code and built-in PHP functions</h1>
</header>
<article>
<h2 class="instructions">Using pseudo code to think through a problem</h2>
<p class="instructions">As you begin to use PHP to perform tasks, you can begin to think about how to apply what you know to make something happen in your page. One good way to solve those scripting challenges is to use pseudo code: use language to write down the tasks you need the script to do before you begin to write the code. When you do this, you'll often come up against something you want done and you should ask yourself "Does PHP already have a function that can do this job for me?"</p>

<h2 class="instructions">Finding built-in PHP functions</h2>

<p class="instructions">Use the magic of teh google to find built-in PHP functions to solve the following problems:</p>
<ol class="instructions">
<li>You're collecting names for a mailing list using a form. People are very sloppy about using the shift key to capitalize the first letter of their name. You want all the first and last names to begin with a capital letter (note: the function you use for this depends on whether you are collecting the first and last names separately, or together).</li>
<li>Sometimes these folks enter their names in ALL CAPS! Oh, the horror! Fix this problem.</li>
<li>Occasionally, people will try to format the appearance of their input using HTML tags. This messes everything up. You want to eliminate any use of tags in your mailing list form submissions.</li>
<li>Lastly, sometimes folks put extra space before and after their names when they input them. That is also a problem! Get rid of that space!</li>
</ol>

<p class="instructions">Now, try out those PHP functions to be sure they work. What do you need to do to process the strings (ie: the names that have been input in the form) to clean them up? What steps do you need to take to write the PHP? Remember that you can't tell if your scripts work without seeing the output (even if this is only for debugging purposes).
</p>
<ol class="instructions">
<li>Write a separate script for each of the four problems. You'll have to create a variable with different values to replicate each of the "problems" (no caps, all caps, markup and spaces).</li>
<li>Then, write one script that processes for each of the problems, so it can clean up all the form input irrespective of how an individual has input his or her name. The order in which you write the separate statements matters!</li>
</ol>

<h2 class="instructions">Write your scripts here!</h2>
<p><!-- separate scripts here: be sure each script outputs on its own line -->

</p>

<p><!-- single script here -->

</p>
<h2 class="instructions">And now for something completely ridiculous...</h2>

<p class="instructions">Let's say you want to create custom absurd thank you messages for the people who join your mailing list. The message specifics will depend on the length of their first and last names. Use the greeting in the blockquotes below (although don't put YOUR greeting in blockquotes!) Because the message will be generated automatically every time someone joins your mailing list, you can't hardcode in the name or the special parts of the message that are determined by the person's name. It all has to be scripted into the body of the message (which can be hardcoded). <small>Of course, when you get form data, you usually run it through scripts, like the ones above, to clean it up, but you don't need to do that for this part of the exercise).</small></p> 

<blockquote>
<p>Dear (full name - color depending on length of first name):</p>
<p>(optional greeting based upon length of last name). Thanks for joining my mailing list. I'll be sending you all kinds of interesting information in the upcoming weeks, so keep an eye on your inbox! Thanks again, (first name).</p>
</blockquote>
<ol class="instructions">
<li>If their first name is long (more than 5 characters), display the name in red. If their first name is short (5 characters or fewer), display the name in blue.</li>
<li>If their last name is long (more than 10 characters), begin the greeting "Wow, you sure have a long last name!" If their last name is short (5 or fewer characters), begin the greeting "Wow, you sure have a short last name!" If their last name is between 6 and 9 characters, don't display anything special.</li>
</ol>

<p class="instructions">Use pseudo code to work through the problem so you know what you need, including any built-in PHP functions that will streamline the process. Then write the script!</p>
<!-- write your script here! Then use the variables within the hardcoded greeting! you'll have to put in markup to hold your greeting (paragraphs) and then put scripts in the markup to parse the custom stuff. -->


</article>
</body>
</html>
