
<html>


<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input.form-control {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      cursor: pointer;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>

<body>

<form action="{{route('store.form')}}" method="POST">
  @csrf
    <label for="name">Customer Name:</label>
    <input class="form-control" type="text" id="name" name="name" required><br>
    <br>

    <label for="service">Service:</label>
    <select class="form-control" id="service" name="service" required>
      <option value="">Select a service</option>
    <option value="">Doctor Appointment</option>
      <option value="Haircut">Haircut</option>
      <option value="Manicure">Manicure</option>
      <option value="Pedicure">Pedicure</option>
      <option value="Facial">Facial</option>
    </select><br>
     <br>


    <label for="date">Date:</label>
    <input class="form-control" type="date" id="date" name="date" required>

    <br>


    <label for="time">Time:</label>
    <select class="form-control" id="time" name="time" required>
    <option value="">Select a time</option>
    <option value="08:00">08:00 AM</option>
      <option value="09:00">09:00 AM</option>
      <option value="10:00">10:00 AM</option>
      <option value="11:00">11:00 AM</option>
      <option value="12:00">12:00 AM</option>
      <option value="01:00">01:00 PM</option>
      <option value="02:00">02:00 PM</option>
      <option value="03:00">03:00 PM</option>
      <option value="04:00">04:00 PM</option>
      <option value="05:00">05:00 PM</option>
      <option value="06:00">06:00 PM</option>
      <option value="07:00">07:00 PM</option>
      <option value="08:00">08:00 PM</option>
    </select><br>
    <br>
    <label for="age">age:</label>
    <input class="form-control" type="number" id="age" name="age" required><br>
    <br>

    <label for="phone">Contact Number:</label>
    <input class="form-control" type="tel" id="phone" name="contact" required><br>
    <br>

    <br>
    <input class="btn btn-primary" type="submit" value="Submit">
  </form>

</body>

</html>


