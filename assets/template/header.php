<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>LEAD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="./assets/css/bootswatch.min.css">
    
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <img href="" class="navbar-brand" src="../img/LEADLogo.png">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="" id="themes">Pages <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a href="">Default</a></li>
                <li class="divider"></li>
                  <li><a href="<?php echo base_url();?>volunteer">Volunteer Page</a></li>
                  <li><a href="<?php echo base_url();?>admin">Admin Page</a></li>
                  <li><a href="<?php echo base_url();?>systemlog">System Log</a></li>
                  <li><a href="<?php echo base_url();?>account">Account Page</a></li>
                  <li><a href="<?php echo base_url();?>test">Test Page</a></li>
              </ul>
            </li>
            <li>
              <a href="">Help</a>
            </li>
            <li>
              <a href="">Blog</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="" id="download">Download <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a href="">Link</a></li>
                <li><a href="">Link</a></li>
                <li class="divider"></li>
                <li><a href="">Link</a></li>
                <li><a href="">Link</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url();?>login/do_logout/" target="_blank">Logout</a></li>
          </ul>

        </div>
      </div>
    </div>


    <div class="container">