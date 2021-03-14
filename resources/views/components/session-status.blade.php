@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-semibold text-sm text-green-600']) }}>
        {{ $status }}
    </div>
@endif
