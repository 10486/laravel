@section('header')
        <header class="header">

            <div class="logo">
                <a href="#"><img src="img/logo1.png" alt=""></a>
            </div>


            <div class="search">
                <form action="#">
                    <input type="text" class="form-control search__input" placeholder="Search" />
                    <input type="submit" value="&#xe90b;" class="search__button" />
                </form>
            </div>


            <ul class="profile-menu">
                <li class="profile-menu__item dropdown dropdown--right dropdown--white">
                    <a href="file:///C:/Users/terek/Documents/V3.0/aware%20version3/cart.html#" class="profile-menu__link">
                        <span class="basket">
						<span class="icon-bag"></span>
                        <span class="badge">3</span>
                        </span>
                        <span class="b-price">15000rub</span>
                    </a>
                    <div class="dropdown-content">
                        <div class="cart">
                            <ul class="cart-list">
                                <li class="cart-list__item">
                                    <div class="cart-list__img">
                                        <a href="#"><img src="img/2.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-list__info">
                                        <h6 class="product__title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h6>
                                        <div class="cart-list__details">
                                            <span class="price">5000rub</span>
                                        </div>
                                    </div>
                                    <div class="cart-list__delete">
                                        <a href="#" class="js-remove-cart">
                                            <span class="icon-close"><span class="path1"></span><span class="path2"></span></span>
                                        </a>
                                    </div>
                                </li>
                                <li class="cart-list__item">
                                    <div class="cart-list__img">
                                        <a href="#"><img src="img/3.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-list__info">
                                        <h6 class="product__title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h6>
                                        <div class="cart-list__details">
                                            <span class="price price--danger">5000rub</span>
                                        </div>
                                    </div>
                                    <div class="cart-list__delete">
                                        <a href="#" class="js-remove-cart">
                                            <span class="icon-close"><span class="path1"></span><span class="path2"></span></span>
                                        </a>
                                    </div>
                                </li>
                                <li class="cart-list__item">
                                    <div class="cart-list__img">
                                        <a href="#"><img src="img/1.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-list__info">
                                        <h6 class="product__title"><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h6>
                                        <div class="cart-list__details">
                                            <span class="price">5000rub</span>
                                        </div>
                                    </div>
                                    <div class="cart-list__delete">
                                        <a href="#" class="js-remove-cart">
                                            <span class="icon-close"><span class="path1"></span><span class="path2"></span></span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <div class="cart-footer">
                                <span class="total">Value</span>
                                <span class="price">15000rub</span>
                                <a href="#" class="btn">Buy</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="profile-menu__item dropdown dropdown--right dropdown--white">
                    <a href="#" class="profile-menu__link"><span class="icon-user"></span></a>
                    <div class="dropdown-content">
                        <ul class="user-menu">
                            <li class="user-menu__item">
                                <a href="#" class="user-menu__link"><span class="icon-user"></span>Profile</a>
                            </li>
                            <li class="user-menu__item">
                                <a href="#" class="user-menu__link"><span class="icon-heart"></span>Wishlist <span class="badge">3</span></a>
                            </li>
                            <li class="user-menu__item">
                                <a href="#" class="user-menu__link"><span class="icon-basket"></span>Orders</a>
                            </li>
                            <li class="user-menu__item">
                                <a href="#" class="user-menu__link"><span class="icon-gear"></span>Settings</a>
                            </li>
                            <li class="user-menu__item">
                                <a href="#" class="user-menu__link"><span class="icon-power"></span>Log out</a>
                            </li>
                        </ul>

                    </div>
                </li>
            </ul>
        </header>
@show
