var x = document.getElementById("container1");
var y = document.getElementById("container2");

function shuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex;

    while (0 !== currentIndex) {

      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex -= 1;
      temporaryValue = array[currentIndex];
      array[currentIndex] = array[randomIndex];
      array[randomIndex] = temporaryValue;
    }
  
    return array;
    
  }




var number_of_card=prompt("Enter the number of cards(max 5)");
number_of_card = parseInt(number_of_card, 10);
while(number_of_card>5 || number_of_card<0){
    number_of_card=prompt("Invalid, renter the number of cards(max 5 min 0)"); 
    number_of_card = parseInt(number_of_card, 10);
}
var card_url=[];
while(number_of_card>0){
    card_url.push(number_of_card+".jpg");
    number_of_card=number_of_card-1;
}

card_url=shuffle(card_url);
container1_card=[];
for(let i=0;i<card_url.length;i++){
let object_to_add= new Card(card_url[i],card_url[i]);
container1_card.push(object_to_add);
}
card_url=shuffle(card_url);
container2_card=[];
for(let i=0;i<card_url.length;i++){
let object_to_add= new Card(card_url[i],card_url[i]);
container2_card.push(object_to_add);
}

for(let i=0;i<container1_card.length;i++){
    x.innerHTML+='<img class="'+container1_card[i].src+'"src=qst.jpg />';
}
;
for(let i=0;i<container2_card.length;i++){
    y.innerHTML+='<img class="'+container2_card[i].src+'"src=qst.jpg />';
}
;
var clicked1=[0,0];
    $("img").click(function(){
       if($(this).attr("src")=="qst.jpg"){
        if(clicked1[0]==0){
        clicked1[0]=$(this);
       
        var parent1=$(this).parent().attr("id");
        $(this).attr("src",$(this).attr("class")); 
        clicked1[1]=parent1;
        }
       
    else{
        var img2=$(this).attr("class");
        var parent2=$(this).parent().attr("id");
        if(parent2 != clicked1[1]){
        $(this).attr("src",$(this).attr("class"));
            if($(this).attr("class")!=clicked1[0].attr("class")){
                $(this).attr("src",$(this).attr("class"));
                $(this).attr("src","qst.jpg");
                clicked1[0].attr("src","qst.jpg"); 
                var score=document.getElementById("score").textContent;
                score=parseInt(score,10);
                score=score-1;
                if(score >= 0){
                    
                document.getElementById("score").innerHTML=score;
                }
                else{
                    
                document.getElementById("score").innerHTML=0;
                }
            }
            else{// match
                var score=document.getElementById("score").textContent;
                score=parseInt(score,10);
                score=score+3;
                document.getElementById("score").innerHTML=score;
            }
    }
    else{
       clicked1[0].attr("src","qst.jpg"); 
    }

    clicked1=[0,0];
    }
}
    });
