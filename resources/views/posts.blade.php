<!-- BEGIN PAGE LEVEL STYLES -->
<link href="/assets/pages/css/about.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/pages/css/blog.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
 
<x-layouts.index :categories="$categories">
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <!-- BEGIN PAGE CONTENT BODY -->
        <div class="page-content">
            <div class="container">
                <!-- BEGIN PAGE CONTENT INNER -->
                <div class="page-content-inner">
                    <!-- BEGIN CONTENT HEADER -->
                    <div class="row margin-bottom-40 about-header">
                        <div class="col-md-12">
                            <h1>Welcome to AutoShare</h1>
                            <h2>Your premier destination for convenient and reliable car rentals.</h2>
                        </div>
                    </div>
                    <!-- END CONTENT HEADER -->
                    <!-- BEGIN POST -->
                    
                    <!-- END POST -->
                    <div class="blog-page blog-content-1">
                        @if ($posts->count())
                            <!-- <div class="row">
                                <x-posts.post-featured-card :post="$posts[0]"/>
                            </div> -->
                            <div class="row">
                                @foreach ($posts as $index => $post)
                                    <x-posts.post-card :post="$post" />
                                    @if (($index + 1) % 4 == 0 && $index != 1)
                                        </div><div class="row">
                                    @endif
                                @endforeach
                            </div>
                        @else
                            <div class="row">
                                <p class="text-center">No posts yet. Please check back later.</p>
                            </div>v
                        @endif
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