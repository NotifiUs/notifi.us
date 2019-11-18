
@foreach( $page->include_nav as $included_pages)
  @php
    $haystack[] = $included_pages;
  @endphp
@endforeach

@if( in_array( $page->_meta->filename, $haystack ) )
<nav>
  <div class="py-4 justify-between items-center w-full bg-white px-2">
    <div class="flex flex-wrap xl:max-w-8xl lg:max-w-6xl mx-auto">
      <div class="w-1/2 text-left">
        <a href="/" class="ml-0" title="NotifiUs, LLC" alt="NotifiUs, LLC">
          <img src="/assets/images/notifius.png" style="min-width:202px;width:202px;height:43px;">
        </a>
      </div>
      <div class="w-1/2 text-right align-middle">
        <ul class="inline-flex align-middle">
          <li>
            <a title="Home" alt="Home" class="@if( $page->_meta->filename == 'index') {{ ' text-indigo-700 ' }} @else {{ ' text-gray-700 ' }}@endif xl:px-4 px-2 hover:text-purple-700 font-bold" href="/">
              <i class="fas fa-home md:hidden"></i> <span class="hidden sm:hidden md:inline">Home</span>
            </a>
          </li>
          <li>
            <a title="Contact" alt="Contact" class="@if( $page->_meta->filename == 'contact') {{ ' text-indigo-700 ' }} @else {{ ' text-gray-700 ' }}@endif xl:px-4 px-2 text-gray-700 hover:text-purple-700 font-bold" href="/contact">
              <i class="fas fa-envelope md:hidden"></i> <span class="hidden sm:hidden md:inline">Contact</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
@endif