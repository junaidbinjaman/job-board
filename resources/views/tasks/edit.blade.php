<x-layout>
    <x-slot:heading>
        Edit a task
    </x-slot:heading>

    <form action="/tasks/{{$task->id}}" method="POST">
        @method('PATCH')
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="task_title" class="block text-sm/6 font-medium text-gray-900">Task Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="task_title" id="task_title"
                                       value="{{ $task->task_title }}"
                                       class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                       placeholder="Design a banner..."/>
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="task_description" class="block text-sm/6 font-medium text-gray-900">Task Description</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="task_description" id="task_description"
                                       value="{{ $task->task_description }}"
                                       class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                       placeholder="A banner for website..."/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/tasks" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Save
            </button>
        </div>
    </form>
</x-layout>
