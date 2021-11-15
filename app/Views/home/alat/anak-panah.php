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
        <h2 style="text-align: center;">ANAK PANAH</h2>
        <p>Anak panah bisa terbuat dari kayu, aluminium, dan karbon. Alat dalam olahraga panahan ini harus memiliki kekakuan dan panjang tertentu. Apabila ukurannya terlalu pendek, anak panah bisa meleset dari busur dan melukai Anda.</p>

        <ol>
            <li>Anak panah kayu</li>
            <img src="<?= base_url() ?>/images/gambar/kayu1.png" alt="" style="margin-left: 10px;">
            <p>Anak panah dapat diproduksi dari kayu, bambu maupun rotan. Sedangkan mata panah diproduksi dari besi, kaca, batu, tulang maupun bahan keras pautannya. fungsi dari head arrow ini adalah untuk melindungi batang/badan anak panah dan kemampuanya dalam mengenai target.</p>
            <P>Panjang anak panah adalah sekitar 60 cm, dengan berat 18 gram. semakin besar diameter suatu anak panah, karenanya tingkat kerusakan yang dihasilkan semakin besar, tetapi melayang lebih lambat di bandingkan dengan anak panah berdiameter lebih kecil. diameter anak panah yang kecil hendak membikin anak panah mampu meluncur dengan lebih cepat tetapi kerusakan yang dihasilkan hendak lebih lemah.</P>
            <P>Sedangkan wings/sayap anak panah dapat diproduksi dari bulu sayap kiri unggas, plastik, kertas, kain atau bahan pautannya. wings berfungsi untuk men-stabilkan anak panah sesudah terlontar dari busur. Lebar wings secara langsung hendak mempengaruhi tingkat kebisingan/suara dan kecepatan pada anak panah yang sedang meluncur/melayang.</P>
            <li>Anak panah alumunium</li>
            <img src="<?= base_url() ?>/images/gambar/alumunium1.png" alt="" style="margin-left: 10px;">
            <p>Anak panah ini memiliki tingkat kelurusan yang tinggi, sehingga sering digunakan untuk kejuaraan. Harga anak panah jenis ini lebih mahal dari wooden atau fiberglass, namun masih terbilang terjangkau. Anak panah jenis ini memang bisa melengkung atau bengkok, namun mudah diperbaiki dan digunakan kembali. Berbeda dengan fiberglass yang tidak kuat dan patah apabila mendapat tekanan.</p>
            <li>Anak panah karbon</li>
            <img src="<?= base_url() ?>/images/gambar/karbon1.png" alt="" style="margin-left: 10px;">
            <p>Anak panah berbahan karbon umumnya digunakan oleh pemanah yang memakai compound atau recurve bow. Harga anak panah ini cukup mahal, sesuai dengan kualitasnya. Tingkat kelurusan anak panah ini sangat tinggi. Anak panah jenis ini cukup awet dan ringan, serta cocok untuk digunakan kompetisi memanah jarak jauh. Penggguna anak panah jenis ini perlu memperhatikan kondisi anak panahnya, karena apabila ada retak atau pecah dapat melukai tangan. Anak panah ini cocok untuk pengguna recurve jarak jauh atau pengguna compound bow.</p>
        </ol>

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