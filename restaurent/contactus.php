<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4;">

    <!-- Contact Form Container -->
    <div style="max-width: 600px; margin: 50px auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <h2 style="text-align: center; color: #333; margin-bottom: 20px;">Contact Us</h2>
        <p style="text-align: center; color: #666; margin-bottom: 30px;">We’d love to hear from you! Fill out the form below to get in touch.</p>
        
        <!-- Contact Form -->
        <form>
            <!-- Name Field -->
            <div style="margin-bottom: 20px;">
                <label for="name" style="display: block; margin-bottom: 8px; font-weight: bold;">Your Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" 
                       style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
            </div>

            <!-- Email Field -->
            <div style="margin-bottom: 20px;">
                <label for="email" style="display: block; margin-bottom: 8px; font-weight: bold;">Your Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" 
                       style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
            </div>

            <!-- Subject Field -->
            <div style="margin-bottom: 20px;">
                <label for="subject" style="display: block; margin-bottom: 8px; font-weight: bold;">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Enter the subject" 
                       style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
            </div>

            <!-- Message Field -->
            <div style="margin-bottom: 20px;">
                <label for="message" style="display: block; margin-bottom: 8px; font-weight: bold;">Your Message</label>
                <textarea id="message" name="message" placeholder="Write your message here..." 
                          style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; height: 150px;"></textarea>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" 
                        style="width: 100%; background-color: #28a745; color: white; border: none; padding: 10px; border-radius: 5px; font-size: 16px; cursor: pointer;">
                    Send Message
                </button>
            </div>
        </form>

        <!-- Contact Details -->
        <div style="margin-top: 30px; text-align: center;">
            <h3 style="color: #333; margin-bottom: 10px;">Contact Information</h3>
            <p style="color: #666; margin-bottom: 5px;">Email: support@example.com</p>
            <p style="color: #666; margin-bottom: 5px;">Phone: +1 123 456 7890</p>
            <p style="color: #666;">Address: 123 Main Street, Cityville, Country</p>
        </div>
    </div>

</body>
</html>
