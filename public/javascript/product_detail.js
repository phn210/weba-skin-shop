// Sample Pictures Slider
let thumbnails = document.getElementsByClassName('sample-thumbnail')
let thumbnailContainer = document.getElementsByClassName('thumbnails')[0]
const IMG_WIDTH = 120
thumbnailContainer.style.width = `${thumbnails.length * IMG_WIDTH}px`

thumbnails[0].classList.add('active')

let activeImages = document.getElementsByClassName('active')

document.getElementById('featured').src = activeImages[0].src

for (var i = 0; i < thumbnails.length; i++) {
    thumbnails[i].addEventListener('click', function() {
        if (activeImages.length > 0) {
            activeImages[0].classList.remove('active')
        }

        this.classList.add('active')

        document.getElementById('featured').src = this.src
    })
}

let index = 0

function nextSample() {
    if (index < thumbnails.length - 1) {
        index++;
    } else {
        index = 0;
    }

    thumbnailContainer.style.transform = `translateX(-${IMG_WIDTH*index}px)`
}

function prevSample() {
    if (index == 0) {
        index = thumbnails.length - 1;
    } else {
        index--;
    }

    thumbnailContainer.style.transform = `translateX(-${IMG_WIDTH*index}px)`
}

document.getElementById('sample_prev').addEventListener('click', () => {
    prevSample()
})

document.getElementById('sample_next').addEventListener('click', () => {
    nextSample();
})

// Quantity to Add to cart controll
let $value = 1

function updateQuantity(quantity) {
    if (quantity < 1) {
        return
    }
    $value = quantity
    render();
}

function render() {
    const html = `<input type="number" value="${$value}" readonly/>`
    document.getElementById('quantity-to-add').innerHTML = html
}

render();

document.getElementById('btn_sub').addEventListener('click', () => {
    updateQuantity($value - 1);
})

document.getElementById('btn_add').addEventListener('click', () => {
    updateQuantity($value + 1);
})


// Similar Products Slider
let similarThumbnails = document.getElementsByClassName('similar-thumbnail')
let similarThumbnailContainer = document.getElementsByClassName('thumbnails')[1]

let sIndex = 0;

function nextSimilar() {
    if (sIndex < similarThumbnails.length - 1) {
        sIndex += 3;
    } else {
        sIndex = 0;
    }

    similarThumbnailContainer.style.transform = `translateX(-${IMG_WIDTH*sIndex}px)`
}

function prevSimilar() {
    if (sIndex == 0) {
        sIndex = similarThumbnails.length - 1;
    } else {
        sIndex -= 3;
    }

    similarThumbnailContainer.style.transform = `translateX(-${IMG_WIDTH*sIndex}px)`
}

document.getElementById('similar_prev').addEventListener('click', () => {
    prevSimilar()
})

document.getElementById('similar_next').addEventListener('click', () => {
    nextSimilar();
})

// Product Detail Tabs Control
let tabs = document.getElementsByClassName('tab')
let tabsData = document.getElementsByClassName('tabs_data')
let tabContent = document.getElementsByClassName('tabs_content')[0]

tabsData[0].classList.add('tab-active')

let activeTabs = document.getElementsByClassName('tab-active')

tabContent.innerHTML = activeTabs[0].innerHTML

for (let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', function() {
        if (activeTabs.length > 0) {
            activeTabs[0].classList.remove('tab-active')
        }

        tabsData[0].classList.add('tab-active')

        tabContent.innerHTML = tabsData[i].innerHTML
    })
}