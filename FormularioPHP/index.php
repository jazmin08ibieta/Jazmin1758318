<?php
include "header.php"
?>
  <!-- Main -->
  <main>
    <div class="row">
        <form class="container col s12" action="form.php" method="post">
          <div class=" container">
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" name="txtnombre" type="text" class="validate">
              <label for="icon_prefix">First Name</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">edad</i>
              <input id="icon_prefix" name="txtedad" type="age" class="validate">
              <label for="icon_prefix">Age</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">correo</i>
              <input id="icon_prefix" name="txtcorreo" type="email" class="validate">
              <label for="icon_prefix">Email</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">password</i>
              <input id="icon_telephone" type="password" name="txtcontraseña" class="validate">
              <label for="icon_telephone">Paswword</label>
            </div>
            <button>Enviar</button>
          </div>

          
        </form>
    </div>
  </main>
  <!-- Main -->
<?php
include "footer.php";
?>