  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Pengumuman UHO
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah Pengumuman"><i class="fa fa-plus"></i> Tambah</button>
      <!-- Modal Insert-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Pengumuman Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("pengumuman/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Judul Pengumuman</label>
                      <input type="text" class="form-control" id="password" placeholder="Judul Pengumuman" name="judul" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Gambar</label>
                      <input type="file" class="form-control" id="password" placeholder="Gambar" name="gambar" >
                  </div>
                  <div class="form-group">
                    <label for="password">Isi Pengumuman</label>
                      <textarea class="form-control ckeditor" id="ckditor" placeholder="Pengumuman"  name="isi" required="required"></textarea>
                  </div>

                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" title="Tambah Pengumuman">Tambah</button>
                </div><!-- /.box-footer -->
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Pengumuman</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Judul Pengumuman</th>
                    <th>Keterangan</th>
                    <th>Gambar</th>
                    <th>Status</th>
                    <th style="width: 120px">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($pengumuman as $key) {
                    $id=$key->id_pengumuman;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->judul;?></td>
                    <td><?php echo $key->isi;?></td>
                    <td><a href="<?php echo base_url();?>/assets/pengumuman/<?php echo $key->gambar;?>"><img src="<?php echo base_url();?>/assets/pengumuman/<?php echo $key->gambar;?>"  title="<?php echo $key->judul;?>" width="100" height="100"></a></td>
                    <td><span class="label label-danger">Notification</span></td>
                    <td>

                      <button type="button" class="btn btn-xs btn-success" title="Edit Gambar" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" title="Hapus Gambar" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>

                    </td>
                  </tr>

                  <!-- Modal Update-->
                  <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data Penerima</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("pengumuman/edit");?>
                             <div class="form-group">
                              <label for="password">Nama Pengumuman</label>
                                <input type="text" class="form-control"  value='<?php echo $key->judul; ?>' name="judul" required="required">
                                <input type="hidden" class="form-control"   value='<?php echo $key->id_pengumuman; ?>' name="id_pengumuman" required="required" readonly>
                            </div>

                            <div class="form-group">
                              <label for="password">Gambar</label>
                                <input type="file" class="form-control"  value='<?php echo $key->gambar;?>' name="gambar" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Isi Pengumuman</label>
                                <textarea class="form-control ckeditor" id="ckditor"  value='' name="isi" required="required">
                                  <?php echo $key->isi;?>
                                </textarea>
                            </div>
                          </div><!-- /.box-body -->
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                          </div>
                        <?php echo form_close(); ?>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Modal Delete-->
                  <div class="modal fade" id="delete<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog">
                    <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Hapus Pengumuman <?php echo $key->judul ?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus Pengumuman ini?</div>
                        </div>
                        <div class="modal-footer">
                        <?php echo form_open("pengumuman/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->id_pengumuman?>" name="id_pengumuman" required="required">
                          <button type="submit" class="btn btn-danger">&nbsp;Ya</button>
                          <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Batal</button>
                        <?php echo form_close(); ?>
                      </div>
                      </div>
                    </div>
                  </div>

                <?php
                  $no++;
                  }
                ?>
                </tbody>
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box-primary -->
        </div><!-- /.col-md -->
      </div><!-- /.row -->
    </section>
  </div>
