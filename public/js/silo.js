$(document).ready(function () {

    var gearIcon = false;

    $(".silo-title").on("click",".config-icon", function(){

        if(gearIcon == false){
            $(".silo-stats-stat").css("border","1px dashed gray");
            $(".silo-delete").css("visibility","visible");
            $("#new-silo").css("display","block");
            gearIcon = true;
        }else{
            $(".silo-stats-stat").css("border","none");
            $(".silo-delete").css("visibility","hidden");
            $("#new-silo").css("display","none");
            gearIcon = false;
        }

    });
});

