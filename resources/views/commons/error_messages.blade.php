@if (count($errors) > 0)
    <ul class = "alert alert-denger" role = "aleat">
        @foreach($errors->all() as $error)
            <li class = "ml-4">{{ $error }}</li>
        @endforeach
    </ul>
@endif