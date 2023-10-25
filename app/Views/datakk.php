    <div class="content-wrapper">
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Kartu Keluarga</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">DataKartuKeluarga</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>


        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <table class="table" id="example"  style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">No. KK</th>
                                    <th scope="col">No. Telepon</th>
                                    <th scope="col" style="width:30%">Alamat</th>
                                    <th scope="col">Skor</th>
                                    <th scope="col">Status</th>
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
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; foreach($query as $data) { ?>
                                <tr>
                                    <td scope="col"><?= $i ?></td>
                                    <td scope="col"><?= $data['no_kk'] ?></td>
                                    <td scope="col"><?= $data['no_telepon'] ?></td>
                                    <td scope="col"><?= $data['alamat'] ?></td>
                                    <td scope="col"><?= $data['skor'] ?></td>
                                    <td scope="col"><a title="Lihat Data" href="<?= base_url('dataanggota/'.$data['no_kk']) ?>"><?= $data['status'] ?></a></td>
                                    <td scope="col"><?= $data['que1'] ?></td>
                                    <td scope="col"><?= $data['que2'] ?></td>
                                    <td scope="col"><?= $data['que3'] ?></td>
                                    <td scope="col"><?= $data['que4'] ?></td>
                                    <td scope="col"><?= $data['que5'] ?></td>
                                    <td scope="col"><?= $data['que6'] ?></td>
                                    <td scope="col"><?= $data['que7'] ?></td>
                                    <td scope="col"><?= $data['que8'] ?></td>
                                    <td scope="col"><?= $data['que9'] ?></td>
                                    <td scope="col"><?= $data['que10'] ?></td>
                                    <td scope="col">
                                        <a class="btn btn-primary btn-sm" title="Lihat Data" href="<?= base_url('dataanggota/'.$data['no_kk']) ?>"><i class='fas fa-table'></i></a>
                                        <a class="btn btn-success btn-sm" title="Edit Data" href="<?= base_url('editkk/'.$data['id']) ?>"><i class='far fa-edit'></i></a>
                                        <a class="btn btn-danger btn-sm" title="Hapus" onclick="return hapus()" href="<?= base_url('hapuskk/'.$data['id']) ?>"><i class='fas fa-trash'></i></a>
                                    </td>
                                </tr>
                                <?php $i++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>