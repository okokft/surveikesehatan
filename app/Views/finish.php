<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('plugins/fontawesome-free/css/all.min.css')?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('dist/css/adminlte.min.css')?>">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?=base_url('plugins/bs-stepper/css/bs-stepper.min.css')?>">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?=base_url('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url('plugins/select2/css/select2.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')?>">
</head>

<body class="d-flex justify-content-center" background="<?= base_url('bg.jpg') ?>">

    <div class="container mt-5">

        <?php if(session()->getFlashdata('msg') == 'tidak sehat'):?>
            <div class="alert alert-danger text-center">Keluarga Anda Tidak Sehat! Detail bisa dilihat dibawah</div>
        <?php endif;?>
        <?php if(session()->getFlashdata('msg') == 'sehat'):?>
            <div class="alert alert-success text-center">Keluarga Anda Sehat. Semoga tetap sehat selalu. Aamiin</div>
        <?php endif;?>

        <!-- <div class="card text-center card-info">
            <div class="card-header">
            Featured
            </div>
            <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer text-muted">
            2 days ago
            </div>
        </div> -->

        <div class="card">
            <div class="card-header">
            <h1 class="card-title text-bold">Kondisi Kesehatan Keluarga Anda!</h1>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
                </button>
            </div>
            </div>
            <div class="card-body">
                <p>Berikut ini hasil analisa kesehatan Keluarga Anda :</p>
                <?php foreach($que as $d) { echo $d; } ?>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Terimakasih</h1>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="<?=base_url('survei')?>" class="btn btn-primary">Isi Survei Kembali</a>
            </div>
        </div>

    </div>




<!-- jQuery -->
<script type="text/javascript" src="<?=base_url('plugins/jquery/jquery.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('dist/js/adminlte.min.js')?>"></script>
<!-- BS-Stepper -->
<script src="<?=base_url('plugins/bs-stepper/js/bs-stepper.min.js')?>"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?=base_url('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')?>"></script>
<!-- Select2 -->
<script src="<?=base_url('plugins/select2/js/select2.full.min.js')?>"></script>

<script type="text/javascript">
    //isi script
</script>

</body>
</html>