/**
 * Created by Bart on 16/10/16.
 */

var gear = false;
$(".config-icon").on("click", function(){
    if(gear === false){
        $(".silo-delete").css("visibility","visible");
        $(".silo-stats-stat").css("border","1px dashed gray");
        $("#new-silo").css("display","block");
        gear = true;
    }else{
        $(".silo-delete").css("visibility","hidden");
        $(".silo-stats-stat").css("border","none");
        $("#new-silo").css("display","none");
        gear= false;
    }

});

$("#new-silo").on("click", function(){

});