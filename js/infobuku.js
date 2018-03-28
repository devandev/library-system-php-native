function loadInfoBuku(){
    $.get('bukuinformation/data_selectBinfo.php',
    function(data){
        $('.tersedia').html(data);
    });
}
loadInfoBuku();

function loadInfoBExpired(){
    $.get('bukuinformation/data_selectBExpired.php',
    function(data){
        $('.tidakTersedia').html(data);
    });
}
loadInfoBExpired();