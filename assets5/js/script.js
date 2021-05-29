// ------------------------------------------------- PADI-PALAWIJA --------------------------------------------
$.fn.dataTable.ext.search.push(
    function (settings, data, dataIndex) {
        var tahun_awal_padi = parseInt($('#tahun-awal-padi').val(), 10);
        var tahun_akhir_padi = parseInt($('#tahun-akhir-padi').val(), 10);
        var tahun_selisih = parseFloat(data[5]) || 0; // use data for the age column

        if ((isNaN(tahun_awal_padi) && isNaN(tahun_akhir_padi)) ||
            (isNaN(tahun_awal_padi) && tahun_selisih <= tahun_akhir_padi) ||
            (tahun_awal_padi <= tahun_selisih && isNaN(tahun_akhir_padi)) ||
            (tahun_awal_padi <= tahun_selisih && tahun_selisih <= tahun_akhir_padi)) {
            return true;
        }
        return false;
    }
);
$(document).ready(function () {
    var table = $('#padi-palawija').DataTable({
        dom: 'lBfrtip',
        buttons: [{
            className: 'btn-danger btn-round btn-sm mr-2',
            extend: 'pdfHtml5',
            text: 'Cetak (PDF) <i class="fa fa-file-pdf-o"></i>',
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5],
            },
            title: 'PADI PALAWIJA'
        },
        {
            className: 'btn-success btn-round btn-sm mr-2',
            extend: 'excelHtml5',
            text: 'Cetak (Excel) <i class="fa fa-file-excel-o"></i>',
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5],
            },
            title: 'PADI PALAWIJA'
        }],
        select: {
            style: "multi"
        }
    });

    // Event listener to the two range filtering inputs to redraw on input
    $('#tahun-awal-padi, #tahun-akhir-padi').keyup(function () {
        table.draw();
    });
});

// ------------------------------------------------- SAYUR --------------------------------------------

$.fn.dataTable.ext.search.push(
    function (settings, data, dataIndex) {
        var tahun_awal_sayur = parseInt($('#tahun-awal-sayur').val(), 10);
        var tahun_akhir_sayur = parseInt($('#tahun-akhir-sayur').val(), 10);
        var tahun_selisih = parseFloat(data[9]) || 0; // use data for the age column

        if ((isNaN(tahun_awal_sayur) && isNaN(tahun_akhir_sayur)) ||
            (isNaN(tahun_awal_sayur) && tahun_selisih <= tahun_akhir_sayur) ||
            (tahun_awal_sayur <= tahun_selisih && isNaN(tahun_akhir_sayur)) ||
            (tahun_awal_sayur <= tahun_selisih && tahun_selisih <= tahun_akhir_sayur)) {
            return true;
        }
        return false;
    }
);
$(document).ready(function () {
    var table = $('#sayuran-an').DataTable({
        dom: 'lBfrtip',
        buttons: [{
            className: 'btn-danger btn-round btn-sm mr-2',
            extend: 'pdfHtml5',
            text: 'Cetak (PDF) <i class="fa fa-file-pdf-o"></i>',
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
            },
            title: 'SAYURAN'
        },
        {
            className: 'btn-success btn-round btn-sm mr-2',
            extend: 'excelHtml5',
            text: 'Cetak (Excel) <i class="fa fa-file-excel-o"></i>',
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
            },
            title: 'SAYURAN'
        }],
        select: {
            style: "multi"
        }
    });

    // Event listener to the two range filtering inputs to redraw on input
    $('#tahun-awal-sayur, #tahun-akhir-sayur').keyup(function () {
        table.draw();
    });
});

// ------------------------------------------------- BUAH --------------------------------------------

$.fn.dataTable.ext.search.push(
    function (settings, data, dataIndex) {
        var tahun_awal_buah = parseInt($('#tahun-awal-buah').val(), 10);
        var tahun_akhir_buah = parseInt($('#tahun-akhir-buah').val(), 10);
        var tahun_selisih = parseFloat(data[7]) || 0; // use data for the age column

        if ((isNaN(tahun_awal_buah) && isNaN(tahun_akhir_buah)) ||
            (isNaN(tahun_awal_buah) && tahun_selisih <= tahun_akhir_buah) ||
            (tahun_awal_buah <= tahun_selisih && isNaN(tahun_akhir_buah)) ||
            (tahun_awal_buah <= tahun_selisih && tahun_selisih <= tahun_akhir_buah)) {
            return true;
        }
        return false;
    }
);
$(document).ready(function () {
    var table = $('#buahan-an').DataTable({
        dom: 'lBfrtip',
        buttons: [{
            className: 'btn-danger btn-round btn-sm mr-2',
            extend: 'pdfHtml5',
            text: 'Cetak (PDF) <i class="fa fa-file-pdf-o"></i>',
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
            },
            title: 'BUAH'
        },
        {
            className: 'btn-success btn-round btn-sm mr-2',
            extend: 'excelHtml5',
            text: 'Cetak (Excel) <i class="fa fa-file-excel-o"></i>',
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
            },
            title: 'BUAH'
        }],
        select: {
            style: "multi"
        }
    });

    // Event listener to the two range filtering inputs to redraw on input
    $('#tahun-awal-buah, #tahun-akhir-buah').keyup(function () {
        table.draw();
    });
});

// ------------------------------------------------- BIOFARMAKA --------------------------------------------

$.fn.dataTable.ext.search.push(
    function (settings, data, dataIndex) {
        var tahun_awal_biofarmaka = parseInt($('#tahun-awal-biofarmaka').val(), 10);
        var tahun_akhir_biofarmaka = parseInt($('#tahun-akhir-biofarmaka').val(), 10);
        var tahun_selisih = parseFloat(data[6]) || 0; // use data for the age column

        if ((isNaN(tahun_awal_biofarmaka) && isNaN(tahun_akhir_biofarmaka)) ||
            (isNaN(tahun_awal_biofarmaka) && tahun_selisih <= tahun_akhir_biofarmaka) ||
            (tahun_awal_biofarmaka <= tahun_selisih && isNaN(tahun_akhir_biofarmaka)) ||
            (tahun_awal_biofarmaka <= tahun_selisih && tahun_selisih <= tahun_akhir_biofarmaka)) {
            return true;
        }
        return false;
    }
);
$(document).ready(function () {
    var table = $('#biofarmakan-an').DataTable({
        dom: 'lBfrtip',
        buttons: [{
            className: 'btn-danger btn-round btn-sm mr-2',
            extend: 'pdfHtml5',
            text: 'Cetak (PDF) <i class="fa fa-file-pdf-o"></i>',
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5, 6],
            },
            title: 'BIOFARMAKA'
        },
        {
            className: 'btn-success btn-round btn-sm mr-2',
            extend: 'excelHtml5',
            text: 'Cetak (Excel) <i class="fa fa-file-excel-o"></i>',
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5, 6],
            },
            title: 'BIOFARMAKA'
        }],
        select: {
            style: "multi"
        }
    });

    // Event listener to the two range filtering inputs to redraw on input
    $('#tahun-awal-biofarmaka, #tahun-akhir-biofarmaka').keyup(function () {
        table.draw();
    });
});

// ------------------------------------------------- TANAM PANEN --------------------------------------------

$.fn.dataTable.ext.search.push(
    function (settings, data, dataIndex) {
        var tanggal_awal_tnm = parseInt($('#tanggal-awal-tnm').val(), 10);
        var tanggal_akhir_tnm = parseInt($('#tanggal-akhir-tnm').val(), 10);
        var tahun_selisih = parseFloat(data[8]) || 0; // use data for the age column

        if ((isNaN(tanggal_awal_tnm) && isNaN(tanggal_akhir_tnm)) ||
            (isNaN(tanggal_awal_tnm) && tahun_selisih <= tanggal_akhir_tnm) ||
            (tanggal_awal_tnm <= tahun_selisih && isNaN(tanggal_akhir_tnm)) ||
            (tanggal_awal_tnm <= tahun_selisih && tahun_selisih <= tanggal_akhir_tnm)) {
            return true;
        }
        return false;
    }
);

// ---------------------------------------- Riwayat Pemesanan --------------------------------------
$(document).ready(function () {
    $('#riwayat-pesan').DataTable({
        dom: 'rtip',
        pageLength: 0,
        lengthMenu: [3],

        // buttons: [{
        //     className: 'btn-danger btn-round btn-sm mr-2',
        //     extend: 'pdfHtml5',
        //     text: 'Cetak (PDF) <i class="fa fa-file-pdf-o"></i>',
        //     exportOptions: {
        //         columns: [0, 1, 2, 3, 4, 5, 6],
        //     },
        //     title: 'TANAM PANEN'
        // },
        // {
        //     className: 'btn-success btn-round btn-sm mr-2',
        //     extend: 'excelHtml5',
        //     text: 'Cetak (Excel) <i class="fa fa-file-excel-o"></i>',
        //     exportOptions: {
        //         columns: [0, 1, 2, 3, 4, 5, 6],
        //     },
        //     title: 'TANAM PANEN'
        // }],
        // select: {
        //     style: "multi"
        // }
    });
})

// ---------------------------------------- Index Pemesanan --------------------------------------
$(document).ready(function () {
    $('#index-tanam').DataTable({
        // dom: 'frtip',
        // search: "_INPUT_",
        // searchPlaceholder: "Cari wilayah/desa",
        pageLength: 0,
        lengthMenu: [3],
        responsive: true,
        "dom": '<f<t>ip>',
        "oLanguage": { "sSearch": "Cari wilayah / desa:" },
        language: { searchPlaceholder: "Search records" }
    });
})

// ------------------------------------ Search Tanaman Panen per Tahun ----------------------------//
$(document).ready(function () {
    // Setup - add a text input to each footer cell
    $('#tanam-panen thead tr').clone(true).appendTo('#tanam-panen thead');
    $('#tanam-panen thead tr:eq(1) th').each(function (i) {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Search ' + title + '" />');

        $('input', this).on('keyup change', function () {
            if (table.column(i).search() !== this.value) {
                table
                    .column(i)
                    .search(this.value)
                    .draw();
            }
        });
    });

    var table = $('#tanam-panen').DataTable({
        dom: 'lBfrtip',
        orderCellsTop: true,
        fixedHeader: true,
        buttons: [{
            className: 'btn-danger btn-round btn-sm mr-2',
            extend: 'pdfHtml5',
            text: 'Cetak (PDF) <i class="fa fa-file-pdf-o"></i>',
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5, 6],
            },
            title: 'TANAM PANEN'
        },
        {
            className: 'btn-success btn-round btn-sm mr-2',
            extend: 'excelHtml5',
            text: 'Cetak (Excel) <i class="fa fa-file-excel-o"></i>',
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5, 6],
            },
            title: 'TANAM PANEN'
        }],
        select: {
            style: "multi"
        }
    });

    //----------------------------------- Laporan -----------------------------------
    $(document).ready(function () {
        $('#laporan-pem').DataTable({
            dom: 'lfrtip',
        })
    });
    // ------------------------------------------------- HEADER - TRANSAKSI --------------------------------------------

$(document).ready(function () {
    var table = $('#header-transaksi').DataTable({
        dom: 'lBfrtip',
        buttons: [{
            className: 'btn-danger btn-round btn-sm mr-2',
            extend: 'pdfHtml5',
            text: 'Cetak (PDF) <i class="fa fa-file-pdf-o"></i>',
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
            },
            title: 'LAPORAN TRANSAKSI'
        },
        {
            className: 'btn-success btn-round btn-sm mr-2',
            extend: 'excelHtml5',
            text: 'Cetak (Excel) <i class="fa fa-file-excel-o"></i>',
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5],
            },
            title: 'LAPORAN TRANSAKSI'
        }],
        select: {
            style: "multi"
        }
    });

    // Event listener to the two range filtering inputs to redraw on input
    $('#tahun-awal-padi, #tahun-akhir-padi').keyup(function () {
        table.draw();
    });
});



var rupiah = document.getElementById("rupiah");
rupiah.addEventListener("keyup", function(e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
  rupiah.value = formatRupiah(this.value, "Rp. ");
});
// ------------------------------------------------- formatRupiah  --------------------------------------------
/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}




});

