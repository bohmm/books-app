<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>

            <div class="flex items-center text-sm text-gray-500">
                @if (!empty($breadcrumbs))
                    @foreach ($breadcrumbs as $name => $path)
                        @if (!$loop->last)
                            <a href="{{ $path }}" class="text-indigo-600 hover:text-indigo-900">{{ $name }}</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 mx-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        @else
                            {{ $name }}
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-flow-row grid-cols-3 grid-rows-3 gap-6">
                <div class="p-6 flex justify-between items-center bg-white shadow-sm sm:rounded-lg">
                    <h2>Total Books</h2>
                    <div class="p-4 text-white rounded-full h-12 w-12 flex items-center justify-center bg-indigo-500">{{ $books }}</div>
                </div>

                <div class="p-6 flex justify-between items-center bg-white shadow-sm sm:rounded-lg">
                    <h2>Total Authors</h2>
                    <div class="p-4 text-white rounded-full h-12 w-12 flex items-center justify-center bg-indigo-500">{{ $authors }}</div>
                </div>

                <div class="p-6 flex justify-between items-center bg-white shadow-sm sm:rounded-lg">
                    <h2>Total Genres</h2>
                    <div class="p-4 text-white rounded-full h-12 w-12 flex items-center justify-center bg-indigo-500">{{ $genres }}</div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
