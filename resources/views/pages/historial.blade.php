<x-app-layout>




    <div class="p-4 sm:ml-64 mt-[50px]">
        <h1 class="text-2xl font-medium text-center my-" 3>Historial de consulta en sitio web</h1>


        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 ">
                <thead class="text-xs text-gray-900 uppercase dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Ciudad
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Humedad
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha consulta
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white ">
                        @foreach ($historial as $history)
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            {{$history->ciudad}}

                        </th>
                        <td class="px-6 py-4">
                            {{$history->humedad}}%

                        </td>
                        <td class="px-6 py-4">
                            {{$history->fecha_consulta}}

                        </td>

                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>


    </div>

</x-app-layout>