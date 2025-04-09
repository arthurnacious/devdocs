<x-app-layout>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Dashboard</h1>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <div class="py-4">
                <!-- Dashboard content goes here -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                    <!-- Stats cards -->
                    <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">Total Users</dt>
                                <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-white">12,453</dd>
                                <dd class="mt-2 flex items-center text-sm text-green-600 dark:text-green-500">
                                    <i class="fas fa-arrow-up mr-1"></i>
                                    <span class="font-medium">3.2%</span>
                                    <span class="ml-1 text-gray-500 dark:text-gray-400">from last month</span>
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">New Signups</dt>
                                <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-white">2,376</dd>
                                <dd class="mt-2 flex items-center text-sm text-green-600 dark:text-green-500">
                                    <i class="fas fa-arrow-up mr-1"></i>
                                    <span class="font-medium">5.4%</span>
                                    <span class="ml-1 text-gray-500 dark:text-gray-400">from last week</span>
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">Active Projects</dt>
                                <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-white">432</dd>
                                <dd class="mt-2 flex items-center text-sm text-red-600 dark:text-red-500">
                                    <i class="fas fa-arrow-down mr-1"></i>
                                    <span class="font-medium">1.3%</span>
                                    <span class="ml-1 text-gray-500 dark:text-gray-400">from yesterday</span>
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">Revenue</dt>
                                <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-white">$63,246</dd>
                                <dd class="mt-2 flex items-center text-sm text-green-600 dark:text-green-500">
                                    <i class="fas fa-arrow-up mr-1"></i>
                                    <span class="font-medium">7.2%</span>
                                    <span class="ml-1 text-gray-500 dark:text-gray-400">from last month</span>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <!-- Activity list -->
                <div class="bg-white dark:bg-zinc-800 shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 border-b border-gray-200 dark:border-zinc-700 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">Recent Activity</h3>
                    </div>
                    <ul role="list" class="divide-y divide-gray-200 dark:divide-zinc-700">
                        <li>
                            <a href="#" class="block hover:bg-gray-50 dark:hover:bg-zinc-700">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-sm font-medium text-indigo-600 dark:text-indigo-400 truncate">New user registration</p>
                                        <div class="ml-2 flex-shrink-0 flex">
                                            <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Completed</p>
                                        </div>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                        <div class="sm:flex">
                                            <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                                <i class="fas fa-user flex-shrink-0 mr-1.5 text-gray-400 dark:text-gray-500"></i>
                                                Jane Smith
                                            </p>
                                        </div>
                                        <div class="mt-2 flex items-center text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
                                            <i class="fas fa-clock flex-shrink-0 mr-1.5 text-gray-400 dark:text-gray-500"></i>
                                            <p>10 minutes ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block hover:bg-gray-50 dark:hover:bg-zinc-700">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-sm font-medium text-indigo-600 dark:text-indigo-400 truncate">Project update: Dashboard redesign</p>
                                        <div class="ml-2 flex-shrink-0 flex">
                                            <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200">In Progress</p>
                                        </div>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                        <div class="sm:flex">
                                            <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                                <i class="fas fa-project-diagram flex-shrink-0 mr-1.5 text-gray-400 dark:text-gray-500"></i>
                                                Design Team
                                            </p>
                                        </div>
                                        <div class="mt-2 flex items-center text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
                                            <i class="fas fa-clock flex-shrink-0 mr-1.5 text-gray-400 dark:text-gray-500"></i>
                                            <p>1 hour ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block hover:bg-gray-50 dark:hover:bg-zinc-700">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-sm font-medium text-indigo-600 dark:text-indigo-400 truncate">New comment on blog post</p>
                                        <div class="ml-2 flex-shrink-0 flex">
                                            <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">New</p>
                                        </div>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                        <div class="sm:flex">
                                            <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                                <i class="fas fa-comment flex-shrink-0 mr-1.5 text-gray-400 dark:text-gray-500"></i>
                                                Marketing Campaign
                                            </p>
                                        </div>
                                        <div class="mt-2 flex items-center text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
                                            <i class="fas fa-clock flex-shrink-0 mr-1.5 text-gray-400 dark:text-gray-500"></i>
                                            <p>3 hours ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="bg-white dark:bg-zinc-800 px-4 py-3 border-t border-gray-200 dark:border-zinc-700 text-right sm:px-6">
                        <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            View All
                        </button>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
