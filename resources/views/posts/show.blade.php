@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 bg-white">

            <div class="row">
                <div class="col-md-8">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </div>
                <div class="col-md-4 p-3 bg-light">
                    <div class="d-flex">
                        
                            <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px; max-height:40px;">
                            <a href="/profile/{{ $post->user->id }}" class="px-2 py-2">
                                <h5><b class="text-dark">{{ $post->user->username }}</b></h5>
                            </a>
                            @can('update', $post->user->profile)
                            @else
                                <follow-button class="btn btn-sm" user-id="{{ $post->user->id }}" follows="{{ $follows }}"></follow-button>
                            @endcan
                    </div>

                    <hr>

                    <p>
                        <span class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                        </span> {{ $post->caption }}
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection