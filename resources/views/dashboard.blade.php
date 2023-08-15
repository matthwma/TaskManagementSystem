<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-semibold mb-4">Task Dashboard</h2>
        <a href="{{ route('tasks.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Create
            Task</a>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <table class="min-w-full">
                <thead>
                <tr class="bg-gray-100">
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Task
                        Name
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Description
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Due
                        Date
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Priority
                    </th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                @foreach ($tasks as $task)
                    <tr>
                        <td class="px-6 py-4">{{ $task->name }}</td>
                        <td class="px-6 py-4">{{ $task->description }}</td>
                        <td class="px-6 py-4">{{ $task->due_date }}</td>
                        <td class="px-6 py-4">{{ $task->priority }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
