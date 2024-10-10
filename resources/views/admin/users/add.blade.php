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
                            <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                                
                                @csrf
                                @method('POST')

                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name:</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name:</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="username" class="form-label">Username:</label>
                                    <input type="text" id="username" name="username" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" name="password" id="password" class="form-control">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>                                

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" id="phone" name="phone" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="whatsapp_number" class="form-label">Whatsapp number</label>
                                    <input type="text" id="whatsapp_number" name="whatsapp_number"
                                        class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Role</label> <br />
                                    <select id="selectize-select" name="role" class="form-control" required>
                                        <option value="" selected disabled>Select Role</option>
                                        <option value="su">Super User</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>                                

                                <div class="mb-3">
                                    <label for="example-textarea" class="form-label">Bio</label>
                                    <textarea class="form-control" name="bio" id="example-textarea" rows="5"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="user_image" class="form-label">Profile pictur</label>
                                    <input type="file" name="user_image" id="user_image" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text" id="facebook" name="facebook" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="text" id="instagram" name="instagram" class="form-control">
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
