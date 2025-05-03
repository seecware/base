<main class="max-w-6xl mx-auto px-4 py-16 grid grid-cols-1 md:grid-cols-2 gap-10">

  <!-- Información de contacto -->
  <div class="bg-white shadow-lg rounded-2xl p-8 space-y-6">
  <div class="flex justify-center items-center mb-6">
  <div class="relative w-64 h-24">

    <!-- Buzón -->
    <div class="absolute left-0 top-1/2 -translate-y-1/2 flex flex-col items-center">
      <div class="w-12 h-12 bg-blue-500 rounded-lg shadow-lg flex items-center justify-center text-white text-sm font-bold">
        📫
      </div>
      <span class="text-sm mt-1">Cliente</span>
    </div>

    <!-- Servidor -->
    <div class="absolute right-0 top-1/2 -translate-y-1/2 flex flex-col items-center">
      <div class="w-12 h-12 bg-gray-700 rounded-lg shadow-lg flex items-center justify-center text-white text-sm font-bold">
        🖥️
      </div>
      <span class="text-sm mt-1">Servidor</span>
    </div>

    <!-- Carta animada -->
    <div class="absolute left-10 top-1/2 -translate-y-1/2 animate-send-letter">
      <div class="w-8 h-6 bg-white border border-gray-300 rounded-sm shadow-sm flex items-center justify-center text-xs">✉️</div>
    </div>

  </div>

  <style>
    @keyframes send-letter {
      0% {
        transform: translateX(0) translateY(-50%);
        opacity: 0;
      }
      20% {
        opacity: 1;
      }
      100% {
        transform: translateX(180px) translateY(-50%);
        opacity: 0;
      }
    }

    .animate-send-letter {
      animation: send-letter 2s ease-in-out infinite;
    }
  </style>
</div>

    <h2 class="text-2xl font-bold text-gray-800">Contáctanos</h2>
    <p class="text-gray-600">Estamos disponibles para resolver tus dudas o recibir tus comentarios.</p>

    <div class="space-y-4">
      <div class="flex items-center space-x-4">
        <!-- Teléfono icono -->
        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 16.92V21a2 2 0 0 1-2.18 2 19.72 19.72 0 0 1-8.63-3.11A19.5 19.5 0 0 1 3.11 10.8 19.72 19.72 0 0 1 0 2.18 2 2 0 0 1 2.09 0h4.91a2 2 0 0 1 2 1.72c.14 1.27.44 2.51.9 3.7a2 2 0 0 1-.45 2.11L7.91 9.09a16 16 0 0 0 6 6l1.56-1.56a2 2 0 0 1 2.11-.45c1.19.46 2.43.76 3.7.9A2 2 0 0 1 22 16.92z" />
        </svg>
        <span class="text-gray-700 font-medium">+1 234 567 890</span>
      </div>

      <div class="flex items-center space-x-4">
        <!-- Email icono -->
        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path d="M4 4h16v16H4z" />
          <polyline points="22,6 12,13 2,6" />
        </svg>
        <span class="text-gray-700 font-medium">contacto@ejemplo.com</span>
      </div>

      <div class="flex items-start space-x-4">
        <!-- Dirección icono -->
        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 10c0 6-9 13-9 13S3 16 3 10a9 9 0 0 1 18 0z" />
          <circle cx="12" cy="10" r="3" />
        </svg>
        <span class="text-gray-700 font-medium">Calle Ficticia 123, Ciudad, País</span>
      </div>
    </div>
  </div>

  <!-- Formulario de contacto -->
  <div class="bg-white shadow-lg rounded-2xl p-8 space-y-6">
    <h2 class="text-2xl font-bold text-gray-800">Envíanos un mensaje</h2>
    <form action="#" method="POST" class="space-y-5">
      <div>
        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
        <input type="text" id="nombre" name="nombre" required
          class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">
      </div>
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
        <input type="email" id="email" name="email" required
          class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">
      </div>
      <div>
        <label for="mensaje" class="block text-sm font-medium text-gray-700">Mensaje</label>
        <textarea id="mensaje" name="mensaje" rows="5" required
          class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200"></textarea>
      </div>
      <button type="submit"
        class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition w-full md:w-auto">
        Enviar mensaje
      </button>
    </form>
  </div>

</main>
