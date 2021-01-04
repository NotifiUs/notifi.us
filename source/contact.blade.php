@extends('_layouts.master')
@section('title', 'About')
@section('body')

    <div class="max-w-6xl mx-auto">

        @include('_layouts.hero-contact')

            <div class="relative bg-white px-8 ">
                <div class="absolute inset-0 ">
                    <div class="absolute inset-y-0 left-0 w-1/2 bg-white"></div>
                </div>
                <div class="relative mx-auto lg:grid lg:grid-cols-5 shadow-lg border  rounded-lg">
                    <div class="bg-purple-700 py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12 ">
                        <div class="max-w-lg mx-auto">
                            <h2 class="text-2xl font-extrabold tracking-tight text-purple-400 sm:text-3xl">
                                How can I help?
                            </h2>
                            <p class="mt-3 text-lg leading-6 text-white">
                                More information on NotifiUs, LLC and Call Theory is available on the <a class="font-semibold hover:underline" href="/about">about page</a>.
                            </p>
                            <dl class="mt-8 text-base text-white">
                                <div>
                                    <dt class="sr-only">Postal address</dt>
                                    <dd>
                                        <p class="font-semibold">
                                            NotifiUs, LLC <span class="font-normal">dba</span> <a class="hover:underline font-semibold" href="https://calltheory.com">Call Theory</a>
                                        </p>
                                        <p>PO Box 2051</p>
                                        <p>Dublin, OH 43017</p>
                                    </dd>
                                </div>
                                <div class="mt-6">
                                    <dt class="sr-only">Phone number</dt>
                                    <dd class="flex">
                                        <!-- Heroicon name: phone -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-purple-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        <span class="ml-3">+1 (888) 966-9830</span>
                                    </dd>
                                </div>
                                <div class="my-3">
                                    <dt class="sr-only">Phone number</dt>
                                    <dd class="flex">
                                        <!-- Heroicon name: phone -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-purple-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        <span class="ml-3">+1 614-682-7015</span>
                                    </dd>
                                </div>


                                <div class="mt-3">
                                    <dt class="sr-only">Email</dt>
                                    <dd class="flex">
                                        <!-- Heroicon name: mail -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-purple-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <span class="ml-3">support@notifi.us</span>
                                    </dd>
                                </div>
                            </dl>
                            <div class="my-3 mx-auto text-left">
                                <a title="Find us on Facebook" class="text-purple-300 hover:text-purple-500 mx-1" href="https://www.facebook.com/CallTheory">
                                    <i class="fab fa-facebook"></i>
                                </a>

                                <a title="Follow us on Twitter" class="text-purple-300 hover:text-purple-500 mx-1" href="https://twitter.com/CallTheory">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <!-- Please, noooooooo -->
                                <a title="Join us on LinkedIn" class="text-purple-300 hover:text-purple-500 mx-1" href="https://www.linkedin.com/company/calltheory">
                                    <i class="fab fa-linkedin"></i>
                                </a>

                                <a title="Open source on Github" class="text-purple-300 hover:text-purple-500 mx-1" href="https://github.com/notifius">
                                    <i class="fab fa-github"></i>
                                </a>

                                <a title="Open source on Github" class="text-purple-300 hover:text-purple-500 mx-1" href="https://github.com/calltheory">
                                    <i class="fab fa-github-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12 border-l-4 border-dashed border-purple-500">
                        <div class="max-w-lg mx-auto lg:max-w-none">
                            <form action="/thank-you" method="POST" name="notifi.us/contact" data-netlify="true" class="grid grid-cols-1 gap-y-6">
                                <div>
                                    <label for="full_name" class="sr-only">Full name</label>
                                    <input type="text" name="full_name" id="full_name" autocomplete="name" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Full name">
                                </div>
                                <div>
                                    <label for="email" class="sr-only">Email</label>
                                    <input id="email" name="email" type="email" autocomplete="email" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Email">
                                </div>
                                <div>
                                    <label for="phone" class="sr-only">Phone</label>
                                    <input type="text" name="phone" id="phone" autocomplete="tel" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Phone">
                                </div>
                                <div>
                                    <label for="message" class="sr-only">Message</label>
                                    <textarea id="message" name="message" rows="4" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Message"></textarea>
                                </div>
                                <div>
                                    <button class="px-6 block text-center text-purple-100 shadow bg-purple-700 px-3 py-3 hover:bg-purple-900 hover:text-white font-semibold" type="submit">
                                        <i class="fas fa-paper-plane text-purple-300"></i> Submit Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



    </div>

@endsection
