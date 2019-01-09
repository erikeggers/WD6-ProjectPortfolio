<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Website</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/main.css" rel="stylesheet">

  </head>

  <body>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/">Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
          <li <?=@$data["pagename"]=="welcome"?'class="active nav-item"':'class="nav-item"'?>><a href="/welcome" class='nav-link'>Home</a></li>
          <li <?=@$data["pagename"]=="about"?'class="active nav-item"':'class="nav-item"'?>><a href="/about" class='nav-link'>About</a></li>
          <!-- <li <?=@$data["pagename"]=="api"?'class="active nav-item"':'class="nav-item"'?>><a href="/api/showApi" class='nav-link'>Api</a></li> -->
          <li <?=@$data["pagename"]=="api"?'class="active nav-item"':'class="nav-item"'?>><a href="/api/showApi" class='nav-link'>YouTube API</a></li>
          <li <?=@$data["pagename"]=="contact"?'class="active nav-item"':'class="nav-item"'?>><a href="/welcome/contact" class='nav-link'>Contact</a></li>
      </ul>
      <span style="color:red"><?=@$_REQUEST["msg"]?$_REQUEST["msg"]:'';?></span>
      <?if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1) {?>
        <form class="navbar-form navbar-right">
            <a href="/profile">Profile</a><span> | </span>
            <a href="/auth/logout">Logout</a>
        </form>
      <?}else{?>
        <form class="navbar-form navbar-right" method="post" action="/auth/login">
          <div class="form-row">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group col-md-4">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group col-md-4">
            <button type="submit" class="btn btn-default">Log In</button>
            <a href="/registration">Sign Up</a>
            </div>
          </div>
        </form>
      <?}?>
    </div>
  </nav>
</header>

