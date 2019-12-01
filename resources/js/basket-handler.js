basket_items = {};


$(".cart").click(function(event) {
    if ($(event.target).attr('class') == 'path2') {
        // basket_items[`${}`]
        basket_items[`${$(event.target).parents()[3].id}`] -= 1;

        $($(event.target).parents()[3]).remove();

        recount();
    }
});

function addel() {
    $('.catalog-item__basket-button').click(function() {
        let item = $(this).parents()[1];
        if (basket_items[`${item.id}`]) {
            basket_items[`${item.id}`] += 1;
        } else
            basket_items[`${item.id}`] = 1;
        item_item(item);
        recount();
    });
}



function item_item(item) {
    let id = item.id;
    item = $(item);
    temp = $('ul.cart-list').html() + '<li id="' + id + '" class="cart-list__item"><div class="cart-list__img"><a href="#"><img src=\"' + $(item).children()[0].src + '\" alt=""></a></div><div class="cart-list__info"><h6 class="product__title"><a href="#">' + $(item).children()[1].innerHTML + '</a></h6><div class="cart-list__details"><span class="price">' + $(item).children()[2].innerHTML + '</span></div></div><div class="cart-list__delete"><div class="js-remove-cart"><span class="icon-close"><span class="path1"></span><span class="path2"></span></span></div></div></li>'
    $('ul.cart-list').html(temp);
}
function load_basket(data) {
  let basket = $('cart-list');
  obj = data;
  for (key in obj) {
    temp = $('ul.cart-list').html() + '<li id="' + key + '" class="cart-list__item"><div class="cart-list__img"><a href="#"><img src=\"' + obj[key]['ImageSrc'] + '\" alt=""></a></div><div class="cart-list__info"><h6 class="product__title"><a href="#">' + obj[key]['title'] + '</a></h6><div class="cart-list__details"><span class="price">' + obj[key]['final-price'] + '</span></div></div><div class="cart-list__delete"><div class="js-remove-cart"><span class="icon-close"><span class="path1"></span><span class="path2"></span></span></div></div></li>';
    $('ul.cart-list').html(temp);
  }
}

function recount() {
    let total = 0;
    let badge = 0;
    $(".cart-list").children().each(function() {
        badge++;
        total += parseInt($(this).find('.price').html().slice(0, -1).replace(/ +/g, ""));
        // console.log($(this).find('.price').html().slice(0, -1));

    });
    $('.badge').html(badge);
    $(".b-price").html(total + 'rub');
};


$(document).ready(function() {
    addel();

    if (document.location.pathname == "/smartphones") {
      $('.article-last').addClass('active');
    }
    if (document.location.pathname == '/laptops') {
      $('article-laptops').addClass('active');
    }

//     $.ajax({
//         type: 'GET',
//         url: '/get_items',
//         data: basket_items,
//         success:function (data) {
//             load_basket(data);
//         }
//     })
});

$(window).on("unload", function() {
    $.cookie('basket_items', JSON.stringify(basket_items));
    console.log(JSON.parse($.cookie('basket_items')));
})
