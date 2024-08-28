
@props(['title'=>''])

<div data-popover {!! $attributes->merge(['class' => 'absolute z-10 invisible inline-block w-64 text-sm 
                                                    text-gray-500 transition-opacity duration-300 
                                                    bg-white border border-gray-200 rounded-lg shadow-sm 
                                                    opacity-0 dark:text-gray-400 dark:border-gray-600 
                                                    dark:bg-gray-800'])!!} role="tooltip">
    @if ($title)
        <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
            <h3 class="font-semibold text-gray-900 dark:text-white">{{$title}}</h3>
        </div>
    @endif
    <div class="px-3 py-2">
        <p>{{$slot}}</p>
    </div>
    <div data-popper-arrow></div>
</div>
