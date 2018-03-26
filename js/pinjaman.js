function loadpinjaman(){
    $.get('crudPeminjam/data_selectP.php',
    function(data){
        $('.wraper').html(data);
    });
}
loadpinjaman();

function expired(){
    $.get('crudPeminjam/data_selectPExpired.php',
    function(data){
        $('.wraper').html(data);
    });
}

$('#filter').on('change', function(){
    var filter = $(this).val();
    if(filter == 'All'){
        loadpinjaman();
    }else if(filter == 'Expired'){
        expired();
    }
});
