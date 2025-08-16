<?php

class Loads {
   public function __construct(){
      $this->Conexes();
    }
   
    public function Conexes(){
   
       return $db = Mysqli_connect("localhost",'root','','animundo');
   
       
    }
 public function Load_lancar(){
   
    $db = $this->Conexes();
    
    $db_ordem =("SELECT * FROM lancamento");

    $sql_string = mysqli_query($db,$db_ordem);

    while($loads = mysqli_fetch_array($sql_string)){

      print("
      <article>
      <div class='cap'>
           <img src='".$loads['link']."' >
      </div>
     
   </article>
      ");
    }

 }

 public function Load_animes(){
   $db = $this->Conexes();
    
   $db_ordem =("SELECT * FROM animes");

   $sql_string = mysqli_query($db,$db_ordem);

   while($load = mysqli_fetch_array($sql_string)){

     print("
     <article>
     <div class='cap'>
          <img src='".$load['link']."' name='".$load['id']."' >
     </div>
    
  </article>
     ");
   }

 }
 public function Sent_anime($inser){
       $db_x = $this->Conexes();

       $form = ("SELECT * FROM animes WHERE id = '".$inser."' ");

       $sql_form = mysqli_query($db_x,$form);
   

   while($set_is = mysqli_fetch_array($sql_form)){
      print(" <fieldset>
      <legend>DOWNLOAD</legend>
         <nav class='screen'>
           <div class='img'>
               <img src='".$set_is['link']."'>
               <legend>
              <p>
               ".$set_is['historia']."
              </p>
               </legend>
           </div>
           <div class='descri'>
               <ul>
                 <li>Nome: ".$set_is['nome']."</li>
                 <li>Temporada: ".$set_is['temporada']."</li>
                 <li>Episodios:".$set_is['episodios']."</li>
                 <li>Tamanho: ".$set_is['tamanho']."</li>
                 <li>Audio: ".$set_is['audio']."</li>
                 <li>Genero: ".$set_is['genero']."</li>
                 <li>Legenda: ".$set_is['legenda']."</li>
                 <li>Estado: ".$set_is['estado_ep']."</li>
                 <li>Arquivo: ".$set_is['arquivo_tipo']."</li>
                 <li>Senha: ".$set_is['senha']."</li>
                 
               </ul>
           </div>
         </nav>
         <nav class='down'>
             <a href='".$set_is['link_download']."'>
             <img src='https://i.ibb.co/0j3Xjg3/Download-Now-Button-PNG-File.png' class='download'>
             </a>
             <h4>
             <b>OBS</b>
             <legend>
                 !! Como baixar e extrair !!
             </legend>
             </h4>
             <video controls  autoplay
              src=''>          
             </video> 
         </nav>
     </fieldset>");
   }
 }

 public function User_message($user,$email,$message){

   if(empty($user) || empty($email) || empty($message)){
       header("Location: http://localhost/animundo/");
   }else{
      $db = $this->Conexes();
    
      $db_ordem =("INSERT INTO usuarios(id,nome,email,messagem)
       VALUES ('".uniqid()."','".$user."','".$email."','".$message."')");
   
      mysqli_query($db,$db_ordem);
   
      header("Location: http://localhost/animundo/");
   }
  

 }

 public function Acessos($id){
     $clicked = 0;
    
     $db = $this->Conexes();
     $form_consult = ("SELECT * FROM monetizar WHERE id_anime ='".$id."'");
     $resul_consult = mysqli_query($db,$form_consult);
     if($resul_consult->num_rows != 0){
      $res = mysqli_fetch_assoc($resul_consult);
      $clicked = ($res['click'] + 1); 
      
        $forms_update = ("UPDATE monetizar SET click =".$clicked." ");
        mysqli_query($db,$forms_update);
     }else{
      $clicked +=1;
      $forms = ("INSERT INTO monetizar(id,click,id_anime) VALUES('".uniqid()."',".$clicked.",'".$id."')");
 
      mysqli_query($db,$forms);

     }
   

       
   }

   public function Filtra_Search($search){
    $db = $this->Conexes();
    
      
 
   $sql_forms = "SELECT * FROM animes WHERE nome LIKE '%$search%'";

    $result = mysqli_query($db,$sql_forms);

    if ($result->num_rows > 0) {
        
        while ($row = mysqli_fetch_assoc($result)) {
          print("
          <article>
          <div class='cap'>
               <img src='".$row['link']."' name='".$row['id']."' >
          </div>
         
         </article>
          ");
        }
    

    

   }else{
    print("<article>
    <div class='cap'>
    <h1 style='font-size:25px; color:white; width:100%; text-align:center;'>RESULTADO NÃO ENCONTRADO </h1>
    </div>
    </article>");
   }
 }

 public function Filtra_Genero($genero){
  $db = $this->Conexes();
  
    

 $sql_forms = "SELECT * FROM animes WHERE genero LIKE '%$genero%'";

  $result = mysqli_query($db,$sql_forms);

  if ($result->num_rows > 0) {
      
      while ($row = mysqli_fetch_assoc($result)) {
        print("
        <article>
        <div class='cap'>
             <img src='".$row['link']."' name='".$row['id']."' >
        </div>
       
       </article>
        ");
      }
 }else{
  print("<article>
  <div class='cap'>
  <h1 style='font-size:25px; color:white; width:100%; text-align:center;'>ANIME NÃO ENCONTRADA</h1>
  </div>
  </article>");
 }
}
}



