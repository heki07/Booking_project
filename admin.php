<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbershop Booking Form</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <h2>Barbershop Booking Form</h2>
        <div class="form-container">
        <form action="submit_booking.php" method="post">
        <label for="fullname">Full Name:</label><br>
        <input type="text" id="fullname" name="fullname" required><br><br>

        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone Number:</label><br>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="service">Service Type:</label><br>
        <select id="service" name="service" required>
            <option value="">Select Service Type</option>
            <option value="Haircut">Haircut</option>
            <option value="Shave">Shave</option>
            <option value="Beard Trim">Beard Trim</option>
            <!-- Add more options if needed -->
        </select><br><br>

        <label for="date">Date:</label><br>
        <input type="date" id="date" name="date" required><br><br>

        <label for="time">Time:</label><br>
                <select id="time" name="time" required>
                    <option value="">Select Time Slot</option>
                    <option value="8:00 AM - 9:30 AM">8:00 AM - 9:30 AM</option>
                    <option value="10:00 AM - 11:30 AM">10:00 AM - 11:30 AM</option>
                    <option value="12:00 PM - 1:30 PM">12:00 PM - 1:30 PM</option>
                    <option value="2:00 PM - 3:30 PM">2:00 PM - 3:30 PM</option>
                    <option value="4:00 PM - 5:30 PM">4:00 PM - 5:30 PM</option>
                </select><br><br>

                <label>Preferred Stylist:</label><br>
                <input type="checkbox" id="stylist1" name="stylist" value="John Doe">
                <label for="stylist1">John Doe</label><br>
                <input type="checkbox" id="stylist2" name="stylist" value="Jane Smith">
                <label for="stylist2">Jane Smith</label><br>
                <input type="checkbox" id="stylist3" name="stylist" value="Michael Johnson">
                <label for="stylist3">Michael Johnson</label><br><br>

        <label for="comments">Comments:</label><br>
        <textarea id="comments" name="comments" rows="4" cols="50"></textarea><br><br>

        <input type="checkbox" id="agreement" name="agreement" required>
        <label for="agreement">I agree to the terms and conditions</label><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>