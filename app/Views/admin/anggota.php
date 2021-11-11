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
          <div class="col-lg">
            <?php if (session()->getFlashdata("message")) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata("message") ?>
            </div>
            <?php endif; ?>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Username</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Email</th>
                  <th scope="col">No HP</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Role</th>
                  <th scope="col">Status Anggota</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($users as $user) : ?>
                <tr>
                  <th scope="row"><?= $i++; ?></th>
                  <td><?= $user->username; ?></td>
                  <td><?= $user->fullname ? $user->fullname : '-'; ?></td>
                  <td><?= $user->email; ?></td>
                  <td><?= $user->phone ? $user->phone : '-'; ?></td>
                  <td><?= $user->gender ? $user->gender : '-'; ?></td>
                  <td><?= $user->address ? $user->address : '-'; ?></td>
                  <td><?= $user->role; ?></td>
                  <td><?= $user->active === '1' ? 'Anggota resmi' : 'Anggota belum resmi' ; ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
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
