@extends('layout.app')

@section('css')
   
@endsection


@section('content')
    <div class="page-content header-clear-small">        
        <div data-height="130" class="caption caption-margins round-medium shadow-huge">
            <div class="caption-center right-15 top-15 text-right">
            </div>
            <div class="caption-center left-15 text-left">
                <h1 class="color-white bolder">Tolerance Color</h1>
                <p class="under-heading color-white opacity-90 bottom-0">
                    Tolerance Color Definition
                </p>
            </div>
            <div class="caption-overlay bg-black opacity-70"></div>
            <div class="caption-bg bg-8"></div>
        </div>  
                    
        <div class="content-boxed">
            <div class="content bottom-0">
                <div class="contact-form">
                    <form action="{{ url('config/save') }}" method="post" class="contactForm" id="contactForm">
                        {!! csrf_field() !!}
                        <fieldset>
                            <div class="link-list link-list-1">
                                <a href="#" data-menu="menu-forgot" class="no-border">
                                    <i class="fa fa-cog color-blue2-dark"></i>
                                    <span>Tolerance Color Value</span>
                                    <em class="bg-blue2-dark">{{ !empty($data->val) ? $data->val : '' }} %</em>
                                    <i class="fa fa-angle-right"></i>
                                </a>                                
                            </div>
                        </fieldset>
                        <div id="menu-forgot" class="menu menu-box-bottom menu-box-detached round-medium" data-menu-height="230" data-menu-effect="menu-over" style="height: 230px; opacity: 1; display: block;">
                            <div class="content">
                                <h2 class="uppercase ultrabold top-20">Tolerance Color Value ?</h2>
                                <p class="font-11 under-heading bottom-20">
                                    Let's get change Tolerance Color Value
                                </p>
                                <div class="input-style input-style-1 has-icon input-required">
                                    <i class="input-icon fa fa-cog"></i>
                                    <em style="color: white">%</em>
                                    <input type="text"  name="val" value="{{ !empty($data->val) ? $data->val : '' }}" placeholder="20">
                                </div> 
                                <input type="submit" class="button button-full button-m shadow-large button-round-small bg-highlight top-20" value="SAVE TOLERANCE COLOR" />
                            </div>
                        </div>
                    </form>			
                </div>
            </div>
        </div>
    </div>    

    <?php if(!empty(Session::get('msg-success'))): ?>
        <a href="#" data-toast-id="toast-success" id="toast-success-trigger" class="d-none" ></a>
        <div class="toast toast-top" id="toast-success">
            <p class="color-white"><i class='fa fa-check right-10'></i> {{ Session::get('msg-success') }}</p>
            <div class="toast-bg opacity-95 bg-green1-dark"></div>
        </div>     
    <?php endif; ?>        
@endsection


@section('js')
    <script type="text/javascript">
        <?php if(!empty(Session::get('msg-success'))): ?>
           setTimeout(function(){$("#toast-success-trigger").click()},1000);
        <?php endif; ?>             
    </script>    
@endsection

