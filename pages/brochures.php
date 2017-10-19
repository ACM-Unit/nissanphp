<?php include("../header.html"); ?>
<main id="container" role="main">
    <div class="grid-row bleed">
        <div class="col-12">
            <div class="editorialInPageNavigation">
            </div>
        </div>
    </div>
    <div class="grid-row">
        <div class="col-12">
            <div class="pageHeader">
            </div>
        </div>
    </div>
    <div class="freeEditorial freeEditorialParsys parsys"><div class="columns column section columns12">
            <div class="grid-row">
                <div class="col-12">
                    <div class="parsys col1-par"><div class="section pageHeader">
                            <div class="c_023 ">
                                <div class="container-inner">
                                    <div class="c_023-1 default">
                                        <div class="heading-group">
                                            <h1><span>ЗАВАНТАЖТЕ БРОШУРУ</span></h1>
                                            <p><span>Знайдіть додаткову інформацію</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vehiclelisting section">
                            <div class="c_030-0" data-range-categories-map="[{&quot;id&quot;:&quot;1&quot;,&quot;label&quot;:&quot;Міські автомобілі&quot;,&quot;value&quot;:&quot;Міські автомобілі&quot;},{&quot;id&quot;:&quot;2&quot;,&quot;label&quot;:&quot;PASSENGERS&quot;,&quot;value&quot;:&quot;PASSENGERS&quot;},{&quot;id&quot;:&quot;3&quot;,&quot;label&quot;:&quot;CONFIGURATOR&quot;,&quot;value&quot;:&quot;CONFIGURATOR&quot;},{&quot;id&quot;:&quot;4&quot;,&quot;label&quot;:&quot;Кросовери&quot;,&quot;value&quot;:&quot;Кросовери&quot;},{&quot;id&quot;:&quot;5&quot;,&quot;label&quot;:&quot;Спортивні автомобілі&quot;,&quot;value&quot;:&quot;Спортивні автомобілі&quot;}]" data-range-page="">
                                <div class="grid-row list-outer">
                                    <ul class="list-item">
                                        <?php
                                        require_once('../services/Services.php');
                                        $services = new Services();
                                        $models = $services->getModels();
                                        ?>
                                        <?php foreach ($models AS $key => $model) { ?>
                                            <li>
                                                <div class="c_130" data-vehicle-id="<?php echo $model['modelcode']; ?>" data-vehicle-category="Міські автомобілі,PASSENGERS,CONFIGURATOR" data-range-category-id="1;2;3">
                                                    <div class="vehicle-link ">
                                                        <div class="header-group">
                                                            <h3 class="car-title">
                                                                <a href="/car-models/<?php echo $model['name']; ?>" data-adobe-tagging="vehicles|new|<?php echo $model['name']; ?>"><?php echo $model['name']; ?></a>
                                                            </h3>
                                                            <p class="row vehicle-strapline">
                                                                <?php echo $model['tagline']; ?>
                                                            </p>
                                                            <div class="row starting-price">
                                                                <div class="c_184 show-full-price" data-price-currency="грн" data-defer="false" data-price-code="" data-price-disclaimer="" data-price-description="" data-price-vehicle-disabled="false" data-tax="" data-model-code="${model.modelcode}" data-model-path="/nissan/ua/uk/${model.modelcode}" data-model-grade="" data-model-version="" data-extra-info-path-suffix="/content/nissan/uk_UA/cars/${model.name}.html" data-tooltip-popup-disabled="false" data-force-display-type="" data-manual-price-formatting="true" data-fuel-consumption-disclaimer-label="" data-co2-emissions-disclaimer-label="" data-efficiency-disclaimer-label="">
                                                                    <ul class="prices">
                                                                        <li class="msrp">
                                                                            <div class="content show">
                                                                                <div class="price">
                                                                                    <div style="display: block;" class="c_008">
                                                                                        <a data-hasqtip="3" href="#" class="has-tooltip tooltip-icon-asterisk" data-parent-component="" data-tooltip-id="tooltip-input-element-id-5" data-tooltip-my="top center" data-tooltip-at="bottom center" tabindex="0" data-label-option="tooltip-icon-asterisk" data-tooltip-position="">
                                                                                            <span>ЦІНА ВІД</span>
                                                                                        </a>
                                                                                        <div class="tooltip-panel" data-tooltip-id="tooltip-input-element-id-5">Спеціальна ціна – ціна, розрахована з урахуванням спеціальної пропозиції на автомобілі. Ціна є рекомендованою і може відрізнятися від остаточної ціни, запропонованої дилером Nissan в Україні.<br>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p style="display: none;" class="disclaimer">ЦІНА ВІД</p>
                                                                                    <span id="price<?php echo $key; ?>" class="full-price" dir="ltr"></span>
                                                                                </div>
                                                                                <div class="subtext">Кредит від 0% на 2 роки ¹</div>
                                                                                <a style="display: none;" href="" class="cta"></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="/car-models/<?php echo $model['name']; ?>" data-adobe-tagging="vehicles|new|<?php echo $model['name']; ?>" class="media-view" data-alt="">
                                                    <span class="picture-element" data-alt="">
                                                        <span data-src="/storage/<?php echo $model['image']; ?>" data-media="(min-width: 1.0em)" data-density="1"></span>
                                                        <span data-src="/storage/<?php echo $model['image']; ?>" data-media="(min-width: 1.0em)" data-density="2"></span>
                                                        <span data-src="/storage/<?php echo $model['image']; ?>" data-media="(min-width: 36.3125em)" data-density="1"></span>
                                                        <span data-src="/storage/<?php echo $model['image']; ?>" data-media="(min-width: 36.3125em)" data-density="2"></span>
                                                        <span data-src="/storage/<?php echo $model['image']; ?>" data-media="(min-width: 60.0em)" data-density="1"><img src="/storage/<?php echo $model['image']; ?>" class="" alt=""></span>
                                                        <span data-src="/storage/<?php echo $model['image']; ?>" data-media="(min-width: 60.0em)" data-density="2"></span>
                                                        <noscript>
                                                            <img alt="" src="/storage/<?php echo $model['image']; ?>"/>
                                                        </noscript>
                                                    </span>
                                                        </a>
                                                    </div>
                                                    <?php if ($model['name'] == 'x-trail') { ?>
                                                        <a class="primary-cta" href="//www.nissan-cdn.net/content/dam/Nissan/ua/uk/brochures/nissan-xtrail-brochure.pdf" data-adobe-tagging="" target="_blank">
                                                            Брошура</a>
                                                    <?php } else {?>
                                                        <a class="primary-cta" href="//www.nissan-cdn.net/content/dam/Nissan/ua/uk/brochures/nissan-<?php echo $model['name']; ?>-brochure.pdf" data-adobe-tagging="" target="_blank">
                                                            Брошура</a>
                                                    <?php } ?>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="heliosdisclaimer section">
                            <script type="text/javascript" src="/etc/clientlibs/granite/jquery.min.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>

    window.setTimeout(function(){
    <?php foreach ($models AS $key => $model) { ?>
        if(!$('#price<?php echo $key; ?>').text()==''){
            var str<?php echo $key; ?> = $('#price<?php echo $key; ?>').text();
            str<?php echo $key; ?> = str<?php echo $key; ?>.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
            $('#price<?php echo $key; ?>').text(str<?php echo $key; ?>+" грн");
        }
    <?php } ?>
    }, 2000);
</script>
<?php include("../footer.html"); ?>