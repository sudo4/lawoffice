@extends('front.main')

@section('content')
<div data-elementor-type="wp-page" data-elementor-id="14" class="elementor elementor-14" data-elementor-settings="[]">                    
    <div class="elementor-inner">                
        <div class="elementor-section-wrap">            
            <section class="elementor-section elementor-top-section elementor-element elementor-element-d545bca elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="d545bca" data-element_type="section">    
                <div class="elementor-container elementor-column-gap-no">    
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1045bef" data-id="1045bef" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-4cca6d1 elementor-widget elementor-widget-tmx-juristic_slider" data-id="4cca6d1" data-element_type="widget" data-widget_type="tmx-juristic_slider.default">
                                        <div class="elementor-widget-container">
                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-d545bca elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="d545bca" data-element_type="section">    
                                                <div class="elementor-container elementor-column-gap-no">    
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1045bef" data-id="1045bef" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-4cca6d1 elementor-widget elementor-widget-tmx-juristic_slider" data-id="4cca6d1" data-element_type="widget" data-widget_type="tmx-juristic_slider.default">
                                                                        <div class="elementor-widget-container">
                                                                        <section class="page-title   page-title-5fcf17834d5b1 " style="background-image:  url(/front/page-title.jpg);">
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="col col-xs-12" style="">
                                                                                            <div class="title">
                                                                                                <h2>Galery</h2>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div> <!-- end row -->
                                                                                </div> <!-- end container -->
                                                                        </section>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-1659f74 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1659f74" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-758075d" data-id="758075d" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-0b8991b elementor-widget elementor-widget-tmx-juristic_about" data-id="0b8991b" data-element_type="widget" data-settings="{&quot;about_image&quot;:{&quot;url&quot;:&quot;http:\/\/juristic.themegeniuslab.com\/wp-content\/uploads\/2020\/01\/about-min.jpg&quot;,&quot;id&quot;:109},&quot;about_signature&quot;:{&quot;url&quot;:&quot;http:\/\/juristic.themegeniuslab.com\/wp-content\/uploads\/2020\/01\/signature-min.png&quot;,&quot;id&quot;:107}}" data-widget_type="tmx-juristic_about.default">
                                        <div class="elementor-widget-container">
                                            <section class="about-section juristic-about">
                                                <div class="row">
                                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-3c7887f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3c7887f" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-45bac5d" data-id="45bac5d" data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-ce24696 elementor-widget elementor-widget-tmx-juristic_product" data-id="ce24696" data-element_type="widget" data-widget_type="tmx-juristic_product.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="shop-pg-section">
                                                                                        <div class="shop-grids">
                                                                                            @foreach ($galery as $a)
                                                                                            <div class="grid">
                                                                                                <div class="img-cart">
                                                                                                    <div class="img-holder">
                                                                                                        <img src="/storage/gallery/{{$a->img}}" alt="">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            
            <br>
            <br>
            <br>
            
            <section class="elementor-section elementor-top-section elementor-element elementor-element-c5f4ed3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c5f4ed3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            </section>    
        </div>
    </div>
</div>
@endsection

