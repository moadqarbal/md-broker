<x-alayout>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">Profile</h4>

                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="card mb-3" style="box-shadow: 1px 1px 5px #f9f9f9">
                                <img src="{{ $user->user_image ? asset('storage/' . $user->user_image) : 'https://placehold.co/400' }}" alt="User Image" class="card-img-top rounded-circle" style="width: 150px; height: 150px; object-fit: cover; margin: 20px auto;">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $user->first_name }} {{ $user->first_name }}</h3>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('users.edit', ['id' => $user->id]) }}" class="btn btn-primary me-2"><i class="fas fa-edit"></i> Update</a>
                                <button class="btn btn-warning me-2"><i class="fas fa-ban"></i> Ban</button>
                                <form class="d-inline" action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card" style="box-shadow: 1px 1px 5px #f9f9f9">
                                <div class="card-body">
                                    <h5 class="card-title">Information</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="fas fa-user me-3"></i>
                                            <strong>Username:</strong>
                                            <span class="text-end ms-auto">{{ $user->username }}</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="fas fa-envelope me-3"></i>
                                            <strong>Email:</strong>
                                            <span class="text-end ms-auto">{{ $user->email }}</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="fas fa-user-tag me-3"></i>
                                            <strong>Role:</strong>
                                            <span class="text-end ms-auto">{{ $user->role == 'su' ? 'Super User' : $user->role  }}</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="fas fa-phone me-3"></i>
                                            <strong>Phone:</strong>
                                            <span class="text-end ms-auto">{{ $user->phone }}</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="fab fa-whatsapp me-3"></i>
                                            <strong>WhatsApp Number:</strong>
                                            <span class="text-end ms-auto">{{ $user->whatsapp_number }}</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="fas fa-info-circle me-3"></i>
                                            <strong>Bio:</strong>
                                            <span class="text-end ms-auto">{{ substr($user->bio, 0, 40) }}{{ strlen($user->bio) > 40 ? '...' : '' }}</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="fab fa-instagram me-3"></i>
                                            <strong>Instagram:</strong>
                                            <span class="text-end ms-auto">{{ $user->instagram }}</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="fab fa-facebook me-3"></i>
                                            <strong>Facebook:</strong>
                                            <span class="text-end ms-auto">{{ $user->facebook }}</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="fas fa-ban me-3"></i>
                                            <strong>Banned Status:</strong>
                                            <span class="text-end ms-auto">
                                                {!!
                                                    $user->is_banned ? 
                                                    '<span class="badge bg-danger"> Yes </span>' : 
                                                    '<span class="badge bg-success"> No </span>' 
                                                !!}
                                            </span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="fas fa-calendar-alt me-3"></i>
                                            <strong>Banned Until:</strong>
                                            <span class="text-end ms-auto">{{ $user->banned_until ?? 'N/A' }}</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="fas fa-calendar-check me-3"></i>
                                            <strong>Account Created:</strong>
                                            <span class="text-end ms-auto">{{ $user->created_at->format('Y-m-d') }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div> <!-- card -->
        </div> <!-- end row -->

    </div>
    <!-- end row -->
</x-alayout>
