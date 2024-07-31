@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-gray-300 focus:border-primary focus:ring-primary rounded-md shadow-sm block mt-1 w-full',
]) !!}>{{ $slot }}</textarea>

