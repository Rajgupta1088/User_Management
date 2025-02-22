<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/x-icon" href="https://dld87tjdltnh8.cloudfront.net/0/admin_v1/test_management/question_bank/7484890_download.jpg">


  <title>Admin - Manage Users</title>

  <?= link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
  <?= link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
  <?= link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
  <?= link_tag('assests/css/sb-admin.css'); ?>
  <style>
    .navbar {
      background-color: #ff9700 !important;
    }
  </style>
</head>

<body id="page-top">
  <?php include APPPATH . 'views/admin/includes/header.php'; ?>

  <div id="wrapper">

    <?php include APPPATH . 'views/admin/includes/sidebar.php'; ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?= site_url('admin/Dashboard'); ?>">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Manage Users</li>
        </ol>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Users Details
          </div>


          <div class="card-body">
            <div class="table-responsive">
              <?php if ($this->session->flashdata('success')) { ?>
                <p style="color:green; font-size:18px;"><?= $this->session->flashdata('success'); ?></p>
            </div>
          <?php } ?>

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email id</th>
                <th>Reg date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email id</th>
                <th>Reg date</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>

              <?php
              if (count($userdetails)) :
                $cnt = 1;
                foreach ($userdetails as $row) :
              ?>
                  <tr>
                    <td><?= htmlentities($cnt); ?></td>
                    <td><?= htmlentities($row->firstName) ?></td>
                    <td><?= htmlentities($row->lastName) ?></td>
                    <td><?= htmlentities($row->emailId) ?></td>
                    <td><?= htmlentities($row->regDate) ?></td>
                    <td><?= anchor("admin/Manage_Users/getuserdetail/{$row->id}", ' ', 'class="fa fa-edit"') ?>
                      <?= anchor("admin/Manage_Users/deleteuser/{$row->id}", ' ', 'class="fa fa-trash"') ?>

                    </td>
                  </tr>
                <?php
                  $cnt++;
                endforeach;
              else : ?>

                <tr>
                  <td colspan="6">No Record found</td>
                </tr>
              <?php
              endif;
              ?>


            </tbody>
          </table>
          </div>
        </div>

      </div>


    </div>

    <?php include APPPATH . 'views/admin/includes/footer.php'; ?>

  </div>

  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <script src="<?= base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?= base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  <script src="<?= base_url('assests/vendor/chart.js/Chart.min.js'); ?>"></script>
  <script src="<?= base_url('assests/vendor/datatables/jquery.dataTables.js'); ?>"></script>
  <script src="<?= base_url('assests/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>

  <script src="<?= base_url('assests/js/sb-admin.min.js'); ?>"></script>
  <script src="<?= base_url('assests/js/demo/datatables-demo.js'); ?>"></script>
  <script src="<?= base_url('assests/js/demo/chart-area-demo.js'); ?>"></script>

</body>

</html>