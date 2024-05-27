<nav class="bg-white border-gray-200 px-4 sm:px-9 lg:px-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-2">
        <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse w-auto">
            {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flo/wbite Logo" /> --}}
            <x-application-logo class=" w-20 lg:w-24 fill-current text-gray-500 " />
            <x-wrappers.page-title title="Sandhi Brothers" />
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full lg:w-auto lg:block" id="navbar-dropdown">
            <ul class="flex flex-col font-medium p-4 lg:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 lg:bg-white">
                <li>
                    <a href="{{ url('/') }}" class="block py-2 px-3 lg:text-custom-black bg-custom-blue rounded lg:bg-transparent lg:p-0 hover:font-bold" aria-current="page">{{ __('lang.home') }}</a>
                </li>
                <li class="relative">
                    <button id="" data-dropdown-toggle="about-us" class="flex items-center justify-between w-full py-2 px-3 text-custom-black rounded hover:font-bold hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-custom-blue lg:p-0 lg:w-auto">
                        {{ __('lang.about')}}
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <div id="about-us" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-full lg:w-36">
                        <ul class="text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                            <li>
                            <a href="{{ route('company-profile') }}" class="block px-4 py-2 hover:bg-gray-100 hover:font-bold">{{ __('lang.company_profile') }}</a>
                            </li>
                        </ul>
                        <div class="">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:font-bold">Certificate</a>
                        </div>
                    </div>
                </li>
                <li class="relative">
                    <button id="" data-dropdown-toggle="trading" class="flex items-center justify-between w-full py-2 px-3 text-custom-black rounded hover:bg-gray-100 lg:hover:bg-transparent hover:font-bold lg:border-0 lg:hover:text-custom-blue lg:p-0 lg:w-auto">
                        {{ __('lang.trading') }}
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="trading" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-full lg:w-36">
                        <ul class="text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('import-items') }}" class="block px-4 py-2 hover:bg-gray-100 hover:font-bold">{{ __('lang.import_items') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('export-items') }}" class="block px-4 py-2 hover:bg-gray-100 hover:font-bold">{{ __('lang.export_items') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>
                    <button id="" data-dropdown-toggle="retail-wholesales" class="flex items-center justify-between w-full py-2 px-3 text-custom-black rounded hover:bg-gray-100 lg:hover:bg-transparent hover:font-bold lg:border-0 lg:hover:text-custom-blue lg:p-0 lg:w-auto">
                        {{ __('lang.retail_whosale') }}
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="retail-wholesales" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-52">
                        <ul class="text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('raw-for-medicine') }}" class="block px-4 py-2 hover:bg-gray-100 hover:font-bold">{{ __('lang.raw_medicine') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('herb-powder') }}" class="block px-4 py-2 hover:bg-gray-100 hover:font-bold">{{ __('lang.herb_powder') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('herb-tablet') }}" class="block px-4 py-2 hover:bg-gray-100 hover:font-bold">{{ __('lang.herb_tablet') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('news') }}" class="block py-2 px-3 text-custom-black rounded hover:bg-gray-100 hover:font-bold lg:hover:bg-transparent lg:border-0 lg:hover:text-custom-blue lg:p-0">{{ __('lang.news') }}</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="block py-2 px-3 text-custom-black rounded hover:bg-gray-100 hover:font-bold lg:hover:bg-transparent lg:border-0 lg:hover:text-custom-blue lg:p-0">{{ __('lang.contact') }}</a>
                </li>
                <li>
                    <button id="" data-dropdown-toggle="laguage" class="flex items-center justify-between w-full py-2 px-3 text-custom-black rounded hover:bg-gray-100 hover:font-bold lg:hover:bg-transparent lg:border-0 lg:hover:text-custom-blue lg:p-0 lg:w-auto">
                        @if (app()->getLocale() == 'en')
                            English
                        @elseif(app()->getLocale() == 'mm')
                            မြန်မာ
                        @endif
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <div id="laguage" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-24   ">
                        <ul class="text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="" id="lang" class="block px-4 py-2 hover:bg-gray-100 hover:font-bold">
                                    @if (app()->getLocale() == 'en')
                                        Myanmar
                                    @elseif(app()->getLocale() == 'mm')
                                        English
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- @auth
                    <li>
                        <a href="{{ route('dashboard') }}" class="block py-2 px-3 text-custom-black rounded hover:bg-gray-100 lg:hover:bg-transparent md:border-0 md:hover:text-custom-blue md:p-0">Dashboard</a>
                    </li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="block py-2 px-3 text-custom-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-custom-blue md:p-0">Logout</button>
                    </form>
                @else
                    <li>
                        <a href="{{ route('register') }}" class="block py-2 px-3 text-custom-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-custom-blue md:p-0">Register</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}" class="block py-2 px-3 text-custom-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-custom-blue md:p-0">Login</a>
                    </li>
                @endauth --}}
            </ul>
      </div>
    </div>
  </nav>

