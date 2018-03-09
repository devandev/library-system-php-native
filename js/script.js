$(document).ready(function(){
    var btnClose = $(".btn_close");
    var btnDaftar = $("#btn-daftar");
    var btnLogout = $("#btn_logout");
    var btnTambah = $(".btn-tambah-data");
    var btnUpdate = $(".btn_update");

   

    /*==========================
    CRUD MEMBER
    ============================*/
    //create function select
    function loaddata(){
        $.get("data_selectM.php", function(data){
            $(".container").html(data);
        });
    }
    //call function select data 
    loaddata();

    //create event click on btn add data
    $(document).on("click", ".btn-tambah-data", function(){
        $(".background-form").show();
    });
    //ajax for event btn add data
    $(".add-form").on("submit", function(e){
            $.ajax({
                type : $(this).attr("method"),
                url : $(this).attr("action"),
                data : $(this).serialize(),
                success : function(){
                    loaddata();
                }
            });
        e.preventDefault();
        $(".background-form").hide();
    });

    //create event click for update form
    $(document).on("click", ".btn_update", function(){
        $(".background-form-up").show();
    });

    $(".update-form").on("submit",function(e){
        $.ajax({
            url : $(this).attr("action"),
            type : $(this).attr("method"),
            data : $(this).serialize(),
            success : function(){
                loaddata();
            }
        });
        e.preventDefault();
        $(".background-form-up").hide();
    });


    

    

    btnClose.on("click", function(){
        $(".background-form").hide();
    });

    btnDaftar.on("click", function(e){
        e.preventDefault();
        $(".background-form").show();
        $("#daftar").show();
    });


    


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