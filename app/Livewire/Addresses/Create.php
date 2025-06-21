<?php

namespace App\Livewire\Addresses;

use App\Models\Address;
use Livewire\Component;

class Create extends Component
{
    public $street, $postal_code, $city, $district, $country, $remark, $image;

    protected $rules = [
        'street' => 'required',
        'postal_code' => 'required',
        'city' => 'required',
        'district' => 'nullable|min:3|max:150',
        'remark' => 'nullable|min:10|max:150',
    ];
    protected $messages = [
        'street.required' => 'Bitte geben Sie einen Straßennamen ein',
        'postal_code.required' => 'Bitte geben Sie eine Postleitzahl ein',
        'city.required' => 'Bitte geben Sie eine Stadt ein',
        'district.min' => 'Bitte geben Sie mindestens 3 Zeichen ein',
        'district.max' => 'Bitte geben Sie maximal 150 Zeichen ein',
        'remark.min' => 'Der Kommentar muss mindestens 3 Zeichen enthalten',
        'remark.max' => 'Der Kommentar muss maximal 150 Zeichen enthalten',
    ];

    public function saveAddress()
    {
        $validated = $this->validate();

        Address::create($validated);
        return redirect()->to('/addresses')->with('success', 'Adresse erfolgreich erstellt');
    }

    public function render()
    {
        return view('livewire.addresses.create');
    }
}
