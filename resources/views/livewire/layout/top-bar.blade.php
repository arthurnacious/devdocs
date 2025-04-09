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

<div class="relative z-10 flex-shrink-0 flex h-16 bg-white dark:bg-zinc-900 shadow-2xl">
    <button @click="sidebarOpen = true" class="px-4 border-r border-gray-200 dark:border-zinc-700 text-gray-500 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
        <span class="sr-only">Open sidebar</span>
        <i class="fas fa-bars"></i>
    </button>
    <div class="flex-1 px-4 flex justify-between">
        <div class="flex-1 flex items-center">
            <div class="w-full max-w-lg lg:max-w-xs">
                <label for="search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                    <x-text-input id="search" name="search" type="text" class="pl-10 mt-1"  placeholder="Search" type="search" />
                </div>
            </div>
        </div>
        <div class="ml-4 flex items-center md:ml-6">
            <!-- Notification dropdown -->
            <div x-data="{ open: false }" class="ml-3 relative">
                <div>
                    <button @click="open = !open" class="p-1 rounded-full text-gray-400 dark:text-gray-300 hover:text-gray-500 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 relative">
                        <span class="sr-only">View notifications</span>
                        <i class="fas fa-bell text-3xl"></i>
                        <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-500 ring-2 ring-white dark:ring-zinc-800"></span>
                    </button>
                </div>
                <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-72 rounded-md shadow-lg py-1 bg-white dark:bg-zinc-800 ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <div class="px-4 py-2 border-b border-gray-200 dark:border-zinc-700">
                        <p class="text-sm font-medium text-gray-700 dark:text-gray-200">Notifications</p>
                    </div>
                    <a href="#" class="block px-4 py-3 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700" role="menuitem">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-user-plus text-indigo-500"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900 dark:text-white">New user registered</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">2 hours ago</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="block px-4 py-3 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700" role="menuitem">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-comment-alt text-green-500"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900 dark:text-white">New comment on your post</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">4 hours ago</p>
                            </div>
                        </div>
                    </a>
                    <div class="px-4 py-2 border-t border-gray-200 dark:border-zinc-700 text-center">
                        <a href="#" class="text-xs font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500">View all notifications</a>
                    </div>
                </div>
            </div>

            <!-- Profile dropdown -->
            <div x-data="{ open: false }" class="ml-3 relative">
                <div>
                    <button @click="open = !open" class="max-w-xs bg-white border border-stone-950 dark:bg-zinc-800 flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        <i class="fa-regular fa-user text-2xl m-2 dark:text-stone-500 text-stone-950"></i>
                    </button>
                </div>
                <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white dark:bg-zinc-800 ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <a href="{{route('profile')}}" wire:navigate class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700" role="menuitem">Your Profile</a>
                    <a href="#" wire:navigate class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700" role="menuitem">Settings</a>
                    <button wire:click="logout" class="w-full px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700 text-left" role="menuitem">Sign out</button>
                </div>
            </div>
        </div>
    </div>
</div>
