<?php
//require_once(".config");
require_once('../vendor/autoload.php');



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--tag customized for interation styles, dont delete os-->
	
		<?php 
	//	$style= new Lib\StyleScripts\StyleScripts;
		// $style->Styles(['http://fonts.googleapis.com/icon?family=Material+Icons','../vendor/materialize/css/materialize.min.css']);


		?>
    

     <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../vendor/materialize/css/materialize.min.css"  media="screen,projection"/>
      
       <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>

<?php
	//menu nav-bar
	$html=new Lib\Markup\Html;
	$materialize=new Lib\Markup\Materialize\Materialize;

	$service=new Lib\ServiceManager\ServiceManager;

	//$teste=new Modules\Home\Controllers\ListController;

	echo	$materialize->Navbar(['id'=>'menu','logo'=>'logo','options'=>array('Home'=>'home.php','Configurações'=>'config.php'),'color'=>'blue']);


	$card=$materialize->CardReveal(['id'=>'card','link'=>'teste','title'=>'Título','cardtitle'=>'Titulo do Cartão','image'=>'../modules/Home/img/fone.jpg','text'=>'pesquisa no telefone']);
	

	$col .= $html->Div($card,['class'=>'col s3']);

	//$html->Div($card,['class'=>'col s6']);
	$row=$html->Div($col,['class'=>'row']);

	echo $row;

	echo  $service->ListController(['View'=>'Module\Home\Views\ListView']);



?>

	

<!-- tag util for containers -->
	<div id="content"></div>



	<!--tag customized for interation scripts, dont delete os-->
	<footer>

		<script type="text/javascript" src="../vendor/materialize/js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../vendor/materialize/js/materialize.min.js"></script>
	<?php

		//$style->Scripts(['../vendor/jquery/jquery-2.1.1.min.js','../vendor/materialize/js/materialize.min.js']);
	?>
	</footer>
</body>
</html>

