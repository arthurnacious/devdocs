@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'block w-full pr-3 py-2 border border-gray-300 dark:border-zinc-700 rounded-md leading-5 bg-white dark:bg-zinc-800 dark:text-gray-100 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 sm:text-sm']) }}>
