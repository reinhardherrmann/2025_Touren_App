<x-layouts.app.sidebar :title="$title ?? null">



    <flux:main>
        @include('partials.flash-message')
        {{ $slot }}
    </flux:main>
</x-layouts.app.sidebar>
