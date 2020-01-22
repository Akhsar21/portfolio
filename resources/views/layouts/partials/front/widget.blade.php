<div class="col-md-4 col-sm-12">
    <div class="iq-post-sidebar">
        <div class="iq-sidebar-widget">
            <h4 class="iq-widget-title heading-left iq-tw-6">Search here</h4>
            <div class="iq-widget-search"> <i class="fa fa-search"></i>
                <input type="search" placeholder="Search...." class="form-control placeholder">
            </div>
        </div>
        <div class="iq-sidebar-widget">
            <h4 class="iq-widget-title heading-left iq-tw-6">About Blog</h4>
            <p>Lorem ipsum dolor sit ametLorem Ipsum Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                lorem quis bibendum auctor, consequat ipsum, nec sagittis sem nibh id elit nibh vel velit auctor
                aliquet.</p>
        </div>
        <div class="iq-sidebar-widget">
            <h4 class="iq-widget-title heading-left iq-tw-6">Categories</h4>
            <div class='iq-widget-menu'>
                @include('layouts.partials.categories.list')
            </div>
        </div>
        <div class="iq-sidebar-widget">
            <h4 class="iq-widget-title heading-left iq-tw-6">Recent Posts</h4>
            @foreach ($similarPosts as $similarPost)
            <div class="iq-recent-post media">
                <div class="media-left">
                    <a href="{{ route('blog.post', $post) }}">
                        <img alt="" class="media-object" src="{{ asset('blog/' . $similarPost->thumbnail) }}"
                            style="width:70px; height:70px;">
                    </a>
                </div>
                <div class="media-body">
                    <a href="{{ route('blog.post', $post) }}">{{ Str::limit($similarPost->title, 25) }}</a>
                    <span><i class="fa fa-calendar"></i> {{ $similarPost->created_at->format('F d, Y') }}</span>
                </div>
            </div>
            @endforeach
        </div>
        <div class="iq-sidebar-widget">
            <h4 class="iq-widget-title heading-left iq-tw-6">Tags</h4>
            @include('layouts.partials.tags.list')
        </div>
        {{-- <div class="iq-sidebar-widget">
            <h4 class="iq-widget-title heading-left iq-tw-6">Meta</h4>
            <ul class="iq-widget-archives">
                <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i> Log in</a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i> Entries RSS</a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i> Comments RSS </a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i> September 2015</a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i> WordPress.org</a></li>
            </ul>
        </div> --}}
    </div>
</div>