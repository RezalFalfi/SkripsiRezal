<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">
                <label class="container-fluid">
                    <label class="row">
                        <label class="col-md-6">
                            <div class="card">
                <h4 style="text-align:center"><b>TAMBAH DATA KELAHIRAN</b></h4>
                <hr>
            </div>
          <label class="box-body">
                

                    <?php
                if ($this->session->flashdata('sukses')) {
                	?>
                    <div class="callout callout-success">
                        <p style="font-size:14px">
                            <i class="fa fa-check"></i> <?php echo $this->session->flashdata('sukses'); ?>
                        </p>
                    </div>
                    <?php
                    }
                        ?>

                    <form action="<?php echo base_url('kelahiran/proses_tambah'); ?>" method="post">
                      
                    
                   
                       
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
            
                                    <input type="text" name="nama" class="form-control" required />
                                </div>
                              
                                         <div class="form-group">
                                        <label>Tempat Tanggal Lahir</label>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <input type="text" name="tempat_lahir" class="form-control"
                                                    placeholder="Tempat">
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="date" name="tanggal_lahir"
                                                        class="form-control pull-right" id=""
                                                        placeholder="Tanggal Lahir">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                <label>Hari</label>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <select name="hari" class="form-control" required>
                                            <option value="" selected disabled>- pilih hari -</option>
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="jumat">jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Minggu">Minggu</option>
                                        </select>
                                    </div> </div></div>


                                    


                                <div class="bootstrap-timepicker">
                                    <div class="form-group">
                                        <label>Pukul</label>
                                        <div class="input-group">
                                            <input type="time" name="pukul" id="pukul" class="form-control timepicker"
                                                required>
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                          
                                    


                                  
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control" required>
                                            <option value="" selected disabled>- pilih -</option>
                                            <option value="Laki Laki">Laki Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>




                                    <div class="form-group">
                                        <label>Nama Ayah</label>
                                        <input type="text" name="nama_ayah" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan Ayah</label>
                                        <input type="text" name="pekerjaan_ayah" class="form-control" required />
                                    </div><br>

                                    <div class="form-group">
                                        <label>Nama Ibu</label>
                                        <input type="text" name="nama_ibu" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan Ibu</label>
                                        <input type="text" name="pekerjaan_ibu" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control" required></textarea>
                                    </div>

                                   
                                     </div>
                           
                       
                           
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="<?php echo base_url('kelahiran/tampil'); ?>"
                                        class="btn btn-danger">Batal</a>
                                </div>
                            
                        </div>
                 </label>
                </form>
   
                        </label>
                    </label>
                </label>
            </label>
        </label>
</label>
</label>
</section>
</label>
