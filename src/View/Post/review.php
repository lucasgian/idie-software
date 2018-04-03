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
	

	<h1>Solicitações de revisão</h1>
	<div class="row">
		<div class="col s12 m10">
			<table class="centered highlight">
			   <thead>
			     <tr>
			         <th>Nome</th>
			         <th>Assunto</th>
			         <th>Ações</th>
			     </tr>
			   </thead>

			   <tbody>
			     <tr>
			       <td>Alvin</td>
			       <td>Eclair</td>
			       <td>$0.87</td>
			     </tr>
			     <tr>
			       <td>Alan</td>
			       <td>Jellybean</td>
			       <td>$3.76</td>
			     </tr>
			     <tr>
			       <td>Jonathan</td>
			       <td>Lollipop</td>
			       <td>$7.00</td>
			     </tr>
			   </tbody>
			</table>       	
		</div>
	</div>
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
