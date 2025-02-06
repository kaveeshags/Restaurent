<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Page</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4;">

    <!-- Comment Form Container -->
    <div style="max-width: 600px; margin: 50px auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <h2 style="text-align: center; color: #333; margin-bottom: 20px;">Leave a Comment</h2>
        
        <!-- Comment Form -->
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
                <input type="email" id="email" name="email" placeholder="Enter your email (optional)" 
                       style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
            </div>

            <!-- Comment Field -->
            <div style="margin-bottom: 20px;">
                <label for="comment" style="display: block; margin-bottom: 8px; font-weight: bold;">Your Comment</label>
                <textarea id="comment" name="comment" placeholder="Write your comment here..." 
                          style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; height: 100px;"></textarea>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" 
                        style="width: 100%; background-color: #008CBA; color: white; border: none; padding: 10px; border-radius: 5px; font-size: 16px; cursor: pointer;">
                    Submit Comment
                </button>
            </div>
        </form>

        <!-- Display Comments Section -->
        <div style="margin-top: 30px;">
            <h3 style="color: #333; border-bottom: 1px solid #ddd; padding-bottom: 5px;">Comments</h3>

            <!-- Example Comment -->
            <div style="margin-bottom: 20px; padding: 10px; background: #f9f9f9; border: 1px solid #ddd; border-radius: 5px;">
                <p style="margin: 0;"><strong>John Doe:</strong> This is an example comment. Great post!</p>
                <small style="color: #888;">Posted on: Dec 30, 2024</small>
            </div>

            <div style="margin-bottom: 20px; padding: 10px; background: #f9f9f9; border: 1px solid #ddd; border-radius: 5px;">
                <p style="margin: 0;"><strong>Jane Smith:</strong> I love the content. Keep it up!</p>
                <small style="color: #888;">Posted on: Dec 29, 2024</small>
            </div>
        </div>
    </div>

</body>
</html>
