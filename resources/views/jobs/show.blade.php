<x-layout>
   <x-slot name="title">
      job details
   </x-slot>
   

   <h1>job title : {{ $job['title'] }}</h1>
   <p>job salary : {{ $job['salary'] }}</p>
     

   <x-button href='/jobs/{{ $job->id }}/edit'>edit</x-button>



</x-layout>z