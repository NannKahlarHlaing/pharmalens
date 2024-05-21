<x-admins.layout>
    @if (session('success'))
        <x-success-alert />
    @endif
    <form action="" class="mt-4">
        <div class="bg-white rounded-full border-none p-3 mb-4 shadow-md">
            <div class="flex items-center">
                <i class="px-3 fas fa-search ml-1"></i>
                <input type="text" placeholder="Search..." name="name" class="ml-3 focus:outline-none w-full">
            </div>
        </div>
    </form>
    <div class="bg-white rounded-lg p-4 shadow-md my-4">
        <div class="py-2 text-left w-full flex justify-between">
            <h2 class="text-2xl font-bold text-gray-600">Products</h2>
            <a href="{{ route('products.create') }}">
                <x-primary-button class="h-10">
                    {{ __('Create Product') }}
                </x-primary-button>
            </a>
        </div>
        <table class="table-auto w-full my-2">
            <thead>
                <tr class="px-4 my-2 text-left border-b-2 text-ml font-bold text-gray-600">
                    <th>Name(English)</th>
                    <th>Name(Myanmar)</th>
                    <th>Category</th>
                    <th>Trading</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="border-b w-full px-4 py-10 text-left">
                        <td>
                            {{ $product->name_en }}
                        </td>
                        <td>
                            {{ $product->name_mm }}
                        </td>
                        <td>
                            {{ $product->category->description() }}
                        </td>
                        <td>
                            {{ $product->trading->description() }}
                        </td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}">
                                <x-primary-button class="h-8">
                                    {{ __('Edit') }}
                                </x-primary-button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <x-primary-button class="h-8" onclick="return confirm('Are you sure to delete');">
                                    {{ __('Delete') }}
                                </x-primary-button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">{{ $products->links() }}</div>
    </div>
</x-admins.layout>
