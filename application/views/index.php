<!DOCTYPE html>

<!-- define angular app -->
<html ng-app="scotchApp">

<head>
  <!-- SCROLLS -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  <!-- SPELLS -->
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
  <script src="<?php echo base_url('asset/js/script.js') ?>"></script>
</head>
<style type="text/css" media="screen">
  #main{
    padding: 50px;
  }
</style>
<!-- define angular controller -->
<body ng-controller="mainController">

 



<!-- The drawer is always open in large screens. The header is always shown,
  even in small screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="fixed-header-drawer-exp">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="fixed-header-drawer-exp">
        </div>
      </div>
    </div>
  </header>
  <div class="mdl-layout__drawer">
      <span class="mdl-layout-title"><h4 style="padding: 4px;"><center>SPA Angular Js with Codeigniter 3</center></h4></span>
    <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="#">Home</a>
        <a class="mdl-navigation__link" href="#about">About</a>
        <a class="mdl-navigation__link" href="#contact">Contact</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content" id="main">
      <!-- Your content goes here -->
        
      <div ng-view></div>

      </div>
  </main>
</div>



</body>

</html>
