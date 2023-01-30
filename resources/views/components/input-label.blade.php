@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-neutral']) }}>
    {{ $value ?? $slot }}
</label>
