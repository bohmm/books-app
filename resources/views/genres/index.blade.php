<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Genres') }}
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

            @if ($genres->count())
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                ID
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Books
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Slug
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Options</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($genres as $genre)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $genre->id }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $genre->name }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                    <a href="{{ route('genres.books', $genre) }}" class="text-indigo-500 hover:text-indigo-900">show books</a>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $genre->slug }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="{{ route('genres.show', $genre) }}" class="text-indigo-600 hover:text-indigo-900">Show</a>
                                                    <a href="#" class="mx-2 text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    <a href="#" class="text-pink-600 hover:text-pink-900">Remove</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    {{ $genres->links() }}
                </div>
            @else
                No genres found
            @endif

        </div>
    </div>
</x-app-layout>
