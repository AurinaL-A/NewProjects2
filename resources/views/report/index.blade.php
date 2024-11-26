@vite(['resources/css/app.css','resources/js/app.js'])
<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Список заявок</h1>
    <x-nav-link :href="route('reports.create')">
        {{__('Создать заявление')}}
    </x-nav-link>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @foreach($report as $report)
                    <p>{{\Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y')}}</p>
                    <p>{{$report->number}}</p>
                    <p>{{$report->description}}</p>
                    
                @endforeach
            </div>
        </div>
    </div>



</x-app-layout>