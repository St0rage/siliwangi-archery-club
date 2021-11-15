<?= $this->extend('home/templates/index') ?>

<?= $this->section('page-content') ?>
<!-- pageheader
    ================================================== -->
    <section class="s-pageheader s-pageheader--home">
        <header class="header">
            <div class="header__content row">
                <h1 style="color: white;">Materi Panahan</h1>


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
       <h5>Cara Menghitung Point Panahan</h5>
       <div style="width: 100%; text-align: center;">
           <img src="<?= base_url() ?>/images/teknik/point panahan.jpg" alt="">
       </div> 
       <p>Tentunya setiap cabang olahraga memiliki aturan tersendiri, khususnya yang memakai poin untuk ukuran kemenangan seperti panahan ini.</p>
       <ul>
        <li>Setiap poin yang pemanah berhasil dapatkan akan dicatat dan pencatatan baru dilakukan setelah beberapa kali tembakan, yakni 3 anak panah.</li>
        <li>Suatu kewajiban bagi para pemanah untuk menyebutkan nominal angka atau poinnya sendiri, sementara untuk pemanah lain yang satu grup berperan sebagai asisten atau membantu pemanah yang tengah mengeksekusi nilai.</li>
        <li>Penentuan dari setiap poin yang diperoleh pemanah didasarkan pada tempat anak panahnya yang sukses tertancap di papan sasaran.</li>
        <li>Perolehan nilai menjadi lebih tinggi pada poin yang pemanah dapatkan bila setiap anak panah berhasil menancap di 2 warna di saat yang sama atau dengan kata lain letaknya ada di garis pemisah antar tiap kolom.</li>
        <li>Sebaliknya, tak ada nilai yang bisa diperoleh bila ada anak panah yang menembus papan sasaran tak tertancap atau terpental atau bahkan mengenai anak panah lain.</li>
        <li>Nilai juga bisa diperoleh ketika permukaan papan target dijumpai adanya bekas tanda anak panah yang pemanah sudah lepaskan. Untuk situasi lainnya, panahan bisa memperoleh nilai jika juri bisa mengidentifikasi anak panah yang mengenai papan target yang sudah ditentukan sebelumnya.</li>
        <li>Skor akan bernilai sama apabila ada anak panah yang mengenai target anak panah lain atau istilahnya sampingan.</li>
        <li>Penentuan skor atau poin di hasil akhir perolehan angka akan disesuaikan dengan tempat penancapan anak panah di papan target apabila anak panah posisinya bersilangan dari anak panah lain.</li>
        <li>Skor untuk penilaian angka tidak akan pemanah peroleh bila anak panah yang berhasil mengenai papan sasaran setelah pemantulan ke tanah.</li>
        <li>Sebelum panitia telah selesai memeriksa hasil akhirnya, peserta atau para pemanah tak diperbolehkan menyentuh papan sasaran yang sudah dipakai untuk menembak.</li>
        <li>Sesudah pencabutan anak panah dari papan sasaran, maka harus ada pemberian tanda di bagian lubang yang telah ditembak oleh pemanah.</li>
       </ul>

       <h5>Papan Sasaran Panahan</h5>
       <p>Ada aturan tersendiri juga untuk papan target atau papan sasaran yang digunakan untuk sebuah kompetisi panahan, yakni seperti di bawah ini.</p>
       <ul>
           <li> 2 standar desain bentuk lingkaran untuk klasifikasi papan sasaran, FITA adalah yang pertama menentukan standar desain papan sasaran di mana FITA sendiri merupakan organisasi memanah tingkat internasional.</li>
           <li>Diameter ukuran parameter target panahan adalah 80 cm dan 122 cm di mana tiap lingkaran target telah dibagi 10 area scoring di mana target pusatnya hanya 1.</li>
           <li>Ukuran sasaran memanah sendiri besarnya berdiameter 122 cm dengan area skoring 6 cm.</li>
           <li>Untuk sasaran memanah yang ukuran diameternya 80 cm, 4 cm adalah lebar dari area skoringnya dan dilihat secara keseluruhan sasaran dibagi menjadi 5 zona warna yang tak sama namun terpusat.</li>
       </ul>
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