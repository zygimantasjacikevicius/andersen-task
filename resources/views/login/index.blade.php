@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-10">
                <div class="col-md-10">
                    @foreach ($errors->all() as $error)
                        <div class="bg-danger text-white">
                            <h4>{{ $error }}</h4>
                        </div>
                    @endforeach
                </div>
                <div class="card">
                    <div class="card-header">
                        <h1>Please add your details below</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login_store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-4 form-group">
                                    Name:<input type="text" class="form-control" name="name"
                                        value="{{ old('name') }}">
                                </div>
                                <div class="col-4 form-group">
                                    Email: <input type="email" class="form-control" name="email"
                                        value="{{ old('email') }}">
                                </div>


                                <div class="col-12 form-group">
                                    Message:
                                    <textarea name="message" class="form-control">{{ old('message') }}</textarea>
                                </div>


                                <button type="submit" class="btn btn-success mt-2">Add details</button>
                            </div>
                    </div>

                    </form>
                </div>

                @forelse ($logins as $login)
                    <div class="card mt-3">
                        <div class="card-body ">

                            <h5 class="card-title">{{ $login->name }}</h5>
                            <p class="card-text"> {{ $login->email }}</p>
                            <p class="card-text"> {{ $login->message }}</p>

                        </div>
                    </div>
                @empty
                    <h3>No data</h3>
                @endforelse
            </div>





        </div>
    </div>
@endsection
