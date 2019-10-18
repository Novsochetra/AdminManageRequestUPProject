@extends('layouts.master')

@section('content')
    <article class="content forms-page">
        <div class="title-block">
            <h3 class="title"> Edit Roles </h3>
        </div>

        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-12">
                    <div class="card card-block sameheight-item">
                        <form role="form" method="POST" action="{{ route('roles.update', $role->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group has-success">
                                <label class="control-label">Name</label>
                               
                                <input id="name" name="name" type="text" class="form-control underlined @error('name') is-invalid @enderror" value="{{ $role->name }}" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                           
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-success">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
