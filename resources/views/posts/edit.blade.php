<!-- BEGIN PAGE LEVEL PLUGINS -->

<link href="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->

<x-layouts.index :categories="$categories">

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        
        <!-- BEGIN PAGE CONTENT BODY -->
        <div class="page-content">
            <div class="container">
                <!-- BEGIN PAGE CONTENT INNER -->
                <div class="page-content-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN VALIDATION STATES-->
                            <div class="portlet light portlet-fit portlet-form ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-red"></i>
                                        <span class="caption-subject font-red sbold uppercase">Edit Post</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <form action="/posts/{{ $post->id }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-body">
                                            @if ($errors->any())
                                                <ul class="alert alert-danger ">
                                                    <button class="close" data-close="alert"></button>
                                                    @foreach($errors->all() as $error)
                                                        <li> {{ $error }} </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Description <span class="required"> * </span> </label>
                                                <div class="col-md-4">
                                                    <textarea type="text" id="description" name="description" data-required="1" class="form-control" >{{ old('description', $post->description) }}</textarea> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Slug <span class="required"> * </span> </label>
                                                <div class="col-md-4">
                                                    <input name="slug" id="slug" value="{{ old('slug', $post->slug) }}" type="text" class="form-control" /> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Brand <span class="required"> * </span> </label>
                                                <div class="col-md-4">
                                                    <input type="text" id="brand" name="brand" value="{{ old('brand', $post->brand) }}" data-required="1" class="form-control" /> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Price/hour <span class="required"> * </span> </label>
                                                <div class="col-md-4">
                                                    <input name="price" id="price" type="number" class="form-control" value="{{ old('price', $post->price) }}" /> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Image </label>
                                                <div class="col-md-4">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            @if ($post->image)
                                                            <img src="{{ asset('storage/' . $post->image) }}" alt="" />
                                                            @else
                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> 
                                                            @endif
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Select image </span>
                                                                <span class="fileinput-exists"> Change </span>
                                                                <input type="file" name="image"> </span>
                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Category
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <select class="form-control" name="category_id" id="category_id">
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}"
                                                                {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}
                                                            >{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn green">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END FORM-->
                                </div>
                            </div>
                            <!-- END VALIDATION STATES-->
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT INNER -->
            </div>
        </div>
        <!-- END PAGE CONTENT BODY -->
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->

</x-layouts.index>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->