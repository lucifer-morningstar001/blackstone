@extends('admin.layouts.app')

@section('content')
    @php
        $users = [
            [
                'id' => 27,
                'name' => 'Bamei',
                'email' => 'bamei@protonmail.com',
                'phone' => '8039996788',
                'referral_id' => 'pao123',
                'rank' => 'No Rank',
                'country' => 'Singapore',
                'registered_at' => 'July 24, 2026',
            ],
        ];
    @endphp

    <div class="admin-users-page mt-5">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
           
            <span class="badge badge-primary px-3 py-2">22 Total Users</span>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                <h3 class="card-title mb-2 mb-md-0">User Directory</h3>
                <div class="users-search">
                    <label class="sr-only" for="users-search">Search users</label>
                    <input id="users-search" type="search" class="form-control" placeholder="Search users...">
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="all-users-table" class="table table-hover table-vcenter table-bordered mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Referral ID</th>
                                <th scope="col">Rank</th>
                                <th scope="col">Country</th>
                                <th scope="col">Register Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr data-user-id="{{ $user['id'] }}">
                                    <td class="user-name">{{ $user['name'] }}</td>
                                    <td><a href="mailto:{{ $user['email'] }}" class="user-email">{{ $user['email'] }}</a></td>
                                    <td class="user-phone">{{ $user['phone'] }}</td>
                                    <td class="user-referral">{{ $user['referral_id'] }}</td>
                                    <td><span class="badge badge-secondary user-rank">{{ $user['rank'] }}</span></td>
                                    <td class="user-country">{{ $user['country'] }}</td>
                                    <td class="user-registered-at">{{ $user['registered_at'] }}</td>
                                    <td>
                                        <div class="d-flex flex-wrap">
                                          
                                            <button
                                                type="button"
                                                class="btn btn-sm btn-primary mb-1 edit-user-button"
                                                data-toggle="modal"
                                                data-target="#edit-user-modal"
                                            >
                                                Edit User
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div id="users-empty-state" class="text-center text-muted py-4" hidden>No users match your search.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-user-modal" tabindex="-1" role="dialog" aria-labelledby="edit-user-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="edit-user-form">
                    <div class="modal-header">
                        <h5 class="modal-title" id="edit-user-title">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="edit-user-name">Name</label>
                            <input id="edit-user-name" name="name" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-user-email">Email</label>
                            <input id="edit-user-email" name="email" type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-user-phone">Phone</label>
                            <input id="edit-user-phone" name="phone" type="tel" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-user-referral">Referral ID</label>
                            <input id="edit-user-referral" name="referral_id" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-user-rank">Rank</label>
                            <input id="edit-user-rank" name="rank" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-user-country">Country</label>
                            <input id="edit-user-country" name="country" type="text" class="form-control" required>
                        </div>
                        <div class="form-group mb-0">
                            <label for="edit-user-registered-at">Register Date</label>
                            <input id="edit-user-registered-at" name="registered_at" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .users-search {
            width: 100%;
            max-width: 300px;
        }

        #all-users-table th,
        #all-users-table td {
            vertical-align: middle;
            white-space: nowrap;
        }

        @media (max-width: 575.98px) {
            .users-search {
                max-width: none;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        (function () {
            var usersTable = document.getElementById('all-users-table');
            var searchInput = document.getElementById('users-search');
            var emptyState = document.getElementById('users-empty-state');
            var editForm = document.getElementById('edit-user-form');
            var activeUserRow = null;

            searchInput.addEventListener('input', function () {
                var query = searchInput.value.trim().toLowerCase();
                var visibleRows = 0;

                usersTable.querySelectorAll('tbody tr').forEach(function (row) {
                    var matches = row.textContent.toLowerCase().includes(query);

                    row.hidden = !matches;
                    visibleRows += matches ? 1 : 0;
                });

                emptyState.hidden = visibleRows > 0;
            });

            usersTable.querySelectorAll('.edit-user-button').forEach(function (button) {
                button.addEventListener('click', function () {
                    activeUserRow = button.closest('tr');

                    editForm.elements.name.value = activeUserRow.querySelector('.user-name').textContent.trim();
                    editForm.elements.email.value = activeUserRow.querySelector('.user-email').textContent.trim();
                    editForm.elements.phone.value = activeUserRow.querySelector('.user-phone').textContent.trim();
                    editForm.elements.referral_id.value = activeUserRow.querySelector('.user-referral').textContent.trim();
                    editForm.elements.rank.value = activeUserRow.querySelector('.user-rank').textContent.trim();
                    editForm.elements.country.value = activeUserRow.querySelector('.user-country').textContent.trim();
                    editForm.elements.registered_at.value = activeUserRow.querySelector('.user-registered-at').textContent.trim();
                });
            });

            editForm.addEventListener('submit', function (event) {
                event.preventDefault();

                if (!activeUserRow || !editForm.reportValidity()) {
                    return;
                }

                activeUserRow.querySelector('.user-name').textContent = editForm.elements.name.value.trim();
                activeUserRow.querySelector('.user-email').textContent = editForm.elements.email.value.trim();
                activeUserRow.querySelector('.user-email').href = 'mailto:' + editForm.elements.email.value.trim();
                activeUserRow.querySelector('.user-phone').textContent = editForm.elements.phone.value.trim();
                activeUserRow.querySelector('.user-referral').textContent = editForm.elements.referral_id.value.trim();
                activeUserRow.querySelector('.user-rank').textContent = editForm.elements.rank.value.trim();
                activeUserRow.querySelector('.user-country').textContent = editForm.elements.country.value.trim();
                activeUserRow.querySelector('.user-registered-at').textContent = editForm.elements.registered_at.value.trim();

                window.jQuery('#edit-user-modal').modal('hide');
                searchInput.dispatchEvent(new Event('input'));
            });
        })();
    </script>
@endpush