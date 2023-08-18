        <!-- Blog STart -->
        @extends('layouts.main')
        @section('container')
            <!-- Hero Start -->
            <section class="bg-half-170 bg-light d-table w-100">
                <div class="container">
                    <div class="row mt-5 justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="pages-heading">
                                <h4 class="title mb-0"> Blog </h4>
                            </div>
                        </div> <!--end col-->
                    </div><!--end row-->

                </div> <!--end container-->
            </section><!--end section-->
            <!-- Hero End -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="features-absolute blog-search">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <div class="text-center subcribe-form">
                                        <form style="max-width: 800px;">
                                            <div class="mb-0">
                                                <input type="text" id="help" name="name" class="border shadow rounded-pill bg-white-color" required="" placeholder="Search">
                                                <button type="submit" class="btn btn-pills btn-primary">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end div-->
                    </div><!--end col-->
                </div><!--end row-->
            </div>

            <!-- Shape Start -->
            <div class="position-relative">
                <div class="shape overflow-hidden text-color-white">
                    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                    </svg>
                </div>
            </div>
            <!--Shape End-->
            <section class="section">
                <div class="container">
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                                <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                                    <div class="position-relative">
                                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                                        <div class="overlay rounded-top"></div>
                                    </div>
                                    <div class="card-body content">
                                        <h5><a href="/posts/{{ $post->slug }}" class="card-title title text-dark">{{ $post->title }}</a></h5>
                                        <div class="post-meta d-flex justify-content-between mt-3">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                            </ul>
                                            <a href="/posts/{{ $post->slug }}" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                        </div>
                                    </div>
                                    <div class="author">
                                        <small class="user d-block"><i class="uil uil-user"></i> {{ $post->author->name }}</small>
                                        <small class="date"><i class="uil uil-calendar-alt"></i> {{ $post->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                            </div><!--end col-->
                        @endforeach
                        <!-- PAGINATION START -->
                        <div class="col-12">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next</a></li>
                            </ul>
                        </div><!--end col-->
                    </div>
                </div>
            </section>
        @endsection
        <!--end section-->
        <!-- Blog End -->
