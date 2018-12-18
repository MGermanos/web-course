<script>
      $(document).ready(function() {
        function filterPath(string) {
          return string
          .replace(/^\//,'')  
          .replace(/(index|default).[a-zA-Z]{3,4}$/,'')  
          .replace(/\/$/,'');
        }
        $('a[href*=\\#]').each(function() {
          if ( filterPath(location.pathname) == filterPath(this.pathname)
          && location.hostname == this.hostname
          && this.hash.replace(/#/,'') ) {
            var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
            var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
             if ($target) {
               var targetOffset = $target.offset().top;
               $(this).click(function() {
                 $('html, body').animate({scrollTop: targetOffset}, 1000);
                 return false;
               });
            }
          }
        });
      });
      
      $(document).ready(function(){
        var scroll_start = 0;
        var startchange = $('#title');
        var offset = startchange.offset();
        scroll_start = $(this).scrollTop();
        if(screen.width<992) {
          if(scroll_start > offset.top+60) {
             $('.navbar').css('background-color', 'white');
             $('.navbar').css('box-shadow', '0px 2px 30px #a1a1a1');
             $('.nav-link').css('color','black');
             $('.navbar-brand').css('color','black');
             document.getElementById('navbar').classList.add('navbar-light');
             document.getElementById('navbar').classList.remove('navbar-dark');
          } else {
             $('.navbar').css('background-color', 'rgba(50,50,50,0.8)');
             $('.navbar').css('box-shadow', 'none');
             $('.nav-link').css('color','white');
             $('.navbar-brand').css('color','white');
             document.getElementById('navbar').classList.remove('navbar-light');
             document.getElementById('navbar').classList.add('navbar-dark');
          }
          $(document).scroll(function() { 
           scroll_start = $(this).scrollTop();
           if(scroll_start > offset.top+60) {
               $('.navbar').css('background-color', 'white');
               $('.navbar').css('box-shadow', '0px 2px 30px #a1a1a1');
               $('.nav-link').css('color','black');
               $('.navbar-brand').css('color','black');
               document.getElementById('navbar').classList.add('navbar-light');
               document.getElementById('navbar').classList.remove('navbar-dark');
            } else {
               $('.navbar').css('background-color', 'rgba(50,50,50,0.8)');
               $('.navbar').css('box-shadow', 'none');
               $('.nav-link').css('color','white');
               $('.navbar-brand').css('color','white');
               document.getElementById('navbar').classList.remove('navbar-light');
               document.getElementById('navbar').classList.add('navbar-dark');
            }
          });
        }
        else {
          if(scroll_start > offset.top+60) {
             $('.navbar').css('background-color', 'white');
             $('.navbar').css('box-shadow', '0px 2px 30px #a1a1a1');
             $('.nav-link').css('color','black');
             $('.navbar-brand').css('color','black');
             document.getElementById('navbar').classList.add('navbar-light');
             document.getElementById('navbar').classList.remove('navbar-dark');
          } else {
             $('.navbar').css('background-color', 'transparent');
             $('.navbar').css('box-shadow', 'none');
             $('.nav-link').css('color','white');
             $('.navbar-brand').css('color','white');
             document.getElementById('navbar').classList.remove('navbar-light');
             document.getElementById('navbar').classList.add('navbar-dark');
          }
          $(document).scroll(function() { 
           scroll_start = $(this).scrollTop();
           if(scroll_start > offset.top+60) {
               $('.navbar').css('background-color', 'white');
               $('.navbar').css('box-shadow', '0px 2px 30px #a1a1a1');
               $('.nav-link').css('color','black');
               $('.navbar-brand').css('color','black');
               document.getElementById('navbar').classList.add('navbar-light');
               document.getElementById('navbar').classList.remove('navbar-dark');
            } else {
               $('.navbar').css('background-color', 'transparent');
               $('.navbar').css('box-shadow', 'none');
               $('.nav-link').css('color','white');
               $('.navbar-brand').css('color','white');
               document.getElementById('navbar').classList.remove('navbar-light');
               document.getElementById('navbar').classList.add('navbar-dark');
            }
          });
        }
      });
    </script>