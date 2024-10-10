<x-alayout>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">New User</h4>
                    <p class="sub-header">
                        
                    </p>

                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('admin.myprofile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', auth()->user()->first_name) }}" required>
                                </div>
                            
                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', auth()->user()->last_name) }}" required>
                                </div>
                            
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', auth()->user()->email) }}" required>
                                </div>
                            
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', auth()->user()->phone) }}">
                                </div>
                            
                                <div class="mb-3">
                                    <label for="whatsapp_number" class="form-label">WhatsApp</label>
                                    <input type="text" class="form-control" id="whatsapp_number" name="whatsapp_number" value="{{ old('whatsapp_number', auth()->user()->whatsapp_number) }}">
                                </div>
                            
                                <div class="mb-3">
                                    <label for="bio" class="form-label">Bio</label>
                                    <textarea class="form-control" id="bio" name="bio">{{ old('bio', auth()->user()->bio) }}</textarea>
                                </div>
                            
                                <div class="mb-3">
                                    <label for="role" class="form-label">Role</label>
                                    <select class="form-control" id="role" name="role">
                                        <option value="admin" {{ auth()->user()->role === 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="user" {{ auth()->user()->role === 'user' ? 'selected' : '' }}>User</option>
                                        
                                        {{-- Only show "super user" option if the authenticated user is a super user --}}
                                        @if(auth()->user()->role === 'su')
                                            <option value="su" {{ auth()->user()->role === 'su' ? 'selected' : '' }}>Super User</option>
                                        @endif
                                    </select>
                                </div>
                                
                            
                                <div class="mb-3">
                                    <label for="user_image" class="form-label">Profile Image</label>
                                    <input type="file" class="form-control" id="user_image" name="user_image">
                                    @if(auth()->user()->user_image)
                                        <img src="{{ asset('storage/' . auth()->user()->user_image) }}" alt="Profile Image" width="100" class="mt-3">
                                    @endif
                                </div>
                            
                                <div class="mb-3 text-center">
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
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
