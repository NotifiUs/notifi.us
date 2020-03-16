@extends('_layouts.master')
@section('title', 'Services')
@section('body')

    @include('_layouts.hero-services')

    <h3 class="px-4 text-center text-3xl text-gray-600 font-hairline font-sans my-12">
        Our Products &amp; Services
        <small class="block text-gray-500">
            A collection of unique ways to level up your call center
        </small>
    </h3>

    <div class="container my-12 mx-auto max-w-5xl">

        <div class="flex flex-wrap text-center">
            <h5 class="px-4 my-6 w-full text-left text-lg text-gray-600 font-bold">
               Call Theory Universe &middot; <span class="text-gray-400">A set of subscription services that can be purchased individually or bundled</span>
            </h5>
            <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 my-3 mx-auto px-2">
                <div class="py-12 px-4 mx-2 border border-indigo-200 h-full bg-indigo-100 rounded shadow">
                    <i class="fas my-2 fa-5x fa-meteor text-indigo-500"></i>
                    <h5 class="text-2xl text-indigo-700 font-bold">
                        Call Theory Universe
                    </h5>

                    <p class="block text-indigo-500 text-center mb-6">
                        Our premium support and services bundle.
                    </p>

                    <div class="mt-4">
                        <a href="https://calltheory.com/register" alt="Sign up at calltheory.com" class="rounded-lg mx-auto text-sm uppercase text-indigo-100 shadow bg-indigo-700 px-4 py-2 hover:bg-indigo-900 hover:text-white font-bold w-auto block lg:inline">
                            <i class="fas fa-check-circle text-indigo-300"></i> Subscribe
                        </a>&nbsp;
                        <a href="https://calltheory.com" alt="Learn more about Call Theory" class="rounded-lg mx-auto text-sm uppercase text-blue-300 shadow bg-gray-100 px-4 py-2 hover:bg-blue-200 hover:text-blue-600 font-bold w-auto block lg:inline">
                            <i class="fas fa-info-circle text-blue-300"></i> Learn More
                        </a>

                        <small class="block my-5 text-gray-500">
                            Level up your call center
                        </small>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 my-3 mx-auto px-2">
                <div class="py-12 px-4 mx-2 bg-indigo-100 rounded shadow border border-indigo-200 h-full">
                    <i class="fas my-2  fa-5x fa-book text-indigo-500"></i>
                    <h5 class="text-2xl text-indigo-700 font-bold">
                        Call Theory Documentation
                    </h5>

                    <p class="block text-indigo-500 text-center mb-6">
                        Learn the technology that runs your call center.
                    </p>

                    <div class="mt-4">
                        <a href="https://calltheory.com/register" alt="Sign up at calltheory.com" class="rounded-lg mx-auto text-sm uppercase text-indigo-100 shadow bg-indigo-700 px-4 py-2 hover:bg-indigo-900 hover:text-white font-bold w-auto block lg:inline">
                            <i class="fas fa-check-circle text-indigo-300"></i> Subscribe
                        </a>&nbsp;
                        <a href="https://calltheory.com" alt="Learn more about Call Theory" class="rounded-lg mx-auto text-sm uppercase text-blue-300 shadow bg-gray-100 px-4 py-2 hover:bg-blue-200 hover:text-blue-600 font-bold w-auto block lg:inline">
                            <i class="fas fa-info-circle text-blue-300"></i> Learn More
                        </a>

                        <small class="block my-5 text-gray-500">
                            <i class="fas fa-meteor text-indigo-400"></i> Included in <span class="font-semibold">Call Theory Universe</span> bundle
                        </small>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 my-3 mx-auto px-2">
                <div class="py-12 px-4 mx-2 bg-indigo-100 rounded shadow border border-indigo-200 h-full">
                    <i class="fas my-2 fa-5x fa-life-ring text-indigo-500"></i>
                    <h5 class="text-2xl text-indigo-700 font-bold">
                        Call Theory Support
                    </h5>

                    <p class="block text-indigo-500 text-center mb-6">
                        <i>Done With You</i> business hours phone and email support.
                    </p>

                    <div class="mt-4">
                        <a href="https://calltheory.com/register" alt="Sign up at calltheory.com" class="rounded-lg mx-auto text-sm uppercase text-indigo-100 shadow bg-indigo-700 px-4 py-2 hover:bg-indigo-900 hover:text-white font-bold w-auto block lg:inline">
                            <i class="fas fa-check-circle text-indigo-300"></i> Subscribe
                        </a>&nbsp;
                        <a href="https://calltheory.com" alt="Learn more about Call Theory" class="rounded-lg mx-auto text-sm uppercase text-blue-300 shadow bg-gray-100 px-4 py-2 hover:bg-blue-200 hover:text-blue-600 font-bold w-auto block lg:inline">
                            <i class="fas fa-info-circle text-blue-300"></i> Learn More
                        </a>

                        <small class="block my-5 text-gray-500">
                            <i class="fas fa-meteor text-indigo-400"></i> Available exclusively in <span class="font-semibold">Call Theory Universe</span> bundle
                        </small>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 my-3 mx-auto px-2">
                <div class="py-12 px-4 mx-2 bg-indigo-100 rounded shadow border border-indigo-200 h-full">
                    <i class="fas my-2 fa-5x fa-clipboard-check text-indigo-500"></i>
                    <h5 class="text-2xl text-indigo-700 font-bold">
                        Hourly Check
                    </h5>

                    <p class="block text-indigo-500 text-center mb-6">
                        Verify customers are receiving SMS, fax, email, web, and pages.
                    </p>

                    <div class="mt-4">
                        <a href="https://hourlycheck.com" alt="Sign up at hourlycheck.com" class="rounded-lg mx-auto text-sm uppercase text-indigo-100 shadow bg-indigo-700 px-4 py-2 hover:bg-indigo-900 hover:text-white font-bold w-auto block lg:inline">
                            <i class="fas fa-check-circle text-indigo-300"></i> Subscribe
                        </a>&nbsp;
                        <a href="https://hourlycheck.com" alt="Learn more about Hourly Check" class="rounded-lg mx-auto text-sm uppercase text-blue-300 shadow bg-gray-100 px-4 py-2 hover:bg-blue-200 hover:text-blue-600 font-bold w-auto block lg:inline">
                            <i class="fas fa-info-circle text-blue-300"></i> Learn More
                        </a>

                        <small class="block my-5 text-gray-500">
                            <i class="fas fa-meteor text-indigo-400"></i> Included in <span class="font-semibold">Call Theory Universe</span> bundle
                        </small>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 my-3 mx-auto px-2">
                <div class="py-12 px-4 mx-2 bg-indigo-100 rounded shadow border border-indigo-200 h-full">
                    <i class="fas my-2 fa-5x fa-sms text-indigo-500"></i>
                    <h5 class="text-2xl text-indigo-700 font-bold">
                        WCTP Gateway
                    </h5>

                    <p class="block text-indigo-500 text-center mb-6">
                        An open-source SMS gateway for Amtelco systems.
                    </p>

                    <div class="mt-4">
                        <a href="https://wctp.io" alt="Learn more at wctp.io" class="rounded-lg mx-auto text-sm uppercase text-indigo-100 shadow bg-indigo-700 px-4 py-2 hover:bg-indigo-900 hover:text-white font-bold w-auto block lg:inline">
                            <i class="fas fa-info-circle text-indigo-300"></i> Learn More
                        </a>&nbsp;
                        <a href="https://github.com/NotifiUs/wctp-gateway" alt="View code on Github" class="rounded-lg mx-auto text-sm uppercase text-blue-300 shadow bg-gray-100 px-4 py-2 hover:bg-blue-200 hover:text-blue-600 font-bold w-auto block lg:inline">
                            <i class="fas fa-code-branch text-blue-300"></i> View Code
                        </a>

                        <small class="block my-5 text-gray-500">
                            <i class="fas fa-meteor text-indigo-400"></i> Managed hosting included with <span class="font-semibold">Call Theory Universe</span> bundle
                        </small>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 my-3 mx-auto px-2">
                <div class="py-12 px-4 mx-2 bg-indigo-100 rounded shadow border border-indigo-200 h-full">
                    <i class="fas my-2 fa-5x fa-chart-pie text-indigo-500"></i>
                    <h5 class="text-2xl text-indigo-700 font-bold">
                        Call Center KPI Dashboard
                    </h5>

                    <p class="block text-indigo-500 text-center mb-6">
                        Real-time KPI dashboard for Amtelco call centers.
                    </p>

                    <div class="mt-4">
                        <a href="https://callcenterkpi.com" alt="Learn more at callcenterkpi.com" class="rounded-lg mx-auto text-sm uppercase text-indigo-100 shadow bg-indigo-700 px-4 py-2 hover:bg-indigo-900 hover:text-white font-bold w-auto block lg:inline">
                            <i class="fas fa-calendar text-indigo-300"></i> Schedule Demo
                        </a>

                        <small class="block my-5 text-gray-500">
                            <i class="fas fa-meteor text-indigo-400"></i> Setup and management included with <span class="font-semibold">Call Theory Universe</span> bundle
                        </small>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 my-3 mx-auto px-2">
                <div class="py-12 px-4 mx-2 bg-indigo-100 rounded shadow border border-indigo-200 h-full">
                    <i class="fas my-2 fa-5x fa-microscope text-indigo-500"></i>
                    <h5 class="text-2xl text-indigo-700 font-bold">
                        Technical Skill Assessment
                    </h5>

                    <p class="block text-indigo-500 text-center mb-6">
                        Get help interviewing and evaluating your technical hires.
                    </p>

                    <div class="mt-4">
                        <a href="https://store.calltheory.com/products/technical-skill-assessment" alt="Buy directly at store.calltheory.com" class="rounded-lg mx-auto text-sm uppercase text-indigo-100 shadow bg-indigo-700 px-4 py-2 hover:bg-indigo-900 hover:text-white font-bold w-auto block lg:inline">
                            <i class="fas fa-shopping-bag text-indigo-300"></i> Buy Now
                        </a>&nbsp;
                        <a href="/assess" alt="Learn more about technical assessments" class="rounded-lg mx-auto text-sm uppercase text-blue-300 shadow bg-gray-100 px-4 py-2 hover:bg-blue-200 hover:text-blue-600 font-bold w-auto block lg:inline">
                            <i class="fas fa-info-circle text-blue-300"></i> Learn More
                        </a>

                        <small class="block my-5 text-gray-500">
                            <i class="fas fa-meteor text-indigo-400"></i> Included in <span class="font-semibold">Call Theory Universe</span> bundle
                        </small>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 my-3 mx-auto px-2">
                <div class="py-12 px-4 mx-2 bg-indigo-100 rounded shadow border border-indigo-200 h-full">
                    <i class="fas my-2 fa-5x fa-shopping-cart text-indigo-500"></i>
                    <h5 class="text-2xl text-indigo-700 font-bold">
                        Call Center Scripting
                    </h5>

                    <p class="block text-indigo-500 text-center mb-6">
                        Purchase call center scripting, artwork, and more.
                    </p>

                    <div class="mt-4">
                        <a href="https://store.calltheory.com/collections/scripting" alt="Buy at store.calltheory.com" class="rounded-lg mx-auto text-sm uppercase text-indigo-100 shadow bg-indigo-700 px-4 py-2 hover:bg-indigo-900 hover:text-white font-bold w-auto block lg:inline">
                            <i class="fas fa-shopping-bag text-indigo-300"></i> Buy Scripting
                        </a>&nbsp;
                        <a href="https://store.calltheory.com/collections/artwork" alt="Browse art for your office" class="rounded-lg mx-auto text-sm uppercase text-blue-300 shadow bg-gray-100 px-4 py-2 hover:bg-blue-200 hover:text-blue-600 font-bold w-auto block lg:inline">
                            <i class="fas fa-palette text-blue-300"></i> Browse Artwork
                        </a>

                        <small class="block my-5 text-gray-500">
                            <i class="fas fa-meteor text-indigo-400"></i> Scripting and digital art included in <span class="font-semibold">Call Theory Universe</span> bundle
                        </small>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="bg-gray-300 py-8 my-12 mx-auto w-full content-start">

        <div class="flex flex-wrap text-center max-w-5xl mx-auto px-2">
            <h5 class="px-4 my-6 w-full text-left text-lg text-gray-600 font-extrabold">
                Call Center Technical Help &middot; <span class="text-gray-400">Information technology consulting, engineering, and development</span>
            </h5>
            <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 my-3 mx-auto">
                <div class="py-12 px-4 mx-2 bg-gray-100 rounded shadow border border-purple-300 h-full">
                    <i class="fas my-2 fa-5x fa-cloud text-purple-500"></i>
                    <h5 class="text-2xl text-indigo-700 font-bold">
                        Cloud Services
                    </h5>

                    <p class="block text-indigo-500 text-center mb-6">
                        Get help planning and executing your move to the cloud.
                    </p>

                    <div class="mt-4">
                        <a href="/cloud" alt="Learn about cloud services" class="rounded-lg mx-auto text-sm uppercase text-purple-100 shadow bg-purple-700 px-4 py-2 hover:bg-purple-900 hover:text-white font-bold w-auto block lg:inline">
                            <i class="fas fa-info-circle text-purple-300"></i> Learn more
                        </a>

                        <small class="block my-5 text-gray-500">
                            Amazon AWS, Microsoft Azure, Google Cloud Platform
                        </small>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 my-3 mx-auto">
                <div class="py-12 px-4 mx-2 bg-gray-100 rounded shadow border border-purple-300 h-full">
                    <i class="fas my-2 fa-5x fa-globe text-purple-500"></i>
                    <h5 class="text-2xl text-indigo-700 font-bold">
                        Genesis Migration
                    </h5>

                    <p class="block text-indigo-500 text-center mb-6">
                        Moving from Infinity to Genesis? We can help.
                    </p>

                    <div class="mt-4">
                        <a href="/genesis" alt="Learn about Genesis migrations" class="rounded-lg mx-auto text-sm uppercase text-purple-100 shadow bg-purple-700 px-4 py-2 hover:bg-purple-900 hover:text-white font-bold w-auto block lg:inline">
                            <i class="fas fa-info-circle text-purple-300"></i> Learn more
                        </a>

                        <small class="block my-5 text-gray-500">
                            Amtelco Genesis Soft Switch
                        </small>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 my-3 mx-auto">
                <div class="py-12 px-4 mx-2 bg-gray-100 rounded shadow border border-purple-300 h-full">
                    <i class="fas my-2 fa-5x fa-code text-purple-500"></i>
                    <h5 class="text-2xl text-indigo-700 font-bold">
                        Software Development
                    </h5>

                    <p class="block text-indigo-500 text-center mb-6">
                        Custom websites and applications that will blow you away.
                    </p>

                    <div class="mt-4">
                        <a href="/custom" alt="Learn about custom software development" class="rounded-lg mx-auto text-sm uppercase text-purple-100 shadow bg-purple-700 px-4 py-2 hover:bg-purple-900 hover:text-white font-bold w-auto block lg:inline">
                            <i class="fas fa-info-circle text-purple-300"></i> Learn more
                        </a>

                        <small class="block my-5 text-gray-500">
                            Check out our code on <a class="font-semibold" href="https://github.com/NotifiUs">Github</a>
                        </small>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 my-3 mx-auto">
                <div class="py-12 px-4 mx-2 bg-gray-100 rounded shadow border border-purple-300 h-full">
                    <i class="fas my-2 fa-5x fa-headset text-purple-500"></i>
                    <h5 class="text-2xl text-indigo-700 font-bold">
                        Telephony Setup
                    </h5>

                    <p class="block text-indigo-500 text-center mb-6">
                        Get help with your telecom infrastructure.
                    </p>

                    <div class="mt-4">
                        <a href="/telecom" alt="Learn about telephony support" class="rounded-lg mx-auto text-sm uppercase text-purple-100 shadow bg-purple-700 px-4 py-2 hover:bg-purple-900 hover:text-white font-bold w-auto block lg:inline">
                            <i class="fas fa-info-circle text-purple-300"></i> Learn more
                        </a>

                        <small class="block my-5 text-gray-500">
                            SIP, PSTN, ISDN PRI, remote users, and more
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-100 py-8 my-12 mx-auto w-full">

        <div class="flex flex-wrap text-center max-w-5xl mx-auto px-2">

            <h5 class="px-4 my-6 w-full text-left text-lg text-gray-600 font-extrabold">
                Stand-Alone Services &middot; <span class="text-gray-400">Unique products and services to help you level up</span>
            </h5>

            <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 my-3">
                <div class="py-12 px-4 mx-2 bg-blue-100 rounded shadow border border-blue-400 h-full">
                    <i class="fas my-2 fa-5x fa-gift text-blue-500"></i>
                    <h5 class="text-2xl text-indigo-700 font-bold">
                        Call Center Trunk
                    </h5>

                    <p class="block text-indigo-500 text-center mb-6">
                        Employee appreciation for call centers made easy
                    </p>

                    <div class="mt-4">
                        <a href="https://callcentertrunk.com" alt="Learn more at callcentertrunk.com" class="rounded-lg mx-auto text-sm uppercase text-blue-100 shadow bg-blue-700 px-4 py-2 hover:bg-blue-900 hover:text-white font-bold w-auto block lg:inline">
                            <i class="fas fa-info-circle text-blue-300"></i> Learn more
                        </a>

                        <small class="block my-5 text-gray-500">
                            20% revenue contributed to NAEO Relief Fund
                        </small>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 my-3">
                <div class="py-12 px-4 mx-2 bg-blue-100 rounded shadow border border-blue-400 h-full">
                    <i class="fas my-2 fa-5x fa-user-ninja text-blue-500"></i>
                    <h5 class="text-2xl text-indigo-700 font-bold">
                        Security Awareness Training
                    </h5>

                    <p class="block text-indigo-500 text-center mb-6">
                        Digital security training for call centers
                    </p>

                    <div class="mt-4">
                        <a href="https://tas.ninja" alt="Learn more at tasninja.com" class="rounded-lg mx-auto text-sm uppercase text-blue-100 shadow bg-blue-700 px-4 py-2 hover:bg-blue-900 hover:text-white font-bold w-auto block lg:inline">
                            <i class="fas fa-info-circle text-blue-300"></i> Learn more
                        </a>

                        <small class="block my-5 text-gray-500">
                            Available to NAEO and ATSI associations
                        </small>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 my-3 mx-auto">
                <div class="py-12 px-4 mx-2 bg-blue-100 rounded shadow border border-blue-400 h-full">
                    <i class="fas my-2 fa-5x fa-key text-blue-500"></i>
                    <h5 class="text-2xl text-indigo-700 font-bold">
                        NotifiUs Encrypt
                    </h5>

                    <p class="block text-indigo-500 text-center mb-6">
                        Stop sending sensitive information directly in emails
                    </p>

                    <div class="mt-4">
                        <a href="https://encrypt.notifi.us" alt="Learn more at encrypt.notifi.us" class="rounded-lg mx-auto text-sm uppercase text-blue-100 shadow bg-blue-700 px-4 py-2 hover:bg-blue-900 hover:text-white font-bold w-auto block lg:inline">
                            <i class="fas fa-info-circle text-blue-300"></i> Learn more
                        </a>

                        <small class="block my-5 text-gray-500">
                            Free, simple-to-use encryption for anyone!
                        </small>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 my-3 mx-auto">
                <div class="py-12 px-4 mx-2 bg-blue-100 rounded shadow border border-blue-400 h-full">
                    <i class="fas my-2 fa-5x fa-trophy text-blue-500"></i>
                    <h5 class="text-2xl text-indigo-700 font-bold">
                        Call Center Score
                    </h5>

                    <p class="block text-indigo-500 text-center mb-6">
                        Transparent call center performance scoring
                    </p>

                    <div class="mt-4">
                        <a href="https://callcenterscore.com" alt="Learn more at callcenterscore.com" class="rounded-lg mx-auto text-sm uppercase text-blue-100 shadow bg-blue-700 px-4 py-2 hover:bg-blue-900 hover:text-white font-bold w-auto block lg:inline">
                            <i class="fas fa-info-circle text-blue-300"></i> Learn more
                        </a>

                        <small class="block my-5 text-gray-500">
                            Coming Summer 2020
                        </small>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <h3 class="text-center text-3xl text-gray-400 font-hairline font-sans my-12">
        <!-- Call Theory Universe Breakdown -->
    </h3>

    <div class="container my-12 mx-auto max-w-3xl">
        <!--
        <table class="mx-auto w-full text-center">
            <thead class="text-purple-800 border-b mb-16 border-purple-300">
            <tr>
                <th class="text-left p-2">
                    Service
                </th>
                <th class="p-2 whitespace-no-wrap">
                    A-La-Carte
                </th>
                <th class="p-2">
                    Setup
                </th>
                <th class="p-2">
                    Monthly
                </th>
                <th class="p-2">
                    Annually
                </th>
                <th class="p-2">
                    Universe
                </th>
            </tr>
            </thead>
            <tbody class="mt-4">
            <tr class="bg-gray-200">
                <td class="text-left p-2">
                    <span class="font-semibold">Call Center Documentation</span>
                    <br>
                    <small>Online, searchable technical documentation for call centers</small>
                </td>
                <td class="p-2">
                    &mdash;
                </td>
                <td class="p-2">
                    &mdash;
                </td>
                <td class="p-2">
                    $120
                </td>
                <td class="p-2">
                    $1200
                </td>
                <td class="p-2">
                    <i class="fas fa-check text-purple-500"></i>
                </td>
            </tr>
            <tr>
                <td class="text-left p-2">
                    <span class="font-semibold"><i>Done With You</i> Support</span>
                    <br>
                    <small>Roughly 4 hours of one-on-one (or group) technical assistance per month</small>
                </td>
                <td class="p-2">
                    &mdash;
                </td>
                <td class="p-2">
                    &mdash;
                </td>
                <td class="p-2">
                    $500
                </td>
                <td class="p-2">
                    $5000
                </td>
                <td class="p-2">
                    <i class="fas fa-check text-purple-500"></i>
                </td>
            </tr>
            <tr class="bg-gray-200">
                <td class="text-left p-2">
                    <span class="font-semibold">SMS Aggregator Hosting</span>
                    <br>
                    <small>We host an instance of the open-source SMS aggregator for Amtelco - just bring your carrier</small>
                </td>
                <td class="p-2">
                    &mdash;
                </td>
                <td class="p-2">
                    $500
                </td>
                <td class="p-2">
                    $60
                </td>
                <td class="p-2">
                    $600
                </td>
                <td class="p-2">
                    <i class="fas fa-check text-purple-500"></i>
                </td>
            </tr>
            <tr>
                <td class="text-left p-2">
                    <span class="font-semibold">Hourly Delivery Checks</span>
                    <br>
                    <small>Check your SMS, email, fax, paging, and website are working every hour</small>
                </td>
                <td class="p-2">
                    &mdash;
                </td>
                <td class="p-2">
                    $100
                </td>
                <td class="p-2">
                    $130
                </td>
                <td class="p-2">
                    $1300
                </td>
                <td class="p-2">
                    <i class="fas fa-check text-purple-500"></i>
                </td>
            </tr>
            <tr class="bg-gray-200">
                <td class="text-left p-2">
                    <span class="font-semibold">Realtime KPI Dashboard</span>
                    <br>
                    <small>We install and manage the real-time <a href="https://callcenterkpi.com">call center KPI dashboard</a> on your server</small>
                </td>
                <td class="p-2">
                    &mdash;
                </td>
                <td class="p-2">
                    $500
                </td>
                <td class="p-2">
                    $50
                </td>
                <td class="p-2">
                    $600
                </td>
                <td class="p-2">
                    <i class="fas fa-check text-purple-500"></i>
                </td>
            </tr>
            <tr>
                <td class="text-left p-2">
                    <span class="font-semibold">Scripting Library</span>
                    <br>
                    <small>IVR call flows, industry templates, and scripting for Amtelco's Intelligent Series platform</small>
                </td>
                <td class="p-2">
                    Varies
                </td>
                <td class="p-2">
                    &mdash;
                </td>
                <td class="p-2">
                    &mdash;
                </td>
                <td class="p-2">
                    &mdash;
                </td>
                <td class="p-2">
                    <i class="fas fa-check text-purple-500"></i>
                </td>
            </tr>
            <tr class="bg-gray-200">
                <td class="text-left p-2">
                    <span class="font-semibold">Technical Skill Assessment</span>
                    <br>
                    <small>We'll interview and evaluate your technical employees or applicants</small>
                </td>
                <td class="p-2">
                    $225
                </td>
                <td class="p-2">
                    &mdash;
                </td>
                <td class="p-2">
                    &mdash;
                </td>
                <td class="p-2">
                    &mdash;
                </td>
                <td class="p-2">
                    <i class="fas fa-check text-purple-500"></i>
                </td>
            </tr>
            </tbody>
        </table>

        <table class="mx-auto w-full text-center my-8">
            <tbody>
            <tr class="bg-orange-100 rounded shadow border border-orange-200">
                <td class="text-left p-2">
                    <span class="font-semibold">All Services</span>
                    <br>
                    <small>Total cost for all services purchased individually</small>
                </td>
                <td class="p-2 text-2xl  text-orange-300">
                    $860
                </td>
                <td class="p-2 text-2xl text-orange-300">
                    $8700
                </td>
            </tr>
            <tr class="bg-green-200 rounded shadow border border-green-300">
                <td class="text-left p-2">
                    <span class="font-semibold">Call Theory Unlimited</span>
                    <br>
                    <small>Premium subscription bundle</small>
                </td>

                <td class="p-2 text-2xl">
                    <strong class="text-green-500">
                        $600
                    </strong>
                </td>

                <td class="p-2 text-2xl">
                    <strong class="text-green-500">
                        $7200
                    </strong>
                </td>
            </tr>
            </tbody>
        </table>
        -->
    </div>



@endsection
