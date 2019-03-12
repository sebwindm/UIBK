<!doctype html>
<html lang="en">
  <head>
<style>
  #headline {
    float: right;
    margin-right: 30px;
    margin-top: 0.5em;
    font-family: Gill Sans, Verdana;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: bold;
    color: #003362;
  }
  .headline-container{
        margin-top: 1em;
        margin-bottom: 0em;
        margin-left: 2em;
        height: 4em;
  }
  .empty-margin{
    margin-bottom: 10px;
  }
</style>

  </head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php include_once "./includes/stylesheet-loader.php";?>
<div class="headline-container">
  <img src="./images/logo.png" id="logo" height="70%">
  <p id="headline">Crowdsourced Idea Convergence </p>
</div>
<div style="clear: both;">

</div>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #003362;">
  <a class="navbar-brand text-light" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Home
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="index.php">Welcome</a>
          <a class="dropdown-item" href="how-to-use.php">How to use</a>

        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Idea Selection
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="innovation-funnel-introduction.php">Introduction</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="innovation-funnel-phase-1.php">Idea Generation</a>
          <a class="dropdown-item" href="innovation-funnel-phase-2.php">Filtering</a>
          <a class="dropdown-item" href="innovation-funnel-phase-3.php">Shortlisting</a>
          <a class="dropdown-item" href="innovation-funnel-phase-4.php">Winner Determination</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Challenges in Idea Selection
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="circumplex-introduction.php">Introduction</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="circumplex.php">Circumplex</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Methods for Idea Selection
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="affinity-diagram.php">Affinity Diagrams</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="sele-crit.php">Selection Criteria</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="post-it-voti.php">Post-it Voting</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="now-wow-how-mat.php">Now-Wow-How Matrix</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="four-categories.php">Four Categories</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          General
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="poster.php">Overview poster</a>
          <a class="dropdown-item" href="glossary.php">Glossary</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="about.php">About</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="admin-page-login.php">Admin login</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="empty-margin"></div>




<?php include_once "./includes/javascript-loader.php" ?>
  </body>
</html>
