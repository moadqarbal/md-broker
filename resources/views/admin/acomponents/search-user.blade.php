<div class="mb-4">
    <form action="{{ route('users.index') }}" method="GET" class="d-flex">
        <input type="text" name="searchuser" class="form-control me-2" placeholder="Search for a user" aria-label="Search" style="width: 100%;">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
