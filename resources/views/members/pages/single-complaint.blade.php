@extends('members.layouts.app')

@php
    // Frontend preview values. Backend can pass these variables when ticket data is available.
    $ticketNumber = $ticketNumber ?? 'KT0cMA85Xd_2';
    $ticketStartDate = $ticketStartDate ?? 'September 06, 2025';
    $ticketStatus = $ticketStatus ?? 'Resolved';
    $ticketMessages = $ticketMessages ?? [
        [
            'sender_name' => 'You',
            'body' => 'testfff',
            'time' => '15:36',
            'is_staff' => false,
        ],
        [
            'sender_name' => 'Support Team',
            'body' => 'Thank you for contacting support. We have reviewed your ticket and marked it as resolved.',
            'time' => '15:42',
            'is_staff' => true,
        ],
    ];
@endphp

@push('styles')
    <style>
        .ticket-page {
            max-width: 1100px;
            margin: 0 auto;
        }

        .ticket-detail {
            min-width: 0;
            overflow: hidden;
        }

        .ticket-meta-card {
            height: 100%;
            border: 1px solid #edf0f5;
            border-radius: 0.5rem;
        }

        .ticket-meta-label {
            color: #7b8190;
            font-size: 0.7rem;
            font-weight: 600;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .ticket-meta-value {
            color: #343a40;
            font-weight: 600;
            overflow-wrap: anywhere;
        }

        .ticket-chat {
            display: flex;
            flex-direction: column;
            height: min(56vh, 480px);
            min-height: 280px;
            overflow-y: auto;
            padding: 1.25rem;
            background: #f7f8fc;
            border: 1px solid #edf0f5;
            border-radius: 0.5rem;
        }

        .ticket-date-divider {
            align-self: center;
            margin: 0 auto 1.25rem;
            padding: 0.3rem 0.75rem;
            color: #778091;
            background: #fff;
            border: 1px solid #edf0f5;
            border-radius: 2rem;
            font-size: 0.75rem;
        }

        .ticket-message-row {
            display: flex;
            align-items: flex-end;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .ticket-message-row.is-mine {
            justify-content: flex-end;
        }

        .ticket-avatar {
            width: 32px;
            height: 32px;
            flex: 0 0 32px;
            object-fit: cover;
            border: 2px solid #fff;
            border-radius: 50%;
            box-shadow: 0 1px 4px rgba(40, 50, 70, 0.12);
        }

        .ticket-message {
            max-width: min(75%, 620px);
            padding: 0.7rem 0.9rem;
            overflow-wrap: anywhere;
            background: #fff;
            border: 1px solid #e8eaf0;
            border-radius: 0.85rem 0.85rem 0.85rem 0.2rem;
            box-shadow: 0 2px 8px rgba(40, 50, 70, 0.04);
        }

        .ticket-message-row.is-mine .ticket-message {
            color: #fff;
            background: #6259ca;
            border-color: #6259ca;
            border-radius: 0.85rem 0.85rem 0.2rem 0.85rem;
        }

        .ticket-message-sender {
            display: block;
            margin-bottom: 0.25rem;
            font-size: 0.73rem;
            font-weight: 600;
        }

        .ticket-message-time {
            display: block;
            margin-top: 0.4rem;
            color: #89909d;
            font-size: 0.68rem;
            text-align: right;
        }

        .ticket-message-row.is-mine .ticket-message-time {
            color: rgba(255, 255, 255, 0.75);
        }

        .ticket-composer textarea {
            min-height: 46px;
            resize: vertical;
        }

        @media (max-width: 575.98px) {
            .ticket-chat {
                height: 50vh;
                min-height: 240px;
                padding: 0.875rem;
            }

            .ticket-avatar {
                width: 28px;
                height: 28px;
                flex-basis: 28px;
            }

            .ticket-message {
                max-width: 88%;
            }
        }
    </style>
@endpush

@section('content')
    <div class="row mt-4 mt-md-5">
        <div class="col-12 ticket-page">
           

            <div class="card ticket-detail border-0 shadow-sm">
                <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                    <div class="mb-2 mb-sm-0">
                        <h3 class="card-title mb-1">
                            <i class="fa fa-comments-o text-primary mr-2" aria-hidden="true"></i>
                            Chat
                        </h3>
                        <span class="text-muted small">Ticket #{{ $ticketNumber }}</span>
                    </div>
                    <span id="ticket-status-badge" class="badge px-3 py-2 {{ in_array(strtolower($ticketStatus), ['closed', 'resolved'], true) ? 'badge-success' : 'badge-warning' }}">
                        {{ $ticketStatus }}
                    </span>
                </div>

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-12 col-sm-4 mb-2">
                            <div class="ticket-meta-card p-3">
                                <div class="ticket-meta-label mb-1">Ticket Number</div>
                                <div class="ticket-meta-value">{{ $ticketNumber }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 mb-2">
                            <div class="ticket-meta-card p-3">
                                <div class="ticket-meta-label mb-1">Start Date</div>
                                <div class="ticket-meta-value">{{ $ticketStartDate }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 mb-2">
                            <div class="ticket-meta-card p-3">
                                <div class="ticket-meta-label mb-1">Status</div>
                                <div id="ticket-status-value" class="ticket-meta-value">{{ $ticketStatus }}</div>
                            </div>
                        </div>
                    </div>

                    {{-- Frontend-only controls to preview open/closed ticket states; replace with backend status later. --}}
                    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                        <small class="text-muted mb-2 mb-sm-0">Status preview</small>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Preview ticket status">
                            <button type="button" class="btn {{ in_array(strtolower($ticketStatus), ['closed', 'resolved'], true) ? 'btn-outline-primary' : 'btn-primary' }}" data-ticket-preview-status="Open" aria-pressed="{{ in_array(strtolower($ticketStatus), ['closed', 'resolved'], true) ? 'false' : 'true' }}">
                                <i class="fa fa-comment-o mr-1" aria-hidden="true"></i> Open
                            </button>
                            <button type="button" class="btn {{ in_array(strtolower($ticketStatus), ['closed', 'resolved'], true) ? 'btn-success' : 'btn-outline-success' }}" data-ticket-preview-status="Closed" aria-pressed="{{ in_array(strtolower($ticketStatus), ['closed', 'resolved'], true) ? 'true' : 'false' }}">
                                <i class="fa fa-check mr-1" aria-hidden="true"></i> Closed
                            </button>
                        </div>
                    </div>

                    <div class="ticket-chat mb-3" aria-label="Ticket messages">
                        <span class="ticket-date-divider">{{ $ticketStartDate }}</span>

                        @forelse ($ticketMessages as $message)
                            <div class="ticket-message-row {{ !empty($message['is_staff']) ? '' : 'is-mine' }}">
                                @if (!empty($message['is_staff']))
                                    <img src="{{ asset('assets/images/users/10.jpg') }}" class="ticket-avatar" alt="Support team">
                                @endif
                                <div class="ticket-message">
                                    <span class="ticket-message-sender">{{ $message['sender_name'] }}</span>
                                    <div>{{ $message['body'] }}</div>
                                    <time class="ticket-message-time">{{ $message['time'] }}</time>
                                </div>
                                @if (empty($message['is_staff']))
                                    <img src="{{ asset('assets/images/users/15.jpg') }}" class="ticket-avatar" alt="You">
                                @endif
                            </div>
                        @empty
                            <div class="m-auto text-center text-muted">
                                <i class="fa fa-comments-o fa-2x mb-2" aria-hidden="true"></i>
                                <p class="mb-0">No messages in this ticket yet.</p>
                            </div>
                        @endforelse
                    </div>

                    <div id="ticket-closed-notice" class="alert alert-light border mb-0" role="status" @if (!in_array(strtolower($ticketStatus), ['closed', 'resolved'], true)) hidden @endif>
                        <i class="fa fa-info-circle text-muted mr-2" aria-hidden="true"></i>
                        This ticket is closed. Please open a new ticket if you need more help.
                    </div>

                    {{-- Backend developer: connect this form to the reply POST route and add CSRF protection. --}}
                    <form id="ticket-reply-form" class="ticket-composer" aria-label="Reply to support ticket" @if (in_array(strtolower($ticketStatus), ['closed', 'resolved'], true)) hidden @endif>
                        <div class="input-group">
                            <textarea class="form-control" name="message" placeholder="Write a reply..." aria-label="Write a reply"></textarea>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button" disabled title="Connect the reply endpoint to enable sending">
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    <span class="d-none d-sm-inline ml-1">Send</span>
                                </button>
                            </div>
                        </div>
                        <small class="form-text text-muted">Reply sending is a frontend preview and is not connected yet.</small>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        jQuery(function ($) {
            // Demo switch sirf status UI badalta hai; actual ticket status backend control karega.
            $('[data-ticket-preview-status]').on('click', function () {
                const isClosed = $(this).data('ticket-preview-status') === 'Closed';
                const status = isClosed ? 'Closed' : 'Open';
                const statusBadge = $('#ticket-status-badge');
                const openButton = $('[data-ticket-preview-status="Open"]');
                const closedButton = $('[data-ticket-preview-status="Closed"]');

                statusBadge
                    .text(status)
                    .toggleClass('badge-success', isClosed)
                    .toggleClass('badge-warning', !isClosed);
                $('#ticket-status-value').text(status);

                openButton
                    .toggleClass('btn-primary', !isClosed)
                    .toggleClass('btn-outline-primary', isClosed)
                    .attr('aria-pressed', String(!isClosed));
                closedButton
                    .toggleClass('btn-success', isClosed)
                    .toggleClass('btn-outline-success', !isClosed)
                    .attr('aria-pressed', String(isClosed));

                $('#ticket-reply-form').prop('hidden', isClosed);
                $('#ticket-closed-notice').prop('hidden', !isClosed);
            });
        });
    </script>
@endpush
