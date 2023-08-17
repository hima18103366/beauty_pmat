
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

<form action="{{route('store.dform')}}" method="POST">
  @csrf
    <label for="name">Customer Name:</label>
    <input class="form-control" type="text" id="name" name="name" required><br>
    <br>
    
  
    <label for="date">Date:</label>
    <input class="form-control" type="date" id="date" name="date" required>

    <br>
    
    
    <label for="time">Time:</label>
    <select class="form-control" id="time" name="time" required>
    <option value="">Select a time</option>
    <option value="08:00 AM">08:00 AM</option>
    <option value="09:00 AM">08:30 AM</option>
      <option value="09:00 AM">09:00 AM</option>
      <option value="10:00 AM">09:30 AM</option>
      <option value="11:00 AM">10:00 AM</option>
      <option value="12:00 AM">10:30 AM</option>
      <option value="01:00 PM">11:00 AM</option>
      <option value="02:00 PM">11:30 AM</option>
      <option value="03:00 PM">12:00 AM</option>
      <option value="04:00 PM">12:30 PM</option>

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


