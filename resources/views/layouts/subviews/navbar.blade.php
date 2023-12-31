<div class="flex px-4 mx-auto sm:px-6 w-full items-center justify-center shadow-xl">
        <nav class=" w-11/12 flex py-8 items-center justify-center" aria-label="Global">
            <div class="flex items-center flex-1  md:inset-y-0 md:left-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="#"><span class="sr-only">Company Name</span>
                        <img class="w-auto h-8 sm:h-10" src="https://www.svgrepo.com/show/448244/pack.svg" loading="lazy" width="202" height="40">
                    </a>
                    <div class="flex items-center -mr-2 md:hidden">
                        <button class="inline-flex items-center justify-center p-2 text-gray-400 bg-gray-50 rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-50"  type="button" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex list-none  w-8/12 mr-48 items-center justify-around">
                <li>
                    <a href="#" class="text-base font-normal text-gray-500 list-none hover:text-gray-900"
                        target="">Bill</a>
                </li>
                <li>
                    <a href="#" class="text-base font-normal text-gray-500 list-none hover:text-gray-900"
                        target="">Complaint
                    </a>
                </li>
                <li>
                    <a href="#" class="text-base font-normal text-gray-500 list-none hover:text-gray-900"
                        target="_blank">History
                    </a>
                </li>
            </div>

            {{-- @if (Route::has('login'))
                <div>{{Auth::user()->name}}</div>
            @else --}}
            <div  class="hidden  md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                <div class="inline-flex shadow">
                    <a href="{{ route('login') }}"
                        class="inline-flex items-center px-4 py-2 text-base bg-orange-500  text-white  border border-orange-500 cursor-pointer font-base hover:bg-white hover:text-orange-600">
                        Login
                    </a>
                </div>
            </div>
            {{-- @endif --}}
        </nav>
</div>
