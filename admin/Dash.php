<?php
include 'conexao.php';

    $Up = "SELECT *FROM animes";
    $result = $conexao->query($Up);
    if($result==true):
        $A= array();
            while($d = $result->fetch_assoc()):
                $A = $d;
            endwhile;
    endif;
    

if($_SERVER["REQUEST_METHOD"] == "POST"):
    
    $p1 = $conexao->real_escape_string($_POST['nome']);
    $p2 = $conexao->real_escape_string($_POST['temporada']);
    $p3 = $conexao->real_escape_string($_POST['episodios']);
    $p4 = $conexao->real_escape_string($_POST['estado_ep']);
    $p5 = $conexao->real_escape_string($_POST['link']);
    $p6 = $conexao->real_escape_string($_POST['audio']);
    $p7 = $conexao->real_escape_string($_POST['legenda']);
    $p8 = $conexao->real_escape_string($_POST['tamanho']);
    $p9 = $conexao->real_escape_string($_POST['arquivo_tipo']);
    $p10 = $conexao->real_escape_string($_POST['senha']);
    $p11 = $conexao->real_escape_string($_POST['link_capa']);
    $p12 = $conexao->real_escape_string($_POST['genero']);
    $p13 = $conexao->real_escape_string($_POST['historia']);

        $Up = "INSERT INTO `animes`(id,nome,temporada,episodios,estado_ep,link_download,audio,legenda,tamanho,arquivo_tipo,senha,link,genero,historia) VALUES ('".uniqid()."','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$p11','$p12','$p13')";
       
        if($conexao->query($Up) === TRUE):
            echo '
                            <style>.c{background: linear-gradient(90deg, green, #ccc, greenyellow);}</style>
                            <center class="c"><h1>Upload efectuado com sucesso</h1></center>';
        else:
            echo "Erro:".$Up."<br>".$conexao->error;
        endif;    
    endif;

   $conexao->close();
   

