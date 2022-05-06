@props(['active'])

@php
$classes = ($active ?? false)
            ? 'animate-pulse flex items-center justify-center p-2 transition-colors bg-gradient-to-r from-gray-900 to-teal-500 text-white text-white text-white px-3 py-2 rounded-md text-sm font-medium border-2'
            : 'flex items-center justify-center p-2 hover:bg-gray-600 hover:text-white transition-colors bg-gray-800 text-white px-3 py-2 rounded-md text-sm font-medium border-2 border-opacity-40';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <span aria-hidden="true">
      <svg class="w-5 h-5 stroke-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        {{ $path }}
      </svg>
    </span>
    {{-- <span class="ml-2 text-sm"> {{ $slot }} </span>   --}}
</a>