

<div class="my-8 py-8 w-full px-4 mx-auto bg-gray-50 shadow-inner">
    <div class="flex flex-wrap  max-w-6xl mx-auto">
        <div class="lg:w-1/3 w-full px-4">
            <h3 class="text-purple-600 font-bold text-4xl">Experienced</h3>
            <h4 class="border-b-4 border-purple-700 w-2/12 my-4"></h4>
            <h5 class="text-gray-800 font-bold text-2xl">
                Your guide to call center tech
            </h5>
            <p class="text-gray-500 font-normal text-xl my-4">
                Looking for specific industry experience to fill in the gaps? Get relevant advice without duplicating your staff and other vendor-partners along the way.
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
</div>