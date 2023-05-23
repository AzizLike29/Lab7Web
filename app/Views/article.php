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
      <img src="seblak.jpg" title="makanan" alt="makanan" class="image-circle" width="150" style="text-align: center; border: 2px solid black; border-radius: 10px; margin-left: 130px; margin-bottom: 15px;">
      <h1>History of seblak</h1>
      <p>Seblak is one of the Sundanese specialties, especially Bandung, which is now popular among the public. The food, which is identical to the spicy savory taste with kencur spices, can now be easily found and made. Lately, seblak has even been modified with fillings or toppings. It is now common to see seblak containing crackers, eggs, dumplings, feet, cilok and meatballs. Some even add a variety of fish and vegetable meatballs, which are usually the filling of steamboat or suki.
      </p>
    </div>
  </section>
  <?= $this->include('template/footer'); ?>
</body>