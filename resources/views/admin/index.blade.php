<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    <h1>Админ панель</h1>
    <h2>Заявки</h2>
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Номер заявления
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Номер авто
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Текст заявления
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($reports as $report)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">

                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm font-medium text-gray-900">{{ $report->number }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-500">{{ $report->description }}</div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Статусы</h2>
    <div class="px-4 py-6 sm:px-0">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Статусы</h3>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                <ul class="list-disc pl-5">
                    @foreach ($statuses as $status)
                    <li class="text-gray-500 text-sm">{{ $status->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>

</html>