<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Административная панель') }}
        </h2>
    </x-slot>
    @include('layouts.flash-messages')
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-2 lg:px-8">
            <table class="rounded-lg w-full overflow-hidden ">
                <thead class="hidden sm:table-header-group">
                    <tr class="bg-blue-600">
                        <th class="text-white font-semibold p-3 text-left">Дата</th>
                        <th class="text-white font-semibold p-3 text-left">ФИО подавшего</th>
                        <th class="text-white font-semibold p-3 text-left">Номер автомобиля</th>
                        <th class="text-white font-semibold p-3 text-left">Описание заявленя</th>
                        <th class="text-white font-semibold p-3 text-left">Статус</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reports as $report)
                    <tr class="odd:bg-white even:bg-slate-100 sm:table-row flex flex-col p-1 sm:p-3">
                        <td class="p-1 sm:p-3">
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
                        </td>
                        <td class="p-1 sm:p-3">{{ $report->user->fullName() }}</td>
                        <td class="p-1 sm:p-3">{{ $report->number }}</td>
                        <td class="p-1 sm:p-3">{{ $report->description }}</td>
                        <td class="p-1 sm:p-3">


                            @if ($report->status_id == 1)
                            <form id="form-update-{{$report->id}}" action="{{route('report.update')}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="id" value="{{$report->id}}">
                                <select class="cursor-pointer hover:bg-slate-200" name="status_id" onchange="document.getElementById('form-update-{{$report->id}}').submit()">
                                    @foreach ($statuses as $status)
                                    <option value="{{$status->id}}">{{$status->name}}</option>
                                    @endforeach
                                </select>
                            </form>
                            @else
                            <span class="font-bold statusText" id="statusText">{{ $report->status->name }}</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>