<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Services') }}
        </h2>
    </x-slot>
    <div class="text-white mt-4 m-5">
        <h1>
            {{ $services['title'] }}
        </h1>
        <p>
            {{ $services['icon'] }}
        </p><br>
        <p>
            {{ $services['description'] }}
        </p>
        <p>
            {{ $services['icon_color'] }}
        </p>
        <p>
            {{ $services['created_at'] }}
        </p>
    </div>
</x-app-layout>
