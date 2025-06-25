<x-layouts.app :title="__('Adressen')">

    <div>
        <flux:heading size="xl" level="1">{{ __('Adressen') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Verwalten Sie Ihre Adressen') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div class="mt-8">
        @livewire('addresses.index')
    </div>

</x-layouts.app>
