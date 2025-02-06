<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reserve a Table</title>
</head>
<body>
  <!-- Reserve a Table Container -->
  <div style="max-width: 600px; margin: 0 auto; padding: 20px; font-family: Arial, sans-serif; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <!-- Page Title -->
    <h1 style="text-align: center; color: #8B0000; margin-bottom: 20px;">Reserve a Table</h1>

    <!-- Reservation Form -->
    <form>
      <!-- Name Field -->
      <div style="margin-bottom: 15px;">
        <label for="name" style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
      </div>

      <!-- Email Field -->
      <div style="margin-bottom: 15px;">
        <label for="email" style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
      </div>

      <!-- Phone Field -->
      <div style="margin-bottom: 15px;">
        <label for="phone" style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
      </div>

      <!-- Date Field -->
      <div style="margin-bottom: 15px;">
        <label for="date" style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Date</label>
        <input type="date" id="date" name="date" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
      </div>

      <!-- Time Field -->
      <div style="margin-bottom: 15px;">
        <label for="time" style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Time</label>
        <input type="time" id="time" name="time" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
      </div>

      <!-- Guests Field -->
      <div style="margin-bottom: 20px;">
        <label for="guests" style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Number of Guests</label>
        <select id="guests" name="guests" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
          <option value="1">1 Guest</option>
          <option value="2">2 Guests</option>
          <option value="3">3 Guests</option>
          <option value="4">4 Guests</option>
          <option value="5">5 Guests</option>
          <option value="6">6 Guests</option>
          <option value="7">7 Guests</option>
          <option value="8">8 Guests</option>
          <option value="9">9 Guests</option>
          <option value="10">10 Guests</option>
        </select>
      </div>

      <!-- Submit Button -->
      <button type="submit" style="width: 100%; background-color: #8B0000; color: white; border: none; padding: 15px; border-radius: 5px; font-size: 16px; cursor: pointer;">Reserve Now</button>
    </form>
  </div>
</body>
</html>