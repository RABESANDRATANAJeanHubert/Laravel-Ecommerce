<div>
    <div class="container" style="padding: 30 px  0;">
    <div class="row">
     <div class="col-md-12">
         <div class="panel panel-default">
             <div class="panel-heeding">
                 <div class="row">
                     <div class="col-md-6">
                        Edit Product
                     </div>
                     <div class="col-md-6">
                        <a href="{{route('admin.product')}}" class="btn btn-success pull-right">All Product</a>
                    </div>
                 </div>
             </div>
             <div class="panel-body">
                 <form class="form-horizontal"  wire:submit.prevent="updateProduct">
                     @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                     @endif
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Product Name</label>
                         <div class="col-md-4">
                            <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug">
                         </div>
                     </div>
                     <div class="form-group">
                        <label for="" class="col-md-4 control-label" >Product slug</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label" >Short Description</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Short Description" class="form-control input-md" wire:model="short_description">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label" >Description</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Description" class="form-control input-md" wire:model="description">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label" >Regular Price</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Regular Price" class="form-control input-md" wire:model="regular_price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label" >Sale Price</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Sale Price" class="form-control input-md" wire:model="sale_price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label" >SKU</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Stock</label>
                        <div class="col-md-4">
                            <select name="" id="" class="class-control" wire:model="stock_status">
                                <option value="instock">Instock</option>
                                <option value="outofstock">Out Of Stock</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label"  >Featured</label>
                        <div class="col-md-4">
                            <select name="" id="" class="class-control" wire:model="featured">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label" >Quantity</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Quantity" class="form-control input-md" wire:model="quantity">
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label for="" class="col-md-4 control-label" >Product Image</label>
                        <div class="col-md-4">
                            <input type="file"  class="input-file" wire:model="image">
                            @if($newimage)
                            <img width="60" src="{{$newimage->temporaryUrl()}}" >
                            @else
                                <img width="60" src="assets/images/{{$image}}" >
                            @endif
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label" >Category</label>
                        <div class="col-md-4">
                            <select  class="class-control" wire:model="category_id">
                                <option value="0">Select Category</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                               @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary" >save</button>
                        </div>
                    </div>
                 </form>
             </div>
         </div>
     </div>
    </div>
    </div>
</div>
