<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Административная панель') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col gap-2 p-5">
            @foreach($reports as $report)
    <div class="bg-white shadow-sm sm:rounded-lg p-4 border border-gray-200 ">
        <div class="flex justify-between items-center mb-2">
            <p class="text-red-500 font-semibold">{{ \Carbon\Carbon::parse($report->created_at)->translatedFormat('d.m.Y') }}</p>
            @if ($report->status_id == 1)
                <span class="text-blue-500 font-semibold">новое</span>
            @elseif ($report->status_id == 2)
                <span class="text-red-500 font-semibold">отклонено</span>
            @else
                <span class="text-blue-500 font-semibold">подтверждено</span>
            @endif
        </div>
        <p class="font-bold">{{ $report->number }}</p>
        <p class="text-gray-700">{{ $report->description }}</p>
        <p class="text-sm text-gray-500 mt-2">Пользователь: {{ $report->user->fullName() }}</p>

        @if ($report->status_id == 1)
        <form id="form-update-{{$report->id}}" action="{{ route('report.update') }}" method="POST" class="mt-4">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" value="{{$report->id}}">
            <select name="status_id" onchange="document.getElementById('form-update-{{$report->id}}').submit()" class="border border-gray-300 rounded p-2">
                @foreach ($statuses as $status)
                    <option value="{{$status->id}}">{{$status->name}}</option>
                @endforeach
            </select>
        </form>
        @endif
    </div>
    @endforeach
            </div>
        </div>
    </div>
</x-app-layout>