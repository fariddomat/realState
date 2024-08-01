<x-app-layout>
    <div class="container-fluid py-4 my-6">
        <div class="card card-body my-4 mx-md-4 mt-n6">
            <div class="row gx-4 mb-2">
                <form action="{{ route('dashboard.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Name</label>
                            <input name="name" type="text" class="form-control border border-2 p-2" value="{{ old('name', $user->name) }}">
                            @error('name')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Email</label>
                            <input name="email" type="email" class="form-control border border-2 p-2" value="{{ old('email', $user->email) }}">
                            @error('email')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>




                        <div class="mb-3 col-md-6">
                            <label class="form-label">Mobile</label>
                            <input name="mobile" type="text" class="form-control border border-2 p-2" value="{{ old('mobile', $user->mobile) }}">
                            @error('mobile')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Address</label>
                            <input name="address" type="text" class="form-control border border-2 p-2" value="{{ old('address', $user->address) }}">
                            @error('address')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>


                        <div class="mb-3 col-md-6">

                            <label class="form-label">Image</label>
                            <input name="image" type="file" class="form-control border border-2 p-2">
                            @error('image')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>




                        <div class="mb-3 col-md-6">
                            <label class="form-label">Role</label>
                            <select name="role" class="form-control border border-2 p-2">
                                <option value="">Select Role</option>
                                @foreach(Spatie\Permission\Models\Role::all() as $role)
                                    <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                                @endforeach
                            </select>
                            @error('role')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                    </div>

                    <button type="submit" class="btn bg-gradient-dark">Update User</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
