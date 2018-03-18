$(document).ready(function(){
    //create function for load table
    function loadbook(){
        $.get('data_selectB.php',
        function(data){
            $('.container').html(data);
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


});