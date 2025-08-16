<?php
include 'conexao.php';
include 'Dash.php';


?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Dashboard-Ep.404</title>
</head>
<body>
    <div class="body">
        <div class="side-left">
            <div class="div">
                <div>
                    <i class="bi bi-person-circle perfil"></i>
                </div>
                
            </div>
            <div class="div div-2">
                <h1>AdminEp.404</h1>
                <label for="">adminep404anime@admin.com</label>
            </div>
            <div class="div">
                <ul>
                    <li class="item-list-menu-leftr">
                        <i class="bi bi-house-dash"></i> <a href="?home"> Home</a>
                    </li>
                    <li class="item-list-menu-leftr">
                        <i class="bi bi-files"></i>  <a href="?ficheiro"> Ficheiros</a>
                    </li>
                    <li class="item-list-menu-leftr">
                        <i class="bi bi-chat-right-text"></i> <a href="?comentario"> Comentarios</a>
                    </li>
                    <li class="item-list-menu-leftr">
                        <i class="bi bi-bell"></i> <a href="?notificacao">Notificações</a>
                    </li>
                    <li class="item-list-menu-leftr">
                        <i class="bi bi-graph-up"></i> <a href="?grafico">Graficos</a>
                    </li>
                    
                </ul>
            </div>
        </div>

        <div class="side-right">
            <div class="div">
                <div class="header">
                    <h3>Dashboard-Ep</h3>
                </div>
                <div class="header">
                    <i class="bi bi-border-width"></i>
                </div>
            </div>
            <div class="container-menu-side-left">
                <!--======================================= Home ===========================================================================-->
                              <div class="home dashboard">
                                      <div class="div-2-side-right">
                                          <div class="items-advance">
                                              <div class="title-items-advance">
                                                  <div><label for="">Monetização</label></div>
                                                  <div><i class="bi bi-coin"></i></div>
                                                  
                                              </div>
                                              <div class="valor-items-advance">
                                                  <h1>$ 0,00</h1>
                                              </div>
                                          </div>
                                          <div class="items-advance">
                                              <div class="title-items-advance">
                                                  <div><label for="">Compartilhamento</label></div>
                                                  <div><i class="bi bi-share"></i></div>
                                                  
                                              </div>
                                              <div  class="valor-items-advance">
                                                  <h1> 0,00</h1>
                                              </div>
                                          </div>
                                          <div class="items-advance">
                                              <div class="title-items-advance">
                                                  <div><label for="">Acesso</label></div>
                                                  <div><i class="bi bi-hand-index"></i></div>
                                              
                                              </div>
                                              <div  class="valor-items-advance">
                                                  <h1> 0,00</h1>
                                              </div>
                                          </div>
                                          <div class="items-advance">
                                              <div class="title-items-advance">
                                                  <div><label for="">Avaliação</label></div>
                                                  <div><i class="bi bi-star"></i></div>
                                                  
                                              </div>
                                              <div  class="valor-items-advance">
                                                  <h1> 0,00</h1>
                                              </div>
                                          </div>
                                      </div>
              
                                      <div class="div"></div>
                                  </div>
                                  <!--=======================================================================================================-->
  <!--======================================= ficheiros ===========================================================================-->
                <div class="ficheiros dashboard">
                    <div class="div-2-side-right">
                        
                            <fieldset style="border: 4px solid #714e4e;" id="form-upload">
                                <legend style="margin: 0 auto;"><h1 style="color: #1e1212;">Upload conteudo</h1></legend>
                                <form action="" method="post" id="form-upload-main">
                                    <div class="item-of-form">
                                        <input type="text" name="nome" id="nome" class="item-form-upload" placeholder="Nome do anime">
                                    </div>
                                    <div class="item-of-form">
                                        <input type="text" name="temporada" id="temporada" class="item-form-upload" placeholder="O Numero da temporada do anime">
                                    </div>
                                    <div class="item-of-form">
                                        <input type="text" name="episodios" id="episodios" class="item-form-upload" placeholder="O Numero de episodios">
                                    </div>
                                    <div class="item-of-form">
                                        <input type="text" name="estado_ep" id="estado_ep" class="item-form-upload" placeholder="Estado do anime">
                                    </div>
                                    <div class="item-of-form">
                                        <input type="text" name="link" id="link" class="item-form-upload" placeholder="Link para download"  >
                                    </div>
                                    <div class="item-of-form">
                                        <select name="audio" id="audio" class="item-form-upload">
                                            <option value="">Selecione o audio</option>
                                            <option value="DUAL">DUAL</option>
                                            <option value="Japonês">Japonês</option>
                                            <option value="Português">Português</option>
                                            
                                        </select>
                                    </div>
                                    <div class="item-of-form">
                                        <input type="text" name="legenda" id="legenda" class="item-form-upload" placeholder="Legendas disponivel no anime">
                                    </div>
                                    <div class="item-of-form">
                                        <input type="text" name="genero" id="genero" class="item-form-upload" placeholder="Genero do anime">
                                    </div>
                                    <div class="item-of-form">
                                        <input type="text" name="tamanho" id="tamanho" class="item-form-upload" placeholder="Tamanho">
                                    </div>
                                    <div class="item-of-form">
                                        <select name="arquivo_tipo" id="arquivo_tipo" class="item-form-upload">
                                            <option value="">Selecione o tipo de arquivo</option>
                                            <option value="ZIP">ZIP</option>
                                            <option value="RAR">RAR</option>
                                            
                                        </select>
                                    </div>
                                    <div class="item-of-form">
                                        <input type="text" name="senha" id="senha" class="item-form-upload" placeholder="Senha">
                                    </div>
                                    <div class="item-of-form">
                                        <input type="text" name="link_capa" id="capa" class="item-form-upload" placeholder="Endereço da capa" >   
                                    </div><div class="item-of-form">
                                        <input type="text" name="historia" id="hstoria" class="item-form-upload" placeholder="Historia do anime" >   
                                    </div>
                                    <div class="item-of-form" >
                                        <input type="submit" name="enviar" id="enviar" class="item-form-upload" placeholder="Endereço da capa" >   
                                    </div>

                                </form>
                            </fieldset>
                    </div>

                    <div class="div" style="border: 4px solid #714e4e;" id="form-result">
                    </div>
                </div>
                <!--=======================================================================================================-->
  <!--======================================= Home ===========================================================================-->
                <div class="comentarios dashboard">
                    <div class="div-2-side-right">
                        <div class="items-advance">
                            <div class="title-items-advance">
                                <div><label for="">Monetização</label></div>
                                <div><i class="bi bi-coin"></i></div>
                                
                            </div>
                            <div>
                                <h1>$ 0,00</h1>
                            </div>
                        </div>
                        <div class="items-advance">
                            <div class="title-items-advance">
                                <div><label for="">Compartilhamento</label></div>
                                <div><i class="bi bi-share"></i></div>
                                
                            </div>
                            <div>
                                <h1> 0,00</h1>
                            </div>
                        </div>
                        <div class="items-advance">
                            <div class="title-items-advance">
                                <div><label for="">Acesso</label></div>
                                <div><i class="bi bi-hand-index"></i></div>
                            
                            </div>
                            <div>
                                <h1> 0,00</h1>
                            </div>
                        </div>
                        <div class="items-advance">
                            <div class="title-items-advance">
                                <div><label for="">Avaliação</label></div>
                                <div><i class="bi bi-star"></i></div>
                                
                            </div>
                            <div>
                                <h1> 0,00</h1>
                            </div>
                        </div>
                    </div>

                    <div class="div"></div>
                </div>
                <!--=======================================================================================================-->
  <!--======================================= Home ===========================================================================-->
                <div class="notificações dashboard">
                    <div class="div-2-side-right">
                        <div class="items-advance">
                            <div class="title-items-advance">
                                <div><label for="">Monetização</label></div>
                                <div><i class="bi bi-coin"></i></div>
                                
                            </div>
                            <div>
                                <h1>$ 0,00</h1>
                            </div>
                        </div>
                        <div class="items-advance">
                            <div class="title-items-advance">
                                <div><label for="">Compartilhamento</label></div>
                                <div><i class="bi bi-share"></i></div>
                                
                            </div>
                            <div>
                                <h1> 0,00</h1>
                            </div>
                        </div>
                        <div class="items-advance">
                            <div class="title-items-advance">
                                <div><label for="">Acesso</label></div>
                                <div><i class="bi bi-hand-index"></i></div>
                            
                            </div>
                            <div>
                                <h1> 0,00</h1>
                            </div>
                        </div>
                        <div class="items-advance">
                            <div class="title-items-advance">
                                <div><label for="">Avaliação</label></div>
                                <div><i class="bi bi-star"></i></div>
                                
                            </div>
                            <div>
                                <h1> 0,00</h1>
                            </div>
                        </div>
                    </div>

                    <div class="div"></div>
                </div>
                <!--=======================================================================================================-->
  <!--======================================= Home ===========================================================================-->
                <div class="graficos dashboard">
                    <div class="div-2-side-right">
                        <div class="items-advance">
                            <div class="title-items-advance">
                                <div><label for="">Monetização</label></div>
                                <div><i class="bi bi-coin"></i></div>
                                
                            </div>
                            <div>
                                <h1>$ 0,00</h1>
                            </div>
                        </div>
                        <div class="items-advance">
                            <div class="title-items-advance">
                                <div><label for="">Compartilhamento</label></div>
                                <div><i class="bi bi-share"></i></div>
                                
                            </div>
                            <div>
                                <h1> 0,00</h1>
                            </div>
                        </div>
                        <div class="items-advance">
                            <div class="title-items-advance">
                                <div><label for="">Acesso</label></div>
                                <div><i class="bi bi-hand-index"></i></div>
                            
                            </div>
                            <div>
                                <h1> 0,00</h1>
                            </div>
                        </div>
                        <div class="items-advance">
                            <div class="title-items-advance">
                                <div><label for="">Avaliação</label></div>
                                <div><i class="bi bi-star"></i></div>
                                
                            </div>
                            <div>
                                <h1> 0,00</h1>
                            </div>
                        </div>
                    </div>

                    <div class="div"></div>
                </div>
                <!--=======================================================================================================-->
            </div>
        </div>
    </div>
    
    <script src="assets/lib.js"></script>
    <script src="assets/js.js"></script>
    
</body>
</html>