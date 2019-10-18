@extends('layouts.master')

@section('content')
    <article class="content item-editor-page">
        <div class="title-block">
            <h3 class="title"> Detail Permission <span class="sparkline bar" data-type="bar"></span>
            </h3>
        </div>
            <div class="card card-block">
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Roles: </label>
                    <label class="col-sm-10 form-control-label text-xs-right"> {{ $role_permissions[0]->role->name }} </label>
                </div>
                @foreach ($role_permissions as $rp)     
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label text-xs-right"> {{ $rp->permission->name }} </label>
                        <div class="col-sm-10">
                            <input type="hidden" name="permission[{{ $rp->id }}][feature_id]" value="{{ $rp->id }}" readonly/>
                            <label>
                                <input class="checkbox" type="checkbox" @if ($rp->can_create == 1) checked @endif >
                                <span> Can Create </span>
                            </label>
                            <label>
                                <input class="checkbox" type="checkbox" @if ($rp->can_read == 1) checked @endif readonly>
                                <span> Can Read </span>
                            </label>
                            <label>
                                <input class="checkbox" type="checkbox" @if ($rp->can_update == 1) checked @endif readonly>
                                <span> Can Update </span>
                            </label>
                            <label>
                                <input class="checkbox" type="checkbox" @if ($rp->can_delete == 1) checked @endif readonly>
                                <span> Can Delete </span>
                            </label>
                        </div>
                    </div>
                @endforeach
               
                <div class="form-group">
                    <a href="{{ URL::previous() }}" class="btn btn-block btn-success">
                        Back
                    </a>
                </div>
            </div>
    </article>
@endsection
