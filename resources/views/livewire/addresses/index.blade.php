<div>
    <div class="flex">
        <flux:modal.trigger name="create-address">
            <!--<flux:button>Neue Adresse </flux:button> -->
            <button class="btn btn-success rounded-full text-white">Neue Adresse</button>


        </flux:modal.trigger>

        <!-- Seach Field -->
        <div class="join">
            <div>
                <label class="input validator join-item rounded-l-full ms-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21 21L15.8033 15.8033M15.8033 15.8033C17.1605 14.4461 18 12.5711 18 10.5C18 6.35786 14.6421 3 10.5 3C6.35786 3 3 6.35786 3 10.5C3 14.6421 6.35786 18 10.5 18C12.5711 18 14.4461 17.1605 15.8033 15.8033Z"
                            stroke="#0F172A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <input wire:model.live.debounce.500ms="search" class="rounded-s-2xl" type="text"
                           placeholder="Nach Adresse suchen"/>
                </label>
            </div>
            <button wire:click.prevent="resetSearch" title="Suche leeren"
                    class="btn btn-neutral join-item text-white  rounded-r-full">
                <svg class="text-white ms-3" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 18L18 6M6 6L18 18" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </button>
            <!-- Anzahl der angezeigten Datensätze -->


                <select wire:model="perPage" wire:change="resetPagination" class="select w-32 rounded-full ms-3">
                    <option value="5">5 pro Seite</option>
                    <option value="10" >10 pro Seite</option>
                    <option value="20" >20 pro Seite</option>
                    <option value="50" >50 pro Seite</option>
                    <option value="100" >100 pro Seite</option>
                </select>


        </div>

    </div>


    <livewire:addresses.create/>


    <div class="mt-4 overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-100 whitespace-nowrap">
            <tr>
                <th class="p-4 text-left text-[13px] font-semibold text-slate-900">
                    Straße
                </th>
                <th class="p-4 text-left text-[13px] font-semibold text-slate-900">
                    PLZ
                </th>
                <th class="p-4 text-left text-[13px] font-semibold text-slate-900">
                    Ort
                </th>
                <th class="p-4 text-left text-[13px] font-semibold text-slate-900">
                    Stadtteil
                </th>
                <th class="p-4 text-left text-[13px] font-semibold text-slate-900">
                    Actions
                </th>
            </tr>
            </thead>

            <tbody class="whitespace-nowrap">
            @foreach($addresses as $address)
                <tr wire:key="{{ $address->id }}"
                    class="even:bg-blue-50 hover:bg-blue-100">
                    <td class="p-4 text-[15px] text-slate-900 font-medium">
                        {{ $address->street }}
                    </td>
                    <td class="p-4 text-[15px] text-slate-600 font-medium">
                        {{ $address->postal_code }}
                    </td>
                    <td class="p-4 text-[15px] text-slate-600 font-medium">
                        {{ $address->city }}
                    </td>
                    <td class="p-4 text-[15px] text-slate-600 font-medium">
                        {{ $address->district }}
                    </td>
                    <td class="p-4">
                        <div class="flex items-center">

                            <a class="mr-3 cursor-pointer" title="Ansehen"
                            href="/address/{{ $address->id }}/view">
                                <svg class="w-5 h-5 text-green-500 hover:text-green-700"
                                     width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.03555 12.3224C1.96647 12.1151 1.9664 11.8907 2.03536 11.6834C3.42372 7.50972 7.36079 4.5 12.0008 4.5C16.6387 4.5 20.5742 7.50692 21.9643 11.6776C22.0334 11.8849 22.0335 12.1093 21.9645 12.3166C20.5761 16.4903 16.6391 19.5 11.9991 19.5C7.36119 19.5 3.42564 16.4931 2.03555 12.3224Z"
                                        stroke="#0F172A" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                        stroke="#0F172A" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                </svg>
                            </a>


                            <a href="/address/{{ $address->id }}/edit"
                                class="mr-3 cursor-pointer" title="Bearbeiten">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-5 h-5 fill-blue-500 hover:fill-blue-700"
                                     viewBox="0 0 348.882 348.882">
                                    <path
                                        d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                                        data-original="#000000"/>
                                    <path
                                        d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                                        data-original="#000000"/>
                                </svg>
                            </a>

                                <!--<flux:button variant="danger">Delete</flux:button>-->
                                <button wire:click.prevent="showDeleteConfirm({{$address->id}})"
                                        title="Löschen" class="cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-red-500 hover:fill-red-700"
                                         viewBox="0 0 24 24">
                                        <path
                                            d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                            data-original="#000000"/>
                                        <path
                                            d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                            data-original="#000000"/>
                                    </svg>
                                </button>



                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <div class="mt-3">
            {{ $addresses->links() }}
        </div>

    </div>

    <flux:modal name="delete-address" class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Adresse löschen?</flux:heading>

                <flux:text class="mt-2">
                    <p>Sie sind dabei, eine Adresse zu löschen.</p>
                    <p>Diese Aktion kann nicht rückgängig gemacht werden!</p>
                </flux:text>
            </div>

            <div class="flex gap-2">
                <flux:spacer />

                <flux:modal.close>
                    <flux:button variant="ghost">Abbruch</flux:button>
                </flux:modal.close>

                <flux:button wire:model="idToDelete" wire:click="deleteAddress({{ $idToDelete }})" variant="danger">Löschen</flux:button>
            </div>
        </div>
    </flux:modal>
</div>





