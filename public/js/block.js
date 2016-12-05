$(document).ready(function () {

    var customHeight = false;

    $("#checkboxHeight").on("click", function(){

        if(customHeight == false){
            $("#groupHeight").css("display","none");
            $("#groupCustomHeight").css("display","block");
            customHeight = true;
        }else{
            $("#groupHeight").css("display","block");
            $("#groupCustomHeight").css("display","none");
            customHeight = false;
        }

    });
});

