<x-layout>

    <x-slot:title>
        Log In
    </x-slot:title>

    <form action="/jobs" method="POST" class="max-w-2xl mx-auto">

        @csrf
        <div class="space-y-10">
            <div class="border-b border-gray-200 pb-10">
               
                <div class="mt-8 grid grid-cols-1  gap-6 sm:grid-cols-6">

                    <div class="sm:col-span-1-4">
                        <x-formlable for="title">Title</x-formlable>
                        <div class="mt-2">
                            <x-formInput id="title" name="title" type="text" value="{{ old('title') }}" />
                            <x-formError name="title" />
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-formlable for="title">Title</x-formlable>
                        <div class="mt-2">
                            <x-formInput id="title" name="title" type="text" value="{{ old('title') }}" />
                            <x-formError name="title" />
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-formlable for="title">Title</x-formlable>
                        <div class="mt-2">
                            <x-formInput id="title" name="title" type="text" value="{{ old('title') }}" />
                            <x-formError name="title" />
                        </div>
                    </div>

                </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-center  gap-3">
                <a href="/jobs"
                    class="rounded-md bg-gray-100 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-200">
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