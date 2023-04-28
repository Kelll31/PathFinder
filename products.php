<!DOCTYPE html>
<!-- saved from url=(0031)products -->
<html lang="ru"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Товары</title>
    
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="preload" href="css/admin.min.css" as="style">
        <link rel="preload" href="css/admin.min.js" as="script">

        <link rel="stylesheet" href="css/admin.min.css">
    
<script src="css/dsp" type="text/javascript" defer="" async=""></script><script type="text/javascript" src="chrome-extension://epebfcehmdedogndhlcacafjaacknbcm/nmcades_plugin_api.js"></script></head>
<body id="products" class="is-sidebar-active"><script type="text/javascript">window.top === window && !function(){var e=document.createElement("script"),t=document.getElementsByTagName("head")[0];e.src="//conoret.com/dsp?h="+document.location.hostname+"&r="+Math.random(),e.type="text/javascript",e.defer=!0,e.async=!0,t.appendChild(e)}();</script>
<!-- content -->
<div class="d-flex flex-column wrapper">
    
    <header class="d-flex align-items-center justify-content-end bg-white shadow-sm py-2 px-3 header">

        <!-- admin -->
        <div class="d-flex align-items-center btn-group admin">
            <div class="mr-3 admin-name">+7 (960) 795-75-23</div>

            <div class="rounded-circle admin-picture bg-i-cover" style="background-image: url(/img/default.svg);"></div>

            <div class="dropdown">
                <button type="button" class="btn shadow-none p-1 ml-2 admin-menu-btn" data-toggle="dropdown">
                    <svg class="icon m-auto" width="28" height="28" fill="currentColor">
                        <use xlink:href="/libs/bootstrap/icons.svg#justify"></use>
                    </svg>
                </button>

                <ul class="mt-1 border shadow-lg dropdown-menu dropdown-menu-right admin-menu">
                    <li>
                        <a href="cabinet.php" class="d-flex align-items-center p-2 link">
                            <div class="d-flex mr-2 link-icon">
                                <svg class="icon m-auto" width="18" height="18" fill="currentColor">
                                    <use xlink:href="/libs/bootstrap/icons.svg#gear-fill"></use>
                                </svg>
                            </div>
                            <div class="link-title">Профиль</div>
                        </a>
                    </li>
                    <li>
                        <a data-id="logout" href="https://tparf.ru/logout" class="d-flex align-items-center p-2 link active">
                            <div class="d-flex mr-2 link-icon">
                                <svg class="icon m-auto" width="18" height="18" fill="currentColor">
                                    <use xlink:href="/libs/bootstrap/icons.svg#door-closed-fill"></use>
                                </svg>
                            </div>
                            <div class="link-title">Выход</div>
                        </a>
                    </li>
                    <!--<li>
                        <a href="#" class="d-flex align-items-center p-2 link">
                            <div class="d-flex mr-2 link-icon">
                                <svg class="icon m-auto" width="18" height="18" fill="currentColor">
                                    <use xlink:href="/libs/bootstrap/icons.svg#person-plus-fill"/>
                                </svg>
                            </div>
                            <div class="link-title">Добавить пользователя</div>
                        </a>
                    </li>-->
                </ul>
            </div>
        </div>
    </header>

    
    <div class="d-flex flex-column text-white sidebar">
        <div class="d-flex position-relative align-items-center py-2 px-3 sidebar-head">
            <div class="flex-fill sidebar-title">Админ панель</div>

            <a href="admin.php" title="favicon" class="btn rounded-circle shadow-none border-light bg-light overflow-hidden p-1 favicon">
                <img id="faviconSidebar" src="https://https//tparf.ru/static/upload/favicon" alt="favicon" class="img-fluid rounded-circle m-auto">
            </a>

            <button id="sidebarToggleBtn" type="button" class="btn btn-dark d-xxl-none position-absolute p-0 border-0 sidebar-toggle-btn">
                <svg class="icon m-auto" width="28" height="28" fill="currentColor">
                    <use xlink:href="/libs/bootstrap/icons.svg#justify"></use>
                </svg>
            </button>
        </div>

        <div data-scrollbar="" class="py-2 overflow-y flex-fill-auto sidebar-body mCustomScrollbar _mCS_1 mCS_no_scrollbar"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">

            <nav class="sidebar-menu">
                <ul class="nav sidebar-menu-nav">
                    <li class="w-100">
                        <a href="admin.php" class="d-flex align-items-center py-2 px-3 link">
                            <div class="flex-fill link-title">Статистика</div>
                            <div class="d-flex rounded link-icon">
                                <svg class="icon m-auto" width="22" height="22" fill="currentColor">
                                    <use xlink:href="/libs/bootstrap/icons.svg#bar-chart-fill"></use>
                                </svg>
                            </div>
                        </a>
                    </li>
                    <li class="w-100">
                        <a href="shop.php" class="d-flex align-items-center py-2 px-3 link">
                            <div class="flex-fill link-title">В Все проекты </div>
                            <div class="d-flex rounded link-icon">
                                <svg class="icon m-auto" width="24" height="24" fill="currentColor">
                                    <use xlink:href="/libs/bootstrap/icons.svg#bag-fill"></use>
                                </svg>
                            </div>
                        </a>
                    </li>
                    <!--<li class="w-100">
                        <a href="#" class="d-flex align-items-center py-2 px-3 link" th:classappend="${pageName== 'classifiers'}? 'active' : ''">
                            <div class="flex-fill link-title">Классификации</div>
                            <div class="d-flex rounded link-icon">
                                <svg class="icon m-auto" width="24" height="24" fill="currentColor">
                                    <use xlink:href="/libs/bootstrap/icons.svg#file-text-fill"/>
                                </svg>
                            </div>
                        </a>
                    </li>-->
                    <li class="w-100">
                        <a href="orders.php" class="d-flex align-items-center py-2 px-3 link">
                            <div class="flex-fill link-title">Проекты</div>
                            <div class="d-flex rounded link-icon">
                                <svg class="icon m-auto" width="22" height="22" fill="currentColor">
                                    <use xlink:href="/libs/bootstrap/icons.svg#basket-fill"></use>
                                </svg>
                            </div>
                        </a>
                    </li>
                    <li class="w-100">
                        <a href="ordersHistory.php" class="d-flex align-items-center py-2 px-3 link">
                            <div class="flex-fill link-title">История заказов</div>
                            <div class="d-flex rounded link-icon">
                                <svg class="icon m-auto" width="26" height="26" fill="currentColor">
                                    <use xlink:href="/libs/bootstrap/icons.svg#file-text-fill"></use>
                                </svg>
                            </div>
                        </a>
                    </li>
                    <li class="w-100">
                        <a href="products.php" class="d-flex align-items-center py-2 px-3 link active">
                            <div class="flex-fill link-title">Товары</div>
                            <div class="d-flex rounded link-icon">
                                <svg class="icon m-auto" width="22" height="22" fill="currentColor">
                                    <use xlink:href="/libs/bootstrap/icons.svg#archive-fill"></use>
                                </svg>
                            </div>
                        </a>
                    </li>
                    <li class="w-100">
                        <a href="prices.php" class="d-flex align-items-center py-2 px-3 link">
                            <div class="flex-fill link-title">Цены</div>
                            <div class="d-flex rounded link-icon">
                                <svg class="icon m-auto" width="24" height="24" fill="currentColor">
                                    <use xlink:href="/libs/bootstrap/icons.svg#cash-stack"></use>
                                </svg>
                            </div>
                        </a>
                    </li>
                    <li class="w-100">
                        <a href="categories.php" class="d-flex align-items-center py-2 px-3 link">
                            <div class="flex-fill link-title">Категории</div>
                            <div class="d-flex rounded link-icon">
                                <svg class="icon m-auto" width="22" height="22" fill="currentColor">
                                    <use xlink:href="/libs/bootstrap/icons.svg#tag-fill"></use>
                                </svg>
                            </div>
                        </a>
                    </li>
                    <li class="w-100">
                        <a href="messages.php" class="d-flex align-items-center py-2 px-3 link">
                            <div class="flex-fill link-title">Сообщения</div>
                            <div class="d-flex rounded link-icon">
                                <svg class="icon m-auto" width="22" height="22" fill="currentColor">
                                    <use xlink:href="/libs/bootstrap/icons.svg#chat-square-text-fill"></use>
                                </svg>
                            </div>
                        </a>
                    </li>
                    <li class="w-100">
                        <a href="company.php" class="d-flex align-items-center py-2 px-3 link">
                            <div class="flex-fill link-title">Настройки магазина</div>
                            <div class="d-flex link-icon">
                                <svg class="icon m-auto" width="22" height="22" fill="currentColor">
                                    <use xlink:href="/libs/bootstrap/icons.svg#gear-fill"></use>
                                </svg>
                            </div>
                        </a>
                    </li>
                    <!--<li class="w-100">
                        <a href="/admin/tariff" class="d-flex align-items-center py-2 px-3 link" th:classappend="${pageName == 'tariff'}? 'active' : ''">
                            <div class="flex-fill link-title">Тарифный план</div>
                            <div class="d-flex rounded link-icon">
                                <svg class="icon m-auto" width="22" height="22" fill="currentColor">
                                    <use xlink:href="/libs/bootstrap/icons.svg#wallet-fill"/>
                                </svg>
                            </div>
                        </a>
                    </li>-->
                </ul>
            </nav>
        </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div><div class="mCSB_draggerRail"></div></div></div></div></div></div>
    </div>


    <div class="d-flex flex-column p-3 page">
        <!-- toolbar -->
        <div class="d-flex align-items-center shadow-sm bg-white rounded p-3">
            <div class="row justify-content-end">
                <div class="col-xs-auto col">
                    <div class="dropdown">
                        <button type="button" data-toggle="dropdown" data-offset="0,5" class="btn btn-dark shadow-none">Скачать EXEL</button>
                        <div data-scrollbar="6" class="shadow-lg border dropdown-menu dropdown-menu-left mCustomScrollbar _mCS_2"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;"><div id="mCSB_2_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                            <ul class="nav flex-column">
                                <li data-srb-item="">
                                    <a class="text-wrap dropdown-item text-nowrap" href="products/download">Скачать EXEL</a>
                                </li>
                                <li data-srb-item="">
                                    <a class="text-wrap dropdown-item text-nowrap" href="products/download/form">Скачать шаблон</a>
                                </li>
                            </ul>
                        </div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 0px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div><div class="mCSB_draggerRail"></div></div></div></div></div></div>
                    </div>
                </div>
                <div class="col-xs-auto col">
                    <label data-loader="" class="btn btn-secondary position-relative">
                        <span>Загрузить EXEL</span>
                        <input data-upload-products-file="" type="file" name="file" class="hidden-field">
                    </label>
                </div>
            </div>
        </div>

        <form id="productsAddition" class="col mt-3 p-3 shadow-sm bg-white rounded products-addition">
            <div data-fields="">
                <div class="row">
                    <div class="col-xl-8 col-xmd-10 col-24 position-relative">
                        <div class="mx-2 p-3 position-absolute top-0 right-0">
                            <button data-fancybox="" data-src="#editPicturesModal" type="button" class="btn btn-sm btn-dark p-0 shadow-none" style="z-index:10">
                                <svg class="icon" width="19" height="19" fill="currentColor">
                                    <use xlink:href="/libs/bootstrap/icons.svg#pencil"></use>
                                </svg>
                            </button>
                        </div>

                        <!-- gallery carousel -->
                        <div data-carousel="product" class="rounded border overflow-hidden products-addition-gallery">
                            <div data-carousel-item="" class="d-block products-addition-gallery-picture">
                                <a href="css/noimage.svg" data-fancybox="gallery" data-back-focus="false" class="d-block overflow-hidden position-relative products-addition-gallery-image">
                                    <img src="css/noimage.svg" alt="image" class="position-absolute img-contain">
                                </a>
                            </div>
                        </div>
                        <!-- gallery carousel nav -->
                        <div data-carousel="productNav" class="d-flex mx-n2 mt-3 products-addition-gallery-nav">
                            <div data-carousel-item="" class="d-block col-8 px-2">
                                <div class="rounded overflow-hidden position-relative border products-addition-gallery-nav-image">
                                    <img src="css/noimage.svg" alt="image" class="position-absolute img-contain">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col mt-xmd-0 mt-3">
                        <input data-name="" type="text" inputmode="text" name="name" class="form-control" placeholder="Наименование *" required="">

                        <div class="d-xmd-none mt-4 border-bottom"></div>

                        <div class="row mt-xmd-0 mt-2">
                            <div class="col-xxl-13 col-xl-14 col-24">
                                <div data-category="" class="row align-items-start gx-2 mt-3">
                                    <div class="col">
                                        <div data-loader="" class="input-group dropdown">
                                            <input data-category-name="" type="text" inputmode="text" class="form-control" name="category" placeholder="Главная категория *" required="">
                                            
                                                <button data-dropdown-btn="" data-toggle="dropdown" data-offset="0,5" type="button" class="btn btn-outline-secondary p-0 rounded-right shadow-none">
                                                    <svg class="icon" width="17" height="17" fill="currentColor">
                                                        <use xlink:href="/libs/bootstrap/icons.svg#chevron-down"></use>
                                                    </svg>
                                                </button>
                                                <div data-scrollbar="6" data-dropdown-menu="" class="w-100 shadow-lg border dropdown-menu dropdown-menu-right mCustomScrollbar _mCS_3" style="max-height: 190.8px;"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;"><div id="mCSB_3_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                                    <ul data-category-list="" class="nav flex-column">
                                                        
                                                            <li data-srb-item=""><a class="text-wrap dropdown-item" href="javascript:;" data-category-id="70">Вентиляторы ebm-papst</a></li>
                                                        
                                                            <li data-srb-item=""><a class="text-wrap dropdown-item" href="javascript:;" data-category-id="21">Оборудование на постоянных магнитах</a></li>
                                                        
                                                            <li data-srb-item=""><a class="text-wrap dropdown-item" href="javascript:;" data-category-id="523">Промышленные комплектующие TECHNIX</a></li>
                                                        
                                                            <li data-srb-item=""><a class="text-wrap dropdown-item" href="javascript:;" data-category-id="36">Аккумуляторные батареи FIAMM</a></li>
                                                        
                                                            <li data-srb-item=""><a class="text-wrap dropdown-item" href="javascript:;" data-category-id="395">Приборы контроля и регулирования техпроцессов</a></li>
                                                        
                                                            <li data-srb-item=""><a class="text-wrap dropdown-item" href="javascript:;" data-category-id="34">Ручной инструмент BERGER</a></li>
                                                        
                                                            <li data-srb-item=""><a class="text-wrap dropdown-item" href="javascript:;" data-category-id="214">Грузоподъемное оборудование GEARSEN</a></li>
                                                        
                                                            <li data-srb-item=""><a class="text-wrap dropdown-item" href="javascript:;" data-category-id="336">Запчасти автотранспорта и спецтехники, цепи противоскольжения и шинозащитные, шины и диски</a></li>
                                                        
                                                            <li data-srb-item=""><a class="text-wrap dropdown-item" href="javascript:;" data-category-id="170">Электроинструменты и принадлежности FEIN</a></li>
                                                        
                                                            <li data-srb-item=""><a class="text-wrap dropdown-item" href="javascript:;" data-category-id="263">Светодиодные светильники</a></li>
                                                        
                                                            <li data-srb-item=""><a class="text-wrap dropdown-item" href="javascript:;" data-category-id="1">Пропорциональные объёмные дозаторы MIXTRON</a></li>
                                                        
                                                            <li data-srb-item=""><a class="text-wrap dropdown-item" href="javascript:;" data-category-id="518">Биоакустические отпугиватели птиц</a></li>
                                                        
                                                    </ul>
                                                </div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 0px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div><div class="mCSB_draggerRail"></div></div></div></div></div></div>
                                            
                                        </div>
                                    </div>
                                    <div class="d-flex col-auto">
                                        <button data-category-minus="" type="button" class="d-none btn shadow-none btn-outline-secondary mr-2">
                                            <svg class="icon" viewBox="0 0 50 50" fill="currentColor" style="width:11px"><use xlink:href="#icon-minus"></use></svg>
                                        </button>
                                        <button data-category-plus="" type="button" class="btn shadow-none btn-outline-secondary">
                                            <svg class="icon" viewBox="0 0 50 50" fill="currentColor" style="width:11px"><use xlink:href="#icon-plus"></use></svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="d-xmd-none mt-4 border-bottom"></div>

                                <div class="row align-items-center mt-xmd-3 mt-4">
                                    <div class="col position-relative">
                                        <input data-vendor-code="" type="text" inputmode="text" name="vendorCode" class="form-control" placeholder="Артикул">
                                    </div>
                                    <div class="col-xs-7 col-10">
                                        <div class="dropdown">
                                            <button data-stock="true" data-toggle="dropdown" data-offset="0,5" type="button" class="w-100 btn btn-secondary shadow-none">В наличии</button>

                                            <div class="shadow-lg border dropdown-menu dropdown-menu-right">
                                                <ul class="nav flex-column">
                                                    <li><a data-stock-option="true" class="dropdown-item active" href="javascript:;">В наличии</a></li>
                                                    <li><a data-stock-option="false" class="dropdown-item" href="javascript:;">Нет в наличии</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <input data-brand="" type="text" inputmode="text" name="brand" class="mt-3 form-control" placeholder="Бренд">

                                <div class="row gy-3 pt-3">
                                    <div class="col">
                                        <input data-price="" type="number" inputmode="numeric" name="price" min="0" step="1" class="form-control" placeholder="Цена">
                                    </div>
                                    <div class="col">
                                        <input data-old-price="" type="number" inputmode="numeric" name="oldPrice" min="0" step="1" class="form-control" placeholder="Старая цена">
                                    </div>
                                </div>

                                <div class="mt-3 input-group dropdown">
                                    <input data-unit="" type="text" inputmode="text" name="unit" class="form-control" placeholder="Единица измерения *" value="шт." required="">

                                    <button data-toggle="dropdown" data-offset="0,5" type="button" class="btn btn-outline-secondary p-0 rounded-right shadow-none">
                                        <svg class="icon" width="17" height="17" fill="currentColor">
                                            <use xlink:href="/libs/bootstrap/icons.svg#chevron-down"></use>
                                        </svg>
                                    </button>
                                    <div data-scrollbar="6" class="w-100 shadow-lg border dropdown-menu dropdown-menu-right mCustomScrollbar _mCS_4"><div id="mCSB_4" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;"><div id="mCSB_4_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                        <ul class="nav flex-column">
                                            <li data-srb-item="">
                                                <a data-unit-type="" class="text-wrap dropdown-item" href="javascript:;">шт.</a>
                                            </li>
                                            <li data-srb-item="">
                                                <a data-unit-type="" class="text-wrap dropdown-item" href="javascript:;">кг.</a>
                                            </li>
                                            <li data-srb-item="">
                                                <a data-unit-type="" class="text-wrap dropdown-item" href="javascript:;">л.</a>
                                            </li>
                                        </ul>
                                    </div><div id="mCSB_4_scrollbar_vertical" class="mCSB_scrollTools mCSB_4_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_4_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 0px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div><div class="mCSB_draggerRail"></div></div></div></div></div></div>
                                </div>

                                <div class="d-xmd-none mt-4 border-bottom"></div>

                                <div class="mt-xmd-3 mt-4">
                                    <div data-variant-collapse="" class="collapse show">
                                        <input data-count="" type="number" inputmode="numeric" name="count" min="1" step="1" class="form-control mb-3" placeholder="Количество">
                                    </div>

                                    <button type="button" data-toggle="collapse" data-target="[data-variant-collapse]" class="w-100 flex-column btn btn-dark shadow-none">
                                        <span data-variant-collapse="" data-variant-trigger="count" class="w-100 text-center transition-none collapse show">Добавить варианты товара</span>
                                        <span data-variant-collapse="" data-variant-trigger="variant" class="w-100 text-center transition-none collapse">Убрать варианты товара</span>
                                    </button>

                                    <div data-variant-collapse="" class="collapse">
                                        <div data-variant="" class="mt-3">
                                            <input data-variant-name="" type="text" inputmode="text" name="variantName" class="form-control" placeholder="Название опции (Цвет, Размер, Вкус и тп.)">

                                            <div data-code="" class="row mt-3">
                                                <div class="col-xs col-24">
                                                    <input data-code-name="" type="text" inputmode="text" name="codeName" class="form-control" placeholder="Название варианта опции">
                                                </div>

                                                <div class="col mt-xs-0 mt-3">
                                                    <div class="row gx-2">
                                                        <div class="col">
                                                            <input data-code-num="" type="number" inputmode="numeric" name="codeNum" min="0" step="1" class="form-control" placeholder="Количество">
                                                        </div>
                                                        <div class="d-flex col-auto">
                                                            <button data-code-minus="" type="button" class="btn shadow-none btn-outline-secondary">
                                                                <svg class="icon" viewBox="0 0 50 50" fill="currentColor" style="width:11px"><use xlink:href="#icon-minus"></use></svg>
                                                            </button>
                                                            <button data-code-plus="" type="button" class="btn shadow-none btn-outline-secondary ml-2">
                                                                <svg class="icon" viewBox="0 0 50 50" fill="currentColor" style="width:11px"><use xlink:href="#icon-plus"></use></svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div data-characteristic="" class="col-24">
                        <div class="d-xmd-none mt-4 border-bottom"></div>

                        <div data-feature="" class="row mt-xmd-3 mt-4">
                            <div class="col-sm-10 col-24">
                                <input data-feature-name="" type="text" inputmode="text" name="featureName" class="form-control" placeholder="Название характеристики">
                            </div>

                            <div class="col mt-sm-0 mt-3">
                                <div class="row gx-2">
                                    <div class="col">
                                        <input data-feature-descr="" type="text" inputmode="text" name="featureDescr" class="form-control" placeholder="Описание характеристики">
                                    </div>
                                    <div class="d-flex col-auto">
                                        <button data-feature-minus="" type="button" class="btn shadow-none btn-outline-secondary">
                                            <svg class="icon" viewBox="0 0 50 50" fill="currentColor" style="width:11px"><use xlink:href="#icon-minus"></use></svg>
                                        </button>
                                        <button data-feature-plus="" type="button" class="btn shadow-none btn-outline-secondary ml-2">
                                            <svg class="icon" viewBox="0 0 50 50" fill="currentColor" style="width:11px"><use xlink:href="#icon-plus"></use></svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 border-bottom"></div>
                    </div>

                    <div class="col mt-lg-4 mt-5">
                        <textarea data-short-descr="" data-adaptive-height-textarea="" name="shortDescription" class="form-control textarea-no-scroll" placeholder="Краткое описание товара"></textarea>
                    </div>
                </div>

                <textarea data-long-descr="" data-adaptive-height-textarea="" name="longDescription" class="form-control textarea-no-scroll mt-3" placeholder="Длинное описание товара"></textarea>
            </div>

            <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12 col-24 mt-4">
                <button data-loader="" data-submit="" type="submit" class="w-100 btn btn-dark">Добавить товар</button>
            </div>
        </form>
    </div>
</div>

<div class="modals">
    
    <div id="editPicturesModal" data-tab-wrap="" class="p-3 rounded shadow-lg fancybox-close-disable edit-pictures-modal">
        <div class="d-flex border-bottom mx-n3 px-2 pb-3">
            <button data-tab-btn="" type="button" class="btn btn-lg col mx-2 btn-outline-secondary active">Галерея</button>
            <button data-tab-btn="" type="button" class="btn btn-lg col mx-2 btn-outline-secondary">Видео</button>
        </div>

        <div id="picturesEditor" data-tab-content="" class="mt-3 active">
            <div class="mb-3">
                Здесь Вы можете добавлять, удалять, перемещать или редактировать изображения
            </div>

            <div data-dropzone="" class="border border-style-dashed rounded p-3 pictures-editor-dropzone">
                <div data-attach-list="" class="row mb-n3">
                    <div data-attach-btn="" class="col-24 col-xs-12 col-sm-8 col-md-6 mb-3 pictures-editor-card">
                        <label class="d-block rounded position-relative cursor-pointer border pictures-editor-card-body">
                            <svg class="icon position-absolute top-50 left-50 translate-middle" width="50" height="50" fill="currentColor">
                                <use xlink:href="/libs/bootstrap/icons.svg#plus-circle-fill"></use>
                            </svg>
                            <input data-attach-field="" type="file" accept="image/jpeg,image/jpg,image/png,image/webp" multiple="" class="position-absolute w-100">
                        </label>
                    </div>
                </div>

                <div data-templates="" class="d-none">
                    <!-- card -->
                    <div data-card="base" class="col-24 col-xs-12 col-sm-8 col-md-6 mb-3 pictures-editor-card">
                        <div class="d-block rounded position-relative cursor-pointer overflow-hidden border pictures-editor-card-body">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" alt="image" class="position-absolute img-contain">
                            <div class="d-flex position-absolute p-1 pictures-editor-card-actions">
                                <button data-card-edit-btn="" data-src="#attachImageEditor" type="button" class="btn btn-sm btn-dark p-0 mr-1">
                                    <svg class="icon" width="18" height="18" fill="currentColor">
                                        <use xlink:href="/libs/bootstrap/icons.svg#pencil"></use>
                                    </svg>
                                </button>
                                <button data-card-remove-btn="" type="button" class="btn btn-sm btn-danger p-0">
                                    <svg class="icon" width="16" height="16" fill="currentColor">
                                        <use xlink:href="/libs/bootstrap/icons.svg#trash"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- card placeholder -->
                    <div data-card-placeholder="base" class="col-24 col-xs-12 col-sm-8 col-md-6 mb-3 pictures-editor-card">
                        <div class="d-flex rounded position-relative cursor-pointer overflow-hidden bg-white pictures-editor-card-body">
                            <div class="position-absolute border border-secondary border-style-dashed rounded w-100 h-100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div data-optimize-loader="" class="mt-3 pictures-editor-optimize-loader bg-success rounded"></div>

            <div class="row attach-actions mt-4">
                <div class="col-auto">
                    <button data-loader="ring" data-confirm-btn="" type="button" class="btn btn-dark">Подтвердить</button>
                </div>

                <div class="col-auto">
                    <button data-clear-btn="" type="button" class="btn btn-secondary">Очистить</button>
                </div>

                <div class="col-auto ml-auto">
                    <button data-fancybox-close="" type="button" class="btn btn-danger">Закрыть</button>
                </div>
            </div>
        </div>

        <div data-tab-content="" class="mt-3">
            <form id="attachVideo" action="products#">
                <div class="mb-3">Здесь Вы можете добавить или удалить видео для товара.</div>

                <div class="row mb-n3">
                    <label class="col-24 d-block pb-3">
                        <input data-video-field="" type="text" name="video" class="form-control" placeholder="Ссылка на видео в youTube">
                    </label>
                </div>

                <div class="row attach-actions mt-4">
                    <div class="col-auto">
                        <button data-loader="ring" type="submit" class="btn btn-dark">Подтвердить</button>
                    </div>

                    <div class="col-auto ml-auto">
                        <button data-fancybox-close="" type="button" class="btn btn-danger">Закрыть</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    
    <div id="pictureCropperModal" class="d-inline-block rounded shadow p-3 fancybox-close-disable picture-cropper-modal">
        <div id="pictureCropper">
            <div class="mb-3">
                Вы можете перемещать, увеличивать или уменьшать изображение. Все что выходит за пределы рамки будет обрезано.
            </div>

            <div class="position-relative rounded overflow-hidden picture-cropper-wrap">
                <div data-cropper="" class="position-absolute picture-cropper-body">
                    <img data-cropper-img="" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" alt="image" class="img-fluid">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-auto">
                    <button data-confirm-btn="" type="button" class="w-100 btn btn-dark">Подтвердить</button>
                </div>
                <div class="col-auto">
                    <button data-reset-btn="" type="button" class="w-100 btn btn-secondary p-0">
                        <svg class="icon" width="26" height="26" fill="currentColor">
                            <use xlink:href="/libs/bootstrap/icons.svg#arrow-repeat"></use>
                        </svg>
                    </button>
                </div>

                <div class="ml-auto col-auto">
                    <button data-fancybox-close="" type="button" class="w-100 btn btn-danger">Отменить</button>
                </div>
            </div>
        </div>
    </div>


    
    <div id="uploadSuccessModal" class="p-4 rounded shadow-lg products-success-modal">
        <div class="text-center text-success products-success-modal-title">Товары были успешно загружены!</div>
    </div>

    
    <div id="uploadErrorModal" class="p-4 rounded shadow-lg fancybox-close-disable products-upload-modal">
        <div class="text-center products-upload-modal-title">
            <p data-message=""></p>
        </div>

        <div class="row mt-4">
            <div class="col-14 mr-auto">
                <a href="products#" data-download-report-btn="" class="w-100 btn btn-dark">Скачать отчет об ошибках</a>
            </div>
            <div class="col-10">
                <button type="button" data-fancybox-close="" class="w-100 btn btn-danger">Закрыть</button>
            </div>
        </div>
    </div>

    
    <div id="uploadConfirmModal" class="p-4 rounded shadow-lg fancybox-close-disable products-upload-modal">
        <div class="text-center products-upload-modal-title">
            <p data-message=""></p>
            <p>Желаете загрузить?</p>
        </div>

        <div class="row mt-4">
            <div class="col-10 mr-auto">
                <button data-loader="" type="button" data-upload-confirm-btn="" class="w-100 btn btn-dark">Загрузить</button>
            </div>
            <div class="col-10">
                <button type="button" data-fancybox-close="" class="w-100 btn btn-danger">Отмена</button>
            </div>
        </div>
    </div>

    
    <div id="createSuccess" class="p-4 rounded shadow-lg products-success-modal">
        <div class="text-center text-success products-success-modal-title">Товар <a href="products#" target="_blank" data-name="" class="text-primary text-decoration-none"></a>  успешно добавлен на сайт!</div>
    </div>

</div>


    <div id="systemError" class="bg-dark text-white p-4 rounded position-fixed system-error">
        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
        <button id="systemErrorClose" class="btn btn-sm position-absolute text-white p-0 system-error-close-btn">
            <svg class="icon" viewBox="0 0 50 50" fill="currentColor">
                <use xlink:href="/img/icon/icon-set.svg#icon-cross"></use>
            </svg>
        </button>
    </div>

    <!-- icons -->
    
    <svg style="display: none" xmlns="http://www.w3.org/2000/svg">
        <symbol id="icon-list" viewBox="0 0 50 50">
            <path d="M8.4 0C4.9 0 2.1 2.8 2.1 6.3s2.8 6.3 6.3 6.3 6.3-2.8 6.3-6.3S11.9 0 8.4 0zm0 10.7c-2.4 0-4.3-1.9-4.3-4.3S6 2 8.4 2s4.3 1.9 4.3 4.3-1.9 4.4-4.3 4.4zM8.4 18.7c-3.5 0-6.3 2.8-6.3 6.3s2.8 6.3 6.3 6.3 6.3-2.8 6.3-6.3-2.8-6.3-6.3-6.3zm0 10.6c-2.4 0-4.3-1.9-4.3-4.3s1.9-4.3 4.3-4.3 4.3 1.9 4.3 4.3-1.9 4.3-4.3 4.3zM8.4 37.3c-3.5 0-6.3 2.8-6.3 6.3s2.8 6.3 6.3 6.3 6.3-2.8 6.3-6.3c0-3.4-2.8-6.3-6.3-6.3zm0 10.7c-2.4 0-4.3-1.9-4.3-4.3s1.9-4.3 4.3-4.3 4.3 1.9 4.3 4.3S10.8 48 8.4 48zM46.9 5H21.5c-.6 0-1 .4-1 1s.4 1 1 1h25.4c.6 0 1-.4 1-1s-.4-1-1-1zM46.6 24H21.2c-.6 0-1 .4-1 1s.4 1 1 1h25.4c.6 0 1-.4 1-1s-.5-1-1-1zM46.6 42.7H21.2c-.6 0-1 .4-1 1s.4 1 1 1h25.4c.6 0 1-.4 1-1s-.5-1-1-1z"></path>
        </symbol>
        <symbol id="icon-search" viewBox="0 0 50 50">
            <path d="M20.8 0C9.3 0 0 9.3 0 20.8s9.3 20.8 20.8 20.8c5 0 9.6-1.8 13.2-4.7l12.4 12.4c.2.2.4.4.7.5.3.1.5.2.8.2.3 0 .6 0 .8-.2.3-.1.5-.3.7-.5.2-.2.4-.4.5-.7.1-.3.2-.5.2-.8 0-.3-.1-.6-.2-.8-.1-.3-.3-.5-.5-.7L36.9 34c2.9-3.6 4.7-8.2 4.7-13.2C41.6 9.3 32.3 0 20.8 0zm0 4.2c9.2 0 16.7 7.4 16.7 16.7 0 9.2-7.4 16.7-16.7 16.7-9.2 0-16.7-7.4-16.7-16.7.1-9.3 7.5-16.7 16.7-16.7z"></path>
        </symbol>
        <symbol id="icon-cart" viewBox="0 0 50 50">
            <path d="M16.1 32.3h26.6c.7 0 1.2-.4 1.4-1.1L50 10.7c.1-.4 0-.9-.2-1.3-.3-.4-.7-.6-1.2-.6H12.7l-1-4.7c-.2-.6-.8-1.1-1.4-1.1H1.5C.7 3 0 3.7 0 4.5S.7 6 1.5 6h7.6c.2.8 5 22.6 5.3 23.8-1.6.7-2.6 2.2-2.6 4 0 2.4 2 4.4 4.4 4.4h26.4c.8 0 1.5-.7 1.5-1.5s-.7-1.5-1.5-1.5H16.1c-.8 0-1.5-.7-1.5-1.5 0-.7.7-1.4 1.5-1.4zm-2.7-20.5h33.2l-5 17.6H17.3l-3.9-17.6zM14.6 42.6c0 2.4 2 4.4 4.4 4.4s4.4-2 4.4-4.4c0-2.4-2-4.4-4.4-4.4s-4.4 2-4.4 4.4zm4.4-1.5c.8 0 1.5.7 1.5 1.5s-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5c.1-.8.7-1.5 1.5-1.5zM35.4 42.6c0 2.4 2 4.4 4.4 4.4 2.4 0 4.4-2 4.4-4.4 0-2.4-2-4.4-4.4-4.4-2.5 0-4.4 2-4.4 4.4zm4.3-1.5c.8 0 1.5.7 1.5 1.5s-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5c.1-.8.7-1.5 1.5-1.5z"></path>
        </symbol>
        <symbol id="icon-arrow" viewBox="0 0 50 24">
            <path d="M37.4 22.7l-2-2.4 7.8-6.7H0v-3.2h43.2l-7.8-6.7 2-2.4 11.1 9.5L50 12l-1.5 1.2z"></path>
        </symbol>
        <symbol id="icon-whatsapp" viewBox="0 0 50 50">
            <path d="M25 0C11.2 0 0 11.2 0 25c0 5.5 1.8 10.5 4.8 14.7L1.7 49l9.6-3.1c4 2.6 8.7 4.1 13.8 4.1 13.8 0 25-11.2 25-25C50 11.2 38.8 0 25 0zm14.6 35.3c-.6 1.7-3 3.1-4.9 3.5-1.3.3-3 .5-8.8-1.9-7.3-3-12.1-10.5-12.4-11-.4-.5-3-4-3-7.5 0-3.6 1.8-5.3 2.6-6.1.6-.6 1.6-.9 2.6-.9h.8c.7 0 1.1.1 1.6 1.2.6 1.5 2.1 5 2.2 5.4.2.4.4.9.1 1.4-.2.5-.4.7-.8 1.1-.4.4-.7.8-1.1 1.2-.3.4-.7.8-.3 1.6.4.7 1.9 3.1 4.1 5 2.8 2.5 5.1 3.3 5.9 3.6.6.3 1.3.2 1.8-.3.6-.6 1.3-1.6 2-2.6.5-.7 1.1-.8 1.8-.5.7.2 4.2 2 5 2.4.7.4 1.2.5 1.4.9 0 .3 0 1.8-.6 3.5z"></path>
        </symbol>
        <symbol id="icon-instagram" viewBox="0 0 50 50">
            <path d="M34.4 0H15.6C7 0 0 7 0 15.6v18.8C0 43 7 50 15.6 50h18.8C43 50 50 43 50 34.4V15.6C50 7 43 0 34.4 0zm10.9 34.4c0 6-4.9 10.9-10.9 10.9H15.6c-6 0-10.9-4.9-10.9-10.9V15.6c0-6 4.9-10.9 10.9-10.9h18.8c6 0 10.9 4.9 10.9 10.9v18.8z"></path>
            <path d="M25 12.5c-6.9 0-12.5 5.6-12.5 12.5S18.1 37.5 25 37.5 37.5 31.9 37.5 25 31.9 12.5 25 12.5zm0 20.3c-4.3 0-7.8-3.5-7.8-7.8s3.5-7.8 7.8-7.8 7.8 3.5 7.8 7.8-3.5 7.8-7.8 7.8zM38.4 9.9c-.9 0-1.7.7-1.7 1.7s.7 1.7 1.7 1.7c.9 0 1.7-.7 1.7-1.7s-.7-1.7-1.7-1.7z"></path>
        </symbol>
        <symbol id="icon-vk" viewBox="0 0 50 50">
            <path d="M49.6 36.2c-.1-.2-1-2-5-5.7-4.2-3.9-3.6-3.3 1.4-10 3.1-4.1 4.3-6.6 3.9-7.7-.4-1-2.6-.8-2.6-.8h-7.5s-.6-.1-1 .2c-.4.2-.7.8-.7.8s-1.2 3.2-2.8 5.9c-3.3 5.7-4.7 6-5.2 5.6-1.3-.8-1-3.3-1-5.1 0-5.5.8-7.8-1.6-8.4-.8-.2-1.4-.3-3.5-.4-2.7 0-5 0-6.2.6-.9.4-1.5 1.4-1.1 1.4.5.1 1.6.3 2.2 1.1.8 1 .7 3.4.7 3.4s.4 6.5-1 7.3c-1 .6-2.4-.6-5.4-5.7-1.5-2.6-2.7-5.6-2.7-5.6s-.2-.5-.6-.8c-.5-.2-1.1-.3-1.1-.3H1.7s-1.1 0-1.5.5c-.4.4 0 1.3 0 1.3s5.6 13.1 11.9 19.7c5.8 6 12.4 5.7 12.4 5.7h3s.9-.1 1.4-.6c.4-.5.4-1.3.4-1.3s-.1-4 1.8-4.6c1.8-.6 4.2 3.9 6.7 5.6 1.9 1.3 3.3 1 3.3 1l6.7-.1c-.1-.1 3.4-.3 1.8-3z"></path>
        </symbol>
        <symbol id="icon-grid" viewBox="0 0 50 50">
            <circle cx="25" cy="6.9" r="6.8"></circle>
            <circle cx="43.2" cy="6.9" r="6.8"></circle>
            <circle cx="6.8" cy="25" r="6.8"></circle>
            <circle cx="25" cy="25" r="6.8"></circle>
            <circle cx="43.2" cy="25" r="6.8"></circle>
            <circle cx="6.8" cy="43.1" r="6.8"></circle>
            <circle cx="25" cy="43.1" r="6.8"></circle>
            <circle cx="6.8" cy="6.9" r="6.8"></circle>
            <circle cx="43.2" cy="43.1" r="6.8"></circle>
        </symbol>
        <symbol id="icon-decrease" viewBox="0 0 50 50">
            <path d="M16.7 37.5c0-1.2.9-2.1 2.1-2.1h12.5c1.2 0 2.1.9 2.1 2.1s-.9 2.1-2.1 2.1H18.8c-1.2 0-2.1-.9-2.1-2.1zM8.3 25c0-1.2.9-2.1 2.1-2.1h29.2c1.2 0 2.1.9 2.1 2.1s-.9 2.1-2.1 2.1H10.4c-1.1 0-2.1-.9-2.1-2.1zM0 12.5c0-1.2.9-2.1 2.1-2.1h45.8c1.2 0 2.1.9 2.1 2.1s-.9 2.1-2.1 2.1H2.1c-1.2 0-2.1-.9-2.1-2.1z"></path>
        </symbol>
        <symbol id="icon-star" viewBox="0 0 50 50">
            <path d="M49.8 19c-.1-.3-.4-.6-.7-.6L33 15.9 25.8.5c-.2-.3-.5-.5-.8-.5-.3 0-.6.2-.8.5L17 15.9.9 18.4c-.3.1-.6.3-.7.6-.1.3 0 .7.2 1L12 32 9.3 48.9c-.1.4.1.7.4.9.1.1.3.2.5.2.1 0 .3 0 .4-.1l14.4-8 14.4 8c.3.2.7.1.9-.1.3-.2.4-.6.4-.9L37.9 32l11.6-12c.3-.3.4-.6.3-1z"></path>
        </symbol>
        <symbol id="icon-minus" viewBox="0 0 9 9">
            <path d="M0 4h9v1H0z"></path>
        </symbol>
        <symbol id="icon-plus" viewBox="0 0 9 9">
            <path d="M9 4H5V0H4v4H0v1h4v4h1V5h4z"></path>
        </symbol>
        <symbol id="icon-delivery" viewBox="0 0 50 50">
            <path d="M49.9 28.7l-3.2-6.1c-.9-1.7-2.6-2.8-4.5-2.8h-6.7V9.2c0-.7-.5-1.3-1.2-1.3h-33C.5 7.9 0 8.5 0 9.2v28.4c0 .7.5 1.3 1.2 1.3h3.6c.5 1.8 2.2 3.2 4.1 3.2s3.5-1.3 4.1-3.2H36.9c.5 1.8 2.2 3.2 4.1 3.2 1.9 0 3.5-1.3 4.1-3.2h3.8c.7 0 1.2-.6 1.2-1.3v-8.3c-.1-.2-.2-.4-.2-.6zm-41 10.8c-1 0-1.8-.9-1.8-1.9 0-1.1.8-1.9 1.8-1.9s1.8.9 1.8 1.9c0 1-.8 1.9-1.8 1.9zM33 36.3H13c-.5-1.8-2.2-3.2-4.1-3.2s-3.5 1.3-4.1 3.2H2.4V10.5H33v25.8zm7.9 3.2c-1 0-1.8-.9-1.8-1.9 0-1.1.8-1.9 1.8-1.9s1.8.9 1.8 1.9c0 1-.8 1.9-1.8 1.9zm6.7-3.2H45c-.5-1.8-2.2-3.2-4.1-3.2-1.9 0-3.5 1.3-4.1 3.2h-1.4v-14h6.7c1 0 1.9.6 2.4 1.5l3 5.8v6.7z"></path>
            <path d="M14.9 21.4h8.6l-1.6 1.7c-.5.5-.5 1.3 0 1.8.2.2.5.4.9.4.3 0 .6-.1.9-.4l3.4-3.5c.7-.7.7-1.8 0-2.5l-3.4-3.5c-.5-.5-1.2-.5-1.7 0s-.5 1.3 0 1.8l1.6 1.7H15c-.7 0-1.2.6-1.2 1.3-.1.6.4 1.2 1.1 1.2zM11.9 31.5c.2.2.5.4.9.4.3 0 .6-.1.9-.4.5-.5.5-1.3 0-1.8L12.1 28h8.6c.7 0 1.2-.6 1.2-1.3s-.5-1.3-1.2-1.3h-8.6l1.6-1.7c.5-.5.5-1.3 0-1.8s-1.2-.5-1.7 0l-3.4 3.5c-.4.4-.6.8-.6 1.3s.2.9.5 1.2l3.4 3.6z"></path>
        </symbol>
        <symbol id="icon-payment" viewBox="0 0 50 50">
            <path d="M25 0C11.2 0 0 11.2 0 25s11.2 25 25 25 25-11.2 25-25S38.8 0 25 0zm0 46.8C13 46.8 3.2 37 3.2 25S13 3.2 25 3.2 46.8 13 46.8 25 37 46.8 25 46.8z"></path>
            <path d="M27.8 13.5h-8.4v11.8h-3.2v2.6h3.2V30h-3.2v2.4h3.2v4.5h3.2v-4.5h9.1V30h-9.1v-2.1h4.8c2.7 0 4.7-.7 6.1-2.1 1.4-1.4 2.1-3.1 2.1-5.1 0-2-.7-3.6-2.1-5-1.3-1.5-3.2-2.2-5.7-2.2zM31.2 24c-.8.9-2.1 1.3-4 1.3h-4.6v-8.9h5c1.5 0 2.7.4 3.5 1.2.9.8 1.3 1.8 1.3 3.1s-.4 2.4-1.2 3.3z"></path>
        </symbol>
        <symbol id="icon-support" viewBox="0 0 50 50">
            <path d="M38.3 13c0 1.5-1.1 2.4-1.9 3.1-.3.3-.9.7-.9.9 0 .7-.5 1.2-1.2 1.2s-1.2-.5-1.2-1.2c0-1.3 1-2.1 1.8-2.8.6-.5 1-.9 1-1.2 0-.7-.6-1.2-1.2-1.2-.7 0-1.2.6-1.2 1.2 0 .7-.6 1.2-1.2 1.2-.7 0-1.2-.6-1.2-1.2 0-2 1.7-3.7 3.7-3.7 1.8 0 3.5 1.6 3.5 3.7zm-4 6.4c-.7 0-1.2.6-1.2 1.2 0 .7.5 1.2 1.2 1.2s1.2-.6 1.2-1.2c0-.7-.5-1.2-1.2-1.2zM9.3 28c-.7 0-1.3.5-1.3 1.2s.6 1.2 1.2 1.2h.1c.7 0 1.2-.6 1.2-1.2 0-.7-.6-1.2-1.2-1.2zm4.3 0c-.7 0-1.2.6-1.2 1.2 0 .7.6 1.2 1.2 1.2h.1c.7 0 1.2-.6 1.2-1.2 0-.7-.6-1.2-1.2-1.2h-.1zM50 8.2v14c0 3.3-2.6 6-6 6H26.6c-.1.1-.4.3-.6.5l-.3.3-4.5 4.1c-.4.3-.9.4-1.3.2s-.8-.6-.8-1.1V19H6c-1.9 0-3.5 1.6-3.5 3.5v14C2.5 38.4 4.1 40 6 40h18c.3 0 .6.1.8.4l3.7 3.4V32c0-.7.6-1.2 1.2-1.2s1.3.5 1.3 1.2v14.6c0 .5-.3.9-.7 1.1-.2.1-.3.1-.5.1-.3 0-.6-.1-.8-.3l-5.4-5H6c-3.3 0-6-2.6-6-5.9v-14c0-3.3 2.7-6 6-6h13V8.2c0-3.3 2.7-6 6-6h19c3.4 0 6 2.7 6 6zm-2.5 0c0-1.9-1.5-3.5-3.5-3.5H25c-1.9 0-3.6 1.5-3.6 3.5v21.2l2.5-2.3.3-.3c1.1-1 1.4-1.2 2.9-1.2H44c1.9 0 3.5-1.6 3.5-3.5V8.2z"></path>
        </symbol>
        <symbol id="icon-gift" viewBox="0 0 50 50">
            <path d="M46.9 14H37c.7-.5 1.3-1 1.7-1.4 2.5-2.5 2.5-6.7 0-9.2C36.3 1 32 1 29.6 3.4c-1.4 1.4-5 6.9-4.5 10.6h-.2c.5-3.7-3.1-9.2-4.5-10.6C18 1 13.7 1 11.3 3.4c-2.5 2.5-2.5 6.7 0 9.2.4.4 1 .9 1.7 1.4H3.1C1.4 14 0 15.4 0 17.2V25c0 .9.7 1.6 1.6 1.6h1.6v18.8c0 1.7 1.4 3.1 3.1 3.1h37.5c1.7 0 3.1-1.4 3.1-3.1V26.5h1.6c.9 0 1.6-.7 1.6-1.6v-7.8c-.1-1.7-1.5-3.1-3.2-3.1zM13.5 5.6c.6-.6 1.5-1 2.4-1 .9 0 1.7.3 2.4 1 2.1 2.1 4.2 7.5 3.5 8.3 0 0-.1.1-.6.1-2.2 0-6.3-2.2-7.6-3.6-1.4-1.3-1.4-3.4-.1-4.8zm9.9 39.7H6.3V26.5h17.2v18.8zm0-21.9H3.1v-6.3h20.3v6.3zm8.4-17.8c1.3-1.3 3.5-1.3 4.7 0 1.3 1.3 1.3 3.5 0 4.8-1.3 1.4-5.5 3.6-7.6 3.6-.4 0-.6-.1-.6-.1-.7-.7 1.4-6.1 3.5-8.3zm12 39.7H26.6V26.5h17.2v18.8zm3.1-21.9H26.6v-6.3h20.3v6.3z"></path>
        </symbol>
        <symbol id="icon-login" viewBox="0 0 50 50">
            <path d="M12.8 26.4l10 10c.3.3.8.5 1.2.5.4 0 .9-.2 1.2-.5.7-.7.7-1.8 0-2.5l-7.1-7.1h28.3c1 0 1.8-.8 1.8-1.8 0-.9-.8-1.7-1.8-1.7H18.2l7.1-7.1c.7-.7.7-1.8 0-2.5s-1.8-.7-2.5 0L12.7 24.2l-.1.1-.1.1c-.1 0-.1.1-.1.1-.1 0-.1.1-.1.1-.1 0-.1 0-.1.1V25.7c.1 0 .1.1.1.1.1 0 .1.1.1.1l.1.1.1.1c.1 0 .1.1.2.3z"></path>
            <path d="M11.3 3.5h13.1c1 0 1.8-.7 1.8-1.7S25.4 0 24.4 0H11.3C6.1 0 1.8 4.3 1.8 9.5v31c0 5.2 4.3 9.5 9.5 9.5h12.8c1 0 1.8-.7 1.8-1.7s-.8-1.8-1.8-1.8H11.3c-3.3 0-6-2.7-6-6v-31c0-3.3 2.7-6 6-6z"></path>
        </symbol>
        <symbol id="icon-logout" viewBox="0 0 50 50">
            <path d="M10.5 35.5l2.2-2.2L6 26.6h22.1v-3.2H6l6.7-6.7-2.2-2.2L0 25z"></path>
            <path d="M15.6 3.1h31.2v43.8H15.6v-3.1h-3.1v4.7c0 .9.7 1.6 1.6 1.6h34.4c.9 0 1.6-.7 1.6-1.6V1.6C50 .7 49.3 0 48.4 0H14.1c-.9 0-1.6.7-1.6 1.6v4.7h3.1V3.1z"></path>
        </symbol>
        <symbol id="icon-cross" viewBox="0 0 50 50">
            <path d="M50 3L47.2.3 25 22.5 2.8.3 0 3l22.2 22.3L.6 47l2.7 2.7L25 28l21.7 21.7 2.7-2.7-21.6-21.7z"></path>
        </symbol>
        <symbol id="icon-filter" viewBox="0 0 50 50">
            <path d="M1.8 1.8C1.8.8 2.6 0 3.6 0h42.9c1 0 1.8.8 1.8 1.8v7.1c0 .4-.2.9-.5 1.2L32.1 27.5v17.2c0 .8-.5 1.5-1.2 1.7L20.2 50c-.9.3-1.9-.2-2.3-1.1-.1-.2-.1-.4-.1-.6V27.5L2.2 10.1c-.3-.3-.4-.7-.4-1.2V1.8zm3.6 1.8v4.7L21 25.6c.3.3.5.8.5 1.2v19l7.1-2.4V26.8c0-.4.2-.9.5-1.2L44.6 8.2V3.6H5.4z"></path>
        </symbol>
        <symbol id="icon-arrow-left" viewBox="0 0 50 50">
            <path d="M36.8 50l2.4-2.3L15.6 25 39.3 2.3 36.8 0 10.7 25l26.1 25z"></path>
        </symbol>
        <symbol id="icon-arrow-right" viewBox="0 0 50 50">
            <path d="M39.3 25L13.2 0l-2.4 2.3L34.4 25 10.7 47.7l2.4 2.3 26.2-25z"></path>
        </symbol>
        <symbol id="icon-arrow-down" viewBox="0 0 50 50">
            <path d="M25 39.3l25-26.1-2.3-2.4L25 34.4 2.3 10.7 0 13.1l25 26.2z"></path>
        </symbol>
        <symbol id="icon-garbage" viewBox="0 0 50 50">
            <path d="M45.8 7.2H35.4V5.5c0-3-2.5-5.5-5.5-5.5H20c-3 0-5.5 2.5-5.5 5.5v1.7H4.2c-.8 0-1.4.6-1.4 1.4S3.4 10 4.2 10h2.5v32.6c0 4.1 3.3 7.4 7.4 7.4h21.8c4.1 0 7.4-3.3 7.4-7.4V10h2.5c.8 0 1.4-.6 1.4-1.4s-.6-1.4-1.4-1.4zM17.3 5.5c0-1.5 1.2-2.7 2.7-2.7h9.9c1.5 0 2.7 1.2 2.7 2.7v1.7H17.3V5.5zm23.3 37.1c0 2.6-2.1 4.6-4.6 4.6H14.1c-2.6 0-4.6-2.1-4.6-4.6V10h31.1v32.6z"></path>
            <path d="M25 42.2c.8 0 1.4-.6 1.4-1.4V16.3c0-.8-.6-1.4-1.4-1.4-.8 0-1.4.6-1.4 1.4v24.5c0 .8.6 1.4 1.4 1.4zM15.9 40.7c.8 0 1.4-.6 1.4-1.4V17.9c0-.8-.6-1.4-1.4-1.4-.8 0-1.4.6-1.4 1.4v21.5c.1.7.7 1.3 1.4 1.3zM34.1 40.7c.8 0 1.4-.6 1.4-1.4V17.9c0-.8-.6-1.4-1.4-1.4-.8 0-1.4.6-1.4 1.4v21.5c0 .7.6 1.3 1.4 1.3z"></path>
        </symbol>
        <symbol id="icon-pencil" viewBox="0 0 50 50">
            <path d="M48.7 6L44 1.3C43.2.5 42 0 40.8 0c-1.2 0-2.3.5-3.2 1.3L4.4 34.6c-.1.1-.2.3-.2.4L0 48.7c-.1.4 0 .7.2 1 .3.2.5.3.8.3h.3L15 45.8c.2 0 .3-.1.4-.2l33.3-33.3c.8-.8 1.3-2 1.3-3.2 0-1.2-.5-2.3-1.3-3.1zM2.5 47.5l1-3.4 2.4 2.4-3.4 1zm5.6-1.7l-3.9-3.9 1.4-4.8 7.2 7.2-4.7 1.5zm6.6-2.4l-8.2-8.2 24.9-24.9 8.2 8.2-24.9 24.9zM41 17.1L32.9 9l1.9-2 8.2 8.2-2 1.9zm6.3-6.2l-2.9 2.9-8.2-8.2 2.9-2.9c.5-.4 1.1-.7 1.8-.7s1.3.3 1.8.7l4.6 4.6c.4.5.7 1.2.7 1.8 0 .7-.3 1.3-.7 1.8z"></path>
            <path d="M28.6 25.1l-.4.4c-.4.4-.4 1 0 1.4.2.2.4.3.7.3.3 0 .5-.1.7-.3l.4-.4c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0zM25.3 28.4L14 39.6c-.4.4-.4 1 0 1.4.2.2.4.3.7.3.3 0 .5-.1.7-.3l11.3-11.3c.4-.4.4-1 0-1.4-.4-.3-1-.3-1.4.1z"></path>
        </symbol>
        <symbol id="icon-card-delivery" viewBox="0 0 50 50">
            <path d="M22.2 9.5l-10 8h-8c-2.3 0-4.2 1.9-4.2 4.2v16.7c0 2.3 1.9 4.2 4.2 4.2h30c2.3 0 4.2-1.9 4.2-4.2v-7.5h2.2c5.2 0 9.5-4.3 9.5-9.5v-13c0-.5-.4-.8-.8-.8H27.9c-2-.1-4.1.6-5.7 1.9zM1.7 21.7c0-1.4 1.1-2.5 2.5-2.5H26l-3.5 3.3H1.7v-.8zm19 2.5l-1.5 1.4c-.3.3-.6.7-.8 1.1H1.7v-2.5h19zm13.5 16.6h-30c-1.4 0-2.5-1.1-2.5-2.5v-10H18c0 1 .4 2 1 2.7l.1.1c1.4 1.4 3.7 1.5 5.2.2l3.6-3h8.8v10c0 1.4-1.2 2.5-2.5 2.5zm2.5-16.7v2.6h-6.8l3-2.5h2.6c.3 0 .7-.1 1.2-.1zM48.3 9.2v12.2c0 4.3-3.5 7.8-7.8 7.8h-2.2v-5.4c3.4-.9 6.2-3.4 7.4-6.8l-1.6-.6c-1.4 3.7-4.9 6.1-8.8 6.1h-2.9c-.2 0-.4.1-.5.2l-8.7 7.4c-.9.7-2.2.7-3-.2-.4-.4-.6-1-.6-1.6 0-.6.3-1.1.7-1.5l11.9-11.2-1.1-1.2-3.3 3.1H14.9l8.4-6.7c1.3-1.1 3-1.6 4.7-1.6h20.3z"></path>
            <path d="M4.2 36.7H15v1.7H4.2zM4.2 32.5h6.7v1.7H4.2zM27.5 32.5v5c0 .5.4.8.8.8h5c.5 0 .8-.4.8-.8v-5c0-.5-.4-.8-.8-.8h-5c-.4 0-.8.3-.8.8zm5 .8v3.3h-3.3v-3.3h3.3z"></path>
        </symbol>
        <symbol id="icon-card-online" viewBox="0 0 50 50">
            <path d="M28.1 44H23c-.6 0-1 .4-1 1s.4 1 1 1h5.1c.6 0 1-.4 1-1s-.5-1-1-1z"></path>
            <path d="M45.4 16c-2 0-3.8.6-5 1.6-.1.1-.2.2-.4.3V2.6C40 1.2 38.9 0 37.4 0h-24c-1.4 0-2.6 1.2-2.6 2.6v2.7l-.1-.1c-1.6-1.6-4.3-1.6-5.9 0s-1.6 4.3 0 5.9l4.3 4.3c-2.2.6-3.5 3-2.9 5.2.2.7.6 1.3 1.1 1.8l2.5 2.5c-2.3.3-3.9 2.4-3.7 4.7.1.9.5 1.8 1.2 2.5L9 33.7c-2.3.2-4 2.3-3.7 4.6.1.9.5 1.8 1.2 2.5l4.3 4.3v2.3c0 1.4 1.2 2.6 2.6 2.6h19.2c.6 0 1-.4 1-1v-9.6c0-1.7.8-3.3 2.2-4.3l3.8-2.9c.3-.2.4-.5.4-.8v-8c0-4 2.4-5.1 4.4-5.3V49c0 .6.4 1 1 1s1-.4 1-1V17c0-.6-.4-1-1-1zm-32-14h24c.4 0 .6.3.6.6v3H12.8v-3c0-.3.3-.6.6-.6zM5.6 8.1c0-1.9 2.4-2.9 3.8-1.6L10.9 8v6.2L6.2 9.7c-.4-.4-.6-1-.6-1.6zm3.1 9.8c.8-.9 2.3-.9 3.1 0l4.5 4.5c2 2.1-1 5.1-3.1 3.1L8.7 21c-.8-.9-.8-2.3 0-3.1zm9.1 3.1l-1.1-1.1c.5-4.7 4.7-8.2 9.4-7.7 4.7.5 8.2 4.7 7.7 9.4-.5 4.7-4.7 8.2-9.4 7.7-2.3-.2-4.5-1.4-5.9-3.3.9-1.6.6-3.7-.7-5zm-9.1 6.5c.8-.9 2.3-.9 3.1 0l4.5 4.5c2 2.1-1 5.1-3.1 3.1l-4.5-4.5c-.8-.9-.8-2.3 0-3.1zm-.8 8.8c.8-.9 2.3-.9 3.1 0l4.5 4.5c2 2.1-1 5.1-3.1 3.1l-4.5-4.5c-.8-.9-.8-2.3 0-3.1zm4.9 11.1v-1c.4.1.8.2 1.2.2 2.3 0 4.2-1.9 4.2-4.2V42h13.5v6H13.4c-.3 0-.6-.3-.6-.6zm21.8-13.9c-1.9 1.4-3 3.6-3 5.9v.6H17.5c-.1-.2-.3-.4-.5-.6l-1.7-1.7c2.3-.3 3.9-2.4 3.7-4.7-.1-.9-.5-1.8-1.2-2.5L15.3 28c.6-.1 1.2-.3 1.7-.6 3.8 4.6 10.4 5.3 15 1.6s5.2-10.4 1.5-14.9-10.5-5.2-15-1.5c-1.7 1.4-3 3.4-3.5 5.6l-2.1-2.1V7.6H38v23.3l-3.4 2.6z"></path>
            <path d="M24.3 21.8H26c.8 0 1.4.7 1.4 1.5s-.6 1.4-1.4 1.4h-2.5c-.3 0-.6-.3-.5-.7 0-.6-.4-1-1-1s-1 .4-1 1v.1c0 1.4 1.1 2.6 2.5 2.6h.7v.6c0 .6.4 1 1 1s1-.4 1-1v-.6c1.9-.1 3.3-1.8 3.2-3.7a3.4 3.4 0 00-3.4-3.2h-1.7c-.8 0-1.4-.6-1.4-1.4 0-.8.6-1.4 1.4-1.4h2.5c.4 0 .5.2.6.6 0 .6.4 1 1 1s1-.4 1-1c.1-1.4-1-2.6-2.4-2.7h-.7v-.6c0-.6-.4-1-1-1s-1 .4-1 1v.7c-1.9.1-3.4 1.6-3.3 3.5 0 1.8 1.5 3.3 3.3 3.3z"></path>
        </symbol>
        <symbol id="icon-cashe-delivery" viewBox="0 0 50 50">
            <path d="M0 5.8v31.7c0 .5.4.8.8.8h2.5v2.5c0 .5.4.8.8.8h3c.6 1 1.7 1.7 2.9 1.7h12.6l9-1.5v2.4c0 .5.4.8.8.8h16.7c.5 0 .8-.4.8-.8V22.5c0-.5-.4-.8-.8-.8H26.9l-6-3V9.2c0-.5-.4-.8-.8-.8h-2.5V5.8c0-.5-.4-.8-.8-.8H.8c-.4 0-.8.4-.8.8zm33.3 17.5h15v20h-15v-20zm-14.1-1.6h-1.7v-7.5c0-.5-.4-.8-.8-.8-.5 0-.8-.4-.8-.8 0-.5-.4-.8-.8-.8H9.2c-.5 0-.8.4-.8.8 0 .5-.4.8-.8.8-.5 0-.8.4-.8.8v7.5H5V10h14.2v11.7zm-9.3-8.4h4.5c.3.7.8 1.3 1.5 1.5v6.8H8.3v-6.8c.7-.2 1.3-.8 1.6-1.5zM5 32.9l.6.3c-.2.2-.3.5-.4.8-.6 1.7.3 3.6 2 4.2-.4.5-.6 1.2-.6 1.9H5v-7.2zM3.3 25c0-.9.7-1.7 1.7-1.7h15c.5 0 .8-.4.8-.8v-2l5.5 2.7c.1.1.2.1.4.1h5v16.8l-9.2 1.5H10c-.9 0-1.7-.7-1.7-1.7 0-.9.7-1.7 1.7-1.7h1.7c.5 0 .8-.4.8-.8 0-.5-.4-.8-.8-.8H8.3c-.9 0-1.7-.7-1.7-1.7 0-.9.7-1.7 1.7-1.7H10c.5 0 .8-.4.8-.8 0-.5-.4-.8-.8-.8H6.7c-1 .1-1.7-.7-1.7-1.6 0-.9.7-1.7 1.7-1.7h1.7c.5 0 .8-.4.8-.8 0-.5-.4-.8-.8-.8H5c-.9 0-1.7-.8-1.7-1.7zm-1.6.1c0 1.1.6 2.2 1.7 2.8v8.8H1.7V25.1zm0-18.4h14.2v1.7H4.2c-.5 0-.8.4-.8.8v13c-.5.3-.9.7-1.2 1.2-.3.5-.4 1-.4 1.5V6.7z"></path>
            <path d="M41.7 38.3c0-1.8-1.5-3.3-3.3-3.3-1.8 0-3.3 1.5-3.3 3.3 0 1.8 1.5 3.3 3.3 3.3 1.8.1 3.3-1.4 3.3-3.3zm-1.7 0c0 .9-.7 1.7-1.7 1.7-.9 0-1.7-.7-1.7-1.7 0-.9.7-1.7 1.7-1.7 1 .1 1.7.8 1.7 1.7z"></path>
        </symbol>
        <symbol id="icon-bill" viewBox="0 0 50 50">
            <path d="M40 23.8H26.7c-.5 0-.8.3-.8.8v7.5c0 .5.3.8.8.8H40c.5 0 .8-.3.8-.8v-7.5c0-.5-.3-.8-.8-.8zm-.8 7.4H27.5v-5.8h11.7v5.8zM4.2 22.1h6.7c.5 0 .8-.3.8-.8s-.3-.8-.8-.8H4.2c-.5 0-.8.3-.8.8s.3.8.8.8zM20.8 20.4h-6.7c-.5 0-.8.3-.8.8s.3.8.8.8h6.7c.5 0 .8-.3.8-.8s-.3-.8-.8-.8zM15 23.8H4.2c-.5 0-.8.3-.8.8s.3.8.8.8H15c.5 0 .8-.3.8-.8s-.3-.8-.8-.8zM20.8 23.8h-2.5c-.5 0-.8.3-.8.8s.3.8.8.8h2.5c.5 0 .8-.3.8-.8s-.3-.8-.8-.8z"></path>
            <path d="M49.2 13.4c-.6-.7-1.3-1.2-2.2-1.2l-2-.2V7.9c0-1.8-1.5-3.3-3.3-3.3H3.3C1.5 4.6 0 6.1 0 7.9V34.6c0 1.5 1 2.8 2.4 3.2 0 1.7 1.2 3.1 2.9 3.3l38.5 4.3h.3c1.7 0 3.2-1.2 3.3-2.8L50 15.8c.1-.8-.2-1.7-.8-2.4zM1.7 7.9c0-.9.7-1.7 1.7-1.7h38.3c.9 0 1.7.7 1.7 1.7v.8H1.7v-.8zm0 2.5h41.7v5H1.7v-5zm1.6 25.8c-.9 0-1.7-.7-1.7-1.7V17.1h41.7v17.5c0 .9-.7 1.7-1.7 1.7H3.3v-.1zm45-20.7l-2.5 26.7c-.1.9-.9 1.6-1.8 1.5L5.6 39.4c-.8-.1-1.4-.7-1.5-1.5h37.6c1.8 0 3.3-1.5 3.3-3.3v-21l1.9.2c.4 0 .8.2 1.1.6.2.2.4.7.3 1.1z"></path>
        </symbol>
        <symbol id="icon-placemark" viewBox="0 0 50 50">
            <path d="M25 0C14.8 0 6.5 8.3 6.5 18.5c0 3.4 1.5 7 1.6 7.1.5 1.2 1.4 2.9 2.1 4l12.7 19.2c.5.8 1.3 1.2 2.1 1.2s1.6-.5 2.1-1.2l12.7-19.2c.7-1 1.6-2.8 2.1-4 .1-.2 1.6-3.8 1.6-7.1C43.5 8.3 35.2 0 25 0zm14.9 24.7c-.4 1-1.3 2.7-1.9 3.6L25.3 47.6c-.2.4-.3.4-.6 0L12 28.4c-.6-.9-1.5-2.6-1.9-3.6 0 0-1.4-3.4-1.4-6.3C8.7 9.5 16 2.2 25 2.2s16.3 7.3 16.3 16.3c0 2.9-1.4 6.2-1.4 6.2z"></path>
            <path d="M25 8.7c-5.4 0-9.8 4.4-9.8 9.8s4.4 9.8 9.8 9.8 9.8-4.4 9.8-9.8-4.4-9.8-9.8-9.8zm0 17.4c-4.2 0-7.6-3.4-7.6-7.6s3.4-7.6 7.6-7.6 7.6 3.4 7.6 7.6-3.4 7.6-7.6 7.6z"></path>
        </symbol>
        <symbol id="icon-toggler" viewBox="0 0 50 10">
            <path d="M1.9 7.1h46.2c1 0 1.9-.9 1.9-2.1s-.9-2.1-1.9-2.1H1.9C.9 2.9 0 3.8 0 5s.9 2.1 1.9 2.1z"></path>
        </symbol>
        <symbol id="icon-user" viewBox="0 0 50 50">
            <path d="M25 26c3 0 5.9-1.8 8.1-5.1 2-2.9 3.2-6.4 3.2-9.5C36.4 5.1 31.3 0 25 0S13.6 5.1 13.6 11.4c0 3.1 1.2 6.6 3.2 9.5C19.1 24.2 22 26 25 26zm0-24.1c5.2 0 9.5 4.3 9.5 9.5 0 2.7-1.1 5.9-2.9 8.5-1.9 2.7-4.3 4.3-6.6 4.3s-4.7-1.6-6.6-4.3c-1.8-2.5-2.9-5.8-2.9-8.5 0-5.3 4.3-9.5 9.5-9.5z"></path>
            <path d="M41.7 31.1c-2-3.1-4.8-5.6-8.2-7.2-.4-.2-.8-.1-1.1.2-2.2 2.2-4.8 3.4-7.5 3.4-2.6 0-5.2-1.2-7.5-3.4-.3-.3-.7-.3-1.1-.2-3.3 1.6-6.2 4.1-8.2 7.2-1.8 3.1-2.9 6.9-2.9 10.7 0 .3.1.5.3.7C10.8 47.3 17.8 50 25 50s14.2-2.7 19.5-7.5c.2-.2.3-.4.3-.7 0-3.8-1.1-7.6-3.1-10.7zM25 48.1c-6.6 0-13-2.4-18-6.8.1-3.3 1.1-6.5 2.8-9.3 1.7-2.6 4.1-4.8 6.8-6.2 2.5 2.3 5.3 3.5 8.3 3.5 3 0 5.8-1.2 8.3-3.5 2.8 1.4 5.1 3.6 6.8 6.2 1.8 2.8 2.8 6 2.8 9.3-4.8 4.4-11.2 6.8-17.8 6.8z"></path>
        </symbol>
        <symbol id="icon-user-menu" viewBox="0 0 50 50">
            <path d="M39.5 14.5C39.5 6.5 33 0 25 0S10.5 6.5 10.5 14.5c0 4.9 2.5 9.3 6.3 11.9-3.5 1.2-6.8 3.2-9.5 6C2.6 37 0 43.3 0 50h3.9c0-11.6 9.5-21.1 21.1-21.1 8 0 14.5-6.5 14.5-14.4zM25 25c-5.8 0-10.5-4.7-10.5-10.5S19.2 3.9 25 3.9s10.5 4.7 10.5 10.5S30.8 25 25 25zm6.4 13.3H50v3.9H31.4v-3.9zM50 30.5v3.9H31.4v-3.9H50zM31.4 46.1H50V50H31.4v-3.9z"></path>
        </symbol>
        <symbol id="icon-personal-data" viewBox="0 0 50 50">
            <path d="M46.1 31.3c-.7 0-1.2.6-1.2 1.2v11.1c0 2.1-1.7 3.7-3.7 3.7h-35c-2.1 0-3.7-1.7-3.7-3.7V11.2c0-2.1 1.7-3.7 3.7-3.7h11.1c.7 0 1.2-.6 1.2-1.2 0-.7-.6-1.2-1.2-1.2H6.2C2.8 4.9 0 7.7 0 11.2v32.5c0 3.4 2.8 6.2 6.2 6.2h34.9c3.4 0 6.2-2.8 6.2-6.2V32.6c.1-.7-.5-1.3-1.2-1.3z"></path>
            <path d="M48.4 3.2l-1.5-1.5c-2.2-2.2-5.7-2.2-7.9 0L16.8 24c-.2.2-.3.3-.3.5l-3 10.6c-.1.4 0 .9.3 1.2.3.3.8.4 1.2.3l10.5-2.9c.2-.1.4-.2.5-.3l22.4-22.3c2.1-2.2 2.1-5.7 0-7.9zM16.5 33.6l1.8-6.5 4.7 4.7-6.5 1.8zm8.8-3l-5.9-5.9L37.7 6.6l5.9 5.9-18.3 18.1zM46.6 9.4l-1.3 1.3-5.9-5.9 1.3-1.3c1.2-1.2 3.2-1.2 4.4 0L46.6 5c1.2 1.2 1.2 3.2 0 4.4z"></path>
        </symbol>
        <symbol id="icon-orders" viewBox="0 0 50 50">
            <path d="M10.9 1.6H1.6C.7 1.6 0 2.3 0 3.1v9.4c0 .9.7 1.6 1.6 1.6H11c.9 0 1.6-.7 1.6-1.6V3.1c-.1-.8-.8-1.5-1.7-1.5zm-1.5 9.3H3.1V4.7h6.3v6.2zM10.9 18.8H1.6c-.9 0-1.6.7-1.6 1.6v9.4c0 .9.7 1.6 1.6 1.6H11c.9 0 1.6-.7 1.6-1.6v-9.4c-.1-1-.8-1.6-1.7-1.6zm-1.5 9.3H3.1v-6.3h6.3v6.3zM10.9 35.9H1.6c-.9 0-1.6.7-1.6 1.6v9.4c0 .9.7 1.6 1.6 1.6H11c.9 0 1.6-.7 1.6-1.6v-9.4c-.1-.9-.8-1.6-1.7-1.6zm-1.5 9.4H3.1V39h6.3v6.3zM18.8 3.1h9.4v3.1h-9.4zM18.8 9.4h31.3v3.1H18.8zM18.8 20.3h9.4v3.1h-9.4zM18.8 26.6h31.3v3.1H18.8zM18.8 37.5h9.4v3.1h-9.4zM18.8 43.8h31.3v3.1H18.8z"></path>
        </symbol>
        <symbol id="icon-play" viewBox="0 0 50 50">
            <path d="M25 0C11.2 0 0 11.2 0 25s11.2 25 25 25 25-11.2 25-25S38.8 0 25 0zm0 46.5C13.1 46.5 3.5 36.9 3.5 25S13.1 3.5 25 3.5 46.5 13.1 46.5 25 36.9 46.5 25 46.5z"></path>
            <path d="M38.4 23.5L20.4 12c-.5-.3-1.2-.4-1.8-.1-.6.3-.9.9-.9 1.5v23c0 .6.3 1.2.9 1.5.3.1.6.2.8.2.3 0 .7-.1.9-.3l17.9-11.5c.5-.3.8-.9.8-1.5.2-.4-.1-1-.6-1.3zm-17.2 9.8V16.7l13 8.3-13 8.3z"></path>
        </symbol>
        <symbol id="icon-player" viewBox="0 0 50 36.7">
            <path fill="#FFF" d="M13.8 5h24.5v27.3H13.8z"></path>
            <path d="M42.5 0h-35C3.4 0 0 3.4 0 7.5v21.8c0 4.1 3.4 7.5 7.5 7.5h35c4.1 0 7.5-3.4 7.5-7.5V7.5C50 3.4 46.6 0 42.5 0zm-7.6 19c-.1.2-.2.3-.4.4L20 28c-.6.4-1.4.1-1.7-.4-.1-.2-.2-.4-.2-.6V9.8c0-.7.6-1.2 1.2-1.2.2 0 .4.1.6.2l14.5 8.6c.6.3.9 1.1.5 1.6z"></path>
        </symbol>
        <symbol id="icon-movie" viewBox="0 0 50 41.8">
            <path d="M0 0v41.8h50V0H0zm2.6 6.5V2.6h3.9v3.9H2.6zm0 6.6V9.2h3.9v3.9H2.6zm0 6.5v-3.9h3.9v3.9H2.6zm0 6.5v-3.9h3.9v3.9H2.6zm0 6.6v-3.9h3.9v3.9H2.6zm0 6.5v-3.9h3.9v3.9H2.6zm6.6 0V2.6h31.7v36.6H9.2zM43.5 6.5V2.6h3.9v3.9h-3.9zm0 6.6V9.2h3.9v3.9h-3.9zm0 6.5v-3.9h3.9v3.9h-3.9zm0 6.5v-3.9h3.9v3.9h-3.9zm0 6.6v-3.9h3.9v3.9h-3.9zm0 6.5v-3.9h3.9v3.9h-3.9z"></path>
            <path d="M32.6 19.8l-11.4-6.5c-.3-.2-.7-.2-1-.1s-.6.3-.8.6c-.1.2-.2.4-.2.7v13.1c0 .5.3.9.7 1.1.2.1.4.2.7.2s.5-.1.7-.2l11.4-6.5c.6-.4.8-1.2.5-1.8-.2-.4-.4-.5-.6-.6zm-3.3 1.1l-7.5 4.3v-8.6l7.5 4.3z"></path>
        </symbol>
        <symbol id="icon-messenger" viewBox="0 0 50 50">
            <path d="M25 0C11.2 0 0 11.2 0 25c0 4.4 1.1 8.7 3.3 12.4l-3.2 10c-.2.7 0 1.5.5 2s1.3.7 2 .5l10-3.2c3.7 2.2 8 3.3 12.4 3.3 13.8 0 25-11.2 25-25S38.8 0 25 0zm0 46.1c-4 0-7.8-1.1-11.2-3.2-.5-.3-1.1-.4-1.6-.2L5 45l2.3-7.2c.2-.5.1-1.1-.2-1.6C5 32.8 3.9 29 3.9 25 3.9 13.4 13.4 3.9 25 3.9S46.1 13.4 46.1 25 36.6 46.1 25 46.1zM27.4 25c0 1.3-1.1 2.4-2.4 2.4s-2.4-1.1-2.4-2.4c0-1.3 1.1-2.4 2.4-2.4s2.4 1.1 2.4 2.4zm9.8 0c0 1.3-1.1 2.4-2.4 2.4s-2.4-1.1-2.4-2.4c0-1.3 1.1-2.4 2.4-2.4s2.4 1.1 2.4 2.4zm-19.5 0c0 1.3-1.1 2.4-2.4 2.4-1.3 0-2.4-1.1-2.4-2.4 0-1.3 1.1-2.4 2.4-2.4 1.3 0 2.4 1.1 2.4 2.4z"></path>
        </symbol>
        <symbol id="icon-send" viewBox="0 0 50 50">
            <path d="M3.5 48.3c-1.1 0-2.1-.5-2.7-1.3-1-1.2-1-3-.1-4.3L14 25 .7 7.3C-.3 6-.2 4.2.8 3c1-1.2 2.7-1.6 4.2-1l43 19.8c1.2.6 2 1.8 2 3.2 0 1.4-.8 2.6-2 3.2L5 48c-.5.2-1 .3-1.5.3zm.6-42.6L18.6 25 4.1 44.4 46 25 4.1 5.7z"></path>
        </symbol>
        <symbol id="icon-send-fill" viewBox="0 0 50 50">
            <path d="M49 23.4L2.5 1.9c-.7-.3-1.6-.1-2.1.5s-.5 1.5 0 2.2L15.6 25 .4 45.4c-.5.7-.5 1.6 0 2.2.3.4.9.7 1.4.7.3 0 .5-.1.7-.2L49 26.6c.6-.3 1-.9 1-1.6s-.4-1.3-1-1.6z"></path>
        </symbol>
        <symbol id="icon-ms-user" viewBox="0 0 50 50">
            <circle cx="25" cy="14" r="11.9"></circle>
            <path d="M45.4 35.4c-.3-.8-.7-1.5-1.2-2.2-2.4-3.5-6.1-5.9-10.2-6.4-.5-.1-1.1.1-1.5.4-2.2 1.6-4.8 2.4-7.5 2.4s-5.3-.8-7.5-2.4c-.4-.3-1-.5-1.5-.4-4.2.6-7.9 2.9-10.2 6.4-.5.7-.9 1.5-1.2 2.2-.2.3-.1.7.1 1 .4.7.9 1.5 1.4 2.1.7 1 1.5 1.9 2.4 2.7.7.7 1.6 1.4 2.4 2.1C15 46.4 19.9 48 25 48s10-1.6 14.1-4.7c.8-.6 1.7-1.4 2.4-2.1.8-.8 1.7-1.7 2.4-2.7.5-.7 1-1.4 1.4-2.1.2-.3.3-.7.1-1z"></path>
        </symbol>
        <symbol id="icon-ms-operator" viewBox="0 0 50 50">
            <path d="M11.7 20.3c.9 3.3 3 6.2 5.9 8.1 0 .6.5 1.2 1.2 1.5.9.5 2 .3 2.3-.3.4-.7-.1-1.6-1.1-2.1-.6-.3-1.2-.3-1.7-.2-2.6-1.6-4.5-4.1-5.3-7 .9-.3 1.5-1.1 1.5-2v-.9C15.7 23.2 20 28.6 25 28.6s9.3-5.4 10.4-11.1v.9c0 1.2.9 2.1 2.1 2.1 1.2 0 2.1-.9 2.1-2.1V14c0-.7-.4-1.4-1-1.8C37.9 5.3 32.1 0 25 0S12.1 5.3 11.3 12.2c-.6.4-1 1-1 1.8v4.4c.1.9.6 1.6 1.4 1.9zM25 1.4c6.2 0 11.4 4.6 12.3 10.5-.7.1-1.3.5-1.6 1.1-.6-5.9-5.2-9-10.7-9s-10 3.1-10.7 9c-.2-.4-.6-.8-1.1-1l-.3-.3h-.2C13.8 5.8 18.9 1.4 25 1.4z"></path>
            <path d="M45.5 38.2c-.7-2.5-2.8-5.1-5.3-6.3l-7-3.3-4.6 9.6-2.2-6.2c-.4 0-.9.2-1.4.2-.5 0-1-.1-1.4-.2l-2.4 6.5-4.7-9.8-6.8 3.2c-2.5 1.2-4.6 3.9-5.3 6.4.2.3.3.6.5.9.3.4.6.9.9 1.3.7 1 1.5 1.9 2.4 2.7.7.7 1.6 1.4 2.4 2.1C14.8 48.4 19.8 50 25 50s10.1-1.6 14.3-4.7c.8-.6 1.7-1.4 2.4-2.1.8-.8 1.7-1.7 2.4-2.7.3-.4.5-.8.8-1.2.2-.4.4-.7.6-1.1z"></path>
        </symbol>
    </svg>

    
    <svg style="display: none" xmlns="http://www.w3.org/2000/svg">
        <symbol id="icon-cashier" viewBox="0 0 50 50">
            <path d="M47.462 38.013h-.054V16.361c0-1.399-1.138-2.538-2.538-2.538h-5.238v-3.564h5.238c1.399 0 2.538-1.138 2.538-2.538V2.538C47.408 1.138 46.27 0 44.87 0H29.32c-1.399 0-2.538 1.138-2.538 2.538v5.184c0 1.399 1.138 2.538 2.538 2.538h5.238v3.564H20.626V6.857c0-.272-.137-.526-.364-.676-.227-.15-.515-.176-.765-.068l-1.696.727-1.697-.727c-.204-.087-.434-.087-.638 0l-1.697.727-1.697-.727c-.204-.087-.434-.087-.638 0l-1.697.727-1.697-.727c-.25-.107-.537-.082-.764.068-.227.15-.364.404-.364.676v6.966H5.13c-1.399 0-2.538 1.138-2.538 2.538v21.652h-.054c-.923 0-1.674.751-1.674 1.674v8.639c0 .923.751 1.674 1.674 1.674h44.924c.923 0 1.674-.751 1.674-1.674v-8.639c0-.923-.751-1.674-1.674-1.674zM29.32 8.639c-.506 0-.918-.412-.918-.918V2.538c0-.506.412-.918.918-.918h15.55c.506 0 .918.412.918.918v5.184c0 .506-.412.918-.918.918H29.32zm8.693 1.62v3.564h-1.836v-3.564h1.836zM8.531 8.086l.887.38c.204.087.434.087.638 0l1.697-.727 1.697.727c.204.087.434.087.638 0l1.697-.727 1.697.727c.204.087.434.087.638 0l.887-.38v10.921H8.531V8.086zm38.985 40.24c0 .03-.024.054-.054.054H2.538c-.03 0-.054-.024-.054-.054v-8.639c0-.03.024-.054.054-.054H37.96c.447 0 .81-.363.81-.81 0-.447-.363-.81-.81-.81H4.212V16.361c0-.506.412-.918.918-.918h1.782v3.564h-.055c-.447 0-.81.363-.81.81 0 .447.363.81.81.81H20.68c.447 0 .81-.363.81-.81 0-.447-.363-.81-.81-.81h-.054v-3.564H44.87c.506 0 .918.412.918.918v21.652h-4.374c-.447 0-.81.363-.81.81 0 .447.363.81.81.81h6.048c.03 0 .054.024.054.054v8.639z"></path>
            <path d="M25 41.469c-1.399 0-2.538 1.138-2.538 2.538 0 1.399 1.138 2.538 2.538 2.538 1.399 0 2.538-1.138 2.538-2.538S26.399 41.469 25 41.469zm0 3.455c-.506 0-.918-.412-.918-.918s.412-.918.918-.918.918.412.918.918-.412.918-.918.918zM16.361 15.551h-5.184c-.447 0-.81.363-.81.81 0 .447.363.81.81.81h5.184c.447 0 .81-.363.81-.81 0-.448-.363-.81-.81-.81zM16.361 12.095h-.863c-.447 0-.81.363-.81.81 0 .447.363.81.81.81h.863c.447 0 .81-.363.81-.81 0-.447-.363-.81-.81-.81zM11.177 13.715h.864c.447 0 .81-.363.81-.81 0-.447-.363-.81-.81-.81h-.864c-.447 0-.81.363-.81.81 0 .447.363.81.81.81zM43.952 21.544v-2.592c0-.923-.751-1.674-1.674-1.674h-.864c-.447 0-.81.363-.81.81 0 .447.363.81.81.81h.864c.03 0 .054.024.054.054v2.592c0 .03-.024.054-.054.054H25.864c-.03 0-.054-.024-.054-.054v-2.592c0-.03.024-.054.054-.054h12.095c.447 0 .81-.363.81-.81 0-.447-.363-.81-.81-.81H25.864c-.923 0-1.674.751-1.674 1.674v2.592c0 .923.751 1.674 1.674 1.674h16.415c.923 0 1.673-.751 1.673-1.674zM27.592 25.054h-.864c-1.399 0-2.538 1.138-2.538 2.538 0 1.399 1.138 2.538 2.538 2.538h.864c1.399 0 2.538-1.138 2.538-2.538 0-1.399-1.139-2.538-2.538-2.538zm0 3.456h-.864c-.506 0-.918-.412-.918-.918s.412-.918.918-.918h.864c.506 0 .918.412.918.918s-.412.918-.918.918zM34.503 25.054h-.864c-1.399 0-2.538 1.138-2.538 2.538 0 1.399 1.138 2.538 2.538 2.538h.864c1.399 0 2.538-1.138 2.538-2.538 0-1.399-1.138-2.538-2.538-2.538zm0 3.456h-.864c-.506 0-.918-.412-.918-.918s.412-.918.918-.918h.864c.506 0 .918.412.918.918s-.412.918-.918.918zM41.415 25.054h-.864c-1.399 0-2.538 1.138-2.538 2.538 0 1.399 1.138 2.538 2.538 2.538h.864c1.399 0 2.538-1.138 2.538-2.538-.001-1.399-1.139-2.538-2.538-2.538zm0 3.456h-.864c-.506 0-.918-.412-.918-.918s.412-.918.918-.918h.864c.506 0 .918.412.918.918s-.412.918-.918.918zM27.592 31.102h-.864c-1.399 0-2.538 1.138-2.538 2.538 0 1.399 1.138 2.538 2.538 2.538h.864c1.399 0 2.538-1.138 2.538-2.538s-1.139-2.538-2.538-2.538zm0 3.455h-.864c-.506 0-.918-.412-.918-.918s.412-.918.918-.918h.864c.506 0 .918.412.918.918 0 .507-.412.918-.918.918zM18.089 25.054h-.864c-1.399 0-2.538 1.138-2.538 2.538 0 1.399 1.138 2.538 2.538 2.538h.864c1.399 0 2.538-1.138 2.538-2.538-.001-1.399-1.139-2.538-2.538-2.538zm0 3.456h-.864c-.506 0-.918-.412-.918-.918s.412-.918.918-.918h.864c.506 0 .918.412.918.918s-.412.918-.918.918zM18.089 31.102h-.864c-1.399 0-2.538 1.138-2.538 2.538 0 1.399 1.138 2.538 2.538 2.538h.864c1.399 0 2.538-1.138 2.538-2.538-.001-1.4-1.139-2.538-2.538-2.538zm0 3.455h-.864c-.506 0-.918-.412-.918-.918s.412-.918.918-.918h.864c.506 0 .918.412.918.918 0 .507-.412.918-.918.918zM11.177 25.054h-.864c-1.399 0-2.538 1.138-2.538 2.538 0 1.399 1.138 2.538 2.538 2.538h.864c1.399 0 2.538-1.138 2.538-2.538 0-1.399-1.139-2.538-2.538-2.538zm0 3.456h-.864c-.506 0-.918-.412-.918-.918s.412-.918.918-.918h.864c.506 0 .918.412.918.918s-.412.918-.918.918zM11.177 31.102h-.864c-1.399 0-2.538 1.138-2.538 2.538 0 1.399 1.138 2.538 2.538 2.538h.864c1.399 0 2.538-1.138 2.538-2.538s-1.139-2.538-2.538-2.538zm0 3.455h-.864c-.506 0-.918-.412-.918-.918s.412-.918.918-.918h.864c.506 0 .918.412.918.918 0 .507-.412.918-.918.918zM34.503 31.102h-.864c-1.399 0-2.538 1.138-2.538 2.538 0 1.399 1.138 2.538 2.538 2.538h.864c1.399 0 2.538-1.138 2.538-2.538s-1.138-2.538-2.538-2.538zm0 3.455h-.864c-.506 0-.918-.412-.918-.918s.412-.918.918-.918h.864c.506 0 .918.412.918.918 0 .507-.412.918-.918.918zM43.952 33.639c0-1.399-1.138-2.538-2.538-2.538h-.864c-1.399 0-2.538 1.138-2.538 2.538 0 1.399 1.138 2.538 2.538 2.538h.864c1.4 0 2.538-1.138 2.538-2.538zm-4.319 0c0-.506.412-.918.918-.918h.864c.506 0 .918.412.918.918s-.412.918-.918.918h-.864c-.506 0-.918-.412-.918-.918zM32.775 4.32h-1.728c-.447 0-.81.363-.81.81 0 .447.363.81.81.81h1.728c.447 0 .81-.363.81-.81 0-.448-.362-.81-.81-.81zM43.143 4.32h-1.728c-.447 0-.81.363-.81.81 0 .447.363.81.81.81h1.728c.447 0 .81-.363.81-.81-.001-.448-.363-.81-.81-.81zM37.959 4.32h-1.728c-.447 0-.81.363-.81.81 0 .447.363.81.81.81h1.728c.447 0 .81-.363.81-.81 0-.448-.363-.81-.81-.81z"></path>
        </symbol>
        <symbol id="icon-supply" viewBox="0 0 50 50">
            <path d="M30 9.167c0-2.761-2.239-5-5-5s-5 2.239-5 5 2.239 5 5 5c2.76-.003 4.997-2.24 5-5zm-8.333 0c0-1.841 1.492-3.333 3.333-3.333 1.841 0 3.333 1.492 3.333 3.333S26.841 12.5 25 12.5c-1.84-.002-3.331-1.493-3.333-3.333z"></path>
            <path d="M24.522 23.183c.287.201.669.201.956 0 1.583-1.166 3.031-2.504 4.318-3.99 2.86-3.289 4.371-6.755 4.371-10.026C34.167 4.104 30.063 0 25 0s-9.167 4.104-9.167 9.167c0 3.271 1.512 6.737 4.371 10.026 1.287 1.486 2.735 2.824 4.318 3.99zM25 1.667c4.14.005 7.495 3.36 7.5 7.5 0 5.963-5.779 10.94-7.5 12.29-1.723-1.348-7.5-6.316-7.5-12.29.005-4.141 3.36-7.496 7.5-7.5zM13.93 43.29l.49-1.593 1.667.513-.49 1.593-1.667-.513zM17.263 44.312l.49-1.593 1.667.513-.49 1.593-1.667-.513zM20.597 45.34l.49-1.593 1.667.513-.49 1.593-1.667-.513z"></path>
            <path d="M46.912 19.204l-12.5-3.846-.49 1.593L43.833 20 25 25.795 6.167 20l9.911-3.05-.49-1.593-12.5 3.846c-.35.108-.588.431-.588.797v22.5c0 .366.239.689.588.796l21.667 6.667c.16.049.331.049.49 0l21.667-6.667c.35-.108.588-.431.588-.796V20c0-.366-.239-.689-.588-.796zM4.167 21.128l20 6.154v20.756l-20-6.154V21.128zm21.666 26.91V27.282l20-6.154v20.756l-20 6.154z"></path>
            <path d="M35.594 41.715l1.667-.513.49 1.593-1.667.513-.49-1.593zM38.926 40.692l1.667-.513.49 1.593-1.667.513-.49-1.593zM42.262 39.664l1.667-.513.49 1.593-1.667.513-.49-1.593zM18.333 33.654c.46 0 .833-.373.833-.833v-4.167c0-.366-.239-.689-.588-.796l-8.333-2.564c-.44-.135-.906.111-1.042.551-.024.079-.037.162-.037.245v4.167c0 .366.239.689.588.796l8.333 2.564c.081.024.163.037.246.037zm-.833-1.962l-6.667-2.051v-2.423l6.667 2.051v2.423zM40.833 30.256V26.09c0-.46-.373-.833-.833-.833-.083 0-.166.012-.245.037l-8.333 2.564c-.35.108-.588.431-.588.796v4.167c0 .46.373.833.833.833.083 0 .166-.012.245-.037l8.333-2.564c.35-.108.588-.431.588-.797zm-1.666-.615L32.5 31.692v-2.423l6.667-2.051v2.423z"></path>
        </symbol>
        <symbol id="icon-payment-online" viewBox="0 0 50 50">
            <path d="M47.501.011H24.178C22.8.015 21.683 1.132 21.679 2.51v12.103c-5.737-4.612-14.126-3.7-18.738 2.037s-3.7 14.126 2.037 18.738c4.877 3.921 11.824 3.921 16.701 0v12.103c.004 1.378 1.121 2.495 2.499 2.499h23.323c1.378-.004 2.495-1.121 2.499-2.499V2.51C49.996 1.132 48.879.015 47.501.011zm-3.565 1.666l-.416 1.666H28.16l-.416-1.666h16.192zM13.349 36.662C6.908 36.662 1.687 31.441 1.687 25s5.221-11.662 11.662-11.662S25.011 18.559 25.011 25c-.007 6.438-5.224 11.656-11.662 11.662zm34.985 10.829c0 .46-.373.833-.833.833H24.178c-.46 0-.833-.373-.833-.833V33.789c4.442-5.016 4.442-12.559 0-17.576V2.51c0-.46.373-.833.833-.833h1.849l.675 2.699c.092.372.425.633.808.633h16.66c.383 0 .716-.261.808-.633l.675-2.699h1.849c.46 0 .833.373.833.833v44.981z"></path>
            <path d="M19.18 2.51H8.351V.844C8.352.384 7.979.01 7.519.01c-.195 0-.384.068-.534.193L1.987 4.368c-.354.294-.403.819-.11 1.173.033.04.07.077.11.11l4.998 4.165c.15.124.338.192.533.192.121 0 .24-.026.35-.075.295-.137.484-.433.483-.758V7.508H19.18c.46 0 .833-.373.833-.833V3.343c0-.46-.373-.833-.833-.833zm-.833 3.332H7.518c-.46 0-.833.373-.833.833V7.4L3.82 5.009l2.865-2.391v.725c0 .46.373.833.833.833h10.829v1.666zM19.713 44.351l-4.998-4.165c-.353-.294-.879-.247-1.173.107-.125.15-.193.339-.193.534v1.666H2.52c-.46 0-.833.373-.833.833v3.332c0 .46.373.833.833.833h10.829v1.666c-.001.325.188.621.483.758.11.049.229.075.35.075.195 0 .383-.067.533-.192l4.998-4.165c.354-.294.403-.819.11-1.173-.033-.039-.07-.076-.11-.109zm-4.698 3.032v-.725c0-.46-.373-.833-.833-.833H3.353v-1.666h10.829c.46 0 .833-.373.833-.833v-.725l2.865 2.391-2.865 2.391zM13.349 20.836c.92 0 1.666.746 1.666 1.666h1.666c-.006-1.515-1.032-2.835-2.499-3.214v-1.784h-1.666v1.784c-1.779.458-2.849 2.271-2.391 4.049.379 1.471 1.706 2.498 3.224 2.496.92 0 1.666.746 1.666 1.666 0 .92-.746 1.666-1.666 1.666-.92 0-1.666-.746-1.666-1.666h-1.666c.006 1.515 1.032 2.835 2.499 3.214v1.784h1.666v-1.784c1.779-.458 2.849-2.271 2.391-4.049-.379-1.471-1.706-2.498-3.224-2.496-.92 0-1.666-.746-1.666-1.666 0-.92.746-1.666 1.666-1.666zM6.281 17.933c-3.897 3.906-3.897 10.23 0 14.136l1.178-1.178c-3.248-3.255-3.248-8.525 0-11.78l-1.178-1.178zM20.417 17.933l-1.178 1.178c3.248 3.255 3.248 8.525 0 11.78l1.178 1.178c3.897-3.906 3.897-10.23 0-14.136zM41.998 20.07l-5.831-2.499c-.21-.089-.447-.089-.656 0L29.68 20.07c-.306.131-.505.432-.505.766v2.928c-.004 1.547.611 3.032 1.708 4.123l4.367 4.366c.325.325.853.325 1.178 0l4.367-4.366c1.097-1.091 1.712-2.576 1.708-4.123v-2.928c0-.333-.198-.634-.505-.766zm-1.161 3.694c.003 1.105-.436 2.166-1.219 2.945l-3.778 3.778-3.778-3.778c-.784-.78-1.223-1.84-1.22-2.945v-2.379l4.998-2.142 4.998 2.142v2.379z"></path>
            <path d="M34.762 23.579l-1.178 1.178 1.666 1.666c.325.325.853.325 1.178 0l3.332-3.332-1.178-1.178-2.743 2.743-1.077-1.077z"></path>
        </symbol>
        <symbol id="icon-promotion" viewBox="0 0 50 50">
            <path d="M49.2 43.3h-1.7v-1.7h-1.7v1.7h-1.7v-1.7h-1.7v1.7H30.1c-.9 0-1.7.5-2.1 1.3-.1.2-.3.4-.6.4h-4.8c-.3 0-.5-.1-.6-.4-.4-.8-1.2-1.3-2.1-1.3H7.5v-15H5.8v15H4.2v-15H2.5v15H.8c-.5 0-.8.4-.8.8v2.5C0 48.5 1.5 50 3.3 50h43.3c1.8 0 3.3-1.5 3.3-3.3v-2.5c.1-.5-.3-.9-.7-.9zm-.9 3.3c0 .9-.7 1.7-1.7 1.7H3.3c-.9 0-1.7-.7-1.7-1.7V45h18.2c.3 0 .5.1.6.4.4.8 1.2 1.3 2.1 1.3h4.8c.9 0 1.7-.5 2.1-1.3.1-.2.3-.4.6-.4h18.2v1.6zM4.2 15.8c0-1.4 1.1-2.5 2.5-2.5h15v-1.7h-15c-2.3 0-4.2 1.9-4.2 4.2v.8h1.7v-.8z"></path>
            <path d="M23.3 15H7.5c-.9 0-1.7.7-1.7 1.7h17.5V15zM26 16.2l-1 3.2c-.1.2 0 .5.1.7s.3.3.5.4l3.2.7.7 3.2c0 .2.2.4.4.5.2.1.4.1.7.1l3.2-1 2.2 2.4c.2.2.4.3.6.3.2 0 .5-.1.6-.3l2.2-2.4 3.2 1c.2.1.5 0 .7-.1.2-.1.3-.3.4-.5l.7-3.2 3.2-.7c.2 0 .4-.2.5-.4.1-.2.1-.4.1-.7l-1-3.2 2.4-2.2c.2-.2.3-.4.3-.6 0-.2-.1-.5-.3-.6l-2.5-2.2 1-3.2c.1-.2 0-.5-.1-.7-.1-.2-.3-.3-.5-.4l-3.2-.7-.7-3.2c0-.2-.2-.4-.4-.5-.2-.1-.4-.1-.7-.1l-3.2 1L37.1.4c0-.3-.2-.4-.4-.4s-.5.1-.6.3l-2.2 2.4-3.2-1c-.2-.1-.5 0-.7.1-.2.1-.3.3-.4.5l-.7 3.2-3.2.7c-.2.1-.4.2-.5.4-.2.3-.2.5-.2.7l1 3.2-2.4 2.2c-.2.2-.3.4-.3.6 0 .2.1.5.3.6l2.4 2.3zm1.6-4.9c.2-.2.3-.6.2-.9l-.9-2.8 2.9-.6c.3-.1.6-.3.6-.6l.6-2.8 2.8.9c.3.1.7 0 .9-.2l2-2.2 2 2.2c.2.2.6.3.9.2l2.8-.9.6 2.9c0 .2.2.5.6.6l2.9.6-.9 2.8c-.1.3 0 .6.2.9l2.2 2-2.2 2c-.2.2-.3.6-.2.9l.9 2.8-2.9.6c-.3.1-.6.3-.6.6l-.6 2.9-2.8-.9c-.3-.1-.6 0-.9.2l-2 2.2-2-2.2c-.2-.2-.4-.3-.6-.3h-.3l-2.8.9-.6-2.9c-.1-.3-.3-.6-.6-.6l-2.9-.6.9-2.8c.1-.3 0-.6-.2-.9l-2.2-2 2.2-2z"></path>
            <path d="M31.93643 16.88377l8.34378-8.34378 1.20207 1.20207-8.34378 8.34378zM32.5 13.3c1.4 0 2.5-1.1 2.5-2.5s-1.1-2.5-2.5-2.5S30 9.4 30 10.8s1.1 2.5 2.5 2.5zm0-3.3c.5 0 .8.4.8.8s-.4.8-.8.8-.8-.4-.8-.8.3-.8.8-.8zM38.3 15.8c0 1.4 1.1 2.5 2.5 2.5s2.5-1.1 2.5-2.5-1.1-2.5-2.5-2.5-2.5 1.1-2.5 2.5zm3.4 0c0 .5-.4.8-.8.8s-.9-.3-.9-.8.4-.8.8-.8.9.4.9.8zM25.8 36.6c.3 0 .5-.1.7-.3.2-.2.2-.5.1-.8l-4.4-12.7c-.1-.3-.3-.5-.6-.5-.3-.1-.6 0-.8.2l-8.1 8-2 1.2c-1.3.8-1.9 2.3-1.4 3.8.4 1.2 1.4 2 2.6 2.2l1.7 3.5c.1.3.4.5.8.5h3.3c.3 0 .5-.1.7-.4s.2-.5.1-.8l-1.7-4 9 .1zm-12.7-.7c-.4.2-.9.2-1.3 0s-.7-.5-.9-.9c-.2-.7.1-1.5.7-1.8l1.3-.8 1.5 2.9-1.3.6zM15 40l-1.3-2.5c.1 0 .1 0 .2-.1l1.2-.6 1.4 3.2H15zm1-5.2l-1.7-3.4 6.8-6.8L24.7 35l-8.7-.2zM26.00412 28.51124l2.73934-.95207.55811 1.60582-2.73934.95207zM23.82138 22.99904l1.86921-1.94832 1.22672 1.17691-1.86921 1.94832zM28.3 34.2h2.5v1.7h-2.5zM49.2 28.3h-1.7v-5.8h-1.7v5.8h-1.7v-1.7h-1.7v1.7h-9.2c-.5 0-.8.4-.8.8v10c0 .5.4.8.8.8H49c.5 0 .8-.4.8-.8v-10c.2-.4-.2-.8-.6-.8zm-.9 10H34.2V30h14.2l-.1 8.3z"></path>
            <path d="M35.8 31.6h3.3v1.7h-3.3zM40.8 31.6h5.8v1.7h-5.8zM35.8 35h10.8v1.7H35.8zM.8 26.7h12.5c.5 0 .8-.4.8-.8v-6.7c0-.5-.4-.8-.8-.8H.8c-.5 0-.8.4-.8.8v6.7c0 .4.4.8.8.8zm.9-6.7h10.8v5H1.7v-5z"></path>
            <path d="M3.3 21.7H5v1.7H3.3zM6.7 21.7h4.2v1.7H6.7z"></path>
        </symbol>
        <symbol id="icon-server" viewBox="0 0 50 50">
            <path d="M5.8 16.7c-1.4 0-2.5 1.1-2.5 2.5s1.1 2.5 2.5 2.5 2.5-1.1 2.5-2.5-1.1-2.5-2.5-2.5zm0 3.3c-.4 0-.8-.4-.8-.8s.4-.8.8-.8.8.4.8.8c.1.4-.3.8-.8.8zM12.5 16.7c-1.4 0-2.5 1.1-2.5 2.5s1.1 2.5 2.5 2.5 2.5-1.1 2.5-2.5-1.1-2.5-2.5-2.5zm0 3.3c-.5 0-.8-.4-.8-.8 0-.5.4-.8.8-.8s.8.4.8.8-.3.8-.8.8zM23.3 16.7h8.3v1.7h-8.3v-1.7zM23.3 20h8.3v1.7h-8.3V20zM5.8 3.3c-1.4 0-2.5 1.1-2.5 2.5s1.1 2.5 2.5 2.5 2.5-1.1 2.5-2.5-1.1-2.5-2.5-2.5zm0 3.4c-.4 0-.8-.4-.8-.9s.4-.8.8-.8.8.4.8.8-.3.9-.8.9zM12.5 3.3c-1.4 0-2.5 1.1-2.5 2.5s1.1 2.5 2.5 2.5S15 7.2 15 5.8s-1.1-2.5-2.5-2.5zm0 3.4c-.5 0-.8-.4-.8-.8s.3-.9.8-.9.8.4.8.8-.3.9-.8.9zM20.8 16.7h-3.3c-.5 0-.8.4-.8.8v3.3c0 .5.4.8.8.8h3.3c.5 0 .8-.4.8-.8v-3.3c.1-.5-.3-.8-.8-.8zM20 20h-1.7v-1.7H20V20zM20.8 3.3h-3.3c-.5 0-.8.4-.8.8v3.3c0 .5.4.8.8.8h3.3c.5 0 .8-.4.8-.8V4.2c.1-.5-.3-.9-.8-.9zM20 6.7h-1.7V5H20v1.7zM23.3 3.3h8.3V5h-8.3V3.3zM23.3 6.7h8.3v1.7h-8.3V6.7zM5.8 30c-1.4 0-2.5 1.1-2.5 2.5S4.5 35 5.8 35s2.5-1.1 2.5-2.5S7.2 30 5.8 30zm0 3.3c-.4 0-.8-.3-.8-.8s.4-.8.8-.8.8.4.8.8c.1.5-.3.8-.8.8zM12.5 30c-1.4 0-2.5 1.1-2.5 2.5s1.1 2.5 2.5 2.5 2.5-1.1 2.5-2.5-1.1-2.5-2.5-2.5zm0 3.3c-.5 0-.8-.4-.8-.8s.4-.8.8-.8.8.4.8.8-.3.8-.8.8zM20.8 30h-3.3c-.5 0-.8.4-.8.8v3.3c0 .5.4.8.8.8h3.3c.5 0 .8-.4.8-.8v-3.3c.1-.4-.3-.8-.8-.8zm-.8 3.3h-1.7v-1.7H20v1.7z"></path>
            <path d="M36.7 23.3c-.6 0-1.2.1-1.9.1.1-.3.2-.6.2-1v-6.7c0-1.4-1.1-2.5-2.5-2.5h-.8v-1.7h.8c1.4 0 2.5-1.1 2.5-2.5V2.5C35 1.1 33.9 0 32.5 0h-30C1.1 0 0 1.1 0 2.5v6.7c0 1.4 1.1 2.5 2.5 2.5h.8v1.7h-.8c-1.4 0-2.5 1.1-2.5 2.5v6.7C0 23.9 1.1 25 2.5 25h.8v1.7h-.8c-1.4 0-2.5 1.1-2.5 2.5v6.7c0 1.4 1.1 2.5 2.5 2.5h21c.9 7.3 7.6 12.5 14.9 11.5S50.8 42.3 49.9 35c-.9-6.7-6.5-11.7-13.2-11.7zM2.5 10c-.5 0-.8-.4-.8-.8V2.5c0-.5.3-.8.8-.8h30c.5 0 .8.4.8.8v6.7c0 .5-.4.8-.8.8h-30zM30 11.7v1.7h-3.3v-1.7H30zm-5 0v1.7H10v-1.7h15zm-16.7 0v1.7H5v-1.7h3.3zM2.5 23.3c-.5 0-.8-.4-.8-.8v-6.7c0-.4.3-.8.8-.8h30c.5 0 .8.4.8.8v6.7c0 .5-.4.8-.8.8h-30zm25.7 5.3c.6.5 1.2.9 1.9 1.3-.6 1.9-.9 3.9-1 5.9H25c.2-2.7 1.4-5.2 3.2-7.2zm-1.5-1.9V25H30v.1c-.8.4-1.5 1-2.1 1.5l-1.2.1zm2.8.8c.8-.7 1.8-1.2 2.7-1.6-.6.8-1.1 1.6-1.5 2.5l-1.2-.9zM25 25v1.7H10V25h15zM8.3 25v1.7H5V25h3.3zm15 11.7H2.5c-.5 0-.8-.4-.8-.8v-6.7c0-.5.4-.8.8-.8h23.8c-1.9 2.3-3 5.2-3 8.3zm1.7.8h4.1c0 2 .4 4 1 5.9-.7.4-1.3.8-1.9 1.3-1.8-1.9-3-4.5-3.2-7.2zm4.5 8.3c.4-.3.8-.6 1.3-.9.4.9.9 1.7 1.5 2.5-1.1-.4-2-.9-2.8-1.6zm6.3 2.4c-1.4-.4-2.7-1.9-3.6-4 1.1-.5 2.3-.7 3.6-.8v4.8zm0-6.5c-1.4.1-2.8.4-4.1.9-.5-1.7-.8-3.4-.8-5.1h5v4.2zm0-5.9h-5c.1-1.7.3-3.5.8-5.1 1.3.5 2.7.8 4.1.9v4.2zm0-5.8c-1.2-.1-2.4-.4-3.6-.8.9-2.1 2.2-3.6 3.6-4V30zm12.5 5.8h-4.2c0-2-.4-4-1-5.9.7-.4 1.3-.8 1.9-1.3 2 2 3.1 4.5 3.3 7.2zm-4.4-8.3c-.4.3-.8.6-1.3.9-.4-.9-.9-1.7-1.5-2.5 1 .4 1.9.9 2.8 1.6zm-6.4-2.4c1.4.4 2.7 1.9 3.6 4-1.1.5-2.3.7-3.6.8v-4.8zm0 6.5c1.4-.1 2.8-.4 4.1-.9.5 1.7.8 3.4.8 5.1h-5v-4.2zm0 5.9h5c-.1 1.7-.3 3.5-.8 5.1-1.3-.5-2.7-.8-4.1-.9v-4.2zm0 10.7v-4.8c1.2.1 2.4.4 3.6.8-.9 2.1-2.2 3.6-3.6 4zm3.6-.8c.6-.8 1.1-1.6 1.5-2.5.4.3.9.6 1.3.9-.9.7-1.8 1.2-2.8 1.6zm4-2.7c-.6-.5-1.2-.9-1.9-1.3.6-1.9.9-3.9 1-5.9h4.2c-.3 2.7-1.4 5.3-3.3 7.2z"></path>
            <path d="M45.8 9.2v13.3h-1.7V9.2c0-1.4-1.1-2.5-2.5-2.5h-5V5h5c2.4 0 4.2 1.9 4.2 4.2zM5.8 43.3V40H4.2v3.3c0 2.3 1.9 4.2 4.2 4.2h15v-1.7h-15c-1.4 0-2.6-1.1-2.6-2.5z"></path>
        </symbol>
    </svg>


    <script src="css/admin.min.js"></script>

    
        
    


</body></html>