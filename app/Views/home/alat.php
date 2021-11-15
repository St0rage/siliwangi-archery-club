<?= $this->extend('home/templates/index') ?>

<?= $this->section('page-content') ?>
<!-- pageheader
    ================================================== -->
    <div class="s-pageheader">

        <header class="header">
            <h1 style="color: white; text-align: center; height: 50px;">ALAT PANAHAN</h1>
            <div class="header__content row">


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

    </div> <!-- end s-pageheader -->


    <!-- s-content
    ================================================== -->
    <section class="s-content">
        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                        <a href="<?= base_url('alat/busur') ?>" class="entry__thumb-link">
                            <img src="<?= base_url() ?>/images/thumbs/masonry/lamp-400.jpg" 
                                 srcset="<?= base_url() ?>/images/thumbs/masonry/a.jpg 1x, images/thumbs/masonry/a.jpg 2x" alt="">
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                            </div>
                            <h1 class="entry__title"><a href="<?= base_url('alat/busur') ?>">Busur</a></h1>
                        </div>
                        <div class="entry__excerpt">
                            <p>Busur panjang memiliki usia paling tua. (Foto: Archery world)
                                Long Bow merupakan jenis busur yang diketahui paling tua usianya. Busur ini terbuat dari kayu atau 7ea ra. Dimensinya cukup panjang kira-kira sama dengan tinggi penggunanya,....</p>
                        </div>
                    </div>
    
                </article> <!-- end article -->

                

                <article class="masonry__brick entry format-standard">
                        
                    <div class="entry__thumb">
                        <a href="<?= base_url('alat/anakpanah') ?>" class="entry__thumb-link">
                            <img src="<?= base_url() ?>/images/archer/finger tab/aw.jpg" 
                                 srcset="<?= base_url() ?>/images/archer/finger tab/tulips-400.jpg 1x, images/archer/finger tab/aw.jpg 2x" alt="">
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                            </div>
                            <h1 class="entry__title"><a href="<?= base_url('alat/anakpanah') ?>">Anak Panah</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>Anak panah bisa terbuat dari kayu, aluminium, dan karbon. Alat dalam olahraga panahan ini harus memiliki kekakuan dan panjang tertentu. Apabila ukurannya terlalu pendek, anak panah bisa meleset dari busur dan melukai Anda.....</p>
                        </div>
                    </div>
    
                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="<?= base_url('alat/fingertab') ?>" class="entry__thumb-link">
                            <img src="<?= base_url() ?>/images/archer/finger tab/ow.jpg" 
                                 srcset="<?= base_url() ?>/images/archer/finger tab/ow.jpg 1x, images/archer/finger tab/ow.jpg 2x" alt="">
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <h1 class="entry__title"><a href="<?= base_url('alat/fingertab') ?>">Finger Tab</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>Finger tab sendiri dikenal sebagai alat untuk melindungi jari tangan kita dari tali busur. Beberapa pemanah memang lebih memilih menggunakan sarung tangan, tapi pemanah kelas atas biasanya menggunakan finger tab untuk melindungi jari dan....</p>
                        </div>
                    </div>
    
                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="<?= base_url('alat/puller') ?>" class="entry__thumb-link">
                            <img src="<?= base_url() ?>/images/archer/puller/pu.jpg" 
                                 srcset="<?= base_url() ?>/images/archer/puller/pu.jpg 1x, images/archer/puller/pu.jpg 2x" alt="">
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            <h1 class="entry__title"><a href="<?= base_url('alat/puller') ?>">Puller</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>Penarik anak panah atau Puller, adalah alat yang di gunakan untuk menarik arrow yang menancap pada target. Karena arrow yang menancap pada target berbeda kedalamannya. arrow yang menancap sangat dalam akan sulit di tarik, apabila tidak menggunakan.....</p>
                        </div>
                    </div>
    
                </article> <!-- end article -->

                 <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="<?= base_url('alat/stabilizator') ?>" class="entry__thumb-link">
                            <img src="<?= base_url() ?>/images/archer/stabilisator/kk.jpg" 
                                 srcset="<?= base_url() ?>/images/archer/stabilisator/kk.jpg 1x, images/archer/stabilisator/kk.jpg 2x" alt="">
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            <h1 class="entry__title"><a href="<?= base_url('alat/stabilizator') ?>">Stabilizator</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>Stabilizator / stabilizer berfungsi untuk mengatur keseimbangan busur,tak hanya itu guna lainnya adalah sebagai penahan saat melakukan tembakan.Jadi stabilizer termasuk aksesoris yang wajib anda punya ,karena sangat membantu anda agar nyaman saat latihan panahan.....</p>
                        </div>
                    </div>
    
                </article> <!-- end article -->


               <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="<?= base_url('alat/string') ?>" class="entry__thumb-link">
                            <img src="<?= base_url() ?>/images/archer/string/hh.jpg" 
                                 srcset="<?= base_url() ?>/images/archer/string/hh.jpg 1x, images/archer/string/hh.jpg 2x" alt="">
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            <h1 class="entry__title"><a href="<?= base_url('alat/string') ?>">String</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>Ibarat roda pada mobil yang mentransfer energi dari mesin dan melesatkan mobil. String pada busur juga memindahkan hentakan energinya kepada arrow hingga terpental melesat menuju target yang di bidik.String busur ini merupakan bagian paling vital dalam.....</p>
                        </div>
                    </div>
    
                </article> <!-- end article -->

                <article class="masonry__brick entry format-audio" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="<?= base_url('alat/visir') ?>" class="entry__thumb-link">
                            <img src="<?= base_url() ?>/images/archer/visir/vs.jpg" 
                                 srcset="<?= base_url() ?>/images/archer/visir/vs.jpg 1x, images/archer/visir/vs.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">
                            <h1 class="entry__title"><a href="<?= base_url('alat/visir') ?>">Visir</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>Penggunaan alat pembidik ini sangat penting karena dalam pertandingan panahan jarak yang digunakan setiap ronde berbeda-beda setiap jaraknya, maka dari itu setiap pemanah akan selalu mengubah alat pembidik dalam setiap jarak apabila pemanah dalam bertanding....</p>
                        </div>
                    </div>

                </article> <!-- end article -->

                <article class="masonry__brick entry format-audio" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="<?= base_url('alat/chest') ?>" class="entry__thumb-link">
                            <img src="<?= base_url() ?>/images/archer/cg.jpg" 
                                 srcset="<?= base_url() ?>/images/archer/cg.jpg 1x, images/archer/cg.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">
                            <h1 class="entry__title"><a href="<?= base_url('alat/chest') ?>">Chest Guard</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
                                Fungsi chest Guard sendiri adalah seperti namanya yaitu untuk melindungi dada/kaos yang dipakai pemanah dari tali busur atau string. Dengan tidak terkenanya tali busur pada dada/kaos kita ini akan membuat lesatan anak panah kita menjadi berjalan baik dan sempurna..
                            </p>
                        </div>
                    </div>

                </article> <!-- end article -->

                <article class="masonry__brick entry format-audio" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="<?= base_url('alat/arm') ?>" class="entry__thumb-link">
                            <img src="<?= base_url() ?>/images/gambar/arm.jpg" 
                                 srcset="<?= base_url() ?>/images/gambar/arm.jpg 1x, images/gambar/arm.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">
                            <h1 class="entry__title"><a href="<?= base_url('alat/arm') ?>">Arm Guard</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>Pelindung lengan (Arm Guard) : Bahan yang terbuat dari campuran plastik, pelindung lengan dipakai dibagian lengan depan kiri. Pelindung lengan berfungsi melindungi lengan dari gesekan tali ke lengan, sehingga pemanah yang sudah mahir selalu menggunakan alat...</p>
                        </div>
                    </div>

                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                        <a href="<?= base_url('alat/quiver') ?>" class="entry__thumb-link">
                            <img src="<?= base_url() ?>/images/gambar/quiver/quiver.jpg" 
                                 srcset="<?= base_url() ?>/images/gambar/quiver/quiver.jpg 1x, image/gambar/quiver/quiver.jpg 2x" alt="">
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                            </div>
                            <h1 class="entry__title"><a href="<?= base_url('alat/quiver') ?>">quiver</a></h1>
                        </div>
                        <div class="entry__excerpt">
                            <p>Kantong panah berfungsi untuk menempatkan anak panah. Anak panah apabila ditempatkan sembarangan tempat akan mudah rusak terutama bulunya. Bahan yang digunakan ada yang terbuat dari kulit, tetapi ada juga yang terbuat dari campuan plastik....</p>
                        </div>
                    </div>
    
                </article> <!-- end article -->

                

                <article class="masonry__brick entry format-standard">
                        
                    <div class="entry__thumb">
                        <a href="<?= base_url('alat/bow') ?>" class="entry__thumb-link">
                            <img src="<?= base_url() ?>/images/gambar/bs3.jpg" 
                                 srcset="<?= base_url() ?>/images/gambar/bs3.jpg 1x, images/gambar/bs3.jpg 2x" alt="">
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                            </div>
                            <h1 class="entry__title"><a href="<?= base_url('alat/bow') ?>">Bow Stand</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>Tempat Bow atau Bow Stand adalah sebuah wadah yang di gunakan sebagai tempat menyimpan bow. Berfungsi untuk menghindari hal yang tidak terduga seperti terinjak, terkena air dan lumpur saat di lapangan. Selain itu berfungsi sebagai tempat penopang...</p>
                        </div>
                    </div>
    
                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="<?= base_url('alat/clicker') ?>" class="entry__thumb-link">
                            <img src="<?= base_url() ?>/images/gambar/clicker/c1.jpg" 
                                 srcset="<?= base_url() ?>/images/gambar/clicker/c1.jpg 1x, images/gambar/clicker/c1.jpg 2x" alt="">
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <h1 class="entry__title"><a href="<?= base_url('alat/clicker') ?>">Clicker</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>Klik anak panah biasanya dipakai oleh pemanah yang sudah menguasai tehnik-tehnik dasar panahan . klicker berfungi sebagai penanda saat anak panah ditari maksimal. Selain itu clicker adalah alat yang berfungsi untuk memeriksa panjang tarikan agar konsisten....</p>
                        </div>
                    </div>
    
                </article> <!-- end article -->

            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

    </section> <!-- s-content -->


   
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