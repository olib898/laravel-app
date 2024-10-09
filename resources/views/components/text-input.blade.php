@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-0 dark:bg-zinc-900 dark:text-gray-300 focus:border-0 dark:focus:border-0 dark:focus:ring-0 shadow-sm']) !!}>
