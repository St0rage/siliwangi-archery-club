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
        <h2 style="text-align: center;">STABILIZATOR</h2>
        <p>Stabilizator / stabilizer berfungsi untuk mengatur keseimbangan busur,tak hanya itu guna lainnya adalah sebagai penahan saat melakukan tembakan.Jadi stabilizer termasuk aksesoris yang wajib anda punya ,karena sangat membantu anda agar nyaman saat latihan panahan.Dalam stabilizer panahan terdiri banyak komponen seperti long red+V-bar+short red+extender rod.Busur setiap orang memiliki bobot yang berbeda,bilah keseimbhangan juga memiliki efek yang berbeda sesuai dengan lokasi pemasangan.</p>
        <div style="width: 100%; text-align: center;">
            <img src="<?= base_url() ?>/images/gambar/stabilizator/st1.png" alt="">
        </div> 
        <p>Jadi ketika memilih untuk memasang stabilizer,anda harus mencoba mencari panjang dan berat yang berbeda.Coba beberapa konfigurasi dan pilih sesuai dengan keinginan anda sendiri,jika seseorang suka memasang dekat haluan atau bahkan dipasang dibagian dalam haluan,selama anda tidak menyentuh senarnya.Dan jangan melebihi lebar (80cm adalah batas atas ruang yang diizinkan untuk digunakan oleh pemain pada aturan).</p>
        <p>Pada dasaranya tidak akan terlalu banyak aturan ,ada beberapa bahan utama untuk stabilizer :</p>
        <ol>
            <li>Stainles</li>
            <li>Serat karbon</li>
            <li>Alumunium</li>
            
        </ol>
        <h5>Ukuran stabilizer</h5>
        <p>Untuk ukuran stabilizer itu all size dalam arti memiliki ukuran yang sama, tidak ada pembeda karena stabilizer panahan memang sudah diukur sama.Jadi anda tidak perlu mencari tahu dulu ukuran stabilizer.Untuk stabilizer cartel ,biasanya bermerk maxion tergantung anda menggunakan busur lokal atau luar,untuk busur lokal kami menjual beberapa busur yang bagus untuk anda gunakan.Busur untuk pemula,propfesional bahkan anak-anak.Busur untuk pemula kami adalah standar bow yang dimana bernama street fighter ,dimana busur ini cocok untuk pemula karena berat tarikannya sangat ringan.</p>

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