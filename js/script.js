$(document).ready(function(){
    var btnClose = $(".btn_close");
    var btnDaftar = $("#btn-daftar");
    var btnLogout = $("#btn_logout");

    btnClose.on("click", function(){
        $(".background-form").hide();
    });

    btnDaftar.on("click", function(e){
        e.preventDefault();
        $(".background-form").show();
        $("#daftar").show();
    });



    //still not working yet
    btnLogout.on("click", function(){
        alert("anda yakin logout ?");
    });

    $("#la").on("click", function(){
        alert("cool");
    });
});