<button {{ $attributes->merge(['type' => 'button', 'class' => 'text-wrap inline-flex items-center px-4 py-2 bg-transparent border border-primary hover:border-primary-hover rounded-full font-semibold text-xs text-primary hover:text-primary-hover uppercase shadow-sm focus:outline-none focus:ring-1 focus:ring-primary disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
