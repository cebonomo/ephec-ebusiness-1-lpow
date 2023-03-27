window.addEventListener("DOMContentLoaded", (event) => {
    let galleryList = document.querySelectorAll('.gallery');
    for (const gallery of galleryList) {
        gallery.addEventListener('mouseenter', () => {
            if (gallery.children.length > 1) {
                gallery.children[0].style.display = 'none';
                gallery.children[1].style.display = 'inline-block';
            }
        })
        gallery.addEventListener('mouseleave', () => {
            if (gallery.children.length > 1) {
                gallery.children[0].style.display = 'inline-block';
                gallery.children[1].style.display = 'none';
            }
        })
    }
});