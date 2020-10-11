
    @if (Auth::user()->is_favorite($micropost->id))
        {!! Form::open(["route" => ["favorites.unfavorite" , $micropost->id] , "method" => "delete"]) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フォローボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-light btn-block"]) !!}
        {!! Form::close() !!}
    @endif
