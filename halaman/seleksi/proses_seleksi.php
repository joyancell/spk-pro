        <div id="page-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="page-header">Seleksi Calon Siswa Baru</h1>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="panel panel-success">
                <div class="panel-heading" style="padding-bottom: 20px">
                  <div>
                    <h4>Tabel Normalisasi Bobot Kriteria</h4>
                  </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                  <form action="index.php?url=hasil_seleksi" method="POST">
                    <div class="col-lg-12">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th rowspan="2" style="vertical-align: middle;">No</th>
                            <th rowspan="2" style="vertical-align: middle;">Kriteria</th>
                            <th rowspan="2" style="vertical-align: middle;">Bobot</th>
                            <th rowspan="2" style="vertical-align: middle;">Jenis</th>
                           
                          </tr>
                          
                        </thead>
                        <tbody>
                          <?php $x= 1; ?>
                          <?php foreach ($data_kriteria['data'] as $key => $value): ?>
                            <input type="hidden" name="tipe[<?php echo $value['id'] ?>]" value="4">
                            <input type="hidden" name="q[<?php echo $value['id'] ?>]" value="0.1">
                            <input type="hidden" name="p[<?php echo $value['id'] ?>]" value="0.1">
                            <tr>
                              <td><?php echo $x++ ?></td>
                              <td><?php echo $key ?></td>
                              <td><?php echo $value['bobot']/$data_kriteria['ekstra']['total_bobot'];?></td>
                              <td><?php echo  $value['jenis'] ?></td>
                              
                            </tr>
                          <?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-lg-12" align="center">
                      <button class="btn btn-lg btn-info"><i class="  fa fa-refresh"></i> Mulai Seleksi</button>
                    </div>
                  </form>

                </div>
                <!-- /.panel-body -->
              </div>
              <!-- /.panel -->
            </div>
          </div>

        </div>
        <!-- /#page-wrapper -->