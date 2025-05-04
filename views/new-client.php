<!-- Logo SVG decorativo -->
<div class="flex justify-center mt-12">
  <div class="bg-blue-100 p-4 rounded-full shadow-md">
    <!-- Icono estilo "Agregar cliente" en SVG -->
    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
        d="M18 9v6m3-3h-6m-5 6a4 4 0 00-4-4H4a4 4 0 00-4 4v1h16v-1zM8 11a4 4 0 100-8 4 4 0 000 8z" />
    </svg>
  </div>
</div>

<!-- Título -->
<h1 class="text-2xl font-semibold text-center text-gray-800 mt-4 mb-8">
  <?= htmlspecialchars($title) ?>
</h1>

<!-- Formulario -->
<form method="POST" action="/new-client" class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-lg space-y-6">
  <div>
    <label for="first_name" class="block text-sm font-medium text-gray-700">Nombre</label>
    <input type="text" id="first_name" name="first_name" required
      class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 transition" />
  </div>

  <div>
    <label for="last_name" class="block text-sm font-medium text-gray-700">Apellido</label>
    <input type="text" id="last_name" name="last_name" required
      class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 transition" />
  </div>

  <div>
    <label for="phone" class="block text-sm font-medium text-gray-700">Teléfono</label>
    <input type="tel" id="phone" name="phone" required pattern="[0-9]{10,15}"
      placeholder="Ej. 5512345678"
      class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 transition" />
  </div>

  <div>
    <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
    <input type="email" id="email" name="email" required
      class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 transition" />
  </div>

  <div class="pt-4">
    <button type="submit"
      class="w-full bg-blue-600 text-white font-semibold py-2.5 rounded-md hover:bg-blue-700 transition">
      Guardar cliente
    </button>
  </div>
</form>
