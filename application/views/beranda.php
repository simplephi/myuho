<!DOCTYPE html>
<html>
<head>
<title>UHO</title>

<link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/icon.png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/font.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">


<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<style>
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("<?php echo base_url();?>/assets/images/imag2.png");
    min-height: 100%;
}
</style>
</head>


<body class="bgimg-1" >
<div class="shadow">
<div id="preloader">

  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <br>
            <p style="color:white" id="tgl">
            </p>
          </div>
          <div class="header_top_right"  id="google_translate_element">
             <p><a href="<?php echo site_url('home/index?ln=id')?>" style="color:white">Indonesia</a> |
               <a href="<?php echo site_url('home/index?ln=en')?>" style="color:white">English</p>

          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.html" class="logo"><img src="<?php echo base_url();?>/assets/images/uho.png" height="150" width="150" alt=""></a></div>
          <div class="add_banner"><h1>Universitas Halu Oleo</h1></div>
        </div>
      </div>
    </div>
  </header>

  <section id="navArea">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse ">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="<?php echo base_url();?>"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>

          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">TENTANG UHO</a>
          	<ul class="dropdown-menu" role="menu">
              <li><a href="<?php  echo site_url("home/berita");     ?>" target="_blank">SAMBUTAN REKTOR</a></li>
              <li><a href="http://uho.ac.id/profil.php?read=5">PROFIL UNIVERSITAS</a></li>
              <li><a href="http://uho.ac.id/profil.php?read=6">SEJARAH SINGKAT</a></li>
              <li><a href="http://uho.ac.id/profil.php?read=7">VISI DAN MISI</a></li>
              <li><a href="http://uho.ac.id/profil.php?read=8">TUJUAN STRATEGIS</a></li>
              <li><a href="http://uho.ac.id/profil.php?read=9">SASARAN STRATEGIS</a></li>
              <li><a href="http://uho.ac.id/mou.php">KERJASAMA</a></li>
            </ul>
           </li>

          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">FAKULTAS</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="http://eng.uho.ac.id" target="_blank">TEKNIK</a></li>
              <li><a href="http://fmipa.uho.ac.id" target="_blank">MIPA</a></li>
              <li><a href="http://www.uho.ac.id/fakultas/fhukum/" target="_blank">HUKUM</a></li>
              <li><a href="http://feb.uho.ac.id" target="_blank">EKONOMI DAN BISNIS</a></li>
              <li><a href="http://faperta.uho.ac.id" target="_blank">PERTANIAN</a></li>
              <li><a href="http://fkip.uho.ac.id" target="_blank">KEGURUAN DAN ILMU PENGETAHUAN</a></li>
              <li><a href="#">ILMU BUDAYA</a></li>
              <li><a href="http://www.uho.ac.id/fitk" target="_blank">ILMU DAN TEKNOLOGI KEBUMIAN</a></li>
              <li><a href="http://www.uho.ac.id/fakultas/ftip/" target="_blank">TEKONOLOGI DAN INDUSTRI PERTANIAN</a></li>
              <li><a href="http://www.uho.ac.id/fakultas/fisip/" target="_blank">ILMU SOSIAL DAN ILMU POLITIK</a></li>
              <li><a href="http://www.uho.ac.id/fakultas/fpik/" target="_blank">PERIKANAN DAN ILMU KELAUTAN</a></li>
              <li><a href="http://www.uho.ac.id/fakultas/" target="_blank">KESEHATAN MASYARAKAT</a></li>
              <li><a href="http://fk.uho.ac.id" target="_blank">KEDOKTERAN</a></li>
              <li><a href="http://www.uho.ac.id/fakultas/fhil/" target="_blank">KEHUTANAN DAN ILMU LINGKUNGAN</a></li>
              <li><a href="http://uho.ac.id/farmasi" target="_blank">FARMASI</a></li>
              <li><a href="http://www.uho.ac.id/pascasarjana_uho/" target="_blank">PASCASARJANA</a></li>
              <li><a href="http://ppv.uho.ac.id" target="_blank">PENDIDIKAN VOKASI</a></li>
            </ul>
          </li>

          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">LEMBAGA</a>
          	<ul class="dropdown-menu" role="menu">
              <li><a href="http://lppm.uho.ac.id" target="_blank">LPPM</a></li>
              <li><a href="https://lppmp-uho.info">LPPMP</a></li>
              <li><a href="http://uho.ac.id/lpsi/">LPSI</a></li>
              <li><a href="http://uho.ac.id/bpp/media.php?module=home">BPP</a></li>
            </ul>
           </li>

          <li><a href="pages/publikasi.html" target="_blank">PUBLIKASI</a></li>

          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">UNIT</a>
          	<ul class="dropdown-menu" role="menu">
              <li><a href="http://uho.ac.id/profil.php?read=4" target="_blank">UPT. BAHASA</a></li>
              <li><a href="http://uho.ac.id/profil.php?read=5">UPT. TAMAN ILMU-ILMU HAYATI (BIO SCIENCE PARK)</a></li>
              <li><a href="http://uho.ac.id/profil.php?read=6">UPT. PENDIDIKAN KARAKTER DAN KONSELING</a></li>
              <li><a href="http://uho.ac.id/profil.php?read=7">UPT. LABORATORIUM TERPADU</a></li>
              <li><a href="http://uho.ac.id/profil.php?read=8">UPT. MKU</a></li>
              <li><a href="http://uho.ac.id/profil.php?read=9">UPT. OLAH RAGA DAN PRESTASI</a></li>
              <li><a href="http://uho.ac.id/mou.php">UPT. PPKM</a></li>
              <li><a href="http://uho.ac.id/mou.php">UPT. PANGKALAN DATA DAN TEKNOLOGI INFORMASI</a></li>
              <li><a href="http://uho.ac.id/mou.php">UPT. PERPUSTAKAAN</a></li>
            </ul>
           </li>

           <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ORGAN</a>
          	<ul class="dropdown-menu" role="menu">
              <li><a href="#" target="_blank">SENAT UHO</a></li>
              <li><a href="http://spi.uho.ac.id/" target="_blank" >SPI</a></li>
              <li><a href="#">DEWAN PERTIMBANGAN</a></li>
              <li><a href="#">DKEED</a></li>
            </ul>
           </li>

          <li><a href="pages/404.html"target="_blank">KEMAHASISWAAN</a></li>

		  <li><a href="pages/contact.html"target="_blank">KONTAK</a></li>

		  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">DIREKTORI</a>
		  	<ul class="dropdown-menu" role="menu">
              <li><a href="http://www.uho.ac.id/karya-ilmiah.php" target="_blank">KARYA ILMIAH DOSEN</a></li>
              <li><a href="http://www.uho.ac.id/skripsi.php" target="_blank">SKRIPSI MAHASISWA</a></li>
              <li><a href="http://www.uho.ac.id/mou.php" target="_blank">M O U</a></li>
		  	</ul>
		  </li>
		</div>
    </nav>
  </div>
  </div>

  </section>

  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-12 col-md-8 col-sm-8">
        <div class="slick_slider">
          <?php
            $no=1;
            foreach ($gambar as $key) {

              $id=$key->id_gambar;
          ?>

          <div class="single_iteam"> <a href="pages/single_page.html" target="_blank"> <img src="<?php echo base_url()?>/assets/gambar/<?php echo $key->gambar;?>" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html" target="_blank"><?php echo $key->nama_gambar;?></a></h2>
              <p><?php echo $key->ket_gambar;?></p>
            </div>
          </div>
          <?php
        }
          ?>
        </div>
      </div>

    </div>
  </section>

  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">

          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><a href="<?php echo site_url("home/berita");?>" ><span style="color:white;">BERITA</span></a></h2>
                <?php
                  $no=1;
                  foreach ($berita as $key1) {

                    $id1=$key1->id_berita;
                    if($no==1){
                ?>

                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig"> <a href="<?php echo site_url("home/berita1?id=".$key1->id_berita);?>" class="featured_img"> <img alt="" width="350px" height="200px" src="<?php echo base_url()?>assets/image/<?php echo $key1->gambar_berita;?>"> <span class="overlay"></span> </a>
                      <figcaption> <a href="<?php echo site_url("home/berita1?id=".$key1->id_berita);?>" target="_blank"><?php echo $key1->nama_berita; ?></a> </figcaption>
                    <!--  <p><?php echo substr($key1->ket_berita,0,30); ?></p> -->
                    </figure>
                  </li>
                </ul>
                <?php
              }
              else
              {
                if($no<=5){
                ?>
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?php echo base_url()?>/assets/image/<?php echo $key1->gambar_berita;?>"> </a>
                      <div class="media-body"> <a href="<?php echo site_url("home/berita1?id=".$key1->id_berita);?>" class="catg_title">  <?php echo $key1->nama_berita; ?>  </a>
                  <!--      <p><?php echo substr($key1->ket_berita,50,100); ?></p></div> -->
                     </div>
                  </li>
                </ul>
                <?php
              }
              else
              {
                break;
              }

                }
                $no++;

              }
                ?>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><a href="<?php echo site_url("home/pengumuman");?>" ><span style="color:white;">PENGUMUMAN</span></a></h2>
                <?php
                  $no4=1;
                  foreach ($pengumuman as $key4) {

                    $id4=$key4->id_pengumuman;
                    if($no4==1){

                ?>
                <ul class="business_catgnav">
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href="<?php echo site_url("home/pengumuman1?id=".$key4->id_pengumuman);?>" class="featured_img"> <img alt="" width="350px" height="200px" src="<?php echo base_url()?>/assets/pengumuman/<?php echo $key4->gambar;?>"> <span class="overlay"></span> </a>
                      <figcaption> <a href="<?php echo site_url("home/pengumuman1?id=".$key4->id_pengumuman);?>"><?php echo $key4->judul; ?></a> </figcaption>
                      <p><?php echo substr($key4->isi,0,30); ?></p>
                    </figure>
                  </li>
                </ul>
                <?php
              }
              else
              {
                if($no4<=5)
                {
                ?>
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="<?php echo site_url("home/pengumuman1?id=".$key4->id_pengumuman);?>" class="media-left"> <img alt="" src="<?php echo base_url()?>/assets/pengumuman/<?php echo $key4->gambar;?>"> </a>
                      <div class="media-body"> <a href="<?php echo site_url("home/pengumuman1?id=".$key4->id_pengumuman);?>" class="catg_title"><?php echo $key4->judul; ?></a>
                        <p><?php echo substr($key4->isi,0,30); ?></p>
                       </div>
                    </div>
                  </li>

                </ul>
                <?php
              }
              else
              {
                break;
              }
              }
              $no4++;
            }
                ?>
              </div>
            </div>
          </div>


        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">


          <div class="single_sidebar wow fadeInDown">

            <h2><a href="<?php echo site_url("home/agenda");?>" ><span style="color:white;">AGENDA</span></a></h2>
            <?php
              $no7=1;
              foreach ($agenda as $key7) {

                $id7=$key7->id_agenda;
                if($no7==1){

            ?>
            <ul class="business_catgnav">
              <li>
                <figure class="bsbig_fig wow fadeInDown"> <a href="<?php echo site_url("home/agenda1?id=".$key7->id_agenda);?>" class="featured_img"> <img alt="" width="350px" height="200px" src="<?php echo base_url()?>/assets/agenda/<?php echo $key7->gambar;?>"> <span class="overlay"></span> </a>
                  <figcaption> <a href="<?php echo site_url("home/agenda1?id=".$key7->id_agenda);?>"><?php echo $key7->judul; ?></a> </figcaption>
                </figure>
              </li>
            </ul>
            <?php
          }
          else
          {
            if($no7<=5)
            {
            ?>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="<?php echo site_url("home/agenda1?id=".$key7->id_agenda);?>" class="media-left"> <img alt="" src="<?php echo base_url()?>/assets/agenda/<?php echo $key7->gambar;?>"> </a>
                  <div class="media-body"> <a href="<?php echo site_url("home/pengumuman1?id=".$key7->id_agenda);?>" class="catg_title"><?php echo $key7->judul; ?></a>
                    <p><?php echo substr($key7->isi,0,30); ?></p>
                   </div>
                </div>
              </li>

            </ul>
            <?php
            }
            else{
              break;
            }
          }
          $no7++;
        }
            ?>
        </aside>
      </div>
    </div>



	<div class="row">
      <div class="col-lg-12 col-md-8 col-sm-8">
        <div class="left_content">
	<div class="single_post_content">
            <h2><span>Galery</span></h2>
            <ul class="photograph_nav  wow fadeInDown">

              <?php
              $no=1;
               foreach ($galeri as $key3){

                $id=$key3->id_galeri;
                  ?>

              <li>
                <div class="photo_grid">
                  <figure class="effect-layla">
                    <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url();?>assets/galeri/<?php echo $key3->gambar;?>"
                      title="<?php echo $key3->galeri;?>">
                      <img src="<?php echo base_url();?>assets/galeri/<?php echo $key3->gambar;?>" </a>
                     </figure>
                </div>
              </li>
            <?php
            }
          ?>

            </ul>

          </div>

          </div>
            <p><?php echo $links; ?></p>
        </div>
      </div>
  </section>

  <footer id="footer ">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">
            <h2>Kerjasama</h2>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Tag</h2>
            <ul class="tag_nav">
              <li><a href="#">Games</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Fashion</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Life &amp; Style</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">Photo</a></li>
              <li><a href="#">Slider</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Contact</h2>
            <p>Gedung Rektorat Lt. 1
				Kampus Hijau Bumi Tridharma
				Anduonou Kendari, 93132
			</p>
			<p>
				Telp: 0401-3190105
				Fax: 0401-3194108
			</p>
           <p>
			Email: info@unhalu.ac.id
		   </p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; 2017 <a href="index.html">NewsFeed</a></p>
      <p class="developer">Developed By @UHO</p>
    </div>
  </footer>
</div>
<script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/wow.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/slick.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery.li-scroller.1.0.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery.newsTicker.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url();?>/assets/js/custom.js"></script>
<script>
var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
var date = new Date();
var day = date.getDate();
var month = date.getMonth();
var thisDay = date.getDay(),
    thisDay = myDays[thisDay];
var yy = date.getYear();
var year = (yy < 1000) ? yy + 1900 : yy;
//  document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);


document.getElementById('tgl').innerHTML = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
</script>

<?php
  if($lang==true)
  {
?>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'id', includedLanguages: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT, autoDisplay: false}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <!--<script>
/*document.getElementById(':0.container').style.visibility="hidden";
console.log("tidak ada yg salah");*/
</script> -->
<?php

  }
?>
</body>
</html>
