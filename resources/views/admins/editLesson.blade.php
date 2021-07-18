@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/editLesson.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content-content')

<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">

            <h3 class="page-title">{{ trans('message.classMangement') }}</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">{{ trans('message.class') }} {{ $class->name }}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('message.classDetail') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<section class="content">
    <div class="box">
        <div class="d-none info-class" data-lessonid="{{ $lessons->id }}" data-classId={{ $class->id }}></div>
        <div class="box-body">
            <div class="board">
                <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                        {{-- <div class="liner"></div> --}}
                        <li>
                            <a href="#home" data-toggle="tab" title="welcome" class="active show">
                                <span class="round-tabs one">
                                    <i class="fa fa-info"></i>
                                </span> 
                            </a>
                        </li>

                        <li>
                            <a href="#profile" data-toggle="tab" title="profile">
                                <span class="round-tabs two">
                                    <i class="fa fa-book"></i>
                                </span> 
                            </a>
                        </li>

                        <li>
                            <a href="#messages" data-toggle="tab" title="bootsnipp goodies">
                                <span class="round-tabs three">
                                    <i class="fa fa-pencil"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#attendence" data-toggle="tab" title="attendence">
                                <span class="round-tabs three">
                                    <i class="fa fa-check"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade in active show" id="home">
                        <form action="" method="POST" role="form" id="edit-info">
                            @csrf
                            <legend>{{ trans('message.class') }} {{ trans('message.info') }}</legend>
                        
                            <div class="form-group">
                                <label for="">{{ trans('message.id') }}</label>
                                <input type="text" value ="{{ $lessons->id }}" hidden name="id">
                                <p class="form-control" id="" name="id" value ="{{ $lessons->id }}">{{ $lessons->id }}</p>
                            </div>
                            <div class="form-group">
                                <label for="">{{ trans('message.name') }}</label>
                                <input type="text" class="form-control" name="name"  placeholder="Input field" value ="{{ $lessons->name }}">
                            </div>
                            <div class="form-group">
                                <label for="">{{ trans('message.time_study') }}</label>
                                <input type="datetime-local" class="form-control" name="schedule_time" placeholder="Input field" value ="{{ \Carbon\Carbon::parse($lessons->schedule_time)->format('Y-m-d\TH:i') }}"> 
                            </div>
                            <div class="form-group">
                                <label for="">{{ trans('message.classroom.deadline') }}</label>
                                <input type="datetime-local" class="form-control" name="deadline" placeholder="Input field" value ="{{ \Carbon\Carbon::parse($lessons->deadline)->format('Y-m-d\TH:i') }}"> 
                            </div>
                            <div class="form-group">
                                <label for="">{{ trans('message.classroom.type') }}</label>
                                <select name="is_test" class="form-control" value={{ $lessons->is_test }}>
                                    <option value=""></option>
                                    <option value="0" @if($lessons->is_test == 0) selected @endif>{{ trans('message.classroom.lesson_normal') }}</option>
                                    <option value="1" @if($lessons->is_test == 1) selected @endif>{{ trans('message.classroom.lesson_test') }}</option>
                            </select>
                            <div class="form-group">
                                <label for="">{{ trans('message.description') }}</label>
                                <textarea style="width: 100%" name="description">{{ $lessons->description }}</textarea>
                            </div>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ trans('message.submit') }}</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <button type="button" class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#addNewTheory">{{ trans('message.addNew') }} {{ trans('message.theory') }}</button>
                        <form action="" method="POST" role="form" id="addTheory" data-lessonid="{{ $lessons->id }}" data-classId={{ $class->id }}>
                            @csrf
                            <legend>{{ trans('message.select') }} {{ trans('message.theory') }}</legend>

                            <div class="form-group">
                                <select name="" id="addLessionDocument" class="form-control select2-document" style="width: 100%">
                                    <option></option>
                                    @foreach ($documents as $document)
                                        <option data-documentid="{{ $document->id }}">{{ $document->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
                        <div class="appendTheory">
                            
                        </div>
                        <div class="accordion" id="accordionExample">
                            @foreach ($lessondocuments as $lessondocument)
                            <div class="card">
                                <div class="card-header" id="{{ $lessondocument->id }}">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#{{ $lessondocument->document->slug }}" aria-expanded="true" aria-controls="{{ $lessondocument->document->slug }}">
                                        {{ $lessondocument->document->title }}
                                    </button>
                                  </h2>
                                </div>

                                <div id="{{ $lessondocument->document->slug }}" class="collapse" aria-labelledby="{{ $lessondocument->id }}" data-parent="#accordionExample">
                                  <div class="card-body">
                                    {!! $lessondocument->document->content !!}
                                  </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                    <div class="tab-pane fade" id="messages">
                        <button type="button" class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#addNewExercise">{{ trans('message.addNew') }} {{ trans('message.exercise') }}</button>
                        <form action="" method="POST" role="form" data-lessonid="{{ $lessons->id }}" id="addExercise">
                            @csrf
                            <legend>{{ trans('message.select') }} {{ trans('message.exercise') }}</legend>
                            {{--  Deadline: <input type="datetime-local" required class="a" value=""/> --}}
                            <div class="form-group">
                                <select name="" id="addLessionExercise" class="form-control">
                                    <option></option>
                                    @foreach ($exercises as $exercise)
                                        <option data-exerciseid="{{ $exercise->id }}">{{ $exercise->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
                        <div class="appendExercise">
                            
                        </div>
                        <div class="accordion" id="accordionExample">
                            @foreach ($lessonexercises as $lessonexercise)
                            <div class="card">
                                <div class="card-header" id="{{ $lessonexercise->id }}">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#{{ $lessonexercise->exercise->slug }}" aria-expanded="true" aria-controls="{{ $lessonexercise->exercise->slug }}">
                                        {{ $lessonexercise->exercise->title }}
                                    </button>
                                  </h2>
                                </div>

                                <div id="{{ $lessonexercise->exercise->slug }}" class="collapse" aria-labelledby="{{ $lessonexercise->id }}" data-parent="#accordionExample">
                                  <div class="card-body">
                                    {!! $lessonexercise->exercise->content !!}
                                  </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="attendence">
                        <table class="table table-bordered">
                            <tr >
                                <td>Học sinh</td>
                                <td>ID</td>
                                <td>Tình trạng</td>
                            </tr>
                            @if(count($attendances) > 0)
                            @foreach($attendances as $attendance)
                                <tr>
                                    <td>{{ $attendance->users[0]->name }}</td>
                                    <td>{{ $attendance->users[0]->id }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-attendance" data-value="1" data-student={{ $attendance->users[0]->id }}> Đúng giờ </button>
                                        <button class="btn btn-sm btn-attendance" data-value="2" data-student={{ $attendance->users[0]->id }}> Đi muộn </button>
                                        <button class="btn btn-sm btn-attendance" data-value="0" data-student={{ $attendance->users[0]->id }}> Vắng </button>
                                    </td>
                                </tr>
                            @endforeach
                            @endif
                           {{--   <tr>
                                <td>Student 01</td>
                                <td>00001</td>
                                <td>
                                    <button class="btn btn-sm btn-success"> Đúng giờ </button>
                                    <button class="btn btn-sm"> Đi muộn </button>
                                    <button class="btn btn-sm"> Vắng </button>
                                </td>
                            </tr>
                             <tr>
                                <td>Student 01</td>
                                <td>00001</td>
                                <td>
                                    <button class="btn btn-sm"> Đúng giờ </button>
                                    <button class="btn btn-sm"> Đi muộn </button>
                                    <button class="btn btn-sm btn-danger"> Vắng </button>
                                </td>
                            </tr> --}}

                            
                        </table>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="box-footer">
            <a href="{{ route('classDetail', $class->id) }}" class="btn btn-info float-right">Trở lại lớp học</a>
        </div>
    </div>
</section>

@endsection

<div id="addNewTheory" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> {{ trans('message.addNew') }} {{ trans('message.theory') }}</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" role="form" id="add-new-theory">
                    <div class="form-group">
                        <label for="">{{ trans('message.title') }}</label>
                        <input type="text" class="form-control" id="add-title" name="title" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.content') }}</label>
                        <textarea name="content" id="editortheory" rows="10" cols="80" name="content"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info float-right">{{ trans('message.submit') }}</button> 
                        <button type="button" class="btn btn-default float-right mr-4" data-dismiss="modal">{{ trans('message.close') }}</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<div id="addNewExercise" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> {{ trans('message.addNew') }} {{ trans('message.exercise') }}</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" role="form" id="add-new-exercise">
                    <div class="form-group">
                        <label for="">{{ trans('message.title') }}</label>
                        <input type="text" class="form-control" id="add-title" name="title" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.content') }}</label>
                        <textarea name="content" id="editorexercise" rows="10" cols="80" name="content"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info float-right">{{ trans('message.submit') }}</button> 
                        <button type="button" class="btn btn-default float-right mr-4" data-dismiss="modal">{{ trans('message.close') }}</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

@section('ajax')
    <script src="{{ asset('js/classesDetail.js') }}"></script>
@endsection
