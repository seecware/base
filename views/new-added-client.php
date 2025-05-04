<h1 class="text-2xl md:text-3xl font-semibold text-center text-gray-800 mt-16 mb-4">
    <?= htmlspecialchars($title) ?>
</h1>

<div class="flex flex-col items-center justify-center mt-20 mb-10">
  <div class="bg-green-100 p-5 rounded-full shadow-lg">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14 text-green-600" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M5 13l4 4L19 7" />
    </svg>
  </div>
  <h1 class="text-2xl md:text-3xl font-semibold text-gray-800 mt-4">¡Cliente agregado con éxito!</h1>
  <p class="text-gray-500 mt-2">El cliente ha sido guardado en la base de datos correctamente.</p>
</div>

<div class="max-w-xl mx-auto bg-white p-6 rounded-2xl shadow-md border border-gray-200 relative">
    <!-- SVG decorativo -->
    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-green-100 border-4 border-white rounded-full shadow-md p-3">
        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 15l-3-3m0 0l3-3m-3 3h12"/>
        </svg>
    </div>

    <h2 class="text-lg font-semibold text-gray-700 mb-4 text-center mt-4">Detalles del cliente</h2>
    <ul class="space-y-2 text-gray-600 text-sm">
        <li>
            <span class="font-medium text-gray-800">Nombre:</span>
            <?= htmlspecialchars($client['first_name']) ?> <?= htmlspecialchars($client['last_name']) ?>
        </li>
        <li>
            <span class="font-medium text-gray-800">Teléfono:</span>
            <?= htmlspecialchars($client['phone']) ?>
        </li>
        <li>
            <span class="font-medium text-gray-800">Email:</span>
            <?= htmlspecialchars($client['email']) ?>
        </li>
    </ul>
</div>

<div class="text-center mt-10">
    <a href="/"
       class="inline-flex items-center px-5 py-2.5 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
        Volver a Home
    </a>
</div>
