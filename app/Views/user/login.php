<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="<?= base_url('/login.css'); ?>">
</head>

<body>
  <div id="login-wrapper">
    <h1>Sign In</h1>
    <?php if (session()->getFlashdata('flash_msg')) : ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('flash_msg') ?></div><br>
    <?php endif; ?>
    <form action="" method="post">
      <div class="mb-3">
        <label for="InputForEmail" class="form-label">Email Address</label><br>
        <input type="email" name="email" class="form-control" id="InputForEmail" placeholder="Please write the email name..." value="<?= set_value('email') ?>">
      </div>
      <div class="mb-3">
        <label for="InputForPassword" class="form-label">Password You</label><br>
        <input type="password" name="password" class="form-control" id="InputForPassword" placeholder="Please write the password...">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</body>

</html>