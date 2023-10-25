<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2023 - Annisa Binta Jamaika</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url('plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('dist/js/adminlte.min.js')?>"></script>
<!-- PDFMAKE -->
<script src="<?=base_url('plugin/pdfmake/pdfmake.js')?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js" integrity="sha256-c3RzsUWg+y2XljunEQS0LqWdQ04X1D3j22fd/8JCAKw=" crossorigin="anonymous"></script>

<!-- DataTables  & Plugins -->
<script src="<?=base_url('plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?=base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?=base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?=base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?=base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?=base_url('plugins/jszip/jszip.min.js')?>"></script>
<script src="<?=base_url('plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?=base_url('plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?=base_url('plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?=base_url('plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?=base_url('plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#example').DataTable(
      {
        responsive: true,
        "columnDefs": [
          { responsivePriority: 1, targets: 1 },
          { responsivePriority: 2, targets: 4 },
          { responsivePriority: 3, targets: 5 },
          { targets: 6, visible: false },
          { targets: 7, visible: false },
          { targets: 8, visible: false },
          { targets: 9, visible: false },
          { targets: 10, visible: false },
          { targets: 11, visible: false },
          { targets: 12, visible: false },
          { targets: 13, visible: false },
          { targets: 14, visible: false },
          { targets: 15, visible: false },
		    ], 
        dom: 'Bfrtip',
        buttons: [
            {
              extend: 'excel',
              text: 'Download Excel',
              className: 'btn btn-default',
              exportOptions: {
                  columns: 'th:not(:last-child)'
              }
            }
        ]
      }
    )
  } );
  function hapus()
    {
        let text = "Apakah Anda Yakin Untuk Menghapus?"
        if(confirm(text)==true){
            return true;
        }
        else{
            return false;
        }
    };
  function simpanpdf()
  {
  var printContents = document.getElementById('generatepdf').innerHTML;
  var originalContents = document.body.innerHTML;

  document.body.innerHTML = printContents;

  window.print();

  document.body.innerHTML = originalContents;
  }
</script>
</body>
</html>