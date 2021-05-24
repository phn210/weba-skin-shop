let types = document.getElementsByClassName('type')

let brands = document.getElementsByClassName('brands')
for (let i = 0; i < brands.length; i++) {
    brands[i].style.display = `none`
}

let productLines = document.getElementsByClassName('product_lines')
for (let i = 0; i < productLines.length; i++) {
    productLines[i].style.display = `none`
}

for (let i = 0; i < types.length; i++) {
    types[i].addEventListener('mouseover', function() {
        let children = types[i].getElementsByClassName('brands')
        for (let j = 0; j < children.length; j++) {
            children[j].style.display = `block`
        }
    })

    types[i].addEventListener('mouseout', function() {
        let children = types[i].getElementsByClassName('brands')
        for (let j = 0; j < children.length; j++) {
            children[j].style.display = `none`
        }
    })
}

for (let i = 0; i < brands.length; i++) {
    brands[i].addEventListener('mouseover', function() {
        let children = brands[i].querySelectorAll('.product_lines')
        for (let j = 0; j < children.length; j++) {
            children[j].style.display = `block`
        }
    })

    brands[i].addEventListener('mouseout', function() {
        let children = brands[i].querySelectorAll('.product_lines')
        for (let j = 0; j < children.length; j++) {
            children[j].style.display = `none`
        }
    })
}