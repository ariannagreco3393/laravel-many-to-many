@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">{{ __('Dashboard') }}
                    {{ __('You are logged in!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="">
                            <a name="" id="" class="btn btn-primary" href="{{route('admin.posts.create')}}" role="button">Crate Post</a>
                        </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
