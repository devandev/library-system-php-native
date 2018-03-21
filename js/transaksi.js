function loadtransaksi(){
    $.get('data_selectT.php',
    function(data){
        $('.container').html(data);
    });
}
loadtransaksi();


var btnTambah = $('.btn-tambah-data');
btnTambah.on('click', function(){
    var idT = $('#id_transaksi').val();
    var idAd = $('#id_admin').val();
    var idAn = $('#id_anggota').val();
    var idB = $('#id_buku').val();
    var wtP = $('#waktu_pinjam').val();
    var wtK = $('#waktu_kembali').val();
   
    $.post('data_insertT.php',
    {
        id_transaksi : idT,
        id_admin : idAd,
        id_anggota : idAn,
        id_buku : idB,
        waktu_pinjam : wtP,
        waktu_kembali : wtK
    },
    function(data){
        loadtransaksi();
    })
});


$(document).on('click','.btn_delete',function(){
    var currentRow=$(this).closest("tr"); 
    var id = currentRow.find("td:eq(0)").text();
    $.post('data_deleteT.php',
    {
        id_transaksi : id
    },
    function(data){
        loadtransaksi();
    });
});

$(document).on('click','.btn_update',function(){
    var currentRow=$(this).closest("tr"); 
    var col1 = currentRow.find("td:eq(0)").text(); // get current row 1st TD value
    var col2 = currentRow.find("td:eq(1)").text(); // get current row 2nd TD
    var col3 = currentRow.find("td:eq(2)").text();
    var col4 = currentRow.find("td:eq(3)").text();
    var col5 = currentRow.find("td:eq(4)").text();
    var col6 = currentRow.find("td:eq(4)").text();
    console.log(col2);
    $('#id_transaksi_up').val(col1);
    $('#id_admin_up').val(col2);
    $('#id_anggota_up').val(col3);
    $('#id_buku_up').val(col4);
    $('#waktu_pinjam_up').val(col5);
    $('#waktu_kembali_up').val(col6);
    $('.background-form-up').show();
});