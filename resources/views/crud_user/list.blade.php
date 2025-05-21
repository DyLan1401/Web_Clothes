@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
<<<<<<< HEAD
                            <th>Roles</th>
                            <th>Profile</th>
                            <th>Order</th>
=======
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                                <th>
<<<<<<< HEAD
                                    @foreach($user->roles as $role)
                                        <a href="{{ route('user.role', ['id' => $role->id]) }}">
                                            {{ $role->name . '-' }}
                                        </a>
                                    @endforeach
                                </th>
                                <th>
                                <a href="{{ route('profile.show', $user->id) }}">Profile</a>

                                </th>

                                <th>
                                <a href="{{ route('orders.byUser', $user->id) }}">order</a>

                                </th>

                                <th>
=======
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
                                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
<<<<<<< HEAD
                {!! $users->withQueryString()->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </main>
@endsection
=======
            </div>
        </div>
    </main>
@endsection
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
