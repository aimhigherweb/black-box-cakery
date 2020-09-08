window.onload = function () {
    document.querySelectorAll('.order-form .gallery img').forEach((img) => {
        img.addEventListener('click', (e) => {
            const image = e.target

            e.target.remove()

            document.querySelector('.order-form .gallery').prepend(image)
        })
    })
}