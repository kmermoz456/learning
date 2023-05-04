<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-purple-700 border border-transparent rounded font-semibold text-xs text-white uppercase tracking-widest hover:shadow-lg hover:bg-purple-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
