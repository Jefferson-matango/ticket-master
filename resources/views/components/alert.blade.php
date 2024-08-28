
@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $class = "text-blue-800 bg-blue-200 dark:bg-gray-700 dark:text-blue-500";
            break;
        case 'danger':
            $class = "text-red-800 bg-red-200 dark:bg-gray-700 dark:text-red-500";
            break;
        case 'succes':
            $class = "text-green-800 bg-green-200 dark:bg-gray-700 dark:text-green-500";
            break;
        case 'warning':
            $class = "text-yellow-800 bg-yellow-200 dark:bg-gray-700 dark:text-yellow-500";
            break;
        case 'dark':
            $class = "text-gray-800 bg-gray-200 dark:bg-gray-700 dark:text-gray-500";
            break;
        default:
            $class = "text-blue-800 bg-blue-200 dark:bg-gray-700 dark:text-blue-500";
            break;
    }
@endphp

<div class="mt-4 p-4 mb-4 text-sm rounded-lg {{$class}}" role="alert">
    <span class="font-medium"> {{ $title?? 'Titulo de la alerta' }} </span> {{ $slot }}
</div>