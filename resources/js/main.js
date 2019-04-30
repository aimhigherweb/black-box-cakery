// var mobileMenu = function() {
//     if(document.getElementsByClassName('nav-main active').length < 1) {
//         document.getElementById('nav-main').classList.add('active');
//     }
//     else {
//         document.getElementById('nav-main').classList.remove('active');
//     };
// };

// window.onscroll = function() {
//         if(document.body.scrollTop > 20) {
//             document.getElementById('root').classList.add('scrolled');
//         }
//         else {
//             document.getElementById('root').classList.remove('scrolled');
//         };
//     };

window.onload = function() {
    document.querySelectorAll('form.cart .radio-group.flavour input[type="radio"]').forEach(function(flavour) {
        flavour.addEventListener('change', function(e) {
            let thisFlavour = e.target.value;

            console.log(thisFlavour)

            if(document.querySelectorAll('.product .woocommerce-product-details__short-description .description.flavour div.visible').length > 0) {
                document.querySelectorAll('.product .woocommerce-product-details__short-description .description.flavour div.visible').forEach(desc => {
                    desc.classList.remove('visible');
                })
            }

            document.querySelectorAll('.product .woocommerce-product-details__short-description .description.flavour div').forEach(desc => {
                if(desc.dataset.flavour == thisFlavour) {
                    desc.classList.add('visible')
                }
            })

            //Is a bit clunky, might remove it
            if(document.querySelector('.product .woocommerce-product-gallery .woocommerce-product-gallery__image .flavour-preview')) {
                document.querySelectorAll('.product .woocommerce-product-gallery .woocommerce-product-gallery__image .flavour-preview').forEach(img => {
					img.remove()
				})
            }
            document.querySelectorAll('.product .woocommerce-product-gallery .woocommerce-product-gallery__image').forEach(img => {

                if(img.querySelector('img[data-caption]').dataset.caption == thisFlavour) {
                    let newImage = document.createElement('img')
                    newImage.src = img.querySelector('img').src.replace('-100x100.jpg', '.jpg')
                    newImage.classList.add('flavour-preview')
                    document.querySelector('.product .woocommerce-product-gallery .woocommerce-product-gallery__image').prepend(newImage)
                }
            })
        })
    })
}