<?php 
    if(isset($campos)) {
        foreach ($campos as $key => $campo) {
            if(!isset($_POST[$campo])) {
                // echo "AVISO! Campo [$campo] inválido! <br>";
                die("Campo [".$campo."] inválido!");
            } else {
                // Extrai as variáveis para o escopo global
                // Isso é muito louco
                $$campo=$_POST[$campo];
            }
        }
    }
?>