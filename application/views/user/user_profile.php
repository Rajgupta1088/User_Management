<!DOCTYPE html>
<html lang="en">

<head>
  <title>My Profile</title>
  <?= link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
  <?= link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
  <?= link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
  <?= link_tag('assests/css/sb-admin.css'); ?>
  <link rel="icon" type="image/x-icon" href="https://dld87tjdltnh8.cloudfront.net/0/admin_v1/test_management/question_bank/7484890_download.jpg">
  <style>
    .navbar {
      background-color: #2575fc !important;
    }
  </style>
</head>

<body id="page-top">

  <?php include APPPATH . 'views/user/includes/header.php'; ?>

  <div id="wrapper">

    <?php include APPPATH . 'views/user/includes/sidebar.php'; ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?= site_url('user/Dashboard'); ?>">User</a>
          </li>
          <li class="breadcrumb-item active">My Profile</li>
        </ol>

        <h1>My Profile</h1>
        <hr>
        <?php if ($this->session->flashdata('success')) { ?>
          <p style="color:green; font-size:18px;"><?= $this->session->flashdata('success'); ?></p>
      </div>
    <?php } ?>

    <?php if ($this->session->flashdata('error')) { ?>
      <p style="color:red; font-size:18px;"><?= $this->session->flashdata('error'); ?></p>
    <?php } ?>



    <?= form_open('user/User_profile/updateprofile'); ?>

    <p> <strong>Reg Date :</strong> <?= $profile->regDate; ?>


    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-label-group">

            <?= form_input(['name' => 'firstname', 'id' => 'firstname', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => set_value('firstname', $profile->firstName)]); ?>
            <?= form_label('Enter your first name', 'firstname'); ?>
            <?= form_error('firstname', "<div style='color:red'>", "</div>"); ?>

          </div>
        </div>
      </div>
    </div>


    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-label-group">

            <?= form_input(['name' => 'lastname', 'id' => 'lastname', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => set_value('lastname', $profile->lastName)]); ?>
            <?= form_label('Enter your  last name', 'lastname'); ?>
            <?= form_error('lastname', "<div style='color:red'>", "</div>"); ?>

          </div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-label-group">

            <?= form_input(['name' => 'emailid', 'id' => 'emailid', 'class' => 'form-control', 'autofocus' => 'autofocus', 'readonly' => 'true', 'value' => set_value('emailid', $profile->emailId)]); ?>
            <?= form_label('Enter valid email id', 'emailid'); ?>
            <?= form_error('emailid', "<div style='color:red'>", "</div>"); ?>

          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-label-group">

            <?= form_input(['name' => 'mobilenumber', 'id' => 'mobilenumber', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => set_value('mobilenumber', $profile->mobileNumber)]); ?>
            <?= form_label('Enter Mobile Number', 'mobilenumber'); ?>
            <?= form_error('mobilenumber', "<div style='color:red'>", "</div>"); ?>

          </div>
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="col-md-6">
        <?= form_submit(['name' => 'Update', 'value' => 'Update', 'class' => 'btn btn-primary btn-block']); ?>
      </div>
    </div>




    <?= form_close(); ?>

    </div>

    <?php include APPPATH . 'views/user/includes/footer.php'; ?>

  </div>

  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <script src="<?= base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?= base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
  <script src="<?= base_url('assests/js/sb-admin.min.js '); ?>"></script>

</body>

</html>