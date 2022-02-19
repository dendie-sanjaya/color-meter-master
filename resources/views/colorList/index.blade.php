@extends('layout.app')

@section('css')
   
@endsection


@section('content')
    <div class="page-content header-clear-small">        
        <div data-height="130" class="caption caption-margins round-medium shadow-huge">
            <div class="caption-center right-15 top-15 text-right">
                <a href="{{ url('colorList/edit/0') }}" class="back-button button button-xs button-round-huge bg-highlight">Add Color List</a>
            </div>
            <div class="caption-center left-15 text-left">
                <h1 class="color-white bolder">Color List</h1>
                <p class="under-heading color-white opacity-90 bottom-0">
                    Color List Definition
                </p>
            </div>
            <div class="caption-overlay bg-black opacity-70"></div>
            <div class="caption-bg bg-8"></div>
        </div>  

        <div class="content bottom-0">
            <form action="{{ url('colorList') }}" method="get">
            <div class="one-half">
                <div class="input-style input-style-2 input-required margin-top-1">
                    <select name="color_grade_id" id="color_grade_id"class="contactField" onchange="this.form.submit()" >
                        <?php foreach ($dataColorGrade as $val): ?>
                            <option value="{{ $val->id }}" {{ $val->id == $color_grade_id ? 'selected' : '' }} style="background-color: #1f1f1f;">{{ $val->name }}</option>
                        <?php endforeach; ?>
                    </select>                
                </div>
            </div>
            <div class="one-half last-column">
                <div class="input-style input-style-2 input-required margin-top-1">
                    <select name="color_patern_id" id="color_patern_id" class="contactField" onchange="this.form.submit()" >
                        <?php foreach ($dataColorPattern as $val): ?>
                            <option value="{{ $val->id }}"  {{ $val->id == $color_patern_id ? 'selected' : '' }} style="background-color: #1f1f1f;">{{ $val->name }}</option>
                        <?php endforeach; ?>
                    </select>                    
               </div>                 
            </div>
            <div class="clear"></div>    
            </form>
        </div>

        <?php if(count($data) > 0): ?>            
	        <div class="content-boxed top-0">
	            <div class="content accordion-style-2">
	            	<?php $i = 0 ?>
	        		<?php foreach($data as $val): ?>
		                <a data-accordion="accordion-content-<?php echo $i ?>" href="#" class="accordion-toggle-first">
		                    <i class="accordion-icon-left fa fa-layer-group color-red1-light"></i>
		                    Hexadecimal <?php echo $val->hexadecimal ?>, RGB <?php echo $val->rgb ?>
		                    <i class="accordion-icon-right fa fa-plus"></i>
	                    </a>
		
		                </a>
		                <div id="accordion-content-<?php echo $i ?>" class="accordion-content bottom-10">
                            <div style="width: 100%;  background-color: <?php echo $val->hexadecimal ?>; border: 2px solid white ">&nbsp;</div>
                            <a data-accordion="accordion-content-<?php echo $i ?>" href="#" class="accordion-toggle-first">                                
                                <span class="bg-blue2-dark" style="text-align: center; padding: 4px; border-radius: 4px; margin-right: 10px">
                                 Grade Color <?php echo $val->name_grade ?>
                                </span>
                                 
                                <span class="bg-red2-dark" style="text-align: center; padding: 4px; border-radius: 4px; ">
                                 Pattern Color <?php echo $val->name_pattern ?>
                                </span>
                            </a>
	                        <span class="text-right">
		                       <a href="{{ url('colorList/edit/'.$val->id) }}" data-menu="menu-confirm"><i class="fa fa-edit color-white2-dark"></i></a> 
		                       <a href="#" onclick="confirmDelete('{{ url('colorList/delete/'.$val->id) }}')" data="{{ $val->id }}" data-menu="menu-confirm"><i class="fa fa-trash color-white2-dark"></i></a> 
	                   	    </span>
		                </div> 
		            <?php $i++ ?>    
		            <?php endforeach ?>    
	            </div> 
	        </div>
	    <?php else : ?>    	
			<div class="content">
		        <div class="shadow-large alert alert-small alert-round-medium bg-yellow1-dark">
		            <i class="fa fa-exclamation-triangle"></i>
		            <span>Data is Empty</span>
		        </div>           
		    </div>    	
		<?php endif; ?>    	
    </div>


   <div id="menu-confirm" class="menu menu-box-bottom menu-box-detached round-medium" data-menu-height="200" data-menu-effect="menu-over">
        <h1 class="center-text uppercase ultrabold top-20">Are you sure?</h1>
        <p class="boxed-text-large">
            Are you sure delete grade color 
        </p>
        <div class="content left-50 right-50">
            <div class="one-half">
                <a id="link-delete" href="#" class="close-menu button button-center-large button-s shadow-large button-round-small bg-green1-dark">Yes</a>
            </div>
            <div class="one-half last-column">
                <a  href="#" class="close-menu button button-center-large button-s shadow-large button-round-small bg-red1-dark">No</a>
            </div>
            <div class="clear"></div>
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
    function confirmDelete(p) {
       $('#link-delete').attr("href", p);
    }

    $("#link-delete").click(function(){ window.location = $('#link-delete').attr("href") });

    <?php if(!empty(Session::get('msg-success'))): ?>
       setTimeout(function(){$("#toast-success-trigger").click()},1000);
    <?php endif; ?>        	  	
  </script>
   
@endsection

