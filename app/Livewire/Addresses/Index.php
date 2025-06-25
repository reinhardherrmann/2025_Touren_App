<?php

namespace App\Livewire\Addresses;

use App\Models\Address;
use Flux\Flux;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $idToDelete;

    public function showDeleteConfirm($id)
    {
        $this->idToDelete = $id;
        Flux::modal('delete-address')->show();

    }

    public function resetPagination()
    {
        $this->resetExcept(['search', 'perPage']);;
    }


    public function deleteAddress($id)
    {
        Address::destroy($id);
        return redirect()->to('/addresses')->with('success', 'Addresse erfolgreich gelöscht.');
    }

    public function resetSearch()
    {
        $this->reset(['search']);
    }

    public function updatedSearch()
    {
        // to always select the first page and show results
        $this->resetPage();
    }

    protected function applySearch($query)
    {
        return $this->search === ''
            ? $query
            : $query = Address::query()
                ->where('street', 'like', '%' . $this->search . '%')
                ->orWhere('postal_code', 'like', '%' . $this->search . '%')
                ->orWhere('city', 'like', '%' . $this->search . '%')
                ->orWhere('district', 'like', '%' . $this->search . '%')
                ->paginate($this->perPage);

    }

    public function render()
    {
        $query = Address::paginate($this->perPage);

        $query = $this->applySearch($query);

        return view('livewire.addresses.index', [
            'addresses' => $query
        ]);
    }
}
