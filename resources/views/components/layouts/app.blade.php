<x-layouts.app.sidebar :title="$title ?? null">

    @include('partials.flash-message')

    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.app.sidebar>
