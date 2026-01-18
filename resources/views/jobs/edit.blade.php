<x-layout>
  <x-slot name="title">
    Edit Job  : <span class="text-gray-300 font-semibold">{{ $job->title }}</span> 



  </x-slot>

  <form action="/jobs/{{ $job->id }}" method="POST" class="max-w-2xl mx-auto">

    @csrf
    @method('PATCH')
    <div class="space-y-10">
      <div class="border-b border-gray-200 pb-10">


        <div class="mt-8 grid grid-cols-1 gap-6 sm:grid-cols-6">

          <div class="sm:col-span-4">
            <label for="title" class="block text-sm font-medium text-gray-700">
              Title
            </label>
            <div class="mt-2">
              <input id="title" name="title" value={{ $job->title}} type="text"
              class="block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm text-gray-900
              placeholder-gray-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none" />
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
              <input id="salary" name="salary" type="text" value={{ $job->salary}}
              class="block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm text-gray-900
              placeholder-gray-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none" />
              @error('salary')

              <p class="text-red-700 mt-2  text-sm font-semibold"> {{ $message }}</p>

              @enderror
            </div>
          </div>

        </div>
      </div>

      <!-- Buttons -->

      <div class="flex justify-between">
        <button type="submit" form="delete-job"
          class="rounded-md bg-red-600 px-4 py-2 text-sm font-medium text-white hover:bg-red-700">
          Delete
        </button>
        <div class="flex justify-end gap-3">
          <a href="/jobs/{{ $job->id }}"
            class="rounded-md bg-gray-100 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-200">
            Cancel
          </a>
          <button type="submit"
            class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-700">
            Update
          </button>
        </div>

      </div>

    </div>
  </form>

  <form id="delete-job" action="/jobs/{{ $job->id }}" method="POST">
    @method('DELETE')
    @csrf

  </form>
</x-layout>