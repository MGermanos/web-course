
function myfun(){
    var obj=document.getElementById("img1");
    if (obj.src.includes("off.png")){
        obj.src="on.jpg";
    }
    else{
        obj.src="off.png";
    }
}