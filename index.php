<?php
 $path = $_SERVER["REQUEST_URI"];

 $path = trim( $path, '/' );

 $path  = parse_url( $path, PHP_URL_PATH );

 switch ( $path ) {
  case 'login':
    require "login.php";
    break;
  case 'signup':
    require "signup.php";
    break;
  case 'manage-posts-add':
    require "manage-posts-add.php";
    break;
  case 'manage-posts-edit':
    require "manage-posts-edit.php";
    break;
  case 'manage-posts':
    require "manage-posts.php";
    break;
  case 'manage-users-add':
    require "manage-users-add.php";
    break;
  case 'manage-users-edit':
    require "manage-users-edit.php";
    break;
  case 'manage-users':
    require "manage-users.php";
    break;
  case 'post':
    require "post.php";
    break;
  default:
    require "home.php";
    break;
 }

 ?>