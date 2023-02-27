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
        <form method="POST" action="{{ route('admin.reservations.store') }}">
          @csrf
          <div class="sm:col-span-6">
            <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
            <div class="mt-1">
              <input type="text" id="first_name" name="first_name"
                class="block w-full appearance-none bg-white border border-gray-400 rounded-md @error('first_name') border-red-600 @enderror">
            </div>
            @error('first_name')
            <div class="text-sm text-red-600">{{ $message }}</div>
            @enderror
          </div>

          <div class="sm:col-span-6">
            <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
            <div class="mt-1">
              <input type="text" id="last_name" name="last_name"
                class="block w-full appearance-none bg-white border border-gray-400 rounded-md @error('last_name') border-red-600 @enderror">
            </div>
            @error('last_name')
            <div class="text-sm text-red-600">{{ $message }}</div>
            @enderror
          </div>

          <div class="sm:col-span-6">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <div class="mt-1">
              <input type="email" id="email" name="email"
                class="block w-full appearance-none bg-white border border-gray-400 rounded-md @error('email') border-red-600 @enderror">
            </div>
            @error('email')
            <div class="text-sm text-red-600">{{ $message }}</div>
            @enderror
          </div>

          <div class="sm:col-span-6">
            <label for="tel_number" class="block text-sm font-medium text-gray-700">Phone number</label>
            <div class="mt-1">
              <input type="text" id="tel_number" name="tel_number"
                class="block w-full appearance-none bg-white border border-gray-400 rounded-md @error('tel_number') border-red-600 @enderror">
            </div>
            @error('tel_number')
            <div class="text-sm text-red-600">{{ $message }}</div>
            @enderror
          </div>

          <div class="sm:col-span-6">
            <label for="res_date" class="block text-sm font-medium text-gray-700">Reservation Date</label>
            <div class="mt-1">
              <input type="datetime-local" id="res_date" name="res_date"
                class="block w-full appearance-none bg-white border border-gray-400 rounded-md @error('res_date') border-red-600 @enderror">
            </div>
            @error('res_date')
            <div class="text-sm text-red-600">{{ $message }}</div>
            @enderror
          </div>

          <div class="sm:col-span-6">
            <label for="guest_number" class="block text-sm font-medium text-gray-700">Guest Number</label>
            <div class="mt-1">
              <input type="number" id="guest_number" name="guest_number" min="0.00" max="10" step="1"
                class="block w-full appearance-none bg-white border border-gray-400 rounded-md @error('guest_number') border-red-600 @enderror">
            </div>
            @error('guest_number')
            <div class="text-sm text-red-600">{{ $message }}</div>
            @enderror
          </div>

          <div class="sm:col-span-6">
            <label for="table_id" class="block text-sm font-medium text-gray-700">Table</label>
            <div class="mt-1 w-full">
              <select class="w-full text-center" id="table_id" name="table_id"">
                @foreach ($tables as $table)
                <option value=" {{ $table->id }}">{{ $table->name }}</option>
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