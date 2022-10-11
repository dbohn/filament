@props([
    'wireModel' => 'tableSearch',
])

<div {{ $attributes->class(['filament-tables-search-input']) }}>
    <label for="tableSearchInput" class="sr-only">
        {{ __('tables::table.fields.search.label') }}
    </label>

    <div class="relative group">
        <span class="absolute inset-y-0 left-0 flex items-center justify-center w-9 h-9 text-gray-400 pointer-events-none group-focus-within:text-primary-500">
            <x-heroicon-o-search class="w-5 h-5" />
        </span>

        <input
            wire:model.debounce.500ms="{{ $wireModel }}"
            id="tableSearchInput"
            placeholder="{{ __('tables::table.fields.search.placeholder') }}"
            type="search"
            autocomplete="off"
            @class([
                'block w-full max-w-xs h-9 pl-9 placeholder-gray-400 transition duration-75 border-gray-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-500',
                'dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400' => config('tables.dark_mode'),
            ])
        >
    </div>
</div>
