<?php

$digitos = $CPF;
$cpf = $CPF;
$soma_digitos = 0;
$posicoes = 10;

if (!function_exists('calc_digitos_posicoes')) {
    function calc_digitos_posicoes($digitos, $posicoes = 10, $soma_digitos = 0)
    {
        for ($i = 0; $i < strlen($digitos); $i++) {
            $soma_digitos = $soma_digitos + ($digitos[$i] * $posicoes);
            $posicoes--;
        }
        $soma_digitos = $soma_digitos % 11;

        if ($soma_digitos < 2) {
            $soma_digitos = 0;
        } else {
            $soma_digitos = 11 - $soma_digitos;
        }
        $cpf = $digitos . $soma_digitos;
        return $cpf;
    }
}

if (!$cpf) {
    echo "<script> 
					window.alert('CPF inválido...');
                    window.location.href='Requerimento.php';
			</script>";
}

$cpf = preg_replace('/[^0-9]/is', '', $cpf);

if (strlen($cpf) != 11) {
    echo "<script> 
					window.alert('CPF inválido...');
                    window.location.href='Requerimento.php';
			</script>";
}

$digitos = substr($cpf, 0, 9);

$novo_cpf = calc_digitos_posicoes($digitos);

$novo_cpf = calc_digitos_posicoes($novo_cpf, 11);

if ($novo_cpf === $cpf) {
} else {
    echo "<script> 
					window.alert('CPF inválido...');
                    window.location.href='Requerimento.php';
			</script>";
}