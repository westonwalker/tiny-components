<pre class="language-markup">
  <code><!--
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<div class="bg-gray-200 flex items-center justify-center h-screen">
  <div x-data="{ counter: 0 }" class="p-8">
    <div class="text-center">
      <span x-text="counter" class="text-3xl font-medium text-gray-800 md:text-4xl">
      </span>
    </div>
    <br />
    <button @click="counter++" class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-base font-medium rounded-lg text-white md:py-4 md:text-lg md:px-10">Increment</button>
    <button @click="counter=0" class="ml-2 px-8 py-3 bg-gray-400 hover:bg-gray-500 text-base font-medium rounded-lg text-gray-800 md:py-4 md:text-lg md:px-10">Reset</button>
  </div>
</div>  --></code>
</pre>
