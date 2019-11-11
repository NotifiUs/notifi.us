

<div class="flex flex-wrap py-16 lg:w-10/12 md:w-10/12 sm:w-full xs:w-full px-4 mx-auto">
    <div class="lg:w-1/3 w-full">
        <h3 class="text-purple-600 font-bold text-4xl">Our Experience</h3>
        <h4 class="border-b-4 border-purple-700 w-2/12 my-4"></h4>
        <h5 class="text-gray-800 font-bold text-2xl">
            Over 15 years of experience in the call center industry
        </h5>
        <p class="text-gray-600 font-normal text-xl my-8">
            Having managed and worked with companies of all sizes, we have a broad range of experience working with call centers to manage their technology infrastructure, call taking operations, and software integrations.
        </p>
    </div>
    <div class="lg:w-2/3 w-full">
        <div class="w-full">
            <div class="flex flex-wrap w-full lg:px-4 px-2 mx-auto">

                @foreach( $page->services as $service )
                    <div class="flex xl:w-1/2 lg:w-1/2 md:w-1/2 w-full px-4 py-6 bg-white shadow">
                        <img class="mx-0" style="height:64px;" src="{{ $service['image'] }}" alt="{{ $service['title'] }}">
                        <div class="ml-2">
                            <h5 class="font-extrabold text-xl text-gray-900">{{ $service['title'] }}</h5>
                            <p class="text-indigo-500 text-md">
                                {{ $service['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>
</div>