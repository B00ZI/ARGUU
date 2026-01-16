<x-layout>
   <x-slot name="title">
      jobs list
   </x-slot>
   <ul>
      @foreach ( $jobs as $job)
      
      <a href="/jobs/{{ $job['id'] }}">
      <li> <b>{{ $job['title'] }}</b> pays: {{ $job['salary'] }} per year </li>
      </a>
      @endforeach
   </ul>



</x-layout>