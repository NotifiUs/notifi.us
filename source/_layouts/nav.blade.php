
@foreach( $page->include_nav as $included_pages)
  @php
    $haystack[] = $included_pages;
  @endphp
@endforeach

@if( in_array( $page->_meta->filename, $haystack ) )
<nav>
  <div class="xl:px-32 px-4 py-4 flex justify-between items-center w-full bg-white">
    <div class="ml-0">
      <a href="/" title="NotifiUs, LLC" alt="NotifiUs, LLC">
        <img src="/assets/images/notifius.png" style="min-width:202px;width:202px;height:43px;">
      </a>
    </div>
    <div class="ml-auto">
      <ul class="inline-flex">
      <li>
          <a title="Home" alt="Home" class="@if( $page->_meta->filename == 'index') {{ ' text-indigo-700 ' }} @else {{ ' text-gray-700 ' }}@endif xl:px-4 px-2 hover:text-purple-700 font-bold" href="/">
            Home
          </a>
        </li>
        <li>
          <a title="Contact" alt="Contact" class="@if( $page->_meta->filename == 'contact') {{ ' text-indigo-700 ' }} @else {{ ' text-gray-700 ' }}@endif xl:px-4 px-2 text-gray-700 hover:text-purple-700 font-bold" href="/contact">
            Contact
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endif