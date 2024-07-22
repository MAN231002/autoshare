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
                    <div class="blog-page blog-content-2">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="blog-single-content bordered blog-container">
                                    <div class="blog-single-head">
                                        <h1 class="blog-single-head-title">{{ $post->author->name }}</h1>
                                        <div class="blog-single-head-date">
                                            <i class="icon-calendar font-blue"></i>
                                            <a href="javascript:;">{{ $post->created_at }}</a>
                                        </div>
                                    </div>
                                    <div class="blog-single-img">
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" onerror="this.onerror=null;this.src='/assets/pages/img/page_general_search/1.jpg';" />
                                    </div>
                                    <div class="blog-single-desc">
                                        <p> {{ $post->description }}</p>
                                    </div>
                                    <div class="blog-single-foot">
                                        <div class="portlet light ">
                                            <!-- STAT -->
                                            <div class="row list-separated profile-stat">
                                                <div class="col-md-3 col-sm-4 col-xs-6">
                                                    <div class="uppercase profile-stat-title"> Price </div>
                                                    <div class="profile-stat-text"> {{ $post->price }} $ / hour</div>
                                                </div>
                                                <div class="col-md-3 col-sm-4 col-xs-6">
                                                    <div class="uppercase profile-stat-title"> Brand </div>
                                                    <div class="profile-stat-text"> {{ $post->brand }} </div>
                                                </div>
                                                <div class="col-md-3 col-sm-4 col-xs-6">
                                                    <div class="uppercase profile-stat-title"> Owner </div>
                                                    <div class="profile-stat-text"> {{ $post->author->name }} </div>
                                                </div>
                                                <div class="col-md-3 col-sm-4 col-xs-6">
                                                    <div class="uppercase profile-stat-title"> Email </div>
                                                    <div class="profile-stat-text"> {{ $post->author->email }} </div>
                                                </div>
                                            
                                            </div>
                                            <!-- END STAT -->
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="blog-single-sidebar bordered blog-container">
                                    <div class="blog-single-sidebar-recent">
                                        <h3 class="blog-sidebar-title uppercase">Recent Posts</h3>
                                        <ul>
                                            @if ($recentPosts->count())
                                                @foreach ($recentPosts as $index => $post)
                                                <li>
                                                    <a href="/posts/{{ $post->slug }}">{{ $post->brand}} ({{ $post->created_at->diffForHumans() }})</a>
                                                </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="blog-single-sidebar-tags">
                                        <h3 class="blog-sidebar-title uppercase">Category</h3>
                                        <ul class="blog-post-tags">
                                            <li class="uppercase">
                                                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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