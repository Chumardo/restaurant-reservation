<x-guest-layout>
  <div class="container w-full px-5 py-6 mx-auto">
    <div class="flex items-center min-h-screen">
      <div class="flex-1 h-full max-w-4xl mx-auto bg-purple-900 rounded-lg shadow-xl">
        <div class="flex flex-col md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img class="object-cover w-full h-full"
              src="https://cdn.pixabay.com/photo/2015/05/31/14/24/vintage-791942_960_720.jpg" alt="img" />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h3 class="mb-4 text-xl font-bold text-white">Make Reservation</h3>

              <form method="POST" action="{{ route('reservations.store') }}">
                @csrf
                <div class="sm:col-span-6">
                  <label for="first_name" class="block text-sm font-medium text-white"> First Name
                  </label>
                  <div class="mt-1">
                    <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                      class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                  </div>
                  @error('first_name')
                  <div class="text-sm text-red-400">{{ $message }}</div>
                  @enderror
                </div>
                <div class="sm:col-span-6">
                  <label for="last_name" class="block text-sm font-medium text-white"> Last Name
                  </label>
                  <div class="mt-1">
                    <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                      class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                  </div>
                  @error('last_name')
                  <div class="text-sm text-red-400">{{ $message }}</div>
                  @enderror
                </div>
                <div class="sm:col-span-6">
                  <label for="email" class="block text-sm font-medium text-white"> Email </label>
                  <div class="mt-1">
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                      class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                  </div>
                  @error('email')
                  <div class="text-sm text-red-400">{{ $message }}</div>
                  @enderror
                </div>
                <div class="sm:col-span-6">
                  <label for="tel_number" class="block text-sm font-medium text-white"> Phone
                    number
                  </label>
                  <div class="mt-1">
                    <input type="text" id="tel_number" name="tel_number" value="{{ old('tel_number') }}"
                      class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                  </div>
                  @error('tel_number')
                  <div class="text-sm text-red-400">{{ $message }}</div>
                  @enderror
                </div>
                <div class="sm:col-span-6">
                  <label for="res_date" class="block text-sm font-medium text-white"> Reservation
                    Date
                  </label>
                  <div class="mt-1">
                    <input type="datetime-local" id="res_date" name="res_date" value="{{ old('res_date') }}"
                      min="{{ $min_date->format('Y-m-d\TH:i:s') }}" max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                      class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                  </div>
                  @error('res_date')
                  <div class="text-sm text-red-400">{{ $message }}</div>
                  @enderror
                </div>
                <div class="sm:col-span-6">
                  <label for="guest_number" class="block text-sm font-medium text-white"> Guest
                    Number
                  </label>
                  <div class="mt-1">
                    <input type="number" id="guest_number" name="guest_number" value="{{ old('guest_number') }}"
                      class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                  </div>
                  @if(session()->has('guest_error'))
                  <div class="text-sm text-red-400">{{ session()->get('guest_error') }}</div>
                  @endif
                </div>
                <div class="sm:col-span-6">
                  <label for="status" class="block text-sm font-medium text-white">Table</label>
                  <div class="mt-1">
                    <select id="table_id" name="table_id" class="form-multiselect block w-full mt-1">
                      @foreach ($tables as $table)
                      <option value="{{ $table->id }}" @selected(old('table_id')==$table->id)>
                        {{ $table->name }}
                        ({{ $table->guest_number }} Guests)
                      </option>
                      @endforeach
                    </select>
                  </div>
                  @if(session()->has('table_error'))
                  <div class="text-sm text-red-400">{{ session()->get('table_error') }}</div>
                  @endif
                </div>
                <div class="mt-6 p-4 flex justify-end">
                  <button type="submit" class="px-4 py-2 bg-green-600 hover:bg-green-500 rounded-lg text-white">Make
                    Reservation</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</x-guest-layout>