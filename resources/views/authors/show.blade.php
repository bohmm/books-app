<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Author detail') }}
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

            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        {{ $author->name }}
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        {{ $author->slug }}
                    </p>
                </div>

                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Decription
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $author->description }}
                            </dd>
                        </div>

                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Author ID
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $author->id }}
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
  

        </div>
    </div>
</x-app-layout>
