$(document).ready(function () {

    var gearIcon = false;

    $(".silo-title").on("click",".config-icon", function(){

        if(gearIcon == false){
            $(".silo-delete").css("display","block");
            $("#new-silo").css("display","block");
            gearIcon = true;
        }else{
            $(".silo-delete").css("display","none");
            $("#new-silo").css("display","none");
            gearIcon = false;
        }

    });
});

