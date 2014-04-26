<?php
/* You're collecting names for a mailing list using a form. People are very sloppy about using the shift key to capitalize the first letter of their name. You want all the first and last names to begin with a capital letter (note: the function you use for this depends on whether you are collecting the first and last names separately, or together). */


$fullName = ucwords('jane doe');
echo $fullName;

/*Sometimes these folks enter their names in ALL CAPS! Oh, the horror! Fix this problem.
Occasionally, people will try to format the appearance of their input using HTML tags. This messes everything up. You want to eliminate any use of tags in your mailing list form submissions.*/

$fullName1 = ucwords(strtolower('JANE DOE'));
echo $fullName1;

/*Occasionally, people will try to format the appearance of their input using HTML tags. This messes everything up. You want to eliminate any use of tags in your mailing list form submissions.*/

$fullName2 = strip_tags('<strong>Jane Doe</strong>');
echo $fullName2;

/*Lastly, sometimes folks put extra space before and after their names when they input them. That is also a problem! Get rid of that space!*/

$fullName3 = trim('         Jan Doe<br />', " ");
echo $fullName3;



?>

<?php
$fname = 'Jess';
if(strlen($fname) > 5){
	$fname = '<span style="color:red;">'.$fname.'</span>';
}else{
	$fname = '<span style="color:blue;">'.$fname.'</span>';
}

$lname = 'Gilmoreasdfasdfasdf';
if(strlen($lname) > 10){
	$greeting = 'Wow, you sure have a long last name!';
}else if(strlen($lname) < 5){
	$greeting = 'Wow, you sure have a short last name!';
}else{
	$greeting = null;
}


echo 'Dear '.$fname.$lname':';
echo '<br />';
echo $greeting.' Thanks for joining my mailing list. I\'ll be sending you all kinds of interesting information in the upcoming weeks, so keep an eye on your inbox! Thanks again, '.$fname.'.';
?>