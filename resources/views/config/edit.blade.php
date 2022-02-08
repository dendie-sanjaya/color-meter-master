@extends('layout.app')

@section('css')
   
@endsection


@section('content')
    <div class="page-content header-clear-small">        
        <div data-height="130" class="caption caption-margins round-medium shadow-huge">
            <div class="caption-center right-15 top-15 text-right">
                <a href="{{ url('dashboard') }}" class="back-button button button-xs button-round-huge bg-highlight">Back Home</a>
            </div>
            <div class="caption-center left-15 text-left">
                <h1 class="color-white bolder">Config Color</h1>
                <p class="under-heading color-white opacity-90 bottom-0">
                    Config Color Definition
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
                                <a href="#" data-menu="menu-forgot">
                                    <!-- <i class="fa fa-question-circle color-magenta2-dark"></i> -->
                                    <i class="fas fa-key color-magenta2-dark"></i>
                                    <span>Config Reset</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </fieldset>
                        <div id="menu-forgot" class="menu menu-box-bottom menu-box-detached round-medium" data-menu-height="230" data-menu-effect="menu-over" style="height: 230px; opacity: 1; display: block;">
                            <div class="content">
                                <h2 class="uppercase ultrabold top-20">Change Config Color?</h2>
                                <p class="font-11 under-heading bottom-20">
                                    Let's get you back into your config. Enter your Config Apps.
                                </p>
                                <div class="input-style has-icon input-style-1 input-required bottom-30">
                                    <!-- <i class="input-icon fa fa-at"></i> -->
                                    <i class="input-icon fab fa-expeditedssl "></i>
                                    <span>Config</span>
                                    <em>(required)</em>
                                    <input type="text"  name="val" value="{{ !empty($data->val) ? $data->val : '' }}" placeholder="Config">
                                </div>   
                                <input type="submit" class="button button-full button-m shadow-large button-round-small bg-highlight top-20" value="SEND CONFIG" />
                            </div>
                        </div>
                    </form>			
                </div>
            </div>
        </div>
    </div>    
@endsection


@section('js')

@endsection

