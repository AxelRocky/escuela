<?php 
include RUTA_RAIZ . 'app/vistas/encabezado.php'; 
?>

<!-- Contenedor principal: centra el contenido vertical y horizontalmente -->
<div class="w-full min-h-screen bg-gray-100 flex flex-col items-center justify-center px-4">

    <!-- Título principal del sistema -->
    <h2 class="text-3xl font-extrabold text-gray-800 mb-8 text-center">
        <?php echo $datos["subtitulo"]; ?>
    </h2>

    <!-- Tarjeta del formulario de inicio de sesión -->
    <div class="w-full max-w-sm bg-white p-8 rounded-xl shadow-2xl space-y-6">
        <h1 class="text-2xl font-bold text-gray-900 text-center mb-4">
            Iniciar Sesión
        </h1>

        <form action="<?php echo RUTA; ?>login/autenticar" method="POST" class="space-y-5">
            <!-- Campo de Usuario -->
            <div>
                <label for="usuario" class="block text-sm font-medium text-gray-700 mb-1">Usuario</label>
                <input 
                    type="text" 
                    name="usuario" 
                    id="usuario" 
                    required 
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition"
                    placeholder="Tu correo o usuario"
                >
            </div>

            <!-- Campo de Contraseña -->
            <div>
                <label for="clave" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
                <input 
                    type="password" 
                    name="clave" 
                    id="clave" 
                    required 
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition"
                    placeholder="Tu contraseña secreta"
                >
            </div>

            <!-- Enlace: Olvidó su clave -->
            <div class="text-sm text-center">
                <a href="<?php echo RUTA; ?>login/olvido/" 
                   class="text-indigo-600 hover:text-indigo-800 font-medium underline">
                   ¿Olvidaste tu clave de acceso?
                </a>
            </div>

            <!-- Botón de Iniciar sesión -->
            <div>
                <button 
                    type="submit" 
                    class="w-full py-2 px-4 text-white font-semibold bg-indigo-600 hover:bg-indigo-700 rounded-lg shadow transition transform hover:scale-[1.02]">
                    Entrar
                </button>
            </div>
        </form>
    </div>
</div>

<?php 
include RUTA_RAIZ . 'app/vistas/piepagina.php'; 
?>
