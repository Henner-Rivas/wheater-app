<nav class="fixed top-0 z-[1300]  w-full md:w-64   bg-white  shadow-sm">
    <div class="px-1 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between w-full">
            <div class="flex justify-between w-full items-center gap-2">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>

                <div class="flex  " target="_blank">
                    <a href="https://henner-rivas.vercel.app/">
                        <img src="{{ Vite::asset('resources/images/logo.png') }}" class=" h-8 mr-3" alt="Henner logo" />
                    </a>
                    <a href="/"> <span
                            class="self-center text-[16px] font-semibold sm:text-[18px] whitespace-nowrap ">Wheater
                            app
                    </a>
                    </span>
                </div>


                <a href="{{route('pages.historial')}}" class="text-sm  text-right w-f
                "> Ver historial</a>

            </div>
        </div>
</nav>