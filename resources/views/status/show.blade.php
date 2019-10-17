@extends('layouts.master')

@section('content')
    <article class="content forms-page">
        <div class="title-block">
            <h3 class="title"> Show Status </h3>
        </div>
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-12">
                    <div class="card card-block sameheight-item">
                        <div class="form-group has-success">
                            <label class="control-label">Name</label>
                            <input id="name" name="name" type="text" class="form-control underlined" value="{{ $status->name }}" readonly>
                        </div>
                        <div class="form-group has-warning">
                            <label class="control-label">Color</label>
                            <input type="color" name="color" id="color" value="{{$status->color}}" class="form-control underlined" readonly>
                            @error('color')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <a href="{{ URL::previous() }}" class="btn btn-block btn-success">
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
