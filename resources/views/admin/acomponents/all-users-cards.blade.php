@props(['users'])
@foreach ($users as $user)
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card" style="box-shadow: 1px 1px 5px #f9f9f9">
            <img src="{{ $user->user_image ? asset('storage/' . $user->user_image) : 'https://placehold.co/400' }}"
                class="card-img-top" alt="{{ $user->first_name }} {{ $user->last_name }}"
                style="height: 400px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title mb-1">{{ $user->first_name }} {{ $user->last_name }}</h5>
                <small class="d-block text-dark mb-3">{{ '@' . $user->username }}</small>

                <p class="card-text">{{ $user->bio ?? 'No bio available' }}</p>
                <p class="card-text">
                    <small class="text-muted">{{ $user->email }}</small><br>
                    <small class="text-muted">{{ $user->phone ?? 'No phone number' }}</small>
                </p>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('users.show', ['id' => $user->id]) }}" class="btn btn-primary">View Profile</a>
                    <a href="{{ route('users.edit', ['id' => $user->id]) }}" class="btn btn-warning">Update</a>
                    <a href="#" class="btn btn-dark">Ban</a>

                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
