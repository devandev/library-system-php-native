$(document).ready(function(){
    var btnClose = $(".btn_close");
    var btnDaftar = $("#btn-daftar");
    var btnLogout = $("#btn_logout");
    var btnTambah = $(".btn-tambah-data");
    var btnUpdate = $(".btn_update");

    loaddata();


    //for crud
    $(document).on("click", ".btn-tambah-data", function(){
        $(".background-form").show();
    });


    $(document).on("click", ".btn_update", function(){
        $(".background-form-up").show();
    });

    

    btnClose.on("click", function(){
        $(".background-form").hide();
    });

    btnDaftar.on("click", function(e){
        e.preventDefault();
        $(".background-form").show();
        $("#daftar").show();
    });


    function loaddata(){
        $.get("data_selectM.php", function(data){
            $(".container").html(data);
        });
    }


    var btnAddM = $("#btn_submit");
    btnAddM.on("submit", function(e){

        e.preventDefault();
    });


    //for ajax








    //still not working yet
    btnLogout.on("click", function(){
        alert("anda yakin logout ?");
    });

    $("#la").on("click", function(){
        alert("cool");
    });
});