<x-layout>
    <x-wrappers.banner> 
        <img src="{{ asset('images/patient-special-issue-probiotic-top.webp') }}" class="w-full h-96 object-cover"  alt="">
    </x-wrappers.banner>
    <x-wrappers.container class="">
        <x-wrappers.page-title class="position-absolute -mt-16" title="Contact" />
        <div class="grid grid-cols-6 mb-4 mt-9 gap-8">
            
            <div class="col-span-3">
                <x-wrappers.sub-title title="Get In Touch" />
                <div class="mb-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio voluptate repudiandae corporis ipsa facere, qui minus sit neque porro molestiae optio odit error debitis vel magnam dicta. Ad, placeat rerum.
                </div>
                <div class="flex gap-8">
                    <div class="flex mb-4">
                        <div class="text-lg font-semibold me-4">
                            Phone :
                        </div>
                        <div class="">
                            <div class="">
                                094534534554
                            </div>
                            <div class="">
                                094656546
                            </div>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <div class="text-lg font-semibold me-4">
                            Email :
                        </div>
                        <div class="">
                            <div class="">
                                sample@gmail.com
                            </div>
                            <div class="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="text-lg font-semibold me-4">
                        Address :
                    </div>
                    <div class="">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio voluptate repudiandae corporis ipsa facere,
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-3 w-full sm:max-w-md mt-6 px-6 py-4  shadow-md overflow-hidden sm:rounded-lg">
                <form class="" method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email Address -->
                    <div class="mb-4">
                        <x-input-label for="name" :value="__('name')" />
                        <x-text-input id="name" type="text" class="border-0"  name="name" :value="old('name')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" type="email" class="border-0"  name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="Message" :value="__('Message')" />
                        <textarea class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 border-0 rounded-md shadow-sm block mt-1 px-2 w-full"  name=""rows="5"></textarea>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
            
                    <x-primary-button class="h-10">
                        {{ __('Submit') }}
                    </x-primary-button>

                </form>
            </div>
        </div>
        <div class="mt-9">
            <x-wrappers.sub-title title="About Us" />       
        </div>      
    </x-wrappers.container>
</x-layout>