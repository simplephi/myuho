<div class="content-wrapper">
    <section class="content-header">
      <h1>
      Berita UHO
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah</button>
      <!-- Modal Insert-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Berita Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("notifikasi/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Nama Berita</label>
                      <input type="text" class="form-control" id="password" placeholder="Nama Berita" name="nama_berita" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Prioritas Berita</label>
                      <input type="text" class="form-control" id="password" placeholder="Prioritas"  name="prioritas" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Gambar Berita</label>
                      <input type="file" class="form-control" id="password" placeholder="Gambar"  name="gambar" >
                  </div>
                  <div class="form-group">
                    <label for="password">Keterangan Berita</label>
                      <textarea  class="form-control ckeditor" id="ckedtor"  placeholder="Keterangan"  name="ket_berita" required="required"></textarea>
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Tambah</button>
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
              <h3 class="box-title">Daftar Berita</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama Berita</th>
                    <th>Keterangan</th>
                    <th>Gambar</th>
                    <th>Prioritas</th>
                    <th>Status</th>
                    <th style="width: 120px">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($berita as $key) {
                    $id=$key->id_berita;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->nama_berita;?></td>
                    <td><?php echo $key->ket_berita;?></td>
                    <td><a href="<?php echo base_url()?>assets/image/<?php echo $key->gambar_berita;?>"><img src="<?php echo base_url()?>/assets/image/<?php echo $key->gambar_berita;?>" title="<?php echo $key->nama_berita;?>" width="100" height="100"></a></td>
                    <td><?php echo $key->prioritas;?></td>
                    <td><span class="label label-danger">Notification</span></td>
                    <td>

                      <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>


                    </td>
                  </tr>
                  <!-- Modal Delete-->
                  <div class="modal fade" id="delete<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog">
                    <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Hapus Berita <?php echo $key->nama_berita ?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus Berita ini?</div>
                        </div>
                        <div class="modal-footer">
                        <?php echo form_open("notifikasi/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->id_berita?>" name="id_berita" required="required">
                          <button type="submit" class="btn btn-danger">&nbsp;Ya</button>
                          <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Batal</button>
                        <?php echo form_close(); ?>
                      </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal Update-->
                  <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data Berita</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("notifikasi/edit");?>
                             <div class="form-group">
                              <label for="password">Nama Berita</label>
                                <input type="text" class="form-control"  value='<?php echo $key->nama_berita; ?>' name="nama_berita" required="required">
                                <input type="hidden" class="form-control"   value='<?php echo $key->id_berita; ?>' name="id_berita" required="required" readonly>
                            </div>

                            <div class="form-group">
                              <label for="password">Prioritas</label>
                                <input type="text" class="form-control"  value='<?php echo $key->prioritas;?>' name="prioritas" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Gambar</label>
                                <input type="file" class="form-control"  value='<?php echo $key->gambar_berita;?>' name="gambar" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Keterangan Berita</label>
                                <textarea class="form-control ckeditor" id="ckeditor"  value='' style="text-align:justify" name="ket_berita" required="required">
                                  <?php echo $key->ket_berita;?>
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
