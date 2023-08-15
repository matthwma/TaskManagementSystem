<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Task') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form action="{{ route('tasks.store') }}" method="POST" class="p-4">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block font-medium text-gray-700">Task Name</label>
                    <input type="text" name="name" id="name" class="mt-1 p-2 border rounded w-full" required>
                </div>
                <!-- ... Add fields for description, due_date, and priority ... -->
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Create Task</button>
            </form>
        </div>
    </div>
</x-app-layout>
