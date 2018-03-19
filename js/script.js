$(document).ready(function(){
    var btnClose = $(".btn_close");
    var btnDaftar = $("#btn-daftar");
    var btnLogout = $("#btn_logout");
    var btnTambah = $(".btn-tambah-data");
    var btnUpdate = $(".btn_update");
   
    //create event click on btn add data
    $(document).on("click", ".btn-tambah-data", function(){
        $(".background-form").show();
    });

    
    btnClose.on("click", function(){
        $(".background-form").hide();
    });

    btnDaftar.on("click", function(e){
        e.preventDefault();
        $(".background-form").show();
        $("#daftar").show();
    });

});