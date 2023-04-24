@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('users.update', $user) }}">
    @csrf
    @method('PUT')
    @foreach ($roles as $role)
        <div>
            <input type="checkbox" name="roles[]" value="{{ $role->id }}" {{ $user->hasRole($role->name) ? 'checked' : '' }}>
            <label>{{ $role->name }}</label>
        </div>
    @endforeach
    <button type="submit">Save</button>
</form>
@endsection
