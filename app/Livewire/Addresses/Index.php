<?php

namespace App\Livewire\Addresses;

use App\Models\Address;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        $query = Address::query()
        ->select(['id', 'street', 'postal_code', 'city', 'district', 'remark'])
        ->paginate(10);
        //dd($query);
        return view('livewire.addresses.index', [
            'addresses' => $query
        ]);
    }
}
