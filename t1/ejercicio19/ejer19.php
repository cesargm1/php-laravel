<!DOCTYPE html>
<html lang="es">
<!-- Acabar ejercicio 19 -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 19</title>
</head>

<body>
    <h1>formulario manejo de errores</h1>

    <!--  mandamos el formulario a si mismo con la instruccion echo $_SERVER['PHP_SELF']; por el metodo get   -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        </label>
        <section>
            <?php
            // si la variable existe y no esta vacia escribe el nombre que te pasen por el foemulario   

            if (isset($_GET['name']) && !empty($_GET['name'])) {
                $name = $_GET['name'];

                //    si no crea una varianle de errorName
                // utilizamos un print para concatenar  dentro de una etiqueta span los estilos css de la clase .error-message  con la variable de errorName

            } else {
                $ErrorName = "El Nombre esta vacio introduce uno";


                print "<p class='error-message'>" . $ErrorName . "</p>";

                // y por ultimo le decimos que no mande nada porque el string esta vacio
                $name = "";
            }
            ?>
            Escribe tu nombre
            <input type="text" name="name">
            </label>

            <style>
                /* crea unos estilos de error para poner el texto de error en color rojo con la clase .error-mensage */
                .error-message {
                    color: red;
                }
            </style>
        </section>


        <section>
            <?php
            if (isset($_GET['wizard']) && !empty($_GET['wizard'])) {
                $wizards = $_GET['wizard'];
            } else {
                $ErrorOption = "No selecionaste ninguna opcion por favor marca una";

                print "<p class='error-option'>" . $ErrorOption . "</p>";
            }
            ?>
            <p>seleciona una opcion:</p>

            <label>
                Melchor
                <input type="checkbox" name="wizard[]" value="melchor">
            </label>

            <label>
                Gaspar
                <input type="checkbox" name="wizard[]" value="gaspar">
            </label>

            <label>
                Baltasar
                <input type="checkbox" name="wizard[]" value="baltasar">
            </label>

            <style>
                .error-option {
                    color: red;
                }
            </style>

        </section>
        <br>
        <br>
        <section>
            <?php
            if (isset($_GET['card']) && !empty($_GET['card'])) {
                $card = $_GET['card'];
            } else {
                $ErrorCard = "Escribe algo en la carta";

                echo "<p class='error-card'>" . $ErrorCard . "</p>";
            }
            ?>
            <label>
                Escribe tu carta a los reyes magos:

                <br>
                <textarea name="card" id="card" rows="7" columns="7" wrap="hard"></textarea>

            </label>
        </section>
        <style>
            .error-card {
                color: red;
                font-weight: bold;
            }
        </style>
        <br>
        <button name="send">enviar</button>
    </form>
    <section class="recibe">
        <?php

        if (isset($_GET['send']) && !empty($_GET['wizard']) && !empty($_GET['name']) && !empty($_GET['card'])) {
            $name = $_GET['name'];
            $wizards = $_GET['wizard'];
            $card = $_GET['card'];


            print "<p>tu Nombre es $name</p>";


            foreach ($wizards as $value) {
                print_r("<p>Enviaste esta carta a estos reyes magos $value</p>");
            }

            print "<p>Aqui tienes la informacion de la carta para los reyes magos te manden un regolo $card</p>";
        } else {

            $ErrorSend = "Rellena todos los campos";

            print "<p class='error-option'>" . $ErrorSend . "</p>";
        }
        ?>
    </section>

    <style>
        .recibe {
            color: blue;
        }
    </style>
</body>

</html>

<?php

?>