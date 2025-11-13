<?php include RUTA_RAIZ . 'app/vistas/encabezado.php'; ?>

<!-- Contenedor principal -->
<div class="w-full min-h-screen bg-gray-100 flex flex-col items-center justify-center px-4">

    <!-- Título principal -->
    <h2 class="text-3xl font-extrabold text-gray-800 mb-8 text-center">
        Recuperar acceso
    </h2>

    <!-- Tarjeta del formulario -->
    <div class="w-full max-w-sm bg-white p-8 rounded-xl shadow-2xl space-y-6">
        <h1 class="text-xl font-semibold text-gray-900 text-center mb-4">
            Olvidé mi contraseña
        </h1>

        <form action="<?php echo RUTA; ?>login/olvido/" method="POST" class="space-y-5">

            <!-- Campo de correo electrónico -->
            <div>
                <label for="usuario" class="block text-sm font-medium text-gray-700 mb-1">
                    Correo electrónico
                </label>
                <input 
                    type="email" 
                    name="usuario" 
                    id="usuario" 
                    required 
                    placeholder="Escribe tu correo electrónico"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition"
                >
            </div>

            <!-- Botón de enviar -->
            <div>
                <button 
                    type="submit" 
                    class="w-full py-2 px-4 text-white font-semibold bg-indigo-600 hover:bg-indigo-700 rounded-lg shadow transition transform hover:scale-[1.02]">
                    Enviar correo de recuperación
                </button>
            </div>

            <!-- Enlace de regresar -->
            <div class="text-center mt-3">
                <a href="<?php echo RUTA; ?>" 
                   class="text-indigo-600 hover:text-indigo-800 font-medium underline">
                   ← Volver al inicio
                </a>
            </div>
        </form>
    </div>
</div>

<?php include RUTA_RAIZ . 'app/vistas/piepagina.php'; ?>
