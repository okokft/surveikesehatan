  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Jumlah Keluarga</span>
            <span class="info-box-number"><?= $datadashboard['kk'] ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-warning"><i class="fas fa-user-alt"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Jumlah NIK</span>
            <span class="info-box-number"><?= $datadashboard['nik'] ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-success"><i class="fas fa-briefcase-medical"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Keluarga Sehat</span>
            <span class="info-box-number"><?= $datadashboard['sehat'] ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-danger"><i class='fas fa-exclamation-triangle'></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Keluarga Tidak Sehat</span>
            <span class="info-box-number"><?= $datadashboard['tidaksehat'] ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->