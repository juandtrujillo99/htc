$(document).on('ready',function()
                {
      $('.contenedor-menu').on('click',function(){
          
      $('.menu-burger').toggleClass('cruz'); 
          
      $('.menu').toggleClass('fondo'); 
      $('.transparente').toggleClass('transparencia'); 
      })

      var height = $(window).height();

      $('.fondo').height(height);

    })
