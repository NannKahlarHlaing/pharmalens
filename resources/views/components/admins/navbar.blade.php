<div id="sideNav" class="lg:block hidden bg-white w-64 h-screen  rounded-none border-none">
    <!-- Items -->
    <div class="p-4 space-y-4">
        <a href="{{ route('dashboard') }}" class="px-4 py-2 flex items-center space-x-4 rounded-md text-gray-500 group">
            <i class="fas fa-wallet"></i>
            <span>Dashboard</span>
        </a>
        <a href="{{ route('products') }}" class="px-4 py-2 flex items-center space-x-4 rounded-md text-gray-500 group">
            <i class="fa-solid fa-cart-plus"></i>
            <span>Products</span>
        </a>
        <a href="{{ route('dashboard.news') }}" class="px-4 py-2 flex items-center space-x-4 rounded-md text-gray-500 group">
            <i class="fa-solid fa-newspaper"></i>
            <span>News</span>
        </a>
        <a href="{{ route('dashboard.information') }}" class="px-4 py-2 flex items-center space-x-4 rounded-md text-gray-500 group">
            <i class="fas fa-exchange-alt"></i>
            <span>Page Information</span>
        </a>
        {{-- <a href="#" class="px-4 py-2 flex items-center space-x-4 rounded-md text-gray-500 group">
            <i class="fas fa-user"></i>
            <span>Users</span>
        </a> --}}
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="px-4 py-2 flex items-center space-x-4 rounded-md text-gray-500 group"><i class="fas fa-sign-out-alt"></i><span class="ms-3">Sign Out</span></button>
        </form>
    </div>
</div>
