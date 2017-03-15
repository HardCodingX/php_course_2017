<html>
  <head>
    <title>Registra tu nombre</title>
  </head>
  <body>
    <form action="" method="get">
      <input type="text"  name="myName" placeholder="Name" />
      <input type="checkbox"  name="myCheckbox" placeholder="Check" />
      <input type="radio"  name="myRadio" placeholder="Radio" />
      <input type="email"  name="myEmail" placeholder="Email" />
      <input type="date"  name="myDate" placeholder=Date"" />
      <input type="number"  name="myNum" placeholder="Number" />
      <select name="list">
        <option value="1">Enero</option>
        <option value="2">Febrero</option>
        <option value="3">Marzo</option>
        <option value="4">Abril</option>
        <option value="5">Mayo</option>
        <option value="6">junio</option>
        <option value="7">Julio</option>
        <option value="8">Agosot</option>
        <option value="9">Septiembre</option>
        <option value="10">Octubre</option>
        <option value="11">Noviembre</option>
        <option value="12">Diciembre</option>
      </select>
      <input type="password"  name="myPass" placeholder="Password" />
      <input type="color"  name="myColor" placeholder="Color" />
      <input type="submit" value="Enviar" />
    </form>
  </body>

</html>

<?php
  print_r($_GET);
?>
