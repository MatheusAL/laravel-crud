<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Consulta Clientes</title>
</head>

<body class="bg-blue-100">

    <section class="bg-white m-8 border rounded border-black p-5">
        <div class="flex justify-between">
            <img src="/logo_upd8.png">
            <a class="flex self-center" href="{{route('homepage.index')}}"><h1 class="text-xl">Retornar ao menu</h1></a>
        </div>
        <div class="border rounded border-black p-3">
            <h3 class="text-purple-900 mb-5">Consulta Cliente</h3>
            <form method="POST" action="{{route('clients.get')}}">
            @csrf
            @method('post')
            <div class="grid gap-3 mb-6 md:grid-cols-4 sm:grid-cols-2">
                <div>
                    <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPF:</label>
                    <input type="text" name="cpf" name="cpf" id="cpf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="xxxxxxxxxxxx" >
                </div>
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome:</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                </div>
                <div>
                    <label for="birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de Nascimento:</label>
                    <input type="date" id="birth" name="birth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>  
                <div>
                    <h3 class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sexo</h3>
                    <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="horizontal-list-radio-license" id="Masculino" type="radio" value="Masculino" name="sex" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Masculino </label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="horizontal-list-radio-id" type="radio" id="Feminino" value="Feminino" name="sex" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="horizontal-list-radio-id" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Feminino</label>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-span-2">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Endereço</label>
                    <input type="text" id="address" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="state" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado</label>
                    <select id="state" name="state" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                        <option selected>Selecione</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cidade</label>
                    <select id="city" name="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                        <option selected>Selecione</option>
                    </select>
                </div> 
            </div>
            <div class="flex justify-end">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full mx-2 sm:w-auto px-5 py-2.5 text-center">Pesquisar</button>
                <button type="reset" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full mx-2 sm:w-auto px-5 py-2.5 text-center">Limpar</button>
            </div>
            </form>
        </div>
        @isset($clients)
        <div class="border rounded border-black p-3 mt-8">        
            
            <div class="results-header">
                <h3 class="text-purple-900 mb-5">Resultados da pesquisa</h3>
                @isset($success)
                    <h3 class="text-green-600">{{ $success }}</h3>
                @endisset
            </div>
            <table class="table-auto w-full rounded">
                <thead class="h-10 border border-black bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                    <th class="border border-black"></th>
                    <th class="border border-black"></th>
                    <th class="border border-black">Cliente</th>
                    <th class="border border-black">CPF</th>
                    <th class="border border-black">Data Nasc.</th>
                    <th class="border border-black">Estado</th>
                    <th class="border border-black">Cidade</th>
                    <th class="border border-black">Sexo</th>
                    </tr>
                </thead>
                <tbody class="border border-black text-center">
                    @foreach ($clients as $client)
                        <tr class="py-2">
                            <td class="border border-black"><button class="bg-green-800 hover:bg-green-900 p-2.5 text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-9/12">Editar</button></td>
                            <td class="border border-black ">
                                <form method="POST" action="{{route('clients.delete', ['client' => $client->id])}}" >
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="bg-red-800  hover:bg-red-900 p-2.5 text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-9/12">
                                        Excluir
                                    </button>
                                </form>
                            </td>
                            <td class="border border-black">{{ $client->name }}</td>
                            <td class="border border-black">{{ $client->cpf }}</td>
                            <td class="border border-black">{{ $client->birth }}</td>
                            <td class="border border-black">{{ $client->state }}</td>
                            <td class="border border-black">{{ $client->city }}</td>
                            <td class="border border-black">{{ $client->sex }}</td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
        @endisset
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