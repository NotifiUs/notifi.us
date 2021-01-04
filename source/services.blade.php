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
                        <span class="block text-white">Products</span>
                        <span class="block text-indigo-900">& Services</span>
                    </h2>
                    <p class="mt-4 text-lg leading-6 text-white">
                        A collection of products, services, and resources for the call center and telephone answering service industries.
                    </p>

                </div>
            </div>
            <div class="-mt-6 aspect-w-5 aspect-h-3 md:aspect-w-2 md:aspect-h-1">
                <img class="transform translate-x-6 translate-y-6 rounded-md object-cover object-left-top sm:translate-x-16 lg:translate-y-20"
                     src="/assets/images/kpiscreenshot.png" alt="Call Center KPI Dashboard">
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 w-full">


    <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

        <li class="col-span-1 flex flex-col text-center bg-gray-50 border hover:border-indigo-500 rounded-lg shadow-lg divide-y divide-gray-200">
            <div class="flex-1 flex flex-col p-8">

                <img src="/assets/images/call-theory.png" class="mx-auto" style="max-width:204px;">
                <dl class="mt-2 flex-grow flex flex-col justify-between">
                    <dt class="sr-only">Product</dt>
                    <dd class="text-purple-500 text-sm font-semibold">Technical Support</dd>
                    <dt class="sr-only">Role</dt>
                    <dd class="mt-3">
                        <span class="px-2 py-1 text-gray-700 text-xs font-medium ">Tech support, documentation, scripts, and resources for NAEO and Amtelco call centers.</span>
                    </dd>
                </dl>
            </div>
            <div>
                <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="w-0 flex-1 flex">
                        <a href="https://calltheory.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-indigo-500">

                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>

                            <span class="ml-3">Visit calltheory.com</span>
                        </a>
                    </div>
                </div>
            </div>
        </li>


        <li class="col-span-1 flex flex-col text-center bg-gray-50  border hover:border-indigo-500 rounded-lg shadow-lg divide-y divide-gray-200">
            <div class="flex-1 flex flex-col p-8">

                <dl class="mt-2 flex-grow flex flex-col justify-between">
                    <dt class="sr-only">Product</dt>
                    <dd class="text-purple-500 text-xl font-semibold">Call Center KPI Dashboard</dd>
                    <dt class="sr-only">Role</dt>
                    <dd class="mt-3">
                        <span class="px-2 py-1 text-gray-700 text-xs font-medium ">
                            Real-time KPI dashboard for Amtelco Infinity and Genesis call centers
                        </span>
                    </dd>
                </dl>
            </div>
            <div>
                <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="w-0 flex-1 flex">
                        <a href="https://callcenterkpi.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-indigo-500">

                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>

                            <span class="ml-3">Visit callcenterkpi.com</span>
                        </a>
                    </div>
                </div>
            </div>
        </li>

        <li class="col-span-1 flex flex-col text-center bg-gray-50 border hover:border-indigo-500 rounded-lg shadow-lg divide-y divide-gray-200">
            <div class="flex-1 flex flex-col p-8">

                <dl class="mt-2 flex-grow flex flex-col justify-between">
                    <dt class="sr-only">Product</dt>
                    <dd class="text-purple-500 text-xl font-semibold">SMS Aggregator for Amtelco systems</dd>
                    <dt class="sr-only">Role</dt>
                    <dd class="mt-3">
                        <span class="px-2 py-1 text-gray-700 text-xs font-medium ">
                            Become your own SMS aggregator using Twilio, ThinQ, and more!
                        </span>
                    </dd>
                </dl>
            </div>
            <div>
                <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="w-0 flex-1 flex">
                        <a href="/services/sms-aggregator" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-indigo-500">

                            <span class="ml-3">Learn More</span>
                        </a>
                    </div>
                </div>
            </div>
        </li>

        <li class="col-span-1 flex flex-col text-center bg-gray-50 border hover:border-indigo-500 rounded-lg shadow-lg divide-y divide-gray-200">
            <div class="flex-1 flex flex-col p-8">

                <dl class="mt-2 flex-grow flex flex-col justify-between">
                    <dt class="sr-only">Product</dt>
                    <dd class="text-purple-500 text-lg font-semibold">Encrypted Credential Sharing</dd>
                    <dt class="sr-only">Role</dt>
                    <dd class="mt-3">
                        <span class="px-2 py-1 text-gray-700 text-xs font-medium ">
                            Stop sending sensitive information directly in emails. Free for everyone and anyone.
                        </span>
                    </dd>
                </dl>
            </div>
            <div>
                <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="w-0 flex-1 flex">
                        <a href="https://encrypt.notifi.us" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-indigo-500">

                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>

                            <span class="ml-3">Visit encrypt.notifi.us</span>
                        </a>
                    </div>
                </div>
            </div>
        </li>


    </ul>


</div>



@endsection
