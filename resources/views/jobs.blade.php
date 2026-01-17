<x-layout>
   <x-slot name="title">
      jobs list
   </x-slot>
   <div class="p-5 space-y-4  ">
      @foreach ( $jobs as $job)
      
      <a class= "block border  border-gray-500 rounded-2xl px-4 py-2" href="/jobs/{{ $job['id'] }}">
        <span class="block text-blue-950  text-xs mb-2 font-bold"> {{ $job->employer->employer }}</span>
        
       <b>{{ $job['title'] }}</b> pays: {{ $job['salary'] }} per year 
      </a>
      @endforeach
   </div>



</x-layout>