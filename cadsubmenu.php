<?php require_once 'head.php'?>	
        <div class="container">
            <div class="row">
                <?php
                    require_once ("bd/crud.php");
                                  
                    $titulosubmenu = $_POST['titulosubmenu'];
                    $urlsubmenu = $_POST['urlsubmenu'];
					$seqsubmenu = $_POST['seqsubmenu'];
                    $codigo_menu = $_POST['codigo_menu'];
                    
                    $tabela = "submenu";
                    $dados_insere = insereDados($tabela,array(
                        "titulo" => $titulosubmenu,
                        "url" => $urlsubmenu,
                        "codigo_menu" => $codigo_menu,
						"ordem" => $seqsubmenu,
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

