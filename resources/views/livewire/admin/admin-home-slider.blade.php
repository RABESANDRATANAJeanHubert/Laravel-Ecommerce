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
                       All HomeSlide
                    </div>
                    <div class="col-md-6">
                 <a href="{{route('admin.AddHomeSlide')}}" class="btn btn-success pull-right">Add New</a></div>
                </div>
        </div>
        <div class="card-body">
            </div>
         <table class="table table-success table-striped">
            @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif
         <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">imge</th>
                <th scope="col">Subtitle</th>
                <th scope="col">Price</th>
                <th scope="col">Link</th>
                <th scope="col">Status</th>
                <th scope="col">Created_at</th>
                <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sliders as $slide )
                <tr>
                    <td>{{$slide->id}}</td>
                    <td>{{$slide->title}}</td>
                    <td><img src=" {{asset('assets/images/slides')}}/{{$slide->image}}" style="width: 60px"/></td>
                    <td>{{$slide->subtitle}}</td>
                    <td>{{$slide->price}}</td>
                    <td>{{$slide->link}}</td>
                    <td>{{$slide->status == 1 ? 'Active':'Inactve'}}</td>
                    <td>{{$slide->created_at}}</td>
                    <td><a href="{{route('admin.editHomeSlide',['slide_id'=>$slide->id])}}" class="fa fa-edit fa-2x"></a></td>
                    {{-- <a href="#" wire:click.prevent="delete({{$slide->slide_id}})" class="fa fa-times fa-2x"></a></td> --}}
                </tr>
                @endforeach
            </tbody>
            </table>
             {{-- {{$sliders->links()}} --}}
        </div>
    </div>
</div>
</div>
</div>
</div>


