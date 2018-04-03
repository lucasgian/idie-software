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

</head>

<body>
<?php  require_once __STATIC__ . 'nav-bar.php'; ?>

<div class="container">
	<div class="container">
		<?php  require_once __STATIC__ . 'progress-info.php'; ?>
		<div class="progress">
			<div id="progress" class="determinate red" style="width: 50%"></div>
		</div>	
	</div>	


	<h1>Escolher Revisor</h1>
	<div class="input-field col s12">
		<select>
		  <option value="" disabled selected>Choose your option</option>
		  <option value="1">Option 1</option>
		  <option value="2">Option 2</option>
		  <option value="3">Option 3</option>
		</select>
		<label>Materialize Select</label>
	</div>

	<a href="3" class="waves-effect waves-light btn-large red">Enviar</a>
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

	$(document).ready(function(){
	    $('select').formSelect(); 
	});		
      
</script>
</body>
</html>
