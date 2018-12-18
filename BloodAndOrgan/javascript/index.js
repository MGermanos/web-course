function rb(){
    var registerBlood= document.getElementsByClassName("registerBlood")[0];
    registerBlood.classList.remove("hide");};

    function ro(){
        var registerOrgan= document.getElementsByClassName("registerOrgan")[0];
        registerOrgan.classList.remove("hide");
        };
        
    
function hideBlood(){
    let b=document.getElementById("blood");
    let o=document.getElementById("organ");
    b.classList.add("hide");
    o.classList.remove("hide");
};
function hideOrgan(){
    let b=document.getElementById("blood");
    let o=document.getElementById("organ");
    o.classList.add("hide");
    b.classList.remove("hide");
};



  