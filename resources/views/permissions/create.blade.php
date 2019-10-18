@extends('layouts.master')

@section('content')
    <article class="content item-editor-page">
        <div class="title-block">
            <h3 class="title"> Add new item <span class="sparkline bar" data-type="bar"></span>
            </h3>
        </div>
        <form role="form" method="POST" action="{{ route('permissions.store') }}">
            @csrf
            <div class="card card-block">
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Roles: </label>
                    <div class="col-sm-10">
                        <select class="c-select form-control boxed" name="roles">
                            <option selected>Select Roles</option>
                            @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @foreach ($features as $feature)     
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label text-xs-right"> {{ $feature->name }} </label>
                        <div class="col-sm-10">
                            <input type="hidden" name="permission[{{ $feature->id }}][feature_id]" value="{{ $feature->id }}"/>
                            <label>
                                <input class="checkbox" type="checkbox" name="permission[{{ $feature->id }}][can_create]">
                                <span> Can Create </span>
                            </label>
                            <label>
                                <input class="checkbox" type="checkbox" name="permission[{{$feature->id}}][can_read]">
                                <span> Can Read </span>
                            </label>
                            <label>
                                <input class="checkbox" type="checkbox" name="permission[{{$feature->id}}][can_update]">
                                <span> Can Update </span>
                            </label>
                            <label>
                                <input class="checkbox" type="checkbox" name="permission[{{$feature->id}}][can_delete]">
                                <span> Can Delete </span>
                            </label>
                        </div>
                    </div>
                @endforeach
               
                <div class="form-group row">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary"> Submit </button>
                    </div>
                </div>
            </div>
        </form>
    </article>
@endsection
