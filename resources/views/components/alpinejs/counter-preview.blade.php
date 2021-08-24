<div class="bg-gray-200 flex items-center justify-center h-full">
  <div class="p-8" x-data="{ counter: 0 }">
    <div class="text-center">
      <span class="text-3xl font-medium text-gray-800 md:text-4xl" x-text="counter">
      </span>
    </div>
    <br />
    <button class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-base font-medium rounded-lg text-white md:py-4 md:text-lg md:px-10" @click="counter++">Increment</button>
    <button class="ml-2 px-8 py-3 bg-gray-400 hover:bg-gray-500 text-base font-medium rounded-lg text-gray-800 md:py-4 md:text-lg md:px-10" @click="counter=0">Reset</button>
  </div>
</div>
