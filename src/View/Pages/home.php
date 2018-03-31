<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<?php //$this->Html->meta('icon') ?>
<?php //$this->Html->css('home.css') ?>
<?php //$this->Html->charset() ?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link type="text/css" rel="stylesheet" href="<?php echo __MATERIALIZE__.'css/materialize.min.css'; ?>"  media="screen,projection"/>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
        <div class="parallax-container">
            <div class="parallax">
                <img src="<?php echo __IMG__.'img1.jpg';?>">
            </div>
        </div>
    </div>


    <div class="section white">
      <div class="row container">
        <h2 class="header">Parallax</h2>
        <p class="grey-text text-darken-3 lighten-3">
            Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.
        </p>
    </div>
</div>

<footer class="page-footer grey darken-4">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Footer Content</h5>
        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
    </div>
    <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
      </ul>
  </div>
</div>
</div>
<div class="footer-copyright">
    <div class="container">
        IDIE © 2016 Copyright
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
</div>
</footer>




<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script type="text/javascript" src="<?php echo __MATERIALIZE__.'js/materialize.min.js';?>"></script>
<script>
   $(document).ready(function(){
      $('.parallax').parallax();
  });

   $(document).ready(function(){
    $('.sidenav').sidenav();
});

</script>

</body>
</html>
