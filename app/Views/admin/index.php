<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title; ?></h1>
          </div><!-- /.col -->  
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-6">
            <?php if (!isset($user)) : ?>
            <form action="<?= base_url('admin/index'); ?>" method="POST">
              <div class="form-group">
                <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Masukan Kode Verifikasi" name="OTP">
              </div>
              <button type="submit" name="submit" class="btn btn-lg btn-block btn-primary">Kirim</button>
            </form>
            <?php else : ?>
            <form class="mb-5" action="<?= base_url('admin/activate'); ?>" method="POST">
                <div>
                  <input type="text" name="id" value="<?= $user->id; ?>" hidden readonly>
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" value="<?= $user->username; ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="fullname">Nama Lengkap</label>
                  <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Masukan nama lengkap">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email" value="<?= $user->email; ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="phone">No Hp</label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Masukan no hp">
                </div>
                <div class="form-group">
                  <label for="gender">Jenis Kelamin</label>
                  <select class="custom-select" id="gender" name="gender">
                    <option selected>Pilih...</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="address">Alamat</label>
                  <textarea class="form-control" name="address" placeholder="Masukan alamat" id="address" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-3">Aktifasi</button>
            </form>
            <?php endif; ?>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?= $this->endSection(); ?>
