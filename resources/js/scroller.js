var page = 0;
$(window).scroll(function () {

 if($(window).height() + $(window).scrollTop() >= $(document).height()) {
 page++;
 $.ajax({
 url:"/getpage",
 type:"GET",
 data:"page="+page,
 success:function(data){
 	data = JSON.parse(data);
 	for (var i = 0; i < data.lenght; i++) {
 		$(".catalog-grid").html() + `<div class="catalog-item" id="${data[i]['id']}"><img src="${data[i]['ImageSrc']}" alt="Картинка товара" class="catalog-item__img"><p class="catalog-item__name">${data[i]['title']}</p><p class="catalog-item__price-new">${data[i]['price-final']} P</p><p class="catalog-item__price-old">${data['price']} P</p><div class="button-wrapper"><button class="catalog-item__basket-button"><img src="img/basket.png" alt=""></button></div></div>`
 	}
}});}});
