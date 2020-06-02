<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Manisha Lokhande">
    <link rel="icon" href="">

    <title>Blog Templete</title> 

    <!-- Bootstrap core CSS -->
    <link href="<?=$this->config->item('css_url');?>bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=$this->config->item('css_url');?>carousel.css" rel="stylesheet">
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  </head>
  <body> <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Carousel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $this->config->item('base_url')?>about_us">About us </a>
            </li>
            <?php if(!isset($_SESSION['logged_in'])) { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $this->config->item('base_url')?>register_user">Register user</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo $this->config->item('base_url')?>login">Login</a>
            </li>
            <?php } else { ?>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo $this->config->item('base_url')?>logout">log out</a>
            </li>
            <?php }  ?>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
</header>
 <main role="main">  
     