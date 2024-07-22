@props(['post'])

<div class="col-sm-3">
    <div class="blog-post-sm bordered blog-container">
        <div class="blog-img-thumb">
            <a href="/posts/{{ $post->slug }}">
                <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" onerror="this.onerror=null;this.src='/assets/pages/img/page_general_search/1.jpg';" />
            </a>
        </div>
        <div class="blog-post-content">
            <h2 class="blog-title blog-post-title">
                <a href="/posts/{{ $post->slug }}">{{ $post->brand }}</a>
            </h2>
            <p class="blog-post-desc"> {{ $post->description }} </p>
            <div class="blog-post-foot">
                <div class="blog-post-meta">
                    <i class="icon-tag font-blue"></i>
                    <a href="/categories/{{ $post->category->slug }}"> {{ ucwords($post->category->name) }} </a>
                </div>
            </div>
            <div class="blog-post-foot">
                <div class="blog-post-meta">
                    <i class="icon-user font-blue "></i>
                    <a href="authors/{{$post->author->username}}">{{ $post->author->name}}</a>
                </div>
            </div>
            <div class="blog-post-foot">
                <div class="blog-post-meta">
                    <i class="glyphicon glyphicon-usd font-blue"></i>
                    {{ $post->price}} / hour
                </div>
            </div>
            <div class="blog-post-foot">
                <div class="blog-post-meta">
                    <i class="icon-calendar font-blue"></i>
                   {{ $post->created_at }}
                </div>
            </div>
        </div>
    </div>
</div>