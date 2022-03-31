<?php
require_once ("pessoa.class.php");

    $pessoa = new Pessoa();
    $pessoa ->setNome ("Mariane Batista de Souza");
    $pessoa ->setEndereco ("Av. Águia de Haia");
    $pessoa ->setBairro ("Jd. São Nicolau");
    $pessoa ->setCep ("080080XX");
    $pessoa ->setCidade ("São Paulo");
    $pessoa ->setEstado ("SP");
?>
<html>
    <head>
        <title>
            PHP
        </title>
    </head>   
    <body>
        <table style="border: solid 1px;">
            <tr>
                <td style="border: solid 1px; background-color: #f3f3f3"><?php echo $pessoa->getNome(); ?></td>
            </tr> 
            <tr>
                <td style="border: solid 1px; background-color: #cccccc"><?php echo $pessoa->getEndereco(); ?></td>
            </tr>
            <tr>
                <td style="border: solid 1px; background-color: #cccccc"><?php echo $pessoa->getBairro(); ?></td>
            </tr>
            <tr>
                <td style="border: solid 1px; background-color: #cccccc"><?php echo $pessoa->getCep(); ?></td>
            </tr>   
            <tr>
                <td style="border: solid 1px; background-color: #cccccc"><?php echo $pessoa->getCidade(); ?></td>
            </tr>
            <tr>
                <td style="border: solid 1px; background-color: #cccccc"><?php echo $pessoa->getEstado(); ?></td>
            </tr>
        </table>
    </body>
</html>