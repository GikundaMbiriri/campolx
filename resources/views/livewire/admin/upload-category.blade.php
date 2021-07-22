<div>
    <div class="container" style="30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">

                                Add New Category</div>
                            <div class="col-md-6">

                                <a href="{{ route('admin.category') }}" class="btn btn-success pull-right">All
                                    Category</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))

                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif

                        <form action="" class="form-horizontal" wire:submit.prevent="cat">

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Category Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="category name" class="form-control input-md"
                                        wire:model="name" wire:keyup="gen">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Category Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="category Slug" class="form-control input-md"
                                        wire:model="slug">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
