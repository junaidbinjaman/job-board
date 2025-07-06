<x-layout>
    <x-slot:heading>
        Single task page
    </x-slot:heading>
    <div>
        <h3><strong>Title:</strong> {{ $task->task_title }}</h3>
        <p><strong>Description:</strong> {{ $task->task_description }}</p>
    </div>
    <div class="mt-10 flex items-center justify-between">

        <button form="task-delete-form" class="bg-red-500 text-white py-3 px-5 rounded">Delete Task
        </button>

        <a href="/tasks/{{$task->id}}/edit" class="bg-indigo-500 text-white py-3 px-5 rounded">Edit Task</a>
    </div>

    <form action="/tasks/{{$task->id}}" method="POST" id="task-delete-form" class="hidden">
        @method('DELETE')
        @csrf
    </form>
</x-layout>
