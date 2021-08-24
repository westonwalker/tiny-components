@props(['item'])
<div id="counter" class="flex flex-col mt-8" x-data="{ show{{ $item->name }}Tab: 'preview' }">
  <div class="flex justify-between">
    <div class="flex py-4 whitespace-nowrap justify-start items-center">
      <h1 class="text-gray-900 text-2xl font-bold tracking-loose">{{ $item->name }}</h1>
      @if ($item->is_free)
      <span class="ml-2 h-6 px-2 inline-flex items-center text-xs leading-5 font-semibold rounded bg-green-500 text-white">
        Free
      </span>
      @else
      <span class="ml-2 h-6 px-2 inline-flex items-center text-xs leading-5 font-semibold rounded bg-pink-500 text-white">
        Premium
      </span>
      @endif
    </div>
    <div class="flex pb-4 whitespace-nowrap justify-start items-center">
      <span :class="show{{ $item->name }}Tab == 'preview' ? 'bg-purple-500 text-white' : 'bg-white text-purple-500'" class="cursor-pointer px-4 py-2 rounded inline-flex items-center border-2 border-purple-500 font-medium" @click="show{{ $item->name }}Tab = 'preview'">Preview</span>
      @if ($item->is_free)
      <span :class="show{{ $item->name }}Tab == 'code' ? 'bg-yellow-500 text-white' : 'bg-white text-yellow-500'" class="cursor-pointer px-4 py-2 rounded ml-2 inline-flex items-center border-2 border-yellow-500 font-medium" @click="show{{ $item->name }}Tab = 'code'">Code</span>
      {{-- <span class="cursor-pointer px-4 py-2 rounded ml-2 inline-flex items-center border-2 border-gray-800 bg-white text-gray-800 font-medium" @click="show{{ $item->name }}Tab = 'code'">Copy</span> --}}
      @endif
    </div>
  </div>
  <div x-cloak class="example" style="width:100%;height:300px;" x-show="show{{ $item->name }}Tab  == 'preview'">
    @include('components.'. $item->preview_file)
  </div>
  <div x-cloak class="code" x-show="show{{ $item->name }}Tab  == 'code'">
    @include('components.'. $item->code_file)
  </div>
</div>
