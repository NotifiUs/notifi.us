@extends('_layouts.master')
@section('title', 'Services')
@section('body')

    @php
            @endphp
    <div class="bg-white">
        <div class="max-w-6xl mx-auto py-16 px-4 sm:px-6 lg:px-8 w-full">
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

        <div class="max-w-6xl mx-auto bg-white pt-4 pb-16 sm:px-6 lg:px-8">
            <!-- xs to lg -->
            <div class="max-w-2xl mx-auto lg:hidden">
                <div class="px-4">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Basic</h2>
                    <p class="mt-4">
                        <span class="text-4xl font-extrabold text-gray-900">$9</span>
                        <span class="text-base font-medium text-gray-500">/mo</span>
                    </p>
                    <p class="mt-4 text-sm text-gray-500">Quis suspendisse ut fermentum neque vivamus non tellus.</p>
                    <a href="#" class="mt-6 block border border-gray-800 rounded-md bg-gray-800 w-full py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Basic</a>
                </div>

                <table id="pricing-table" class="mt-8 w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Features
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Molestie lobortis massa.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Urna purus felis.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tellus pulvinar sit dictum.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Convallis.</th>
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
                        Reporting
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Adipiscing.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Eget risus integer.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Gravida leo urna velit.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Elementum ut dapibus mi feugiat cras nisl.</th>
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
                        Support
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Sit dignissim.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Congue at nibh et.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Volutpat feugiat mattis.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tristique pellentesque ornare diam sapien.</th>
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

                <div class="border-t border-gray-200 px-4 pt-5">
                    <a href="#" class="block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Basic</a>
                </div>

                <div class="px-4 mt-16">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Essential</h2>
                    <p class="mt-4">
                        <span class="text-4xl font-extrabold text-gray-900">$29</span>
                        <span class="text-base font-medium text-gray-500">/mo</span>
                    </p>
                    <p class="mt-4 text-sm text-gray-500">Quis eleifend a tincidunt pellentesque. A tempor in sed.</p>
                    <a href="#" class="mt-6 block border border-gray-800 rounded-md bg-gray-800 w-full py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Essential</a>
                </div>

                <table class="mt-8 w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Features
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Molestie lobortis massa.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Urna purus felis.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tellus pulvinar sit dictum.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Convallis.</th>
                        <td class="py-5 pr-4">
                            <span class="block text-sm text-gray-700 text-right">Up to 20 users</span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Reporting
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Adipiscing.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Eget risus integer.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Gravida leo urna velit.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Elementum ut dapibus mi feugiat cras nisl.</th>
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
                        Support
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Sit dignissim.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Congue at nibh et.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Volutpat feugiat mattis.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tristique pellentesque ornare diam sapien.</th>
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

                <div class="border-t border-gray-200 px-4 pt-5">
                    <a href="#" class="block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Essential</a>
                </div>

                <div class="px-4 mt-16">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Premium</h2>
                    <p class="mt-4">
                        <span class="text-4xl font-extrabold text-gray-900">$59</span>
                        <span class="text-base font-medium text-gray-500">/mo</span>
                    </p>
                    <p class="mt-4 text-sm text-gray-500">Orci volutpat ut sed sed neque, dui eget. Quis tristique non.</p>
                    <a href="#" class="mt-6 block border border-gray-800 rounded-md bg-gray-800 w-full py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Premium</a>
                </div>

                <table class="mt-8 w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Features
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Molestie lobortis massa.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Urna purus felis.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tellus pulvinar sit dictum.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Convallis.</th>
                        <td class="py-5 pr-4">
                            <span class="block text-sm text-gray-700 text-right">Up to 50 users</span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Reporting
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Adipiscing.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Eget risus integer.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Gravida leo urna velit.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Elementum ut dapibus mi feugiat cras nisl.</th>
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

                <table class="w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Support
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Sit dignissim.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Congue at nibh et.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Volutpat feugiat mattis.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tristique pellentesque ornare diam sapien.</th>
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
                    <a href="#" class="block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Premium</a>
                </div>
            </div>

            <!-- lg+ -->
            <div class="hidden lg:block">
                <table class="w-full h-px table-fixed">
                    <caption class="sr-only">
                        Pricing plan comparison
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
                                    <span class="text-4xl font-extrabold text-gray-900">$25</span>
                                    <span class="text-base font-medium text-gray-500">/mo</span>
                                </p>
                                <p class="mt-4 mb-16 text-sm text-gray-500">Fully managed cloud hosting - 1 month free when you commit annually.</p>
                                <a href="https://store.calltheory.com/products/sms-aggregator" class="absolute bottom-0 flex-grow block w-full bg-indigo-700 border border-purple-800 py-2 text-sm font-semibold text-white text-center hover:bg-indigo-900">
                                    Buy Hosting
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
                                <a href="https://store.calltheory.com/products/sms-aggregator?variant=37444097343649" class="absolute bottom-0 flex-grow block w-full bg-gray-700 border border-gray-800 py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">
                                    Purchase Enterprise
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

                            <span class="sr-only">Included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                            <small class="text-sm text-green-500">Dedicated Instance</small>
                            <span class="sr-only">Included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                            <small class="text-sm text-green-500">On-premise or your cloud</small>
                            <span class="sr-only">Included in Premium</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Free Installation</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Premium</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Support Included</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Not included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Premium</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Software Updates</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Not included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Premium</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Application Users</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Not included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                       <span class="text-green-500">
                            Unlimited
                        </span>
                            <span class="sr-only">Included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                       <span class="text-green-500">
                            Unlimited
                        </span>
                            <span class="sr-only">Included in Premium</span>
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
                            <span class="sr-only">Not included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Included phone number(s)</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Basic</span>
                        </td>
                        <td class="py-5 px-6">

                        <span class="text-green-500">
                            <strong>2x</strong> Toll-Free Numbers
                        </span>
                            <span class="sr-only">Included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                        <span class="text-green-500">
                             BYOC / Custom
                        </span>
                            <span class="sr-only">Included in Premium</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">SMS segment cost</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Not included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                       <span class="text-green-500">
                           <strong>$0.0075</strong>/sms
                        </span>
                            <span class="sr-only">Included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                         <span class="text-green-500">
                            BYOC / Custom
                        </span>
                            <span class="sr-only">Included in Premium</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Clear by link</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Not included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Premium</span>
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
                                    <span class="text-4xl font-extrabold text-gray-900">$25</span>
                                    <span class="text-base font-medium text-gray-500">/mo</span>
                                </p>
                                <p class="mt-4 mb-16 text-sm text-gray-500">Fully managed cloud hosting - 1 month free when you commit annually.</p>
                                <a href="https://store.calltheory.com/products/sms-aggregator" class="absolute bottom-0 flex-grow block w-full bg-indigo-700 border border-purple-800 py-2 text-sm font-semibold text-white text-center hover:bg-indigo-900">
                                    Buy Hosting
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
                                <a href="https://store.calltheory.com/products/sms-aggregator?variant=37444097343649" class="absolute bottom-0 flex-grow block w-full bg-gray-700 border border-gray-800 py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">
                                    Purchase Enterprise
                                </a>
                            </div>
                        </td>
                    </tr>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>




@endsection
