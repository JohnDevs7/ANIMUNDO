$(document).ready(()=>{

let Generos =['Ação','Luta','Romance','Artes Marcias','Aventura'
              ,'Coméndia','Drama','Demônios','Ecchi','Espaço','Esporte',
              'Fantasia','Ficção Cientifica','Harém','Horror','Jogos',
              'Josei','Magia','Mecha','Mistério','Militar','Musical',
              'Paródia','Psicológia','Seincen','Shoujo-ai','Shounen','Slice of Life',
              'Sobrenatural','Suspence','Superpoder','Vampiros','Vida Escolar'
];
let contagem = 0;


Carregar_list_G()
Filter_Event_ONCLOSE()
Filter_valores_G()
Filtra_click_Anime()
Home()

   function Filter_Event_ONCLOSE(){
    $(".menu_bar svg").on("click",()=>{

      if(contagem === 0){
         contagem = 1
         $(".openclose").fadeIn(1000)
         $(".close").css("display","block")
         $(".open").css("display","none")
      }else{
        contagem = 0
        $(".close").css("display","none")
        $(".open").css("display","block")
        $(".openclose").fadeOut(1000)
      }
    })
   }
   function Carregar_list_G(){
    for(let cont = 0; cont <Generos.length;cont++){
      $(".lista_g").append("<li>"+Generos[cont]+"</li>")
    }
   }
   
   function Filter_valores_G(){
     
    $('.lista_g li').filter('li').on('click',(a)=>{

      $("#genero").val($(a.target).text())
      
      $('.search_bar button').trigger('click')
    })
     
   }
   function Home(){

    $(".bar_acess h1").on('click',()=>{
     // altera quando for hospedar o site
       location ="http://localhost/animundo/";
    })
   }

   function Filtra_click_Anime(){
     
       $('.anim article img').filter("img").on('click',(a)=>{

             $("#anime").val(a.target.name).trigger('click')
       })

       $('.acess article img').filter("img").on('click',(a)=>{

        $("#anime").val(a.target.name).trigger('click')
  })
   }



});