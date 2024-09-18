@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 _dark:border-gray-700 _dark:bg-gray-900 _dark:text-gray-300 focus:border-indigo-500 _dark:focus:border-indigo-600 focus:ring-indigo-500 _dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
