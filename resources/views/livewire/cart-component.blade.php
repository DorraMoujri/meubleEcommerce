<main id="main" class="main-site">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">Accueil</a></li>
            <li class="item-link"><span>Panier</span></li>
        </ul>
    </div>
    <div class=" main-content-area">

        <div class="wrap-iten-in-cart">
            <h3 class="box-title">Produit(s)</h3>
            <ul class="products-cart">
                <li class="pr-cart-item">
                    
                    <div class="product-image">
                        <figure><img src="{{ asset('assets/images/products/checkout-1.jpg')}}" alt="meuble"></figure>
                    </div>
                    
                    <div class="product-name">
                        <a class="link-to-product" href="#">Table Basse/Tabouret</a>
                    </div>
                    
                    <div class="price-field produtc-price"><p class="price">256TND</p></div>
                    <div class="quantity">
                        <div class="quantity-input">
                            <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >									
                            <a class="btn btn-increase" href="#"></a>
                            <a class="btn btn-reduce" href="#"></a>
                        </div>
                    </div>
                    <div class="price-field sub-total"><p class="price">256TND</p></div>
                    <div class="delete">
                        <a href="#" class="btn btn-delete" title="">
                            <span>Supprimer de votre panier</span>
                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li class="pr-cart-item">
                    <div class="product-image">
                        <figure><img src="{{ asset('assets/images/products/checkout-2.jpg')}}" alt="meuble"></figure>
                    </div>
                    <div class="product-name">
                        <a class="link-to-product" href="#">Ensemble de 3 porcelaines</a>
                    </div>
                    <div class="price-field produtc-price"><p class="price">256TND</p></div>
                    <div class="quantity">
                        <div class="quantity-input">
                            <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*">									
                            <a class="btn btn-increase" href="#"></a>
                            <a class="btn btn-reduce" href="#"></a>
                        </div>
                    </div>
                    <div class="price-field sub-total"><p class="price">256TND</p></div>
                    <div class="delete">
                        <a href="#" class="btn btn-delete" title="">
                            <span>Supprimer de votre panier</span>
                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>												
            </ul>
        </div>

        <div class="summary">
            <div class="order-summary">
                <h4 class="title-box">Liste d'achat</h4>
                <p class="summary-info"><span class="title">Total Prix</span><b class="index">512TND</b></p>
                <p class="summary-info"><span class="title">Livraison</span><b class="index">Frais de livraison non inclus</b></p>
                <p class="summary-info total-info "><span class="title">Total</span><b class="index">512TND</b></p>
            </div>
            <div class="checkout-info">
                <label class="checkbox-field">
                    <input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>J'ai un coupon</span>
                </label>
                <a class="btn btn-checkout" href="/checkout">Commander</a>
                <a class="link-to-shop" href="/shop">Continuez Mes achats<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
            </div>
            <div class="update-clear">
                <a class="btn btn-clear" href="#">Videz Panier</a>
                <a class="btn btn-update" href="#">Mise à jour Panier</a>
            </div>
        </div>

        

    </div><!--end main content area-->
</div><!--end container-->

</main>
