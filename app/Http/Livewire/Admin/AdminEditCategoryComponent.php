<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminEditCategoryComponent extends Component
{

    public $category_slug;
    public $category_id;
    public $name;
    public $slug;

    public function mount($category_slug){
        $category = Category::where('slug',$category_slug)->first();
        $this->category_id = $category->id;
       $this->slug = $category->slug;
       $this->name = $category->name;
        }

    public function generateslug(){
        $this->slug = Str::slug($this->name);
         }

    public function updateCategory(){
        $category = Category::find($this->category_id);
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message','Category has been update succeccfull');

    }

    public function render()
    {
        return view('livewire.admin.admin-edit-category-component')->layout('layouts.base');
    }
}
