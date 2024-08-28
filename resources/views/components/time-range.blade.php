
<div {!! $attributes->merge(['class' => 'mt-1']) !!}>
    <div class="max-w-xs mx-3.5 grid grid-cols-2 gap-4 ">
        <div>
            <label for="start-time" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Comienza:</label>
            <div class="relative">
                <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <input type="time" id="start-time" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900
                                                        focus:border-indigo-500 dark:focus:border-indigo-600 
                                                        focus:ring-indigo-500 dark:focus:ring-indigo-600 w-full p-2.5 rounded-md shadow-sm" 
                                                        value="00:00" required />
            </div>
        </div>
        <div>
            <label for="end-time" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Termina:</label>
            <div class="relative">
                <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <input type="time" id="end-time" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900
                                                        focus:border-indigo-500 dark:focus:border-indigo-600 
                                                        focus:ring-indigo-500 dark:focus:ring-indigo-600 w-full p-2.5 rounded-md shadow-sm"
                                                        value="00:00" required />
            </div>
        </div>
    </div>
</div>