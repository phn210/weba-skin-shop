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

let totalValue
let totalDiscount
let totalMoney

function render() {
    count++;
    let item_prices = []
    totalValue = 0
    totalDiscount = 0
    totalMoney = 0

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
    document.querySelectorAll('.order_item')[index].innerHTML = ""
    render();
}

function updateQuantity(index, quantity) {
    if (quantity < 1) {
        return
    }
    items[index].quantity = quantity
    render();
}

render();

document.getElementById('order-form').addEventListener('submit', submitOrder)

function submitOrder(e){
    e.preventDefault()
    
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var address = document.getElementById('address').value;
    var note = document.getElementById('note').value;

    const customer = {
        name: name,
        email: email,
        phone: phone,
        address: address,
        note: note
    }

    itemsId = document.getElementsByClassName("item-id")

    orderItems = []

    for(var i = 0; i < items.length; i++) {
        orderItems.push({
            productId: parseInt(itemsId[i].innerHTML),
            amount: items[i].quantity,
            totalMoney: items[i].price * items[i].quantity
        })
    }

    const toSend = {
        customer: customer,
        order_items: orderItems,
        total_value: totalValue,
        discount: totalDiscount,
        total_money: totalMoney
    }

    const jsonString = JSON.stringify(toSend)

    var xhr = new XMLHttpRequest();

    xhr.open('POST', '/weba-skin-shop/carts/createorder', true)
    xhr.setRequestHeader('Content-Type', 'application/json')
    xhr.onload = function() {
        console.log(jsonString)
        console.log(this.responseText)
    }

    xhr.send(jsonString)

}