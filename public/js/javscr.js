var btn_over = document.getElementById("menu_btn");
btn_over.addEventListener("mouseover", function(){
    btn_over.style.backgroundColor = "#dea11d";
}); 

var video_over = document.getElementById("video_btn");
video_over.addEventListener("mouseover", function(){
    video_over.style.backgroundColor = "#dea11d";
}); 

var dat_over = document.getElementById("datingBtn");
dat_over.addEventListener("mouseover", function(){
    dat_over.style.backgroundColor = "#dea11d";
}); 

var btn_out = document.getElementById("menu_btn");
btn_out.addEventListener("mouseout", function(){
    btn_out.style.backgroundColor = "#26272c";
}); 

var video_out = document.getElementById("video_btn");
video_out.addEventListener("mouseout", function(){
    video_out.style.backgroundColor = "#26272c";
}); 

var dat_out = document.getElementById("datingBtn");
dat_out.addEventListener("mouseout", function(){
    dat_out.style.backgroundColor = "#26272c";
}); 

const password = document.getElementById("passwordInp");
const confirmPass = document.getElementById("confPassword");
const checkBox = document.getElementById("checkPass");

checkBox.addEventListener("click", checkBoxClicked);

function checkBoxClicked(){
    if(this.checked){
        password.type = "text";
        confirmPass.type = "text";
    } else{
        password.type = "password";
        confirmPass.type = "password";
    }

}

jQuery(function($){
    $("#phone").mask("+7 (999) 999 9999");
 });