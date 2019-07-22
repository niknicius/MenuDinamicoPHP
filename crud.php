<?php
require_once("conecta_banco.php");

function selecionaMenu($tabela){
    $conexao = conectabd();
    $rs = $conexao->prepare("SELECT * FROM $tabela ORDER BY ordem");
    if($rs->execute()){
		
		return $rs->fetchAll(PDO::FETCH_ASSOC);		
    }    
		return 0;
}

function selecionaSubmenu($tabela,$codigo){
    $conexao = conectabd();
    $rs = $conexao->prepare("SELECT * FROM $tabela WHERE codigo_menu = ? ORDER BY ordem");
	$rs->bindValue(1, $codigo);
    if($rs->execute()){
		return $rs->fetchAll(PDO::FETCH_ASSOC);		
    }    
		return 0;
}

function insereDados($tabela,$dados){
    
    $conexao = conectabd();
    
    //separa cada campo do array por uma vírgula
    $campos = implode(', ', array_keys($dados));
    //separa cada campo do array por uma vírgula e também substitui os campos do array por ?
    $valores = implode(', ', preg_replace("/^.*/", "?", array_values($dados)));
   
    $sql = "INSERT INTO $tabela (" . $campos . ")VALUES(" . $valores . ")";   
        
    $stmt = $conexao->prepare($sql);
    $cont = 1;
    
    foreach ($dados as $valor) {
     $stmt->bindValue($cont, $valor);
     $cont++;
    }
    if($stmt->execute()) {
	 return $stmt->rowCount();	 
    } 
     return 0;	
}

function listaMenu($tabela){
    $conexao = conectabd();
    $rs = $conexao->prepare("SELECT * FROM $tabela WHERE dropdown = 1 ORDER BY titulo");
    if($rs->execute()){
		
		return $rs->fetchAll(PDO::FETCH_ASSOC);		
    }    
		return 0;
}

?>






