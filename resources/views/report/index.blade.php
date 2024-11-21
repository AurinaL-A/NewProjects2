@vite(['resources/css/app.css','resources/js/app.js'])
<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Список заявок</h1>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-1  gap-4">
                    @foreach ($report as $report)
                    <div class="bg-white rounded-md shadow-md p-4">
                        <h2 class="text-xl font-bold mb-2">№ {{ $report->number }}</h2>
                        <p class="text-gray-700">{{ $report->description }}</p>
                        <p class="text-gray-500">({{ $report->created_at->format('d.m.Y') }})</p>
                        <form method="GET" action="{{route('reports.show', $report->users_id)}}">
                            @csrf
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus-shadow-outline">Редактировать</button>
                        </form>
                        <form method="POST" action="{{route('reports.destroy', $report->users_id)}}">
                            @method('delete')
                            @csrf
                            <input class=" my-3 bg-white rounded-full px-4 py-2 text-gray-700 font-medium shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" type="submit" value="Удалить">

                        </form>
                    </div>

                    @endforeach
                </div>
                <h2 class="text-2xl font-bold p-6">Создать отчет</h2>

                <form method="POST" action="{{ route('reports.store') }}" class="mt-4 p-6">
                    @csrf
                    <div class="form-group">
                        <label for="number" class="block text-gray-700 font-bold mb-2">Номер:</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="number" name="number">
                    </div>
                    <div class="form-group">
                        <label for="description" class="block text-gray-700 font-bold mb-2">Описание:</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description"></input>
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus-shadow-outline">
                        Создать
                    </button>
                </form>
            </div>
        </div>
    </div>



</x-app-layout>