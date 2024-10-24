
<div class="container mt-5">
    <!-- Card -->
    <div class="card mb-4">
        <!-- Card Header -->
        <div class="card-header">
            <h3 class="mb-0">Signup</h3>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <!-- Form -->
            <form class="row">
                <div class="mb-3 col-12 col-md-6">
                    <label class="form-label" for="fname">First Name</label>
                    <input type="text" id="fname" class="form-control" placeholder="First Name" required>
                </div>
                <div class="mb-3 col-12 col-md-6">
                    <label class="form-label" for="lname">Last Name</label>
                    <input type="text" id="lname" class="form-control" placeholder="Last Name" required>
                </div>
                <div class="mb-3 col-12 col-md-12">
                    <label class="form-label" for="phone">Phone Number (Optional)</label>
                    <input type="text" id="phone" class="form-control" placeholder="Phone" required>
                </div>

                <div class="mb-3 col-12 col-md-12">
                    <label class="form-label" for="address1">Address Line 1</label>
                    <input type="text" id="address1" class="form-control" placeholder="Address" required>
                </div>
                <div class="mb-3 col-12 col-md-12">
                    <label class="form-label" for="address2">Address Line 2
                        (Optional)</label>
                    <input type="text" id="address2" class="form-control" placeholder="Address" required>
                </div>
                <div class="mb-3 col-12 col-md-4">
                    <label class="form-label">State</label>
                    <select class="form-select" data-width="100%">
                        <option value="">Select State</option>
                        <option value="1">Gujarat</option>
                        <option value="2">Rajasthan</option>
                        <option value="3">Maharashtra</option>
                    </select>
                </div>
                <div class="mb-3 col-12 col-md-4">
                    <label class="form-label">Country</label>
                    <select class="form-select" data-width="100%">
                        <option value="">Select Country</option>
                        <option value="">India</option>
                        <option value="UK">UK</option>
                        <option value="USA">USA</option>
                    </select>
                </div>
                <div class="mb-3 col-12 col-md-4">
                    <label class="form-label" for="zipCode">Zip/Postal Code</label>
                    <input type="text" id="zipCode" class="form-control" placeholder="Zip" required>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="shippingAddress">
                        <label class="form-check-label" for="shippingAddress">Shipping
                            address is the same as my billing address</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="saveCard" checked>
                        <label class="form-check-label" for="saveCard">Save this
                            information for next time</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>