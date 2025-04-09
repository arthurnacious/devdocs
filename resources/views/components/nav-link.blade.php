@props(['active'])

@php
$classes = ($active ?? false)
            ? 'group flex items-center px-2 py-2 text-sm font-medium rounded-md text-white bg-zinc-700 dark:bg-[rgb(48,48,46)]'
            : 'group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-zinc-700 hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
