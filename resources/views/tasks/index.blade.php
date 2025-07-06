<x-layout>
    <x-slot:heading>
        Task List
    </x-slot:heading>

    @if(session('success'))
        <p class="bg-green-500 text-white rounded-md px-5 py-3 mb-10">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach($tasks as $task)
            <li>
                <a href="/tasks/{{ $task->id }}"><strong>Title:</strong> {{ $task->task_title }}</a> <br />
                <strong>Description:</strong> {{ $task->task_description }}
            </li>
            &nbsp;
        @endforeach
    </ul>
</x-layout>
