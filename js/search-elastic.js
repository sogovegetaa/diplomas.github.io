document.querySelector('#elastic1').oninput = function () {
    let val = this.value.trim();
    let elasticItems = document.querySelectorAll('.featured-block');
    if (val != '') {
        elasticItems.forEach(function (elem) {
            if (elem.innerText.search(RegExp(val,"gi")) == -1) {
                elem.classList.add('hide');
                
            }
            else {
                elem.classList.remove('hide');
            }
        });
    }
    else {
    	elasticItems.forEach(function(elem) {
    		elem.classList.remove('hide');
    	});
    }
}

