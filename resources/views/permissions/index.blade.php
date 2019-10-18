@extends('layouts.master')

@section('content')
   <article class="content responsive-tables-page">
        <div class="title-block" style="display: flex; flex: 1">
            <h1 class="title" style="flex: 1"> Permission </h1>

            <a href="{{ route('permissions.create') }}" class="btn btn-pill-right btn-secondary"> <i class="fa fa-plus"></i> Add Permission </a>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                <h3 class="title"> List Permissions </h3>
                            </div>
                            <section class="example">
                                <div class="table-flip-scroll">
                                    <table class="table table-striped table-bordered table-hover flip-content">
                                        <thead class="flip-header">
                                            <tr>
                                                <th>ID</th>
                                                <th>Role Name</th>
                                                <th>Feature</th>
                                                <th>Can Create</th>
                                                <th>Can Read</th>
                                                <th>Can Update</th>
                                                <th>Can Delete</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($role_permissions) > 0)
                                                @foreach($role_permissions as $role_permission)
                                                    <tr class="odd gradeX">
                                                        <td> {{$role_permission->id }}</td>
                                                        <td> {{$role_permission->role->name }} </td>
                                                        <td> {{$role_permission->permission->name }} </td>
                                                        <td> 
                                                            @if ($role_permission->can_create == 1)
                                                                <i class="fa fa-check" style="color: #85CE36;"></i>
                                                            @else
                                                                <i class="fa fa-times-circle"></i>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($role_permission->can_read == 1)
                                                                <i class="fa fa-check" style="color: #85CE36;"></i>
                                                            @else
                                                                <i class="fa fa-times-circle"></i>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($role_permission->can_update == 1)
                                                                <i class="fa fa-check" style="color: #85CE36;"></i>
                                                            @else
                                                                <i class="fa fa-times-circle"></i>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($role_permission->can_delete == 1)
                                                                <i class="fa fa-check" style="color: #85CE36;"></i>
                                                            @else
                                                                <i class="fa fa-times-circle"></i>
                                                            @endif
                                                        </td>
                                                        <td class="center" style="display: flex;"> 
                                                            <a href="{{ route('permissions.show', $role_permission->id) }}" class="btn btn-pill-left btn-secondary">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="{{ route('permissions.edit', $role_permission->id) }}" class="btn btn-secondary">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <form action="{{ route('permissions.destroy', $role_permission->id) }}" method="POST">
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
                                                    <td colspan="8"> No Record Found</td>
                                                </tr>
                                            @endif
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
