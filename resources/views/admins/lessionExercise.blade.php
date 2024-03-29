@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/editLesson.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content-content')
<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title">{{ trans('message.class') }} {{ trans('message.management') }}</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ route('classDetail', $class_id) }}">{{ trans('message.lesson') }}: {{ $lessons->name }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('message.exercise') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $lessons->name }}</h3> <span></span>
            <span>{{ trans('message.classroom.deadline') }} : {{ \Carbon\Carbon::parse($lessons->deadline)->format('H:i d/m/Y') }}</span>
            <ul class="box-controls pull-right">
                <li><a class="box-btn-slide" href="#"></a></li>
            </ul>
        </div>
        <div class="box-body">
            <div class="accordion" id="accordionExample">
                @foreach ($lessonexercises as $lessonexercise)
                <div class="card">
                    <div class="card-header" id="{{ $lessonexercise->id }}">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#{{ $lessonexercise->exercise[0]->slug }}" aria-expanded="true" aria-controls="{{ $lessonexercise->exercise[0]->slug }}">
                            {{ $lessonexercise->exercise[0]->title }}
                            </button>
                        </h2>
                    </div>

                    <div id="{{ $lessonexercise->exercise[0]->slug }}" class="collapse" aria-labelledby="{{ $lessonexercise->id }}" data-parent="#accordionExample">
                        <div class="card-body">{!! $lessonexercise->exercise[0]->content !!}</div>
                    </div>
                    @if (Gate::allows('submit_homework'))
                    <div>
                        @if($lessons->deadline > now())
                        <a class="float-right btn btn-orange btn-sm Exercise" data-id="{{ $lessonexercise->id }}" data-toggle="modal" data-target="#submitExercise"><i class="fa fa-pencil-square-o"></i> {{ trans('message.submit') }} {{ trans('message.homework') }}</a>
                        @endif
                        <a class="float-right btn btn-warning btn-sm showHomework mr-4" data-userId="{{ Auth::user()->id }}" data-id="{{ $lessonexercise->id }}" data-lessonId="{{ $lessons->id }}" ><i class="fa fa-pencil-square-o"></i> {{ trans('message.show') }} {{ trans('message.homework') }}</a>
                    </div>
                    @endif
                    <div class="clear mb-2"></div>
                </div>
                @endforeach
            </div>
           
        </div>
    </div>
</section>
@endsection

<div class="modal fade" id="submitExercise" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('message.submit') }} {{ trans('message.homework') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" role="form" >
                    @csrf
                    <div class="form-group">
                        <label for="">{{ trans('message.content') }}</label>
                        <textarea name="editor1" id="editor1" rows="10" cols="80" name="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-right submitExercise" data-lessonId="{{ $lesson_id }}" data-class={{ $class_id }}>{{ trans('message.submit') }}</button>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="showHomework" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('message.show') }} {{ trans('message.homework') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" role="form" >
                    @csrf
                    <div class="form-group">
                        <label for="">{{ trans('message.mark') }}</label>
                        <p id="mark" class="form-control"></p>
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.content') }}</label>
                        <p id="content"  class="form-control" ></p>
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.comment') }}</label>
                        <p id="comment" ></p>
                    </div>
                    <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
                    <p style="clear:both"></p>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

@section('ajax')
    <script src="{{ asset('js/lesson.js') }}"></script>
@endsection