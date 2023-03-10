  <!DOCTYPE html>
<html>
    <head>
        <title>IMC</title>
        
    </head>
    <body>
        <form action="" method="POST">
            <table align="center">
                
                <tr>
                    <td>Peso :</td>
                    <td><input type="text" name="peso"></td>
                </tr>                
                <tr>
                    <td>Altura:</td>
                    <td><input type="text" name="altura"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="enviar" value="Enviar"></td>
                </tr>
            </table>
        </form>
        
    </body>
</html>

<?php

if (isset($_POST["enviar"]))
{    

    $peso = floatval($_POST["peso"]);
    $altura = floatval($_POST["altura"]);    
    $imc = (($altura*$altura)/$peso)*1000;
    $imc=number_format($imc,2,".");  
    
    if($imc<18.5){
        echo "<br>Abaixo do peso!";        
    }elseif (18.5>=24.9) {
        echo "<br>Peso saudável!";
    }elseif (25.0>=30.0) {
        echo "<br>Sobrepeso!";
    }elseif (30.1>=39.9) {
        echo "<br>Obeso!";
    }elseif ($imc>40) {
        echo "<br>Obeso Mórbido!";       
    }


    

   
}
?>