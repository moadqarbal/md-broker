<x-alayout>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Update User</h4>
                    <p class="sub-header">
                        
                    </p>

                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                                
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name:</label>
                                    <input type="text" value="{{ $user->first_name }}" id="first_name" name="first_name" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name:</label>
                                    <input type="text" value="{{ $user->last_name }}" id="last_name" name="last_name" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="username" class="form-label">Username:</label>
                                    <input type="text" value="{{ $user->username }}" id="username" name="username" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" value="{{ $user->email }}" id="email" name="email" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" value="{{ $user->phone }}" id="phone" name="phone" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="whatsapp_number" class="form-label">Whatsapp number</label>
                                    <input type="text" value="{{ $user->whatsapp_number }}" id="whatsapp_number" name="whatsapp_number"
                                        class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Role</label> <br />
                                    <select id="selectize-select" name="role" class="form-control" required>
                                        <option value="" disabled>Select Role</option>
                                        <option value="super_user" {{ $user->role == 'super_user' ? 'selected' : '' }}>Super User</option>
                                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                                    </select>
                                </div>                             

                                <div class="mb-3">
                                    <label for="example-textarea" class="form-label">Bio</label>
                                    <textarea class="form-control" value="{{ $user->bio }}" name="bio" id="example-textarea" rows="5"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="user_image" class="form-label">Profile Picture</label>
                                    <img src="{{ $user->user_image ? asset('storage/' . $user->user_image) : 'https://placehold.co/150x150' }}" 
                                         alt="{{ $user->first_name }}'s profile picture" class="img-thumbnail mb-3" width="150">
                                    <input type="file" name="user_image" id="user_image" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text" value="{{ $user->facebook }}" id="facebook" name="facebook" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="text" value="{{ $user->instagram }}" id="instagram" name="instagram" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <button type="submit"
                                        class="btn btn-primary waves-effect waves-light">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- card -->
        </div> <!-- end row -->

    </div>
    <!-- end row -->
</x-alayout>
