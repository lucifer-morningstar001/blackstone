@extends('admin.layouts.app')

@section('content') <div class="roi-settings-page mt-5">

    <div class="card">

        <div class="card-header">
            <h3 class="card-title mb-0">ROI Rate Settings</h3>
        </div>

        <div class="card-body">

            <form id="roi-settings-form">

                <div class="row">

                    @for ($day = 1; $day <= 30; $day++)
                        <div class="col-xl-4 col-md-6 mb-4">

                            <div class="form-group mb-0">

                                <label for="roi-day-{{ $day }}">
                                    Day {{ $day }} ROI Percentage
                                </label>

                                <div class="input-group">

                                    <input
                                        id="roi-day-{{ $day }}"
                                        name="roi_day_{{ $day }}"
                                        type="number"
                                        class="form-control roi-day-input"
                                        min="0"
                                        max="100"
                                        step="0.01"
                                        placeholder="Enter ROI for Day {{ $day }}"
                                    >

                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>

                                </div>

                            </div>

                        </div>
                    @endfor

                </div>


                <!-- Preview -->
                <div class="roi-summary mt-3 mb-4">

                    <div>
                        <span class="text-muted d-block">
                            Total ROI
                        </span>

                        <strong id="total-roi">
                            0.00%
                        </strong>
                    </div>

                    <div>
                        <span class="text-muted d-block">
                            Configured Days
                        </span>

                        <strong id="configured-days">
                            0 / 30
                        </strong>
                    </div>

                </div>


                <button type="submit" class="btn btn-primary">
                    <i class="fe fe-save mr-1"></i>
                    Save ROI Settings
                </button>

            </form>

        </div>

    </div>


    <div class="alert alert-info mt-4 mb-0">
        <i class="fe fe-info mr-1"></i>

        You can configure a different ROI percentage for each day,
        from <strong>Day 1</strong> to <strong>Day 30</strong>.
    </div>

</div>

@endsection

@push('styles')

<style>

    .roi-settings-page .card {
        border: 0;
        box-shadow: 0 3px 16px rgba(0, 0, 0, .05);
    }

    .roi-summary {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 18px 20px;
        border: 1px solid #eaedf1;
        border-radius: 4px;
        background: #f9fafb;
    }

    .roi-summary strong {
        display: block;
        color: #1f2940;
        font-size: 20px;
        margin-top: 4px;
    }

</style>

@endpush

@push('scripts')

<script>

    document.getElementById('roi-settings-form').addEventListener('submit', function (event) {

        event.preventDefault();

        var inputs = document.querySelectorAll('.roi-day-input');

        var totalROI = 0;
        var configuredDays = 0;

        inputs.forEach(function (input) {

            if (input.value !== '') {

                totalROI += Number(input.value);
                configuredDays++;

            }

        });

        document.getElementById('total-roi').textContent =
            totalROI.toFixed(2) + '%';

        document.getElementById('configured-days').textContent =
            configuredDays + ' / 30';

    });

</script>

@endpush
