<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="<?= base_url('/admin.css'); ?>">
</head>

<body>
  <div id="container">
    <header>
      <h1>Food admin page</h1>
    </header>
    <nav>
      <a href="<?= base_url('/admin/artikel'); ?>" class="active">Dashboard</a>
      <a href="<?= base_url('/artikel'); ?>">Article</a>
      <a href="<?= base_url('/admin/artikel/add'); ?>">Add Article</a>
      <a href="<?= base_url('/admin/logout'); ?>">Logout</a>
    </nav>
    <section id="wrapper">
      <section id="main">