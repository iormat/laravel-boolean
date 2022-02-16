@extends('layouts.main-layout')
@section('content')
    <section id="create">
        {{-- display errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- create new postcard form --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Create</div>

                        <div class="card-body">
                            <form method="POST"
                                action="{{route('store')}}"
                                id="create_form"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label for="sender" class="col-md-4 col-form-label text-md-right">Sender</label>
                                    <div class="col-md-6">
                                        <input id="sender" type="text" class="form-control @error('sender') is-invalid @enderror" name="sender"required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
                                    <div class="col-md-6">
                                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="text" class="col-md-4 col-form-label text-md-right">Text</label>
                                    <div class="col-md-6">
                                        <textarea id="text" rows="5" class="form-control @error('text') is-invalid @enderror" name="text" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="file" class="col-md-4 col-form-label text-md-right">Image</label>
                                    <div class="col-md-6">
                                        <input type="file" id="file" rows="5" class="form-control" name="image">
                                    </div>
                                </div>

                                <button type="submit" for="create_form" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
