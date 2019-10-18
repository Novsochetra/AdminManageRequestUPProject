@extends('layouts.master')

@section('content')
   <article class="content responsive-tables-page">
        <div class="title-block" style="display: flex; flex: 1">
            <h1 class="title" style="flex: 1"> Priority </h1>

            <a href="{{ route('roles.create') }}" class="btn btn-pill-right btn-secondary"> <i class="fa fa-plus"></i> Add Roles </a>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                <h3 class="title"> List Roles </h3>
                            </div>
                            <section class="example">
                                <div class="table-flip-scroll">
                                    <table class="table table-striped table-bordered table-hover flip-content">
                                        <thead class="flip-header">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($roles) > 0)
                                                @foreach($roles as $role)
                                                    <tr class="odd gradeX">
                                                        <td> {{$role->id }}</td>
                                                        <td> {{$role->name }}</td>
                                                        <td class="center" style="display: flex;"> 
                                                            <a href="{{ route('roles.show', $role->id) }}" class="btn btn-pill-left btn-secondary">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-secondary">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}

                                                                <button type='submit' class="btn btn-pill-right btn-danger">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr class="odd gradeX">
                                                    <td colspan="4"> No Record Found</td>
                                                </tr>
                                            @endif
                                           
                                        </tbody>
                                    </table>
                                    {{ $roles->links() }}
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
