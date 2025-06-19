<?php

namespace App\Livewire\Addresses;

use Livewire\Component;

class Create extends Component
{
    public $street, $postal_code, $city, $district, $country, $remark, $image;

    protected $rules = [
        'street' => 'required',
        'postal_code' => 'required',
        'city' => 'required',
        'district' => 'nullable|min:3|max:150',
    ];
    protected $messages = [];

    public function saveAddress()
    {
        dd($this->street);
    }

    public function render()
    {
        return view('livewire.addresses.create');
    }
}
