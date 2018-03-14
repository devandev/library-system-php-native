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

    //get value to display inside input update form
    $(document).on("click", ".btn_update", function(){
        var id_anggota = $(this).attr("id");
        
        var currentRow=$(this).closest("tr"); 
         var col1=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
         var col2=currentRow.find("td:eq(1)").text(); // get current row 2nd TD
         var col3=currentRow.find("td:eq(2)").text();
         var col4=currentRow.find("td:eq(3)").text();
         var col5=currentRow.find("td:eq(4)").text();
         
         $("#id_anggota").val(col1);
         $("#nama_anggota").val(col2);
         $("#password_anggota").val(col3);
         $("#alamat_anggota").val(col4);
         $("#telp_anggota").val(col5);
         $(".background-form-up").show();
    });

    $("#update-form").on("submit",function(e){
        // $.ajax({
        //     url : $(this).attr("action"),
        //     type : $(this).attr("method"),
        //     data : $(this).serialize(),
        //     success : function(){
        //         loaddata();
        //     }
        // });
        $.ajax({
            type:'post',
            url : 'data_selectMDt.php',// The file where my php code is
            data:{
                // all variables i want to pass. to php file data_selectMDt.php
                'id':col1, 
                'nama':col2,
                'password':col3,
                'alamat':col4,
                'telp':col5
            },
            success:function(data){ // in case of success get the output, i named data
                loaddata(); // do something with the output, like an alert
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