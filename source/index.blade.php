@extends('_layouts.master')
@section('title', 'NotifiUs, LLC')
@section('body')

@include('_layouts.nav')

<div class="flex flex-wrap bg-gradient py-16 w-full px-4 shadow-inner">
  <div class="xl:w-7/12 lg:w-1/2 w-full px-4">
    <div class="container mx-auto text-center max-w-xl">
      <h1 class="text-white font-extrabold text-4xl font-sans my-4">
          Ready to level up your call center?
      </h1>
      <div class="inline-block text-xl text-blue-100 px-6">
          We specialize in developing software, processes, and documentation to markedly improve the technical foundation of your call center or telephone answering service.
      </div>
      <a alt="NotifiUs, LLC" class="rounded-lg block text-lg uppercase text-purple-100 inline-block shadow bg-purple-700 my-6 px-5 py-3 hover:bg-purple-900 hover:text-white font-bold" href="/contact">
        Contact Us <i class="fas fa-caret-right"></i> 
      </a>
  </div>
  </div>
  <div class="xl:w-5/12 lg:w-1/2 w-full">
    <div class="container mx-auto text-center max-w-xl xl:ml-0">
      <div class="w-100">
          <img class="w-auto mx-auto my-4" src="/assets/images/innovation.png" title="NotifiUs, LLC" alt="NotifiUs, LLC">
      </div>
    </div>
  </div>
</div>




<div class="w-12/12 px-4 py-8 my-10 mx-0 text-center bg-gray-300 shadow-inner">

  <div class="container text-xl font-bold text-gray-500 mx-auto max-w-lg text-center">
    <a href="https://notifi.us">
      <img class="inline-block" style="width:201px;height:43px;" src="/assets/images/notifius.png" title="NotifiUs, LLC" alt="NotfiUs, LLC">
    </a>
    <br>
    Technical consulting, software development, and documentation for call centers.
    <br>
    <a alt="NotifiUs, LLC" class="focus:outline-none focus:shadow-outline hover:shadow-outline text-sm uppercase text-gray-100 inline-block shadow-sm bg-purple-700 my-4 px-4 py-2 hover:bg-purple-900 hover:text-white" href="https://notifi.us/contact">
      Hire my company
    </a>
  </div>
 
</div>

@include('_layouts.footer')

@endsection
