
function hi(){
var x = document.getElementById("pass").value;
var y = document.getElementById("conf").value;
if(x!=y){
document.write(x);
alert("invalid");
document.location.reload();

}
else{
    document.write("wlc");
}
}