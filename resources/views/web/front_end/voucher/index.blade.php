@extends('layouts.front_end.default')

@section('content')
    <div class="faq-area ptb-80">
        <div id="gmc18">
            <!-- header start -->
            <div class="gmc18-header"
                style="background-image: url('https://dukvfovjkn1hs.cloudfront.net/images/media/140/1/1440x844_2.jpg')"
                id="gmc18-header">
                <div class="gmc18-header-overlay"></div>
                <div class="gmc18-header-text">
                    <h1>Mã giảm giá , Những ưu đãi tốt nhất </h1>
                    <h2>ƯU ĐÃI TỐT NHẤT CỦA MÙA</h2>
                    <h3>Mùa Xuân Năm 2024</h3>
                </div>
            </div>
            <!-- header end -->
            <!-- header blocks start -->
            <div class="gmc18-logos-container" id="gmc18-logos">
                <!-- Card Number 1 Starts -->
                <a href="#gmc18section1">
                    <div class="gmc18-logo-wrapper">
                        <p class="gmc18-logo-title">Mode</p>
                        <!-- Text referring to the category NOT to the brand-->
                        <p class="gmc18-logo-content">Shoppen Sie schicke Damen- und Herrenmode für einen trendigen
                            Frühlingslook und sparen Sie mit unseren Angeboten!</p>
                    </div>
                    <p class="gmc18-logo">
                        <img src="https://dukvfovjkn1hs.cloudfront.net/images/4/400x300_ABOUTYOU_9.png"
                            alt="About You Logo">
                        <span>&amp; Mehr</span>
                    </p>
                    <p class="gmc18-logo-cta"><span> Mehr entdecken <i class="gmc18-chevron"></i> </span>
                    </p>
                </a>
                <!-- Card Number 2 Starts -->
                <a href="#gmc18section2">
                    <div class="gmc18-logo-wrapper">
                        <p class="gmc18-logo-title">Haus &amp; Garten</p>
                        <p class="gmc18-logo-content">Zeit für frischen Wind in Ihrem Zuhause! Mit unseren Angeboten sparen
                            Sie
                            auf neue Möbel, Frühlingsdeko und mehr!</p>
                    </div>
                    <p class="gmc18-logo">
                        <img src="https://dukvfovjkn1hs.cloudfront.net/images/m/made1_9.png" alt="Made.com logo">
                        <span>&amp;
                            Mehr</span>
                    </p>
                    <p class="gmc18-logo-cta"><span> Mehr entdecken <i class="gmc18-chevron"></i> </span>
                    </p>
                </a>
                <!-- Card Number 4 Starts -->
                <a href="#gmc18section3">
                    <div class="gmc18-logo-wrapper">
                        <p class="gmc18-logo-title">Körper &amp; Gesundheit</p>
                        <p class="gmc18-logo-content">Besiegen Sie die Frühjahrsmüdigkeit und starten Sie fit in den
                            Frühling
                            mit unseren Angeboten!</p>
                    </div>
                    <p class="gmc18-logo">
                        <img src="https://dukvfovjkn1hs.cloudfront.net/images/d/douglaslogo_neu_9.png" alt="Douglas Logo">
                        <span>&amp; Mehr</span>
                    </p>
                    <p class="gmc18-logo-cta"><span> Mehr entdecken <i class="gmc18-chevron"></i> </span>
                    </p>
                </a>
            </div>
            <!-- header blocks end -->
            <!-- First Section Starts -->
            <div class="gmc18-section" id="gmc18section1">
                <div class="gmc18-section-container gmc18-text-center">
                    <!-- Title for the whole section -->
                    <div class="gmc18-section-title">VOUCHER XTRA</div>
                    <!-- Tabs Navigation, add logos -->
                    <div class="gmc18-tab-wrap">
                        <!-- TAB 1, GOLD -->
                        <input type="radio" id="gmc18sec1tab1" name="sec1group" class="gmc18-tab" checked="">
                        <label for="gmc18sec1tab1">
                            <img src="https://dukvfovjkn1hs.cloudfront.net/images/4/400x300_ABOUTYOU_9.png"
                                alt="About You Logo">
                        </label>
                        <!-- TAB 2, SILVER -->
                        <input type="radio" id="gmc18sec1tab2" name="sec1group" class="gmc18-tab">
                        <label for="gmc18sec1tab2">
                            <img src="https://dukvfovjkn1hs.cloudfront.net/images/b/boohoo_9.png" alt="Boohoo Logo"
                                style="">
                        </label>
                        <!-- TAB 3, SILVER -->
                        <input type="radio" id="gmc18sec1tab3" name="sec1group" class="gmc18-tab">
                        <label for="gmc18sec1tab3">
                            <img src="https://dukvfovjkn1hs.cloudfront.net/images/p/peter-hahn-gutscheincodes_logo_9.png"
                                alt="Peter Hahn Logo">
                        </label>
                        <!-- TAB 4, SILVER -->
                        <input type="radio" id="gmc18sec1tab4" name="sec1group" class="gmc18-tab">
                        <label for="gmc18sec1tab4">
                            <img src="https://dukvfovjkn1hs.cloudfront.net/images/o/Outfittery_Logo_9.png" alt="Outfittery">
                        </label>
                        <!-- TAB 2, GOLD CONTENT STARTS -->
                        <div class="gmc18-tab-content">
                            <div class="gmc18-products-container">
                                <!-- Visual Content Starts-->
                                <!-- Image with content -->
                                <div class="gmc18-product-image gmc18-make-first"
                                    style="background-image: url('https://dukvfovjkn1hs.cloudfront.net/images/media/140/1/1440x844_4_1.jpg')">
                                    <!-- Add link to RLP -->
                                    <a href="https://gutscheine.chip.de/gutscheine/about-you">
                                        <div class="gmc18-product-image-overlay"></div>
                                        <div class="gmc18-product-image-text">Bei About You finden Sie trendige Marken Mode
                                            zum
                                            günstigen Preis und mit unseren Angeboten sparen Sie noch mehr! <span>

                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <!-- Visual Content Ends -->
                                <div class="gmc18-product-items gmc18-make-last">
                                    <div class="gmc18-cards-container">
                                        <!-- Voucher CARD 1 starts -->
                                        @foreach ($vouchers_percentage as $item)
                                            <div class="gmc18-product-wrapper">
                                                <!-- Ideally link to display the popup code -->
                                                <div class="gmc18-product-card">
                                                    <div class="gmc18-product-card-title">Mã giảm giá phần trăm</div>
                                                    <div class="gmc18-product-card-text">Dành cho các đơn hàng
                                                        {{ number_format($item->min_order_value, 0, '', ',') }}vnđ</div>
                                                    <div class="gmc18-product-card-cta">
                                                        <div class="gmc18-product-card-wrapper">
                                                            <div class="gmc18-product-cta-title">Giảm
                                                                {{ $item->value }} %</div>
                                                            <div class="gmc18-product-cta-hover">
                                                                <div id="voucher-container">
                                                                    <button
                                                                        onclick="redeemVoucher({{ $item->id }})">Nhận
                                                                        Voucher</button>
                                                                    <div id="message-container"></div>
                                                                </div>
                                                            </div>
                                                            <div class="gmc18-product-cta-arrow">
                                                                <div class="gmc18-chevron-right"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- TAB 1, GOLD CONTENT ENDS -->
                        {{-- <!-- TAB 2 CONTENT STARTS -->
                    <div class="gmc18-tab-content">
                        <div class="gmc18-products-container">
                            <div class="gmc18-product-items gmc18-make-last gmc18-make-fullwidth">
                                <div class="gmc18-cards-container">
                                    <!-- Voucher CARD 1 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="722910"
                                            href="https://gutscheine.chip.de/fruehling#voucher-722910" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">Exklusiver Gutschein</div>
                                                <div class="gmc18-product-card-text">Profitieren Sie von 40% Rabatt auf
                                                    ALLES mit dem exklusiven Boohoo Gutschein!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">40% Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Gutschein einlösen</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 1 ends -->
                                    <!-- Voucher CARD 2 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="718042"
                                            href="https://gutscheine.chip.de/fruehling#voucher-718042" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">25% Rabatt</div>
                                                <div class="gmc18-product-card-text">Als Student erhalten Sie 25%
                                                    Rabatt!
                                                </div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">25% Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Angebot sichern</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 2 ends -->
                                    <!-- Voucher CARD 3 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="722910"
                                            href="https://gutscheine.chip.de/fruehling#voucher-722910" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">40% Rabatt</div>
                                                <div class="gmc18-product-card-text">Als Neukunde erhalten Sie 40%
                                                    Rabatt
                                                    auf Ihre Bestellung bei Boohoo!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">40% Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Angebot sichern</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 3 ends -->
                                    <!-- Voucher CARD 4 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="689054"
                                            href="https://gutscheine.chip.de/fruehling#voucher-689054" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">Exklusive Angebote</div>
                                                <div class="gmc18-product-card-text">Verpassen Sie keine exklusiven
                                                    Angebote
                                                    mit dem boohoo Newsletter!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">Tolle Angebote</div>
                                                        <div class="gmc18-product-cta-hover">Angebot sichern</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 4 ends -->
                                </div>
                            </div>
                        </div>
                        <!-- Retailer Description for the 1 section, 3rd tab -->
                        <div class="gmc18-section-desc">Bei Boohoo finden Sie trendige Damen- und Herrenmode für jeden
                            Anlass - shoppen Sie günstige Kleider, Oberteile, Schuhe, Accessoires und mehr! Profitieren
                            Sie
                            von den aktuellen Frühlingsangeboten bei Boohoo!<span> <a
                                    href="https://gutscheine.chip.de/gutscheine/boohoo-com">Alle Angebote entdecken</a>
                            </span>
                        </div>
                        <!-- Retailer Description for the 1 section, 2nd tab ends-->
                    </div>
                    <!-- TAB 2 CONTENT ENDS -->
                    <!-- TAB 3 CONTENT STARTS -->
                    <div class="gmc18-tab-content">
                        <div class="gmc18-products-container">
                            <div class="gmc18-product-items gmc18-make-last gmc18-make-fullwidth">
                                <div class="gmc18-cards-container">
                                    <!-- Voucher CARD 1 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="726622"
                                            href="https://gutscheine.chip.de/fruehling#voucher-726622" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">10€ Peter Hahn Gutschein</div>
                                                <div class="gmc18-product-card-text">Profitieren Sie von unserem 10€
                                                    Peter
                                                    Hahn Gutschein!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">10€ Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Gutschein einlösen</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 1 ends -->
                                    <!-- Voucher CARD 2 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="736592"
                                            href="https://gutscheine.chip.de/fruehling#voucher-736592" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">10% Rabatt im Pre-Sale</div>
                                                <div class="gmc18-product-card-text">Sichern Sie sich 10% Rabatt im
                                                    Pre-Sale
                                                    von Peter Hahn</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">10% Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Angebot sichern</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 2 ends -->
                                    <!-- Voucher CARD 3 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="707042"
                                            href="https://gutscheine.chip.de/fruehling#voucher-707042" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">Frühlingsmode</div>
                                                <div class="gmc18-product-card-text">Sparen Sie sich bis zu 60% auf
                                                    schicke
                                                    Mode!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">60% Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Angebot sichern</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 3 ends -->
                                    <!-- Voucher CARD 4 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="726622"
                                            href="https://gutscheine.chip.de/fruehling#voucher-726622" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">Newsletter</div>
                                                <div class="gmc18-product-card-text">Sichern Sie sich einen 10€ Peter
                                                    Hahn
                                                    Gutschein!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">10€ Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Angebot sichern</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 4 ends -->
                                </div>
                            </div>
                        </div>
                        <!-- Retailer Description for the 1 section, 3rd tab -->
                        <div class="gmc18-section-desc">Peter Hahn bietet Ihnen tolle Frühlingslooks und hochwertige
                            Artikel! Sparen Sie mit unseren Peter Hahn Gutscheinen im Frühling.<span> <a
                                    href="https://gutscheine.chip.de/gutscheine/peter-hahn">Alle Angebote entdecken</a>
                            </span>
                        </div>
                        <!-- Retailer Description for the 1 section, 2nd tab ends-->
                    </div>
                    <!-- TAB 3 CONTENT ENDS -->
                    <!-- TAB 4 CONTENT STARTS -->
                    <div class="gmc18-tab-content">
                        <div class="gmc18-products-container">
                            <div class="gmc18-product-items gmc18-make-last gmc18-make-fullwidth">
                                <div class="gmc18-cards-container">
                                    <!-- Voucher CARD 1 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="691604"
                                            href="https://gutscheine.chip.de/fruehling#voucher-691604" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">Exklusiver OUTFITTERY Gutschein
                                                </div>
                                                <div class="gmc18-product-card-text">20€ Rabatt auf Ihre Bestellung!
                                                </div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">20€ Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Gutschein einlösen</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 1 ends -->
                                    <!-- Voucher CARD 2 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="734181"
                                            href="https://gutscheine.chip.de/fruehling#voucher-734181" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">Outfits testen</div>
                                                <div class="gmc18-product-card-text">Profitieren Sie von Outfit Proben
                                                    von
                                                    Stylisten!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">Kostenlose Outfits</div>
                                                        <div class="gmc18-product-cta-hover">Angebot sichern</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 2 ends -->
                                    <!-- Voucher CARD 3 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="691604"
                                            href="https://gutscheine.chip.de/fruehling#voucher-691604" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">OUTFITTERY Gutschein</div>
                                                <div class="gmc18-product-card-text">Sichern Sie sich Ihre
                                                    Lieblingsartikel
                                                    um 20€ günstiger!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">20€ Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Angebot sichern</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 3 ends -->
                                    <!-- Voucher CARD 4 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="691604"
                                            href="https://gutscheine.chip.de/fruehling#voucher-691604" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">20€ Rabatt</div>
                                                <div class="gmc18-product-card-text">Mit dem OUTFITTERY Gutschein sparen
                                                    Sie
                                                    20€ auf Ihren Einkauf!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">20€ Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Angebot sichern</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 4 ends -->
                                </div>
                            </div>
                        </div>
                        <!-- Retailer Description for the 1 section, 3rd tab -->
                        <div class="gmc18-section-desc">In der OUTFITTERY Box erhalten Sie eine persönliche Auswahl an
                            hochwertigen Artikeln, die zu Ihrem Stil passen. Gestalten Sie Ihren Frühlings-Look und
                            sparen
                            Sie mit unseren OUTFITTERY Gutscheinen.<span> <a
                                    href="https://gutscheine.chip.de/gutscheine/outfittery">Alle Angebote entdecken</a>
                            </span>
                        </div>
                        <!-- Retailer Description for the 1 section, 2nd tab ends-->
                    </div>
                    <!-- TAB 4 CONTENT ENDS -->
                </div> --}}
                    </div>
                </div>
                <!-- first section ends -->
                <!-- Second section starts -->
                <div class="gmc18-section" id="gmc18section2">
                    <div class="gmc18-section-container gmc18-text-center">
                        <!-- Title for the whole section -->
                        <div class="gmc18-section-title">Haus &amp; Garten</div>
                        <!-- Tabs Navigation, add logos -->
                        <div class="gmc18-tab-wrap">
                            <!-- TAB 1, GOLD -->
                            <input type="radio" id="gmc18sec2tab1" name="sec2group" class="gmc18-tab" checked="">
                            <label for="gmc18sec2tab1">
                                <img src="https://dukvfovjkn1hs.cloudfront.net/images/m/made1_9.png" alt="Made.com Logo"
                                    style="">
                            </label>
                            <!-- TAB 2, SILVER -->
                            <input type="radio" id="gmc18sec2tab2" name="sec2group" class="gmc18-tab">
                            <label for="gmc18sec2tab2">
                                <img src="https://dukvfovjkn1hs.cloudfront.net/images/f/flora-prima_logo_4.png"
                                    alt="Floraprima Logo" style="">
                            </label>
                            <!-- TAB 3, SILVER -->
                            <input type="radio" id="gmc18sec2tab3" name="sec2group" class="gmc18-tab">
                            <label for="gmc18sec2tab3">
                                <img src="https://dukvfovjkn1hs.cloudfront.net/images/h/home24_4.png" alt="home24 Logo"
                                    style="">
                            </label>
                            <!-- TAB 4, SILVER -->
                            <input type="radio" id="gmc18sec2tab4" name="sec2group" class="gmc18-tab">
                            <label for="gmc18sec2tab4">
                                <img src="https://dukvfovjkn1hs.cloudfront.net/images/d/daenischesbettenlager_logo_BD_9.png"
                                    alt="Dänischen Bettenlager Logo">
                            </label>
                            <!-- TAB 1, GOLD CONTENT STARTS -->
                            <div class="gmc18-tab-content">
                                <div class="gmc18-products-container">
                                    <div class="gmc18-product-items gmc18-make-last">
                                        <div class="gmc18-cards-container">
                                            <!-- Voucher CARD 1 starts -->
                                            @foreach ($vouchers_fix as $item)
                                                <div class="gmc18-product-wrapper">

                                                    <div class="gmc18-product-card">
                                                        <div class="gmc18-product-card-title">Giảm giá tiền cố định
                                                        </div>
                                                        <div class="gmc18-product-card-text">Dành cho những đơn hàng
                                                            {{ number_format($item->min_order_value, 0, '', ',') }}vnđ
                                                        </div>
                                                        <div class="gmc18-product-card-cta">
                                                            <div class="gmc18-product-card-wrapper">
                                                                <div class="gmc18-product-cta-title">Giá trị
                                                                    {{ number_format($item->value, 0, '', ',') }}vnđ
                                                                </div>
                                                                <div class="gmc18-product-cta-hover">
                                                                    <div id="voucher-container">
                                                                        <button
                                                                            onclick="redeemVoucher({{ $item->id }})">Nhận
                                                                            Voucher</button>
                                                                        <div id="message-container"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="gmc18-product-cta-arrow">
                                                                    <div class="gmc18-chevron-right"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            @endforeach
                                            <!-- Voucher CARD 1 ends -->
                                        </div>
                                    </div>
                                    <!-- Visual Content Starts for the gold retailer-->
                                    <!-- Image with content -->
                                    <div class="gmc18-product-image gmc18-make-first"
                                        style="background-image: url('https://dukvfovjkn1hs.cloudfront.net/images/media/140/h/home1440x844.jpg')">
                                        <!-- Add link to RLP -->
                                        <a href="https://gutscheine.chip.de/gutscheine/made-com" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-image-overlay"></div>
                                            <div class="gmc18-product-image-text">Mit neuen Möbeln, schicker Frühlingsdeko
                                                oder
                                                farbenfrohen Blumen machen Sie Ihr Zuhause bereit für den Frühling! <span>

                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Visual Content ends-->
                                </div>
                            </div>
                            {{-- <!-- TAB 1, GOLD CONTENT ENDS -->
                    <!-- TAB 2 CONTENT STARTS -->
                    <div class="gmc18-tab-content">
                        <div class="gmc18-products-container">
                            <div class="gmc18-product-items gmc18-make-last gmc18-make-fullwidth">
                                <div class="gmc18-cards-container">
                                    <!-- Voucher CARD 1 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="697144"
                                            href="https://gutscheine.chip.de/fruehling#voucher-697144" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">Farbenfrohe Blumen</div>
                                                <div class="gmc18-product-card-text">Mit unserem FloraPrima Gutschein
                                                    sparen
                                                    Sie 15%</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">15% Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Gutschein einlösen</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 1 ends -->
                                    <!-- Voucher CARD 2 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="701692"
                                            href="https://gutscheine.chip.de/fruehling#voucher-701692" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">Frühlingsgruß</div>
                                                <div class="gmc18-product-card-text">Versenden Sie einen Frühlingsgruß
                                                    und
                                                    sparen Sie 10%!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">10% Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Gutschein einlösen</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 2 ends -->
                                    <!-- Voucher CARD 3 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="697144"
                                            href="https://gutscheine.chip.de/fruehling#voucher-697144" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">Tulpen, Rosen und mehr!</div>
                                                <div class="gmc18-product-card-text">Sparen Sie 15% auf das gesamte
                                                    Sortiment!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">15% Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Gutschein einlösen</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 3 ends -->
                                    <!-- Voucher CARD 4 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="697144"
                                            href="https://gutscheine.chip.de/fruehling#voucher-697144" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">Frühlingsblumen</div>
                                                <div class="gmc18-product-card-text">Sichern Sie sich 15% Rabatt auf
                                                    Ihre
                                                    Blumen!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">15% Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Gutschein einlösen</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 4 ends -->
                                </div>
                            </div>
                        </div>
                        <!-- Retailer Description for the 2 section, 2nd tab -->
                        <div class="gmc18-section-desc">Verschicken Sie farbenfrohe Frühlingsblumen und machen Sie Ihren
                            Liebsten eine Freude! Blumen im Frühling und zu Ostern können Sie mit gratis Glasvase
                            bestellen
                            und mit unseren aktuellen Angeboten sparen Sie bei FloraPrima! <span> <a
                                    href="https://gutscheine.chip.de/gutscheine/flora-prima">Alle Angebote entdecken</a>
                            </span>
                        </div>
                        <!-- Retailer Description for the 2 section, 2nd tab ends-->
                    </div>
                    <!-- TAB 2 CONTENT ENDS -->
                    <!-- TAB 3 CONTENT STARTS -->
                    <div class="gmc18-tab-content">
                        <div class="gmc18-products-container">
                            <div class="gmc18-product-items gmc18-make-last gmc18-make-fullwidth">
                                <div class="gmc18-cards-container">
                                    <!-- Voucher CARD 1 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="724096"
                                            href="https://gutscheine.chip.de/fruehling#voucher-724096" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">11% Gutscheincode</div>
                                                <div class="gmc18-product-card-text">11% Rabatt auf Ihre
                                                    Lieblings-Artikel!
                                                </div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">11% Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Gutschein einlösen</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 1 ends -->
                                    <!-- Voucher CARD 2 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="689078"
                                            href="https://gutscheine.chip.de/fruehling#voucher-689078" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">Keine Versandkosten</div>
                                                <div class="gmc18-product-card-text">Sichern Sie sich kostenlosen
                                                    Versand
                                                    mit diesem home24 Gutschein!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">Gratis Versand</div>
                                                        <div class="gmc18-product-cta-hover">Gutschein einlösen</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 2 ends -->
                                    <!-- Voucher CARD 3 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="708212"
                                            href="https://gutscheine.chip.de/fruehling#voucher-708212" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">Lagerräumung</div>
                                                <div class="gmc18-product-card-text">Profitieren Sie von 10% Rabatt auf
                                                    die
                                                    Kategorie Lagerräumung!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">10% Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Gutschein einlösen</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 3 ends -->
                                    <!-- Voucher CARD 4 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="724096"
                                            href="https://gutscheine.chip.de/fruehling#voucher-724096" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">Wunsch-Produkte</div>
                                                <div class="gmc18-product-card-text">Mit diesem home24 Gutscheincode
                                                    sparen
                                                    Sie 11%!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">11% Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Gutschein einlösen</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 4 ends -->
                                </div>
                            </div>
                        </div>
                        <!-- Retailer Description for the 2 section, 4th tab -->
                        <div class="gmc18-section-desc">Der Frühlingsputz steht an! Mit Möbeln von home24 frischen Sie
                            Ihr
                            Zuhause auf und bringen einen neuen Look in Ihren Wohnraum! Shoppen Sie Betten, Stühle,
                            Sofas
                            und mehr! <span> <a href="https://gutscheine.chip.de/gutscheine/home24">Alle Angebote
                                    entdecken</a> </span>
                        </div>
                        <!-- Retailer Description for the 2 section, 3rd tab ends-->
                    </div>
                    <!-- TAB 3 CONTENT END -->
                    <!-- TAB 3 CONTENT STARTS -->
                    <div class="gmc18-tab-content">
                        <div class="gmc18-products-container">
                            <div class="gmc18-product-items gmc18-make-last gmc18-make-fullwidth">
                                <div class="gmc18-cards-container">
                                    <!-- Voucher CARD 1 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="714259"
                                            href="https://gutscheine.chip.de/fruehling#voucher-714259" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">25% Rabatt</div>
                                                <div class="gmc18-product-card-text">Jetzt neue Kopfkissen shoppen und
                                                    25%
                                                    Rabatt sichern!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">25% Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Gutschein einlösen</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 1 ends -->
                                    <!-- Voucher CARD 2 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="695366"
                                            href="https://gutscheine.chip.de/fruehling#voucher-695366" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">Sale Artikel</div>
                                                <div class="gmc18-product-card-text">Profitieren Sie von bis zu 63%
                                                    Rabatt
                                                    im Sale von Dänisches Bettenlager!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">63% Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Angebot sichern</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 2 ends -->
                                    <!-- Voucher CARD 3 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="704606"
                                            href="https://gutscheine.chip.de/fruehling#voucher-704606" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">Gartenmöbel-Set</div>
                                                <div class="gmc18-product-card-text">Ergattern Sie ein Gartenmöbel-Set
                                                    für
                                                    nur 199,99€!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">199,99€ Angebot</div>
                                                        <div class="gmc18-product-cta-hover">Gutschein einlösen</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 3 ends -->
                                    <!-- Voucher CARD 4 starts -->
                                    <div class="gmc18-product-wrapper gmc18-make-four">
                                        <a data-cn-clickout="" data-cn-voucher-id="714259"
                                            href="https://gutscheine.chip.de/fruehling#voucher-714259" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-card">
                                                <div class="gmc18-product-card-title">Kopfkissen</div>
                                                <div class="gmc18-product-card-text">Profitieren Sie bei Dänisches
                                                    Bettenlager von 25% Rabatt auf Kopfkissen!</div>
                                                <div class="gmc18-product-card-cta">
                                                    <div class="gmc18-product-card-wrapper">
                                                        <div class="gmc18-product-cta-title">25% Rabatt</div>
                                                        <div class="gmc18-product-cta-hover">Gutschein einlösen</div>
                                                        <div class="gmc18-product-cta-arrow">
                                                            <div class="gmc18-chevron-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Voucher CARD 4 ends -->
                                </div>
                            </div>
                        </div>
                        <!-- Retailer Description for the 3 section, 2nd tab -->
                        <div class="gmc18-section-desc">Hier finden Sie hochwertige Möbel und Bettwaren zum Sparpreis!
                            Mit
                            schicken neuen Gartenmöbeln oder Frühlingsdeko für drinnen starten Sie vorbereitet in den
                            Frühling! <span> <a href="https://gutscheine.chip.de/gutscheine/daenisches-bettenlager">Alle
                                    Angebote entdecken</a> </span>
                        </div>
                        <!-- Retailer Description for the 3 section, 2nd tab ends-->
                    </div>
                    <!-- TAB 2 CONTENT ENDS --> --}}
                        </div>
                    </div>
                </div>
                <!-- 3rd section ends -->
                <!-- 3rd Section Starts -->
                <div class="gmc18-section" id="gmc18section3">
                    <div class="gmc18-section-container gmc18-text-center">
                        <div class="gmc18-section-title">Körper &amp; Gesundheit</div>
                        <!-- Tabs Navigation, add logos -->
                        <div class="gmc18-tab-wrap">
                            <!-- TAB 1, GOLD -->
                            <input type="radio" id="gmc18sec4tab1" name="sec4group" class="gmc18-tab" checked="">
                            <label for="gmc18sec4tab1">
                                <img src="https://dukvfovjkn1hs.cloudfront.net/images/d/douglaslogo_neu_9.png"
                                    alt="douglas Logo">
                            </label>
                            <!-- TAB 2, SILVER -->
                            <input type="radio" id="gmc18sec4tab2" name="sec4group" class="gmc18-tab">
                            <label for="gmc18sec4tab2">
                                <img src="https://dukvfovjkn1hs.cloudfront.net/images/a/asambeauty_logo_BD1_9.png"
                                    alt="asambeauty Logo" style="">
                            </label>
                            <!-- TAB 3, SILVER -->
                            <input type="radio" id="gmc18sec4tab3" name="sec4group" class="gmc18-tab">
                            <label for="gmc18sec4tab3">
                                <img src="" alt="">
                            </label>
                            <!-- TAB 4, SILVER -->
                            <input type="radio" id="gmc18sec4tab4" name="sec4group" class="gmc18-tab">
                            <label for="gmc18sec4tab4">
                                <img src="" alt="">
                            </label>
                            <!-- TAB 1, GOLD CONTENT STARTS -->
                            <div class="gmc18-tab-content">
                                <div class="gmc18-products-container">
                                    <div class="gmc18-product-items gmc18-make-last">
                                        <div class="gmc18-cards-container">
                                            <!-- Voucher CARD 1 starts -->
                                            <div class="gmc18-product-wrapper">
                                                <a data-cn-clickout="" data-cn-voucher-id="738026"
                                                    href="https://gutscheine.chip.de/fruehling#voucher-738026"
                                                    rel="nofollow" target="_blank">
                                                    <div class="gmc18-product-card">
                                                        <div class="gmc18-product-card-title">15% Rabatt</div>
                                                        <div class="gmc18-product-card-text">Als Neukunde profitieren Sie
                                                            von
                                                            15%
                                                            Rabatt</div>
                                                        <div class="gmc18-product-card-cta">
                                                            <div class="gmc18-product-card-wrapper">
                                                                <div class="gmc18-product-cta-title">15% Rabatt</div>
                                                                <div class="gmc18-product-cta-hover">Gutschein einlösen
                                                                </div>
                                                                <div class="gmc18-product-cta-arrow">
                                                                    <div class="gmc18-chevron-right"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- Voucher CARD 1 ends -->
                                            <!-- Voucher CARD 2 starts -->
                                            <div class="gmc18-product-wrapper">
                                                <a data-cn-clickout="" data-cn-voucher-id="738026"
                                                    href="https://gutscheine.chip.de/fruehling#voucher-738026"
                                                    rel="nofollow" target="_blank">
                                                    <div class="gmc18-product-card">
                                                        <div class="gmc18-product-card-title">Damen- und Herrendüfte</div>
                                                        <div class="gmc18-product-card-text">Sichern Sie sich 15% Rabatt
                                                            auf
                                                            Damen-
                                                            und Herrendüfte!</div>
                                                        <div class="gmc18-product-card-cta">
                                                            <div class="gmc18-product-card-wrapper">
                                                                <div class="gmc18-product-cta-title">15% Rabatt</div>
                                                                <div class="gmc18-product-cta-hover">Gutschein einlösen
                                                                </div>
                                                                <div class="gmc18-product-cta-arrow">
                                                                    <div class="gmc18-chevron-right"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- Voucher CARD 2 ends -->
                                            <!-- Voucher CARD 3 starts -->
                                            <div class="gmc18-product-wrapper">
                                                <a data-cn-clickout="" data-cn-voucher-id="738026"
                                                    href="https://gutscheine.chip.de/fruehling#voucher-738026"
                                                    rel="nofollow" target="_blank">
                                                    <div class="gmc18-product-card">
                                                        <div class="gmc18-product-card-title">Pflegeprodukte</div>
                                                        <div class="gmc18-product-card-text">Profitieren Sie von 15% Rabatt
                                                            auf
                                                            Pflegeprodukte!</div>
                                                        <div class="gmc18-product-card-cta">
                                                            <div class="gmc18-product-card-wrapper">
                                                                <div class="gmc18-product-cta-title">15% Rabatt</div>
                                                                <div class="gmc18-product-cta-hover">Gutschein einlösen
                                                                </div>
                                                                <div class="gmc18-product-cta-arrow">
                                                                    <div class="gmc18-chevron-right"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- Voucher CARD 3 ends -->
                                            <!-- Voucher CARD 4 starts -->
                                            <div class="gmc18-product-wrapper">
                                                <a data-cn-clickout="" data-cn-voucher-id="738026"
                                                    href="https://gutscheine.chip.de/fruehling#voucher-738026"
                                                    rel="nofollow" target="_blank">
                                                    <div class="gmc18-product-card">
                                                        <div class="gmc18-product-card-title">Neukunden</div>
                                                        <div class="gmc18-product-card-text">Jetzt 15% Douglas Gutschein
                                                            für
                                                            Neukunden sichern</div>
                                                        <div class="gmc18-product-card-cta">
                                                            <div class="gmc18-product-card-wrapper">
                                                                <div class="gmc18-product-cta-title">15% Rabatt</div>
                                                                <div class="gmc18-product-cta-hover">Gutschein einlösen
                                                                </div>
                                                                <div class="gmc18-product-cta-arrow">
                                                                    <div class="gmc18-chevron-right"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- Voucher CARD 4 ends -->
                                        </div>
                                    </div>
                                    <!-- Visual Content Starts for the gold retailer-->
                                    <!-- Image with content -->
                                    <div class="gmc18-product-image gmc18-make-first"
                                        style="background-image: url('https://dukvfovjkn1hs.cloudfront.net/images/media/140/d/douglasspring.jpg')">
                                        <!-- Add link to RLP -->
                                        <a href="https://gutscheine.chip.de/gutscheine/douglas" rel="nofollow"
                                            target="_blank">
                                            <div class="gmc18-product-image-overlay"></div>
                                            <div class="gmc18-product-image-text">Bei Douglas können Sie sich über Parfüm,
                                                Make-up,
                                                Pflege und Accessoires freuen! Mit unseren Angeboten sparen Sie auf Ihre
                                                Bestellung
                                                und profitieren von gratis Versand.<span>

                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Visual Content ends-->
                                </div>
                            </div>
                            <!-- TAB 1, GOLD CONTENT ENDS -->
                            <!-- TAB 2 CONTENT STARTS -->
                            <div class="gmc18-tab-content">
                                <div class="gmc18-products-container">
                                    <div class="gmc18-product-items gmc18-make-last gmc18-make-fullwidth">
                                        <div class="gmc18-cards-container">
                                            <!-- Voucher CARD 1 starts -->
                                            <div class="gmc18-product-wrapper gmc18-make-four">
                                                <a data-cn-clickout="" data-cn-voucher-id="701252"
                                                    href="https://gutscheine.chip.de/fruehling#voucher-701252"
                                                    rel="nofollow" target="_blank">
                                                    <div class="gmc18-product-card">
                                                        <div class="gmc18-product-card-title">5€ Rabatt</div>
                                                        <div class="gmc18-product-card-text">Erhalten Sie nach Anmeldung
                                                            zum
                                                            Newsletter einen 5€ asambeauty Gutschein!</div>
                                                        <div class="gmc18-product-card-cta">
                                                            <div class="gmc18-product-card-wrapper">
                                                                <div class="gmc18-product-cta-title">5€ Rabatt</div>
                                                                <div class="gmc18-product-cta-hover">Gutschein einlösen
                                                                </div>
                                                                <div class="gmc18-product-cta-arrow">
                                                                    <div class="gmc18-chevron-right"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- Voucher CARD 1 ends -->
                                            <!-- Voucher CARD 2 starts -->
                                            <div class="gmc18-product-wrapper gmc18-make-four">
                                                <a data-cn-clickout="" data-cn-voucher-id="738071"
                                                    href="https://gutscheine.chip.de/fruehling#voucher-738071"
                                                    rel="nofollow" target="_blank">
                                                    <div class="gmc18-product-card">
                                                        <div class="gmc18-product-card-title">Auf ALLES!</div>
                                                        <div class="gmc18-product-card-text">Sichern Sie sich 10% Rabatt
                                                            auf
                                                            Ihre
                                                            Bestellung ab 39€!</div>
                                                        <div class="gmc18-product-card-cta">
                                                            <div class="gmc18-product-card-wrapper">
                                                                <div class="gmc18-product-cta-title">10% Rabatt</div>
                                                                <div class="gmc18-product-cta-hover">Angebot sichern</div>
                                                                <div class="gmc18-product-cta-arrow">
                                                                    <div class="gmc18-chevron-right"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- Voucher CARD 2 ends -->
                                            <!-- Voucher CARD 3 starts								<div class="gmc18-product-wrapper gmc18-make-four">									<a data-cn-clickout="" data-cn-voucher-id="722053" href="https://gutscheine.chip.de/fruehling#voucher-722053" rel="nofollow" target="_blank">										<div class="gmc18-product-card">											<div class="gmc18-product-card-title">10% auf alles</div>
                                                                                                          <div class="gmc18-product-card-text">Erhalten Sie 10% Rabatt auf Ihre Bestellung ab 39€!</div>
                                                                                                          <div class="gmc18-product-card-cta">												<div class="gmc18-product-card-wrapper">													<div class="gmc18-product-cta-title">10% Rabatt</div>
                                                                                                                  <div class="gmc18-product-cta-hover">Angebot sichern</div>
                                                                                                                  <div class="gmc18-product-cta-arrow">														<div class="gmc18-chevron-right"></div>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </a>								</div>
                                                                                           Voucher CARD 3 ends -->
                                            <!-- Voucher CARD 4 starts -->
                                            <div class="gmc18-product-wrapper gmc18-make-four">
                                                <a data-cn-clickout="" data-cn-voucher-id="688479"
                                                    href="https://gutscheine.chip.de/fruehling#voucher-688479"
                                                    rel="nofollow" target="_blank">
                                                    <div class="gmc18-product-card">
                                                        <div class="gmc18-product-card-title">Gratis Versand</div>
                                                        <div class="gmc18-product-card-text">Shoppen Sie Ihre
                                                            Lieblingsprodukte
                                                            von
                                                            asambeauty!</div>
                                                        <div class="gmc18-product-card-cta">
                                                            <div class="gmc18-product-card-wrapper">
                                                                <div class="gmc18-product-cta-title">Gratis Versand</div>
                                                                <div class="gmc18-product-cta-hover">Angebot sichern</div>
                                                                <div class="gmc18-product-cta-arrow">
                                                                    <div class="gmc18-chevron-right"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- Voucher CARD 4 ends -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Retailer Description for the 4 section, 2nd tab -->
                                <div class="gmc18-section-desc">Überwinden Sie die Frühjahrsmüdigkeit und tun Sie etwas
                                    Gutes
                                    für
                                    Ihr Wohlbefinden! Shoppen Sie hochwertige Pflegeprodukte, Düfte, Make-Up und mehr!
                                    <span>
                                    </span>
                                </div>
                                <!-- Retailer Description for the 4 section, 2nd tab ends-->
                            </div>
                            <!-- TAB 2 CONTENT ENDS -->
                        </div>
                    </div>
                </div>
                <!-- 4th category ends -->
                <!-- Bronze Title -->
                <div class="gmc18-section">
                    <div class="gmc18-section-container gmc18-text-center">
                        <!-- Title for the whole section -->
                        <div class="gmc18-section-title">Weitere unschlagbare Frühlingsangebote</div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Trong file script.js của bạn hoặc giữa thẻ <script> trực tiếp trong trang HTML
            const voucherStatus = {};

            function redeemVoucher(voucherId) {
                // Kiểm tra xem voucher đã được nhận chưa
                if (voucherStatus[voucherId] && voucherStatus[voucherId].received) {
                    alert('Bạn đã nhận voucher này rồi.');
                    return;
                }

                // Gửi yêu cầu đến backend để nhận và sử dụng voucher
                fetch('http://127.0.0.1:8000/home-page/client-voucher/user/redeem-voucher', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        },
                        body: JSON.stringify({
                            voucher_ids: [voucherId]
                        }),
                    })
                    .then(response => response.json())
                    // .then(data => {
                    //     console.log(data)
                    //     // Xử lý kết quả từ backend (hiển thị thông báo hoặc cập nhật giao diện)
                    //     var messageContainer = document.getElementById('message-container');
                    //     if (data.error) {
                    //         messageContainer.innerHTML = '<p>' + data.error + '</p>';
                    //     } else {
                    //         messageContainer.innerHTML = '<p>' + data.message + '</p>';
                    //         // Đánh dấu voucher đã nhận trong biến đối tượng
                    //         voucherStatus[voucherId] = {
                    //             received: true
                    //         };
                    //     }
                    //     // Thêm logic khác nếu cần
                    // })
                    // .catch(error => {
                    //     // Xử lý lỗi và hiển thị thông báo lỗi
                    //     var messageContainer = document.getElementById('message-container');
                    //     messageContainer.innerHTML = '<p>Có lỗi xảy ra: ' + error.message + '</p>';
                    // });
                    .then(data => {
                        // Xử lý kết quả từ backend
                        if (data.error) {
                            alert('Lỗi: ' + data.error);
                        } else {
                            alert('Thành công: ' + data.message);
                            // Đánh dấu voucher đã nhận trong biến đối tượng
                            voucherStatus[voucherId] = {
                                received: true
                            };
                        }
                        // Thêm logic khác nếu cần
                    })
                    .catch(error => {
                        // Xử lý lỗi và hiển thị thông báo lỗi
                        alert('Có lỗi xảy ra: ' + error.message);
                    });
            }
        </script>
    @endsection
    @push('css')
        <link rel="stylesheet" href="{{ asset('assets/css/style_voucher.css') }}">
        <style>
            #voucher-container {
                max-width: 300px;
            }

            button {
                background-color: #3498db;
                color: #fff;
                padding: 10px;
                border: none;
                cursor: pointer;
            }

            button:hover {
                background-color: #2980b9;
            }
        </style>
    @endpush
    @push('footer_js')
    @endpush
