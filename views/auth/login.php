<h1 class="nombre-pagina">login</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<form action="/" method="POST" class="formulario">
    <div class="campo">
        <label for="email">Email</label>
        <input 
        type="email"
        id="email"
        placeholder="Tu email"
        name="email"
        >
    </div>
    <div class="campo">
        <label for="email">Password</label>
        <input 
        type="password"
        id="password"
        placeholder="Tu password"
        name="password"
        >
    </div>

    <input type="submit" class="boton" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a href="/public/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
    <a href="/public/olvide">¿Olvidaste tu password?</a>
</div>