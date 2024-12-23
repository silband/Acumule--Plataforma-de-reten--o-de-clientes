<?php
//funções para uso em um ou mais casos


function exemploRetornoClassificacao($p_conexao){

    $ret = null;
    $sql = "
        SELECT * FROM classificacao ORDER BY CLASSE
    ";
    $result = mysqli_query($p_conexao, $sql) or die (mysqli_error($p_conexao));

    if (mysqli_num_rows($result) > 0):
        $row = mysqli_fetch_array($result);
        $ret = $row;
    endif;

    return $ret;

}