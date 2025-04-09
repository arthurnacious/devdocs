<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }

}; ?>

<div  x-data="{ sidebarOpen: false }" class="min-h-screen flex shadow-2xl"><!-- Sidebar for mobile - off-canvas menu -->
    <div x-show="sidebarOpen" class="fixed inset-0 flex z-40 md:hidden" role="dialog" aria-modal="true">
        <div x-show="sidebarOpen" x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-600 bg-opacity-75" @click="sidebarOpen = false"></div>

        <div x-show="sidebarOpen" x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="relative flex-1 flex flex-col max-w-xs w-full bg-zinc-800 dark:bg-zinc-900">

            <div class="absolute top-0 right-0 -mr-12 pt-2">
                <button @click="sidebarOpen = false" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">Close sidebar</span>
                    <i class="fas fa-times text-white"></i>
                </button>
            </div>

            <!-- Mobile sidebar content -->
            <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                <div class="flex-shrink-0 flex items-center px-4">
                    <span class="text-2xl font-bold text-white">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </span>
                </div>
                <nav class="mt-5 px-2 space-y-1">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate >
                        <i class="fas fa-home mr-3 text-gray-300"></i>
                        Dashboard
                    </x-nav-link>
                    <a href="#" class="group flex items-center px-2 py-2 text-base font-medium rounded-md text-gray-300 hover:bg-zinc-700 hover:text-white">
                        <i class="fas fa-users mr-3 text-gray-400"></i>
                        Users
                    </a>
                    <a href="#" class="group flex items-center px-2 py-2 text-base font-medium rounded-md text-gray-300 hover:bg-zinc-700 hover:text-white">
                        <i class="fas fa-cog mr-3 text-gray-400"></i>
                        Settings
                    </a>
                    <a href="#" class="group flex items-center px-2 py-2 text-base font-medium rounded-md text-gray-300 hover:bg-zinc-700 hover:text-white">
                        <i class="fas fa-chart-bar mr-3 text-gray-400"></i>
                        Analytics
                    </a>
                    <a href="#" class="group flex items-center px-2 py-2 text-base font-medium rounded-md text-gray-300 hover:bg-zinc-700 hover:text-white">
                        <i class="fas fa-file-alt mr-3 text-gray-400"></i>
                        Reports
                    </a>
                </nav>
            </div>
            <div class="flex-shrink-0 flex border-t border-zinc-700 p-4">
                <div class="flex-shrink-0 group block">
                    <div class="flex items-center">
                        <div>
                            <img class="inline-block h-10 w-10 rounded-full" src="https://via.placeholder.com/150" alt="User profile">
                        </div>
                        <div class="ml-3">
                            <p class="text-base font-medium text-white">{{auth()->user()->name}}</p>
                            <p class="text-sm font-medium text-gray-400">View profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden md:flex md:flex-shrink-0">
        <div class="flex flex-col w-64">
            <div class="flex-1 flex flex-col min-h-0 bg-zinc-800 dark:bg-zinc-900">
                <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center justify-center h-16 flex-shrink-0 px-4">
                        <div class="flex items-center justify-center">
                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                            <div class="text-3xl uppercase font-bold tracking-tight text-slate-900 dark:text-white">
                                Dev <span class="text-sky-500 -ml-1 italic">Doc</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 flex-1 flex flex-col">
                        <nav class="flex-1 px-2 space-y-1">
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate >
                                <i class="fas fa-home w-6 mr-3 text-gray-300"></i>
                                Dashboard
                            </x-nav-link>
                             <x-nav-link :href="route('dashboard')" :active="request()->routeIs('users')" wire:navigate >
                                <i class="fas fa-users w-6 mr-3 text-gray-400"></i>
                                Users
                             </x-nav-link>
                             <x-nav-link :href="route('dashboard')" :active="request()->routeIs('settings')" wire:navigate >
                                <i class="fas fa-cog w-6 mr-3 text-gray-400"></i>
                                Settings
                             </x-nav-link>
                             <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.index')" wire:navigate >
                                <i class="fas fa-chart-bar w-6 mr-3 text-gray-400"></i>
                                Doc Posts
                             </x-nav-link>
                             <x-nav-link :href="route('dashboard')" :active="request()->routeIs('reports')" wire:navigate >
                                <i class="fas fa-file-alt w-6 mr-3 text-gray-400"></i>
                                Reports
                             </x-nav-link>
                        </nav>
                    </div>
                </div>
                <div class="flex-shrink-0 flex border-t border-zinc-700 p-4">
                    <div class="flex-shrink-0 w-full group block">
                        <div class="flex items-center">
                            <div class="border border-stone-950 rounded-full">
                                <i class="fa-regular fa-user text-2xl m-2 dark:text-stone-500 text-stone-950"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium dark:text-stone-100 text-stone-950">{{auth()->user()->name}}</p>
                                <a href="{{route('profile')}}" wire:navigate class="text-xs font-medium dark:text-stone-500 text-stone-700">View profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
