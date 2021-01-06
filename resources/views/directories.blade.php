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
                                                                                                <h2>Direktori</h2>
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
            <br>
            <br>
           
            <section class="elementor-section elementor-top-section elementor-element elementor-element-3674567 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3674567" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e1a6bf4" data-id="e1a6bf4" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">							
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-b70b4ac elementor-widget elementor-widget-heading" data-id="b70b4ac" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">DIREKTORI DAN INFO PERKARA MA RI</h2>		
                                        </div>
                                    </div>
                                    
                                    <div class="elementor-element elementor-element-30a246c elementor-widget elementor-widget-text-editor" data-id="30a246c" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            @foreach ($directory as $a)
                                            <div class="elementor-text-editor elementor-clearfix">
                                                <h4>{{$a->title}}</h4>
                                                <p><a href="{{$a->link}}">{{$a->link}}</p>
                                            </div>
                                            @endforeach
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