@extends('layouts.app')
@extends('layouts.auditorial')

@section('content')

@foreach ($profiles as $profile )
    @if(Auth::id() == $profile->user_id)
        @if($profile->learning_type == 'Kinestetik')
        Hello Kinestetik

        @elseif($profile->learning_type == "Visual")
        Hello Visual

        @elseif($profile->learning_type == "Audiotorial")
        Hello Audiotorial

        {{-- General --}}
        @else
        Hello General
        @endif
    @endif
@endforeach

@endsection
