<?php

namespace App\Livewire\Addresses;

use App\Models\Address;
use Livewire\Component;

class Edit extends Component
{

    public $address;
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

    public function cancelEdit()
    {
        return redirect()->to('/addresses')->with('warning', 'Änderung wurde abgebrochen');
    }
    public function saveAddress()
    {
        $validated = $this->validate();
        Address::where('id', $this->address->id)->update([
            'street' =>$validated['street'],
            'postal_code' =>$validated['postal_code'],
            'city' =>$validated['city'],
            'district' =>$validated['district'],
            'remark' =>$validated['remark'],
        ]);
        return redirect()->to('/addresses')->with('success', 'Änderung wurde übernommen');

    }
    public function mount($id)
    {
        $this->address = Address::findOrFail($id);
        $this->street = $this->address->street;
        $this->postal_code = $this->address->postal_code;
        $this->city = $this->address->city;
        $this->district = $this->address->district;
        $this->country = $this->address->country;
        $this->remark = $this->address->remark;
        $this->image = $this->address->image;
        //dd($this->street);
    }
    public function render()
    {
        return view('livewire.addresses.edit',[
            'address' => $this->address,
        ]);
    }
}
