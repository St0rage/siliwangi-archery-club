<?= $this->extend('home/templates/index') ?>

<?= $this->section('page-content'); ?>
 <!-- pageheader
    ================================================== -->
    <div class="s-pageheader">

        <header class="header">
            <h1 style="color: white; text-align: center; height: 50px;">GALERI KEGIATAN SAC</h1>
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
                            <img src="<?= base_url() ?>/galeri/1.png" 
                                 srcset="<?= base_url() ?>/galeri/1.png 1x, galeri/1.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/2.png" 
                                 srcset="<?= base_url() ?>/galeri/2.png 1x, galeri/2.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/3.png" 
                                 srcset="<?= base_url() ?>/galeri/3.png 1x, galeri/3.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <var>  <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/4.png" 
                                 srcset="<?= base_url() ?>/galeri/4.png 1x, galeri/4.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/5.png" 
                                 srcset="<?= base_url() ?>/galeri/5.png 1x, galeri/5.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/6.png" 
                                 srcset="<?= base_url() ?>/galeri/6.png 1x, galeri/6.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/7.png" 
                                 srcset="<?= base_url() ?>/galeri/7.png 1x, galeri/7.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/8.png" 
                                 srcset="<?= base_url() ?>/galeri/8.png 1x, galeri/8.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article --></var>
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/9.png" 
                                 srcset="<?= base_url() ?>/galeri/9.png 1x, galeri/9.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/10.png" 
                                 srcset="<?= base_url() ?>/galeri/10.png 1x, galeri/10.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/12.png" 
                                 srcset="<?= base_url() ?>/galeri/12.png 1x, galeri/12.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/13.png" 
                                 srcset="<?= base_url() ?>/galeri/13.png 1x, galeri/13.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/14.png" 
                                 srcset="<?= base_url() ?>/galeri/14.png 1x, galeri/14.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/15.png" 
                                 srcset="<?= base_url() ?>/galeri/15.png 1x, galeri/15.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/11.png" 
                                 srcset="<?= base_url() ?>/galeri/11.png 1x, galeri/11.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/16.png" 
                                 srcset="<?= base_url() ?>/galeri/16.png 1x, galeri/16.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/17.png" 
                                 srcset="<?= base_url() ?>/galeri/17.png 1x, galeri/17.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/18.png" 
                                 srcset="<?= base_url() ?>/galeri/18.png 1x, galeri/18.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/19.png" 
                                 srcset="<?= base_url() ?>/galeri/19.png 1x, galeri/19.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/20.png" 
                                 srcset="<?= base_url() ?>/galeri/20.png 1x, galeri/20.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/21.png" 
                                 srcset="<?= base_url() ?>/galeri/21.png 1x, galeri/21.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/22.png" 
                                 srcset="<?= base_url() ?>/galeri/22.png 1x, galeri/22.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/23.png" 
                                 srcset="<?= base_url() ?>/galeri/23.png 1x, galeri/23.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/11.png" 
                                 srcset="<?= base_url() ?>/galeri/24.png 1x, galeri/24.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/25.png" 
                                 srcset="<?= base_url() ?>/galeri/25.png 1x, galeri/25.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/26.png" 
                                 srcset="<?= base_url() ?>/galeri/26.png 1x, galeri/26.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/27.png" 
                                 srcset="<?= base_url() ?>/galeri/27.png 1x, galeri/27.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/28.png" 
                                 srcset="<?= base_url() ?>/galeri/28.png 1x, galeri/28.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/29.png" 
                                 srcset="<?= base_url() ?>/galeri/29.png 1x, galeri/29.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/30.png" 
                                 srcset="<?= base_url() ?>/galeri/30.png 1x, galeri/30.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/31.png" 
                                 srcset="<?= base_url() ?>/galeri/31.png 1x, galeri/31.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/32.png" 
                                 srcset="<?= base_url() ?>/galeri/32.png 1x, galeri/32.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/33.png" 
                                 srcset="<?= base_url() ?>/galeri/33.png 1x, galeri/33.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/35.png" 
                                 srcset="<?= base_url() ?>/galeri/35.png 1x, galeri/35.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/36.png" 
                                 srcset="<?= base_url() ?>/galeri/36.png 1x, galeri/36.png 2x" alt="">
                        </a>
                    </div>
                </article> <!-- end article -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="<?= base_url() ?>/galeri/37.png" 
                                 srcset="<?= base_url() ?>/galeri/37.png 1x, galeri/37.png 2x" alt="">
                        </a>
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