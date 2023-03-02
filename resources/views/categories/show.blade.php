<x-guest-layout>
  <div class="container w-full px-5 py-6 mx-auto">
    <div class="flex justify-start pb-4 text-center">
      <h1 class="text-lg font-bold text-gray-500 mb-10">
        Category: {{ $category->name }}</h1>
    </div>
    <div class="grid lg:grid-cols-4 gap-y-6">
      @foreach ($category->menus as $menu)
      <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg divide-y-2 divide-black">
        <img class="w-full h-48 rounded-t-lg" src="{{ Storage::url($menu->image) }}" alt="Image" />
        <div class="px-6 py-4 bg-purple-900 text-center">
          <h4 class="mb-3 text-xl font-semibold tracking-tight text-white uppercase">
            {{ $menu->name }}</h4>
          <p class="leading-normal text-gray-400">
            {{ $menu->description }}
          </p>
        </div>
        <div class="p-4 bg-green-900 text-center rounded-b-lg">
          <span class="text-xl text-white text-center">${{ $menu->price }}</span>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</x-guest-layout>