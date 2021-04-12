@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="row">
                <div class="col-md-4 d-flex py-3 justify-content-center">
                    <img  src="{{ $user->profile->profileImage() }}" alt="" class="rounded-circle w-50" style="height:fit-content">
                </div>
                <div class="col-md-6 py-3">
                    <div class="d-flex justify-content-between">
                        <h3>{{ $user->username }}</h3>

                        @can('update', $user->profile)
                            <a href="/profile/{{ $user->id }}/edit" class="btn btn-default border border-dark font-weight-bold">Edit Profile</a>
                        @else
                            <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                        @endcan

                        @can('update', $user->profile)
                            <a href="/p/create" class="btn btn-primary font-weight-bold">Add Post</a>
                        @endcan
                    </div>
                    <div class="d-flex justify-content-between pt-2">
                        <div><strong>{{ $postCount }}</strong> posts</div>
                        <div><strong>{{ $followersCount }}</strong> followers</div>
                        <div><strong>{{ $followingCount }}</strong> following</div>
                    </div>
                    <div class="pt-2"><strong>{{ $user->profile->title }}</strong></div>
                    <div>{{ $user->profile->description }}</div>
                    <div>
                      <a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                @foreach($user->posts as $post)
                    <div class="col-md-4 py-2">
                        <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}"  alt="" class="w-100">
                    </div>
                @endforeach                      
            </div>
        </div>
    </div>
</div>
@endsection