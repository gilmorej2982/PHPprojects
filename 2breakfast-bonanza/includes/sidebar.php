<?php$src = basename($_SERVER['SCRIPT_NAME'], '.php');$alt = basename($_SERVER['SCRIPT_NAME'], '.php');echo $src;?><nav><ul>  <li><a href="#">Subnav 1</a></li>  <li><a href="#">Subnav 2</a></li>  <li><a href="#">Subnav 3</a></li></ul><?php$image = array('blue.gif', 'yellow.gif', 'green.gif', 'orange.gif', 'pink.gif', 'red.gif');$random_key = array_rand($image);$random_image = $image[$random_key];?><img src="<?php  if($src == 'index'){	$image = array('images/breakfast.png', 'images/breakfast2.png', 'images/breakfast3.png', 'images/breakfast4.png', 'images/breakfast5.png', 'images/breakfast6.png');}elseif($src == 'pancakes'){	$image = array('../images/pancakes.png', '../images/pancakes2.png', '../images/pancakes3.png', '../images/pancakes4.png', '../images/pancakes5.png');}elseif($src == 'sausage'){	$image = array('../images/sausage.png', '../images/sausage2.png', '../images/sausage3.png', '../images/sausage4.png', '../images/sausage5.png');}elseif($src == 'bacon'){	$image = array('../images/bacon.png', '../images/bacon2.png', '../images/bacon3.png', '../images/bacon4.png', '../images/bacon5.png', '../images/bacon6.png');}$random_key = array_rand($image);$random_image = $image[$random_key];echo $random_image;  ?>" alt="<?php echo $alt ?>"></nav>