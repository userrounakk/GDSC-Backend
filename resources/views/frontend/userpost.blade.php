@extends('frontend.layout')

@section('content')
    @if ($posts->count() == 0)
        <center>
            <h4>No Posts to Show</h4>
        </center>
        <div class="h-100">

        </div>
    @endif
    @foreach ($posts as $post)
        <!-- Card feed item START -->
        <div class="card">
            <!-- Card header START -->
            <div class="card-header border-0 pb-0">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <!-- Avatar -->
                        <div class="avatar avatar-story me-2">
                            <a href="#!"> <img class="avatar-img rounded-circle" src="{{ $post->user->avatar }}"
                                    alt=""> </a>
                        </div>
                        <!-- Info -->
                        <div>
                            <div class="nav nav-divider">
                                <h6 class="nav-item card-title mb-0"> <a href="#!"> {{ $post->user->name }}
                                    </a></h6>
                                <span class="nav-item small">
                                    {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card feed action dropdown END -->
                </div>
            </div>
            <!-- Card header END -->
            <!-- Card body START -->
            <div class="card-body">
                <p>{{ $post->description }}</p>
                <!-- Card img -->
                <img class="card-img" src="/images/posts/{{ $post->image }}" alt="Post">
            </div>
            <!-- Card body END -->
        </div>
        <!-- Card feed item END -->
    @endforeach
@endsection
