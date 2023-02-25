<x-admin-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="flex flex-col justify-center py-12 items-center">
    <div class="flex m-2 p-2">
      <a href="{{ route('admin.tables.index')}}"
        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Go Back</a>
    </div>
    <div class="bg-slate-200 flex flex-col items-center rounded-lg">
      <div class="flex">
      </div>
      <div class="divide-y divide-gray-200 p-5 mt-5">
        <form method="POST" action="{{ route('admin.tables.store') }}">
          @csrf
          <div class="sm:col-span-6">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <div class="mt-1">
              <input type="text" id="name" wire:model.lazy="name" name="name"
                class="block w-full appearance-none bg-white border border-gray-400 rounded-md">
            </div>
          </div>

          <div class="sm:col-span-6">
            <label for="guest_number" class="block text-sm font-medium text-gray-700">Guest Number</label>
            <div class="mt-1">
              <input type="number" id="guest_number" name="guest_number" min="0.00" max="10" step="1"
                class="block w-full appearance-none bg-white border border-gray-400 rounded-md">
            </div>
          </div>

          <div class="sm:col-span-6">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <div class="mt-1 w-full">
              <select class="w-full text-center" id="status" name="status"">
                @foreach (App\Enums\TableStatus::cases() as $status)
                <option value=" {{ $status->value }}">{{ $status->name }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class=" sm:col-span-6">
            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
            <div class="mt-1 w-full">
              <select class="w-full text-center" id="location" name="location"">
                    @foreach (App\Enums\TableLocation::cases() as $location)
                    <option value=" {{ $location->value }} ">{{ $location->name }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class=" flex justify-center items-center mt-2">
            <button type="submit" class="px-4 py-2 text-white bg-green-500 hover:bg-green-600 rounded-lg">Store</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-admin-layout>