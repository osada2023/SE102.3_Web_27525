<html>
<head>
  <title>Registration Form</title>
  <style>
    label {
      display: block;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <h2>Registration Form</h2>
  <form action="process_form.php" method="post">
    <label for="firstName">First Name:</label>
    <input type="text" name="firstName" required>
    
    <label for="lastName">Last Name:</label>
    <input type="text" name="lastName" required>
    
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    
    <label>Gender:</label>
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female" required> Female
    
    <label>Academic Year:</label>
    <select name="academicYear" required>
      <option value="1st Year">1st Year</option>
      <option value="2nd Year">2nd Year</option>
      <option value="3rd Year">3rd Year</option>
    </select>
    
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    
    <label for="phoneNo">Phone No:</label>
    <input type="text" name="phoneNo" required>
    
    <input type="submit" value="Submit">
  </form>
</body>
</html>