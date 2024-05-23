<x-layout>
    <x-wrappers.banner>
        <img src="{{ asset('images/patient-special-issue-probiotic-top.webp') }}" class="w-full h-96 object-cover"  alt="">
    </x-wrappers.banner>
    <x-wrappers.container class="">
        <x-wrappers.page-title class="position-absolute -mt-16" title="{{ __('lang.contact') }}" />
        <div class="grid grid-cols-6 mb-4 mt-9 gap-8">           
            <div class="col-span-6 lg:col-span-3">
                <x-wrappers.sub-title title="Get In Touch" />
                <div class="mb-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio voluptate repudiandae corporis ipsa facere, qui minus sit neque porro molestiae optio odit error debitis vel magnam dicta. Ad, placeat rerum.
                </div>
                <div class="flex gap-8">
                    <div class="md:flex mb-4">
                        <div class="text-lg font-semibold me-4">
                            Phone :
                        </div>
                        <div class="">
                            @foreach ($phone as $item)
                                <a class="block">{{ $item }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="md:flex mb-4">
                        <div class="text-lg font-semibold me-4">
                            Email :
                        </div>
                        <div class="">
                            @foreach ($email as $item)
                                <a class="block">{{ $item }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="text-lg font-semibold me-4">
                        Address :
                    </div>
                    <div class="">
                        {{ $info->address }}
                    </div>
                </div>
            </div>
            <div class="col-span-6 lg:col-span-3 w-full sm:max-w-md mt-6 px-6 py-4  shadow-md overflow-hidden sm:rounded-lg">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.015362402795!2d96.15210381190907!3d16.775911283944072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed47d4ce303d%3A0x4a855164dee68608!2sSANDHI%20BROTHERS%20TRADING%20CO%20LTD!5e0!3m2!1sen!2smm!4v1715830431413!5m2!1sen!2smm" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="my-9">
            <x-wrappers.sub-title title="{{ __('lang.contact_us') }}" />
            @if (session('success'))
                <x-success-alert />
            @endif
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 items-center justify-center">
                <x-wrappers.card class="bg-custom-yellow p-5">
                    <div class="flex justify-between items-center">
                        <div class="">
                            <x-footers.footer-title class="text-start" name="Inquiry Form" />
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, saepe iure frwerw4er erwer erer
                        </div>

                        <button data-modal-target="inquiry" data-modal-toggle="inquiry" class="ms-4 h-10 animate-pulse hover:animate-none" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 512 512">
                                <path fill="#466B73" d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM294.6 135.1c-4.2-4.5-10.1-7.1-16.3-7.1C266 128 256 138 256 150.3V208H160c-17.7 0-32 14.3-32 32v32c0 17.7 14.3 32 32 32h96v57.7c0 12.3 10 22.3 22.3 22.3c6.2 0 12.1-2.6 16.3-7.1l99.9-107.1c3.5-3.8 5.5-8.7 5.5-13.8s-2-10.1-5.5-13.8L294.6 135.1z" stroke="" />
                            </svg>
                        </button>
                    </div>

                    <!-- Main modal -->
                    <div id="inquiry" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Inquiry Form
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="inquiry">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form action="{{ route('enquiry-mail') }}" method="POST" class="p-4 md:p-5">
                                    @csrf
                                    <div class="space-y-4">
                                        <div>
                                            <x-input-label for="name" :value="__('Name')" />
                                            <x-text-input id="name" type="text" name="name" :value="old('name')" required />
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                        <div>
                                            <x-input-label for="company" :value="__('Company')" />
                                            <x-text-input id="company" type="text" name="company" :value="old('company')" required />
                                            <x-input-error :messages="$errors->get('company')" class="mt-2" />
                                        </div>
                                        <div>
                                            <x-input-label for="phone" :value="__('Phone')" />
                                            <x-text-input id="phone" type="text" name="phone" :value="old('phone')" required />
                                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                        </div>
                                        <div>
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input id="email" type="email" name="email" :value="old('email')" required />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div>
                                            <x-input-label for="viber" :value="__('Whatsapp/Viber')" />
                                            <x-text-input id="viber" type="viber" name="viber" :value="old('viber')" required />
                                            <x-input-error :messages="$errors->get('viber')" class="mt-2" />
                                        </div>
                                        <div>
                                            <x-input-label for="commodity" :value="__('Commodity')" />
                                            <x-text-input id="commodity" type="commodity" name="commodity" :value="old('commodity')" required />
                                            <x-input-error :messages="$errors->get('commodity')" class="mt-2" />
                                        </div>
                                        <div>
                                            <x-input-label for="quantity" :value="__('Quantity')" />
                                            <x-text-input id="quantity" type="quantity" name="quantity" :value="old('quantity')" required />
                                            <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                                        </div>
                                        <div>
                                            <x-input-label for="message" :value="__('Message')" />
                                            <textarea name="message" class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-md shadow-sm block mt-1 px-2 w-full" id="message" cols="30" rows="5">{{ old('message') }}</textarea>
                                            <x-input-error :messages="$errors->get('message')" class="mt-2" />
                                        </div>
                                        <x-primary-button class="ms-4 h-10">
                                            {{ __('Send Message') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> 

                </x-wrappers.card>

                <x-wrappers.card class="bg-custom-yellow p-5">
                    <div class="flex justify-between items-center">
                        <div class="">
                            <x-footers.footer-title class="text-start" name="Complaint Form" />
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, saepe iure frwerw4er erwer erer
                        </div>
                        <button data-modal-target="complaint" data-modal-toggle="complaint" class="ms-4 h-10 animate-pulse hover:animate-none" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 512 512">
                                <path fill="#466B73" d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM294.6 135.1c-4.2-4.5-10.1-7.1-16.3-7.1C266 128 256 138 256 150.3V208H160c-17.7 0-32 14.3-32 32v32c0 17.7 14.3 32 32 32h96v57.7c0 12.3 10 22.3 22.3 22.3c6.2 0 12.1-2.6 16.3-7.1l99.9-107.1c3.5-3.8 5.5-8.7 5.5-13.8s-2-10.1-5.5-13.8L294.6 135.1z" stroke="" />
                            </svg>
                        </button>
                    </div>
                    <div id="complaint" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Complaint Form
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="complaint">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form action="{{ route('complaint-mail') }}" method="POST" class="p-4 md:p-5">
                                    @csrf
                                    <div class="space-y-4">
                                        <div>
                                            <x-input-label for="name" :value="__('Name')" />
                                            <x-text-input id="name" type="text" name="name" :value="old('name')" required autocomplete="name" />
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                        <div>
                                            <x-input-label for="phone" :value="__('Phone')" />
                                            <x-text-input id="phone" type="text" name="phone" :value="old('phone')" required />
                                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                        </div>
                                        <div>
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input id="email" type="email" name="email" :value="old('email')" required />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div>
                                            <x-input-label for="viber" :value="__('Whatsapp/Viber')" />
                                            <x-text-input id="viber" type="viber" name="viber" :value="old('viber')" required />
                                            <x-input-error :messages="$errors->get('viber')" class="mt-2" />
                                        </div>
                                        <div>
                                            <x-input-label for="product_name" :value="__('Product Name or Name')" />
                                            <x-text-input id="product_name" type="product_name" name="product_name" :value="old('product_name')" required />
                                            <x-input-error :messages="$errors->get('product_name')" class="mt-2" />
                                        </div>
                                        <div>
                                            <x-input-label for="message" :value="__('Message')" />
                                            <textarea name="message" class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-md shadow-sm block mt-1 px-2 w-full" id="message" cols="30" rows="5">{{ old('message') }}</textarea>
                                            <x-input-error :messages="$errors->get('message')" class="mt-2" />
                                        </div>
                                        <x-primary-button class="ms-4 h-10">
                                            {{ __('Send Message') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> 
                </x-wrappers.card>

                <x-wrappers.card class="bg-custom-yellow p-5">
                    <div class="flex justify-between items-center">
                        <div class="">
                            <x-footers.footer-title class="text-start" name="Feedback Form" />
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, saepe iure frwerw4er erwer erer
                        </div>
                        {{-- <div x-data="{ feedbackForm: false }">
                            <!-- Trigger button -->
                            <button class="ms-4 h-10 animate-pulse hover:animate-none" @click="feedbackForm = true" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 512 512">
                                    <path fill="#466B73" d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM294.6 135.1c-4.2-4.5-10.1-7.1-16.3-7.1C266 128 256 138 256 150.3V208H160c-17.7 0-32 14.3-32 32v32c0 17.7 14.3 32 32 32h96v57.7c0 12.3 10 22.3 22.3 22.3c6.2 0 12.1-2.6 16.3-7.1l99.9-107.1c3.5-3.8 5.5-8.7 5.5-13.8s-2-10.1-5.5-13.8L294.6 135.1z" stroke="" />
                                </svg>
                            </button>

                            <!-- Modal -->
                            <div x-show="feedbackForm" class="fixed inset-0 flex items-center justify-center z-50">
                                <div class="bg-white rounded-lg p-6 w-[500px] max-w-full shadow-lg transform transition-all duration-300" x-show.transition.opacity="feedbackForm">
                                    <!-- Modal Header -->
                                    <div class="flex justify-between items-center border-b-2 border-gray-200 pb-4">
                                        <h2 class="text-2xl font-semibold">Feedback Form</h2>
                                        <button @click="feedbackForm = false" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="mt-6 space-y-4">
                                        <div>
                                            <x-input-label for="name" :value="__('Name')" />
                                            <x-text-input id="name" type="text" name="name" :value="old('name')" required autocomplete="name" />
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                        <div>
                                            <x-input-label for="phone" :value="__('Phone')" />
                                            <x-text-input id="phone" type="text" name="phone" :value="old('phone')" required />
                                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                        </div>
                                        <div>
                                            <x-input-label for="message" :value="__('Suggestion')" />
                                            <textarea name="message" class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-md shadow-sm block mt-1 px-2 w-full" id="message" cols="30" rows="5">{{ old('message') }}</textarea>
                                            <x-input-error :messages="$errors->get('message')" class="mt-2" />
                                        </div>
                                        <x-primary-button class="ms-4 h-10">
                                            {{ __('Send Message') }}
                                        </x-primary-button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <button data-modal-target="feedback" data-modal-toggle="feedback" class="ms-4 h-10 animate-pulse hover:animate-none" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 512 512">
                                <path fill="#466B73" d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM294.6 135.1c-4.2-4.5-10.1-7.1-16.3-7.1C266 128 256 138 256 150.3V208H160c-17.7 0-32 14.3-32 32v32c0 17.7 14.3 32 32 32h96v57.7c0 12.3 10 22.3 22.3 22.3c6.2 0 12.1-2.6 16.3-7.1l99.9-107.1c3.5-3.8 5.5-8.7 5.5-13.8s-2-10.1-5.5-13.8L294.6 135.1z" stroke="" />
                            </svg>
                        </button>
                    </div>
                    <div id="feedback" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Feedback Form
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="feedback">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form action="{{ route('feedback-mail') }}" method="POST" class="p-4 md:p-5">
                                    @csrf
                                    <div class="space-y-4">
                                        <div>
                                            <x-input-label for="name" :value="__('Name')" />
                                            <x-text-input id="name" type="text" name="name" :value="old('name')" required autocomplete="name" />
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                        <div>
                                            <x-input-label for="phone" :value="__('Phone')" />
                                            <x-text-input id="phone" type="text" name="phone" :value="old('phone')" required />
                                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                        </div>
                                        <div>
                                            <x-input-label for="message" :value="__('Suggestion')" />
                                            <textarea name="message" class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-md shadow-sm block mt-1 px-2 w-full" id="message" cols="30" rows="5">{{ old('message') }}</textarea>
                                            <x-input-error :messages="$errors->get('message')" class="mt-2" />
                                        </div>
                                        <x-primary-button class="ms-4 h-10">
                                            {{ __('Send Message') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> 
                </x-wrappers.card>

            </div>
        </div>
    </x-wrappers.container>
</x-layout>
