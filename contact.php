<?php
$html_title = "Contact Us | Namaste Pavilion Restaurant, Scarborough";
include_once('header.php'); ?>
 <style>
    .contact-form-container {
        max-width: 800px; /* Limit form width for better readability */
        margin: 50px auto; /* Center the container on the page */
        padding: 30px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }
    .contact-form-container h2 {
        margin-bottom: 30px;
        color: #343a40;
        text-align: center;
    }
    .form-label {
        font-weight: 500;
        color: #495057;
    }
    .btn-primary {
        background-color: var(--brand-color-1); /* A purple tone, perhaps matching Namaste theme */
        border-color: var(--brand-color-1);
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }
    .btn-primary:hover {
        background-color: var(--brand-color-5); /* Slightly darker on hover */
        border-color: var(--brand-color-5);
    }
    textarea {
        resize: vertical; /* Allow vertical resizing of the comment box */
    }
</style>
<div class="container container-inner-banner">
<img src="img/inner_banner1.jpg" alt="About Us Banner" class="d-block" style="width:100%">
</div>
<div class="container container-inner-main">

<h1 class="page-h1">Contact Us</h1>
<div class="container contact-form-container">
        <h2>Contact Namaste Pavilion Restaurant</h2>
        <p class="text-center mb-4">We'd love to hear from you! Please fill out the form below and we'll get back to you as soon as possible.</p>

        <form action="#" method="POST"> <div class="row mb-3">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="first_name" required>
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="last_name" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-md-6">
                    <label for="tel" class="form-label">Telephone Number (Optional)</label>
                    <input type="tel" class="form-control" id="tel" name="telephone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}|[0-9]{10}" placeholder="e.g., 123-456-7890 or 1234567890">
                    <small class="form-text text-muted">Format: 123-456-7890 or 1234567890</small>
                </div>
            </div>

            <div class="mb-4">
                <label for="comment" class="form-label">Your Comment or Message</label>
                <textarea class="form-control" id="comment" name="comment" rows="6" required></textarea>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
            </div>
        </form>
    </div>
</div>
<?php include_once('footer.php'); ?>