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
        <h2 style="text-align: center;">BUSUR</h2>

        <ol>
            <li type="A">Busur Panjang (Long Bow), yang paling tua usianya</li>
            <img src="<?= base_url() ?>/images/gambar/busur panjang1.png" alt="" style="margin-left: 10px;">
            <p>Busur panjang memiliki usia paling tua. (Foto: Archery world)
                Long Bow merupakan jenis busur yang diketahui paling tua usianya. Busur ini terbuat dari kayu atau 7ea ra. Dimensinya cukup panjang kira-kira sama dengan tinggi penggunanya, biasanya dapat mencapai 2 meter. Dimensi busur yang panjang ini dimaksudkan agar busur tersebut dapat ditarik hingga mencapai wajah penggunanya.</p>
                <li type="A">Busur Pendek (Short Bow), yang punya kecepatan lebih</li>
                <img src="<?= base_url() ?>/images/gambar/busur pendek1.png" alt="" style="margin-left: 10px;">
                <p>Busur pendek yang punya kecepatan lebih </p>
                <p>Busur ini adalah desain versi yang lebih pendek dari long bow maupun flat bow. Kelemahan dari short bow adalah bahwa tarikan tidak panjang mengingat busurnya juga pendek.Oleh karena itu short bow juga mempunyai jangkauan lebih pendek namun kecepatan yang lebih dibandingkan dengan long bow atau flat bow. Short bow dulu lebih banyak digunakan untuk tujuan berburu oleh suku-suku pedalaman Amerika dan Afrika.</p>
                <li type="A">Horsebow – Jenis Busur Panah Kuda</li>
                <img src="<?= base_url() ?>/images/gambar/horse bow1.png" alt="" style="margin-left: 10px;">
                <p>Horsebow merupaka jenis busur panah yang sangat banyak digemari pada archer. Seperti namanya, panah jenis ini dapat digunakan sambil menunggang kuda. Bahan busur ini bermacam-macam. Ada yang terbuat dari Efoxy Fiberglas, laminasi kayu dan fiber, dan bahan-bahan komposit lainnya. Jenis busur ini diproduksi di dalam negeri dan luar negeri.Jarak tembak busur panah ini sangat jauh. Sebagian busur jenis ini bahkan dapat mencapai jarak lebih dari 100 meter. Panah ini sangat populer di Turki.</p>
                <li type="A">Barebow</li>
                <img src="<?= base_url() ?>/images/gambar/barebow1.png" alt="" style="margin-left: 10px;">
                <p>Barebow merupakan istilah untuk busur-busur panah yang digunakan tanpa memakai aksesoris tamabahan, seperti fisir dan stabilizer. Jarak tempuh tembakan barebow bermacam-macam tergantung dari jenis busur panah yang dipakai oleh seorang archer.</p>
                <li type="A">Fita Nasional / standar bow </li>
                <img src="<?= base_url() ?>/images/gambar/fita nasional1.png" alt="" style="margin-left: 10px;">
                <p>Ronde ini hanya ada di Indonesia di mana jarak yang diperlombakan hanyalah 30, 40, dan 50 meter. Ronde ini jauh lebih ringan bila dibandingkan dengan recuve serta compound dan pemula biasanya yang menggunakan ronde ini.</p>
                <li type="A">Fita Recuve </li>
                <img src="<?= base_url() ?>/images/gambar/fita recurve1.png" alt="" style="margin-left: 10px;">
                <p>Alat menembak atau panah ini adalah buatan Korea dan Amerika di mana penggunaannya memang untuk standar pertandingan internasional. Panah ini terbuat dari campuran karbon dan fiber di mana beratnya dalah sekitar 5 kg dan jarak perlombaan adalah mulai dari 30-90 meter. Recurve bow merupakan jenis busur yang digunakan sebagai standar bagi kompetisi internasional. Recurve bow memiliki ciri khas berupa bagian limb yang melengkung menjauhi pemanah. Bentuk busur seperti ini memungkinkan busur tersebut menyimpan energi yang sama dengan busur berbentuk lurus dengan panjang busur yang lebih pendek.</p>
                <li type="A">Fita Coumpound  </li>
                <img src="<?= base_url() ?>/images/gambar/fita compound1.png" alt="" style="margin-left: 10px;">
                <p>Compund Bow merupakan busur yang memiliki sistem penembakan yang unik. Dibandingkan dengan straight bow dan recurve bow yang hanya mengandalkan string untuk melakukan penembakan, compound bow memiliki mekanisme katrol dalam melakukan penembakan. Mekanisme ini membuat compound bow memiliki karakteristik yang unik saat drawing yaitu “berat di awal, ringan di akhir”. Karakteristik tersebut disebut “let off”. Selain itu limb pada busur ini juga lebih kaku dibanding dengan recurve bow dan straight bow sehingga busur ini dapat menyimpan dan menyalurkan energi secara lebih efisien. Perkembangan terakhir dari teknologi pembuatan busur ini memungkinkan busur ini untuk melesatkan panah sampai dengan kecepatan 340 feet/second.</p>
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