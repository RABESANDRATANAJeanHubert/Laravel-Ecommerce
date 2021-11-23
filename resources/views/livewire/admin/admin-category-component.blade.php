            <div>
                <style>
                    nav svg{
                        height: 20px;
                    }
                    nav .hidden{
                        display: block !important;
                    }
                </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                   All Category
                                </div>
                                <div class="col-md-6">
                             <a href="{{route('admin.addcategories')}}" class="btn btn-success pull-right">Add New</a></div>
                            </div>
                    </div>
                    <div class="card-body">
                        {{-- @if(Session::has('delete_student'))
                        <div class="alert alert-success" role="alert">
                        {{Session::get('delete_student')}} --}}
                        </div>
                     <table class="table table-success table-striped">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                     <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">nom</th>
                            <th scope="col">slug</th>
                            <th scope="col">action</th>
                            {{-- <th scope="col">edit</th>
                            <th scope="col">delete</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug}}</td>
                            <td><a href="{{route('admin.editcategories',['category_slug'=>$category->slug])}}" class="fa fa-edit fa-2x"></a>
                            <a href="#" wire:click.prevent="delete({{$category->id}})" class="fa fa-times fa-2x"></a></td>
                            {{-- <td><a href="/single-student/{{$students->id}}" class="btn btn-success">View</a></td>
                            <td><a href="/update-student/{{$students->id}}" class="btn btn-info">Edit</a></td>
                             <td><a href="/delete-student/{{$students->id}}" class="btn btn-danger">Delete</a></td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

