<?= $this->extend('home/templates/index') ?>

<?= $this->section('page-content'); ?>
<!-- pageheader
    ================================================== -->
    <section class="s-pageheader s-pageheader--home">
        <header class="header">
            <div class="header__content row">
                <h1 style="color: white;">Kepengurusan TIM SAC Garut</h1>


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
        <h2>Tugas dan Fungsi Struktur Organisasi</h2>
   <p>Adapun <b style font: 1em sans-serif;>Jobdesk</b> dari struktur organisasinya pun sebagai berikut :</p>
   <ol>
       <li>Dewan Pembina dan Pendiri
        <ul>
            <li>Membentuk dan mengarahkan setiap anggotanya</li>
            <li>Memberikan perlindungan yang bersifat eksternal</li>
            <li>Menerima laporan dari ketua umum</li>
            <li>Mengawasi kinerja setiap anggotanya</li>
        </ul>
       </li>
       <li>Ketua Umum
        <ul>
            <li>Memimpin dan memberi persetujuan segala keputusan rapat.</li>
            <li>Memberikan teguran kepada divisi dan anggota bila tidak menjalankan tugas</li>
            <li>Memberikan laporan kegiatan dari kordinator – koordinator divisi</li>
            <li>Membagi tugas dan fungsi kerja, serta meminta masukan dari wakil ketua / koordinator divisi</li>
            <li>Memberikan mandat kepada wakil (jika ada) bila ada halangan</li>
        </ul>
       </li>
       <li>Ketua Harian
        <ul>
            <li>Memberikan laporan setiap kegiatan kepada ketua umum baik yang akan dilakukan atau yang sedang berjalan</li>
            <li>Bertanggung jawab atas kelancaran setiap Latihan / pada saat pertandingan</li>
            <li>Menjadi wakil ketika ketua umum tidak dapat hadir</li>
        </ul>
       </li>
       <li>Sekretaris Umum
        <ul>
            <li>Membuat surat-surat yang diperlukan</li>
            <li>Mencatat hasil keputusan rapat termasuk usulan, kritik dan saran</li>
            <li>Membuat laporan pertanggung jawaban kegiatan atas pelaksanaan kegiatan</li>
            <li>Arsip surat keluar atau masuk</li>
        </ul>
       </li>
       <li>Bendahara
        <ul>
            <li>Membuat rencana anggaran</li>
            <li>Menyimpan dan mengelola keuangan</li>
            <li>Membuat laporan keuangan</li>
            <li>Membukukan segala pengeluaran atau menerima dan mencatat tanggal uang yang masuk beserta sumber dan jumlah dana</li>
            <li>Meminta persetujuan ketua sebelum mengeluarkan uang dan dapat berkoordinasi dengan anggota</li>

        </ul>
       </li>
       <li>Bidang Organisasi dan Hukum
        <ul>
            <li>penyusunan peraturan internal</li>
            <li>Mengelola informasi hukum</li>
            <li>Memberikan layanan advokasi dan bantuan hukum</li>
            <li>Menyiapkan proses pembinaan dan penataan organisasi</li>
            <li>Menelaah dan menilai usulan pengembangan organisasi</li>
        </ul>
       </li>
       <li>Bidang bina prestasi dan litbang
        <ul>
            <li>Memastikan standar kualitas atlet</li>
            <li>Membina Atlet sesuai dengan jenjangnya</li>
            <li>Mengetahui setiap perkembangan setiap atlet</li>
            <li>Memastikan kesiapan atlet sebelum bertanding</li>
        </ul>
       </li>
       <li>Bidang hubungan masyarakat dan kesekretariatan
        <ul>
            <li>Memberikan informasi, meyakinkan dan meraih simpati masyarakat agar bergabung dengan TIM</li>
            <li>Bertugas untuk mengetahui dan mengevaluasi opini-opini public yang berkaitan dengan TIM</li>
            <li>Memanfaatkan komunikasi sebagai media untuk menarik orang banyak</li>
        </ul>
       </li>
       <li>Bidang peralatan dan logistic
        <ul>
            <li>Bertanggung jawab untuk menjaga alat-alat</li> 
            <li>Memastikan alat yang di gunakan setiap atlet memenuhi standar</li> 
            <li>Memastikan keamanan alat</li>
        </ul>
       </li>
       <li>Bidang Kesehatan
        <ul>
            <li>Memastikan Kesehatan setiap atlet</li>
            <li>Memberikan saran dan masukan kepada setiap atlet mengenai Kesehatan</li>
            <li>Membantu mengurangi resiko cedera atlet</li>            
        </ul>
       </li>
       <li>Bidang dana usaha
        <ul>
            <li>Mengatur dan melaksanakan administrasi keuangan</li>
            <li>Merealisasikan sumber dana dari iuran anggota</li>
            <li>Bertugas untuk menjalin Kerjasama dengan pihak lain / luar.</li> 
        </ul>
       </li>
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