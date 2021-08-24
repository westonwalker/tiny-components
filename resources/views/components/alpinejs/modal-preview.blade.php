<div class="bg-gray-200 flex items-center justify-center h-full">
  <div class="p-8 flex justify-center" x-data="{ openModal: false }">
    <button class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-base font-medium rounded-lg text-white md:py-4 md:text-lg md:px-10" @click="openModal = true">Open Modal</button>
    <div class="fixed w-full h-full top-0 left-0 flex items-center justify-center" x-show="openModal" x-trap="openModal">
      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
      <div class="bg-white w-full md:max-w-lg mx-auto rounded shadow-lg z-50 p-8 my-4" x-transition x-show="openModal">
        <h2 class="text-xl sm:text-2xl font-medium mb-2">This is a modal!</h2>
        <p class="text-base text-gray-500 sm:text-lg md:text-xl mb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <div class="flex justify-end">
          <button class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-base font-medium rounded-lg text-gray-800 md:py-3 md:text-lg md:px-6" @click="openModal = false">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>
