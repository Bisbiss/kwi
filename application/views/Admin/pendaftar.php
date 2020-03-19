<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <br>
          <a class="btn btn-danger" href="<?php echo base_url('cetakForm/laporan');?>">Cetak Laporan</a>
          <br>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Pendaftaran</h3>  
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Npm</th>
                    <th>Nama Lengkap</th>
                    <th>Jurusan</th>
                    <th>No Hp</th>
                    <th>No Hp Ortu</th>
                    <th>Alamat</th>
                    <th>Alamat Kos</th>
                    <th>Riwayat Penyakit</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($form as $data) : ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data->npm ?></td>
                    <td><?php echo $data->nama ?></td>
                    <td><?php echo $data->jurusan ?></td>
                    <td><?php echo $data->nohp ?></td>
                    <td><?php echo $data->nohp_ortu ?></td>
                    <td><?php echo $data->alamat_rumah ?></td>
                    <td><?php echo $data->alamat_kos ?></td>
                    <td><?php echo $data->riwayat_penyakit ?></td>
                  </tr>
                  <?php $no++; endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
<!-- /.content -->
</div>

