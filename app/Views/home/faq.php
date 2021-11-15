<?= $this->extend('home/templates/index') ?>

<?= $this->section('page-content') ?>
<!-- pageheader
    ================================================== -->
    <section class="s-pageheader s-pageheader--home">
        <header class="header">
            <div class="header__content row">
                <h1 style="color: white;">Frequently Asked Questions</h1>


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
        <ol>
            <li>Apa itu Siliwangi Archery Club?</li>
            <p>Siliwangi Archery Club atau disingkat menjadi SAC adalah klub panahan di Kabupaten Garut dibawah induk PERPANI Kab.Garut</p>
            <li>Apa itu PERPANI?</li>
            <p>PERPANI singkatan dari PERSATUAN PANAHAN INDONESIA. Perkembangan olahraga Panahan berawal pada Pekan Olahraga Nasional (PON) 1948 dimana sejak itu cabang termasuk yang banyak diminati peserta. Melihat respon yang begitu positif maka Sri Paku Alam VIII kemudian mendirikan Persatu Panahan Indonesia, pada 12 Juli 1953 dimana ketua umumnya adalah Sri Paku Alam VIII sampa tahun 1953. Pada periode tersebut pula PERPANI bergabung sebagai anggota FITA (Federation Internationale de Tir A L'arc) sebagai induk olahraga Panahan dunia. Atlet Panahan yang terkenal saat itu adalah Donald Pandiangan, bahkan disebut sebagai Robinhood Indonesia. Kemudian Donald membimbing beberapa atlit panahan dimana yang menyolok prestasinya adalah Nurfitriyana Saiman, Lilies Handayani dan Kusuma Wardhani sampai ketiganya sanggup mengukir prestasi gemilang meraih medali Perak pada Olimpiade 1988 di Seoul, Korsel. Ketiganya sampai kini disebut sebagai trio Srikandi Indonesia.</p>
            <li>Apa syarat mendaftar jd member SAC?</li>
            <p>syarat utama sehat jasmani dan rohani,  usia mulai dr 7th sampai dengan 50-60 tahun dan mengisi form pendaftran. Datang latihan rutin dengan memakai pakaian yang nyaman serta sopan dan bersepatu.</p>
            <li>Bagaimana cara mendaftarnya?</li>
            <p>Daftar online melalui website ini di fitur Daftar, lalu verifikasi pendaftaran, mencetak form pendaftaran, serta melakukan registrasi dengan Admin di lokasi.</p>
            <li>Kapan waktu atau jadwal latihannya?</li>
            <p>Jadwal bisa di lihat di fitur Info Jadwal</p>
            <li>Apa prestasi SAC ?</li>
            <p>Juara di berbagai kategori kejuaraan panahan baik tingkat pemula maupun tingkat nasional, contohnya di kejuaraan panahan Sabang Archery Competition juara 2 Putra/putri, Ganesha Open outdoor dan indoor nasional juara 1, 2 putra/ putri, UPI Indoor nasional juara 2 juara 3 Putra Putri, SPAO Nasional juara 1 juara 2 Putra/Putri, IPB open nasional juara 3, SAH Indoor Nasional juara 3 dan masih banyak prestasi lainnya.</p>
            <li>Apa saya harus punya alat panah?</li>
            <p>di sarankan untuk punya sendiri,  diawal bisa pinjam alat club untuk mengetahui ukuran bow yg di gunakan</p>
            <li>Apa jika pinjam alat club kena charge?</li>
            <p>InsyaaAllah tidak selama bisa ikut menjaga alat dalam keadaan baik,  namun jika ada kerusakan atau kehilangan, maka akan dikenakan biaya perbaikan dan atau pengantian</p>
            <li>Bagaimana jika dalam sebulan ada 1 kali tidak masuk?</li>
            <p>Harinya bisa diganti dgn jadwal hari dan jam lain tp masih harus dalam bulan yg sama,  jika tidak minta ganti hari di anggap hangus jika sdh melewati waktu satu bulan</p>
            <li>Tata tertib pembayaran SPP</li>
            <p>SPP di bayarkan setiap awal bulan sebelum tanggal 10. SPP berlaku untuk satu bulan, jika sdh lewat 1 bulan masih ada 1 sesi belum terpakai maka di anggap hangus</p>
            <li>Dimana lokasi Siliwangi Archery Club?</li>
            <p>Lokasi lapangan serta kesekretariatan SAC terletak di Jl.Raya Samarang, Tarogong, Kec.Tarogong Kaler, Kabupaten Garut, Jawa Barat 44151
                (Tepatnya di samping Pelagio Caffe) 
                </p>

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