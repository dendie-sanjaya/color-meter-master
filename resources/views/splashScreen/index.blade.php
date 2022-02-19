@extends('layout.splash')

@section('css')
   
@endsection


@section('content')
  <div id="page">
        
    <div id="page-preloader">
        <div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
    </div>

        
    <div class="page-content">  
        
        <!--
        <div class="caption-top">
            <a href="#" data-toggle-theme class="button button-xxs button-round-huge shadow-huge button-center-small bg-green1-dark top-20"><i class="fa fa-lightbulb right-15"></i>Dark Mode</a>
        </div>   
        -->
        
        <div class="cover-wrapper cover-has-buttons">    
            <a href="javascript:window.location='{{ url('dashboard') }}'" class="cover-button button button-round-huge shadow-large button-full bg-green1-dark left-40 right-40 button-m scale-box">GET STARTED HERE</a>
            <!--
            <a href="#" class="cover-next color-gray2-dark">Next<i class="fa fa-angle-right left-10"></i></a>
            <a href="#" class="cover-prev color-gray2-dark"><i class="fa fa-angle-left right-10"></i>Previous</a>
            -->
            <div class="cover-slider owl-carousel">
                <!--
                <div data-height="cover" class="caption">                    
                    <div class="caption-top caption-height-70">
                        <div class="caption-overlay bg-gradient-fade"></div>
                        <div class="caption-bg bg-18"></div>
                    </div>
                    
                    <div class="caption-bottom bottom-100">
                        <h1 class="center-text bolder font-33 bottom-0">Hello. I'm Sticky</h1>
                        <h6 class="center-text thiner font-15 bottom-20 color-highlight">An absolutely amazing Mobile Website</h6>
                        <p class="color-theme boxed-text-huge opacity-80 bottom-50">
                            I'm Sticky Footer Menu that everyone requested, packed with tons of awesome features.
                        </p>
                    </div>
                </div>
                -->
                <!--
                <div data-height="cover" class="caption">
                    
                    <div class="caption-top caption-height-70">
                        <div class="caption-overlay bg-gradient-fade"></div>
                        <div class="caption-bg bg-20"></div>
                    </div>
                    
                    <div class="caption-bottom bottom-100">
                        <h1 class="center-text bolder font-33 bottom-0">I'm Super Fast</h1>
                        <h6 class="center-text thiner font-15 bottom-20 color-highlight">Made to Rock your Mobile</h6>
                        <p class="color-theme boxed-text-huge opacity-80 bottom-50">
                            Sticky Mobile is very fast, easy to use and looks absolutely amazing.
                        </p>
                    </div>
                </div>
                -->                  
                <div data-height="cover" class="caption">  
                    <div class="caption-top caption-height-70">
                        <div class="caption-overlay bg-gradient-fade"></div>
                        <div class="caption-bg bg-21"></div>
                    </div>

                    <div class="caption-bottom bottom-100">
                        <h1 class="center-text bolder font-33 bottom-0">Integria Scan Color</h1>
                        <h6 class="center-text thiner font-15 bottom-20 color-highlight">Scan Your Color</h6>
                        <p class="color-theme boxed-text-huge opacity-80 bottom-50">
                            Integria Scan Color allows you to easily scan color and organize to your color collection
                        </p>
                    </div>
                </div>            
                <!--
                <div data-height="cover" class="caption">  
                                        
                    <div class="caption-top caption-height-70">
                        <div class="caption-overlay bg-gradient-fade"></div>
                        <div class="caption-bg bg-28"></div>
                    </div>
                    
                    <div class="caption-bottom bottom-100">
                        <h1 class="center-text bolder font-33 bottom-0">Dark Mode Ready</h1>
                        <h6 class="center-text thiner font-15 bottom-20 color-highlight">Turn off the Lights! Make it Darker</h6>
                        <p class="color-theme boxed-text-huge opacity-80 bottom-50">
                            Dark mode integrated natively into the code, to make things easy for you to change.
                        </p>
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>


    <div class="menu-hider"></div>
</div>

@endsection


@section('js')
  <script type="text/javascript">

    $(document).ready(function(){
        document.cookie = "integria-scan-color=integria-scan-color;path=/;secure";  
        //setTimeout(redirect, 5000);

        //$(".page").fadeIn(5000);

        function redirect() {
            window.location = '<?php echo url('dashboard') ?>';
        }

    });

  </script>   
@endsection

