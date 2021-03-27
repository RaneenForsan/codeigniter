<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"></head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
<a href="<?=base_url().'home' ?>" class="navbar-brand">CILearn</a>
<ul class="navbar-nav mr-auto">
<li class="nav-item"><a href="<?=base_url().'about' ?>" class="nav-link">About</a></li>
<li class="nav-item"><a href="<?=base_url().'contact' ?>" class="nav-link">contact</a></li>
<li class="nav-item"><a href="<?=base_url().'posts' ?>" class="nav-link">Posts</a></li>
</ul>

<ul class="navbar-nav ml-auto">
<li class="nav-item"><a href="<?=base_url().'posts/create' ?>" class="nav-link">Create Post</a></li>
<li class="nav-item"><a href="<?=base_url().'Login' ?>" class="nav-link">Login</a></li>
<li class="nav-item"><a href="<?=base_url().'Register' ?>" class="nav-link">Register</a></li>

</ul>
</nav>


<div class="container">


