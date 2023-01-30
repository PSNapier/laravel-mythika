<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-sm btn-primary text-neutral']) }}>
    {{ $slot }}
</button>
