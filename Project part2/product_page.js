var product

//function to change the price according to quantity
function PriceCalculation() {
    var price = product.price;

    var quantity = document.getElementById("quantity").value;

    var total = (price * quantity).toFixed(2);
    var total= "$ " + total
    document.getElementById("price").innerHTML = total;
}

window.addEventListener('load', () => {
    if (window.location.hash.indexOf('#name=') !== -1) {
        var name = decodeURIComponent(window.location.hash.replace('#name=', ''))
        product = products.find((product => product.name === name))
    }
    
    document.title=product.name;
    document.getElementById('product-title').innerText = product.name
    document.getElementById('price').innerText = '$' + product.price
    document.getElementById('description').innerText = product.description
    var ratingStars = document.querySelectorAll('.star > .fa-star')
    for (var i = 1; i <= product.rating; i++) {
        ratingStars[i - 1].className += ' checked'
    }
    
    document.getElementById('product-image').src = product.img
})
