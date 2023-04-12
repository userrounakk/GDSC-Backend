@extends('frontend.layout')

@section('content')
    <!-- Card feed item START -->
    <div class="card">
        <!-- Card header START -->
        <div class="card-header border-0 pb-0">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <div class="avatar avatar-story me-2">
                        <a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg"
                                alt=""> </a>
                    </div>
                    <!-- Info -->
                    <div>
                        <div class="nav nav-divider">
                            <h6 class="nav-item card-title mb-0"> <a href="#!"> Lori Ferguson
                                </a></h6>
                            <span class="nav-item small"> 2hr</span>
                        </div>
                        <p class="mb-0 small">Web Developer at Webestica</p>
                    </div>
                </div>
                <!-- Card feed action dropdown START -->
                <div class="dropdown">
                    <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardFeedAction"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots"></i>
                    </a>
                    <!-- Card feed action dropdown menu -->
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction">
                        <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Save post</a>
                        </li>
                        <li><a class="dropdown-item" href="#"> <i class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori
                                ferguson </a>
                        </li>
                        <li><a class="dropdown-item" href="#"> <i class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a>
                        </li>
                        <li><a class="dropdown-item" href="#"> <i class="bi bi-slash-circle fa-fw pe-2"></i>Block</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#"> <i class="bi bi-flag fa-fw pe-2"></i>Report post</a>
                        </li>
                    </ul>
                </div>
                <!-- Card feed action dropdown END -->
            </div>
        </div>
        <!-- Card header END -->
        <!-- Card body START -->
        <div class="card-body">
            <p>I'm thrilled to share that I've completed a graduate certificate course in project
                management with the president's honor roll.</p>
            <!-- Card img -->
            <img class="card-img" src="assets/images/post/3by2/01.jpg" alt="Post">


        </div>
        <!-- Card body END -->
    </div>
    <!-- Card feed item END -->
@endsection
