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
        <div class="row">
          <div class="col-lg-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4 position-relative">
                    <div class="input-cont" style="z-index: 999;">
                      <form action="<?= base_url('user/index'); ?>" method="POST" enctype="multipart/form-data">
                        <input type="file" id="photo" name="photo" style="display:none;">
                        <label for="photo" class="my-input" >
                          <i class="nav-icon fas fa-camera"></i>
                        </label>
                      </form>
                    </div>
                    <img src="img/<?= user()->user_image; ?>" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <table class="table table-sm table-borderless">
                        <tbody> 
                          <tr>
                            <td colspan="2" class="font-weight-light text-muted">Username</td>
                            <td><?= user()->username ?></td>
                          </tr>
                          <tr>
                            <td colspan="2" class="font-weight-light text-muted">Nama Lengkap</td>
                            <td><?= user()->fullname ? user()->fullname : '-' ?></td>
                          </tr>
                          <tr>
                            <td colspan="2" class="font-weight-light text-muted">Email</td>
                            <td><?= user()->email ?></td>
                          </tr>
                          <tr>
                            <td colspan="2" class="font-weight-light text-muted">No HP</td>
                            <td><?= user()->phone ? user()->phone : '-' ?></td>
                          </tr>
                          <tr>
                            <td colspan="2" class="font-weight-light text-muted">Jenis Kelamin</td>
                            <td><?= user()->gender ? user()->gender : '-' ?></td>
                          </tr>
                          <tr>
                            <td colspan="2" class="font-weight-light text-muted">Alamat</td>
                            <td><?= user()->address ? user()->address : '-' ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
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
