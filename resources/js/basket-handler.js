$(".cart").click(function(event) {
    if ($(event.target).attr('class') == 'path2') {
        $($(event.target).parents()[3]).remove();
    }
});

function addel() {
    $('.catalog-item__basket-button').click(function() {
        let item = $(this).parents()[1];
        item_item($(item));
    });
}


function item_item(item) {
    temp = $('ul.cart-list').html() + '<li class="cart-list__item"><div class="cart-list__img"><a href="#"><img src=' + $(item).children()[0].src + 'alt=""></a></div><div class="cart-list__info"><h6 class="product__title"><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h6><div class="cart-list__details"><span class="price">5000rub</span></div></div><div class="cart-list__delete"><div class="js-remove-cart"><span class="icon-close"><span class="path1"></span><span class="path2"></span></span></div></div></li>'
    $('ul.cart-list').html(temp);
    // $(item).parents()[0].innerHTML += '<div class="catalog-item"></div><div class="catalog-item"><img src="' + `${$(item).children()[0].src}` + '" alt="Картинка товара" class="catalog-item__img"><p class="catalog-item__name">' + `${$(item).children()[1].innerHTML}` + '</p><p class="catalog-item__price-new">' + `${$(item).children()[2].innerHTML}` + '</p><p class="catalog-item__price-old">' + $(item).children()[3].innerHTML + '</p><div class="button-wrapper"><button class="catalog-item__basket-button"><img src="img/basket.png" alt=""></button></div></div>'

}
$(document).ready(function() {

    addel();
});