<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <h2>¡Añade una nueva pregunta a nuestro formulario!</h2><br>
    <div>
      <form>
      Inserta el correo electronico: <input type="text" id="correo"><br><br>
      Cual es el enunciado de la pregunta? <input type="text" id="enunciado"><br><br>
      Respuesta correcta: <input type="text" id="correcta"><br><br>
      Respuesta incorrecta 1: <input type="text" id="inc1"><br><br>
      Respuesta incorrecta 2: <input type="text" id="inc2"><br><br>
      Respuesta incorrecta 3: <input type="text" id="inc3"><br><br>
      Complejidad de la pregunta: 
      <div id="botones">
                <br>
                <input type="radio" id="facil" name="complej" value="Suma" checked="checked">
                <label for="facil">Fácil</label>
                <input type="radio" id="medio" name="complej" value="Resta">
                <label for="medio">Medio</label>
                <input type="radio" id="dificil" name="complej" value="Mul">
                <label for="dificil">Dificil</label> <br><br>
      </div>
      Inserte el tema: <input type="text" id="tema"><br><br>
      <div id="botones">
      <button type="button" onclick="funcion();" class="boton-3d">Guardar las preguntas</button>
      <input type="reset" value="¡Borrar!"class="boton-3d">
    </div>
      </form>
    </div>

  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
