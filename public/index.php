<?php
//require_once(".config");
require_once('../vendor/autoload.php');



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--tag customized for interation styles, dont delete os-->
	<personstyle>
		<?php $style= new Lib\StyleScripts\StyleScripts;
			 $style->Styles(['http://fonts.googleapis.com/icon?family=Material+Icons','../vendor/materialize/css/materialize.min.css']);


		?>
    </personstyle>

</head>
<body>

<?php
	/*menu nav-bar

	*/
?>

<!-- tag util for containers -->
	<div id="content"></div>

	<!--tag customized for interation scripts, dont delete os-->
	<personscripts>
	<?php

		$style->Scripts(['../vendor/jquery/jquery-2.1.1.min.js','../vendor/materialize/js/materialize.min.js','../src/js/contents.js']);
	?>
	</personscripts>
</body>
</html>

