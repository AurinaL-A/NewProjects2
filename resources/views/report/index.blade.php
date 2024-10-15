@extends('layouts.main')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Список заявок</h1>

    <div class="grid grid-cols-1  gap-4">
        @foreach ($reports as $report)
            <div class="bg-white rounded-md shadow-md p-4">
                <h2 class="text-xl font-bold mb-2">№ {{ $report->number }}</h2>
                <p class="text-gray-700">{{ $report->description }}</p>
                <p class="text-gray-500">({{ $report->created_at->format('d.m.Y') }})</p>
            </div>
        @endforeach
    </div>
@endsection