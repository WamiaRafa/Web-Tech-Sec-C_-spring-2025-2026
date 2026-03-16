const unitPrice=1000;
 const quantityInput=document.getElementById("quantity");
 const totalPriceInput=document.getElementById("totalPrice");

 function calculation(){
    let quantity= parseInt(quantityInput.value)||0;
    if(quantity<0){
        alert("Quantity cannot be negative.Resetting to 0.");
        quantity=0;
        quantityInput.value=0;
    }

    let total=unitPrice*quantity*30;
    totalPriceInput.value=total;
 }