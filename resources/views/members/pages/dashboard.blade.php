@extends('members.layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}">
    <style>
        .dashboard-table-card,
        .dashboard-table-card .card-body,
        .dashboard-table-wrapper,
        .dashboard-table-wrapper .dataTables_wrapper {
            min-width: 0;
            max-width: 100%;
        }

        .dashboard-table-wrapper .dataTables_scroll {
            overflow: hidden;
        }

        .dashboard-table-wrapper .dataTables_scrollBody {
            height: 260px !important;
            max-height: 260px !important;
            overflow: auto !important;
        }

        .dashboard-chart {
            width: 100%;
            min-height: 280px;
        }

        @media (max-width: 575.98px) {
            .dashboard-chart {
                min-height: 240px;
            }
        }
    </style>
@endpush

@section('content')

@php
    // Yahan income ka sample data bharein; graph isi data se apne aap banega.
    $incomeReports = $incomeReports ?? [
        ['username' => 'Demo01', 'reason' => 'Direct Referral Bonus', 'amount' => 50, 'date' => '2026-10-07'],
        ['username' => 'Demo02', 'reason' => 'Package Commission', 'amount' => 30, 'date' => '2026-10-06'],
        ['username' => 'Demo03', 'reason' => 'Level Bonus', 'amount' => 70, 'date' => '2026-10-05'],
        ['username' => 'Demo04', 'reason' => 'Direct Referral Bonus', 'amount' => 50, 'date' => '2026-10-04'],
        ['username' => 'Demo05', 'reason' => 'Package Commission', 'amount' => 30, 'date' => '2026-10-03'],
        ['username' => 'Demo06', 'reason' => 'Level Bonus', 'amount' => 70, 'date' => '2026-10-02'],
        ['username' => 'Demo07', 'reason' => 'Direct Referral Bonus', 'amount' => 50, 'date' => '2026-10-01'],
        ['username' => 'Demo08', 'reason' => 'Package Commission', 'amount' => 30, 'date' => '2026-09-30'],
        ['username' => 'Demo09', 'reason' => 'Level Bonus', 'amount' => 70, 'date' => '2026-09-29'],
        ['username' => 'Demo10', 'reason' => 'Direct Referral Bonus', 'amount' => 50, 'date' => '2026-09-28'],
    ];

    // Backend se ['recentUsers' => $recentUsers, 'incomeReports' => $incomeReports] pass karein.
    // recentUsers fields: username, package, amount, date. incomeReports fields: username, reason, amount, date.
    // Backend data na mile to neeche ka sample data sirf frontend preview ke liye dikhega.
    $recentUsers = $recentUsers ?? [
        ['username' => 'Demo01', 'package' => 'ValureMix5', 'amount' => 500, 'date' => '2026-10-07'],
        ['username' => 'Demo02', 'package' => 'ValureMix3', 'amount' => 300, 'date' => '2026-10-06'],
        ['username' => 'Demo03', 'package' => 'ValureMix7', 'amount' => 700, 'date' => '2026-10-06'],
        ['username' => 'Demo04', 'package' => 'ValureMix5', 'amount' => 500, 'date' => '2026-10-05'],
        ['username' => 'Demo05', 'package' => 'ValureMix3', 'amount' => 300, 'date' => '2026-10-04'],
        ['username' => 'Demo06', 'package' => 'ValureMix7', 'amount' => 700, 'date' => '2026-10-04'],
        ['username' => 'Demo07', 'package' => 'ValureMix5', 'amount' => 500, 'date' => '2026-10-03'],
        ['username' => 'Demo08', 'package' => 'ValureMix3', 'amount' => 300, 'date' => '2026-10-02'],
        ['username' => 'Demo09', 'package' => 'ValureMix7', 'amount' => 700, 'date' => '2026-10-02'],
        ['username' => 'Demo10', 'package' => 'ValureMix5', 'amount' => 500, 'date' => '2026-10-01'],
    ];

    // Dono charts ke liye wahi backend records simple arrays mein bheje ja rahe hain.
    $registrationChartData = collect($recentUsers)->map(function ($user) {
        return [
            'username' => data_get($user, 'username', data_get($user, 'name', '')),
            'date' => data_get($user, 'date', ''),
        ];
    })->values();

    $incomeChartData = collect($incomeReports)->map(function ($income) {
        return [
            'username' => data_get($income, 'username', data_get($income, 'name', '')),
            'reason' => data_get($income, 'reason', ''),
            'amount' => is_numeric(data_get($income, 'amount')) ? (float) data_get($income, 'amount') : null,
            'date' => data_get($income, 'date', ''),
        ];
    })->values();
@endphp

    <div class="row mt-5">
        <div class="col-md-6 col-sm-12">
            <div class="card bg-primary img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="text-white">
                            <h2 class="mb-1 number-font">ValureMix5</h2>
                            <p class="text-white mb-0">Current Package</p>
                        </div>
                        <div class="ml-auto">
                            <i class="fa fa-cube text-white fs-30 mr-2" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card bg-success img-card box-success-shadow">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="text-white">
                            <h2 class="mb-1 number-font">$100</h2>
                            <p class="text-white mb-0">E-Wallet Balance</p>
                        </div>
                        <div class="ml-auto">
                            <i class="fe fe-credit-card text-white fs-30 mr-2" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 d-flex flex-wrap align-items-center">
                    <div class="avatar avatar-lg bg-primary-transparent text-primary brround d-flex align-items-center justify-content-center mr-4 mb-3 mb-md-0">
                        <i class="fa fa-link fs-20" aria-hidden="true"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h3 class="mb-1">Grow Your Network</h3>
                        <p class="text-muted mb-0">Share your personal referral link and invite new members to join.</p>
                    </div>
                    <a href="{{ route('generate_referral') }}" class="btn btn-primary mt-3 mt-md-0">
                        <i class="fa fa-share-alt mr-1" aria-hidden="true"></i>
                        View &amp; Copy Referral Link
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm dashboard-table-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="card-title mb-1">Recent IBO Registered</h3>
                        <small class="text-muted">Backend data: username, package, amount, date</small>
                    </div>
                    <span class="avatar avatar-sm bg-primary-transparent text-primary brround d-flex align-items-center justify-content-center">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="dashboard-table-wrapper">
                        <table id="dashboard-recent-users" class="table table-hover table-vcenter table-bordered mb-0 w-100">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Sr No.</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Package</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentUsers as $index => $user)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ data_get($user, 'username', data_get($user, 'name', '')) }}</td>
                                        <td>{{ data_get($user, 'package', '') }}</td>
                                        <td>${{ is_numeric(data_get($user, 'amount')) ? number_format((float) data_get($user, 'amount'), 2) : data_get($user, 'amount', '') }}</td>
                                        <td data-order="{{ data_get($user, 'date', '') }}">{{ data_get($user, 'date', '') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm dashboard-table-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="card-title mb-1">Income Report Records</h3>
                        <small class="text-muted">Backend data: username, reason, amount, date</small>
                    </div>
                    <a href="{{ route('all_income_report') }}" class="btn btn-sm btn-outline-primary">
                        View All <i class="fa fa-arrow-right ml-1" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="card-body">
                    <div class="dashboard-table-wrapper">
                        <table id="dashboard-recent-income" class="table table-hover table-vcenter table-bordered mb-0 w-100">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Sr No.</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Reason</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($incomeReports as $index => $income)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ data_get($income, 'username', data_get($income, 'name', '')) }}</td>
                                        <td>{{ data_get($income, 'reason', '') }}</td>
                                        <td>${{ is_numeric(data_get($income, 'amount')) ? number_format((float) data_get($income, 'amount'), 2) : data_get($income, 'amount', '') }}</td>
                                        <td data-order="{{ data_get($income, 'date', '') }}">{{ data_get($income, 'date', '') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h3 class="card-title mb-1">Income Report Graph</h3>
                        <small class="text-muted">Income amount by date</small>
                    </div>
                    <a href="{{ route('all_income_report') }}" class="btn btn-sm btn-outline-primary mt-2 mt-md-0">
                        <i class="fa fa-file-text-o mr-1" aria-hidden="true"></i>
                        Full Report
                    </a>
                </div>
                <div class="card-body">
                    <div>
                        <div id="dashboard-income-report-chart" class="dashboard-chart" aria-label="Income amount by transaction date" role="img"></div>
                        <div id="dashboard-income-chart-empty" class="text-center text-muted py-5" hidden>
                            Income chart data will appear here when report records are available.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    <div>
                        <h3 class="card-title mb-1">Recent Registration Graph</h3>
                        <small class="text-muted">New registrations by date</small>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <div id="dashboard-registration-chart" class="dashboard-chart" aria-label="New registrations by date" role="img"></div>
                        <div id="dashboard-registration-chart-empty" class="text-center text-muted py-5" hidden>
                            Registration chart data will appear here when user records are available.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@push('scripts')
    <script src="{{ asset('assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        jQuery(function ($) {
            // Controller se recentUsers aur incomeReports pass karein; yehi arrays table aur chart dono chalate hain.
            const recentUsers = @json($registrationChartData);
            const incomeReports = @json($incomeChartData);

            // Dono tables ki scrolling unke apne card ke andar rahegi.
            $('#dashboard-recent-users').DataTable({
                paging: false,
                scrollY: '260px',
                scrollCollapse: false,
                scrollX: true,
                autoWidth: false,
                deferRender: true,
                order: [[4, 'desc']],
                language: {
                    search: 'Filter:',
                    emptyTable: 'No registrations found.',
                    zeroRecords: 'No matching users found.'
                }
            });

            // Income table ko bhi fixed-height internal scroll diya hai.
            $('#dashboard-recent-income').DataTable({
                paging: false,
                scrollY: '260px',
                scrollCollapse: false,
                scrollX: true,
                autoWidth: false,
                deferRender: true,
                order: [[4, 'desc']],
                language: {
                    search: 'Filter:',
                    emptyTable: 'No recent income records to display.',
                    zeroRecords: 'No matching income records found.'
                }
            });

            if (typeof ApexCharts === 'undefined') {
                $('#dashboard-registration-chart').hide();
                $('#dashboard-registration-chart-empty')
                    .text('Registration chart library could not be loaded.')
                    .prop('hidden', false);
                $('#dashboard-income-report-chart').hide();
                $('#dashboard-income-chart-empty')
                    .text('Income chart library could not be loaded.')
                    .prop('hidden', false);
                return;
            }

            // Registration records ko date ke hisaab se count karke line chart mein dikhate hain.
            const registrationsByDate = {};
            recentUsers.forEach(function (user) {
                const date = user.date;
                if (user.username && date) {
                    registrationsByDate[date] = (registrationsByDate[date] || 0) + 1;
                }
            });

            const registrationDates = Object.keys(registrationsByDate).sort(function (first, second) {
                return new Date(first).getTime() - new Date(second).getTime();
            });

            if (registrationDates.length > 0) {
                new ApexCharts(document.querySelector('#dashboard-registration-chart'), {
                    chart: {
                        type: 'line',
                        height: 280,
                        parentHeightOffset: 0,
                        toolbar: { show: false },
                        zoom: { enabled: false }
                    },
                    series: [{
                        name: 'New Registrations',
                        data: registrationDates.map(function (date) {
                            return registrationsByDate[date];
                        })
                    }],
                    grid: { borderColor: '#edf0f5', padding: { left: 8, right: 12 } },
                    xaxis: {
                        categories: registrationDates,
                        labels: { show: false },
                        tooltip: { enabled: false }
                    },
                    yaxis: {
                        min: 0,
                        forceNiceScale: true,
                        labels: {
                            formatter: function (value) {
                                return Math.round(value);
                            }
                        }
                    },
                    stroke: { curve: 'smooth', width: 3 },
                    colors: ['#32cafe'],
                    markers: { size: 4, hover: { size: 6 } },
                    dataLabels: { enabled: false },
                    noData: { text: 'No registrations found.' },
                    tooltip: {
                        custom: function ({ dataPointIndex, w }) {
                            const date = w.globals.labels[dataPointIndex];
                            return '<div class="p-2"><strong>' + $('<div>').text(date).html() +
                                '</strong><br>New registrations: ' + registrationsByDate[date] + '</div>';
                        }
                    }
                }).render();
            } else {
                $('#dashboard-registration-chart').hide();
                $('#dashboard-registration-chart-empty').prop('hidden', false);
            }

            const validIncomeReports = incomeReports.filter(function (income) {
                return income.username && income.reason && income.date && Number.isFinite(income.amount);
            }).sort(function (first, second) {
                return new Date(first.date).getTime() - new Date(second.date).getTime();
            });

            if (validIncomeReports.length > 0) {
                new ApexCharts(document.querySelector('#dashboard-income-report-chart'), {
                    chart: {
                        type: 'line',
                        height: 280,
                        parentHeightOffset: 0,
                        toolbar: { show: false },
                        zoom: { enabled: false }
                    },
                    series: [{
                        name: 'Income',
                        data: validIncomeReports.map(function (income) {
                            return income.amount;
                        })
                    }],
                    grid: { borderColor: '#edf0f5', padding: { left: 8, right: 12 } },
                    xaxis: {
                        categories: validIncomeReports.map(function (income) {
                            return income.date;
                        }),
                        labels: { show: false },
                        tooltip: { enabled: false }
                    },
                    yaxis: {
                        min: 0,
                        labels: {
                            formatter: function (value) {
                                return '$' + Number(value).toLocaleString();
                            }
                        }
                    },
                    stroke: { curve: 'smooth', width: 3 },
                    colors: ['#6259ca'],
                    markers: { size: 4, hover: { size: 6 } },
                    dataLabels: { enabled: false },
                    noData: { text: 'No income records found.' },
                    tooltip: {
                        custom: function ({ dataPointIndex }) {
                            const income = validIncomeReports[dataPointIndex];
                            const tooltip = $('<div class="p-2">');
                            $('<strong>').text(income.date).appendTo(tooltip);
                            $('<div>').text('Username: ' + income.username).appendTo(tooltip);
                            $('<div>').text('Reason: ' + income.reason).appendTo(tooltip);
                            $('<div>').text('Amount: $' + Number(income.amount).toLocaleString()).appendTo(tooltip);
                            return tooltip.prop('outerHTML');
                        }
                    }
                }).render();
            } else {
                $('#dashboard-income-report-chart').hide();
                $('#dashboard-income-chart-empty').prop('hidden', false);
            }
        });
    </script>
@endpush
