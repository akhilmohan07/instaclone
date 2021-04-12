@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="/p" enctype="multipart/form-data" method="post">
                @csrf
                <div class="card px-5 py-3">
                    <div class="card-title ">
                        <h3>Add New Post</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="caption" class="col-form-label">Post Caption</label>

                            <input id="caption" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                            @if ($errors->has('caption'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('caption') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <label for="image" class="col-form-label">Post Image</label>

                            <input type="file" class="form-control-file" id="image" name="image">

                            @if ($errors->has('image'))
                                <strong>{{ $errors->first('image') }}</strong>
                            @endif
                        </div>

                        <div class="row pt-4">
                            <button class="btn btn-primary">Add New Post</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection