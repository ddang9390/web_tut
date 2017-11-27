/**
 * Created by Daniel on 4/2/2017.
 */

function createLogin(){
    $("#choose").css("display", "none");
    $("#loginPage").css("display", "block");
}

function createRegister() {
    $("#choose").css("display", "none");
    $("#registerPage").css("display", "block");
}

function returnHome(){
    $("#loginPage").css("display", "none");
    $("#registerPage").css("display", "none");

    $("#choose").css("display", "block");
}

