<x-admin-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="flex flex-col justify-center py-12 items-center">
    <div class="flex m-2 p-2">
      <a href="{{ route('admin.reservations.index')}}"
        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Go Back</a>
    </div>
    <div class="bg-slate-200 flex flex-col items-center rounded-lg">
      <div class="flex">
      </div>
      <div class="divide-y divide-gray-200 p-5 mt-5">
        <form enctype="multipart/form-data">
          <div class="sm:col-span-6">
            <label for="title" class="block text-sm font-medium text-gray-700">Name</label>
            <div class="mt-1">
              <input type="text" id="title" wire:model.lazy="title" name="title"
                class="block w-full appearance-none bg-white border border-gray-400 rounded-md">
            </div>
          </div>

          <div class="sm:col-span-6">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <div class="mt-1">
              <input type="file" id="image" wire:model.lazy="image" name="image"
                class="block w-full appearance-none bg-white border border-gray-400 rounded-md">
            </div>
          </div>

          <div class="sm:col-span-6">
            <label for="body" class="block text-sm font-medium text-gray-700">Description</label>
            <div class="mt-1">
              <textarea name="body" id="body" rows="3" wire:model.lazy="body"
                class="shadow-sm w-full focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md"></textarea>
            </div>
          </div>
          <div class="flex justify-center items-center mt-2">
            <button type="submit" class="px-4 py-2 text-white bg-green-500 hover:bg-green-600 rounded-lg">Store</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-admin-layout>