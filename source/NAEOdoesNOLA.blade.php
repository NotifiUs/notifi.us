@extends('_layouts.master')
@section('title', '2020 NAEO Conference Giveaway')
@push('meta')
    @include('_layouts.meta', [
    'meta_og_image' => $page->baseUrl . '/assets/images/naeo-does-nola-coaster.png',
    'meta_og_title' => 'NAEO 2020 Conference Giveaways',
    'meta_og_description' => 'The conference is canceled, but the giveaways are on!'
    ])
@endpush
@section('body')


    <div class="bg-gradient py-8 lg:py-16 w-full px-4 shadow mx-auto">
        <div class="flex flex-wrap max-w-6xl mx-auto">

            <div class="w-full lg:w-3/5 px-4 max-w-2xl mx-auto">
                <div class="container mx-auto text-center align-middle">

                    <h1 class="text-white font-extrabold text-4xl  mb-0 mt-6">
                       2020 NAEO Annual Conference
                    </h1>

                    <div class="inline-block text-2xl text-blue-100">
                        This year's conference was cancelled due to Coronavirus, but we've still got some giveaways!
                    </div>

                    <div class="my-8">
                        <a title="Contact info" class="inline rounded-lg mx-auto text-lg uppercase text-purple-100 shadow bg-purple-700 my-12 px-5 py-3 hover:bg-purple-900 hover:text-white font-bold"
                           href="#stickerform">
                            <i class="fas fa-star text-purple-300"></i> Free Postcard &amp; Sticker
                        </a>
                        <small class="block text-yellow-300 my-5"><strong>Warning</strong>: Contains marketing stuff, too.</small>
                    </div>

                    <div class="my-6 mx-auto text-center">
                        <a title="Find us on Facebook" class="text-white hover:text-blue-800 mx-1" href="https://www.facebook.com/NotifiUsConsulting">
                            <i class="fab fa-facebook"></i>
                        </a>

                        <a title="Follow us on Twitter" class="text-white hover:text-blue-600 mx-1" href="https://twitter.com/notifius">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <!-- Please, noooooooo -->
                        <a title="Join us on LinkedIn" class="text-white hover:text-blue-800 mx-1" href="https://www.linkedin.com/company/notifius">
                            <i class="fab fa-linkedin"></i>
                        </a>

                        <a title="Open source on Github" class="text-white hover:text-gray-700 mx-1" href="https://github.com/notifius">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="w-full lg:w-2/5 px-4">
                <div class="container mx-auto text-center lg:text-left max-w-xl">
                    <div class="w-100 mx-auto text-center">
                        <img class="w-full max-w-sm mx-auto" src="/assets/images/naeo-does-nola-coaster.png" title="Sadly cancelled, but you get a postcard and sticker from us!" alt="Call Theory Universe Premium Subscription">
                        <span class="inline-block my-1 text-center mx-auto text-gray-300">Sorry, this is <strong>not</strong> the sticker you're getting.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 max-w-3xl my-6">
        <form id="stickerform" class="bg-gray-300 rounded shadow px-4 py-8 mx-auto max-w-md md:max-w-full" action="/thank-you" method="POST" name="notifi.us/NAEOdoesNOLA" data-netlify="true">
            <div class="flex flex-wrap">
                <h3 class="text-indigo-700 text-left text-xl font-bold flex-row w-full max-w-2xl mx-0 mb-3">
                    Request a postcard and sticker
                </h3>
                <div class="flex-row w-full md:w-1/2 px-3">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Name
                        </label>
                        <input class="w-full max-w-md shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               name="name" id="name" type="text" placeholder="">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                            Address
                        </label>
                        <input class="w-full max-w-md shadow appearance-none border rounded py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                               name="address" id="address" type="text" placeholder="">

                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="address2">
                            Address (Line 2)
                        </label>
                        <input class="w-full max-w-md shadow appearance-none border rounded py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                               name="address2" id="address2" type="text" placeholder="">

                    </div>
                </div>
                <div class="flex-row w-full md:w-1/2 px-3">

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="city">
                            City
                        </label>
                        <input class="w-full max-w-md shadow appearance-none border rounded py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                               name="city" id="city" type="text" placeholder="">

                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="state">
                            State
                        </label>
                        <input class="w-full max-w-md shadow appearance-none border rounded py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                               name="state" id="state" type="text" placeholder="">

                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="zip">
                            Zip Code
                        </label>
                        <input class="w-full max-w-md shadow appearance-none border rounded py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                               name="zip" id="zip" type="text" placeholder="">

                    </div>

                    <div class="flex items-start justify-between">
                        <button class="w-full max-w-md rounded-lg block uppercase text-center text-purple-100 shadow bg-purple-700 px-3 py-3 hover:bg-purple-900 hover:text-white font-bold" type="submit">
                            <i class="fas fa-smile text-purple-300"></i> Request stickers
                        </button>

                    </div>
                </div>
            </div>

        </form>
        <small class="text-xs text-center text-gray-500">
            We use your info only for the intended purpose.
            Please review our <a title="Privacy policy" class="font-semibold text-gray-600 hover:text-indigo-700" href="/privacy">privacy policy</a>.
        </small>
    </div>

@endsection
