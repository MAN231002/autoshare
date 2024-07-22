<x-layouts.index>
   <!-- BEGIN CONTENT -->
   <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <!-- BEGIN PAGE HEAD-->
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE CONTENT BODY -->
        <div class="page-content">
            <div class="container">
                <!-- BEGIN PAGE CONTENT INNER -->
                <div class="page-content-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-social-dribbble font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">Manage Vehicles</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Description </th>
                                                    <th> Category </th>
                                                    <th> Brand </th>
                                                    <th> Price </th>
                                                    <th> Created Time </th>
                                                    <th>  </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($posts as $post)
                                                    <tr>
                                                        <td> {{ $loop->iteration }} </td>
                                                        <td> {{ $post->description }} </td>
                                                        <td> {{ $post->category->name }} </td>
                                                        <td> {{ $post->brand }} </td>
                                                        <td> {{ $post->price }} / hour</td>
                                                        <td> {{ $post->created_at }} </td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <form method="POST" action="/posts/{{ $post->id }}">
                                                                    <a href="/posts/{{ $post->id }}/edit" type="button" class="btn btn-link">Edit</a>
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-link">Delete</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
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
