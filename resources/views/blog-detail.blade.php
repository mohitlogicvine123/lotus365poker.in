<!-- resources/views/blog-detail.blade.php -->
@extends('web-layouts.main')

@section('title', $blog->meta_title ?? $blog->title)
@section('meta_description', $blog->meta_description ?? 'Default meta description')
@section('meta_keywords', $blog->meta_keywords ?? 'blog, article')

@section('content')

    {{-- <a href="{{ route('blog') }}">← Back to Blog List</a> --}}
    <section class="md:my-10 my-8">
        <div class="container mx-auto px-3">
            <div class="lg:w-[80%] md:w-[90%] mx-auto">
                <div>
                    <img src="{{ $blog->getFirstMediaUrl('image') }}" alt="No-image" class="w-full md:h-[400px] object-cover rounded-lg">
                </div>
                <!-- blog detail content here  -->
                <div class="blog-detail-content mt-3">
                    <h1>{{ $blog->title }}</h1>
                    <p>{{$blog->description}}</p>
                    <p>Easylives – Car Care is tailored for Women and Seniors. At Easylives, we’re all about making car maintenance a breeze, especially for women and elderly folks. We totally get that sometimes, life gets busy, and finding the time or energy. To visit a service center can be tough. That’s why we’ve created a specialized solution – doorstep car wash Gurgaon for your car wash needs. Our premium on-the-door services include all the necessary disinfecting and cleaning, so you never have to step outside your home.</p>
                    <h2>All About Convenience for Easylives’ Clients</h2>
                    <p>Easylives – Car Care is tailored for Women and Seniors. At Easylives, we’re all about making car maintenance a breeze, especially for women and elderly folks. We totally get that sometimes, life gets busy, and finding the time or energy. To visit a service center can be tough. That’s why we’ve created a specialized solution – doorstep car wash Gurgaon for your car wash needs. Our premium on-the-door services include all the necessary disinfecting and cleaning, so you never have to step outside your home.</p>
                    <h3>All About Convenience for Easylives’ Clients</h3>
                    <p>Easylives – Car Care is tailored for Women and Seniors. At Easylives, we’re all about making car maintenance a breeze, especially for women and elderly folks. We totally get that sometimes, life gets busy, and finding the time or energy. To visit a service center can be tough. That’s why we’ve created a specialized solution – doorstep car wash Gurgaon for your car wash needs. Our premium on-the-door services include all the necessary disinfecting and cleaning, so you never have to step outside your home.</p>
                    <ul>
                        <li>Easylives – Car Care is tailored for Women and Seniors. At Easylives, we’re all about making car maintenance a breeze, especially for women and elderly folks. We totally get that sometimes, life gets busy, and finding the time or energy. To visit a service center can be tough. That’s why we’ve created a specialized solution – doorstep car wash Gurgaon for your car wash needs. Our premium on-the-door services include all the necessary disinfecting and cleaning, so you never have to step outside your home.</li>
                        <li>Easylives – Car Care is tailored for Women and Seniors. At Easylives, we’re all about making car maintenance a breeze, especially for women and elderly folks. We totally get that sometimes, life gets busy, and finding the time or energy. To visit a service center can be tough. That’s why we’ve created a specialized solution – doorstep car wash Gurgaon for your car wash needs. Our premium on-the-door services include all the necessary disinfecting and cleaning, so you never have to step outside your home.</li>
                        <li>Easylives – Car Care is tailored for Women and Seniors. At Easylives, we’re all about making car maintenance a breeze, especially for women and elderly folks. We totally get that sometimes, life gets busy, and finding the time or energy. To visit a service center can be tough. That’s why we’ve created a specialized solution – doorstep car wash Gurgaon for your car wash needs. Our premium on-the-door services include all the necessary disinfecting and cleaning, so you never have to step outside your home.</li>
                        <li>Easylives – Car Care is tailored for Women and Seniors. At Easylives, we’re all about making car maintenance a breeze, especially for women and elderly folks. We totally get that sometimes, life gets busy, and finding the time or energy. To visit a service center can be tough. That’s why we’ve created a specialized solution – doorstep car wash Gurgaon for your car wash needs. Our premium on-the-door services include all the necessary disinfecting and cleaning, so you never have to step outside your home.</li>
                    </ul>
                    <h3>All About Convenience for Easylives’ Clients</h3>
                    <p>Easylives – Car Care is tailored for Women and Seniors. At Easylives, we’re all about making car maintenance a breeze, especially for women and elderly folks. We totally get that sometimes, life gets busy, and finding the time or energy. To visit a service center can be tough. That’s why we’ve created a specialized solution – doorstep car wash Gurgaon for your car wash needs. Our premium on-the-door services include all the necessary disinfecting and cleaning, so you never have to step outside your home.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
