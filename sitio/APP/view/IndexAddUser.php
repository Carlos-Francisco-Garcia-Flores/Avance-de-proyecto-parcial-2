<div>
<link rel="stylesheet" href="APP/view/Formularios.css" />
  
  <div class="containerForm1">
    
        <fieldset>
        <h2>Añadir usuario</h2>
        <form action="http://localhost/sitio/?C=UserController&M=AddUser" method="post">

<input type="text" name="name" id="name" placeholder="Nombre" />
<br/>
<input type="text" name="ap" id="ap" placeholder="Apellido paterno" />
<br/>
<input type="text" name="apm" id="apm" placeholder="Apellido materno" />
<br/>
<input type="text" name="user" id="user" placeholder="Usuario" />
<br/>
<input type="password" name="password" id="password" placeholder="Password"/>
<br/>
<input type="submit" value="Añadir usuario" id="button" /><br />
</form>
  </fieldset>
    </div>
</div>