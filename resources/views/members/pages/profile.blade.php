@extends('members.layouts.app')

@section('content')
<div class="row mt-5">
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Personal Details</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="text-center">
                            <h4 class="mb-4">Profile Photo</h4>
                            <img
                                id="profile-photo-preview"
                                src="{{ asset('assets/images/users/15.jpg') }}"
                                alt="Profile photo preview"
                                class="avatar avatar-xxl brround mb-3"
                            >
                            <p class="font-weight-semibold mb-1">{{ old('full_name', 'E2t') }}</p>
                            <p class="text-muted">{{ '@' . old('username', 'E2t') }}</p>

                            <div>
                                <input id="profile-photo" name="profile_photo" type="file" class="d-none" accept="image/*">
                                <div class="d-flex flex-wrap justify-content-center">
                                    <label for="profile-photo" class="btn btn-primary mb-2 mr-2">
                                        <i class="fe fe-camera mr-1" aria-hidden="true"></i>
                                        Choose photo
                                    </label>
                                    <button id="remove-profile-photo" type="button" class="btn btn-outline-danger mb-2">
                                        Remove
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <h4 class="mb-4">Personal Information</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input id="username" name="username" type="text" class="form-control" value="{{ old('username', 'E2t') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="full-name">Full Name</label>
                                    <input id="full-name" name="full_name" type="text" class="form-control" value="{{ old('full_name', 'E2t') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input id="email" name="email" type="email" class="form-control" value="{{ old('email', 'pivelom255@pazard.com') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone-number">Phone Number</label>
                                    <input id="phone-number" name="phone_number" type="tel" class="form-control" value="{{ old('phone_number', '12312311213') }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input id="address" name="address" type="text" class="form-control" value="{{ old('address', '123123') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="zip-code">ZIP Code</label>
                                    <input id="zip-code" name="zip_code" type="text" class="form-control" value="{{ old('zip_code', '123123') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <select id="country" name="country" class="form-control">
                                        <option value="GB" @selected(old('country', 'GB') === 'GB')>United Kingdom</option>
                                        <option value="US" @selected(old('country') === 'US')>United States</option>
                                        <option value="CA" @selected(old('country') === 'CA')>Canada</option>
                                        <option value="IN" @selected(old('country') === 'IN')>India</option>
                                        <option value="AU" @selected(old('country') === 'AU')>Australia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex flex-column flex-sm-row align-items-sm-center justify-content-end">
                {{-- <small class="text-muted mb-2 mb-sm-0">Changes are not saved yet.</small> --}}
                <button type="button" class="btn btn-primary" >Save Changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    (() => {
        const photoInput = document.getElementById('profile-photo');
        const photoPreview = document.getElementById('profile-photo-preview');
        const removePhotoButton = document.getElementById('remove-profile-photo');
        const defaultPhoto = photoPreview.src;
        let previewUrl = null;

        photoInput.addEventListener('change', () => {
            const file = photoInput.files[0];

            if (!file) {
                return;
            }

            if (previewUrl) {
                URL.revokeObjectURL(previewUrl);
            }

            previewUrl = URL.createObjectURL(file);
            photoPreview.src = previewUrl;
        });

        removePhotoButton.addEventListener('click', () => {
            if (previewUrl) {
                URL.revokeObjectURL(previewUrl);
                previewUrl = null;
            }

            photoInput.value = '';
            photoPreview.src = defaultPhoto;
        });
    })();
</script>
@endsection
