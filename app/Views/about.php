<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?= $title; ?></title>
</head>

<body>
  <?= $this->include('template/header'); ?>
  <section id="about">
    <div class="row">
      <img src="Aziz.jpg" title="Aziz" alt="Aziz" class="image-circle" width="150" style="text-align: center; border: 2px solid black; border-radius: 10px; margin-left: 130px; margin-bottom: 15px;">
      <h1>Abdul Aziz Firdaus</h1>
      <p>Hi, My name is Abdul Aziz Firdaus. I am 19 years old. I am a student of Pelita Bangsa University majoring in Informatics Engineering. I was born in Bekasi, July 29, 2003. I currently live in North Bekasi.
      </p>
    </div>
  </section>
  <?= $this->include('template/footer'); ?>
</body>