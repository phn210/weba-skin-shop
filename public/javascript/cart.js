const itemPrices = document.querySelectorAll('.final-price')
const discount = document.querySelectorAll('.discount')
const quantites = document.querySelectorAll('.item_amount')

items = []
let count = 0

for(var i = 0; i < itemPrices.length; i++) {
    items.push({
        price: parseFloat(itemPrices[i].innerHTML),
        discount: parseFloat(discount[i].innerHTML),
        quantity: parseFloat(quantites[i].value)
    })
}

function render() {
    count++;
    let item_prices = []
    let totalValue = 0
    let totalDiscount = 0
    let totalMoney = 0

    for(var j = 0; j < items.length; j++) {
        totalMoney += items[j].quantity * items[j].price
        totalDiscount -= items[j].quantity * items[j].discount
        quantites[j].value = items[j].quantity
    }
    totalValue = totalMoney - totalDiscount;

    const addButtons = document.getElementsByClassName('btn_add_item')
    const subButtons = document.getElementsByClassName('btn_sub_item')
    const removeButtons = document.getElementsByClassName('btn_del_item')

    for (let i = 0; i < removeButtons.length; i++) {
        addButtons[i].addEventListener('click', () => {
            updateQuantity(i, items[i].quantity + 1);
        })

        subButtons[i].addEventListener('click', () => {
            updateQuantity(i, items[i].quantity - 1);
        })

        removeButtons[i].addEventListener('click', () => {
            remove(i);
        })
    }

    document.getElementById('total-value').innerText = `${totalValue.toFixed(0)} VNĐ`
    document.getElementById('discount').innerText = `${totalDiscount.toFixed(0)} VNĐ`
    document.getElementById('total-money').innerText = `${totalMoney.toFixed(0)} VNĐ`
}

function remove(index) {
    items.splice(index, 1)
    render();
}

function addQuantity (index) {
    items[index].quantity++;
    render()
}

function subQuantity (index) {
    if (quantity < 1) {
        return
    }
    items[index].quantity--;
    render()
}



function updateQuantity(index, quantity) {
    if (quantity < 1) {
        return
    }
    items[index].quantity = quantity
    render();
}

render();

