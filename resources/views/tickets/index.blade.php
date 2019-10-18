@extends('layouts.master')


@section('content')
   
<article class="content cards-page">
   <div class="title-block" style="display: flex; flex: 1">
        <h3 class="title" style="flex: 1"> Ticket </h3>

        <a href="{{ route('tickets.create') }}" class="btn btn-pill-right btn-secondary"> <i class="fa fa-plus"></i> New Ticket </a>
    </div>
    <section class="section">
        {{ $tickets->links() }}
        <div class="row">
            @if (count($tickets) > 0)   
                @foreach ($tickets as $ticket)     
                    <div class="col-xl-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="header-block" style="display: flex; flex: 1; justify-content: center;">
                                    <a href="{{ route('tickets.show', $ticket->id) }}" class="title" style="color: #fff"> {{ $ticket->title }} </a>
                                </div>
                            </div>
                            <div class="card-block" >
                                <p> Request By: {{ $ticket->requester->name }} </p>
                                <p> Asignee:  
                                    @if ($ticket->solver)
                                        {{ $ticket->solver->name }}
                                    @else
                                        None
                                    @endif
                                </p>
                                <p> Date Request: {{ $ticket->created_at }} </p>
                                <p> Status: {{ $ticket->status->name }} </p>
                                <p> Priority: {{ $ticket->priority->name }} </p>
                                @if (Auth::user()->id == $ticket->requester->id)  
                                <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}  
                                    <button type='submit' class="btn btn-danger" style="">
                                        Remove
                                    </button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach 
            @else
                <div class="col-xl-12">
                    <h3>No Record Found</h3>
                </div>
            @endif
        </div>

        {{ $tickets->links() }}
        <!-- /.row -->
        <!-- /.row -->
    </section>
</article>
@endsection
