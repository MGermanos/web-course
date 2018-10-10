var i=1;
$('img').on({
    'click': function(){
        if(i>5){
        i=1;
        }
        var j=i+".jpg";
        $(this).attr('src',j);
        i=i+1;
    
    }
});