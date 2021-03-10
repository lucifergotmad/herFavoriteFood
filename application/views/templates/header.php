<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$judul;?></title>
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="<?=base_url();?>">Home</a>
        <a class="nav-link" href="<?=base_url();?>foods">Foods</a>
        <a class="nav-link" href="<?=base_url();?>creator">Creator</a>
      </div>
    </div>
    <a class="navbar-brand" href="#">HerFood</a>
  </div>
</nav>