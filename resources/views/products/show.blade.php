<x-app-layout>
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="flex flex-col mb-8">
      <a href="/" class="hover:text-gray-900 text-gray-800">
        ⬅️ Home
      </a>
      <h1 class="text-gray-900 text-3xl font-extrabold tracking-loose mt-2">{{ $product->icon }} {{ $product->name }}</h1>
      @if ($product->slug == 'alpinejs-components')
      <div class="flex flex-col">
        @foreach ($productItems as $item)
        <x-alpinejs.component :item='$item'></x-alpinejs.component>
        @endforeach
        {{-- <x-alpinejs.counter></x-alpinejs.counter>
        <x-alpinejs.modal></x-alpinejs.modal> --}}
      </div>
      @endif
    </div>
  </div>
  <style>
    [x-cloak] {
      display: none !important;
    }
  </style>
  <script defer src="https://unpkg.com/@alpinejs/trap@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</x-app-layout>
