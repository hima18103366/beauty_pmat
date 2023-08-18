<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment Booking Confirmation</title>
  <!-- Add Bootstrap CSS link here -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Appointment Booking Confirmation</h4>
        <p>Dear Customer,</p>
        <p>Your appointment has been successfully booked with us. Here are the details:</p>
        <ul>
          <li><strong>Date:</strong> {{now()}}</li>
          <li><strong>Location:</strong> Uttara, Dhaka</li>
         
          <li><strong>Provider:</strong> Digital Beauty Parlour And Treatment</li>
        </ul>
        <p>If you need to reschedule or cancel the appointment, please log in to your account or contact our support team.</p>
        <p>Thank you for choosing our services. We look forward to serving you!</p>
        <p>Best regards,</p>
        <p>The Digital Beauty Parlour And Treatment Team</p>
      </div>
    </div>
  </div>
</body>
</html>
