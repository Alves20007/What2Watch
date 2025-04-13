<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg text-center w-96">
        <img src="{{ Auth::user()->profile_photo ?? 'https://via.placeholder.com/150' }}" class="w-24 h-24 mx-auto rounded-full">
        <h1 class="text-2xl font-bold mt-4">{{ Auth::user()->name }}</h1>
        <p class="text-gray-500">{{ Auth::user()->email }}</p>
        <p class="text-gray-700 mt-2">{{ Auth::user()->bio ?? 'Sem biografia ainda...' }}</p>
        <a href="/editar-perfil" class="mt-4 block text-blue-500 hover:underline">Editar Perfil</a>
    </div>
</body>
</html>
