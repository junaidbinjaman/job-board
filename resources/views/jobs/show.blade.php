<x-layout>
    <x-slot:heading>
        Single job page
    </x-slot:heading>
    <p><strong>Title:</strong> {{$job->title}}</p>
    <p><strong>Salary:</strong> {{$job->salary}}</p>

    <x-button href="/job/{{ $job->id  }}/edit">Edit Jobs</x-button>
</x-layout>
