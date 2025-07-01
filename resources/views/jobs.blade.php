<x-layout>
    <x-slot:heading>
        Job Lists
    </x-slot:heading>
    @foreach($jobs as $job)
        <li><a href="/job/{{$job['id']}}">{{$job['title']}}</a></li>
    @endforeach
</x-layout>
