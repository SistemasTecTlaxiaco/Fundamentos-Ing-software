<body>
    <p style="text-align: center;">REGISTRO DE DATOS</p>
</body>
<body style="background-color:#00ffeaa4;">
</body>

<form action="/my-handling-form-page" method="post">
</form>
<form action="/my-handling-form-page" method="post">
 <ul>
  <li>
    <label for="Nombre completo ">Nombre completo :</label>
    <input type="text" id="name" name="user_name">
  </li>
  <li>
    <label for="Descripcion">Descripcion:</label>
    <input type="text" id="name" name="user_name">
  </li>
  <li>
    <label for="Direccion ">Direccion:</label>
    <input type="text" id="name" name="user_name">
  </li>
  <li>
    <label for="E-mail">Correo electrónico:</label>
    <input type="email" id="mail" name="user_mail">
  </li>
  <li>
    <label for="Telefono">Telefono:</label>
    <input type="text" id="name" name="user_name">
  </li>
  <li>
    <label for="Tipo de servicio ">Tipo de servicio:</label>
    <input type="text" id="name" name="user_name">
  </li>
  <li>
    <label for="Forma de pago">Forma de pago:</label>
    <input type="text" id="name" name="user_name">
  </li>
  
</ul>
</form>

<li class="button">
  <button type="Registre sus datos">Registre sus datos </button>
</li>
<li class="button">
    <button type="Salir">Salir</button>
  </li>

<style>
form {
  /* Centrar el formulario en la página */
  margin: 0 auto;
  width: 400px;
  /* Esquema del formulario */
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

form li + li {
  margin-top: 1em;
}
label {
  /* Tamaño y alineación uniforme */
  display: inline-block;
  width: 90px;
  text-align: right;
}

input,
textarea {
  /* Para asegurarse de que todos los campos de texto tienen la misma configuración de letra
     Por defecto, las áreas de texto tienen un tipo de letra monoespaciada */
  font: 1em sans-serif;

  /* Tamaño uniforme del campo de texto */
  width: 300px;
  box-sizing: border-box;

  /* Hacer coincidir los bordes del campo del formulario */
  border: 1px solid #999;
}

input:focus,
textarea:focus {
  /* Destacado adicional para elementos que tienen el cursor */
  border-color: #000;
}

textarea {
  /* Alinear los campos de texto multilínea con sus etiquetas */
  vertical-align: top;

  /* Proporcionar espacio para escribir texto */
  height: 5em;
}

.button {
  /* Alinear los botones con los campos de texto */
  padding-left: 90px; /* mismo tamaño que los elementos de la etiqueta */
}

button {
  /* Este margen adicional representa aproximadamente el mismo espacio que el espacio
     entre las etiquetas y sus campos de texto */
  margin-left: .5em;
}
</style>