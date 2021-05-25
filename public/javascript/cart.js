items = [
    
]

function render() {
    let item_prices = []
    let i = 0
    let totalValue = 0
    let discount = 0
    let totalMoney = 0

    items.forEach(item => {
        totalValue += item.quantity * item.price
        discount -= item.quantity * item.price * item.discount
        item_prices[i++] = item.quantity * item.price * (1 - item.discount)
    })
    totalMoney = totalValue + discount;

    const html = items.map(item => `
        <li class="order_item">
        <a href=""><img class="item_image" src="../img/test.jpg"></a>
        <div class="item_info">
        <div class="item_name"><a href="">${item.name}</a></div>
        <div class="item_id">Mã: ${item.id}</div>
        <div class="item_price">
            <span id="retail_price">${item.price}</span>
            <span id="discounted">${item.price*(1-item.discount)}</span>
        </div>
        </div>
        <div class="quantity" style="float:right">
        <button class="btn_sub_item">-</button>
        <input class="item_amount" type="number" value="${item.quantity}" readonly/>
        <button class="btn_add_item">+</button>
        </div>
        <button class="btn_del_item">x</button>
        </li>
    `).join('')
    document.querySelectorAll('.order_items')[0].innerHTML = html

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
    document.getElementById('discount').innerText = `${discount.toFixed(0)} VNĐ`
    document.getElementById('total-money').innerText = `${totalMoney.toFixed(0)} VNĐ`
}

function add() {
    items.push()
    console.log(removeButtons.length);
    render();
}

function remove(index) {
    items.splice(index, 1)
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