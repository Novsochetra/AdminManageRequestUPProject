@extends('layouts.master')

@section('content')
    <article class="content item-editor-page">
        <div class="title-block">
            <h3 class="title"> New Ticket <span class="sparkline bar" data-type="bar"></span>
            </h3>
        </div>
        <form role="form" method="POST" action="{{ route('tickets.store') }}" id="create_ticket_form">
            @csrf
            <div class="card card-block">
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Title: </label>
                    <div class="col-sm-10">
                        <input id="title" name="title" type="text" class="form-control underlined @error('title') is-invalid @enderror" value="{{ old('title') }}" autofocus>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Content: </label>
                    <div class="col-sm-10">
                        <input class="form-control underlined @error('description') is-invalid @enderror" value="{{ old('description') }}" name="description" form="create_ticket_form" />
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Status: </label>
                    <div class="col-sm-10">
                        <select class="c-select form-control boxed" name="status">
                            <option selected>Select Status</option>
                            @foreach ($status as $s)
                                <option value="{{$s->id}}">{{ $s->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Priority: </label>
                    <div class="col-sm-10">
                        <select class="c-select form-control boxed" name="priority">
                            <option selected>Select Priority</option>
                            @foreach ($priority as $p)
                                <option value="{{$p->id}}">{{ $p->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Technicals: </label>
                    <div class="col-sm-10">
                        <select class="c-select form-control boxed" name="solve_by">
                            <option value="" selected>Select Technical</option>
                            @foreach ($technicals as $t)
                                <option value="{{$t->id}}">{{ $t->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Images: </label>
                    <div class="col-sm-10">
                        <div class="images-container">
                            <div class="image-container">
                                <div class="controls">
                                    <a href="" class="control-btn move">
                                        <i class="fa fa-arrows"></i>
                                    </a>
                                    <a href="" class="control-btn star">
                                        <i class="fa"></i>
                                    </a>
                                    
                                    <a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </div>
                                <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
                            </div>
                            <a href="#" class="add-image" data-toggle="modal" data-target="#modal-media">
                                <div class="image-container new">
                                    <div class="image">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary"> Submit </button>
                    </div>
                </div>
            </div>
        </form>
    </article>
@endsection
