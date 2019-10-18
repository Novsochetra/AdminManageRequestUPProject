@extends('layouts.master')

@section('content')
    <article class="content item-editor-page">
        <div class="title-block">
            <h3 class="title"> Add new item <span class="sparkline bar" data-type="bar"></span>
            </h3>
        </div>
        <form role="form" method="POST" action="{{ route('permissions.update', $role_permission->id) }}">
            @csrf
            @method('PUT')
            <div class="card card-block">
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Roles: </label>
                    <div class="col-sm-10">
                        <select class="c-select form-control boxed" name="roles">
                            <option>Select Roles</option>
                            @foreach ($roles as $role)
                                <option value="{{$role->id}}" @if ($role->id == $role_permissions[0]->role->id) selected @endif>{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @foreach ($role_permissions as $rp)     
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label text-xs-right"> {{ $rp->permission->name }} </label>
                        <div class="col-sm-10">
                            <input type="hidden" name="permission[{{ $rp->id }}][feature_id]" value="{{ $rp->id }}"/>
                            <label>
                                <input class="checkbox" type="checkbox" name="permission[{{ $rp->id }}][can_create]" @if ($rp->can_create == 1) checked @endif>
                                <span> Can Create </span>
                            </label>
                            <label>
                                <input class="checkbox" type="checkbox" name="permission[{{$rp->id}}][can_read]" @if ($rp->can_read == 1) checked @endif>
                                <span> Can Read </span>
                            </label>
                            <label>
                                <input class="checkbox" type="checkbox" name="permission[{{$rp->id}}][can_update]" @if ($rp->can_update == 1) checked @endif>
                                <span> Can Update </span>
                            </label>
                            <label>
                                <input class="checkbox" type="checkbox" name="permission[{{$rp->id}}][can_delete]" @if ($rp->can_delete == 1) checked @endif>
                                <span> Can Delete </span>
                            </label>
                        </div>
                    </div>
                @endforeach
               
                <div class="form-group row">
                    <div class="col-sm-1">
                        <button type="submit" class="btn btn-primary"> Submit </button>
                    </div>
                    <div class="col-sm-1">
                        <a href="{{ URL::previous() }}" class="btn btn-secondary">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </article>
@endsection
