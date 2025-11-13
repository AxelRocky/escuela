<?php include RUTA_RAIZ . 'app/vistas/encabezado.php'; ?>

<div class="w-full max-w-md bg-white p-8 rounded-xl shadow-2xl space-y-6">
    <h1 class="text-2xl font-bold text-gray-800 text-center mb-4">
        <?php echo $datos["subtitulo"]; ?>
    </h1>

    <!-- Mostrar errores si los hay -->
    <?php if (!empty($datos["errores"])): ?>
        <div class="bg-red-50 border border-red-300 text-red-700 p-4 rounded-lg">
            <ul class="list-disc pl-5 space-y-1">
                <?php foreach ($datos["errores"] as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Mostrar mensaje de éxito -->
    <?php if (!empty($datos["mensaje"])): ?>
        <div class="bg-green-50 border border-green-300 text-green-700 p-4 rounded-lg">
            <?php echo $datos["mensaje"]; ?>
        </div>
    <?php endif; ?>

    <div class="flex flex-col gap-3 mt-6">
        <a href="<?php echo RUTA; ?>login/olvido/" 
           class="text-indigo-600 hover:text-indigo-800 text-center underline">
           Intentar nuevamente
        </a>

        <a href="<?php echo RUTA; ?>" 
           class="w-full py-2 px-4 text-center rounded-lg bg-gray-200 hover:bg-gray-300 font-medium text-gray-800 transition">
           Volver al inicio
        </a>
    </div>
</div>

<?php include RUTA_RAIZ . 'app/vistas/piepagina.php'; ?>
