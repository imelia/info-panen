<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Your Website 2019</span>
    </div>
  </div>
</footer>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets5/vendor/jquery/jquery.min.js'); ?>"></script>
<script>
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  })
</script>
<script src="<?php echo base_url('assets5/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets5/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets5/js/sb-admin-2.min.js'); ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('assets5/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets5/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('assets5/js/demo/datatables-demo.js'); ?>"></script>
<!-- Page level plugins -->
<script src="<?php echo base_url('assets5/vendor/chart.js/Chart.min.js'); ?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('assets5/js/demo/chart-area-demo.js'); ?>"></script>
<script src="<?php echo base_url('assets5/js/demo/chart-pie-demo.js'); ?>"></script>

<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script src='https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js'></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>

<script src="<?= base_url('assets5/js/script.js') ?>"></script>

<script type="text/javascript">
  var ctx = document.getElementById('chartBio').getContext('2d');
  var chart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        <?php
        if (count($biochart) > 0) {
          foreach ($biochart as $data) {
            echo "'" . $data->tahun . "',";
          }
        }
        ?>
      ],
      datasets: [{
        label: 'Produksi',
        backgroundColor: '#ADD8E6',
        borderColor: '##93C3D2',
        data: [
          <?php
          if (count($biochart) > 0) {
            foreach ($biochart as $data) {
              echo $data->produksi_biofarmaka  . ", ";
            }
          }
          ?>
        ]
      }]
    },
  });

  var ctx = document.getElementById('chartBuah').getContext('2d');
  var chart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        <?php
        if (count($buahchart) > 0) {
          foreach ($buahchart as $list) {
            echo $list->tahun . ", ";
          }
        }
        ?>
      ],
      datasets: [{
        label: 'Produksi',
        backgroundColor: '#ADD8E6',
        borderColor: '##93C3D2',
        data: [
          <?php
          if (count($buahchart) > 0) {
            foreach ($buahchart as $list) {
              echo "'" . $list->produksi_buah . "',";
            }
          }
          ?>
        ]
      }]
    },
  });

  var ctx = document.getElementById('chartPadiPal').getContext('2d');
  var chart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        <?php
        if (count($padipal) > 0) {
          foreach ($padipal as $row) {
            echo $row->tahun . ", ";
          }
        }
        ?>
      ],
      datasets: [{
        label: 'Produksi',
        backgroundColor: '#ADD8E6',
        borderColor: '##93C3D2',
        data: [
          <?php
          if (count($padipal) > 0) {
            foreach ($padipal as $row) {
              echo "'" . $row->produksi . "',";
            }
          }
          ?>
        ]
      }]
    },
  });

  var ctx = document.getElementById('sayurChart').getContext('2d');
  var chart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        <?php
        if (count($sayur) > 0) {
          foreach ($sayur as $chart) {
            echo $chart->tahun . ", ";
          }
        }
        ?>
      ],
      datasets: [{
        label: 'Produksi',
        backgroundColor: '#ADD8E6',
        borderColor: '##93C3D2',
        data: [
          <?php
          if (count($sayur) > 0) {
            foreach ($sayur as $chart) {
              echo "'" . $chart->produksi_habis_dibongkar . "',";
            }
          }
          ?>
        ]
      }]
    },
  });
</script>