
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<!-- Brand -->
	<a class="navbar-brand" href="#">Home</a>

	<?php
		require_once("bd/crud.php");
		$tabela = "menu"; 
		$tabela2 = "submenu";
		$dados_menu = selecionaMenu($tabela);
		echo'<ul class="navbar-nav">';
		foreach($dados_menu as $res):
			$codigo = $res['codigo'];
			$dropdown = $res['dropdown'];
			
			if($dropdown==0){
				echo '<li class="nav-item">';
					echo '<a class="nav-link" href="'.$res['url'].'">'.utf8_encode($res['titulo']).'</a>';
				echo '</li>';	
			}else{
				echo '<li class="nav-item dropdown">';
					echo '<a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="'.$res['url'].'">'.utf8_encode($res['titulo']).'</a>';
					echo '<div class="dropdown-menu">';
					 
						$dados_submenu = selecionaSubmenu($tabela2,$codigo);
						foreach($dados_submenu as $linhas):
							echo '<a class="dropdown-item" href="'.$linhas['url'].'">'.utf8_encode($linhas['titulo']).'</a>';					
						endforeach;
				
					echo '</div>';
				
				echo '</li>';
			
			}			
		endforeach;
	echo'</ul>';
	?>
	</nav>








