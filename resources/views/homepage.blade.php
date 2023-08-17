<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>UPD8</title>
</head>
<body class="bg-blue-100">

    <section class="bg-white m-8 border rounded border-black p-5 w-3/5 mx-auto h-max">
        <div class="flex justify-center">
            <img src="logo_upd8.png">
        </div>
        <div class="flex flex-col content-center">

            <h1 class="text-center font-bold text-3xl my-8">Cadastro de Clientes</h1>
            <button onclick="window.location.href='{{route('clients.index')}}';"  class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full m-2 sm:w-auto px-5 py-3 text-center">Cadastrar Clientes</button>
            <button onclick="window.location.href='{{route('clients.search')}}';"class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full m-2 mb-8 sm:w-auto px-5 py-3 text-center">Consultar Clientes</button>
            
        </div>
    </section>
</body>
</html>