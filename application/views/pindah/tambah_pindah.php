<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">
                <h4 style="text-align:center">
                    <b style="line-height:25px">
                        TAMBAH DATA PINDAH DATANG <br>
                    </b>
                </h4>
                <hr>
            </div>

            <div class="box-body">
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

                <form action="<?php echo base_url('pindah/proses_tambah'); ?>" method="post">
                    <div class="row">
                        <!-- kolom ke-1 -->
                        <div class="col-lg-6">
                            <h3>DATA DAERAH ASAL</h3>
                            <div class="form-group">
                                <label>Nomor Induk Kependudukan</label>
                                <input type="text" name="nik" class="form-control" required />
                            </div>


                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" required />
                            </div>

                          
                            
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="form-group">
                                <label>RT</label>
                                <input type="text" name="rt" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label>RW</label>
                                <select name="rw" class="form-control" required>
                                    <option value="" selected disabled>- pilih -</option>
                                    <option value="Kepala Dusun Ujong Lam'on">Kepala Dusun Ujong Lam'on</option>
                                        <option value="Kepala Dusun Meunasah Puteh">Kepala Dusun Meunasah Puteh</option>
                                        <option value="Kepala Dusun  Tgk Chik lamkuta">Kepala Dusun Tgk Chik lamkuta</option>
                                        <option value="Kepala Dusun Tgk Chik Bineh Krung">Kepala Dusun Tgk Chik Bineh Krung</option>
                                </select>
                            </div>
                        </div>


                        <!-- kolom ke-2 -->
                        <div class="col-lg-6">
                            <h3>DATA KEPINDAHAN</h3>

                            <div class="form-group">
                                <label>Alasan Pindah</label>
                                <select name="alasan_pindah" class="form-control" required>
                                    <option value="" selected disabled>- pilih -</option>
                                    <option value="Pekerjaan">Pekerjaan</option>
                                    <option value="Keamanan">Keamanan</option>
                                    <option value="Kesehatan">Kesehatan</option>
                                    <option value="Perumahan">Perumahan</option>
                                    <option value="Keluarga">Keluarga</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                          

                            <div class="form-group">
                                <label>Alamat Tujuan</label>
                                <textarea name="alamat_tujuan" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kepindahan</label>
                                <select name="jenis_pindah" class="form-control" required>
                                    <option value="" selected disabled>- pilih -</option>
                                    <option value="Kepala Keluarga">Kepala Keluarga</option>
                                    <option value="Kepala Keluarga dan Seluruh Anggota Keluarga">Kepala Keluarga dan
                                        Seluruh Anggota Keluarga</option>
                                    <option value="Kepala Keluarga dan Sebagian Keluarga lainnya">Kepala Keluarga dan
                                        Sebagian Keluarga lainnya</option>
                                    <option value="Anggota Keluarga">Anggota Keluarga</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Klasifikai Pindah</label>
                                <select name="klasifikasi_pindah" class="form-control" required>
                                    <option value="" selected disabled>- pilih -</option>
                                    <option value="Dalam satu Desa">Dalam satu Desa</option>
                                    <option value="Antar Desa">Antar Desa</option>
                                    <option value="Antar Kecamatan">Antar Kecamatan</option>
                                    <option value="Antar Kab/Kota">Antar Kab/Kota</option>
                                    <option value="Antar Provinsi">Antar Provinsi</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <center>
                        <div class="form-group">
                            <button onClick="window.history.go(-1);" class="btn btn-success">Simpan</button>
                            <a href="<?php echo base_url('pindah/tampil'); ?>" class="btn btn-danger">Batal</a>
                        </div>
                    </center>
                </form>

            </div>
    </section>
</div>