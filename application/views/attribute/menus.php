  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/image/icon.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li>
          <a href="<?php echo site_url('home/admin');?>">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
      </li>
      <li>
          <a href="<?php echo site_url('notifikasi')?>" >
            <i class="fa fa-newspaper-o"></i> <span>Berita</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">check</small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('galeri')?>" >
            <i class="fa fa-file-video-o"></i> <span>Galeri</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('gambar')?>" >
            <i class="fa fa-file-image-o"></i> <span>Gambar Utama</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('pengumuman')?>" >
            <i class="fa fa-book"></i> <span>Pengumuman</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('agenda')?>">
            <i class="fa fa-file-text"></i> <span>Agenda</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->
