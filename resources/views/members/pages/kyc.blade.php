@extends('members.layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card accordion-wizard">
                <div class="card-header">
                    <h3 class="card-title">KYC Verification</h3>
                </div>
                <div class="card-body">
                    <form id="kyc-form" novalidate>
                        <div class="list-group">
                            <div class="list-group-item py-4" data-acc-step>
                                <h5 class="mb-0" data-acc-title>Identification Details</h5>
                                <div data-acc-content>
                                    <div class="my-3">
                                        <div class="alert alert-info" role="note">
                                            Your unique identification number must match the number on your photo ID.
                                            Upload files in JPG, JPEG, or PNG format only.
                                        </div>
                                        <div class="form-group">
                                            <label for="identification-number">
                                                Unique Identification Number <span class="text-danger">*</span>
                                            </label>
                                            <input
                                                id="identification-number"
                                                name="identification_number"
                                                type="text"
                                                class="form-control"
                                                placeholder="Enter the number shown on your photo ID"
                                                autocomplete="off"
                                                required
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item py-4" data-acc-step>
                                <h5 class="mb-0" data-acc-title>Upload Documents</h5>
                                <div data-acc-content>
                                    <div class="my-3">
                                        <div class="alert alert-warning" role="note">
                                            Proof of address must match the address used during registration.
                                        </div>

                                        <div class="form-group">
                                            <label for="selfie">Selfie <span class="text-danger">*</span></label>
                                            <input
                                                id="selfie"
                                                name="selfie"
                                                type="file"
                                                class="form-control-file"
                                                accept=".jpg,.jpeg,.png,image/jpeg,image/png"
                                                data-preview="selfie-preview"
                                                required
                                            >
                                            <small class="form-text text-muted">Upload a clear, recent photo of yourself (JPG, JPEG, or PNG).</small>
                                            <img id="selfie-preview" class="img-fluid rounded mt-2 d-none" style="max-height: 220px;" alt="Selfie preview">
                                        </div>

                                        <div class="form-group">
                                            <label for="photo-id">Photo ID <span class="text-danger">*</span></label>
                                            <input
                                                id="photo-id"
                                                name="photo_id"
                                                type="file"
                                                class="form-control-file"
                                                accept=".jpg,.jpeg,.png,image/jpeg,image/png"
                                                data-preview="photo-id-preview"
                                                required
                                            >
                                            <small class="form-text text-muted">Make sure the identification number is readable and matches the number entered above.</small>
                                            <img id="photo-id-preview" class="img-fluid rounded mt-2 d-none" style="max-height: 220px;" alt="Photo ID preview">
                                        </div>

                                        <div class="form-group mb-0">
                                            <label for="proof-of-address">Proof of Address <span class="text-danger">*</span></label>
                                            <input
                                                id="proof-of-address"
                                                name="proof_of_address"
                                                type="file"
                                                class="form-control-file"
                                                accept=".jpg,.jpeg,.png,image/jpeg,image/png"
                                                data-preview="proof-of-address-preview"
                                                required
                                            >
                                            <small class="form-text text-muted">Upload a document showing the same address as your registration (JPG, JPEG, or PNG).</small>
                                            <img id="proof-of-address-preview" class="img-fluid rounded mt-2 d-none" style="max-height: 220px;" alt="Proof of address preview">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div id="kyc-feedback" class="alert d-none mt-3" role="status" aria-live="polite"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js') }}"></script>
    <script>
        jQuery(function ($) {
            const form = document.getElementById('kyc-form');
            const feedback = document.getElementById('kyc-feedback');
            const allowedExtensions = ['jpg', 'jpeg', 'png'];
            const previewUrls = new Map();

            $('#kyc-form').accWizard({
                mode: 'wizard',
                autoButtonsNextClass: 'btn btn-primary float-right',
                autoButtonsPrevClass: 'btn btn-light',
                autoButtonsSubmitText: 'Review Documents',
                beforeNextStep: function (nextStep) {
                    const currentStep = form.querySelectorAll('[data-acc-step]')[nextStep - 1];
                    const fields = Array.from(currentStep.querySelectorAll('[required]'));
                    const invalidField = fields.find(function (field) {
                        return !field.checkValidity();
                    });

                    if (invalidField) {
                        invalidField.reportValidity();
                        return false;
                    }

                    return true;
                },
                onSubmit: function () {
                    const lastStep = form.querySelectorAll('[data-acc-step]')[1];
                    const fields = Array.from(lastStep.querySelectorAll('[required]'));
                    const invalidField = fields.find(function (field) {
                        return !field.checkValidity();
                    });

                    if (invalidField) {
                        invalidField.reportValidity();
                        return false;
                    }

                    feedback.className = 'alert alert-info mt-3';
                    feedback.textContent = 'All required files are selected. This demo does not upload or save documents.';

                    return false;
                }
            });

            form.querySelectorAll('input[type="file"]').forEach(function (input) {
                input.addEventListener('change', function () {
                    const preview = document.getElementById(input.dataset.preview);
                    const file = input.files[0];

                    if (previewUrls.has(input.id)) {
                        URL.revokeObjectURL(previewUrls.get(input.id));
                        previewUrls.delete(input.id);
                    }

                    if (!file) {
                        preview.removeAttribute('src');
                        preview.classList.add('d-none');
                        return;
                    }

                    const extension = file.name.split('.').pop().toLowerCase();

                    if (!allowedExtensions.includes(extension)) {
                        input.value = '';
                        preview.removeAttribute('src');
                        preview.classList.add('d-none');
                        feedback.className = 'alert alert-danger mt-3';
                        feedback.textContent = 'Please select a JPG, JPEG, or PNG file.';
                        return;
                    }

                    const previewUrl = URL.createObjectURL(file);
                    previewUrls.set(input.id, previewUrl);
                    preview.src = previewUrl;
                    preview.classList.remove('d-none');
                    feedback.classList.add('d-none');
                });
            });

            window.addEventListener('beforeunload', function () {
                previewUrls.forEach(function (previewUrl) {
                    URL.revokeObjectURL(previewUrl);
                });
            });
        });
    </script>
@endpush
