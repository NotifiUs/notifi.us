@extends('_layouts.master')
@section('title', 'Services')
@section('body')

    <div class="bg-white">
        <div class="max-w-6xl mx-auto py-8 xl:py-16 px-4 sm:px-6 lg:px-8 w-full">
            <div class="bg-gradient rounded-lg shadow-xl overflow-hidden lg:grid lg:grid-cols-2 lg:gap-4">
                <div class="pt-10 pb-12 px-6 sm:pt-16 sm:px-16 lg:py-16 lg:pr-0 xl:py-20 xl:px-20">
                    <div class="lg:self-center">
                        <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                            <span class="block text-white">Open-Source</span>
                            <span class="block text-indigo-900">SMS Aggregator</span>
                        </h2>
                        <p class="mt-4 text-lg leading-6 text-white">
                            An SMS platform ardently crafted for the Amtelco community. Become your own SMS aggregator using Twilio, ThinQ, and more.
                        </p>
                        <a href="#pricingtable"
                           class="mt-8 bg-white border border-transparent shadow px-6 py-3 inline-flex items-center text-base font-medium text-indigo-600 hover:bg-indigo-50">
                            Pricing & Features
                        </a>

                        <a href="https://calendly.com/call-theory/quick-call" target="_blank"
                           class="mt-8 bg-indigo-700 border border-transparent hover:text-white shadow px-6 py-3 inline-flex items-center text-base font-medium text-indigo-100 hover:bg-indigo-900">
                            Questions? Schedule a call
                        </a>
                    </div>
                </div>
                <div class="-mt-6 aspect-w-5 aspect-h-3 md:aspect-w-2 md:aspect-h-1">
                    <img class="transform translate-x-6 translate-y-6 rounded-md object-cover object-left-top sm:translate-x-16 lg:translate-y-20"
                         src="/assets/images/wctp_admin.png" alt="WCTP Gateway for Amtelco Systems">
                </div>
            </div>
        </div>
    </div>


    <div class="bg-white" id="pricingtable">

        <div class="max-w-6xl mx-auto bg-white pt-4 pb-16 px-4 sm:px-8 lg:px-12">
            <!-- xs to lg -->
            <div class=" mx-auto lg:hidden"> <!--lg:hidden-->
                <div class="px-4">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Open-Source</h2>
                    <p class="mt-4">
                        <span class="text-4xl font-extrabold text-gray-900">$0</span>
                        <span class="text-base font-medium text-gray-500">/forever</span>
                    </p>
                    <p class="mt-4 text-sm text-gray-500">Free, open-source WCTP gateway software using the MIT license.</p>
                    <a href="https://github.com/notifius/wctp-gateway" class="mt-6 block  w-full py-2 text-sm font-semibold text-center bg-white text-indigo-800 hover:bg-indigo-100 hover:text-indigo-800 border-2 border-indigo-800">
                        Download Free
                    </a>

                </div>

                <table id="pricing-table" class="mt-8 w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Support & Help
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Managed Hosting</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Installation Included</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Support Included</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Software Updates</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Unlimited Users</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Application Usage
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Bring your own carrier (BYOC)</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Included phone number(s)
                        </th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">SMS segment cost</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Clear by link</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>
                    </tbody>
                </table>


                <div class="border-t border-gray-200 px-4 pt-5">
                    <a href="https://github.com/notifius/wctp-gateway" class="mt-6 block  w-full py-2 text-sm font-semibold text-center bg-white text-indigo-800 hover:bg-indigo-100 hover:text-indigo-800 border-2 border-indigo-800">
                        Download Free
                    </a>
                </div>

                <div class="border rounded-md py-4 mt-16">
                    <div class="px-4 mt-4">
                        <h2 class="text-lg leading-6 font-medium text-gray-900">Managed</h2>
                        <p class="mt-4">
                            <span class="text-4xl font-extrabold text-gray-900">39</span>
                            <span class="text-base font-medium text-gray-500">/mo</span>
                        </p>
                        <p class="mt-4 text-sm text-gray-500">Fully managed cloud hosting. Bring your own carrier accounts.</p>
                        <a href="/contact" class="mt-6 block border  w-full py-2 text-sm font-semibold text-center bg-indigo-700 border border-purple-800 py-2 text-sm font-semibold text-white text-center hover:bg-indigo-900">
                            Learn more
                        </a>
                    </div>

                    <table id="pricing-table" class="mt-8 w-full">
                        <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                            Support & Help
                        </caption>
                        <thead>
                        <tr>
                            <th class="sr-only" scope="col">Feature</th>
                            <th class="sr-only" scope="col">Included</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Managed Hosting</th>
                            <td class="py-5 pr-4">
                                <!-- Heroicon name: check -->
                                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Yes</span>
                            </td>
                        </tr>

                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Installation Included</th>
                            <td class="py-5 pr-4">
                                <!-- Heroicon name: check -->
                                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Yes</span>
                            </td>
                        </tr>

                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Support Included</th>
                            <td class="py-5 pr-4">
                                <!-- Heroicon name: check -->
                                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Yes</span>
                            </td>
                        </tr>

                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Software Updates</th>
                            <td class="py-5 pr-4">
                                <!-- Heroicon name: check -->
                                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Yes</span>
                            </td>
                        </tr>

                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Unlimited Users</th>
                            <td class="py-5 pr-4">
                                <!-- Heroicon name: check -->
                                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Unlimited</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="w-full">
                        <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                            Application Usage
                        </caption>
                        <thead>
                        <tr>
                            <th class="sr-only" scope="col">Feature</th>
                            <th class="sr-only" scope="col">Included</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Bring your own carrier (BYOC)</th>
                            <td class="py-5 pr-4">
                                <!-- Heroicon name: check -->
                                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Yes</span>
                            </td>
                        </tr>

                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Included phone number(s)
                            </th>
                            <td class="py-5 pr-4">
                              <span class="text-sm text-green-500">
                                BYOC
                            </span>
                            </td>
                        </tr>

                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">SMS segment cost</th>
                            <td class="py-5 pr-4">
                              <span class="text-sm text-green-500">
                                BYOC
                            </span>
                            </td>
                        </tr>

                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Clear by link</th>
                            <td class="py-5 pr-4">
                                <!-- Heroicon name: check -->
                                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Yes</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="border-t border-gray-200 px-4 pt-5">
                        <a href="/contact" class="mt-6 block border  w-full py-2 text-sm font-semibold text-center bg-indigo-700 border border-purple-800 py-2 text-sm font-semibold text-white text-center hover:bg-indigo-900">
                            Contact Us
                        </a>
                    </div>
                </div>

                <div class="px-4 mt-16">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Enterprise</h2>
                    <p class="mt-4">
                        <span class="text-4xl font-extrabold text-gray-900">$1,250</span>
                        <span class="text-base font-medium text-gray-500">/yr</span>
                    </p>
                    <p class="mt-4 text-sm text-gray-500">Custom on-premise installation or in your own cloud environment.</p>
                    <a href="/contact"
                       class="mt-6 block w-full bg-gray-700 border border-gray-800 py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">
                        Learn More
                    </a>
                </div>


                <table id="pricing-table" class="mt-8 w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Support & Help
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Managed Hosting</th>
                        <td class="py-5  text-right">
                            <span class="text-sm text-green-500">On-premise or your cloud</span>
                            <span class="sr-only">On-premise or your cloud</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Installation Included</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Support Included</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Software Updates</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Unlimited Users</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Unlimited</span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Application Usage
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Bring your own carrier (BYOC)</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Included phone number(s)
                        </th>
                        <td class="py-5 text-right">
                            <span class="text-sm text-green-500">
                                BYOC
                            </span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">SMS segment cost</th>
                        <td class="py-5 text-right">
                            <span class="text-sm text-green-500">
                                BYOC
                            </span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Clear by link</th>
                        <td class="ml-auto py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="border-t border-gray-200 px-4 pt-5">
                    <a href="/contact"
                       class="mt-6 block w-full bg-gray-700 border border-gray-800 py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">
                        Learn More
                    </a>
                </div>
            </div>



            <!-- lg+ -->
            <div class="hidden lg:block"> <!--hidden lg:block-->
                <table class="w-full h-px table-fixed">
                    <caption class="sr-only">
                        SMS Aggregator Price Plan Comparison
                    </caption>
                    <thead>
                    <tr>
                        <th class="pb-4 px-6 text-sm font-medium text-gray-900 text-left" scope="col">
                            <span class="sr-only">Feature by</span>
                            <span>SMS Aggregator</span>
                        </th>

                        <th class="w-1/4 pb-4 px-6 text-lg leading-6 font-medium text-gray-900 text-left" scope="col">Open-Source</th>

                        <th class="w-1/4 pb-4 px-6 text-lg leading-6 font-medium text-gray-900 text-left" scope="col">Managed</th>

                        <th class="w-1/4 pb-4 px-6 text-lg leading-6 font-medium text-gray-900 text-left" scope="col">Enterprise</th>
                    </tr>
                    </thead>
                    <tbody class="border-t border-gray-200 divide-y divide-gray-200">
                    <tr>
                        <th class="py-8 px-6 text-sm font-medium text-gray-900 text-left align-top" scope="row">Pricing</th>

                        <td class="h-full py-8 px-6 align-top">
                            <div class="relative h-full table">
                                <p>
                                    <span class="text-4xl font-extrabold text-gray-900">$0</span>
                                    <span class="text-base font-medium text-gray-500">/forever</span>
                                </p>
                                <p class="mt-4 mb-16 text-sm text-gray-500">Free, open-source SMS aggregator software using the MIT license.</p>
                                <a href="https://github.com/notifius/wctp-gateway"
                                   class="absolute bottom-0 flex-grow block w-full bg-white border-2 border-indigo-800 py-2 text-sm font-semibold text-indigo-800 text-center hover:bg-indigo-100 hover:text-indigo-800">
                                    Download Free
                                </a>
                            </div>
                        </td>

                        <td class="h-full py-8 px-6 align-top">
                            <div class="relative h-full table">
                                <p>
                                    <span class="text-4xl font-extrabold text-gray-900">$39</span>
                                    <span class="text-base font-medium text-gray-500">/mo</span>
                                </p>
                                <p class="mt-4 mb-16 text-sm text-gray-500">Fully managed cloud hosting. Bring your own carrier accounts.</p>
                                <a href="/contact" class="absolute bottom-0 flex-grow block w-full bg-indigo-700 border border-purple-800 py-2 text-sm font-semibold text-white text-center hover:bg-indigo-900">
                                    Contact Us
                                </a>
                            </div>
                        </td>

                        <td class="h-full py-8 px-6 align-top">
                            <div class="relative h-full table">
                                <p>
                                    <span class="text-4xl font-extrabold text-gray-900">$1,250</span>
                                    <span class="text-base font-medium text-gray-500">/yr</span>
                                </p>
                                <p class="mt-4 mb-16 text-sm text-gray-500">Custom on-premise installation or in your own cloud environment.</p>
                                <a href="/contact" class="absolute bottom-0 flex-grow block w-full bg-gray-700 border border-gray-800 py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">
                                   Learn More
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="bg-gray-50 py-3 pl-6 text-sm font-medium text-gray-900 text-left" colspan="4" scope="colgroup">Support & Help</th>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Managed Hosting</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>

                            <span class="sr-only">No</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                        <td class="py-5 px-6">
                            <small class="text-sm text-green-500">On-premise or your cloud</small>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Installation Included</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Support Included</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Software Updates</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Unlimited Users</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="bg-gray-50 py-3 pl-6 text-sm font-medium text-gray-900 text-left" colspan="4" scope="colgroup">Application Usage</th>
                    </tr>
                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Bring your own carrier (BYOC)</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>
                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Included phone number(s)</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                        <td class="py-5 px-6">

                        <span class="text-sm  text-green-500">
                             BYOC
                        </span>
                            <span class="sr-only">Yes</span>
                        </td>
                        <td class="py-5 px-6">
                        <span class="text-sm text-green-500">
                              BYOC
                        </span>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">SMS segment cost</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                        <td class="py-5 px-6">
                       <span class="text-sm text-green-500">
                           BYOC
                        </span>
                            <span class="sr-only">Yes</span>
                        </td>
                        <td class="py-5 px-6">
                         <span class="text-sm  text-green-500">
                            BYOC
                        </span>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Clear by link</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="mr-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    </tbody>
                    <tfoot>
                    <tr>
                        <th class="py-8 px-6 text-sm font-medium text-gray-900 text-left align-top" scope="row">Pricing</th>

                        <td class="h-full py-8 px-6 align-top">
                            <div class="relative h-full table">
                                <p>
                                    <span class="text-4xl font-extrabold text-gray-900">$0</span>
                                    <span class="text-base font-medium text-gray-500">/forever</span>
                                </p>
                                <p class="mt-4 mb-16 text-sm text-gray-500">Free, open-source WCTP gateway software using the MIT license.</p>
                                <a href="https://github.com/notifius/wctp-gateway"
                                   class="absolute bottom-0 flex-grow block w-full bg-white border-2 border-indigo-800 py-2 text-sm font-semibold text-indigo-800 text-center hover:bg-indigo-100 hover:text-indigo-800">
                                    Download Free
                                </a>
                            </div>
                        </td>

                        <td class="h-full py-8 px-6 align-top">
                            <div class="relative h-full table">
                                <p>
                                    <span class="text-4xl font-extrabold text-gray-900">$39</span>
                                    <span class="text-base font-medium text-gray-500">/mo</span>
                                </p>
                                <p class="mt-4 mb-16 text-sm text-gray-500">Fully managed cloud hosting. Bring your own carrier accounts.</p>
                                <a href="/contact" class="absolute bottom-0 flex-grow block w-full bg-indigo-700 border border-purple-800 py-2 text-sm font-semibold text-white text-center hover:bg-indigo-900">
                                    Contact Us
                                </a>
                            </div>
                        </td>

                        <td class="h-full py-8 px-6 align-top">
                            <div class="relative h-full table">
                                <p>
                                    <span class="text-4xl font-extrabold text-gray-900">$1,250</span>
                                    <span class="text-base font-medium text-gray-500">/yr</span>
                                </p>
                                <p class="mt-4 mb-16 text-sm text-gray-500">Custom on-premise installation or in your own cloud environment.</p>
                                <a href="/contact" class="absolute bottom-0 flex-grow block w-full bg-gray-700 border border-gray-800 py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">
                                    Learn More
                                </a>
                            </div>
                        </td>
                    </tr>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 shadow-inner">
        <div class="max-w-7xl mx-auto text-center py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block">You have questions.</span>
                <span class="block text-indigo-600">I'd be happy to help!</span>
            </h2>
            <div class="mt-8 flex justify-center">
                <div class="inline-flex rounded-md shadow">
                    <a href="https://calendly.com/call-theory/quick-call" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                       Schedule a call
                    </a>
                </div>

            </div>
            <small class="mt-4 block mx-auto text-xs text-gray-400">
                (No obligation, no pressure &mdash; that's not who I am.)
            </small>
        </div>
    </div>



    <div class="bg-white">
        <div class="max-w-6xl mx-auto py-16 px-4 divide-y-2 divide-gray-200 sm:pb-24 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900">
                Frequently asked questions
            </h2>
            <div class="mt-6 pt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:grid-rows-2 md:gap-x-8 md:gap-y-12">
                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            What is Bring Your Own Carrier (BYOC)?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                           <span class="font-semibold">BYOC</span> allows you to use your own compatible carrier account by using your own API credentials.
                            The carrier bills you for usage directly.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Is the Open Source edition limited?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            No. It's the exact code-base used for application hosting. I just don't do any of the work or provide service for you. Otherwise, all the same features are there.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                           How many characters is an SMS segment?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                           There are 160 characters per segment. If you include non-GSM characters, the segment will be billed at 67 characters as it must be encoded differently.
                            Non-GSM characters most often occur in non-US languages.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            What is <i>Clear by link</i>?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Sends a standard web-link to the recipient which can be clicked as an alternative to responding by text.
                            When cleared by link, your system is notified as if they had cleared by text normally. <small>e.g., <code class="bg-gray-50 text-purple-500 border border-gray-100">3ok</code></small>
                        </dd>
                    </div>


                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Is this compatible with my system?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            This application is tailored to the <a href="https://amtelco.com" class="font-semibold hover:underline hover:text-gray-700" target="_blank">Amtelco</a> ecosystem. It implements a standards-compatible WCTP Carrier Gateway.
                            You must have the <i>Amtelco WCTP 2-Way Messaging API</i> feature licensed and the Amtelco <code class="bg-gray-50 text-purple-500 border border-gray-100">WCTPWeb</code> .NET application installed to receive inbound and reply messages.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Do you accept custom development requests?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Yes, since this is a standards-based WCTP implementation, most systems that act as a WCTP Enterprise Gateway will be compatible. If you'd like a specific carrier supported or even a customized version of the WCTP gateway to fit your specific requirements, please <a  class="font-semibold hover:underline hover:text-gray-700" href="/contact">contact us</a>!
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            What does managed hosting include for redundancy?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                           Managed hosting includes a primary and backup systems setup in different cloud providers. If a cloud provider or DNS service fails (common reasons applications fail in single-cloud configurations), the other active site is already available for use.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Does managed hosting include carrier redundancy?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            All of our hosting options require you to bring your own carrier accounts. This would require you to setup telecom API providers for both ThinQ and Twilio.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            What is included with support?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                           As an Application Service Provider, I have limited control over the underlying infrastructure provider (i.e., AWS, Azure, your on-premise site, etc.)
                            Config and app-specific issues are included with support 24/7.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                           Do you have a public status page showing service issues?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            You can find our company status page at <a title="status.calltheory.net" class="font-semibold hover:underline hover:text-gray-700" href="https://status.calltheory.net/">status.calltheory.net</a>
                        </dd>
                    </div>

                </dl>
            </div>
        </div>
    </div>


@endsection
