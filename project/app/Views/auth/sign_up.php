<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Sign Up | Company Name </title>
    <link rel="stylesheet" href="<?= base_url('assets/css/sign_up.css')?>">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <br/>
    <div class="content">
      <form action="<?= base_url('auth/save'); ?>" method="post">
      <?= csrf_field();?>
      <?php if(!empty(session()->getFlashdata('fail'))) : ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
      <?php endif ?>

      <?php if(!empty(session()->getFlashdata('success'))) : ?>
      <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
      <?php endif ?>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Member Id</span>
            <input type="text" name="member_id" placeholder="Enter your Member Id" value="<?= set_value('member_id');?>">
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'member_id') : '' ?></span>
          </div>
          <div class="input-box">
            <span class="details">Total No of Members</span>
            <input type="text" name="members" placeholder="Enter Total No of Members" value="<?= set_value('members');?>">
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'members') : '' ?></span>
          </div>
          <div class="input-box">
            <span class="details">Club Name</span>
            <input type="text" name="club" placeholder="Enter your club name" value="<?= set_value('club');?>">
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'club') : '' ?></span>
          </div>
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" value="<?= set_value('name');?>">
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></span>
          </div>
          <div class="input-box">
            <span class="details">Designation</span>
            <input type="text" name="designation" placeholder="Enter your designation" value="<?= set_value('designation');?>">
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'designation') : '' ?></span>
          </div>
          <div class="input-box">
            <span class="details">Zone Name</span>
            <input type="text" name="zone" placeholder="Enter your zone name" value="<?= set_value('zone');?>">
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'zone') : '' ?></span>
          </div>
          <div class="input-box">
            <span class="details">District Name</span>
            <input type="text" name="district" placeholder="Enter your district name" value="<?= set_value('district');?>">
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'district') : '' ?></span>
          </div>
          <div class="input-box">
            <span class="details">Phone</span>
            <input type="text" name="phone" placeholder="Enter your phone" value="<?= set_value('phone');?>">
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'phone') : '' ?></span>
          </div>
          <div class="input-box">
            <span class="details">Email Address</span>
            <input type="text" name="email" placeholder="Enter your email" value="<?= set_value('email');?>">
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
          </div>
          <div class="input-box">
            <span class="details">Date of Joining</span>
            <input type="date" name="doj" placeholder="Enter your date of joining" value="<?= set_value('doj');?>">
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'doj') : '' ?></span>
          </div>
          <div class="input-box">
            <span class="details">User ID</span>
            <input type="text" name="user_id" placeholder="Enter your user id" value="<?= set_value('user_id');?>">
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'user_id') : '' ?></span>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" value="<?= set_value('password');?>">
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="cpassword" placeholder="Confirm your password" value="<?= set_value('cpassword');?>">
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'cpassword') : '' ?></span>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
        <center><a href="<?= base_url('auth/index'); ?>">Already have an account, Log In</a></center>
      </form>
    </div>
  </div>

</body>
</html>
