   <!-- Horizontal Form -->
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/bootstrap/dist/css/bootstrap.min.css";?>">
  <link rel="stylesheet" href="<?php echo base_url()."assets/dist/css/AdminLTE.min.css";?>">
  <title>IPCOMC - Login Page</title>
</head>
<body>

   <style>
    .loginbox
    {
      /*margin: 180px auto;*/
      width: 450px;
      height: 250px;
      position: relative;
      border-radius: 15px;
      background: #ffffff;
    }
    body{
      background-color: rgb(209,209, 209);
    }
  </style>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="margin-top: 150px;">
      <?php 
      if (isset($_GET['gagal'])) {
       ?>
       <div class="alert alert-danger">
         <p>
           Gagal login !.
         </p>
       </div>
      <?php } ?>
      <?php 
      if (isset($_GET['akun_berhasil_di_daftarkan'])) {
       ?>
       <div class="alert alert-success">
         <p>
           Akun berhasil di daftarkan !.
         </p>
       </div>
      <?php } ?>
      <div class="box box-info loginbox">
            <div class="box-header with-border">
              <h3 class="box-title">Login Page</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('index.php/Welcome/masuk/') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"> Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2   control-label" >Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
             <div class="col-md-6" align="left">
      <a href="<?php echo base_url('index.php/c_akun/daftar_akun/'); ?>" class="btn btn-primary btn-rounded">Register</a>
                            </div>
                            <div class="col-md-6" align="right">
                            <button type="submit" class="btn btn-info btn-success btn-rounded tombol-masuk">Login</button>
                            </div>


              <!-- /.box-footer -->
            </form>
          </div>
    </div>
    <div class="col-md-4"></div>
  </div>
</body>
</html>




