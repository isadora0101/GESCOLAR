<?php
/** 
 *  O arquivo conexão .php será usado por todas as páginas que necessitem
 *  realizar uma conexão com o banco de dados. Para não termos que digitar
 *  os dados de acesso ao banco em todas as páginas, centralizamos eles
 *  em um único arquivo e utilizamos o comando include, quando for necessario.
 */
 
 /**
* O laço try { } catch serve para tentar executar um código. Caso algum erro 
* ocorra ele é capturado no catch, onde uma execução é disparada e podemos
* pegar a mensagem de erro com o método getMessage(), e customizar a mensagem
* de erro para o usuário.
*/
try {
    $usuario = "root"; // usuário do MySQL.
    $senha = ""; // senha do MySQL.
    $host = "localhost"; // host onde o servidor MySQL está sendo executado.
    $bd = "gescolar"; // nome do banco de dados.
    
    //Aqui vamos definir configurações para o tratamento de erros e acertos.
    $config = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    
    // Aqui criamos uma variável que abriga o objeto PDO, a conexão com o MySQL.
    $conexao = new PDO("mysql:host=" . $host . ";dbname=" . $bd, $usuario, $senha, $config);
    
    } catch(Exception $e) {
        echo $e->getMessage();
    }
    