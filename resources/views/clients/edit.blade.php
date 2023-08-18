<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Editar Cliente</title>
</head>
<body class="bg-blue-100">
    
    <section class="bg-white m-8 border rounded-lg border-black p-5">
        <div class="flex justify-between">
            <img src="/logo_upd8.png">
            <a class="flex self-center" href="{{route('homepage.index')}}"><h1 class="text-xl">Retornar ao menu</h1></a>
        </div>
        <div class="border rounded-lg border-black p-3">
            <h3 class="text-purple-900">Edição de Cliente</h3>
            @isset($client)
                <form method="POST" action="{{route('clients.update', ['client' => $client])}}">
                @csrf
                @method('put')
                <div class="grid gap-3 mb-6 md:gap-2 md:grid-cols-4 sm:grid-cols-2">
                    <div>
                        <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPF:</label>
                        <input type="text" name="cpf" name="cpf" id="cpf" value="{{$client->cpf}}" class="bg-gray-50 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="xxxxxxxxxxxx">
                    </div>
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome:</label>
                        <input type="text" id="name" name="name" value="{{$client->name}}" class="bg-gray-50 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                    </div>
                    <div>
                        <label for="birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de Nascimento:</label>
                        <input type="date" id="birth" name="birth" value="{{$client->birth}}" class="bg-gray-50 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>  
                    <div>
                        <h3 class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sexo</h3>
                        <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-800 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <li class="w-full border-b border-gray-800 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center pl-3">
                                    <input id="horizontal-list-radio-license" id="Masculino" type="radio" value="M" name="sex" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" @if($client->sex == 'M') checked @endif>
                                    <label for="horizontal-list-radio-license" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Masculino </label>
                                </div>
                            </li>
                            <li class="w-full border-gray-800 dark:border-gray-600">
                                <div class="flex items-center pl-3">
                                    <input id="horizontal-list-radio-id" type="radio" id="Feminino" value="F" name="sex" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" @if($client->sex == 'F') checked @endif>
                                    <label for="horizontal-list-radio-id" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Feminino</label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-span-2">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Endereço</label>
                        <input type="text" id="address" name="address" value="{{$client->address}}" class="bg-gray-50 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="state" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado</label>
                        <select id="state" name="state" class="bg-gray-50 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                        @foreach($states as $abbreviation => $name)
                            <option value="{{ $abbreviation }}" @if($client->state == $abbreviation) selected @endif>{{ $name }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cidade</label>
                        <select id="city" name="city" class="bg-gray-50 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                            
                            <option value="{{ $client->city }}" selected>{{ $client->city }}</option>
                        </select>
                    </div> 
                </div>
                <div class="flex justify-end">
                    @if(session()->has('success'))
                        <h3 class="text-green-600">{{ session('success') }}</h3>
                    @endif
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full mx-2 sm:w-auto px-5 py-2.5 text-center">Salvar</button>
                </div>
                </form>
            @endisset
            
        </div>
    </section>
</body>
<script>
    document.getElementById('state').addEventListener('change', function() {
        var selectedState = this.value;
        
        fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${selectedState}/municipios/`)
            .then(response => response.json())
            .then(data => {
                var citySelect = document.getElementById('city');
                citySelect.innerHTML = '';
                data.forEach(city => {
                    var option = document.createElement('option');
                    option.value = city.nome;
                    option.textContent = city.nome;
                    citySelect.appendChild(option);
                });
            });
    });
</script>
</html>