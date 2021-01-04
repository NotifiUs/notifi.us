@extends('_layouts.master')
@section('title', 'About')
@section('body')

    <div class="max-w-6xl mx-auto">
        <div class="bg-white">
            <div class="max-w-6xl mx-auto py-8 xl:py-16 px-4 sm:px-6 lg:px-8 w-full">
                <div class="bg-gradient rounded-lg shadow-xl overflow-hidden lg:grid lg:grid-cols-2 lg:gap-4  mx-auto">
                    <div class="pt-10 pb-12 px-6 sm:pt-16 sm:px-16 lg:py-16 lg:pr-0 xl:py-20 xl:px-20">
                        <div class="lg:self-center">
                            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                                <span class="block text-white">Company </span>
                                <span class="block text-indigo-900">Information</span>
                            </h2>
                            <p class="mt-4 text-lg leading-6 text-white">
                                This section provides additional details about the legal and operational status of NotifiUs, LLC dba Call Theory.
                            </p>
                            <a title="Contact us" alt="Contact us"
                               class=" block text-lg text-purple-100 inline-block shadow bg-purple-700 mt-6 px-5 py-3 hover:bg-purple-900 hover:text-white font-bold"
                               href="/contact">
                                <i class="fas fa-envelope text-purple-300"></i> Contact information
                            </a>

                        </div>
                    </div>
                    <div class="-mt-6 aspect-w-5 aspect-h-3 md:aspect-w-2 md:aspect-h-1">
                        <img
                             class="transform translate-x-6 translate-y-6 rounded-md object-cover object-left-top sm:translate-x-16 lg:translate-y-20"
                             src="/assets/images/example-callcenter-trunk.png" title="Promotions" alt="Call Theory">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="mx-auto max-w-6xl flex">
        <div class="mb-16 bg-white">
            <div class="mx-auto px-4 sm:px-6 lg:px-8">

                <div class="text-center lg:text-center">
                    <!--
                    <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">
                       What Defines You
                    </h2>
                    -->
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Company Values
                    </p>

                    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                        These are the motivations, ideas, values, and goals that drive my business decision-making and focus.
                    </p>
                </div>



                <div class="mt-10">
                    <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-alt text-white">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path></svg>


                                </div>
                            </div>
                            <div class="ml-4">
                                <dt class="text-lg leading-6 font-medium text-gray-900">
                                   Open & Transparent
                                </dt>
                                <dd class="mt-2 text-base text-gray-500">
                                    These values come through in both our products (open-source software) and our every-day interactions with our customers, vendors, and peers.
                                    This page is a testament to the information we make available for anyone to see about our company, and we hope to continue expanding what metrics display here.
                                </dd>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-alt text-white">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path></svg>

                                </div>
                            </div>
                            <div class="ml-4">
                                <dt class="text-lg leading-6 font-medium text-gray-900">
                                    Adaptable & Iterative
                                </dt>
                                <dd class="mt-2 text-base text-gray-500">
                                    The COVID-19 pandemic threw a wrench in my previous business plans. While I've adapted and continue to make improvements in my strategy, I was only able to do this through feedback and iteration from clients.
                                    This feedback loop is imperative to my ongoing decision making.

                                </dd>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-alt text-white">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"></path></svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <dt class="text-lg leading-6 font-medium text-gray-900">
                                    Promote Best Practices
                                </dt>
                                <dd class="mt-2 text-base text-gray-500">
                                    The easiest way to promote best-practices is to follow them yourself as a role-model for others.
                                    Doing so will foster discussion and promote awareness of normal security, infrastructure, and application protocols.
                                </dd>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-alt text-white">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>

                                </div>
                            </div>
                            <div class="ml-4">
                                <dt class="text-lg leading-6 font-medium text-gray-900">
                                    Attention to People
                                </dt>
                                <dd class="mt-2 text-base text-gray-500">
                                    The call center and answering service industries have a stigma to overcome.
                                    As a result, I believe you must design products and services that cater to the usability by callers, call centers, agents, and clients - sweat the details so they don't have to.

                                </dd>
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

    </div>

    <div class="mx-auto max-w-6xl flex">
        <div class=" bg-white mx-auto">
            <div class="mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center lg:text-center">
                    <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">
                        (More coming soon)
                    </h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Company Metrics
                    </p>
                    <p class="mt-4 mb-8 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                        A selection of business metrics for NotifiUs, LLC
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-6xl">
        <div class="w-full flex-wrap  px-8"> <!-- lg:w-3/5 -->

            <div>
                <dl class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                    <div class="bg-gray-50 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Company Name
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                NotifiUs, LLC <a class="text-purple-500 hover:text-purple-700 text-sm" href="/assets/files/notifius-llc-articles-of-organization.pdf"><i class="far fa-file-pdf"></i></a>
                            </dd>
                        </div>
                    </div>

                    <div class="bg-gray-50 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Doing Business As (DBA)
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                Call Theory <a class="text-purple-500 hover:text-purple-700 text-sm" href="/assets/files/notifius-llc-trade-name-registration-call-theory.pdf"><i class="far fa-file-pdf"></i></a>
                            </dd>
                        </div>
                    </div>

                    <div class="bg-gray-50 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Company Logo
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                               <img class="block h-10"  src="/assets/images/notifius.png" title="NotifiUs, LLC" alt="NotifiUs, LLC">
                            </dd>
                        </div>
                    </div>

                    <div class="bg-gray-50 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Call Theory Logo
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                <img class="h-10 block" src="/assets/images/call-theory.png" title="Call Theory" alt="Call Theory">
                            </dd>
                        </div>
                    </div>

                    <div class="bg-gray-50 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Business Registration
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                State of Ohio
                            </dd>
                        </div>
                    </div>

                    <div class="bg-gray-50 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                LLC Member(s)
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                Patrick Labbett
                            </dd>
                        </div>
                    </div>

                    <div class="bg-gray-50 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                D-U-N-S&reg; Number
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                117634843
                            </dd>
                        </div>
                    </div>

                    <div class="bg-gray-50 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Certificate of Liability Insurance
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                Download <a class="text-purple-500 hover:text-purple-700 text-sm" href="/assets/files/notifius-llc-certificate-of-insurance.pdf"><i class="far fa-file-pdf"></i></a>
                            </dd>
                        </div>
                    </div>

                    <div class="bg-gray-50 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                E&O Coverage Per Claim
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                $1MM
                            </dd>
                        </div>
                    </div>


                    <div class="bg-gray-50 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Certificate of Good Standing
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                Download <a class="text-purple-500 hover:text-purple-700 text-sm" href="/assets/files/notifius-llc-certificate-of-good-standing.pdf"><i class="far fa-file-pdf"></i></a>
                            </dd>
                        </div>
                    </div>

                    <div class="bg-gray-50 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                IRS Form W-9
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-300">
                                Coming Soon
                            </dd>
                        </div>
                    </div>

                    <div class="bg-gray-50 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                MRR
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-300">
                                Coming Soon
                            </dd>
                        </div>
                    </div>

                    <div class="bg-gray-50 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Annual Revenue
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-300">
                                Coming Soon
                            </dd>
                        </div>
                    </div>

                </dl>
            </div>

        </div>
        <div class="w-full py-8 xl:pb-8 px-4">
            @include('_layouts.product-timeline')
        </div>
    </div>









@endsection
