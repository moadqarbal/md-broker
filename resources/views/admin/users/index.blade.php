<x-alayout>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">All Users</h4>

                    <p class="sub-header mb-4">
                        This page displays a list of all registered users, with each user's profile presented in a card layout. Each card contains a profile picture, contact information, and a short bio. You can quickly view a user's profile, update their details, or take administrative actions like banning or deleting the user. The interface is user-friendly, offering easy management of users with buttons for quick actions.
                    </p>

                    <x-search-user />

                    <div class="row">
                        <x-all-users-cards :users="$users" />
                    </div>
                
                    {{ $users->links() }}
                    
                </div>
            </div> <!-- card -->
        </div> <!-- end row -->

    </div>
    <!-- end row -->
</x-alayout>
