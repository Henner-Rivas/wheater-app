<aside id="logo-sidebar"
    class="fixed top-0  z-[1200] left-0  w-64 h-screen pt-20 transition-transform -translate-x-full bg-white shadow-lg  sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white  ">
        <div class="space-y-2 z-[1200] flex flex-col justify-between h-full">

            {{-- <form action="{{route('pages.index')}}" method="GET" class="d-flex">
                <input type="text" id="search-navbar" autocomplete="off" name="search"
                    class="block w-full p-2 pl-10 text-sm text-gray-900 border outline-none border-gray-300 rounded-lg bg-gray-50 focus:ring-light_blue focus:border-light_blue"
                    placeholder="Buscar..." value="{{request('search')}}">
            </form>
            --}}

            <ul class="gap-3 flex flex-col">

                @foreach ($ciudades as $ciudad)

                <li class="rounded-lg relative px-2 py-4 text-white flex justify-between items-center " style="@if($ciudad['temperatura'] <= 10)
                  background:#6b9dff;
                 @elseif ($ciudad['temperatura']> 10 &&
             $ciudad['temperatura'] <=25)
             background:#ff659d;
             @else
             background:#ffb764;
              @endif   ">
                    <div>


                        <div class=" text-white ">
                            <span class=" font-medium"> Hum:</span>
                            <span>| </span>
                            <span class="font-medium">{{$ciudad['humedad']}}% </span>

                        </div>
                        <div class="text-white ">
                            <span class="font-medium"> Wind:</span>
                            <span>| </span>
                            <span class="font-medium">{{$ciudad['wind']}}% </span>

                        </div>

                        <img src="
                        @if($ciudad['temperatura'] <= 10)
                         {{Vite::asset('resources/images/cloud.png') }} @elseif ($ciudad['temperatura']> 10 &&
                        $ciudad['temperatura'] <=25) {{ Vite::asset('resources/images/rainy.png') }} @else{{
                            Vite::asset(" resources/images/dom.png") }} @endif"
                            class=" absolute w-6 top-[30%] left-[50%]" alt="">
                    </div>



                    <div class="text-end">
                        <div class="text-white flex gap-1  text-end w-full">
                            <svg class="text-white w-3 " style="fill: #fff" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512">
                                <path
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                            </svg>
                            <span>{{$ciudad['ciudad']}} </span>
                        </div>
                        <span class=" text-xl font-medium text-end "> {{$ciudad['temperatura']}}°</span>

                    </div>

                </li>
                @endforeach
            </ul>



            <div class="bottom-0 text-end">
                <h2 class="text-2xl text-light_blue font-medium">{{$hora_actual}}</h2>
                <span class="font-medium">{{$diaSemana}}, {{$fechaActual}}</span>
                <h3 class="text-1xl text-light_blue font-medium">{{$saludo}}</h2>
            </div>
        </div>
    </div>
</aside>