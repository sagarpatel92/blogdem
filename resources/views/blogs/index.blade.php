@extends('layouts.app')

@section('title', '| All Blogs')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        {{--@foreach($categories as$cat)--}}
                            {{--<div class="row col-lg-12">--}}
                                {{--<h2>{{ $cat->title }}</h2>--}}
                                {{--<h5>Published: {{ date('M j, Y', strtotime($cat->created_at)) }}</h5>--}}

                                {{--<p>{{ substr(strip_tags($cat->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '...' : "" }}</p>--}}
                                {{--<hr>--}}

                            {{--</div>--}}
                        {{--@endforeach--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

