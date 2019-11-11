<nav>
  <div class="container px-32 py-4 flex justify-between items-center w-full bg-white">
    <div class="ml-0">
      <a href="/" title="NotifiUs, LLC" alt="NotifiUs, LLC">
        <img src="/assets/images/notifius.png" class="w-48">
      </a>
    </div>
    <div class="ml-auto">
      <ul class="inline-flex">
      <li>
          <a title="Home" alt="Home" class="@if( $page->_meta->filename == 'index') {{ ' text-indigo-700 ' }} @else {{ ' text-gray-700 ' }}@endif px-4 hover:text-purple-700 font-bold" href="/">
            Home
          </a>
        </li>
        <li>
          <a title="Contact" alt="Contact" class="@if( $page->_meta->filename == 'contact') {{ ' text-indigo-700 ' }} @else {{ ' text-gray-700 ' }}@endif px-4 text-gray-700 hover:text-purple-700 font-bold" href="/contact">
            Contact
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>