@extends('layouts.master')

@section('content')
    <article class="content item-editor-page">
        <div class="title-block">
            <h3 class="title"> Detail Ticket <span class="sparkline bar" data-type="bar"></span>
            </h3>
        </div>
        <div class="card card-block">
            <form role="form" method="POST" action="{{ route('tickets.update', $ticket->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Title: </label>
                    <div class="col-sm-10">
                        <input id="title" name="title" type="text" class="form-control underlined " value="{{ $ticket->title }}" autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Content: </label>
                    <div class="col-sm-10">
                        <input class="form-control underline" value="{{ $ticket->description }}" id="description" name="description"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Status: </label>
                    <div class="col-sm-10">
                        <select class="c-select form-control boxed" name="status">
                            <option>Select Status</option>
                            @foreach ($statuses as $s)
                                <option value="{{$s->id}}" @if ($s->id == $ticket->status->id) selected @endif>{{ $s->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Priority: </label>
                    <div class="col-sm-10">
                        <select class="c-select form-control boxed" name="priority">
                            <option>Select Status</option>
                            @foreach ($priorities as $p)
                                <option value="{{$p->id}}" @if ($p->id == $ticket->priority->id) selected @endif>{{ $p->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Technicals: </label>
                    <div class="col-sm-10">
                        <select class="c-select form-control boxed" name="solve_by">
                            <option value="">Select Technical</option>
                            @foreach ($technicals as $t)
                                <option value="{{$t->id}}" @if ($t->id == $ticket->solve_by) selected @endif >{{ $t->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- if we are the owner of the ticket. we can update the ticket --}}
                @if (Auth::user()->id == $ticket->requester->id)    
                    <button type='submit' class="btn btn-success" style="">
                        Update
                    </button>
                @endif
            </form>

        </div>

        <div class="card card-block">
            <form role="form" method="POST" action="{{ route('comments.store') }}">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-11">
                        <input type="hidden" name="ticket_id" value="{{ $ticket->id }}"/>
                        <input id="content" name="content" type="text" class="form-control underlined " autofocus >
                    </div>

                    <div class="col-sm-1">
                        <button type='submit' class="btn btn-pill-right" style="background-color: #6769d4;">
                            <i class="fa fa-send-o"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <hr>
        @if (count($ticket->comments) > 0)    
            @foreach ($ticket->comments as $comment)
                <div class="form-group row">
                    <div class="col-sm-10" style="display: flex;">
                        <img src="https://avatars3.githubusercontent.com/u/3959008?v=3&s=40" alt="commentor_profile" class="rounded-circle" width="50px" height="50px">
                        <div class="card card-block">
                            <p>{{ $comment->content }}</p> 
                        </div>                 
                    </div>
                </div>
            @endforeach
        @endif
    </article>
@endsection
