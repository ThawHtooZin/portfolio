<a
    {{ $attributes->merge(['class' => 'border-primary bg-primary p-2.5 px-3 rounded-lg hover:shadow-md hover:shadow-white ease-in-out duration-300', 'href' => '']) }}>
    {{ $slot }}
</a>
