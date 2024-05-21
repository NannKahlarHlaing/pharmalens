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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.015362402795!2d96.15210381190907!3d16.775911283944072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed47d4ce303d%3A0x4a855164dee68608!2sSANDHI%20BROTHERS%20TRADING%20CO%20LTD!5e0!3m2!1sen!2smm!4v1715830431413!5m2!1sen!2smm" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            {{-- <div class="col-span-3 w-full sm:max-w-md mt-6 px-6 py-4  shadow-md overflow-hidden sm:rounded-lg">
                <form class="" method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email Address -->
                    <div class="mb-4">
                        <x-input-label for="name" :value="__('name')" />
                        <x-text-input id="name" type="text" class="border-0"  name="name" :value="old('name')" required />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" type="email" class="border-0"  name="email" :value="old('email')" required />
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
            </div> --}}
        </div>
        <div class="my-9">
            <x-wrappers.sub-title title="Contact Us" />
            <div class="grid grid-cols-3 gap-8 items-center">
                <x-wrappers.card class="bg-custom-yellow p-5">
                    <div class="flex justify-between items-center">
                        <div class="">
                            <x-footers.footer-title class="text-start" name="Inquiry Form" />
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, saepe iure frwerw4er erwer erer
                        </div>
                        <div x-data="{ inquiryForm: false }">
                            <!-- Trigger button -->
                             <x-primary-button class="ms-4 h-10" @click="inquiryForm = true" >Send</x-primary-button>
                    
                            <!-- Modal -->
                            <div x-show="inquiryForm" class="fixed inset-0 flex items-center justify-center z-50">
                                <div class="bg-white rounded-2xl p-6 w-[500px] max-w-full shadow-lg transform transition-all duration-300" x-show.transition.opacity="inquiryForm">
                                    <!-- Modal Header -->
                                    <div class="flex justify-between items-center border-b-2 border-custom-blue pb-4">
                                        <h2 class="text-2xl font-semibold">Inquiry Form</h2>
                                        <button @click="inquiryForm = false" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </button>
                                    </div>
                                    
                                    <!-- Modal Content -->
                                    <div class="mt-6 space-y-4">
                                        <div>
                                            <x-input-label for="name" :value="__('Name')" />
                                            <x-text-input id="name" type="text" name="name" :value="old('name')" required autocomplete="name" />
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
                                </div>
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
                        <div x-data="{ complaintForm: false }">
                            <!-- Trigger button -->
                             <x-primary-button class="ms-4 h-10" @click="complaintForm = true" >Send</x-primary-button>
                    
                            <!-- Modal -->
                            <div x-show="complaintForm" class="fixed inset-0 flex items-center justify-center z-50">
                                <div class="bg-white rounded-lg p-6 w-[500px] max-w-full shadow-lg transform transition-all duration-300" x-show.transition.opacity="complaintForm">
                                    <!-- Modal Header -->
                                    <div class="flex justify-between items-center border-b-2 border-gray-200 pb-4">
                                        <h2 class="text-2xl font-semibold">Complaint Form</h2>
                                        <button @click="complaintForm = false" class="text-gray-500 hover:text-gray-700 focus:outline-none">
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
                                </div>
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
                        <div x-data="{ feedbackForm: false }">
                            <!-- Trigger button -->
                             <x-primary-button class="ms-4 h-10" @click="feedbackForm = true" >Send</x-primary-button>
                    
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
                        </div>
                    </div>

                </x-wrappers.card>

            </div>
        </div>    
    </x-wrappers.container>
</x-layout>