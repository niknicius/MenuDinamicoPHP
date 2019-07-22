<?php require_once 'head.php'?>	
        <div class="container">
            <div class="row">
                <?php
                    require_once ("bd/crud.php");
                                  
                    $titulomenu = $_POST['titulomenu'];
                    $urlmenu = $_POST['urlmenu'];
					$seqmenu = $_POST['seqmenu'];
                    $submenu = $_POST['submenu'];
                    
                    $tabela = "menu";
                    $dados_insere = insereDados($tabela,array(
                        "titulo" => $titulomenu,
                        "url" => $urlmenu,
                        "dropdown" => $submenu,
						"ordem" => $seqmenu,
                    ));
                    
                    require_once ("msn/mensagens.php");
                    $titulo = 'CADASTRO REALIZADO';
                    $link = 'index.php';
                    
                    if($dados_insere == 1){
                        $texto = 'Os dados foram cadastrados no sistema.';
                        sucesso($titulo,$texto,$link);
                    }else{
                        $texto = 'Os dados não foram cadastrados no sistema.';
                        erro($titulo,$texto,$link);
                    }
					require_once 'footer.php';
                ?>
				
            </div>
        </div>

