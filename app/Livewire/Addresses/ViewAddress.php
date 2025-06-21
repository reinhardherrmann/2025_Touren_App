<?php

namespace App\Livewire\Addresses;

use App\Models\Address;
use Livewire\Component;

class ViewAddress extends Component
{
    public $street, $postal_code, $city, $district, $country, $remark, $image;
    public $address;

    public function closeView()
    {
        return redirect()->to('/addresses');
    }
    public function mount($id)
    {
        $this->address = Address::findOrFail($id);
    }
    public function render(Address $address)
    {

        return view('livewire.addresses.view',[
            'address' => $this->address,
            'street' => $this->address->street,
        ]);
    }
}
