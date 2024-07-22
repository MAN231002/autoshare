@props(['post'])

<div class="col-xs-12">
    <div class="blog-banner blog-container" style="background-image:url(/assets/pages/media/bg/5.jpg);">
        <h2 class="blog-title blog-banner-title">
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <span class="mt-2 block text-gray-400 text-xs">
            Published <time>{{ $post->created_at->diffForHumans() }}</time>
        </span>
        <p>
            {{ $post->excerpt }}
        </p>

        {{-- <footer class="flex justify-between items-center mt-8">
            <div class="flex items-center text-sm">
                <img src="./images/lary-avatar.svg" alt="Lary avatar">
                <div class="ml-3">
                    <h5 class="font-bold">{{ $post->author->name }}</h5>
                </div>
            </div>

            <div class="hidden lg:block">
                <a href="/posts/{{ $post->slug }}"
                    class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                >Read More</a>
            </div>
        </footer> --}}
    </div>
</div>