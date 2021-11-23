<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Category;
// use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Cart;
// use App\Models\Cart;
// use Illuminate\Database\Eloquent\Builder::latest();

class DetailComponent extends Component
{

    public $slug;

    public function mount($slug){

        $this->slug = $slug;

    }

    public function store($product_id,$product_name,$product_price){

        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item ad in Cart');
        return redirect()->route('product.cart');

    }

    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        $popular_product = Product::inRandomOrder()->limit(5)->get();
        $related_product = Product::Where('category_id',$product->category_id)->inRandomOrder()->limit(4)->get();
        return view('livewire.detail-component',['product'=>$product,'popular_product'=>$popular_product,'related_product'=>$related_product])->layout('layouts.base');
    }
}

