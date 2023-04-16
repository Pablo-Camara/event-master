<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Roles</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->roles->pluck('name')->implode(', ') }}</td>
                <td><a href="{{ route('users.edit', $user) }}">Edit</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
