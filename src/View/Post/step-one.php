<?php
/**
 * Descrição do arquivo
 *
 * @author nome do autor
 * @version versão atual da aplicação ex: v1.0
 * @since referencia nome do projeto e ano ex: idie-software 2018-1 
 * @link 
 */

$title = 'Página de exemplo';?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?>
    </title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--
<style>
    
    .progress {
        background-image: url(http://www.gmstatic.com/templates/default/images/ok_icon.png);
        background-repeat: no-repeat;
        background-position: top right;
        background-size: 20px;
        background-color: rgb(232, 255, 232);
        min-height:  1.5em;
        width: 10%;
    }
</style>
-->
</head>

<body>
<?php require_once __STATIC__ . 'nav-bar.php'; ?>


<div class="container">
	<div class="container">
		<?php  require_once __STATIC__ . 'progress-info.php'; ?>
		<div class="progress">
			<div id="progress" class="determinate red" style="width: 0%"></div>
		</div>	
	</div>	


	<h1>Informações basicas</h1>
	<form action="../../post/submit/1" method="post">
		<ul class="collapsible popout">
		  <li>
		    <div class="collapsible-header"><i class="material-icons">title</i>Título</div>
		    <div class="collapsible-body"><span>Título</span><input type="text" name="name"></div>
		  </li>
		  <li>
		    <div class="collapsible-header"><i class="material-icons">description</i>Descrição</div>
		    <div class="collapsible-body"><span>Descrição</span><input type="text" name="description"></div>
		  </li>
		  <li>
		    <div class="collapsible-header"><i class="material-icons">image</i>Imagem</div>
		    <div class="collapsible-body row">
		    	<span>Imagem de apresentação</span>
		    	<div class="file-field input-field">
		    		<div class="btn">
		        		<span>Imagem</span>
		        		<input type="file" multiple>
		      		</div>
		    	</div>
		    </div>
		  </li>
		</ul>	
		<input type="submit" class="waves-effect waves-light btn-large green">
	</form>

	<a href="2" class="waves-effect waves-light btn-large red">Próximo</a>
</div>
  
        
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script type="text/javascript">
  	$(document).ready(function(){
    	$('.collapsible').collapsible();
  	});
  	$(document).ready(function(){
  		$('.sidenav').sidenav();
	});
</script>
</body>
</html>
