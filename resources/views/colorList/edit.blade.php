@extends('layout.app')

@section('css')
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">
@endsection


@section('content')
    <div class="page-content header-clear-small">        
        <div data-height="130" class="caption caption-margins round-medium shadow-huge">
            <div class="caption-center right-15 top-15 text-right">
                <a href="javascript:window.location = '{{ url('colorList') }}'" class="back-button button button-xs button-round-huge bg-highlight">Back Home</a>
            </div>
            <div class="caption-center left-15 text-left">
                <h1 class="color-white bolder">Grade Color</h1>
                <p class="under-heading color-white opacity-90 bottom-0">
                    Color List Definition
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
                            <input type="hidden" name="id" value="{{ !empty($data->id) ? $data->id : '' }}"  />
                            <!--
                            <div class="formValidationError bg-red2-dark" id="contactNameFieldError">
                                <span class="center-text uppercase color-white ultrabold">Title is required!</span>
                            </div>
                            -->
                            <!--
                            <div class="form-field form-name">
                                <label class="contactNameField color-theme" for="contactNameField">Title:<span>(required)</span></label>
                                <input type="text" name="title" value="{{ !empty($data->title) ? $data->title : '' }}" class="contactField round-small" id="contactNameField" required/>
                            </div>
                            -->
                            <div class="form-field form-name">
                                <label class="contactNameField color-theme" for="contactNameField">Hexadecimal:</label>
                                <input type="text" name="hexadecimal" value="{{ !empty($data->hexadecimal) ? $data->hexadecimal : '' }}" class="contactField round-small" id="hexadecimal" required />
                            </div>                            
                            <div class="form-field form-name">
                                <label class="contactNameField color-theme" for="contactNameField">RGB:</label>
                                <input type="text" name="rgb" value="{{ !empty($data->rgb) ? $data->rgb : '' }}" class="contactField round-small colorpicker" id="rgb" />
                            </div>
                            <div class="input-style input-style-2 input-required margin-top-1">
                                <label class="contactNameField color-theme" for="contactNameField">Grade Color:</label>
                                <select required name="color_grade_id" id="color_grade_id" class="contactField round-small" >
                                    <option value="" style="background-color: #1f1f1f;">== Select Grade ==</option>
                                    @foreach ($grade as $val)
                                        @php $slct = $val->id == (!empty($data->color_grade_id) ? $data->color_grade_id : '' )  ? ' selected' : ''; @endphp
                                        <option value="{{ $val->id }}" {{$slct}} style="background-color: #1f1f1f;">{{ $val->name }}</option>
                                    @endforeach
                                </select>
                            </div>                            
                            <div class="input-style input-style-2 input-required margin-top-1">
                                <label class="contactNameField color-theme" for="contactNameField">Set Color:</label>
                                <select required name="color_pattern_id" id="color_pattern_id" class="contactField round-small">
                                    <option value="" style="background-color: #1f1f1f;">== Select Pattern ==</option>
                                    @foreach ($pattern as $val)
                                         @php $slct = $val->id == (!empty($data->color_pattern_id) ? $data->color_pattern_id : '' ) ? ' selected' : ''; @endphp
                                        <option value="{{ $val->id }}" {{$slct}}  style="background-color: #1f1f1f;">{{ $val->name }}</option>
                                    @endforeach
                                </select>
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

@endsection

