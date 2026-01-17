<x-layout>
   <x-slot name="title">
      jobs list
   </x-slot>
   <div class="flex flex-wrap p-5 gap-y-5 gap-x-3 justify-center  ">
      @foreach ( $jobs as $job)
      
      <a class= "block border grow border-gray-500 px-4 py-2" href="/jobs/{{ $job['id'] }}">
        <span class="block text-blue-950  text-xs mb-2 font-bold"> {{ $job->employer->employer }}</span>
        
       <b>{{ $job['title'] }}</b> pays: {{ $job['salary'] }} per year 
      </a>
      @endforeach
   </div>



</x-layout>