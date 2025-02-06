<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delicious Bites Restaurant</title>

</head>
<body>
  <!-- Header with inline styles -->
  <header style="background-color: #333; color: #fff; padding: 10px 20px; display: flex; justify-content: space-between; align-items: center;">
    <!-- Logo -->
    <div style="font-size: 24px; font-weight: bold;">White Devil</div>

    <!-- Navigation Menu -->
    <nav>
      <ul style="list-style: none; margin: 0; padding: 0; display: flex;">
        <li style="margin-left: 20px;"><a href="home.php" style="color: #fff; text-decoration: none; font-size: 16px;">Home</a></li>
        <li style="margin-left: 20px;"><a href="menu.php" style="color: #fff; text-decoration: none; font-size: 16px;">Menu</a></li>
        <li style="margin-left: 20px;"><a href="about.php" style="color: #fff; text-decoration: none; font-size: 16px;">About Us</a></li>
        <li style="margin-left: 20px;"><a href="cart.php" style="color: #fff; text-decoration: none; font-size: 16px;">Cart</a></li>
        <li style="margin-left: 20px;"><a href="contactus.php" style="color: #fff; text-decoration: none; font-size: 16px;">Contact</a></li>
      </ul>
    </nav>
        <!-- Call-to-Action Button -->
    <a href="reserve.php">    
    <button style="background-color: #ffcc00; color: #333; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">Reserve a Table</button></a>
  </header>
<!-- Slideshow Container -->
<div style="position: relative; width: 100%; max-width: 100%; overflow: hidden;">
  <!-- Images -->
  <img id="slideshow" src="rphoto/bgr2.jpg" alt="Restaurant Image 1" style="width: 100%; height: auto; display: block;">

  <!-- Navigation Buttons -->
  <button onclick="prevImage()" style="position: absolute; top: 50%; left: 10px; transform: translateY(-50%); background: rgba(0, 0, 0, 0.5); color: white; border: none; padding: 10px; cursor: pointer; border-radius: 50%;">&#10094;</button>
  <button onclick="nextImage()" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); background: rgba(0, 0, 0, 0.5); color: white; border: none; padding: 10px; cursor: pointer; border-radius: 50%;">&#10095;</button>
</div>

<!-- JavaScript for Slideshow -->
<script>
  // List of image URLs
  const images = [
    "rphoto/bgr2.jpg",
    "rphoto/bgr3.jpg",
    "rphoto/bgr4.jpg",
    "rphoto/bgr5.jpg",
    "rphoto/bgr2.jpg" 
  ];

  let currentIndex = 0;

  // Function to change the image
  function changeImage() {
    const slideshow = document.getElementById("slideshow");
    slideshow.src = images[currentIndex];
    currentIndex = (currentIndex + 1) % images.length; // Loop back to the first image
  }

  // Function to go to the previous image
  function prevImage() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    changeImage();
  }

  // Function to go to the next image
  function nextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    changeImage();
  }

  // Automatically change image every 3 seconds
  setInterval(changeImage, 3000);
</script>

    <!-- Main Content -->
    <main>
        <!-- Menu Section -->
        <section id="menu" style="background-image: url('rphoto/bgr2.jpg'); ckground-size: cover; background-position: center; padding: 20px; text-align: center;">
            <h2 style="color: #8B0000;">Our Menu</h2>
            <p style="margin-bottom: 20px;">Explore our delicious offerings!</p>
            <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px;">
                <div style="width: 200px; border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                    <h3><a href="traditional.php" style="color: #333; margin: 0 15px; text-decoration: none;">TRADITIONAL</a></h3>
                </div>
                <div style="width: 200px; border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                    
                    <h3><a href="japanees.php" style="color: #333; margin: 0 15px; text-decoration: none;">JAPANESE</a></h3>
                </div>
                <div style="width: 200px; border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                    
                    <h3><a href="italiyan.php" style="color: #333; margin: 0 15px; text-decoration: none;">ITAIAN</a></h3>
                </div>
                     <div style="width: 200px; border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                    <h3><a href="thailand.php" style="color: #333; margin: 0 15px; text-decoration: none;">THAILAND</a></h3>
                </div>
                    <div style="width: 200px; border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                    <h3><a href="indian.php" style="color: #333; margin: 0 15px; text-decoration: none;">INDIAN</a></h3>
                </div>
                    <div style="width: 200px; border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                    <h3><a href="chainese.php" style="color: #333; margin: 0 15px; text-decoration: none;">CHINEESE</a></h3>

                </div>
            </div>
        </section>

         <!-- Cart Section -->
    <section id="cart" style="background-color: #f4f4f4; padding: 20px; text-align: center;">
        <h2 style="color: #8B0000;">Your Cart</h2>
        <div id="cart-items" style="margin: 20px 0;"></div>
        <p><strong>Total: $<span id="total-price">0</span></strong></p>
    </section>

    <script>
        // JavaScript to manage the cart
        let cart = [];

        function addToCart(itemName, itemPrice) {
            // Add item to the cart array
            cart.push({ name: itemName, price: itemPrice });
            updateCart();
        }

        function updateCart() {
            // Get cart container
            const cartItemsContainer = document.getElementById('cart-items');
            cartItemsContainer.innerHTML = ''; // Clear previous content

            // Calculate total price
            let totalPrice = 0;

            // Render each cart item
            cart.forEach((item, index) => {
                totalPrice += item.price;

                const cartItem = document.createElement('div');
                cartItem.style = "border-bottom: 1px solid #ddd; padding: 10px; text-align: left;";

                cartItem.innerHTML = `
                    ${item.name} - $${item.price}
                    <button onclick="removeFromCart(${index})" 
                            style="margin-left: 10px; color: white; background-color: red; border: none; padding: 5px; cursor: pointer;">
                        Remove
                    </button>
                `;
                cartItemsContainer.appendChild(cartItem);
            });

            // Update total price
            document.getElementById('total-price').textContent = totalPrice;
        }

        function removeFromCart(index) {
            // Remove item from the cart array
            cart.splice(index, 1);
            updateCart();
        }
    </script>



  <!-- About Us Section -->
  <section id="about" style="background-image: url('rphoto/bgr2.jpg'); background-size: cover; background-position: center; padding: 40px; text-align: center; position: relative;">
    <!-- Semi-transparent overlay -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>

    <!-- Content -->
    <div style="position: relative; z-index: 1; color: white;">
      <h2 style="color: #ffcc00; margin-bottom: 20px;">About Us</h2>
      <p style="font-size: 1.2rem; max-width: 800px; margin: 0 auto;">
        At Delicious Bites, we take pride in offering high-quality dishes made with fresh, locally sourced ingredients. Join us for a memorable dining experience!
      </p>
    </div>
  </section>



        <!-- Contact Section -->
        <section id="contact" style="padding: 20px; text-align: center;">
            <h2 style="color: #8B0000;">Contact Us</h2>
            <p>We’d love to hear from you! Reach out to us:</p>
            <p>Email: <a href="mailto:info@deliciousbites.com" style="color: #8B0000;">info@deliciousbites.com</a></p>
            <p>Phone: <a href="tel:+1234567890" style="color: #8B0000;">+1 234 567 890</a></p>
            <p>Address: 123 Food Street, Gourmet City</p>
        </section>
    </main>

    <!-- Footer -->
    <footer style="background-color: #333; color: white; text-align: center; padding: 10px;">
        <p>&copy; 2024 Delicious Bites. All rights reserved.</p>
    </footer>

</body>
</html>
