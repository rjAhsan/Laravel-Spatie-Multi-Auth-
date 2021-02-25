@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br>
                    <hr>
                    @role('super-admin')
                    <section>
                        <h1>This is Super Admin Session <span class="btn btn-primary">SuperAdmin<a href=""></a></span> </h1>
                    </section>
                    <br>
                    <hr>
                    @endrole

                    @role('admin')
                    <section>
                        <h1>This is Simple Admin Session<span class="btn btn-primary">Admin<a href=""></a></span> </h1>
                    </section>

                    @endrole
                    <br>
                    <hr>
                    @role('writer')
                    <section>
                        <h1>This is Simple User  Session<span class="btn btn-primary">User<a href=""></a></span> </h1>
                    </section>
                    <br>
                    <hr>
                    @endrole




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
