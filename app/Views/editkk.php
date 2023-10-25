    <div class="content-wrapper">
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Kartu Keluarga</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">EditKartuKeluarga</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>


        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('home/savekk') ?>" method="post">
                            
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">No KK</span>
                                </div>
                                <input type="hidden" class="form-control" name="id" value="<?= $query['id'] ?>">
                                <input type="text" class="form-control" placeholder="No KK" name="nokk" value="<?= $query['no_kk'] ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">No Telepon</span>
                                </div>
                                <input type="number" class="form-control" placeholder="No Telepon" name="notelepon" value="<?= $query['no_telepon'] ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">Alamat</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?= $query['alamat'] ?>">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                            </div>
                            <!-- /.col -->
                            </div>
                        </form>
                </div>
            </div>
        </section>
    </div>