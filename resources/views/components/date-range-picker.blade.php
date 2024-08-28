{{-- <div id="date-range-picker" date-rangepicker {!! $attributes->merge(['class' => 'flex items-center relative']) !!}>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
            </svg>
        </div>
        <input id="datepicker-range-start" name="start" type="text" class="bg-gray-50 border border-gray-300 
                                                                        text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                                                        focus:border-blue-500 block w-full ps-10 p-2.5  
                                                                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                                                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                                                        placeholder="Fecha de inicio">
    </div>

    <span class="mx-4 text-gray-500">a</span>

    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
            </svg>
        </div>
        <input id="datepicker-range-end" name="end" type="text" class="bg-gray-50 border border-gray-300 
                                                                        text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                                                        focus:border-blue-500 block w-full ps-10 p-2.5  
                                                                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                                                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                                                        placeholder="Fecha fin">
    </div>
</div> --}}

{{-- <div class="relative flex">
    <input type="text" id="date-range-input" class="block w-full px-3 py-2 border border-gray-300 rounded-lg 
                                                dark:bg-gray-900 dark:text-gray-100 dark:border-gray-600 shadow-sm 
                                                focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
           placeholder="Selecciona un rango de fechas"
    >
    <div class="ml-3">
        <x-secondary-button id="reset-btn" type="button">Cancelar</x-secondary-button>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const input = document.getElementById('date-range-input');
        const resetBtn = document.getElementById('reset-btn');
        const acceptBtn = document.getElementById('accept-btn');
        
        const datepicker = flatpickr(input, {
            mode: "range",
            dateFormat: "d/m/Y",
            numberOfMonths: 2,
            onChange: function(selectedDates, dateStr, instance) {
                // Actualiza el valor del input cuando se selecciona el rango de fechas
                if (selectedDates.length === 2) {
                    input.value = `${selectedDates[0].toLocaleDateString()} - ${selectedDates[1].toLocaleDateString()}`;
                }
            }
        });

        // Funcionalidad del botón Resetear
        resetBtn.addEventListener('click', function() {
            datepicker.clear(); // Limpia el selector de fechas
            input.value = '';   // Limpia el input
        });

        // Funcionalidad del botón Aceptar
        acceptBtn.addEventListener('click', function() {
            const dates = datepicker.selectedDates;
            if (dates.length === 2) {
                // Puedes realizar alguna acción con las fechas seleccionadas aquí
                alert(`Fechas seleccionadas: ${dates[0].toLocaleDateString()} - ${dates[1].toLocaleDateString()}`);
            } else {
                alert('Por favor, selecciona un rango de fechas.');
            }
        });
    });
</script> --}}

<div id="date-range-picker" date-rangepicker datepicker-format="dd/mm/yyyy" datepicker-buttons datepicker-autoselect-today {!! $attributes->merge(['class' => 'flex items-center relative']) !!}>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
            </svg>
        </div>
        <input id="datepicker-range-start" name="start" type="text" class="bg-gray-50 border border-gray-300 
                                                                        text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                                                        focus:border-blue-500 block w-full ps-10 p-2.5  
                                                                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                                                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                                                        placeholder="Fecha de inicio">
    </div>

    <span class="mx-4 text-gray-500">a</span>

    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
            </svg>
        </div>
        <input id="datepicker-range-end" name="end" type="text" class="bg-gray-50 border border-gray-300 
                                                                        text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                                                        focus:border-blue-500 block w-full ps-10 p-2.5  
                                                                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                                                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                                                        placeholder="Fecha fin">
    </div>
</div>


