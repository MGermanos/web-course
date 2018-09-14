var repeat=true;
console.log("yes");

while(repeat){
var name = prompt("Enter your name");
alert("your name1: "+name);
l=name.length-1;
var x="yes";
for(var i =0;i<name.length;i++){
    console.log(i);
    console.log("the other");
        console.log((l-i));
    if(name.charAt(i)!=name.charAt(l-i)){

    x="flase";
    }
}
if(x=="yes"){
repeat=false;
}
}