@extends('layout.app')

@section('css')
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">
@endsection


@section('content')
    <div class="page-content header-clear-small">        
        <div data-height="130" class="caption caption-margins round-medium shadow-huge">
            <div class="caption-center right-15 top-15 text-right">
                <a href="{{ url('colorGrade') }}" class="back-button button button-xs button-round-huge bg-highlight">Back Home</a>
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
            <div class="content bottom-0">
                <div class="contact-form">
                    <form action="{{ url('colorList/save') }}" method="post" class="contactForm" id="contactForm">
                        {!! csrf_field() !!}
                        <fieldset>
                            <div class="formValidationError bg-red2-dark" id="contactNameFieldError">
                                <span class="center-text uppercase color-white ultrabold">Title is required!</span>
                            </div>
                            <div class="form-field form-name">
                                <label class="contactNameField color-theme" for="contactNameField">Title:<span>(required)</span></label>
                                <input type="text" name="title" value="{{ !empty($data->title) ? $data->title : '' }}" class="contactField round-small" id="contactNameField" required/>
                                <input type="hidden" name="id" value="{{ !empty($data->id) ? $data->id : '' }}"  />
                            </div>
                            <div class="input-style input-style-2 input-required margin-top-1">
                                <label class="contactNameField color-theme" for="contactNameField">Grade List:</label>
                                <select name="color_grade_id" id="color_grade_id" class="contactField round-small">
                                    <option value="">== Select Grade ==</option>
                                    @foreach ($grade as $id => $name)
                                        <option value="{{ $data->color_grade_id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>                            
                            <div class="input-style input-style-2 input-required margin-top-1">
                                <label class="contactNameField color-theme" for="contactNameField">Pattern List:</label>
                                <select name="color_pattern_id" id="color_pattern_id" class="contactField round-small">
                                    <option value="">== Select Pattern ==</option>
                                    @foreach ($pattern as $id => $name)
                                        <option value="{{ $data->color_pattern_id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div> 
                            <div class="form-field form-name">
                                <label class="contactNameField color-theme" for="contactNameField">RGB:</label>
                                <input type="text" name="rgb" value="{{ !empty($data->rgb) ? $data->rgb : '' }}" class="contactField round-small colorpicker" id="rgb" />
                            </div>
                            <div class="form-field form-name">
                                <label class="contactNameField color-theme" for="contactNameField">Hexadecimal:</label>
                                <input type="text" name="hexadecimal" value="{{ !empty($data->hexadecimal) ? $data->hexadecimal : '' }}" class="contactField round-small" id="hexadecimal" />
                            </div>
                            <div class="form-button">
                                <input type="submit" class="button bg-highlight button-m button-full round-small bottom-0 shadow-huge" value="Save List Color" />
                            </div>
                        </fieldset>
                    </form>			
                </div>
            </div>
        </div>
    </div>    
@endsection


@section('js')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>
    <script>
       $('#rgb').colorpicker();
    </script>
@endsection

