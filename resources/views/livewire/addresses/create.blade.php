<div>
    <flux:modal name="create-address" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Neue Adresse erfassen</flux:heading>
                <flux:subheading>Tragen Sie die neue Adresse ein</flux:subheading>
            </div>

                <flux:input wire:model="street" label="Straße*" placeholder="Straße mit Hausnummerr" />
                <flux:input wire:model="postal_code" label="PLZ*" placeholder="Postleitzahl" />
                <flux:input wire:model="city" label="Stadt*" placeholder="Ortsname" />
                <flux:input wire:model="district" label="Stadtteil" placeholder="Stadtteil, falls vorhanden" />
                <flux:textarea
                    wire:model="remark"
                    label="Bemerkung"
                    placeholder="Tragen Sie hier Ihre Anmerkungen ein"
                />
                <div class="flex">
                    <flux:spacer />

                    <flux:button wire:click.prevent="saveAddress" type="submit" variant="primary">Speichern</flux:button>
                </div>



        </div>
    </flux:modal>
</div>
