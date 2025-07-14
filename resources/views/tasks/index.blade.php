<x-layout>
    <x-slot:heading>
        Task List
    </x-slot:heading>

    @if(session('success'))
        <p class="bg-green-500 text-white rounded-md px-5 py-3 mb-10">The task is created successfully</p>
    @endif

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
