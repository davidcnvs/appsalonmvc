<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Reestablece tu password escribiendo tu email a continuación</p>

<form action="/olvide" method="POST" class="formulario">
    <div class="campo"> 
        <label for="email">E-mail</label>
        <input 
        type="email" 
        id="email" 
        name="email" 
        placeholder="Tu email"
        />
    </div>

    <input type="submit" class="boton" value="Enviar Instrucciones">

</form>

<div class="acciones">
    <a href="/public/">¿Ya tienes una cuenta? Inicia sesión</a>
    <a href="/public/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
</div>