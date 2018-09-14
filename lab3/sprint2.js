var x = prompt("Enter the number of stars");
try{
    x= parseInt(x,0);
}
catch(err){
    alert("invalid input");

var y=x-1;
var n=1;
while(x!=0){
    var toprint="&nbsp";
    for(var i = 0 ; i<y ;i++){
        toprint=toprint.concat("s");
    }
    for(var j=0;j<n;j++){
        toprint=toprint.concat("*");
    }
    document.write(toprint);
    document.write("<br/>");
    y=y-1;
    n=n+2;
    x=x-1;
}
}