<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body>
  <div id="container">
    <header>
      <h1>Food Menu</h1>
    </header>
    <div class="topnav">
      <a href="<?= base_url('/'); ?>" class="active">Home</a>
      <a href="<?= base_url('/article'); ?>">Article</a>
      <a href="<?= base_url('/about'); ?>">About</a>
      <a href="<?= base_url('/contact'); ?>">Contact</a>
    </div>
    <section id="hero">
      <h2>About Food</h2>
      <p>
        Food is everything that can be eaten and once digested and absorbed the
        body will be useful for health and survival. According to Wikipedia,
        food is an ingredient, usually of animal or plant origin, that is eaten
        by living things gaining energy and nutrients.
      </p>
      <button>Learn More</button>
    </section>
    <section class="wrapper">
      <div class="main">