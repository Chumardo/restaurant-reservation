<x-admin-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="flex flex-col justify-center py-12 items-center">
    <div class="flex m-2 p-2">
      <a href="{{ route('admin.menus.index')}}"
        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Go Back</a>
    </div>
    <div class="bg-slate-200 flex flex-col items-center rounded-lg">
      <div class="flex">
      </div>
      <div class="divide-y divide-gray-200 p-5 mt-5">
        <form method="POST" action="{{ route('admin.menus.update', $menu->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="sm:col-span-6">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <div class="mt-1">
              <input type="text" id="name" name="name" value="{{ $menu->name }}"
                class="block w-full appearance-none bg-white border border-gray-400 rounded-md">
            </div>
          </div>

          <div class="sm:col-span-6">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <div>
              <img src="{{ Storage::url($menu->image) }}" class="w-16 h-16 rounded">
            </div>
            <div class="mt-1">
              <input type="file" id="image" name="image"
                class="block w-full appearance-none bg-white border border-gray-400 rounded-md">
            </div>
          </div>

          <div class="sm:col-span-6">
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <div class="mt-1">
              <input type="number" min="0.00" max="10000.00" step="0.01" id="price" name="price"
                value="{{ $menu->price }}"
                class="block w-full appearance-none bg-white border border-gray-400 rounded-md">
            </div>
          </div>

          <div class="sm:col-span-6">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <div class="mt-1">
              <textarea name="description" id="description" rows="3"
                class="shadow-sm w-full focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md">{{ $menu->description }}</textarea>
            </div>
          </div>

          <div class="sm:col-span-6">
            <label for="categories" class="block text-sm font-medium text-gray-700">Categories</label>
            <div class="mt-1 w-full">
              <select class="w-full text-center" id="categories" name="categories[]">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" @selected($category->id == $menu->category_id )> {{
                  $category->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="flex justify-center items-center mt-2">
            <button type="submit"
              class="px-4 py-2 text-white bg-green-500 hover:bg-green-600 rounded-lg">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-admin-layout>