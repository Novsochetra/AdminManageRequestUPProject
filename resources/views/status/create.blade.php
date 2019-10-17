@extends('layouts.master')

@section('content')
    <article class="content forms-page">
        <div class="title-block">
            <h3 class="title"> Add New Status </h3>
        </div>
        {{-- <div class="subtitle-block">
            <h3 class="subtitle"> Modular Admin Inputs </h3>
        </div> --}}
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-12">
                    <div class="card card-block sameheight-item">
                        <form role="form" method="POST" action="{{ route('status.store') }}">
                            @csrf
                            <div class="form-group has-success">
                                <label class="control-label">Name</label>
                               
                                <input id="name" name="name" type="text" class="form-control underlined @error('name') is-invalid @enderror" value="{{ old('name') }}" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                                {{-- <span class="has-success">Success message.</span> --}}
                            </div>
                            <div class="form-group has-warning">
                                <label class="control-label">Color</label>
                                <input type="color" name="color" id="color" class="form-control underlined" >
                                @error('color')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-success">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
