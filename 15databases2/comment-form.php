<!DOCTYPE html><html lang="en"><head><meta charset="utf-8" /><title>simple form styled</title><style type="text/css">form {	border: 1px dotted silver;	padding: 4px;	background-color: #f8f8f8;	width: 500px;	margin: 0 auto;	}fieldset {	padding: 10px;	margin-bottom: 20px;	text-transform: uppercase;	background-color: #efefef;	border: 1px dotted silver;	}label {font-style: italic;}label.text-input {	display: block;	float: left;	width: 150px;	text-transform: capitalize;	}	label.text-area {	display: block;	width: 10em;	text-transform: capitalize;}input.submit {	margin-left: 20px;	}h1 {text-align: center;}</style></head><body><header><h1>Comment Form</h1></header><form id="example" name="example" method="post" action="comment-script.php"><input type="hidden" name="phpday" value="<?php echo date('l'); ?>" /><fieldset><legend>Submit a Comment</legend><label class="text-input" for="firstname">First Name</label><input type="text" name="firstname" id="firstname" /><br /><label class="text-input" for="lastname">Last Name</label><input type="text" name="lastname" id="lastname" /><br /><label  class="text-input" for="comments">Your Comments:</label><textarea name="comments" id="comments" rows="10" cols=40"></textarea></fieldset><input type="submit" name="submitbutton" id="submitbutton" value="Submit" class="submit" /></form></body></html>