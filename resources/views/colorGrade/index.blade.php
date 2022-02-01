@extends('layout.app')

@section('css')
   
@endsection


@section('content')
    <div class="page-content header-clear-small">        
        <div data-height="130" class="caption caption-margins round-medium shadow-huge">
            <div class="caption-center right-15 top-15 text-right">
                <a href="{{ url('colorGrade/edit/0') }}" class="back-button button button-xs button-round-huge bg-highlight">Add Grade Color</a>
            </div>
            <div class="caption-center left-15 text-left">
                <h1 class="color-white bolder">Grade Color</h1>
                <p class="under-heading color-white opacity-90 bottom-0">
                    Grade Color Definition
                </p>
            </div>
            <div class="caption-overlay bg-black opacity-70"></div>
            <div class="caption-bg bg-8"></div>
        </div>  
                    
        <div class="content-boxed">
            <div class="content accordion-style-2">
            	<?php $i = 0 ?>
        		<?php foreach($data as $val): ?>
	                <a data-accordion="accordion-content-<?php echo $i ?>" href="#" class="accordion-toggle-first">
	                    <i class="accordion-icon-left fa fa-layer-group color-red1-light"></i>
	                    <?php echo $val->name ?>
	                    <i class="accordion-icon-right fa fa-plus"></i>
	                </a>
	                <p id="accordion-content-<?php echo $i ?>" class="accordion-content bottom-10">
	                	<?php if(strlen($val->description) > 0): ?>
	                       <?php echo $val->description ?>
	                    <?php else: ?>
                           Nothing Description
	                    <?php endif; ?>   
	                </p> 
	            <?php $i++ ?>    
	            <?php endforeach ?>    
            </div> 
        </div>
    </div>
@endsection


@section('js')
   
@endsection

