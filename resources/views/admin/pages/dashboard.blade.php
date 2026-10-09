@extends('admin.layouts.app')

@section('content')
    @php
        $incomeChartLabels = $incomeChartLabels ?? [];
        $incomeChartDatasets = $incomeChartDatasets ?? [];
    @endphp

    <div class="admin-dashboard mt-5">
        
        <div class="row">
            @foreach ([
                ['label' => 'Total Active Members', 'value' => '4', 'icon' => 'fe-users', 'color' => 'primary'],
                ['label' => 'Total Unpaid Members', 'value' => '18', 'icon' => 'fe-user-x', 'color' => 'warning'],
                ['label' => 'Total Users', 'value' => '22', 'icon' => 'fe-user-check', 'color' => 'success'],
                ['label' => 'Total Sold Packages', 'value' => '6', 'icon' => 'fe-package', 'color' => 'info'],
            ] as $stat)
                <div class="col-xl-3 col-md-6 mb-4 ">
                    <div class="card dashboard-stat-card h-100 mb-0">
                        <div class="card-body d-flex align-items-center">
                            <div class="dashboard-stat-icon bg-{{ $stat['color'] }}-transparent text-{{ $stat['color'] }}">
                                <i class="fe {{ $stat['icon'] }}"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-muted mb-1">{{ $stat['label'] }}</p>
                                <h3 class="mb-0">{{ $stat['value'] }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-xl-7 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="card-title mb-0">New Member Joins</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="sr-only" for="member-search">Search member joins</label>
                            <input id="member-search" type="search" class="form-control dashboard-table-search" placeholder="Search username, email or joining date" data-table="#member-joins-table">
                        </div>
                        <div class="table-responsive">
                            <table id="member-joins-table" class="table table-hover table-vcenter mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Joining</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="dashboard-empty-row">
                                        <td colspan="3" class="text-center text-muted py-4">No member join records available.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Income Reports Chart</h3>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="dashboard-chart-container flex-grow-1">
                            <canvas id="income-reports-chart" aria-label="Income reports chart" role="img" hidden></canvas>
                            <div id="income-chart-empty" class="dashboard-chart-empty">
                                <span class="fe fe-bar-chart-2" aria-hidden="true"></span>
                                <p class="mb-0 mt-2">Income data will appear here once available.</p>
                            </div>
                        </div>
                        <p class="small text-muted mb-0 mt-2">Monthly income totals can be shown for each income type.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h3 class="card-title mb-0">All Records</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ([
                        ['label' => 'Total Joining Users', 'value' => '22'],
                        ['label' => 'Today Joining Users', 'value' => '0'],
                        ['label' => 'Total Direct Income', 'value' => '$0'],
                        ['label' => 'Today Direct Income', 'value' => '$0'],
                        ['label' => 'Total Level Income', 'value' => '$0'],
                        ['label' => 'Today Level Income', 'value' => '$0'],
                        ['label' => 'Total Packages Sold', 'value' => '$600'],
                        ['label' => 'Today Packages Sold', 'value' => '$0'],
                        ['label' => 'Total Ewallet Balance Pending', 'value' => '$50'],
                    ] as $record)
                        <div class="col-xl-4 col-md-6 mb-3">
                            <div class="dashboard-record h-100">
                                <span class="text-muted">{{ $record['label'] }}</span>
                                <strong>{{ $record['value'] }}</strong>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Latest Sold Packages</h3>
                    </div>
                    <div class="card-body">
                        <div class="dashboard-activity">
                            <span class="dashboard-activity-icon bg-primary-transparent text-primary"><i class="fe fe-package"></i></span>
                            <div>
                                <p class="mb-1">Latest package sale</p>
                                <span class="small text-muted">April 08, 2026</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Income Updates</h3>
                    </div>
                    <div class="card-body">
                        <div class="dashboard-activity">
                            <span class="dashboard-activity-icon bg-success-transparent text-success"><i class="fe fe-award"></i></span>
                            <div>
                                <p class="mb-1"><strong>Rank Bonus</strong></p>
                                <span><strong>vanhorn</strong> user received <strong>$25</strong> amount.</span>
                                <div class="small text-muted mt-1">July 16, 2026</div>
                            </div>
                        </div>
                        <div class="dashboard-activity mt-4">
                            <span class="dashboard-activity-icon bg-success-transparent text-success"><i class="fe fe-award"></i></span>
                            <div>
                                <p class="mb-1"><strong>Rank Bonus</strong></p>
                                <span><strong>test</strong> user received <strong>$25</strong> amount.</span>
                                <div class="small text-muted mt-1">April 27, 2026</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h3 class="card-title mb-0">Recent Withdrawal Requests</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="sr-only" for="withdrawal-search">Search withdrawal requests</label>
                    <input id="withdrawal-search" type="search" class="form-control dashboard-table-search" placeholder="Search username, amount, status or date" data-table="#withdrawal-requests-table">
                </div>
                <div class="table-responsive">
                    <table id="withdrawal-requests-table" class="table table-hover table-vcenter mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Username</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="dashboard-empty-row">
                                <td colspan="4" class="text-center text-muted py-4">No data available in table</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .dashboard-stat-card {
            border: 0;
            box-shadow: 0 3px 16px rgba(0, 0, 0, .05);
        }

        .dashboard-stat-icon,
        .dashboard-activity-icon {
            display: inline-flex;
            flex: 0 0 auto;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            font-size: 20px;
        }

        .dashboard-record {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 16px;
            border: 1px solid #eaedf1;
            border-radius: 4px;
        }

        .dashboard-record strong {
            color: #1f2940;
            white-space: nowrap;
        }

        .dashboard-chart-container {
            min-height: 220px;
            position: relative;
        }

        .dashboard-chart-container canvas {
            width: 100%;
            height: 220px;
        }

        .dashboard-chart-empty {
            min-height: 220px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #8492a6;
            text-align: center;
        }

        .dashboard-chart-empty .fe {
            font-size: 30px;
        }

        .dashboard-activity {
            display: flex;
            align-items: flex-start;
            gap: 14px;
        }

        .dashboard-activity-icon {
            width: 40px;
            height: 40px;
            font-size: 16px;
        }
    </style>
@endpush

@push('scripts')
    <script>
        var incomeChartLabels = {{ Js::from($incomeChartLabels) }};
        var incomeChartDatasets = {{ Js::from($incomeChartDatasets) }};
        var incomeChartColors = ['#0774f8', '#1fc874', '#f5334f', '#f5a623'];
        var validIncomeDatasets = Array.isArray(incomeChartDatasets)
            ? incomeChartDatasets.filter(function (dataset) {
                return dataset
                    && Array.isArray(dataset.data)
                    && dataset.data.length === incomeChartLabels.length
                    && dataset.data.every(function (value) {
                        return value !== null && value !== '' && Number.isFinite(Number(value));
                    });
            })
            : [];

        if (Array.isArray(incomeChartLabels) && incomeChartLabels.length > 0 && validIncomeDatasets.length > 0) {
            var incomeChartElement = document.getElementById('income-reports-chart');

            incomeChartElement.hidden = false;
            document.getElementById('income-chart-empty').hidden = true;

            new Chart(incomeChartElement.getContext('2d'), {
                type: 'line',
                data: {
                    labels: incomeChartLabels,
                    datasets: validIncomeDatasets.map(function (dataset, index) {
                        var color = incomeChartColors[index % incomeChartColors.length];

                        return {
                            label: dataset.label || 'Income ' + (index + 1),
                            data: dataset.data,
                            borderColor: color,
                            backgroundColor: 'transparent',
                            pointBackgroundColor: '#fff',
                            pointBorderColor: color,
                            pointHoverBackgroundColor: color,
                            pointHoverBorderColor: color,
                            borderWidth: 3,
                            pointRadius: 3,
                            fill: false,
                            lineTension: 0.25,
                        };
                    }),
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        display: true,
                        position: 'bottom',
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: false,
                            },
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                            },
                        }],
                    },
                },
            });
        }

        document.querySelectorAll('.dashboard-table-search').forEach(function (searchInput) {
            searchInput.addEventListener('input', function () {
                var table = document.querySelector(searchInput.dataset.table);
                var query = searchInput.value.trim().toLowerCase();

                table.querySelectorAll('tbody tr:not(.dashboard-empty-row)').forEach(function (row) {
                    row.hidden = !row.textContent.toLowerCase().includes(query);
                });
            });
        });
    </script>
@endpush