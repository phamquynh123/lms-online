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
                        <li class="breadcrumb-item" aria-current="page">{{ trans('message.lesson') }}</li>
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
            <h3 class="box-title">{{ $lessons->name }} : {{ $users->name }}</h3>
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

                    <div class="m-2">
                        @if(Auth::user()->role_id == config('messages.roleStudent'))

                        @else 
                            @if (count($lessonexercise->homework) > 0 ) 
                                <a class="float-right btn btn-warning btn-sm showMarkingHomework" data-id="{{ $lessonexercise->id }}" data-lessonId="{{ $lessons->id }}" data-userId="{{ $users->id }}" data-toggle="modal" data-target="#showHomework"><i class="fa fa-pencil-square-o"></i>
                                    @if($lessonexercise->homework[0]->mark > 0)
                                        {{ trans('message.marking_done') }}
                                    @else 
                                        {{ trans('message.marking') }} {{ trans('message.homework') }}
                                    @endif
                                </a>
                            @else 
                                <p class="text-primary float-right"> Chưa làm bài tập về nhà.</p>
                            @endif
                        @endif
                    </div>
                </div>
                {{-- <hr style="background-color:black"> --}}
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection


@section('ajax')
    <script src="{{ asset('js/lesson.js') }}"></script>
@endsection

<div class="modal fade" id="showHomework" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('message.marking') }} {{ trans('message.homework') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" role="form" >
                    @csrf
                    <div class="form-group">
                        <label for="">{{ trans('message.point') }}</label>
                        <input type="number" max="10" id="mark1" class="form-control" min="0">
                        {{-- <p id="mark1" class="form-control"></p> --}}
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.content') }}</label>
                        <textarea name="content" id="content" rows="10" cols="80" name="content"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.comment') }}</label>
                        <input type="text" id="comment1" class="form-control">
                        {{-- <p id="comment1" ></p> --}}
                    </div>
                    <button type="button" class="btn btn-default float-right" data-dismiss="modal">{{ trans('message.close')}}</button>
                    <button type="submit" class="btn btn-info float-right submitMarking mr-4" data-dismiss="modal" >{{ trans('message.submit') }}</button>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
