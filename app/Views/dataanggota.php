    <div class="content-wrapper">
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Anggota</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">DataAnggota</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>


        <section class="content">
            <div class="container-fluid">

            <div class="mb-3">
                <button type="button" class="btn btn-primary" onclick="simpanpdf()"><i class="fas fa-download"></i> Print</button>
            </div>

            <div class="invoice p-3 mb-3" id="generatepdf">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i><b> Data Survei kesehatan</b>   
                    <!-- <small class="float-right">Date: 2/10/2014</small> -->
                  </h4>
                </div>
                <!-- /.col -->
              </div>

                <div class="row mt-3">
                    <div class="col-2">
                        <h6>NIK</h6>
                        <h6>No Telepon</h6>
                        <h6>Alamat</h6>
                        <h6>Skor</h6>
                        <h6>Status kesehatan</h6>
                        <h6>Anggota Keluarga</h6>
                    </div>
                    <div class="col-10">
                        <h6>: <?= $querykk['no_kk'] ?></h6>
                        <h6>: <?= $querykk['no_telepon'] ?></h6>
                        <h6>: <?= $querykk['alamat'] ?></h6>
                        <h6>: <?= $querykk['skor'] ?></h6>
                        <h6>: <?= $querykk['status'] ?></h6>
                        <h6>:</h6>
                    </div>
                </div>

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Kepala Keluarga</th>
                            <th scope="col">Status</th>
                            <th scope="col">Hamil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($query as $data) { ?>
                        <tr>
                            <td scope="col"><?= $i ?></td>
                            <td scope="col"><?= $data['nama'] ?></td>
                            <td scope="col"><?= $data['nik'] ?></td>
                            <td scope="col"><?= $data['tgl_lahir'] ?></td>
                            <td scope="col"><?= $data['kepala_keluarga'] ?></td>
                            <td scope="col"><?= $data['status'] ?></td>
                            <td scope="col"><?= $data['hamil'] ?></td>
                        </tr>
                        <?php $i++; } ?>
                    </tbody>
                    </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

                <div class="row mt-3">
                    <div class="col-2">
                        <h6>Data survei</h6>
                    </div>
                    <div class="col-10">
                        <h6>:</h6>
                    </div>
                </div>

                <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Q1</th>
                            <th scope="col">Q2</th>
                            <th scope="col">Q3</th>
                            <th scope="col">Q4</th>
                            <th scope="col">Q5</th>
                            <th scope="col">Q6</th>
                            <th scope="col">Q7</th>
                            <th scope="col">Q8</th>
                            <th scope="col">Q9</th>
                            <th scope="col">Q10</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><b>Skor</b></td>
                            <td scope="col"><?= $querykk['que1'] ?></td>
                            <td scope="col"><?= $querykk['que2'] ?></td>
                            <td scope="col"><?= $querykk['que3'] ?></td>
                            <td scope="col"><?= $querykk['que4'] ?></td>
                            <td scope="col"><?= $querykk['que5'] ?></td>
                            <td scope="col"><?= $querykk['que6'] ?></td>
                            <td scope="col"><?= $querykk['que7'] ?></td>
                            <td scope="col"><?= $querykk['que8'] ?></td>
                            <td scope="col"><?= $querykk['que9'] ?></td>
                            <td scope="col"><?= $querykk['que10'] ?></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->

            </div>
            <!-- /.invoice -->



                
            </div>
        </section>
    </div>