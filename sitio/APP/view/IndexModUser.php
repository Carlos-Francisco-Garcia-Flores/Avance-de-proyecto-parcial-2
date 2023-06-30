<div>
<link rel="stylesheet" href="APP/view/Formularios.css" />
  
  <div class="containerForm1">
    
        <fieldset>
        <h2>Modificar usuario</h2>
        <form action="http://localhost/sitio/?C=UserController&M=ModUser" method="post">
        
<label>Ingresa el nombre del usuario</label>
<p>
<input type="text" name="user" id="user" placeholder="Usuario" />
<p>
<label>Ingresa la contraseña</label>
<p>
<input type="password" name="password" id="password" placeholder="Contraseña"/>
<p>
<label>Ingresa el nuevo nombre del usuario</label>
<p>
<input type="text" name="nuser" id="nuser" placeholder="Nuevo usuario" />
<p>
<label>Ingresa la nueva contraseña</label>
<p>
<input type="password" name="password" id="password" placeholder="Password"/>
<p>
<input type="submit" value="modificar" id="button" /><br />
</form>
  </fieldset>
    </div>
</div>