<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 19</title>
</head>
<body>
    <h1>formulario manejo de errores</h1>
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
        </label>
        <section>
        <?php
    // si la variable existe y no esta vacia escribe el nombre que te pasen por el foemulario   

    if(isset($_GET['name']) && !empty($_GET['name'])) {
    $name = $_GET['name'];
    
    // si no crea una varianle de errorName y crea unos estilos de error para poner el texto de error en color rojo  
    // por ultimo utilizamos un print para concatenar  dentro de una etiqueta span los estilos css de la clase .error-message  con la variable de errorName

    } else{
      $ErrorName = "El Nombre esta vacio introduce uno";
      
      print '<style>
    .error-message {
        color: red;
    }
</style>';

print "<p class='error-message'>" . $ErrorName ."</p>";

// y por ultimo le decimos que no mande nada porque el string esta vacio
      $name = ""; 
    }
    ?>
            Escribe tu nombre
        <input type="text" name="name">
        </label>
        </section>    


        <section>
            <?php
             if(isset($_GET['wizard']) && !empty($_GET['wizard'])) {
                $wizard = $_GET['wizard'];
            
            } else {
                $ErrorOption = "No selecionaste ninguna opcion por favor marca una";
        
                print '<style>
                .error-option {
                    color: red;
                }
            </style>';
            
            print "<p class='error-option'>" . $ErrorOption ."</p>";
        
            $wizard = "";
            }        
            ?> 
            <p>seleciona una opcion:</p> 

        <label>
            Melchor
            <input type="checkbox" name="wizard[]">
        </label>

        <label>
            Gaspar
            <input type="checkbox" name="wizard[]">
        </label>

        <label>
             Baltasar
            <input type="checkbox" name="wizard[]">
        </label>
        </section>
       

        <br>
        <br>

            <section>
            <?php
             if(isset($_GET['card']) && !empty($_GET['card'])) {
                $card = $_GET['card'];
            
            } else {
                $ErrorCard = "Escribe algo en la carta";
        
                print '<style>
                .error-card {
                    color: red;
                }
            </style>';
            
            print "<p class='error-card'>" . $ErrorCard ."</p>";
        
            $card = "";
            }        
            ?> 
            <label>
            Escribe tu carta a los reyes magos:
            <br>
                 <textarea name="card" id="card" rows="7" columns="7" wrap="hard">
                 </textarea>
             </label>
            </section>
       
        <br>
        <button name="send">enviar</button>
    </form>
</body>
</html>


<?php
$send = $_GET['send'];

?>