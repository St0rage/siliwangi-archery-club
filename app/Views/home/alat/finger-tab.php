<?= $this->extend('home/templates/index') ?>

<?= $this->section('page-content') ?>
<!-- pageheader
    ================================================== -->
    <section class="s-pageheader s-pageheader--home">
        <header class="header">
            <div class="header__content row">
                <h1 style="color: white;">Alat Panahan</h1>


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
        <h2 style="text-align: center;">FINGER TAB</h2>
        <p>Finger tab sendiri dikenal sebagai alat untuk melindungi jari tangan kita dari tali busur. Beberapa pemanah memang lebih memilih menggunakan sarung tangan, tapi pemanah kelas atas biasanya menggunakan finger tab untuk melindungi jari dan memastikan pelepasan anak panah berjalan mulus pada  setiap tembakan.</p>
        <div style="width: 100%; text-align: center;">
            <img src="<?= base_url() ?>/images/gambar/fingertab/11.png" alt="">
        </div> 
        <p>Sebuah finger tab hanyalah selembar kulit yang pas di antara jari (tangan yang digunakan untuk menarik busur) dan tali busur. Bagian yang menempel pada tali busur ini tersedia dalam berbagai jenis kulit, termasuk kulit dengan bulu binatang. Pemanah Recurve lebih memilih kulit karena lebih menjanjikan dari pada sarung tangan.</p>
        <p>Finger tab  bisa saja hanya selembar kulit, namun beberapa memiliki komponen tambahan:</p>
        <ol>
            <li>Satu atau dua potong kulit tambahan diantara jari dan tali busur</li>
            <li>Spacer antara jari telunjuk dan jari tengah untuk menghindari nock menjepit pemanah</li>
            <li>Sebuah pijakan pada bagian atas tab yang memberikan pemanah sentuhan yang kuat ketika menarik anak panah dibawah dagunya</li>
            <li>Bahan elastis atau sejenisnya yang membantu mengamankan tab ke jari tangan.</li>
        </ol>
        <div style="width: 100%; text-align: center;">
            <img src="<?= base_url() ?>/images/gambar/fingertab/2.jpg" alt="">
        </div>
        <p>Ketika latihan, smemulai dengan tab berlapis ganda dengan sedikit pelindung jari ekstrra. Saya juga lebih suka mereka menggunakan spacer agar tidak terjepit, jika mereka menah dengan satu jari di atas nock dan dua di bawah. Untuk siswa yang lebih mahir, coba menentukan tab yang benar dan cocok untuk tangan tertentu serta teknik memanahnya.Hal ini lebih penting daripada memilih tab berdasarkan merek dan atau tampilannya.</p>

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