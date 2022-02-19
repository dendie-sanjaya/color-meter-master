@extends('layout.app')

@section('css')
   
@endsection


@section('content')
    <div class="page-content header-clear-small">        
        <div data-height="130" class="caption caption-margins round-medium shadow-huge">
            <div class="caption-center right-15 top-15 text-right">
                <a href="javascript:window.location = '{{ url('colorPattern') }}'" class="back-button button button-xs button-round-huge bg-highlight">Back Home</a>
            </div>
            <div class="caption-center left-15 text-left">
                <h1 class="color-white bolder">Pattern Color</h1>
                <p class="under-heading color-white opacity-90 bottom-0">
                    Pattern Color Definition
                </p>
            </div>
            <div class="caption-overlay bg-black opacity-70"></div>
            <div class="caption-bg bg-8"></div>
        </div>  
                    
        <div class="content-boxed">
            <div class="content bottom-0">
                <div class="contact-form">
                    <form action="{{ url('colorPattern/save') }}" method="post" class="contactForm" id="contactForm">
                        {!! csrf_field() !!}
                        <fieldset>
                            <div class="formValidationError bg-red2-dark" id="contactNameFieldError">
                                <span class="center-text uppercase color-white ultrabold">Name is required!</span>
                            </div>
                            <div class="form-field form-name">
                                <label class="contactNameField color-theme" for="contactNameField">Name:<span>(required)</span></label>
                                <input type="text" name="name" value="{{ !empty($data->name) ? $data->name : '' }}" class="contactField round-small" id="contactNameField" required/>
                                <input type="hidden" name="id" value="{{ !empty($data->id) ? $data->id : '' }}"  />
                            </div>
                            <div class="input-style input-style-2 input-required margin-top-1">
                                <label class="contactNameField color-theme" for="contactNameField">Grade List:</label>
                                <select name="is_default" id="is_default" class="contactField round-small" >
                                    <option value="" style="background-color: #1f1f1f;">== Select Grade ==</option>
                                    @foreach (['no', 'yes'] as $val)
                                        @php $slct = $val == (!empty($data->is_default) ? $data->is_default : '' )  ? ' selected' : ''; @endphp
                                        <option value="{{ $val }}" {{$slct}} style="background-color: #1f1f1f;">{{ ucwords($val) }}</option>
                                    @endforeach
                                </select>
                            </div> 
                            <div class="form-field form-text">
                                <label class="contactMessageTextarea color-theme" for="contactMessageTextarea">Description:</label>
                                <textarea name="description" class="contactTextarea round-small" id="contactMessageTextarea">{{ !empty($data->description) ? $data->description : '' }}</textarea>
                            </div>
                            <div class="form-button">
                                <input type="submit" class="button bg-highlight button-m button-full round-small bottom-0 shadow-huge" value="Save Pattern Color" />
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

