<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>First Exercise</title>
<style type="text/css">
.cornypoetry {
	color: #FF3399;
	font-family: cursive;
	}
</style>
</head>

<body>
<header>
<h1>Simple Intro Scripts</h1>
</header>
<article>
<h2>Instructions</h2>
<p>Write the following scripts in the "empty" list below. Please note that the quotes only identify the text to be written with the exception of the dialog in script 4. What that means is that the quotes are only to be printed to the page in script 4; in the rest, what is inside the quotes, but not the quotes, is what you print to the page.</p>
<ol>
<li>Write a short php script that prints the text "Hello World" to the page.</li>
<li>Write a short php script that prints the text "Headline 2" in an h2 tag</li>
<li>Write a short php script that prints the text "Another Green World" in an h2 tag with an inline style creating green text</li>
<li>Write a short php script that prints the following text (include all characters, quotes and all, with new lines both in the code and in the browser):<br />
<pre>
"You'll write me a check," Chili said. "You serious? Leo, look at me, I'm talking to you."
"I'm busy at the moment," Leo said, studying the table layout. "Okay? You mind?"
</pre>
</li>
<li>Write a short php script that prints the following text "Roses are Red" in a paragraph tag with style information that coincides with the embedded style above. The HTML markup is <em>included</em> in the script.</li>
<li>Write a short php script that prints the following text "Violets are Blue" in a paragraph tag with style information that coincides with the embedded style above. The HTML markup is <em>not included</em> in the script, but is part of markup you hardcode in the page.</li>
<li>Write a script that joins together the two phrases "Roses are Red" and "Violets are Blue" using the concatenation operator. This is silly, but it is easier to learn in low-stakes scripts so when you need to join together unknown results, you are able to use the concatenation operator successfully.
</li>
</ol>
<h2>Scripts</h2>
<ol>
<li><?php echo 'Hello World'; ?></li>
<li><?php echo '<h2>Headline 2</h2>'; ?></li>
<li><?php echo '<p style="color:green;">Another Green World</p>'; ?></li>
<li><?php echo "\"You'll write me a check,\" Chili said. \"You serious? Leo, look at me, I'm talking to you.\"\n<br />
\"I'm busy at the moment,\" Leo said, studying the table layout. \"Okay? You mind?\""; ?></li>
<li><?php echo '<p class="cornypoetry">Roses are Red</p>';?></li>
<li><p class="cornypoetry"><?php echo 'Violets are Blue';?></p></li>
<li><?php echo '<p class="cornypoetry">Roses are Red'.' and'.' Violets are Blue</p>'; ?></li>
</ol>

</article>
</body>
</html>
