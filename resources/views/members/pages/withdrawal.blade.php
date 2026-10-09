@extends('members.layouts.app')

@section('content')
    <div class="row mt-4 mt-md-5">
        <div class="col-12">
           
        </div>

        <div class="col-lg-4">
            <div class="card bg-primary img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="text-white">
                            <p class="text-white-50 mb-1">Available Balance</p>
                            <h2 class="mb-1 number-font">$1,250.00</h2>
                            {{-- <small class="text-white">Demo balance — replace with backend value</small> --}}
                        </div>
                        <div class="ml-auto">
                            <i class="fe fe-credit-card text-white fs-30 mr-2" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="mb-3">
                        <i class="fa fa-info-circle text-primary mr-2" aria-hidden="true"></i>
                        Before You Continue
                    </h5>
                    <ul class="text-muted pl-3 mb-0">
                        <li class="mb-2">Check your payout details before submitting.</li>
                        <li class="mb-2">Processing times and fees will be shown here when configured.</li>
                        {{-- <li>This page is a frontend preview; no withdrawal will be submitted.</li> --}}
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    <h3 class="card-title mb-0">Withdrawal Details</h3>
                </div>
                <div class="card-body">
                    {{-- Backend developer: connect these fields to the withdrawal request endpoint and server-side validation. --}}
                    <form id="withdrawal-preview-form">
                        <div class="form-group">
                            <label for="withdrawal-amount">Withdrawal Amount</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input
                                    id="withdrawal-amount"
                                    name="amount"
                                    type="number"
                                    class="form-control"
                                    min="0.01"
                                    step="0.01"
                                    placeholder="Enter amount"
                                    required
                                >
                            </div>
                            <small class="form-text text-muted">Enter the amount you would like to withdraw.</small>
                        </div>

                        <div class="form-group">
                            <label for="withdrawal-method">Payout Method</label>
                            <select id="withdrawal-method" name="method" class="form-control" required>
                                <option value="">Choose a payout method</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                                <option value="E-Wallet">E-Wallet</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="withdrawal-account">Account or Wallet Details</label>
                            <input
                                id="withdrawal-account"
                                name="account"
                                type="text"
                                class="form-control"
                                placeholder="Enter account number or wallet ID"
                                autocomplete="off"
                                required
                            >
                            <small class="form-text text-muted">Use the payout details registered to your account.</small>
                        </div>

                        <div class="form-group">
                            <label for="withdrawal-note">Note <span class="text-muted">(Optional)</span></label>
                            <textarea
                                id="withdrawal-note"
                                name="note"
                                class="form-control"
                                rows="3"
                                placeholder="Add a note for your records"
                            ></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-eye mr-1" aria-hidden="true"></i>
                            Preview Withdrawal
                        </button>
                    </form>

                    <div id="withdrawal-preview" class="alert alert-info mt-4 mb-0" role="status" hidden>
                        <h5 class="alert-heading">Withdrawal Preview</h5>
                        <p class="mb-1">Amount: <strong id="preview-amount"></strong></p>
                        <p class="mb-1">Payout Method: <strong id="preview-method"></strong></p>
                        <p class="mb-0">Account or Wallet: <strong id="preview-account"></strong></p>
                        <hr>
                        <small>This is only a preview. No request has been submitted or saved.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        jQuery(function ($) {
            // Preview form values in the browser only; this handler does not send a request to the server.
            $('#withdrawal-preview-form').on('submit', function (event) {
                event.preventDefault();

                if (!this.reportValidity()) {
                    return;
                }

                const amount = Number($('#withdrawal-amount').val());

                $('#preview-amount').text('$' + amount.toFixed(2));
                $('#preview-method').text($('#withdrawal-method').val());
                $('#preview-account').text($('#withdrawal-account').val());
                $('#withdrawal-preview').prop('hidden', false);
            });
        });
    </script>
@endpush
