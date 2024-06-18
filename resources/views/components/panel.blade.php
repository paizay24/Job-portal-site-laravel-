@php
    $classes = 'p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-700  transition-colors group duration-300';
@endphp
<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
