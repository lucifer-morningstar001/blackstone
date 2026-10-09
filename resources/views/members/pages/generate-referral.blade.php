@extends('members.layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-7 col-md-10 mx-auto">
            <div class="card border-0 shadow-sm">
                <div class="card-header  d-flex justify-content-between align-items-center">
                    <h3 class="card-title mb-0">Referral Link</h3>
                </div>

                <div class="card-body p-4">
                   

                    <div class="form-group mb-0">
                        <label class="text-muted">Referral URL</label>
                        <div class="input-group">
                            <input type="text" class="form-control bg-light" value="https://blackstone.example/ref/BLACKSTONE-REF-2458" readonly>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary copy-referral-btn">
                                    <i class="fa fa-clone mr-1"></i> Copy Link
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="copy-toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="position: fixed; top: 25px; right: 25px; z-index: 9999; min-width: 260px;">
        <div class="toast-header bg-success text-white">
            <strong class="mr-auto">Referral</strong>
            <button type="button" class="ml-2 close text-white" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            Referral code copied successfully.
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toast = document.getElementById('copy-toast');
            const showToast = function () {
                if (window.bootstrap && bootstrap.Toast) {
                    var toastInstance = new bootstrap.Toast(toast, { delay: 2200 });
                    toastInstance.show();
                    return;
                }

                if (window.jQuery && jQuery.fn.toast) {
                    jQuery(toast).toast('show');
                }
            };

            const copyText = function (text) {
                const tempInput = document.createElement('textarea');
                tempInput.value = text;
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand('copy');
                document.body.removeChild(tempInput);
            };

            document.querySelectorAll('.copy-referral-btn').forEach(function (button) {
                button.addEventListener('click', function () {
                    const codeElement = document.getElementById('referral-code');
                    const code = codeElement ? codeElement.textContent.trim() : 'BLACKSTONE-REF-2458';
                    const link = 'https://blackstone.example/ref/' + code;

                    copyText(code + ' | ' + link);
                    showToast();
                });
            });
        });
    </script>


















@endsection