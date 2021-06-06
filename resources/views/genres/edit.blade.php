<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Genre edit') }}
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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form action="{{ route('genres.update', $genre) }}" method="post">
                        @csrf
                        @method('put')

                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Name')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $genre->name ?? old('name') }}" required autofocus />
                        </div>

                        <!-- Slug -->
                        <div class="mt-4">
                            <x-label for="slug" :value="__('Slug')" />
                            <x-input id="slug" class="block mt-1 w-full" type="text" name="slug" value="{{ $genre->slug ?? old('slug') }}" required autofocus />
                        </div>

                        <x-button class="mt-4">
                            {{ __('Save') }}
                        </x-button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
