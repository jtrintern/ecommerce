<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;

class AddProduct extends Component
{
    public function render()
    {
        return view('livewire.add-product');
    }
}
