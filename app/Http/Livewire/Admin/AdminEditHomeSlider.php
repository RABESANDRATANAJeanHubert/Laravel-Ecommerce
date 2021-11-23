<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\Component;

class AdminEditHomeSlider extends Component
{
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;
    public $slide_id;


    //get  ID  slide from
    public function mount($slide_id)
    {
        $slide = HomeSlider::find($slide_id);
        $this->title = $slide->title;
        $this->subtitle = $slide->subtitle;
        $this->price = $slide->price;
        $this->link = $slide->link;
        $this->image = $slide->image;
        $this->status = $slide->status;
        $this->slide_id = $slide->id;
    }

    // update slide Id
    public function  UpdateHomeSlide()
    {
        $slide =   HomeSlider::find($this->slide_id);
        $slide->title = $this->title;
        $slide->subtitle = $this->subtitle;
        $slide->price = $this->price;
        $slide->link = $this->link;
        if ($this->newimage) {
            $imageName =  Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('sliders', $imageName);
            $slide->image = $imageName;
        }
        $slide->status = $this->status;
        $slide->save();
        session()->flash('message', 'Slide has been update successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-home-slider')->layout('layouts.base');
    }
}