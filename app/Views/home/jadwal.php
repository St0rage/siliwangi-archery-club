<?= $this->extend('home/templates/index') ?>

<?= $this->section('page-content'); ?>
<!-- pageheader
    ================================================== -->
    <section class="s-pageheader s-pageheader--home">
        <header class="header">
            <div class="header__content row">
                <h1 style="color: white;">INFO DAN JADWAL</h1>


                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">PERPANI</h2>

                    
                    <ul class="header__nav">
                        <li class="current"><a href="<?= base_url() ?>" title="">Home</a></li>
                        <li class="has-children">
                            <a href="#0" title="">Profile</a>
                            <ul class="sub-menu">
                            <li><a href="<?= base_url('profile/sejarah') ?>">Sejarah TIM SAC</a></li>
                            <li><a href="<?= base_url('profile/kepengurusan') ?>">Kepengurusan</a></li>
                            <li><a href="<?= base_url('profile/galeri') ?>">Galeri</a></li>
                            
                            </ul>
                        </li>
                        <li><a href="<?= base_url('infojadwal') ?>" title="">Info Jadwal</a></li>
                        <li><a href="<?= base_url('alat') ?>" title="">Alat</a></li>
                        <li class="has-children">
                            <a href="#0" title="">Materi</a>
                            <ul class="sub-menu">
                            <li><a href="<?= base_url('materi/teknikdasar') ?>">Teknik Dasar</a></li>
                            <li><a href="<?= base_url('materi/aturan') ?>">Aturan Panahan</a></li>
                            <li><a href="<?= base_url('materi/point') ?>">Cara Menghitung Point</a></li>
                            
                            </ul>
                        </li>
                        <li><a href="<?= base_url('user') ?>" title="">Daftar</a></li>
                        <li><a href="<?= base_url('faq') ?>" title="">FAQ</a></li>
                    </ul> <!-- end header__nav -->
            </div> <!-- header-content -->
        </header> <!-- header -->
    </section> <!-- end s-pageheader -->


    <div class="col-full s-content__main">
        <h2 style="text-align: center;">Jadwal Latihan SAC</h2>
        <table class="table" border= "1" callspacing="0" callpadding="7" style="margin: auto;">
            <thead>
              <tr>
                <th scope="col" style="text-align: center;">No</th>
                <th scope="col" style="text-align: center;">Hari</th>
                <th scope="col" style="text-align: center;">Waktu</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" style="text-align: center;">1</th>
                <td style="text-align: center;">kamis</td>
                <td style="text-align: center;">15.00 WIB - Selesai</td>
              </tr>
              <tr>
                <th scope="row" style="text-align: center;">2</th>
                <td style="text-align: center;">Jum'at</td>
                <td style="text-align: center;">13.30 WIB - Selesai</td>
              </tr>
              <tr>
                <th scope="row" style="text-align: center;">3</th>
                <td style="text-align: center;">Sabtu</td>
                <td style="text-align: center;">12.30 WIB - Selesai</td>
              </tr>
              <tr>
                <th scope="row" style="text-align: center;">3</th>
                <td style="text-align: center;">Minggu</td>
                <td style="text-align: center;">12.30 WIB - Selesai</td>
              </tr>
            </tbody>
          </table>
        <br>
          <h5>LOKASI : Jl.Raya Samarang, Tarogong, Kec.Tarogong Kaler, Kabupaten Garut, Jawa Barat 44151 (pinggir pelagio cafe)</h5>
          <br>
          <br>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.5649847263703!2d107.88054961357287!3d-7.194037894806126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68b135e30cc065%3A0x2eab8b0c14c7a1d!2sPelagio%20Cafe!5e1!3m2!1sid!2sid!4v1636720300426!5m2!1sid!2sid" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          
         
 



    </div> <!-- end s-content__main -->


  

    <!-- s-extra
    ================================================== -->
    <section class="s-extra">

        <div class="row top">

        </div> <!-- end row -->

    </section> <!-- end s-extra -->


    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">
    
        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>© Copyright Archery 2021</span> 
                        <span>WebSite</span>
                    </div>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"></a>
                    </div>
                </div>
            </div>
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->
<?= $this->endSection(); ?>
