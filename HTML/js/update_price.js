function updatePrice(id) {
    var inputElement = document.getElementById(id);
    var amount = inputElement.value;
    var inputElementName = inputElement.name;
    var inputElementSplitString = inputElementName.split("-");
    var productID = inputElementSplitString[1];

    var productPriceElementID = "productPrice-" + productID;
    var productPriceElement = document.getElementById(productPriceElementID);
    var productPriceElementValue = productPriceElement.textContent;
    var productPriceElementSplitString = productPriceElementValue.split(" ");
    var productPrice = productPriceElementSplitString[2];

    var totalPriceProductElementID = "totalPriceProduct-" + productID;
    var totalPriceProductElement = document.getElementById(totalPriceProductElementID);
    var totalPriceProductValue = totalPriceProductElement.textContent;
    var totalPriceProductValueSplitString = totalPriceProductValue.split(" ");
    var totalPriceProduct = eval(totalPriceProductValueSplitString[1]);

    var sumTotalElement = document.getElementById("totalSum");
    var sumTotalElementValue = sumTotalElement.textContent;
    var sumTotalElementValueSplitString = sumTotalElementValue.split(" ");
    var sumTotal = eval(sumTotalElementValueSplitString[1]);

    var newTotalPriceProduct = amount * productPrice;

    sumTotal -= totalPriceProduct;
    sumTotal += newTotalPriceProduct;
    
    totalPriceProductElement.textContent = "€ " + newTotalPriceProduct.toFixed(2);
    sumTotalElement.textContent = "€ " + sumTotal;
}