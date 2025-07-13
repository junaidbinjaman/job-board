<x-layout>
    <x-slot:heading>
        Task List
    </x-slot:heading>

    <ul>
        @foreach($tasks as $task)
            <li>
                <strong>Title:</strong> {{ $task->task_title }} <br />
                <strong>Description:</strong> {{ $task->task_description }}
            </li>
            &nbsp;
        @endforeach
    </ul>
</x-layout>
