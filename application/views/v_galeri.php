
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/galeri.css">
    <style media="screen">
    @font-face {
			src: url(../assets/font/tayo.ttf);
			font-family: tayo;
		}
		@font-face {
			src: url(../assets/font/hiya.ttf);
			font-family: hiya;
		}
    .block2-labelsale::before,
    .block2-labelnew::before
    {
      z-index: 100;
      font-family: Montserrat-Regular;
      font-size: 12px;
      color: white;
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 50px;
      height: 22px;
      border-radius: 11px;
      position: absolute;
      top: 12px;
      left: 12px;
    }

    .block2-labelsale::before {
      background-color: #e65540;
      content: 'Sale';
    }

    .block2-labelnew::before {
      background-color: #66a8a6;
      content: 'New';
    }

    /* ------------------------------------ */
    .block2-overlay {
      position: absolute;
      width: 330px;
      height: 400px;
      top: 0;
      left: 0;
      background-color: rgba(0,0,0,0.3);
      opacity: 0;
    }



    /* ------------------------------------ */
    .block2-btn-addcart {
      position: absolute;
      left: 50%;
      -webkit-transform: translateX(-50%);
      -moz-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      -o-transform: translateX(-50%);
      transform: translateX(-50%);
      bottom: -45px;
    }

    /* ------------------------------------ */
    .block2-btn-towishlist,
    .block2-btn-addwishlist {
      display: block;
      position: absolute;
      top: 26px;
      right: 20px;
      font-size: 20px;
      color: white;
      line-height: 0;
      -webkit-transform: scale(0);
      -moz-transform: scale(0);
      -ms-transform: scale(0);
      -o-transform: scale(0);
      transform: scale(0);
    }

    .block2-btn-addwishlist:hover {
      color: white;
    }

    .block2-btn-addwishlist .icon-wishlist,
    .block2-btn-towishlist .icon-wishlist {
      line-height: 0;
    }

    .block2-btn-addwishlist:hover .icon_heart_alt {
      display: none;
    }

    .block2-btn-addwishlist:hover .icon_heart {
      display: block;
    }

    /* ------------------------------------ */
    .block2-btn-towishlist .icon_heart_alt {
      display: none;
    }

    .block2-btn-towishlist .icon_heart {
      display: block;
      color: #e65540;
    }

    /* ------------------------------------ */

    .block2-overlay:hover {
      opacity: 1;
    }



    .block2-overlay:hover .block2-btn-addcart {
      bottom: 20px;
    }

    .block2-overlay:hover .block2-btn-addwishlist,
    .block2-overlay:hover .block2-btn-towishlist{
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      -o-transform: scale(1);
      transform: scale(1);
    }

    .block2-img img{
        width: 300px;
        text-align: center;
        margin-bottom: 60px;
    }

    h2{
      color: white;
      margin-top: 5px;
      margin-bottom: 35px;
      font-family: hiya;
      font-size: 45px;
      text-align: center;
    }

    .buton{
      border: none;
      width: 100px;
      height: 40px;
      font-family: tayo;
      font-size: 15px;
      background-color: grey;
      color: white;
    }
    .buton:hover{
      background-color: white;
      color: gray;
      transition: 0.3s;
    }



    </style>
  </head>
  <body>
    <div class="judul">
      <h2>Galeri</h2>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-img ">
            <img src="<?= base_url()?>assets/img/donat.png" alt="IMG-PRODUCT">

            <div class="block2-overlay trans-0-4">
              <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
              </a>

              <div class="block2-btn-addcart w-size1 trans-0-4">
                <!-- Button -->
                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 buton">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-img wrap-pic-w of-hidden pos-relative">
            <img src="<?= base_url()?>assets/img/amanda.png" alt="IMG-PRODUCT">

            <div class="block2-overlay trans-0-4">
              <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
              </a>

              <div class="block2-btn-addcart w-size1 trans-0-4">
                <!-- Button -->
                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 buton">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
<!--
          <div class="block2-txt p-t-20">
            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
              Denim jacket blue
            </a>

            <span class="block2-price m-text6 p-r-5">
              $92.50
            </span>
          </div> -->
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-img wrap-pic-w of-hidden pos-relative">
            <img src="<?= base_url()?>assets/img/sang.png" alt="IMG-PRODUCT">

            <div class="block2-overlay trans-0-4">
              <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
              </a>

              <div class="block2-btn-addcart w-size1 trans-0-4">
                <!-- Button -->
                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 buton">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>

          <!-- <div class="block2-txt p-t-20">
            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
              Coach slim easton black
            </a>

            <span class="block2-price m-text6 p-r-5">
              $165.90
            </span>
          </div> -->
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-img ">
          <img src="<?= base_url()?>assets/img/nastar.png" alt="IMG-PRODUCT">

            <div class="block2-overlay trans-0-4">
              <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
              </a>

              <div class="block2-btn-addcart w-size1 trans-0-4">
                <!-- Button -->
                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 buton">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>

          <!-- <div class="block2-txt p-t-20">
            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
              Frayed denim shorts
            </a>

            <span class="block2-oldprice m-text7 p-r-5">
              $29.50
            </span>

            <span class="block2-newprice m-text8 p-r-5">
              $15.90
            </span>
          </div> -->
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-img ">
            <img src="<?= base_url()?>assets/img/bakpao.png" alt="IMG-PRODUCT">

            <div class="block2-overlay trans-0-4">
              <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
              </a>

              <div class="block2-btn-addcart w-size1 trans-0-4">
                <!-- Button -->
                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 buton">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>

          <!-- <div class="block2-txt p-t-20">
            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
              Herschel supply co 25l
            </a>

            <span class="block2-price m-text6 p-r-5">
              $75.00
            </span>
          </div> -->
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-img wrap-pic-w of-hidden pos-relative">
            <img src="<?= base_url()?>assets/img/manis.png" alt="IMG-PRODUCT">

            <div class="block2-overlay trans-0-4">
              <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
              </a>

              <div class="block2-btn-addcart w-size1 trans-0-4">
                <!-- Button -->
                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 buton">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-img ">
          <img src="<?= base_url()?>assets/img/martabak.png" alt="IMG-PRODUCT">

            <div class="block2-overlay trans-0-4">
              <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
              </a>

              <div class="block2-btn-addcart w-size1 trans-0-4">
                <!-- Button -->
                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 buton">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>

          <!-- <div class="block2-txt p-t-20">
            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
              Frayed denim shorts
            </a>

            <span class="block2-oldprice m-text7 p-r-5">
              $29.50
            </span>

            <span class="block2-newprice m-text8 p-r-5">
              $15.90
            </span>
          </div> -->
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
            <img src="<?= base_url()?>assets/img/robar.png" alt="IMG-PRODUCT">

            <div class="block2-overlay trans-0-4">
              <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
              </a>

              <div class="block2-btn-addcart w-size1 trans-0-4">
                <!-- Button -->
                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 buton">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>

          <!-- <div class="block2-txt p-t-20">
            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
              Herschel supply co 25l
            </a>

            <span class="block2-price m-text6 p-r-5">
              $75.00
            </span>
          </div> -->
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-img wrap-pic-w of-hidden pos-relative">
            <img src="<?= base_url()?>assets/img/pukis.png" alt="IMG-PRODUCT">

            <div class="block2-overlay trans-0-4">
              <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
              </a>

              <div class="block2-btn-addcart w-size1 trans-0-4">
                <!-- Button -->
                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 buton">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
