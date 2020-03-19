<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body class="hold-transition login-page" id="login">

  <?php
    if (isset($_GET['pesan'])){
     $pesan = $_GET['pesan'];
        if($pesan='false') {
        echo "<marquee>NPM atau Password Salah...</marquee>";
      }
    }
  ?>
  <!-- <div class="col-md-4"> -->
    <!-- general form elements -->
    <div class="card card-primary login-box">
      <div class="card-header">
        <h3 class="card-title">Login</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?php echo base_url('welcome/aksi_login'); ?>" method="post">
        <div class="card-body">
          <div class="form-group">
            <label for="inputNPM">NPM</label>
            <input type="text" class="form-control" name="npm" id="inputNPM" placeholder="NPM" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" required id="exampleInputPassword1" placeholder="Password">
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  <!-- </div> -->
  <!--/.col (left) -->
</body>