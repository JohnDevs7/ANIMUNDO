<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link  href="../css/sys.css" rel="stylesheet">
    <script src="../lib/script/jq.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EP.404</title>
</head>
<body>
    <section>
        <header>
         <div class="bar_acess">
           <div>
            <h1>
                EP.<b>404</b>
             </h1>
           </div>
           <form  method="POST" action="resultado.php">
            <nav class="search">
          
              <input type="search" name="search" placeholder="Pesquisa anime" >
              
              <button class='res' type='submit'>
                <svg xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink" 
                version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 513.749 513.749" 
                style="enable-background:new 0 0 513.749 513.749;" xml:space="preserve" >
                    <g>
                        <path d="M504.352,459.061l-99.435-99.477c74.402-99.427,54.115-240.344-45.312-314.746S119.261-9.277,44.859,90.15
                           S-9.256,330.494,90.171,404.896c79.868,59.766,189.565,59.766,269.434,0l99.477,99.477c12.501,12.501,32.769,12.501,45.269,0  
                            c12.501-12.501,12.501-32.769,0-45.269L504.352,459.061z M225.717,385.696c-88.366,0-160-71.634-160-160s71.634-160,160-160  
                             s160,71.634,160,160C385.623,314.022,314.044,385.602,225.717,385.696z"/>
                    </g>
                    
                    </svg>
                   
              </button>
                 
            </nav>
            </form>
            <div class="menu_bar">
    <svg xmlns="http://www.w3.org/2000/svg" class="open" xmlns:xlink="http://www.w3.org/1999/xlink" 
    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" 
    xml:space="preserve" >
    <g>
        <path d="M480,224H32c-17.673,0-32,14.327-32,32s14.327,32,32,32h448c17.673,0,32-14.327,32-32S497.673,224,480,224z"/>
        <path d="M32,138.667h448c17.673,0,32-14.327,32-32s-14.327-32-32-32H32c-17.673,0-32,14.327-32,32S14.327,138.667,32,138.667z"/>
        <path d="M480,373.333H32c-17.673,0-32,14.327-32,32s14.327,32,32,32h448c17.673,0,32-14.327,32-32S497.673,373.333,480,373.333z"/>
    </g>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" class="close" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
    id="Capa_1" x="0px" y="0px" viewBox="0 0 512.021 512.021" style="enable-background:new 0 0 512.021 512.021;" xml:space="preserve" >
       <g>
           <path d="M301.258,256.01L502.645,54.645c12.501-12.501,12.501-32.769,0-45.269c-12.501-12.501-32.769-12.501-45.269,0l0,0 
             L256.01,210.762L54.645,9.376c-12.501-12.501-32.769-12.501-45.269,0s-12.501,32.769,0,45.269L210.762,256.01L9.376,457.376   c-12.501,12.501-12.501,32.769,0,45.269s32.769,12.501,45.269,0L256.01,301.258l201.365,201.387   c12.501,12.501,32.769,12.501,45.269,0c12.501-12.501,12.501-32.769,0-45.269L301.258,256.01z"/>
       </g>
       </svg>
            </div>
         </div>
      
        
        </header>

        <aside>
           <div class="dashboard">
                 <nav class="bar_slide">
                    <legend>
                        <img src="https://i.ibb.co/5KfTf9q/89-892976-cartoon-girl-body-png-personagem-de-anime-feminino.png">
                       
                    </legend>
                    <h1>
                      EP.404
                   
                     <legend>
                        O mult-verso dos anime livres para obter
                        <br>
                        <a> !! ANIMUNDO !!</a>
                     </legend>
                     </h1>
                 </nav>
                 <nav class="sys">
                 <div class="sys_c">
                    <fieldset class='acess'>
                     <legend>RESULTADO</legend>
                    
                     
                          
                     <?php
                        require_once("../controllers/Dir_session.php");
                            if(!empty($_POST['search'])){
                                $ls = new loads();
                                $ls->Filtra_Search($_POST['search']);
                              
                            }elseif(!empty($_POST['genero'])){
                                $ls = new loads();
                               
                                $ls->Filtra_Genero($_POST['genero']);
                            }
                            else{
                                 
                              //header("Location: http://localhost/animundo/");
                            };                        
                        ?>
                   

                     
             
                    </fieldset>
                    <form class="forml" method="post" action="animes.php">
                      <input type="submit" name="anime" id="anime" hidden >
                    </form>
                  </div>
                  <div class="ads">
                         <iframe src="https://www.google.com/search?q=google&oq=&gs_lcrp=EgZjaHJvbWUqBggEEEUYOzIGCAAQRRg5MgcIARAAGI8CMgcIAhAAGI8CMgcIAxAAGI8CMgYIBBBFGDsyBggFEEUYQTIGCAYQRRhBMgYIBxBFGEHSAQg2NTEzajBqN6gCAbACAQ&sourceid=chrome&ie=UTF-8"></iframe> 
                  </div>
                 
                 
                 </nav>
           </div>
           <nav class="openclose">
           <form  method="POST" action="resultado.php">
              <div class="desk">
               <h2>GENEROS</h2>
                  <ul class="lista_g">
                    
                     
                  </ul>
              </div>
              <div class="mob">
              
               <nav class="search_bar">
                  <input type="search" name="search" placeholder="Pesquisa anime" id='search'>
                  <input name='genero' id='genero' hidden>
                  <button type='submit'>
                    <svg xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink" 
                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 513.749 513.749" 
                    style="enable-background:new 0 0 513.749 513.749;" xml:space="preserve" >
                        <g>
                            <path d="M504.352,459.061l-99.435-99.477c74.402-99.427,54.115-240.344-45.312-314.746S119.261-9.277,44.859,90.15
                               S-9.256,330.494,90.171,404.896c79.868,59.766,189.565,59.766,269.434,0l99.477,99.477c12.501,12.501,32.769,12.501,45.269,0  
                                c12.501-12.501,12.501-32.769,0-45.269L504.352,459.061z M225.717,385.696c-88.366,0-160-71.634-160-160s71.634-160,160-160  
                                 s160,71.634,160,160C385.623,314.022,314.044,385.602,225.717,385.696z"/>
                        </g>
                        
                        </svg>
                       
                  </button>
                </nav>
                         </form>
               <h2>GENEROS</h2>
               <ul class="lista_g">
                 
                 
               </ul>
              </div>
                         </form>
           </nav>
        </aside>
        <footer>
<nav class="sub_fot">
   <div class="form">
     <fieldset>
      <legend>QUAL ANIME VOÇÊ QUER?</legend>
      <form method='post' action='../controllers/user_sms.php' required>
         <input type="text" placeholder="Nome do anime" name='users'>
         <input type="email" placeholder="@Email.com" name='email' required>
        <textarea name='message' placeholder="Fale um pouco sobre o anime" aria-placeholder="Fale um pouco sobre o anime" required>

        </textarea>
       <input type="submit" value="Envia">
      </form>
     </fieldset>
   </div>
   <div class="red-social">
       <ul>
         <li>
            <svg xmlns="http://www.w3.org/2000/svg" 
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
             viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve" >
               <g id="Artboard">
                  <path style="fill-rule:evenodd;clip-rule:evenodd;"
                   d="M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12S18.627,0,12,0z
                       M17.562,8.161c-0.18,1.897-0.962,6.502-1.359,8.627c-0.168,0.9-0.5,1.201-0.82,1.23c-0.697,0.064-1.226-0.461-1.901-0.903
                          c-1.056-0.692-1.653-1.123-2.678-1.799c-1.185-0.781-0.417-1.21,0.258-1.911c0.177-0.184,3.247-2.977,3.307-3.23
                             c0.007-0.032,0.015-0.15-0.056-0.212s-0.174-0.041-0.248-0.024c-0.106,0.024-1.793,1.139-5.062,3.345
                                c-0.479,0.329-0.913,0.489-1.302,0.481c-0.428-0.009-1.252-0.242-1.865-0.442c-0.751-0.244-1.349-0.374-1.297-0.788
                                   c0.027-0.216,0.324-0.437,0.892-0.663c3.498-1.524,5.831-2.529,6.998-3.015c3.333-1.386,4.025-1.627,4.477-1.635
                                      C17.472,7.214,17.608,7.681,17.562,8.161z"/>
               </g>
               </svg>
               
         </li>
         <li>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
            version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" 
            xml:space="preserve" >
               <g>
                  <path d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509
                     V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073
                        c0-6.627,5.373-12,12-12S24,5.445,24,12.073z"/>
               </g>
               </svg>
         </li>
         <li>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" 
            viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve" >
               <g>
                  <path d="M12,2.162c3.204,0,3.584,0.012,4.849,0.07c1.308,0.06,2.655,0.358,3.608,1.311c0.962,0.962,1.251,2.296,1.311,3.608   c0.058,1.265,0.07,1.645,0.07,4.849c0,3.204-0.012,3.584-0.07,4.849c-0.059,1.301-0.364,2.661-1.311,3.608   c-0.962,0.962-2.295,1.251-3.608,1.311c-1.265,0.058-1.645,0.07-4.849,0.07s-3.584-0.012-4.849-0.07   c-1.291-0.059-2.669-0.371-3.608-1.311c-0.957-0.957-1.251-2.304-1.311-3.608c-0.058-1.265-0.07-1.645-0.07-4.849   c0-3.204,0.012-3.584,0.07-4.849c0.059-1.296,0.367-2.664,1.311-3.608c0.96-0.96,2.299-1.251,3.608-1.311   C8.416,2.174,8.796,2.162,12,2.162 M12,0C8.741,0,8.332,0.014,7.052,0.072C5.197,0.157,3.355,0.673,2.014,2.014   C0.668,3.36,0.157,5.198,0.072,7.052C0.014,8.332,0,8.741,0,12c0,3.259,0.014,3.668,0.072,4.948c0.085,1.853,0.603,3.7,1.942,5.038   c1.345,1.345,3.186,1.857,5.038,1.942C8.332,23.986,8.741,24,12,24c3.259,0,3.668-0.014,4.948-0.072   c1.854-0.085,3.698-0.602,5.038-1.942c1.347-1.347,1.857-3.184,1.942-5.038C23.986,15.668,24,15.259,24,12   c0-3.259-0.014-3.668-0.072-4.948c-0.085-1.855-0.602-3.698-1.942-5.038c-1.343-1.343-3.189-1.858-5.038-1.942   C15.668,0.014,15.259,0,12,0z"/>
                  <path d="M12,5.838c-3.403,0-6.162,2.759-6.162,6.162c0,3.403,2.759,6.162,6.162,6.162s6.162-2.759,6.162-6.162   C18.162,8.597,15.403,5.838,12,5.838z M12,16c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S14.209,16,12,16z"/>
                  <circle cx="18.406" cy="5.594" r="1.44"/>
               </g>
               
               </svg>
         </li>
       </ul>
   </div>
   <div class="ab">
      <img src="https://i.ibb.co/fq1813m/ai-generated-male-anime-characters-transparent-background-free-png.webp">
      <legend>
         EP404 um universo paralelo
      </legend>
   </div>
</nav>

        </footer>
    </section>
    <script src="../lib/script/scripts.js"></script>
</body>
</html>