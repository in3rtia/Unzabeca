@extends('layouts.members')
@section('title', 'Article View')
@section('content')

    <style>
        .banner {
            padding: 180px 0;
            color: #f8f8f8;
            background: url( {{URL::asset('../storage/'.$article->articlePhoto['filename'])}} ) no-repeat center center;
            background-size: cover;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="page-header">Article view</h3>

                <section class="col-md-8">
                    <h3 class="heading">
                        {{ $article->articleTitle }} <br>
                        <small>By - {{$article->author}} . {{ \Carbon\Carbon::parse($article->created_at )->diffForHumans() }}</small>
                    </h3>
                    <div class="banner">
                        {{--<img src="{{ URL::asset('../storage/'.$article->articlePhoto->filename) }}" alt="article image"--}}
                             {{--class="img-responsive center-block" width="460" height="345">--}}
                    </div>
                    <div>
                        {!! $article->articleBody !!}  <!-- decodes the html entities -->
                    </div>
                </section>
                <aside class="col-md-3">
                    <h4>Recent articles</h4>
                    <hr>
                    <ul>
                        @foreach($others as $other)
                            <li><a href="{{url('/members/article/view/'. $other->article_id)}}">{{ $other->articleTitle }}</a></li>
                        @endforeach
                    </ul>
                </aside>
            </div>
        </div>
    </div>

@endsection