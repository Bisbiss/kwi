<?php
    if (isset($_GET['action'])){
     $pesan = $_GET['action'];
        if($pesan='true') {
        echo "<marquee>Data berhasil diinputkan...</marquee>";
      }
    }
  ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulir Pendaftaran KWI</h1>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Formulir Pendaftaran</h3>
                <p>Silahkan isi kolom dengan benar</p>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?php echo base_url('mahasiswa/form_submit'); ?>" method="post">
                <div class="card-body">
                   <div class="form-group">
                    <label for="inputNPM" class="col-sm-4 control-label">NPM*</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputNPM" name="inputNPM" placeholder="Masukan NPM" value="<?php echo $this->session->userdata('npm'); ?> " readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-4 control-label">Nama Lengkap*</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Masukan Nama Lengkap" required>
                    </div>
                  </div>
                  <!-- select -->
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Pilih Jurusan*</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="Jurusan" name="Jurusan">
                        <option value="Kimia">Kimia</option>
                        <option value="Biologi">Biologi</option>
                        <option value="Ilmu Komputer">Ilmu Komputer</option>
                        <option value="Matematika">Matematika</option>
                        <option value="Fisika">Fisika</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputNo" class="col-sm-4 control-label">No Hp*</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputNo" name="inputNo" placeholder="Masukan No Hp" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputNoOrtu" class="col-sm-4 control-label">No Hp Wali/Orang Tua</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputNoOrtu" name="inputNoOrtu" placeholder="Masukan No Hp Wali/Orang Tua">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputAlamat" class="col-sm-4 control-label">Alamat Rumah*</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputAlamat" name="inputAlamat" placeholder="Masukan Alamat Asal" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputAlamatKosan" class="col-sm-4 control-label">Alamat Rumah Kosan</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputAlamatKosan" name="inputAlamatKosan" placeholder="Masukan Alamat Kosan">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEiwayatPenyakit" class="col-sm-4 control-label">Riwayat Penyakit*</label>
                    <span>Silahkan isi dengan (-) jika tidak mempunyai riwayat penyakit</span>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEiwayatPenyakit" name="inputEiwayatPenyakit" placeholder="Masukan Riwayat Penyakit" required>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Daftar</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>