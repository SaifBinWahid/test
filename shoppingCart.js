let productsInCart = [];
const parentElement = document.querySelector("#buyItems");
const cartSumPrice = document.querySelector("#sum-prices");
const products = document.querySelectorAll(".product-under");

function updateProductsInCart(product){
    for(let i = 0; i< productsInCart.length; i++){
        if(productsInCart[i].id == product.id){
            productsInCart[i].count += 1;
            productsInCart[i].price += productsInCart[i].basePrice * productsInCart[i].count;
            return;

        }
    }
}



products.forEach(product => {
    product.addEventListener('click', (e) =>{
        if(e.target.classlist.contains('addToCart')){
            const productID = e.target.dataset.products;
            const productName = product.querySelector('.productName').innerHTML;
            const productPrice = product.querySelector('.productValue').innerHTML;
            const productImage = product.querySelector('.img').src;
            
            let productToCart = {
                name : productName,
                image : productImage,
                id : productID,
                count : 1,
                price : +productPrice,
                basePrice : +productPrice
            }
            updateProductsInCart(productToCart);
            updateShoppingCartHTML();
        }
    })
})


