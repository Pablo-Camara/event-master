@extends('layouts.app')

@section('content')
@auth
<div id="events-user-has-been-invited-to"></div>
@endauth
<div id="highlighted-events"></div>
<div id="next-events"></div>
<div id="events-happening-right-now"></div>
<div id="past-events"></div>
@endsection
