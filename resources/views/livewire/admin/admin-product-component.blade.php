<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container " style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class=" panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                               All Category
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addproduct')}}" class="btn btn-success pull-right">Add New</a></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    {{-- <td > {{$product->image}}</td> --}}
                                    <td><img src=" {{asset('assets/images/products')}}/{{$product->image}}" style="width: 60px"/></td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->stock_status}}</td>
                                    <td>{{$product->regular_price}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->created_at}}</td>
                                    <td><a href="{{route('admin.editproduct',['product_slug'=>$product->slug])}}" class="fa fa-edit fa-2x"></a></td>
                                    <td><a href="#" style="margin-left: 10px" wire:click.prevent="deleteProduct({{$product->id}})" class="fa fa-times fa-2x text-danger"></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
