@foreach ($posts as $post)
<div class="col-lg-4 col-md-4 col-sm-4 re7-mt-50 iq-mt-50">
    <div class="iq-blog-box">
        <div class="iq-blog-image clearfix">
            <img class="img-responsive center-block" src="{{ asset($post->thumbnail) }}" alt="{{ $post->title }}">
        </div>
        <div class="iq-blog-detail">
            <div class="blog-title"> <a href="{{ route('blog.post', $post) }}">
                    <h5 class="iq-tw-6">{{ Str::limit($post->title, 30) }}</h5>
                </a> </div>
            <div class="iq-blog-meta">
                <ul class="list-inline">
                    <li><i class="fa fa-calendar" aria-hidden="true"></i>
                        {{ $post->created_at->diffForHumans() }}</li>
                    <li><a href="javascript:void(0)"><i class="fa fa-comment-o" aria-hidden="true"></i>
                            5</a></li>
                </ul>
            </div>
            <div class="blog-content">
                {{ Str::limit($post->description, 100) }}
            </div>
            <div class="blog-button">
                <a href="javascript:void(0)" class="pull-left iq-tw-6 iq-user"><i class="fa fa-user-circle"
                        aria-hidden="true"></i> {{ $post->user->name }}</a>
                <a href="{{ route('blog.post', $post) }}" class="pull-right iq-tw-6">Read More <i
                        class="fa fa-angle-right" aria-hidden="true"></i></a> </div>
        </div>
    </div>
</div>
@endforeach