@extends('_layouts.master')

@section('title', 'Not Found')

@section('body')

<div class="container px-4 mx-auto max-w-lg text-center mt-4">
    <h1 class="text-indigo-800 font-extrabold text-4xl text-center font-sans">
        404 <span class="text-indigo-700">Not Found</span>
    </h1>
    <h2 class="text-indigo-400 text-2xl text-center mb-6">
        We couldn't connect your call.
    </h2>


</div>

<div class="container px-4 max-w-lg mx-auto mt-6 text-center">
    <div class="w-100">
        <a href="/" class="text-indigo-300 hover:text-indigo-500">
            <img class="w-64 max-w-sm mx-auto mb-4" src="/assets/images/notifications.svg" title="Go home" alt="Not found">
        </a>
    </div>
</div>
@endsection
