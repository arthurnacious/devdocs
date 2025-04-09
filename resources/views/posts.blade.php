<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">{{ __('Documentation Posts') }}</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Here is a list of documentation posts, you can search and filter them to find the one you are looking for.</p>
        </h2>
    </x-slot>


    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="py-4">

            <div class="bg-white dark:bg-[rgb(38,38,36)] shadow-md rounded-lg overflow-hidden border border-gray-200 dark:border-zinc-700">
                <!-- Table Header with Search and Filters -->
                <div class="p-5 border-b border-gray-200 dark:border-zinc-700">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white flex items-center">
                            <i class="fas fa-book-open mr-2 text-indigo-500 dark:text-indigo-400"></i>
                            Documentation Library
                        </h3>

                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400 dark:text-gray-500"></i>
                            </div>
                            <input type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-300 dark:border-zinc-700 rounded-md leading-5 bg-white dark:bg-zinc-800 dark:text-gray-100 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 sm:text-sm" placeholder="Search documentation...">
                        </div>
                    </div>

                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach ($categories as $category)
                            <button class="inline-flex items-center px-3 py-1 border border-transparent text-sm leading-4 font-medium rounded-md text-white
                                @if($category->id === 1) bg-indigo-600 @endif
                                focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 hover:bg-gray-50 dark:hover:bg-zinc-700">
                                {{ $category->name }}
                            </button>
                        @endforeach
                    </div>
                </div>

                <!-- Table Content -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-zinc-700">
                        <thead class="bg-gray-50 dark:bg-zinc-800">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Title
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Last Updated
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Author
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-[rgb(38,38,36)] divide-y divide-gray-200 dark:divide-zinc-700">
                            <!-- Row 1 -->
                            @foreach ($posts as $post)
                                <tr class="hover:bg-gray-50 dark:hover:bg-zinc-800 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-8 w-8 flex items-center justify-center rounded-md bg-indigo-100 dark:bg-indigo-900 text-indigo-600 dark:text-indigo-400">
                                                <i class="fas fa-file-alt"></i>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900 dark:text-white">{{ Str::limit($post->title, 25) }}</div>
                                                <div class="text-sm text-gray-500 dark:text-gray-400">{{ $post->description }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full text-blue-800  dark:text-blue-200" style="background: {{ $post->category->color_hex }}">
                                            {{ $post->category->name }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ $post->updated_at->format('M d, Y') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="size-6 rounded-full bg-gray-200 dark:bg-neutral-900 overflow-hidden">
                                                <div class="border border-stone-950 rounded-full flex items-center justify-center">
                                                    <i class="fa-regular fa-user text-xs p-1 dark:text-stone-500 text-stone-950"></i>
                                                </div>
                                            </div>
                                            <div class="ml-2 text-sm text-gray-900 dark:text-white">
                                                {{$post->user->name}}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                                @if ($post->status === 'published') bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200
                                                @elseif ($post->status === 'draft') bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200
                                                @elseif ($post->status === 'archived') bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200
                                                @else bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200
                                                @endif
                                            ">
                                            {{$post->status}}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex justify-end space-x-2">
                                            <button class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-300">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="text-blue-600 dark:text-blue-400 hover:text-blue-900 dark:hover:text-blue-300">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
               {{ $posts->links()}}
            </div>

        </div>
    </div>

</x-app-layout>
