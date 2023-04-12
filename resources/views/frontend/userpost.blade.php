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

                    <!-- Card feed action dropdown menu -->
                    @isset($edit)
                        <div class="dropdown">
                            <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardFeedAction"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction">
                                <li><a class="dropdown-item"href="#!" data-bs-toggle="modal"
                                        data-bs-target="#editPost-{{ $post->id }}">
                                        <i class="bi bi-pencil fa-fw pe-2"></i>Edit
                                        Post</a>
                                </li>
                                <form class='d-inline' action="/post/{{ $post->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="dropdown-item text-danger btn"
                                        onclick="return confirm('Are you sure you want to delete the post?')"><i
                                            class="bi bi-trash fa-fw pe-2"></i> Delete </button>
                                </form>
                                </li>
                            </ul>
                        </div>
                    @endisset
                </div>
            </div>
            <!-- Card header END -->
            <!-- Card body START -->
            <div class="card-body">
                <p>{{ $post->description }}</p>
                <!-- Card img -->
                @if ($post->image)
                    <img class="card-img" src="/images/posts/{{ $post->image }}" alt="Post">
                @endif
            </div>
            <!-- Card body END -->
        </div>
        <!-- Card feed item END -->
        <form class="" method="post" enctype="multipart/form-data" action="/post/{{ $post->id }}">
            @method('put')
            @csrf

            <div class="modal fade" id="editPost-{{ $post->id }}" tabindex="-1"
                aria-labelledby="editPost-{{ $post->id }}Label{}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <!-- Modal feed header START -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="editPost-{{ $post->id }}Label">Edit Post</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- Modal feed header END -->

                        <!-- Modal feed body START -->
                        <div class="modal-body">
                            <!-- Add Feed -->

                            <div class="d-flex mb-3">
                                <!-- Avatar -->
                                <div class="avatar avatar-xs me-2">
                                    <img class="avatar-img rounded-circle" src="{{ $user->avatar }}" alt="">
                                </div>
                                <!-- Feed box  -->

                                <textarea name="description" class="form-control pe-4 fs-3 lh-1 border-0" rows="2"
                                    placeholder="Share your thoughts...">{{ $post->description }}</textarea>
                            </div>
                            <!-- Dropzone photo START -->

                            <div class="card mt-2">
                                <img src="@if ($post->image) /images/posts/{{ $post->image }} @endif"
                                    alt="" srcset="" id="imagePreview" class="w-100">
                            </div>
                            <div class="mt-5">
                                <label class="form-label">Change attachment</label><br>
                                {{-- <div class="dropzone dropzone-default card shadow-none" data-dropzone='{"maxFiles":1}'>
                            <div class="dz-message">
                                <i class="bi bi-images display-3"></i>
                                <p>Drag here or click to upload photo.</p>
                            </div>
                        </div> --}}
                                {{-- input image preview --}}
                                <input type="file" name="image" id="inpFile" accept="image/*">
                            </div>
                            <!-- Dropzone photo END -->



                            <div class="modal-footer ">
                                <!-- Button -->
                                <button type="button" class="btn btn-danger-soft me-2"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success-soft">Update</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endsection
