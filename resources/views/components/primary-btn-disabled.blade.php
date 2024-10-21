<button disabled style="cursor: not-allowed;"
    {{ $attributes->merge(['class' => 'border-blue-200 bg-blue-800 text-gray-400 p-2.5 px-3 rounded-lg']) }}>
    {{ $slot }}
</button>
