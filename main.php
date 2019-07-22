<p class="lead"><strong>Sistema Simplificado de Cadastro de Menu e SubMenu</strong></p>
<hr class="my-4">
<form action="cadmenu.php" method="post">
    <div class="form-group">
        <label for="nome">Título do menu</label>
		<input type="text" class="form-control" name="titulomenu" required>
	</div>
	<div class="form-group">
        <label for="nome">URL do menu</label>
		<input type="text" class="form-control" name="urlmenu">
	</div>
	<div class="form-group">
        <label for="nome">Sequência do menu</label>
		<input type="text" class="form-control" name="seqmenu">
	</div>
	<div class="form-group">
        <label for="nome">Este Menu será do tipo dropdown?</label>
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="submenu" id="exampleRadios1" value="1" checked>
		  <label class="form-check-label" for="exampleRadios1">
			Sim
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="submenu" id="exampleRadios2" value="0">
		  <label class="form-check-label" for="exampleRadios2">
			Não
		  </label>
		</div>
	</div> 
    <div class="form-group">
		<input type="submit" class="btn btn-success" value="Cadastrar Menu">
    </div>
</form>
<hr class="my-4">
<form action="cadsubmenu.php" method="post">
    <div class="form-group">
        <label for="nome">Título do submenu</label>
		<input type="text" class="form-control" name="titulosubmenu" required>
	</div>
	<div class="form-group">
        <label for="nome">URL do submenu</label>
		<input type="text" class="form-control" name="urlsubmenu" required>
	</div>
	<div class="form-group">
        <label for="nome">Sequência do submenu</label>
		<input type="text" class="form-control" name="seqsubmenu">
	</div>
	 <div class="form-group">
        <label for="codigo_menu">Menu do submenu</label>
            <select name="codigo_menu" id="codigo_menu" class="form-control">
                <option value=""> </option>
				<?php
					require_once("bd/crud.php");
					$tabela = "menu";
					$dados_menu = listaMenu($tabela);
					foreach($dados_menu as $dados) :
				?>
                    <option value="<?=$dados['codigo']?>"><?=utf8_encode($dados['titulo'])?></option>
					
				<?php
					endforeach
				?>
            </select>
    </div>
    <div class="form-group">
		<input type="submit" class="btn btn-success" value="Cadastrar Submenu">
    </div>
</form>         
 