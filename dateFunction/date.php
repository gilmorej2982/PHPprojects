<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Date Function</title>
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
<h1 class="instructions">Date Function<br />
<code>date(format,timestamp);</code></h1>
</header>
<article>
<h2 class="instructions">Using PHP date() function</h2>
<p class="instructions">Write five scripts to conform to the following date/time content and format, with the day/date information on its own line. Remember the timestamp parameter is optional, and we won't be using it.</p>
<ol class="instructions">
<li>Full Day, date Full Month Full Year</li>
<li>The time (hour and minutes) in a 24-hour clock</li>
<li>The time (hour and minutes) in a 12-hour clock w/out leading zeros, with am/pm</li>
<li>Abbreviated Month, date with leading zeros</li>
<li>Month/Date/Year in numbers with leading zeros</li>
</ol>
<p class="instructions">Write your five separate scripts below. Have them output to new lines rather than all in a horizontal row. I've written styles so your script output will display in red-orange courier; that way it is easier to see the results of your scripts. You wouldn't normally do that :-)</p>
<h3 class="instructions">Scripts here (each needs to display on a new line in the browser):</h3>
<p>
<?php 
date_default_timezone_set('America/Chicago');    
echo date('l, j F Y ').'<br />';
echo date('G:i').'<br />';
echo date('g:i a').'<br />';
echo date('M d').'<br />';
echo date('m/d/Y');
?>
</p>
<h2 class="instructions">Changing the timezone temporarily with date_default_timezone_set()</h2>
<p class="instructions">Now, change your timezone for the following scripts:</p>
<ol class="instructions">
<li>Full Day, date Full Month Full Year, time (hour and minutes) in 12-hour clock w/out leading zeros, with am/pm in Hawaii</li>
<li>Full Day, date Full Month Full Year, time (hour and minutes) in 12-hour clock w/out leading zeros, with am/pm in Calcutta</li>
<li>Full Day, date Full Month Full Year, time (hour and minutes) in 12-hour clock w/out leading zeros, with am/pm in Canberra</li>
<li>Full Day, date Full Month Full Year, time (hour and minutes) in 12-hour clock w/out leading zeros, with am/pm in Warsaw</li>
<li>Full Day, date Full Month Full Year, time (hour and minutes) in 12-hour clock w/out leading zeros, with am/pm in Amsterdam</li>
<li>Full Day, date Full Month Full Year, time (hour and minutes) in 12-hour clock w/out leading zeros, with am/pm in Bermuda</li>
<li>Full Day, date Full Month Full Year, time (hour and minutes) in 12-hour clock w/out leading zeros, with am/pm in the South Pole</li>
<li>Full Day, date Full Month Full Year, time (hour and minutes) in 12-hour clock w/out leading zeros, with am/pm in Anchorage</li>
<li>Full Day, date Full Month Full Year, time (hour and minutes) in 12-hour clock w/out leading zeros, with am/pm in El Salvador</li>
<li>Full Day, date Full Month Full Year, time (hour and minutes) in 12-hour clock w/out leading zeros, with am/pm in Toronto</li>
<li>Full Day, date Full Month Full Year, time (hour and minutes) in 12-hour clock w/out leading zeros, with am/pm in Nairobi</li>
<li>Full Day, date Full Month Full Year, time (hour and minutes) in 12-hour clock w/out leading zeros, with am/pm in Johannesburg</li>
<li>Full Day, date Full Month Full Year, time (hour and minutes) in 12-hour clock w/out leading zeros, with am/pm in Baghdad</li>
</ol>

<h3 class="instructions">Scripts here (each needs to display on a new line in the browser). Be sure you identify the location (you can code it in HTML before you write the script):</h3>
<p>
<?php 
date_default_timezone_set('Pacific/Honolulu'); 
echo date('l, j F, Y g:i a ').'is the day and time right now in Hawaii.'.'<br />';
date_default_timezone_set('Asia/Calcutta'); 
echo date('l, j F, Y g:i a ').'is the day and time right now in Calcutta.'.'<br />';
date_default_timezone_set('Australia/Canberra'); 
echo date('l, j F, Y g:i a ').'is the day and time right now in Canberra.'.'<br />';
date_default_timezone_set('Europe/Warsaw'); 
echo date('l, j F, Y g:i a ').'is the day and time right now in Warsaw.'.'<br />';
date_default_timezone_set('Europe/Amsterdam'); 
echo date('l, j F, Y g:i a ').'is the day and time right now in Amsterdam.'.'<br />';
date_default_timezone_set('Atlantic/Bermuda'); 
echo date('l, j F, Y g:i a ').'is the day and time right now in Bermuda.'.'<br />';
date_default_timezone_set('Antarctica/South_Pole'); 
echo date('l, j F, Y g:i a ').'is the day and time right now in the South Pole.'.'<br />';
date_default_timezone_set('America/Anchorage'); 
echo date('l, j F, Y g:i a ').'is the day and time right now in Anchorage.'.'<br />';
date_default_timezone_set('America/El_Salvador'); 
echo date('l, j F, Y g:i a ').'is the day and time right now in El Salvador.'.'<br />';
date_default_timezone_set('America/Toronto'); 
echo date('l, j F, Y g:i a ').'is the day and time right now in Toronto.'.'<br />';
date_default_timezone_set('Africa/Nairobi'); 
echo date('l, j F, Y g:i a ').'is the day and time right now in Nairobi.'.'<br />';
date_default_timezone_set('Africa/Johannesburg'); 
echo date('l, j F, Y g:i a ').'is the day and time right now in Johannesburg.'.'<br />';
date_default_timezone_set('Asia/Baghdad'); 
echo date('l, j F, Y g:i a ').'is the day and time right now in Baghdad.'.'<br />';
?>
</p>

</article>
</body>
</html>
