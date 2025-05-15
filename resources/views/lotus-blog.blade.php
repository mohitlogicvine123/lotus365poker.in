@extends('web-layouts.main')

@section('title', 'Home Page')

@section('content')

<!-- ***** blog section start ***** -->
    <section class="bg-gray-200 md:py-16 sm:py-12 py-7">
        <div class="container mx-auto px-3">
            <div class="text-center">
                <h1 class="lg:text-4xl md:text-3xl sm:text-2xl text-[19px] max-sm:leading-[31px] font-bold text-theme1">Blog</h1>
                <p class="text-gray-600 md:mt-4 mt-3 max-sm:text-[14px]">Learn more about who we are and what we do.</p>
            </div>
        </div>
    </section>
    </section>
    <!-- ***** blog section end ***** -->

    <!-- ***** blog content section start ***** -->
    <section class="my-10">
        <div class="container mx-auto px-3">
            <div class="grid grid xl:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4">
            @foreach($blogs as $blog)
                <div class="shadow-md border overflow-hidden rounded-[8px]">
                  <a href="{{ route('page.blog-detail', $blog->id) }}">{{ $blog->title }}</a>
                        <img src="{{$blog->getFirstMedia('image')}}" alt="no Image" height="300px" width="500" class="size-full">
                    </a>
                    <div class="md:p-3 p-2.5">
                        <a href="{{ route('page.blog-detail', $blog->id) }}" class="font-semibold md:text-[17px] line-clamp-2 text-black hover:text-theme2 transition-all duration-300 ease-in-out">{{$blog->description}}</a>
                        <div class="md:mt-2 mt-1.5 line-clamp-4 text-gray-800 md:text-[15px]  text-[14px] leading-[25px]">
                            <p>{{ Str::limit($blog->content, 100) }}</p>
                        </div>
                        {{-- <a href="{{ route('page.blog-detail', $blog->id) }}" class="font-semibold md:mt-3 mt-2 flex items-center gap-1 transition-all duration-300 ease-in-out hover:text-theme1 max-md:text-[15px] max-sm:text-[14px]">Read More<i class="fa-solid fa-angles-right"></i></a> --}}
                        <a href="{{ route('page.blog-detail', ['slug' => $blog->url]) }}" class="font-semibold md:mt-3 mt-2 flex items-center gap-1 transition-all duration-300 ease-in-out hover:text-theme1 max-md:text-[15px] max-sm:text-[14px]">Read More<i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            @endforeach

                {{-- <div class="shadow-md border overflow-hidden rounded-[8px]">
                    <a href="{{ route('page.blog-detail', $blog->id) }}" class="flex md:h-[200px] h-[180px]">
                        <img src="assets/img/slider-2.webp" alt="blog" class="size-full">
                    </a>
                    <div class="md:p-3 p-2.5">
                        <a href="{{ route('page.blog-detail', $blog->id) }}" class="font-semibold md:text-[17px] line-clamp-2 text-black hover:text-theme2 transition-all duration-300 ease-in-out">How to Maintain Your Car's Paint Finish</a>
                        <div class="md:mt-2 mt-1.5 line-clamp-4 text-gray-800 md:text-[15px]  text-[14px] leading-[25px]">
                            <p>
                                Keeping your car's paint finish in top condition is essential for maintaining its value and appearance. Here are some tips to help you achieve that:
                            </p>
                        </div>
                        <a href="{{ route('page.blog-detail', $blog->id) }}" class="font-semibold md:mt-3 mt-2 flex items-center gap-1 transition-all duration-300 ease-in-out hover:text-theme1 max-md:text-[15px] max-sm:text-[14px]">Read More<i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div> --}}
                {{-- <div class="shadow-md border overflow-hidden rounded-[8px]">
                    <a href="{{ route('page.blog-detail', $blog->id) }}" class="flex md:h-[200px] h-[180px]">
                        <img src="assets/img/slider-3.webp" alt="blog" class="size-full">
                    </a>
                    <div class="md:p-3 p-2.5">
                        <a href="{{ route('page.blog-detail', $blog->id) }}" class="font-semibold md:text-[17px] line-clamp-2 text-black hover:text-theme2 transition-all duration-300 ease-in-out">How to Maintain Your Car's Paint Finish</a>
                        <div class="md:mt-2 mt-1.5 line-clamp-4 text-gray-800 md:text-[15px]  text-[14px] leading-[25px]">
                            <p>
                                Keeping your car's paint finish in top condition is essential for maintaining its value and appearance. Here are some tips to help you achieve that:
                            </p>
                        </div>
                        <a href="{{ route('page.blog-detail', $blog->id) }}" class="font-semibold md:mt-3 mt-2 flex items-center gap-1 transition-all duration-300 ease-in-out hover:text-theme1 max-md:text-[15px] max-sm:text-[14px]">Read More<i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div> --}}
                {{-- <div class="shadow-md border overflow-hidden rounded-[8px]">
                    <a href="{{ route('page.blog-detail', $blog->id) }}" class="flex md:h-[200px] h-[180px]">
                        <img src="assets/img/slider-4.webp" alt="blog" class="size-full">
                    </a>
                    <div class="md:p-3 p-2.5">
                        <a href="{{ route('page.blog-detail', $blog->id) }}" class="font-semibold md:text-[17px] line-clamp-2 text-black hover:text-theme2 transition-all duration-300 ease-in-out">How to Maintain Your Car's Paint Finish</a>
                        <div class="md:mt-2 mt-1.5 line-clamp-4 text-gray-800 md:text-[15px]  text-[14px] leading-[25px]">
                            <p>
                                Keeping your car's paint finish in top condition is essential for maintaining its value and appearance. Here are some tips to help you achieve that:
                            </p>
                        </div>
                        <a href="{{ route('page.blog-detail', $blog->id) }}" class="font-semibold md:mt-3 mt-2 flex items-center gap-1 transition-all duration-300 ease-in-out hover:text-theme1 max-md:text-[15px] max-sm:text-[14px]">Read More<i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div> --}}
                {{-- <div class="shadow-md border overflow-hidden rounded-[8px]">
                    <a href="{{ route('page.blog-detail', $blog->id) }}" class="flex md:h-[200px] h-[180px]">
                        <img src="assets/img/about-us.jpg" alt="blog" class="size-full">
                    </a>
                    <div class="md:p-3 p-2.5">
                        <a href="{{ route('page.blog-detail', $blog->id) }}" class="font-semibold md:text-[17px] line-clamp-2 text-black hover:text-theme2 transition-all duration-300 ease-in-out">How to Maintain Your Car's Paint Finish</a>
                        <div class="md:mt-2 mt-1.5 line-clamp-4 text-gray-800 md:text-[15px]  text-[14px] leading-[25px]">
                            <p>
                                Keeping your car's paint finish in top condition is essential for maintaining its value and appearance. Here are some tips to help you achieve that:
                            </p>
                        </div>
                        <a href="{{ route('page.blog-detail', $blog->id) }}" class="font-semibold md:mt-3 mt-2 flex items-center gap-1 transition-all duration-300 ease-in-out hover:text-theme1 max-md:text-[15px] max-sm:text-[14px]">Read More<i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div> --}}
                {{-- <div class="shadow-md border overflow-hidden rounded-[8px]">
                    <a href="{{ route('page.blog-detail', $blog->id) }}" class="flex md:h-[200px] h-[180px]">
                        <img src="assets/img/carpet-sofa.webp" alt="blog" class="size-full">
                    </a>
                    <div class="md:p-3 p-2.5">
                        <a href="{{ route('page.blog-detail', $blog->id) }}" class="font-semibold md:text-[17px] line-clamp-2 text-black hover:text-theme2 transition-all duration-300 ease-in-out">How to Maintain Your Car's Paint Finish</a>
                        <div class="md:mt-2 mt-1.5 line-clamp-4 text-gray-800 md:text-[15px]  text-[14px] leading-[25px]">
                            <p>
                                Keeping your car's paint finish in top condition is essential for maintaining its value and appearance. Here are some tips to help you achieve that:
                            </p>
                        </div>
                        <a href="{{ route('page.blog-detail', $blog->id) }}" class="font-semibold md:mt-3 mt-2 flex items-center gap-1 transition-all duration-300 ease-in-out hover:text-theme1 max-md:text-[15px] max-sm:text-[14px]">Read More<i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
                <div class="shadow-md border overflow-hidden rounded-[8px]">
                    <a href="{{ route('page.blog-detail', $blog->id) }}" class="flex md:h-[200px] h-[180px]">
                        <img src="assets/img/ceramic-coating.webp" alt="blog" class="size-full">
                    </a>
                    <div class="md:p-3 p-2.5">
                        <a href="{{ route('page.blog-detail', $blog->id) }}" class="font-semibold md:text-[17px] line-clamp-2 text-black hover:text-theme2 transition-all duration-300 ease-in-out">How to Maintain Your Car's Paint Finish</a>
                        <div class="md:mt-2 mt-1.5 line-clamp-4 text-gray-800 md:text-[15px]  text-[14px] leading-[25px]">
                            <p>
                                Keeping your car's paint finish in top condition is essential for maintaining its value and appearance. Here are some tips to help you achieve that:
                            </p>
                        </div>
                        <a href="{{ route('page.blog-detail', $blog->id) }}" class="font-semibold md:mt-3 mt-2 flex items-center gap-1 transition-all duration-300 ease-in-out hover:text-theme1 max-md:text-[15px] max-sm:text-[14px]">Read More<i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div> --}}
                {{-- <div class="shadow-md border overflow-hidden rounded-[8px]">
                    <a href="{{ route('page.blog-detail', $blog->id) }}" class="flex md:h-[200px] h-[180px]">
                        <img src="assets/img/subscriptions.webp" alt="blog" class="size-full">
                    </a>
                    <div class="md:p-3 p-2.5">
                        <a href="{{ route('page.blog-detail', $blog->id) }}" class="font-semibold md:text-[17px] line-clamp-2 text-black hover:text-theme2 transition-all duration-300 ease-in-out">How to Maintain Your Car's Paint Finish</a>
                        <div class="md:mt-2 mt-1.5 line-clamp-4 text-gray-800 md:text-[15px]  text-[14px] leading-[25px]">
                            <p>
                                Keeping your car's paint finish in top condition is essential for maintaining its value and appearance. Here are some tips to help you achieve that:
                            </p>
                        </div>
                        <a href="{{ route('page.blog-detail', $blog->id) }}" class="font-semibold md:mt-3 mt-2 flex items-center gap-1 transition-all duration-300 ease-in-out hover:text-theme1 max-md:text-[15px] max-sm:text-[14px]">Read More<i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- ***** blog content section end ***** -->
@endsection
