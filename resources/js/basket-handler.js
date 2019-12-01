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
    console.log($(item).children());

    temp = $('ul.cart-list').html() + '<li class="cart-list__item"><div class="cart-list__img"><a href="#"><img src=\"' + $(item).children()[0].src + '\" alt=""></a></div><div class="cart-list__info"><h6 class="product__title"><a href="#">' + $(item).children()[1].innerHTML + '</a></h6><div class="cart-list__details"><span class="price">' + $(item).children()[2].innerHTML + '</span></div></div><div class="cart-list__delete"><div class="js-remove-cart"><span class="icon-close"><span class="path1"></span><span class="path2"></span></span></div></div></li>'
    $('ul.cart-list').html(temp);

}
$(document).ready(function() {

    addel();
});
