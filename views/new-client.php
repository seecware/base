<h1 class="mt-20 text-3xl font-bold text-center mb-6"><?= htmlspecialchars($title) ?></h1>

<form method="POST" action="/new-client" class="max-w-xl mx-auto bg-white p-6 rounded-2xl shadow-lg space-y-5">
    <div>
        <label for="first_name" class="block text-sm font-medium text-gray-700">Nombre</label>
        <input type="text" id="first_name" name="first_name" required
            class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
    </div>

    <div>
        <label for="last_name" class="block text-sm font-medium text-gray-700">Apellido</label>
        <input type="text" id="last_name" name="last_name" required
            class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
    </div>

    <div>
        <label for="phone" class="block text-sm font-medium text-gray-700">Número telefónico</label>
        <input type="tel" id="phone" name="phone" required pattern="[0-9]{10,15}"
            class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
            placeholder="Ej. 5512345678" />
    </div>

    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
        <input type="email" id="email" name="email" required
            class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
    </div>

    <div class="pt-4">
        <button type="submit"
            class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-xl hover:bg-blue-700 transition">
            Enviar
        </button>
    </div>
</form>
