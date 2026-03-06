/* add loop and other code here ... in this simple exercise we are not
   going to concern ourselves with minimizing globals, etc */

var subtotal = 0;
for (var i = 0; i < titles.length; i++) {
    var lineTotal = calculateTotal(quantities[i], prices[i]);
    subtotal += lineTotal;
    outputCartRow(filenames[i], titles[i], quantities[i], prices[i], lineTotal);
}

var tax = subtotal * 0.10;
var shipping = (subtotal > 1000) ? 0 : 40;
var grandTotal = subtotal + tax + shipping;