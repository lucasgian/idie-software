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
    <link type="text/css" rel="stylesheet" href="<?= __MATERIALIZE__.'css/materialize.min.css' ?>"/>
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
<div class="row">
	<nav class="red darken-4">
	    <div class="nav-wrapper col s12">
	        <a href="#!" class="brand-logo"> IDIE </a>
	        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	        <div class="input-field col 4">
	          <input id="search" type="search" required>
	          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
	          <i class="material-icons">close</i>
	        </div>
	        <ul class="right hide-on-med-and-down">
	            <li><a href="sass.html">Artigos</a></li>
	            <li><a href="badges.html">Guia</a></li>
	            <li><a href="collapsible.html">Javascript</a></li>
	            <li><a class="waves-effect waves-light btn red darken-4" href="register">Register</a></li>
	            <li><a class="waves-effect waves-light btn red darken-4" href="login">Login</a></li>
	        </ul>
	    </div>
	</nav>
	<ul class="sidenav" id="mobile-demo">
	    <li><a href="sass.html">Sass</a></li>
	    <li><a href="badges.html">Components</a></li>
	    <li><a href="collapsible.html">Javascript</a></li>
	    <li><a href="mobile.html">Mobile</a></li>
	</ul>  
</div>



<div class="row">
	<div class="col s12 m2">
		<a href="post/add/1">
			<div class="card">
				<div class="card-image center">
				  <i class="large material-icons">add</i>
				</div>
			</div>
		</a>
	</div>
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







        
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?= __MATERIALIZE__.'js/materialize.min.js' ?>"></script>
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
