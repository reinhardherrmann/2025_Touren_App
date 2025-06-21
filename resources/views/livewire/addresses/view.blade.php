<div>

        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Adresse betrachten</flux:heading>
                <flux:subheading>Schlagen Sie die Anschrift nach</flux:subheading>
            </div>

            <flux:input value="{{ $address->street }}" readonly="true" variant="filled" label="Straße:" />
            <flux:input value="{{ $address->postal_code }}" readonly="true" variant="filled" label="PLZ"  />
            <flux:input value="{{ $address->city }}" readonly="true" variant="filled" label="Stadt"  />
            <flux:input value="{{ $address->district }}" readonly="true" variant="filled" label="Stadtteil"  />
            <flux:textarea  readonly="true"
                            value="{{ $address->remark }}"
                            variant="filled"
                            label="Bemerkung"
            />
            <div class="flex">
                <flux:spacer />
                <flux:button
                    wire:click="closeView"
                    variant="primary">Schließen</flux:button>
            </div>



        </div>
 </div>
