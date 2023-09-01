<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Service') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-36">
            <div class="font-sans antialiased">
                <div class="flex min-h-screen flex-col items-center bg-gray-100 pt-6 sm:justify-center sm:pt-0">
                    <div class="mt-6 w-full overflow-hidden rounded-lg bg-white px-16 py-20 lg:max-w-4xl">
                        <div class="mb-4">
                            <h1 class="font-serif text-3xl font-bold">Create Post</h1>
                        </div>
                        <div class="w-full rounded bg-white px-8 py-8 shadow-md ring-1 ring-gray-900/10 m-5">
                            <form method="POST" action="{{ route('services.update',$services->id) }}">
                                @csrf
                                @method('PUT')
                                <!-- Title -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700" for="title"> Title </label>
                                    <input required value="{{ $services->title }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="title" placeholder="">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700" for="icon"> Icon </label>
                                    <input value="{{ $services->icon }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="icon" placeholder="180">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700" for="description"> Description </label>
                                    <input value="{{ $services->description }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="description" placeholder="180">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700" for="icon_color"> Icon Color </label>
                                    <input value="{{ $services->icon_color }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="icon_color" placeholder="180">
                                </div>
                                <div class="mt-4 flex items-center justify-start">
                                    <button type="submit" class="inline-flex items-center rounded-md bg-sky-500 px-6 py-2 text-sm font-semibold text-sky-100 ring-gray-300 hover:bg-sky-700 focus:border-gray-900 focus:outline-none focus:ring">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
