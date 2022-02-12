<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <title>Login | Company Name</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css')?>">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Login Form</div>
      <form action="<?= base_url('auth/check'); ?>" method="post">
      <?= csrf_field();?>
      <?php if(!empty(session()->getFlashdata('fail'))) : ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
      <?php endif ?>

      <?php if(!empty(session()->getFlashdata('success'))) : ?>
      <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
      <?php endif ?>
        <div class="field <?= isset($validation) ? 'new' : '' ?>">
          <input type="text" name="email" value="<?= set_value('email');?>">
          <label>User Id</label>
          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
        </div>
        <div class="field <?= isset($validation) ? 'new' : '' ?>">
          <input type="password" name="password" value="<?= set_value('password');?>">
          <label>Password</label>
          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
        </div>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
          <div class="pass-link"><a href="#">Forgot password?</a></div>
        </div>
        <div class="field">
          <input type="submit" value="Login">
        </div>
        <!-- <div class="signup-link">Not a member? <a href="<?= base_url('auth/sign_up'); ?>">Signup now</a></div> -->
      </form>
    </div>
  </body>
</html>

