<?php
 $categorias = [];
 $categorias[] = 'infantil'; 
 $categorias[] = 'jovens'; 
 $categorias[] = 'adultos'; 
 $categorias[] = 'idosos'; 

 $nome = 'Ana';
 $idade = 15;

//print_r();
//var_dump();

if($idade >= 6 && $idade <= 12){
    
    for($i = 0; $i <= count($categorias); $i++){
	    if($categorias[$i] == 'infantil'){
	        echo 'O nadador '. $nome. ' tem ' . $idade. ' anos, estando assim na categoria infantil';
        }
    }

} else if($idade >= 13 && $idade <= 18) {

    for($i = 0; $i <= count($categorias); $i++){
        
	    if($categorias[$i] == 'jovens'){
	        echo 'O nadador '. $nome. ' tem ' . $idade. ' anos, estando assim na categoria'. $categorias[$i];
        }
    }

}else if($idade >= 18 && $idade <= 50){
    for($i = 0; $i <= count($categorias); $i++){
	    if($categorias[$i] == 'adultos'){
	        echo 'O nadador '. $nome. ' tem ' . $idade. ' anos, estando assim na categoria adultos';
        }
    }
    
}else{
    echo 'adultos';
}
?>
