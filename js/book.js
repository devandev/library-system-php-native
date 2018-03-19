$(document).ready(function(){
    //create function for load table
    function loadbook(){
        $.get('data_selectB.php',
        function(data){
            $('.container').html(data);
            console.log("function is load");
        });
    }
    loadbook();


    //adding a function to btn tambah data
    $(document).on('click','.btn-tambah-data', function(){
        $('.background-form').show();
    });

    //adding a function to btn close
    var btnclose = $('.btn_close');
    btnclose.on('click', function(){
        $('.background-form').hide();
    });

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
        });
        e.preventDefault();
        $('.background-form').hide();
    });

});