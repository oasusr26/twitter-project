@if (count($uses) > 0)
<ul class="media-list">
    @foreach($users as $user)
        <li class="media">
            <div class="media-left">
                <img class="madia-object img-rounded" src="{{ Gravator::src($user->email , 500) }}" alt="" />
            </div>
            <div class="media-body">
                <div>
                    {{ $user->name }}さん
                </div>
                <div>
                    <p>{!! link_to_route('users.show', 'プロフィールの詳細を見る', ['id' => $user->id]) !!}</p>
                </div>
            </div>
        </li>
    @endforeach
</ul>
{!! $user->render() !!}
@endif