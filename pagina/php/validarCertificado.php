<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $cc = $_POST["cc"];
        $file = $_POST["cc"] . ".pdf";
        $path = "C:/xampp/htdocs/certificados/" . $file;
        if (file_exists($path)) {

            $temp = "C:/xampp/htdocs/pagina/temp/" . $file;
            $carpeta = "C:/xampp/htdocs/certificados/";

            copy($path, $temp);

            opendir($carpeta);


            echo "<div class=\"form-group\">
                            <div class=\"col-lg-12\" >
                                <center><a target=\"_blank\" href=\"http://certiretie.com/temp/$file\"><b> VER CERTIFICADO </b> </a></center>
                            </div> 
                        </div> ";
        } else {
            echo "<div class=\"alert alert-danger alert-dismissable\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                    <h4>	<i class=\"icon fa fa-ban\"></i> ERROR!</h4>
                    La cedula $cc no tiene certificado
                  </div>";
        }
        ?>
    </body>
</html>
