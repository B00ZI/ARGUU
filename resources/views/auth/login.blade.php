<x-layout>

    <x-slot:title>
        Log In
    </x-slot:title>

    <form action="/login" method="POST" class="max-w-2xl mx-auto">

        @csrf
        <div class="space-y-10">
            <div class="border-b border-gray-200 pb-10">
                
                <div class="mt-8 grid grid-cols-1  gap-6 sm:grid-cols-6">

                    <div class="sm:col-span-4">
                        <x-formlable for="email">Email</x-formlable>
                        <div class="mt-2">
                            <x-formInput id="email" name="email" type="email" value="{{ old('email') }}" required />
                            <x-formError name="email" />
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-formlable for="password">Password</x-formlable>
                        <div class="mt-2">
                            <x-formInput id="password" name="password" type="password" value="{{ old('password') }}" />
                            <x-formError name="password" />
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
                    Log in
                </button>
            </div>
        </div>
    </form>



</x-layout>