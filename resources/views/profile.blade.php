<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">{{ __('Profile Settings') }}</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Manage your account preferences and security settings</p>
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Profile Information Section -->
            <div class="p-6 sm:p-8 bg-white dark:bg-[rgb(38,38,36)] shadow sm:rounded-lg border border-gray-200 dark:border-zinc-700">
                <div class="flex items-center mb-4">
                    <div class="rounded-full bg-indigo-100 dark:bg-indigo-900 p-2 mr-3">
                        <i class="fas fa-user text-indigo-600 dark:text-indigo-400"></i>
                    </div>
                    <h2 class="text-lg font-medium text-gray-900 dark:text-white">Profile Information</h2>
                </div>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-6">Update your account profile information and email address.</p>
                <div class="max-w-xl">
                    <livewire:profile.update-profile-information-form />
                </div>
            </div>

            <!-- Password Update Section -->
            <div class="p-6 sm:p-8 bg-white dark:bg-[rgb(38,38,36)] shadow sm:rounded-lg border border-gray-200 dark:border-zinc-700">
                <div class="flex items-center mb-4">
                    <div class="rounded-full bg-green-100 dark:bg-green-900 p-2 mr-3">
                        <i class="fas fa-lock text-green-600 dark:text-green-400"></i>
                    </div>
                    <h2 class="text-lg font-medium text-gray-900 dark:text-white">Update Password</h2>
                </div>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-6">Ensure your account is using a secure password.</p>
                <div class="max-w-xl">
                    <livewire:profile.update-password-form />
                </div>
            </div>

            <!-- Delete Account Section -->
            <div class="p-6 sm:p-8 bg-white dark:bg-[rgb(38,38,36)] shadow sm:rounded-lg border border-gray-200 dark:border-zinc-700">
                <div class="flex items-center mb-4">
                    <div class="rounded-full bg-red-100 dark:bg-red-900 p-2 mr-3">
                        <i class="fas fa-trash-alt text-red-600 dark:text-red-400"></i>
                    </div>
                    <h2 class="text-lg font-medium text-gray-900 dark:text-white">Delete Account</h2>
                </div>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-6">Permanently delete your account and all associated data.</p>
                <div class="max-w-xl">
                    <livewire:profile.delete-user-form />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
