
document.querySelector('#sort-up').onclick = mySortUp;

document.querySelector('#sort-down').onclick = mySortDown;

document.querySelector('#sort-raiting').onclick = mySortRaiting;

function mySortUp() {
    let items = document.querySelector('.featuder-product');
    for (let i = 0; i < items.children.length - 1; i++) {
        for (let j = i; j < items.children.length; j++) {
            if (+items.children[i].getAttribute('data-price') > +items.children[j].getAttribute('data-price')) {
                console.log(1);
                let replacedNode = items.replaceChild(items.children[j], items.children[i]);
                insertAfter(replacedNode, items.children[i]);
            }
        }
    }
}

function mySortDown() {
    let items = document.querySelector('.featuder-product');
    for (let i = 0; i < items.children.length - 1; i++) {
        for (let j = i; j < items.children.length; j++) {
            if (+items.children[i].getAttribute('data-price') < +items.children[j].getAttribute('data-price')) {
                console.log(1);
                let replacedNode = items.replaceChild(items.children[j], items.children[i]);
                insertAfter(replacedNode, items.children[i]);
            }
        }
    }
}

function mySortRaiting() {
    let items = document.querySelector('.featuder-product');
    for (let i = 0; i < items.children.length - 1; i++) {
        for (let j = i; j < items.children.length; j++) {
            if (+items.children[i].getAttribute('data-raiting') > +items.children[j].getAttribute('data-raiting')) {
                console.log(1);
                let replacedNode = items.replaceChild(items.children[j], items.children[i]);
                insertAfter(replacedNode, items.children[i]);
            }
        }
    }
}


function insertAfter(elem, refElem) {
    return refElem.parentNode.insertBefore(elem, refElem.nextSibling);
}




