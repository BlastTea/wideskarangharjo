<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary text-white uppercase font-sans']) }}>
    {{ $slot }}
</button>
