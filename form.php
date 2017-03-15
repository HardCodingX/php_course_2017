<html>
  <head>
    <title>Registra tu nombre</title>
  </head>
  <body>
    <?php if (!array_key_exists('name', $_COOKIE)) { ?>
      <form action="cookies.php" method="post">
        <label for="myName">Escribe tu nombre</label>
        <input type="text" id="myName" name="myName" />
        <input type="submit" value="Guardar" />
      </form>
    <?php
      } else {
        echo 'Tu nombre es: '.$_COOKIE['name'];
      }
    ?>
  </body>

</html>
