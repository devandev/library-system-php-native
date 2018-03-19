$(document).ready(function(){
    //create function for load table
    function loadbook(){
        $.get('data_selectB.php',
        function(data){
            $('.container').html(data);
        });
    }
    loadbook();

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