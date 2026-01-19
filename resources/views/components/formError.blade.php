@props(['name'])


@error($name)

<p class="text-red-700 mt-2  text-sm font-semibold"> {{ $message }}</p>

@enderror