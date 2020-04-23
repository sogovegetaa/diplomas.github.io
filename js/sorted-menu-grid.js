document.querySelector('#sort-up-grid').onclick = mySortUpGrid;

document.querySelector('#sort-down-grid').onclick = mySortDownGrid2;

document.querySelector('#sort-raiting-grid').onclick = mySortDownGrid3;



function mySortUpGrid() {
    let items = document.querySelector('.featured-product-grid');
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

function mySortDownGrid2() {
    let items = document.querySelector('.featured-product-grid');
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

function mySortDownGrid3() {
    let items = document.querySelector('.featured-product-grid');
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