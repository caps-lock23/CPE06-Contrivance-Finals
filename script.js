function filterProducts() {
    //store search input and products
    const searchBox = document.querySelector('#search-box').value.toLowerCase();
    const products = document.querySelectorAll('#product-list li');

    products.forEach((product) => {
        //query title, price, & description for each product
        const title = product.querySelector('h4').textContent.toLowerCase();
        const price = product.querySelector('p.priceTag').textContent.toLowerCase();
        const description = product.querySelector('p').textContent.toLowerCase();

        if (title.includes(searchBox) || price.includes(searchBox) || description.includes(searchBox)) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none';
        }
    });
}

function addToCart() {
    const title = button.parentNode.querySelector("h4").textContent;
    alert(title + " is added to your cart!");
}

