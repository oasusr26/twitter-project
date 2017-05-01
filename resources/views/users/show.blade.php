@extends('layouts.app')

@section('content')

    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                    <img src="media-object img-responsive" src="{{ Gravator::src($user->email, 500) }}" alt="" />
                </div>
            </div>
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li><a href="#">Free/掲示板</a></li>
                <li><a href="#">フォロー</a></li>
                <li><a href="#">フォロワー</a></li>
            </ul>
        </div>
    </div>
@endsection