<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Survei Kesehatan</title>

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

  <div class="card text-center card-info">
    <div class="card-header">
      Survei Kesehatan
    </div>
    <div class="card-body">
      <p class="card-text">Survei ini untuk mengetahui Keluarga Anda termasuk Keluarga Sehat atau Keluarga Tidak Sehat</p>
    </div>
    <div class="card-footer text-muted">
      <?= date("d/m/Y") ?>
    </div>
  </div>



  <div class="row">
    <div class="col-md-12">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Silahkan isi survei dengan teliti</h3>
        </div>
        <div class="card-body p-0">
          <div class="bs-stepper">
            <div class="bs-stepper-header mx-2" role="tablist">
              <!-- your steps here -->
              <div class="step" data-target="#logins-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                  <span class="bs-stepper-circle">1</span>
                  <span class="bs-stepper-label">Data Keluarga</span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#information-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                  <span class="bs-stepper-circle">2</span>
                  <span class="bs-stepper-label">Survei Kesehatan</span>
                </button>
              </div>
            </div>



            <div class="bs-stepper-content mx-2">
            <form action="<?=base_url('/submit')?>" method="post" id="myPost">
              <!-- your steps content here -->
              <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                <div class="form-group">
                  <label>Nomor KK</label>
                  <input type="number" class="form-control" name="nokk" id="nokk" placeholder="No. KK">
                </div>
                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="number" class="form-control" name="notelepon" id="notelepon" placeholder="No. Telp">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat">
                </div>
                <div class="form-group">
                  <label>Input Anggota Keluarga</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">Nama, NIK, & Tgl. Lahir</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Nama" name="namaanggota" id="namaanggota" required>
                    <input type="number" class="form-control" placeholder="NIK" name="nikanggota" id="nikanggota" required>
                    <input type="date" class="form-control" placeholder="TGL Lahir" name="tgllahir" id="tgllahir" required>
                    <div class="input-group-append">
                      <select class="form-control select2" style="width: 100%;" name="umuranggota" id="umuranggota" required >
                        <option value="" selected disabled">Kategori Umur</option>
                        <option value="BY">BAYI (USIA < 12 bulan)</option>
                        <option value="BL">BALITA (USIA 12 -59 bulan)</option>
                        <option value="R">REMAJA (USIA 10 - 18 tahun)</option>
                        <option value="L">LANSIA (USIA > 60)</option>
                        <option value="P">LAINNYA</option>
                      </select>
                      <select class="form-control select2" style="width: 100%;" name="hamil" id="hamil" required >
                        <option value="" selected disabled">Sedang Hamil?</option>
                        <option value="1">YA</option>
                        <option value="0">Tidak</option>
                      </select>
                    </div>
                  </div>
                  <button class="btn btn-info btn-sm mt-2 mb-1" onclick="tambahanggota()">Tambah Anggota</button>
                  <table id="tabelanggota" class="tabelanggota table table-bordered mt-1">
                    <thead>
                      <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>NIK</td>
                        <td>Kategori Umur</td>
                        <td>TGL LAHIR</td>
                      </tr>
                    </thead>

                  </table>
                </div>
                <div class="form-group" id="anggotakeluarga">
                  <input type="hidden" name="jumlahanggota" id="jumlahanggota" value="">
                  <label>Siapakah yang menjadi Kepala Keluarga?</label>
                  <select class="form-control select2" style="width: 100%;" name="kepalakeluarga" id="kepalakeluarga" required >
                    <option value="" selected disabled">Silahkan Pilih</option>
                  </select>
                </div>
                
                
                <button class="btn btn-primary" onclick="steppernext()">Selanjutnya</button>
              </div>



              <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                <div class="form-group">

                  <!-- Que1 -->
                  <div class="card">
                    <div class="card-body">
                      <label>1. Apakah ada anggota keluarga yang bersalin selama 6 bulan terakhir?</label>
                      <select class="form-control select2"  onchange="show1(this.value)" style="width: 100%;" required>
                        <option value="" selected disabled">Silahkan Pilih</option>
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                      </select>
                      <div class="bayi11">
                        <label class="mt-3">Apakah ada anggota keluarga yang bersalin selama 5 tahun terakhir?</label>
                        <select class="form-control select2" onchange="show11(this.value)" style="width: 100%;" required>
                          <option value="" selected disabled>Silahkan Pilih</option>
                          <option value="1">Ya</option>
                          <option value="0">Tidak</option>
                        </select>
                      </div>
                      <div class="bayi111">
                        <label class="mt-3">Apakah ada bayi atau balita di keluarga Anda?</label>
                        <select class="form-control select2" onchange="show111(this.value)" style="width: 100%;" required>
                          <option value="" selected disabled>Silahkan Pilih</option>
                          <option value="1">Ya</option>
                          <option value="0">Tidak</option>
                        </select>
                      </div>
                      <div class="bayi1111">
                        <label class="mt-3">Siapa yang menolong persalinan?</label>
                        <select class="form-control select2 tes1" onchange="show1111(this.value)" style="width: 100%;" name="que1" id="que1" required>
                          <option value="" disabled selected>Silahkan Pilih</option>
                          <option value="1">Dokter</option>
                          <option value="1">Bidan</option>
                          <option value="0">Lainnya</option>
                          <option value="" hidden>-</option>
                        </select>
                      </div>
                      <div class="lainnya mt-1">
                        <input class="form-control" type="text" placeholder="Siapa yang menolong persalinan?" required>
                      </div>
                      
                    </div>
                  </div>

                  <!-- Que2 -->
                  <div class="card">
                    <div class="card-body">
                      <label>2. Apakah bayi saat berusia 0-6 bulan minum ASI saja?</label>
                      <select class="form-control select2 tes2" style="width: 100%;" name="que2" id="que2" required>
                        <option value="" selected disabled">Silahkan Pilih</option>
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <!-- Que3 -->
                  <div class="card">
                    <div class="card-body">
                      <label>3. Apa BAYI/ BALITA anda ditimbang setiap bulan (di posyandu)?</label>
                      <select class="form-control select2 tes2" style="width: 100%;" name="que3" id="que3" required>
                        <option value="" selected disabled">Silahkan Pilih</option>
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <!-- Que 4 -->
                  <div class="card">
                    <div class="card-body">
                      <label>4. Sumber air apa yang digunakan oleh keluarga Anda untuk kegiatan sehari-hari dan konsumsi?</label>
                      <select class="form-control select2" style="width: 100%;" name="que4" id="que4" required>
                        <option value="" selected disabled">Silahkan Pilih</option>
                        <option value="1">Mata Air</option>
                        <option value="1">Air sumur atau air sumur pompa</option>
                        <option value="1">Air ledeng/PAM/PDAM</option>
                        <option value="1">Air hujan</option>
                        <option value="1">Air kemasan</option>
                        <option value="0">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <!-- Que 5 -->
                  <div class="card">
                    <div class="card-body">
                      <label>5. Apakah Keluarga Anda biasa mencuci tangan dengan air bersih dan sabun?</label>
                      <select class="slct2" multiple="multiple" data-placeholder="Pilih Anggota Keluarga nya" style="width: 100%;" name="que5trig[]" id="que5trig">

                      </select>
                      <input type="hidden" name="que5" id="que5" value="">
                    </div>
                  </div>

                  <!-- Que 6 -->
                  <div class="card">
                    <div class="card-body">
                      <label>6. Apakah Keluarga Anda menggunakan jamban dengan kriteria berikut:</label>
                      <p>- Jarak lubang penampung ke sumer air minimal 10 meter</p>
                      <p>- Terdapat dinding dan atap</p>
                      <p>- Lantai kedap air (bisa berbahan: ubin, semen, kayu, atau keramik)</p>
                      <p>- Tersedia air, sabun, dan alat pembersih.</p>
                      <select class="slct2" multiple="multiple" data-placeholder="Pilih Anggota Keluarga nya" style="width: 100%;" name="que6trig[]" id="que6trig">

                      </select>
                      <input type="hidden" name="que6" id="que6" value="">
                    </div>
                  </div>

                  <!-- Que7 -->
                  <div class="card">
                    <div class="card-body">
                      <label>7. Apakah Keluarga Anda mempraktikan PSN (Pemberantasan Sarang Nyamuk) yang terdiri dari kebiasan berikut: (Centang Jika Iya)</label>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="que7sub1" id="que7sub1">
                        <label class="form-check-label" for="flexCheckDefault">1. Menguras bak mandi setiap minggu</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="que7sub2" id="que7sub2">
                        <label class="form-check-label" for="flexCheckDefault">2. Menutup bak penampungan air</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="que7sub3" id="que7sub3">
                        <label class="form-check-label" for="flexCheckDefault">3. Mengubur barang-barang bekas</label>
                      </div>
                      <input type="hidden" name="que7" id="que7" value="">
                    </div>
                  </div>

                  <!-- Que8 -->
                  <div class="card">
                    <div class="card-body">
                      <label>8. Adakah salah satu anggota keluarga Anda, yang berusia 10 tahun keatas, mengkonsumsi minimal 3 porsi sayur & 2 porsi buah atau sebaliknya setiap  hari dalam seminggu terakhir?</label>
                      <select class="form-control select2" style="width: 100%;" name="que8" required>
                        <option value="" selected disabled">Silahkan Pilih</option>
                        <option value="1">Ya, Ada</option>
                        <option value="0">Tidak ada</option>
                      </select>
                    </div>
                  </div>

                  <!-- Que9 -->
                  <div class="card">
                    <div class="card-body">
                      <label>9. Adakah salah satu anggota keluarga Anda, yang berusia 10 tahun keatas melakukan aktifitas fisik / olahraga sedang atau berat minimal 30 menit setiap hari (dalam seminggu terakhir)?</label>
                      <select class="form-control select2" style="width: 100%;" name="que9" required>
                        <option value="" selected disabled">Silahkan Pilih</option>
                        <option value="1">Ya, Ada</option>
                        <option value="0">Tidak ada</option>
                      </select>
                    </div>
                  </div>

                  <!-- Que10 -->
                  <div class="card">
                    <div class="card-body">
                      <label>10. Apakah ada anggota keluarga Anda yang merokok? (yang berumur 10 tahun ke atas)</label>
                      <select class="form-control select2" style="width: 100%;" name="que10" id="que10" required>
                        <option value="" selected disabled">Silahkan Pilih</option>
                        <option value="0">Ya, Ada</option>
                        <option value="1">Tidak ada</option>
                      </select>
                    </div>
                  </div>



                  <button class="btn btn-primary mb-2" onclick="stepperprevious()">Previous</button>
                  <button type="submit" class="btn btn-primary mb-2" id="btnsimpan">Simpan</button>

                </div>
              </div>




            </form>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Kekayaan yang paling utama adalah <b>Kesehatan</b>
        </div>
      </div>
      <!-- /.card -->
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
let arranggota = [];
var tabel = $("#tabelanggota");

$(document).ready(function(e) {   
  var stepper = new Stepper($('.bs-stepper')[0])
  $('.bayi11').hide();
  $('.bayi111').hide();
  $('.bayi1111').hide();
  $('.lainnya').hide();
  $("#btnsimpan").click(function(){     
    setvalueanggota() 
    $("#que5").val(getvalueque5());    
    $("#que6").val(getvalueque6());    
    $("#que7").val(getvalueque7());
    if($("#que1").val() == "" && $("#que2").val() == "" && $("#que3").val() == "" && $("#que4").val() == "" && $("#que5").val() == "" && $("#que6").val() == "" && $("#que7").val() == "" && $("#que8").val() == "" && $("#que9").val() == "" && $("#que10").val() == "")
    {
      alert("Silahkan Lengkapi Survei Terlebih Dahulu");
    }
    else
    {
      $("#myPost").submit();
    }
  });
  $('.slct2').select2()
  
});
function setvalueanggota(){
  $("#jumlahanggota").val(arranggota.length);
  let list = document.getElementById("anggotakeluarga");
  for(i = 0; i < arranggota.length; i++){
    var xnama = document.createElement("INPUT");
    xnama.setAttribute("type", "text");
    xnama.setAttribute("name", "anggotakeluarga[" + i + "][nama]");
    xnama.setAttribute("value", arranggota[i][0]);
    list.appendChild(xnama);
    var xnik = document.createElement("INPUT");
    xnik.setAttribute("type", "hidden");
    xnik.setAttribute("name", "anggotakeluarga[" + i + "][nik]");
    xnik.setAttribute("value", arranggota[i][1]);
    list.appendChild(xnik);
    var xstatus = document.createElement("INPUT");
    xstatus.setAttribute("type", "hidden");
    xstatus.setAttribute("name", "anggotakeluarga[" + i + "][status]");
    xstatus.setAttribute("value", arranggota[i][2]);
    list.appendChild(xstatus);
    var xtgllahir = document.createElement("INPUT");
    xtgllahir.setAttribute("type", "hidden");
    xtgllahir.setAttribute("name", "anggotakeluarga[" + i + "][tgl_lahir]");
    xtgllahir.setAttribute("value", arranggota[i][3]);
    list.appendChild(xtgllahir);
    var xhamil = document.createElement("INPUT");
    xhamil.setAttribute("type", "hidden");
    xhamil.setAttribute("name", "anggotakeluarga[" + i + "][hamil]");
    xhamil.setAttribute("value", arranggota[i][4]);
    list.appendChild(xhamil);
  }
}
function getvalueque5(){
  if(arranggota.length == $("#que5trig").val().length){
    return 1;
  }
  else{
    return 0;
  }
}
function getvalueque6(){
  if(arranggota.length == $("#que6trig").val().length){
    return 1;
  }
  else{
    return 0;
  }
}
function getvalueque7(){
  if($('#que7sub1').is(":checked") && $('#que7sub2').is(":checked") && $('#que7sub3').is(":checked")){
    return 1;
  }
  else{
    return 0;
  }
}
function steppernext(){
  if($("#nokk").val() == "" && $("#notelepon").val() == "" && $("#alamat").val() == "" && $("#kepalakeluarga").val() == ""){
    alert("Silahkan Isi Data Terlebih Dahulu");
  }
  else{
    var stepper = new Stepper($('.bs-stepper')[0]);
    stepper.next();
    $('html, body').animate({scrollTop: '0px'}, 0);
  }
}
function stepperprevious(){
  var stepper = new Stepper($('.bs-stepper')[0]);
  stepper.previous();
  $('html, body').animate({scrollTop: '0px'}, 0);
}
function tambahanggota(){
  var nama = $("#namaanggota").val();
  var nik = $("#nikanggota").val();
  var umur = $("#umuranggota").val();
  var tgllahir = $("#tgllahir").val();
  var hamil = $("#hamil").val();
  $("#namaanggota").val("");
  $("#nikanggota").val("");
  $("#umuranggota").val("");
  $("#tgllahir").val("");
  $("#hamil").val("");
  if(nama == "" || nik == "" || umur == "" || tgllahir == "" || hamil == ""){
    alert("Silahkan Isi Nama, NIK, dan Tgl Lahir");
  }
  else{
    let datanya = [nama, nik, umur, tgllahir, hamil];  
    arranggota.push(datanya);
    html = tabelanggota(arranggota.length);
    tabel.append(html);
    $('#kepalakeluarga').append('<option value="'+nik+'">'+nama+'</option>');
    $('#que5trig').append('<option value="'+nik+'">'+nama+'</option>');
    $('#que6trig').append('<option value="'+nik+'">'+nama+'</option>');
    // alert(JSON.stringify(arranggota));
    // alert(arranggota.length);
  }
}
function tabelanggota(length){
  html = '<tr id="'+length+'">';
  html+= '<td>'+length+'</td>';
  html+= '<td>'+arranggota[length-1][0]+'</td>';
  html+= '<td>'+arranggota[length-1][1]+'</td>';
  html+= '<td>'+arranggota[length-1][2]+'</td>';
  html+= '<td>'+arranggota[length-1][3]+'</td>';
  return html;
}
function show1(value) {
  if(value == 0){
    $('.bayi11').show();
    $('.bayi111').hide();
    $('.bayi1111').hide();
    $('.lainnya').hide();
  }
  else if(value == 1){
    $('.bayi11').hide();
    $('.bayi111').hide();
    $('.lainnya').hide();
    $('.bayi1111').show();
  }
}
function show11(value) {
  if(value == 1){
    $('.bayi111').hide();
    $('.bayi1111').show();
    $('.lainnya').hide();
  }
  else if(value == 0){
    $('.bayi111').show();
    $('.bayi1111').hide();
    $('.lainnya').hide();
  }
}
function show111(value) {
  $('.tes1').val('-');
  if(value == 0){
    $('.tes2').attr('disabled', 'disabled');
    $('.tes2').append('<option value="null" selected>Tidak ada BAYI/BALITA. Silahkan lanjut ke pertanyaan selanjutnya</option>');
  }
}
function show1111(value) {
  if(value == 0){
    $('.lainnya').show();
  }
  else if(value == 1){
    $('.lainnya').hide();
  }
}
</script>

</body>
</html>
