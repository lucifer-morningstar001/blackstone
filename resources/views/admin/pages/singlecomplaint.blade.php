@extends('admin.layouts.app')

@section('content')

<div class="row g-4">

    <!-- ========================================= -->
    <!-- LEFT: TICKET CONVERSATION -->
    <!-- ========================================= -->
    <div class="col-lg-8">

        <div class="ticket-card">

            <!-- Ticket Header -->
            <div class="ticket-header">

                <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">

                    <div>
                        <div class="ticket-label">
                            Username
                        </div>

                        <a href="#" class="ticket-username">
                            test
                        </a>
                    </div>

                    <div>
                        <div class="ticket-label">
                            Subject
                        </div>

                        <div class="ticket-subject">
                            testqte
                        </div>
                    </div>

                </div>

            </div>


            <!-- Conversation -->
            <div class="ticket-conversation">

                <!-- ================================= -->
                <!-- USER / CUSTOMER MESSAGE -->
                <!-- ================================= -->
                <div class="ticket-message ticket-message--user">

                    <div class="ticket-message__meta">

                        <div class="ticket-message__author">
                            <span class="ticket-avatar ticket-avatar--user">
                                T
                            </span>

                            <span>test</span>
                        </div>

                        <span class="ticket-message__time">
                            10:30 AM
                        </span>

                    </div>

                    <div class="ticket-message__body">
                        test
                    </div>

                </div>


                <!-- ================================= -->
                <!-- ADMIN / SUPPORT MESSAGE -->
                <!-- ================================= -->
                <div class="ticket-message ticket-message--admin">

                    <div class="ticket-message__meta">

                        <div class="ticket-message__author">
                            <span class="ticket-avatar ticket-avatar--admin">
                                A
                            </span>

                            <span>Admin</span>
                        </div>

                        <span class="ticket-message__time">
                            10:35 AM
                        </span>

                    </div>

                    <div class="ticket-message__body">
                        Hi
                    </div>

                </div>


                <!-- ================================= -->
                <!-- USER / CUSTOMER MESSAGE -->
                <!-- ================================= -->
                <div class="ticket-message ticket-message--user">

                    <div class="ticket-message__meta">

                        <div class="ticket-message__author">
                            <span class="ticket-avatar ticket-avatar--user">
                                T
                            </span>

                            <span>test</span>
                        </div>

                        <span class="ticket-message__time">
                            10:40 AM
                        </span>

                    </div>

                    <div class="ticket-message__body">
                        I need some help regarding my account.
                    </div>

                </div>


                <!-- ================================= -->
                <!-- REPLY FORM -->
                <!-- ================================= -->
                <div class="ticket-reply">

                    <div class="ticket-reply__title">
                        Reply to ticket
                    </div>

                    <div class="row g-3 align-items-end">

                        <div class="col-md-9">

                            <div class="form__group mb-0">

                                <textarea
                                    class="form__input ticket-reply__input"
                                    name="message"
                                    rows="5"
                                    placeholder="Type your message..."></textarea>

                            </div>

                        </div>

                        <div class="col-md-3">

                            <button
                                type="submit"
                                class="btn btn-primary ticket-send-btn w-100">

                                Send Message

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- ========================================= -->
    <!-- RIGHT: TICKET DETAILS -->
    <!-- ========================================= -->
    <div class="col-lg-4">

        <div class="ticket-details">

            <!-- Ticket Number -->
            <div class="ticket-detail-item">

                <div class="ticket-detail-label">
                    Ticket Number
                </div>

                <div class="ticket-detail-value">
                    rmHOwc18dq_2
                </div>

            </div>


            <!-- Start Date -->
            <div class="ticket-detail-item">

                <div class="ticket-detail-label">
                    Start Date
                </div>

                <div class="ticket-detail-value">
                    April 07, 2026
                </div>

            </div>


            <!-- Status -->
            <div class="ticket-detail-item">

                <div class="ticket-detail-label">
                    Status
                </div>

                <div class="ticket-status-text">
                    <span class="status-dot"></span>
                    Not Resolved
                </div>

                <div class="row g-2 mt-2">

                    <div class="col">

                        <select class="form__input ticket-status-select">

                            <option selected>
                                Not resolved
                            </option>

                            <option>
                                In Progress
                            </option>

                            <option>
                                Resolved
                            </option>

                        </select>

                    </div>

                    <div class="col-auto">

                        <button
                            type="button"
                            class="btn btn-primary ticket-go-btn">

                            Go

                        </button>

                    </div>

                </div>

            </div>


            <!-- Review Status -->
            <div class="ticket-review-box">

                <div class="ticket-review-icon">
                    ✓
                </div>

                <div>
                    <div class="ticket-review-title">
                        Ticket Review
                    </div>

                    <div class="ticket-review-text">
                        This ticket is currently unreviewed.
                    </div>
                </div>

            </div>


            <!-- Unreview Button -->
            <button
                type="button"
                class="btn btn-success ticket-unreview-btn w-100">

                Mark as Reviewed

            </button>

        </div>

    </div>

</div>


<style>

/* ========================================= */
/* MAIN TICKET CARD */
/* ========================================= */

.ticket-card {
    background: #ffffff;
    border-radius: 12px;
    border: 1px solid #e8e8ef;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.04);
    overflow: hidden;
}


/* ========================================= */
/* TICKET HEADER */
/* ========================================= */

.ticket-header {
    padding: 22px 25px;
    background: #fafaff;
    border-bottom: 1px solid #eeeeF4;
}

.ticket-label {
    font-size: 13px;
    color: #8585a3;
    margin-bottom: 4px;
}

.ticket-username {
    color: #572c7c;
    text-decoration: none;
    font-size: 15px;
    font-weight: 600;
}

.ticket-username:hover {
    text-decoration: underline;
}

.ticket-subject {
    color: #29293d;
    font-size: 15px;
    font-weight: 600;
}


/* ========================================= */
/* CONVERSATION */
/* ========================================= */

.ticket-conversation {
    padding: 28px;
}


/* ========================================= */
/* MESSAGE */
/* ========================================= */

.ticket-message {
    margin-bottom: 25px;
    max-width: 80%;
}

.ticket-message__meta {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 7px;
}

.ticket-message__author {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
   
    color: #333348;
}

.ticket-message__time {
    font-size: 11px;
    color: #9999aa;
}


/* ========================================= */
/* AVATAR */
/* ========================================= */

.ticket-avatar {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: 700;
}


/* User avatar */

.ticket-avatar--user {
    background: #eeeaff;
    color: #572c7c;
}


/* Admin avatar */

.ticket-avatar--admin {
    background: #e5f8ee;
    color: #198754;
}


/* ========================================= */
/* MESSAGE BODY */
/* ========================================= */

.ticket-message__body {
    padding: 13px 17px;
    border-radius: 8px;
    font-size: 14px;
    line-height: 1.6;
}


/* User message */

.ticket-message--user {
    margin-right: auto;
}

.ticket-message--user .ticket-message__body {
    background: #f1f0ff;
    border: 1px solid #dfddff;
    color: #4f4b70;
}


/* Admin message */

.ticket-message--admin {
    margin-left: auto;
}

.ticket-message--admin .ticket-message__meta {
    flex-direction: row-reverse;
}

.ticket-message--admin .ticket-message__author {
    flex-direction: row-reverse;
}

.ticket-message--admin .ticket-message__body {
    background: #eefaf3;
    border: 1px solid #d8f1e1;
    color: #376348;
}


/* ========================================= */
/* REPLY */
/* ========================================= */

.ticket-reply {
    margin-top: 30px;
    padding-top: 25px;
    border-top: 1px solid #eeeeF4;
}

.ticket-reply__title {
    font-size: 15px;
    /* font-weight: 600; */
    color: #29293d;
    margin-bottom: 12px;
}


/* Your existing input design */

.form__group {
    margin-bottom: 20px;
}

.form__input {
    width: 100%;
    padding: 14px 20px;
    border: 1px solid #ddd;
    outline: none;
    background: #fff;
    border-radius: 6px;
    transition: 0.2s;
}

.form__input:focus {
    border-color: #572c7c;
    box-shadow: 0 0 0 3px rgba(99, 91, 255, 0.08);
}

.ticket-reply__input {
    resize: vertical;
    min-height: 130px;
}


/* ========================================= */
/* BUTTON */
/* ========================================= */

.ticket-send-btn {
    background: #572c7c;
    border-color: #572c7c;
    padding: 13px 20px;
    border-radius: 6px;
}

.ticket-send-btn:hover {
    background: #554de5;
    border-color: #554de5;
}


/* ========================================= */
/* RIGHT SIDE */
/* ========================================= */

.ticket-details {
    background: #ffffff;
    border: 1px solid #e8e8ef;
    border-radius: 12px;
    padding: 24px;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.04);
}

.ticket-detail-item {
    padding-bottom: 20px;
    margin-bottom: 20px;
    border-bottom: 1px solid #eeeeF4;
}

.ticket-detail-label {
    color: #572c7c;
    font-size: 13px;
    /* font-weight: 600; */
    margin-bottom: 5px;
}

.ticket-detail-value {
    color: #303044;
    font-size: 15px;
    font-weight: 500;
}


/* ========================================= */
/* STATUS */
/* ========================================= */

.ticket-status-text {
    color: #555568;
    font-size: 14px;
    display: flex;
    align-items: center;
    gap: 7px;
}

.status-dot {
    width: 8px;
    height: 8px;
    background: #f0ad4e;
    border-radius: 50%;
}

.ticket-status-select {
    padding: 11px 14px;
}

.ticket-go-btn {
    height: 100%;
    padding: 0 20px;
    background: #572c7c;
    border-color: #572c7c;
}


/* ========================================= */
/* REVIEW BOX */
/* ========================================= */

.ticket-review-box {
    display: flex;
    align-items: center;
    gap: 12px;
    background: #f5f7ff;
    border: 1px solid #e4e7ff;
    border-radius: 8px;
    padding: 14px;
    margin-bottom: 15px;
}

.ticket-review-icon {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    background: #572c7c;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
}

.ticket-review-title {
    color: #333348;
    font-size: 13px;
    font-weight: 600;
}

.ticket-review-text {
    color: #89899d;
    font-size: 11px;
    margin-top: 2px;
}


/* ========================================= */
/* REVIEW BUTTON */
/* ========================================= */

.ticket-unreview-btn {
    padding: 13px;
    border-radius: 6px;
    font-weight: 500;
}


/* ========================================= */
/* RESPONSIVE */
/* ========================================= */

@media (max-width: 767px) {

    .ticket-conversation {
        padding: 18px;
    }

    .ticket-message {
        max-width: 95%;
    }

    .ticket-header {
        padding: 18px;
    }

    .ticket-details {
        padding: 18px;
    }

}

</style>

@endsection