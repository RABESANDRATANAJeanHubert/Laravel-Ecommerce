<div>
    <div class="container" style="padding: 30 px  0;">
    <div class="row">
     <div class="col-md-12">
         <div class="panel panel-default">
             <div class="panel-heeding">
                 <div class="row">
                     <div class="col-md-6">
                        Edit Category
                     </div>
                     <div class="col-md-6">
                        <a href="{{route('admin.categories')}}" class="btn btn-success pull-right">All category</a>
                    </div>
                 </div>
             </div>
             <div class="panel-body">
                 <form action="" class="form-horizontal" wire:submit.prevent="updateCategory">
                     @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                     @endif
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label" wire:model="name" >Category Name</label>
                         <div class="col-md-4">
                            <input type="text" placeholder="Category Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug">
                         </div>
                     </div>
                     <div class="form-group">
                        <label for="" class="col-md-4 control-label" wire:model="slug">Category slug</label>
                        <div class="col-md-4">
                            <input type="text" placeholder=" Category Slug" class="form-control input-md" wire:model="slug">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                 </form>
             </div>
         </div>
     </div>
    </div>
    </div>
</div>
