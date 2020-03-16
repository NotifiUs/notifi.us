
@include('_layouts.hero-contact')

<div class="container mx-auto px-4 my-6 max-w-6xl">
    <div class="flex flex-wrap md:flex-shrink max-w-6xl mx-auto">

        <div class="my-0 w-auto sm:w-auto md:w-3/5 lg:w-3/5 xl:w-3/5">
            <div class="mx-auto text-left align-middle">
                <div id="contactform" class="bg-white shadow px-4 py-10">

                    <h1 class="text-purple-600 font-bold text-4xl">Contact</h1>

                    <h4 class="border-b-4 border-purple-700 w-2/12 my-4"></h4>

                    <p class="text-indigo-700 text-xl block my-2">
                        The best way to contact us is by <strong>email</strong> or <strong>phone</strong>.
                    </p>

                    <div class="flex flex-wrap justify-center">
                        <a title="Give us a call!" alt="+1 888-966-9830" class="rounded-lg block text-md uppercase text-center text-purple-100 inline-block shadow bg-purple-700 my-4 px-5 py-3 hover:bg-purple-900 hover:text-white font-bold mx-auto w-10/12 lg:w-5/12" href="tel:+1 888-966-9830">
                            <i class="fas fa-mobile-alt text-purple-300"></i> Give us a call
                        </a>

                        <a title="Send us an email!" alt="support@notifi.us" class="rounded-lg block text-md uppercase text-center text-purple-100 inline-block shadow bg-purple-700 my-4 px-5 py-3 hover:bg-purple-900 hover:text-white font-bold mx-auto w-10/12 lg:w-5/12" href="mailto:support@notifi.us">
                            <i class="fas fa-envelope text-purple-300"></i> Send an email
                        </a>
                    </div>

                    <p class="text-indigo-600 text-sm block mb-4 text-center">
                        You can also contact us on social media!
                    </p>

                    <div class="my-6 mx-auto text-center">
                        <a title="Find us on Facebook" class="text-blue-600 hover:text-blue-700 mx-1" href="https://www.facebook.com/NotifiUsConsulting">
                            <i class="fab fa-facebook"></i>
                        </a>

                        <a title="Follow us on Twitter" class="text-blue-400 hover:text-blue-500 mx-1" href="https://twitter.com/notifius">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <!-- Please, noooooooo -->
                        <a title="Join us on LinkedIn" class="text-blue-700 hover:text-blue-800 mx-1" href="https://www.linkedin.com/company/notifius">
                            <i class="fab fa-linkedin"></i>
                        </a>

                        <a title="Open source on Github" class="text-gray-600 hover:text-gray-700 mx-1" href="https://github.com/notifius">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="my-0 w-full sm:w-full md:w-2/5 lg:w-2/5 xl:w-2/5">
            <div class="mx-auto text-left align-middle">
                <div class="bg-purple-600 md:rounded md:rounded-tl-none md:rounded-bl-none pb-4 pt-2 md:py-8 text-center my-0 md:my-4 shadow-inner">
                    <address class="font-bold text-white my-4">
                        <span class="text-2xl">NotifiUs, LLC</span>
                        <br>
                        <span class="text-xl text-indigo-300">PO Box 2051</span>
                        <br>
                        <span class="text-gray-100">Dublin, Ohio 43017</span>
                        <br>
                        <span class="text-indigo-200">United State of America</span>
                    </address>
                    <div class="my-0 py-2 bg-purple-200">
                        <i class="fas fa-envelope text-indigo-600 text-sm"></i> <a class="font-bold text-indigo-600 hover:text-indigo-800 text-lg" href="mailto:support@notifi.us">support@notifi.us</a>
                    </div>
                    <div class="shadow my-0 py-2 bg-purple-300">
                        <i class="fas fa-phone text-indigo-600 text-sm"></i> <a class="text-gray-700 font-semibold" href="tel:+1 888-966-9830">+1 888-966-9830</a>
                    </div>
                    <div class="shadow my-0 py-2 bg-purple-400">
                        <i class="fas fa-phone text-indigo-600 text-sm"></i> <a class="text-gray-700  font-semibold" href="tel:+1 614-682-7015">+1 614-682-7015</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 max-w-3xl mt-4">
    <form class="bg-gray-300 rounded shadow px-4 py-8 mx-auto max-w-md md:max-w-full" action="/thank-you" method="POST" name="notifi.us/contact" data-netlify="true">
        <div class="flex flex-wrap">
            <h3 class="text-indigo-700 text-left text-xl font-bold flex-row w-full max-w-2xl mx-0 mb-3">Prefer contact forms?</h3>
            <div class="flex-row w-full md:w-1/2 px-3">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                        Message
                    </label>
                    <textarea class="h-48 shadow appearance-none border rounded w-full max-w-md py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                              required name="message" id="message" placeholder="Enter your message here..."></textarea>

                </div>
            </div>
            <div class="flex-row w-full md:w-1/2 px-3">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Name
                    </label>
                    <input class="w-full max-w-md shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           name="name" id="name" type="text" placeholder="Jane Doe">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="w-full max-w-md shadow appearance-none border rounded py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                           name="email" id="email" type="email" placeholder="you@example.com">

                </div>
                <div class="flex items-start justify-between">
                    <button class="w-full max-w-md rounded-lg block uppercase text-center text-purple-100 shadow bg-purple-700 px-3 py-3 hover:bg-purple-900 hover:text-white font-bold" type="submit">
                        <i class="fas fa-paper-plane text-purple-300"></i> Submit Message
                    </button>

                </div>
            </div>
        </div>

    </form>
</div>
