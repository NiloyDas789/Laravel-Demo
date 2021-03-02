@extends('templates/index')

@section('title')
    blog

@endsection

@section('blog')

        <div class="blog_main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="blog_text">Our Blog</h1>
                </div>
            </div>
            <div class="blog_section_2">
                <div class="row">
                    <div class="col-sm-4">

                        <div class="section_1" >
                            <a href="{{asset('custom/images/code.jpg')}}">
                            <div><img src="{{asset('custom/images/code.jpg')}}" style="max-width: 100%;"></div>
                            </a>
                            <button type="button" class="date-bt">26 JULY    2019</button>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>

                        </div>
                    
                    </div>
                    <div class="col-sm-4">
                        <div class="section_1">
                            <div><img src="{{asset('custom/images/code.jpg')}}" style="max-width: 100%;"></div>
                            <button type="button" class="date-bt">26 JULY    2019</button>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="section_1">
                            <div><img src="{{asset('custom/images/code.jpg')}}" style="max-width: 100%;"></div>
                            <button type="button" class="date-bt">26 JULY    2019</button>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog_section_2">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="section_1">
                            <div><img src="{{asset('custom/images/code.jpg')}}" style="max-width: 100%;"></div>
                            <button type="button" class="date-bt">26 JULY    2019</button>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="section_1">
                            <div><img src="{{asset('custom/images/code.jpg')}}" style="max-width: 100%;"></div>
                            <button type="button" class="date-bt">26 JULY    2019</button>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="section_1">
                            <div><img src="{{asset('custom/images/code.jpg')}}" style="max-width: 100%;"></div>
                            <button type="button" class="date-bt">26 JULY    2019</button>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

@endsection