<nav class="bg-white border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap">Pharmalens</span>
      </a>
      <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-dropdown" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
          <li>
            <a href="{{ url('/') }}" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 " aria-current="page">Home</a>
          </li>
          	<li>
				<button id="" data-dropdown-toggle="about-us" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
					About Us 
					<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
					</svg>
				</button>
				<div id="about-us" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-36">
					<ul class="text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
						<li>
						<a href="{{ route('company-profile') }}" class="block px-4 py-2 hover:bg-gray-100">Company Profile</a>
						</li>
					</ul>
					<div class="">
						<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Certificate</a>
					</div>
				</div>
          	</li>
		  	<li>
				<button id="" data-dropdown-toggle="trading" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
					Trading
					<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
					</svg>
				</button>
				<!-- Dropdown menu -->
				<div id="trading" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-32">
					<ul class="text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
						<li>
							<a href="{{ route('company-profile') }}" class="block px-4 py-2 hover:bg-gray-100">Import Items</a>
						</li>
						<li>
							<a href="{{ route('company-profile') }}" class="block px-4 py-2 hover:bg-gray-100">Export Items</a>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<button id="" data-dropdown-toggle="retail-wholesales" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
					Retail and Wholesales
					<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
					</svg>
				</button>
				<!-- Dropdown menu -->
				<div id="retail-wholesales" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-48">
					<ul class="text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
						<li>
							<a href="{{ route('company-profile') }}" class="block px-4 py-2 hover:bg-gray-100">Raw for Herbal Medicine</a>
						</li>
						<li>
							<a href="{{ route('company-profile') }}" class="block px-4 py-2 hover:bg-gray-100">Herb Powder</a>
						</li>
						<li>
							<a href="{{ route('company-profile') }}" class="block px-4 py-2 hover:bg-gray-100">Herb Tablet</a>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">News</a>
			</li>
			<li>
				<a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Contact</a>
			</li>
			@auth
				<li>
					<a href="{{ route('dashboard') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Dashboard</a>
				</li>
				<li>
					<a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">{{auth()->user()->name}}</a>
				</li>
				<form action="/logout" method="POST">
					@csrf
					<button type="submit" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Logout</button>
				</form>
			@else
				<li>
					<a href="{{ route('register') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Register</a>
				</li>
				<li>
					<a href="{{ route('login') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Login</a>
				</li>
			@endauth
        </ul>
      </div>
    </div>
  </nav>

  