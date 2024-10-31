@vite(['resources/css/app.css','resources/js/app.js'])
@extends('layouts.main')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Редактирование отчета</h1>

    <form method="POST" action="{{ route('reports.update', $report->id) }}">
        @csrf
        @method('put')
        <div class="mb-4">
            <label for="number" class="block text-gray-700 text-sm font-bold mb-2">Номер авто:</label>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="number" name="number" value="{{ $report->number }}">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Описание заявки:</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description">value="{{ $report->description }}"</input>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus-shadow-outline">
            Обновить
        </button>
    </form>
</div>
@endsection