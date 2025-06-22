<div>
    <div class="card w-96 shadow-xl">

        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Adressdaten ändern</flux:heading>
                <flux:subheading>Ändern Sie die Anschrift nach Bedarf</flux:subheading>
            </div>

            <flux:input wire:model="street"  label="Straße:"/>
            <flux:input wire:model="postal_code" label="PLZ"/>
            <flux:input wire:model="city" label="Stadt"/>
            <flux:input wire:model="district" label="Stadtteil"/>
            <flux:textarea wire:model="remark"
                           label="Bemerkung"
            />
            <flux:spacer/>
            <div class="flex">

                <flux:button
                    wire:click="cancelEdit"
                    variant="danger">Abbruch
                </flux:button>

                <flux:button
                    class="ml-3"
                    wire:click="saveAddress"
                    variant="primary">Speichern
                </flux:button>
            </div>


        </div>

    </div>
</div>
