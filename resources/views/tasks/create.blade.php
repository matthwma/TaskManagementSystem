<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Task') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-4">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form action="{{ route('tasks.store') }}" method="POST" class="p-4">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block font-medium text-gray-700">Task Name</label>
                    <input type="text" name="name" id="name" class="mt-1 p-2 border rounded w-full" value="{{ old('name') }}">
                    @error('name')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="description" class="block font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="4" class="mt-1 p-2 border rounded w-full">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="due_date" class="block font-medium text-gray-700">Due Date</label>
                    <input type="date" name="due_date" id="due_date" class="mt-1 p-2 border rounded w-full" value="{{ old('due_date') }}">
                    @error('due_date')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="priority" class="block font-medium text-gray-700">Priority</label>
                    <select name="priority" id="priority" class="mt-1 p-2 border rounded w-full" required>
                        <option value="" disabled>Select Priority</option>
                        <option value="high"{{ old('priority', 'medium') === 'high' ? ' selected' : '' }}>High</option>
                        <option value="medium"{{ old('priority', 'medium') === 'medium' ? ' selected' : '' }}>Medium</option>
                        <option value="low"{{ old('priority', 'medium') === 'low' ? ' selected' : '' }}>Low</option>
                    </select>
                    @error('priority')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Create Task</button>
            </form>
        </div>
    </div>
</x-app-layout>
