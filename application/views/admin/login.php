<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin Login</title>

  <?= link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
  <?= link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
  <?= link_tag('assests/css/sb-admin.css'); ?>
  <link rel="icon" type="image/x-icon" href="https://dld87tjdltnh8.cloudfront.net/0/admin_v1/test_management/question_bank/7484890_download.jpg">
  <style>
    .navbar {
      background-color: #ff9700 !important;
    }
  </style>

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Admin Login</div>
      <!---- Error Message ---->

      <?php if ($this->session->flashdata('error')) { ?>
        <p style="color:red; font-size:18px;" align="center"><?= $this->session->flashdata('error'); ?></p>

      <?php } ?>
      <div class="card-body">
        <?= form_open('admin/login'); ?>
        <div class="form-group">
          <div class="form-label-group">
            <?= form_input(['name' => 'username', 'id' => 'username', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => set_value('username')]); ?>
            <?= form_label('Enter Username', 'username'); ?>
            <?= form_error('username', "<div style='color:red'>", "</div>"); ?>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <?= form_password(['name' => 'password', 'id' => 'password', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => set_value('password')]); ?>
            <?= form_label('Password', 'password'); ?>
            <?= form_error('password', "<div style='color:red'>", "</div>"); ?>
          </div>
        </div>

        <?= form_submit(['name' => 'login', 'value' => 'Login', 'class' => 'btn btn-primary btn-block']); ?>
        <a class="d-block small" href="<?= site_url('Home'); ?>">Back to Home page</a>
        <?= form_close(); ?>

      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?= base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

</body>

</html>