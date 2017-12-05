<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Penerima Notifikasi
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
                <h4 class="modal-title">Tambah Penerima Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open("notifikasi/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Nama Penerima</label>
                      <input type="text" class="form-control" id="password" placeholder="Nama Penerima Notifikasi" name="nama_penerima" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Handphone</label>
                      <input type="text" class="form-control" id="password" value="+62" name="no_hp" required="required">
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
              <h3 class="box-title">Daftar Penerima</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama Penerima</th>
                    <th>Nomor Handphone</th>
                    <th>Status</th>
                    <th style="width: 120px">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($penerima as $key) {
                    $id=$key->id_receiver;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->nama_penerima;?></td>
                    <td><?php echo $key->no_hp;?></td>
                    <td><span class="label label-danger">Notif Receiver</span></td>
                    <td>

                      <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>

                        <!-- Modal Update-->
                        <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Ubah Data Penerima</h4>
                              </div>
                              <div class="modal-body">
                                <div class="box-body">
                                 <?php echo form_open("notifikasi/edit");?>
                                  <div class="form-group">
                                    <label>Nama Penerima</label>
                                      <input type="text" class="form-control"  value='<?php echo $key->nama_penerima; ?>' name="nama_penerima" required="required">
                                      <input type="hidden" class="form-control"  value='<?php echo $key->id_receiver; ?>' name="id_receiver" required="required" readonly>
                                  </div>
                                  <div class="form-group">
                                    <label>Nomor Handphone</label>
                                      <input type="text" class="form-control"  value='<?php echo $key->no_hp;?>' name="no_hp" required="required">
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
                                <h4 class="modal-title">Hapus Penerima <?php echo $key->nama_penerima ?></h4>
                              </div>
                              <div class="modal-body">
                                <div class="alert alert-danger">Apakah anda yakin ingin menghapus penerima ini?</div>
                              </div>
                              <div class="modal-footer">
                              <?php echo form_open("notifikasi/delete");?>
                                <input type="hidden" class="form-control" value="<?php echo $key->id_receiver?>" name="id_receiver" required="required">
                                <button type="submit" class="btn btn-danger">&nbsp;Ya</button>
                                <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Batal</button>
                              <?php echo form_close(); ?>
                            </div>
                            </div>
                          </div>
                        </div>
                    </td>
                  </tr>
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
