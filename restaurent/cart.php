<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interactive Restaurant Cart</title>
</head>
<body>
  <!-- Cart Container -->
  <div style="width: 300px; border: 1px solid #ddd; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <!-- Cart Title -->
    <h2 style="text-align: center; margin-bottom: 20px; color: #8B0000;">Your Cart</h2>

    <!-- Cart Items -->
    <div id="cart-items" style="margin-bottom: 20px;">
      <!-- Items will be added here dynamically -->
    </div>

    <!-- Total Price -->
    <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
      <span style="font-weight: bold;">Total</span>
      <span id="total-price">$0.00</span>
    </div>

    <!-- Checkout Button -->
    <button style="width: 100%; background-color: #8B0000; color: white; border: none; padding: 10px; border-radius: 5px; cursor: pointer;">Checkout</button>
  </div>

  <!-- Inline JavaScript -->
  <script>
    // Sample cart data
    const cart = [
      { name: "Burger", quantity: 1, price: 10.00 },
      { name: "Pizza", quantity: 2, price: 12.00 },
      { name: "Pasta", quantity: 1, price: 8.00 }
    ];

    // Function to render cart items
    function renderCart() {
      const cartItems = document.getElementById("cart-items");
      const totalPrice = document.getElementById("total-price");
      let total = 0;

      // Clear existing items
      cartItems.innerHTML = "";

      // Render each item
      cart.forEach((item, index) => {
        const itemTotal = item.quantity * item.price;
        total += itemTotal;

        const itemDiv = document.createElement("div");
        itemDiv.style.display = "flex";
        itemDiv.style.justifyContent = "space-between";
        itemDiv.style.marginBottom = "10px";

        itemDiv.innerHTML = `
          <span style="font-weight: bold;">${item.name}</span>
          <span>${item.quantity} x $${item.price.toFixed(2)}</span>
          <button onclick="removeItem(${index})" style="background-color: #ffcc00; color: #333; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">Remove</button>
        `;

        cartItems.appendChild(itemDiv);
      });

      // Update total price
      totalPrice.textContent = `$${total.toFixed(2)}`;
    }

    // Function to remove an item
    function removeItem(index) {
      cart.splice(index, 1);
      renderCart();
    }

    // Render the cart on page load
    renderCart();
  </script>
</body>
</html>