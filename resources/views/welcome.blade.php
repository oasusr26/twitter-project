@extends('layouts.app')

@section('content')
    <!-- ログインしているかどうかを確認 -->
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Free/掲示板</h1>
                {!! link_to_route('signup.get', 'ユーザー登録をする', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection
