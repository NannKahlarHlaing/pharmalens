<x-layout>
    <x-wrappers.banner>
        <img src="{{ asset('images/banner5.jpg') }}" class="w-full h-64 md:h-96 object-cover"  alt="">
    </x-wrappers.banner>
    <x-wrappers.container>
        <x-wrappers.page-title class="position-absolute -mt-16 text-white" title="Company Profile" />
        <div class="grid grid-cols-10 mb-4 mt-9">
            <x-wrappers.sub-title class="col-span-10" title="{{ __('lang.business_description') }}" />
            <div class="col-span-10 md:col-span-5 lg:col-span-4">
                <img src="{{ asset('images/banner2.jpg') }}" class="w-full h-80" alt="">
            </div>
            <div class="col-span-10 md:col-span-5 lg:col-span-6 mt-9 md:mt-0">
                <x-informations.description-list class="md:ps-6 lg:ps-12" title="{{ __('lang.line_of_business') }}" description="Traditional Medicine Distribution" />
                <x-informations.description-list class="md:ps-6 lg:ps-12" title="{{ __('lang.product_line') }}" description="Export: Beans, Maize, Tumeric, Ljwanti, Betal Nuts, SoapNut. <br> Import: Chemical, Herbal, Spices and others" />
                <x-informations.description-list class="md:ps-6 lg:ps-12" title="{{ __('lang.factories') }}" description="Factory 1 <br> Factory 2 <br> Factory 3" />
            </div>
        </div>
        <div class="my-9">
            <x-wrappers.sub-title title="{{ __('lang.about') }}" />
            <div>
                <b>The standard Lorem Ipsum passage, used since the 1500s</b><br>
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

                </p><br><br>


                <b>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</b><br>
                <p>
                    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                </p>
            </div>
        </div>
    </x-wrappers.container>
</x-layout>
