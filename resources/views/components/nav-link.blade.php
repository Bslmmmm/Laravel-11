@props(['active' => false])
<a {{ $attributes }}
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-mdpx-3 py-2 text-sm font-medium text-white"
    aria-current="{{ $active ? 'page' : false }}" {{ $attributes }}>{{ $slot }}</a>