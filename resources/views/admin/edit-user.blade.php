@include('admin.AdminLayout.Topbar')
@include('admin.AdminLayout.Sidebar')

@section('content')
    <main>
        <div class="centered-box">
            <h2>Edit User</h2>
            <form method="post" action="{{ route('admin.update.user', $user->id) }}">
                @csrf
                @method('PUT')

                <!-- Your form fields go here, pre-filled with user data -->
                <label for="Fname">First Name</label>
                <input type="text" id="Fname" name="Fname" value="{{ $user->first_name }}" required>

                <!-- Add other input fields based on your requirements -->

                <button type="submit">Update User</button>
            </form>
        </div>
    </main>
@endsection