$(document).ready(function(){
    //create function for load table
    function loadbook(){
        $.get('data_selectB.php',
        function(data){
            $('.container').html(data);
        });
    }
    loadbook();

    //ajax function to adding data
    var btnSubmit = $('#btn_submit');
    btnSubmit.on("click", function(e){
        var nama = $('#nama_buku').val();
        var jenis = $('#jenis_buku').val();
        var penerbit = $('#penerbit').val();
        var penyusun = $('#penyusun').val();
        $.post('data_insertB.php',
        {
            nama_buku : nama,
            jenis_buku : jenis,
            penerbit : penerbit,
            penyusun : penyusun
        },
        function(data){
            loadbook();
            $('.background-form').hide();
            var nama = $('#nama_buku').val("");
            var jenis = $('#jenis_buku').val("");
            var penerbit = $('#penerbit').val("");
            var penyusun = $('#penyusun').val("");
        });
        e.preventDefault();
    });

    $(document).on('click','.btn_update', function(){
        var currentRow=$(this).closest("tr"); 
        var col1=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
        var col2=currentRow.find("td:eq(1)").text(); // get current row 2nd TD
        var col3=currentRow.find("td:eq(2)").text();
        var col4=currentRow.find("td:eq(3)").text();
        var col5=currentRow.find("td:eq(4)").text();

        $('#id_buku_up').val(col1);
        $('#nama_buku_up').val(col2);
        $('#jenis_buku_up').val(col3);
        $('#penerbit_up').val(col4);
        $('#penyusun_up').val(col5);
        $('.background-form-up').show();
    });

    var btnUpdate = $('#btn_submit_up');
    btnUpdate.on('submit',function(){
        console.log('update');
        var currentRow=$(this).closest("tr"); 
        var col1=currentRow.find("td:eq(0)").text();
        $.post('data_updateB.php',
        {
            id_buku : col1,
            nama_buku : col2,
            jenis_buku : col3,
            penerbit : col4,
            penyusun :col5
        },
        function(data){
            loadbook();
        });
    });


    //ajax function por deleting data
    $(document).on('click','.btn_delete', function(){
        var tr = $(this).closest("tr"); 
        var id = tr.find("td:eq(0)").text();
        $.post('data_deleteB.php',
        {
            id_buku : id
        },
        function(data){
            loadbook();
        });
    });
});