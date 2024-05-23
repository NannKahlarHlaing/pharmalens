<x-admins.layout>
        <div class=" max-w-xl">
            <x-wrappers.sub-title title="Edit Product" />
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
            <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            <!-- Name -->
            <div class="mb-4">
                <x-input-label for="name_en" :value="__('Name (English)')" />
                <x-text-input id="name_en" type="text" name="name_en" :value="old('name_en', $product->name_en)" required autocomplete="name_en" />
                <x-input-error :messages="$errors->get('name_en')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="name_mm" :value="__('Name (Myanmar)')" />
                <x-text-input id="name_mm" type="text" name="name_mm" :value="old('name_mm', $product->name_mm)" required autocomplete="name_mm" />
                <x-input-error :messages="$errors->get('name_mm')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="category" :value="__('Category')" />
                <select name="category" id="category" class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-md shadow-sm block mt-1 px-2 h-10 w-full">
                    <option value="">Choose Category</option>
                    @foreach (App\Enums\Category::cases() as $key=>$value )
                        <option value="{{$value}}" {{ (old("category", $product->category) == $value ? "selected":"") }}>
                            {{ App\Enums\Category::cases()[$key]->description()}}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('category')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="trading" :value="__('Trading')" />{{ old('trading') }}
                <select name="trading" id="trading" class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-md shadow-sm block mt-1 px-2 h-10 w-full">
                    <option value="">Choose trading</option>
                    @foreach (App\Enums\ProductType::cases() as $key=>$value )
                        <option value="{{$value }}" {{ (old('trading', $product->trading) == $value ? 'selected' : '') }}>
                            {{ App\Enums\ProductType::cases()[$key]->description()}}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('trading')" class="mt-2" />
            </div>
            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Image')" />
                <x-text-input id="image" class="block mt-1 px-2 h-10 w-full" type="file" name="image" :value="old('image')" />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>

            <x-primary-button class="ms-4 h-10">
                {{ __('Update') }}
            </x-primary-button>

        </form>
        </div>

</x-admins.layout>
