@extends('layouts.master')


@section('content')
   
<article class="content cards-page">
    <section class="section">
        <div class="row">
            <div class="col-xl-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="header-block" style="display: flex; flex: 1; justify-content: center;">
                            <p class="title" style="color: #fff"> Resolved Ticket </p>
                        </div>
                    </div>
                    <div class="card-block" style="display: flex; flex: 1; justify-content: center;">
                        <a href="" style="font-size: 30px; text-decoration: none;">
                            <i class="fa fa-check"></i> 10
                        </a>
                    </div>
                </div>
            </div>

             <div class="col-xl-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="header-block" style="display: flex; flex: 1; justify-content: center;">
                            <p class="title" style="color: #fff"> My Ticket </p>
                        </div>
                    </div>
                    <div class="card-block" style="display: flex; flex: 1; justify-content: center;">
                        <a href="" style="font-size: 30px; text-decoration: none;">
                            <i class="fa fa-check"></i> 10
                        </a>
                    </div>
                </div>
            </div>

             <div class="col-xl-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="header-block" style="display: flex; flex: 1; justify-content: center;">
                            <p class="title" style="color: #fff"> All Tickets </p>
                        </div>
                    </div>
                    <div class="card-block" style="display: flex; flex: 1; justify-content: center;">
                        <a href="" style="font-size: 30px; text-decoration: none;">
                            <i class="fa fa-check"></i> 10
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- /.row -->
    </section>
</article>
@endsection
