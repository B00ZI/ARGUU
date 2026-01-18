<x-layout>
  <x-slot name="title">
    Create Job



  </x-slot>

  <form action="/jobs" method="POST" class="max-w-2xl mx-auto">

    @csrf
    <div class="space-y-10">
      <div class="border-b border-gray-200 pb-10">
        <h2 class="text-lg font-semibold text-gray-900">Create a new Job</h2>
        <p class="mt-1 text-sm text-gray-500">
          we just need some information
        </p>

        <div class="mt-8 grid grid-cols-1 gap-6 sm:grid-cols-6">

          <div class="sm:col-span-4">
            <label for="title" class="block text-sm font-medium text-gray-700">
              Title
            </label>
            <div class="mt-2">
              <input id="title" name="title" type="text" value="{{ old('title') }}""
                class="block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none" />
              @error('title')

              <p class="text-red-700 mt-2  text-sm font-semibold"> {{ $message }}</p>

              @enderror
            </div>
          </div>


          <div class="sm:col-span-4">
            <label for="salary" class="block text-sm font-medium text-gray-700">
              Salary
            </label>
            <div class="mt-2">
              <input id="salary" name="salary" type="number" value="{{ old('salary') }}"
                class="block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none" />
              @error('salary')

              <p class="text-red-700 mt-2  text-sm font-semibold"> {{ $message }}</p>

              @enderror
            </div>
          </div>

        </div>
      </div>

      <!-- Buttons -->
      <div class="flex justify-end gap-3">
        <a href="/jobs" class="rounded-md bg-gray-100 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-200">
          Cancel
        </a>
        <button type="submit"
          class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-700">
          Create
        </button>
      </div>
    </div>
  </form>





</x-layout>