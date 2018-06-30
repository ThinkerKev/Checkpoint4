@extends('layout')
@section('title', '' )
@section('content')
<div class="row">
    <div class="text-center spacer">
    @if ($videos->count() > 0)
            <a href="{{ route('viewUploadVideoForm') }}" class="small-box-footer">
                Upload a new video <i class="fa fa-arrow-circle-right"></i>
            </a>
        @else
            <small>
                <i class="fa fa-film"></i> &nbsp; No videos at this time. Check back later!<br>
                <a href="{{ route('viewUploadVideoForm') }}" class="small-box-footer">
                    Upload a new video <i class="fa fa-arrow-circle-right"></i>
                </a>
            </small>
        @endif
    </div>
        <section class="content">
            <ul class="timeline">
                <li>
                    <i class="fa fa-video-camera bg-maroon"></i>
                    <div class="timeline-item">
                        <span class="time">
                            <i class="fa fa-clock-o"></i>
                            @if( !is_null($latest) )
                                Last activity:{{ date('F d, Y', strtotime($latest->created_at)) }}
                            @else
                                Last activity: none
                            @endif
                        </span>
                        <h3 class="timeline-header">
                            Total number of videos here is <b>{{ $videos->count() }}</b>
                        </h3>
                        <div class="timeline-body">
                            <div class="row">
                            @if($videos->count() > 0)
                                @foreach($videos as $video)
                                <div class="col-sm-6">
                                    <div class="box-header">
                                    </div>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="{{ $video->url }}" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <div class="box-footer box-comments">
                                        <div class="box-comment col-sm-12">
                                            <img class="img-square img-sm" src="{{ $video->user->avatar}}" alt="User Image">
                                            <div class="comment-text">
                                                <span class="username text-capitalize">
                                                    <b>{{ $video->title }}</b>
                                                    <span class="badge bg-aqua pull-right spacersm">
                                                        <small>
                                                            {{ date('F d, Y', strtotime($video->created_at)) }}
                                                        </small>
                                                    </span>
                                                </span>
                                                {{ $video->description }}<br>
                                                <hr>
                                                <small>upload by: <b>{{ $video->user->fullname}}</b></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                </li>
            </ul>
        </section>
    </div>
</div>
@endsection
