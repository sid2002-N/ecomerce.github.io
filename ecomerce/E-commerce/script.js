let cartItems = [];
let cartTotal = 0;

function addToCart(productId) {
  // Add the product to the cart
  cartItems.push(productId);
  
  // Update the cart total
  if (productId === 1) {
    cartTotal += 19.99;
 
