<x-layout>
    <x-wrappers.banner>
        <img src="{{ asset('images/patient-special-issue-probiotic-top.webp') }}" class="w-full h-96 object-cover"  alt="">
    </x-wrappers.banner>
    <x-wrappers.container class="">
        <x-wrappers.page-title class="position-absolute -mt-16" title="Company Profile" />
        <div class="grid grid-cols-5 mb-4 mt-9">
            <x-wrappers.sub-title class="col-span-5 " title="Business Description" />
            <div class="col-span-2">
                <img src="{{ asset('images/wallpaper-1-e1696784878917.jpg') }}" class="w-full h-80" alt="">
            </div>
            <div class="col-span-3">
                <x-informations.description-list class="ps-12" title="Line of Business" description="Traditional Medicine Distribution" />
                <x-informations.description-list class="ps-12" title="Prouct Line" description="Export: Beans, Maize, Tumeric, Ljwanti, Betal Nuts, SoapNut. <br> Import: Chemical, Herbal, Spices and others" />
                <x-informations.description-list class="ps-12" title="Factories" description="Factory 1 <br> Factory 2 <br> Factory 3" />
            </div>
        </div>
        <div class="my-9">
            <x-wrappers.sub-title title="About Us" />
            <div class="">
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
