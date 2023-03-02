<x-guest-layout>
  <div class="container w-full px-5 py-6 mx-auto">
    <div class="grid lg:grid-cols-4 gap-y-6">
      @foreach ($category->menus as $menu)
      <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg bg-purple-900">
        <img class="w-full h-48 rounded-t-lg" src="{{ Storage::url($menu->image) }}" alt="Image" />
        <div class="text-center">

          <h4 class="p-3 text-xl font-semibold tracking-tight text-green-500 hover:text-white uppercase">
            {{ $menu->name }}</h4>
          </a>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</x-guest-layout>