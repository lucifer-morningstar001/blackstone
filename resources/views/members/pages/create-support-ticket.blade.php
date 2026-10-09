@extends('members.layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-xl-8 mx-auto">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 pb-0">
                    <h3 class="card-title mb-0">Create Support Ticket</h3>
                </div>

                <div class="card-body">
                    <form action="#" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="category" class="form-label">Categories</label>
                            <select id="category" name="category" class="form-control custom-select">
                                <option selected disabled>Choose...</option>
                                <option value="technical">Technical Support</option>
                                <option value="account">Account Support</option>
                                <option value="billing">Billing & Payment</option>
                                <option value="general">General Inquiry</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="subject" class="form-label">Subject</label>
                            <input id="subject" name="subject" type="text" class="form-control" placeholder="Enter subject" />
                        </div>

                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" class="form-control" rows="6" placeholder="Write your message here..."></textarea>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary px-4">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection