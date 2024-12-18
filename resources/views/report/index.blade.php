@vite(['resources/css/app.css','resources/js/app.js'])
@include('layouts.flash-messages')
<x-app-layout>
<x-slot name="header">
        <div class="w-full flex justify-between items-center">
            
            <a href="{{route('reports.create')}}" data-modal-target="default-modal" data-modal-toggle="default-modal" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 h-12 text-center flex items-center" type="button">
            {{__('Создать заявление')}}
            </a> 

        </div>
    </x-slot>
    <div class="max-w-7xl mx-auto py-6 px-4 flex flex-col gap-5 flex-wrap justify-between">

        @foreach ($reports as $report)
        <div class="bg-white flex flex-col gap-5 p-4  rounded-xl w-full">
            <p class="text-red-700 font-bold">
                {{\Carbon\Carbon::parse($report->created_at)->toDateString()}}
            </p>
            <div class="flex justify-between gap-1 flex-wrap">
                <p class="font-bold">
                        {{ $report->number }}
                </p>
                <p class="text-left">{{ $report['description'] }}</p>
                <p id="statusText" class="font-bold statusText">{{ $report->status->name }}</p>
            </div>
            
        </div>
        @endforeach
    </div>
</x-app-layout>