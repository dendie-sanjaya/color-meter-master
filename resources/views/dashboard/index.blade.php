@extends('layout.app')

@section('css')
   <style type="text/css">       
     #cs{  display:block }

     #output {  display: block; }

    .videobox, #video{
        text-align: center;
        position: relative;
        height: 100%;
        width: 100%;
    }
   </style>
   
@endsection

@section('content')
    <div class="page-content header-clear-small">        
        <div id="header-1" data-height="130" class="caption caption-margins round-medium shadow-huge" >
            <div class="caption-center left-15 text-left">
                <h1 class="color-white bolder">Scan Color</h1>
                <p class="under-heading color-white opacity-90 bottom-0">
                    Scan Color
                </p>
            </div>
            <div class="caption-overlay bg-black opacity-70"></div>
            <div class="caption-bg bg-8"></div>
        </div>  
                    
        <div class="content-boxed" id="header-2">
            <div class="content">
                <h3 class="bolder">Color Meter Nutricell</h3>
                <p style="text-align: justify;">
                    welcome to color meter Nutricell, an application for detecting captured colors which are then converted to hexadecimal or rgb, You can capture picture from your foto galery or camera
                </p>
            </div>            
        </div>

        <div class="content-boxed" id="header-3" style="margin-top: -50px; display: none">  
            <div class="content" style="text-align: center;">          
                <h3 class="bolder">Color Meter Nutricell</h3>
            </div>  
        </div>

        <div class="content-boxed" style="display: none;" id="capture-image" > 
            <div class="content"  style="cursor: pointer;" >
                <h4 class="bolder" style="text-align: center;">Please Pick Color</h4>
                <input type="file" accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none; color:white">
                <div class="thumbnail">
                  <div class="preview"></div>
                  <canvas id="cs" style="width: 100%; min-height: 100px">                                                      
                  <!--
                  <img  id="output" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAApgAAAKYB3X3/OAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAANCSURBVEiJtZZPbBtFFMZ/M7ubXdtdb1xSFyeilBapySVU8h8OoFaooFSqiihIVIpQBKci6KEg9Q6H9kovIHoCIVQJJCKE1ENFjnAgcaSGC6rEnxBwA04Tx43t2FnvDAfjkNibxgHxnWb2e/u992bee7tCa00YFsffekFY+nUzFtjW0LrvjRXrCDIAaPLlW0nHL0SsZtVoaF98mLrx3pdhOqLtYPHChahZcYYO7KvPFxvRl5XPp1sN3adWiD1ZAqD6XYK1b/dvE5IWryTt2udLFedwc1+9kLp+vbbpoDh+6TklxBeAi9TL0taeWpdmZzQDry0AcO+jQ12RyohqqoYoo8RDwJrU+qXkjWtfi8Xxt58BdQuwQs9qC/afLwCw8tnQbqYAPsgxE1S6F3EAIXux2oQFKm0ihMsOF71dHYx+f3NND68ghCu1YIoePPQN1pGRABkJ6Bus96CutRZMydTl+TvuiRW1m3n0eDl0vRPcEysqdXn+jsQPsrHMquGeXEaY4Yk4wxWcY5V/9scqOMOVUFthatyTy8QyqwZ+kDURKoMWxNKr2EeqVKcTNOajqKoBgOE28U4tdQl5p5bwCw7BWquaZSzAPlwjlithJtp3pTImSqQRrb2Z8PHGigD4RZuNX6JYj6wj7O4TFLbCO/Mn/m8R+h6rYSUb3ekokRY6f/YukArN979jcW+V/S8g0eT/N3VN3kTqWbQ428m9/8k0P/1aIhF36PccEl6EhOcAUCrXKZXXWS3XKd2vc/TRBG9O5ELC17MmWubD2nKhUKZa26Ba2+D3P+4/MNCFwg59oWVeYhkzgN/JDR8deKBoD7Y+ljEjGZ0sosXVTvbc6RHirr2reNy1OXd6pJsQ+gqjk8VWFYmHrwBzW/n+uMPFiRwHB2I7ih8ciHFxIkd/3Omk5tCDV1t+2nNu5sxxpDFNx+huNhVT3/zMDz8usXC3ddaHBj1GHj/As08fwTS7Kt1HBTmyN29vdwAw+/wbwLVOJ3uAD1wi/dUH7Qei66PfyuRj4Ik9is+hglfbkbfR3cnZm7chlUWLdwmprtCohX4HUtlOcQjLYCu+fzGJH2QRKvP3UNz8bWk1qMxjGTOMThZ3kvgLI5AzFfo379UAAAAASUVORK5CYII=">
                  -->
                </div>
                <div class="result" id="result" >
                </div>
            </div>

            <div class="content">
                <input type="hidden" name="hexadecimal" id="hexadecimal" value="">
                <input type="hidden" name="rgb" id="rgb" value="">
                <div class="input-style input-style-2 input-required margin-top-1">
                    <label class="contactNameField color-theme" for="contactNameField" >Grade Color</label>
                    <select name="color_grade_id" id="color_grade_id" class="contactField round-small" >
                        <?php foreach ($dataColorGrade as $val): ?>
                            <option value="{{ $val->id }}" style="background-color: #1f1f1f;">{{ $val->name }}</option>
                        <?php endforeach; ?>
                    </select>                
                </div>    

                <div class="input-style input-style-2 input-required margin-top-1">
                    <label class="contactNameField color-theme" for="contactNameField">Color Set</label>
                    <select name="color_patern_id" id="color_pattern_id" class="contactField round-small" >
                        <?php foreach ($dataColorPattern as $val): ?>
                            <option value="{{ $val->id }}" style="background-color: #1f1f1f;">{{ $val->name }}</option>
                        <?php endforeach; ?>
                    </select>                
                </div>   
                <a href="#"  class="button button-xxs shadow-small button-round-small bg-green2-dark round-small;" onclick="saveColor()" style="width: 100%; text-align: center;" >Save Color</a><br>
            </div>                  
        </div>  
        <div class="content">
            <label for="file" class="button button-xs button-round shadow-huge button-full bg-highlight" style="cursor: pointer;">Capture Image</label>
        </div>          
    </div>

    <a href="#" data-menu="menu-success" id="show-box-succes" style="display: none">Show Box Succes</a>
    <div id="menu-success"  class="menu menu-box-modal round-medium" data-menu-height="315" data-menu-width="90%"  data-menu-effect="menu-over">
        <h1 class="center-text top-30"><i class="fa fa-3x fa-check-circle color-green1-dark"></i></h1>
        <h1 class="center-text uppercase ultrabold top-30">Save Color Success</h1>
        <p class="boxed-text-large">
             You can continue with your previous actions.
        </p>
        <a href="#" class="close-menu button button-center-medium button-s shadow-large button-round-small bg-green1-light">OK</a>
    </div>       

    <a href="#" data-menu="menu-warning" id="show-box-warning" style="display: none">Show Box Warning</a>
    <div id="menu-warning"  class="menu menu-box-modal round-medium" data-menu-height="315"  data-menu-width="90%"  data-menu-effect="menu-over">
        <h1 class="center-text top-30"><i class="fa fa-3x fa-times color-red2-dark"></i></h1>
        <h1 class="center-text uppercase ultrabold top-30">Save Color Failed</h1>
        <p class="boxed-text-large">
             You can continue with your previous action and try again save color
        </p>
        <a href="#" class="close-menu button button-center-medium button-s shadow-large button-round-small bg-red1-light">Go Back</a>
    </div>   

    <a href="#" data-menu="menu-info" id="show-box-info" style="display: none">Show Box Warning</a>
    <div id="menu-info"  
         class="menu menu-box-modal round-medium" 
         data-menu-height="240" 
         data-menu-width="90%" 
         data-menu-effect="menu-over">
        <div class="boxed-text-huge">
            <h3 class="center-text uppercase ultrabold top-30">Opps, Color Already Exist</h3>
            <p>
                Opps you color pick is Already Exist, please choose another color or another grade or another pattern
            </p>
            <a href="#" class="close-menu button button-center-medium button-s shadow-large button-round-small bg-red1-light">Go Back</a>
        </div>
    </div>    
    <img id="output" style="width: 100%; min-height: 100px; visibility: hidden;" />  
@endsection

@section('js')
<script type="text/javascript">
    var glb_first_capture_image = true;
    /*start convert image to base64 */
    function saveColor() {
      var hexadecimal = $('#hexadecimal').val();
      var rgb = $('#rgb').val(); 
      var color_grade_id = $('#color_grade_id').val();
      var color_patern_id = $('#color_pattern_id').val();
      var _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({ 
        url: "<?php echo url('colorList/saveAjax') ?>",
        type:"POST",
        data:{
          hexadecimal:hexadecimal,
          rgb:rgb,
          color_grade_id:color_grade_id,
          color_pattern_id:color_patern_id,
          _token: _token
        },
        success:function(response){
          console.log(response);
          if(response.code == 200) {
            $('#show-box-succes').click();
          } else {
            $('#show-box-info').click();            
          }
        },
        error: function(error) {
          console.log(error);
            $('#show-box-warning').click();
        }
       });
    }
    /*end convert image to base64 */

    /*start convert image to base64 */
    function handleFileSelect(evt) {
      var f = evt; 
      var reader = new FileReader();
      reader.onload = (function(theFile) {
        return function(e) {
          var binaryData = e.target.result;
          var base64String = window.btoa(binaryData);
          //document.getElementById('base64').value = base64String;
          var image = document.getElementById('output');
          image.src = 'data:image/png;base64,'+base64String;
          //URL.createObjectURL(base64String);
        };
      })(f);
      reader.readAsBinaryString(f);
    }
    /*end convert image to base64 */

    /*start load image */
    var loadFile = function(event) {
        var loading = '<div  style="font-weight:bold; padding:3px; margin:5px; text-align:center; border:white 2px solid; background-color: white">Please Click Color</div>';
        document.getElementById('result').innerHTML=loading; 
        document.getElementById('result').style.display = 'block';
        var fileinput = event.target.files[0];
        handleFileSelect(fileinput);
        document.getElementById('capture-image').style.display = 'block';
        hide_header();
        glb_first_capture_image = true;                  
    };
    /*end load image */

    /*start get hex dan rgb from foto */
    //var img = _('.thumbnail img'),
    var img = _('#output'),
        canvas = _('#cs'),
        result = _('.result'),
        preview = _('.preview'),x = '',y = '';

    canvas.addEventListener('click', function(e){
    //img.addEventListener('click', function(e){
        if(glb_first_capture_image) {/*
          var x = Math.ceil($("#output").height()/2);
          var y = Math.ceil($("#output").width()/2);
          */

          var x = (Math.ceil($("#cs").width()/2));
          //var y = (Math.ceil($("#cs").height()/2));
          var y = (Math.ceil(img.height/2));          
          //alert('width:' + x + 'height:' + y);
          glb_first_capture_image = false;
        } else {
            if(e.offsetX) {
              x = e.offsetX;
              y = e.offsetY; 
            }
            else if(e.layerX) {
              x = e.layerX;
              y = e.layerY;
            }
        }

        useCanvas(canvas,img,function(){
            var p = canvas.getContext('2d')
            .getImageData(x, y, 1, 1).data; 
            result.innerHTML = '<div  style="font-weight:bold; padding:3px; margin:5px; text-align:center; border:white 2px solid; background-color: '+rgbToHex(p[0],p[1],p[2])+'">Hexadecimal: '+rgbToHex(p[0],p[1],p[2])+'&nbsp;&nbsp;'+
             'RGB: ('+
              p[0]+','+
              p[1]+','+
              p[2]+')</div>';

            canvas.getContext('2d').beginPath();
            canvas.width  = $("#cs").width();
            //canvas.height = $("#cs").height();   
            //canvas.getContext('2d').drawImage(img, 0, 0, $("#cs").width(), $("#cs").height());
            canvas.height = img.height;
            canvas.getContext('2d').drawImage(img, 0, 0, $("#cs").width(), img.height);

            canvas.getContext('2d').arc(x, y, 10, 0, 2 * Math.PI,true);
            canvas.getContext('2d').lineWidth = 6;
            canvas.getContext('2d').strokeStyle = "#FFFFFF";
            canvas.getContext('2d').stroke(); 
            canvas.getContext('2d').closePath();      
            
            document.body.style.background =rgbToHex(p[0],p[1],p[2]);  
            document.getElementById('hexadecimal').value = rgbToHex(p[0],p[1],p[2]); 
            document.getElementById('rgb').value = p[0]+','+p[1]+','+p[2];  
          });
        },false);


    function useCanvas(el,image,callback){
      el.width = $("#cs").width();
      el.height = image.height; 
      el.getContext('2d')
      //.drawImage(image, 0, 0, $("#cs").width(), $("#cs").height());
      .drawImage(image, 0, 0, $("#cs").width(), image.height);
      return callback();
    }
    function _(el){
      return document.querySelector(el);
    };
    function componentToHex(c) {
      var hex = c.toString(16);
      return hex.length == 1 ? "0" + hex : hex;
    }
    function rgbToHex(r, g, b) {
      return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
    }
    function findPos(obj) {
      var curleft = 0, curtop = 0;
      if (obj.offsetParent) {
        do {
          curleft += obj.offsetLeft;
          curtop += obj.offsetTop;
        } while (obj = obj.offsetParent);
        return { x: curleft, y: curtop };
      }
      return undefined;
    }    
    /*end get hex dan rgb from foto */

    //document.cookie = "integria-scan-color=integria-scan-color"; 
     function getCookie(user) {
        var cookieArr = document.cookie.split(";");
        for(var i = 0; i < cookieArr.length; i++) {
            var cookiePair = cookieArr[i].split("=");
            if(user == cookiePair[0].trim()) {
                return true;
            }
        }
        return false;
    }

    function checkCookie() {
      var user = getCookie("integria-scan-color");
      if (!user) {
         window.location = '<?php echo url('splashScreen') ?>'
      }
    }

    checkCookie();

    function rld() {
      window.location.reload();      
    }

    function autoClick() {
      setTimeout(function(){$('#cs').trigger('click'); },1000);    
    }

    function hide_header() {
       document.getElementById('header-1').style.display = 'none';
       document.getElementById('header-2').style.display = 'none';
       document.getElementById('header-3').style.display = 'block';
       //setTimeout(function(){$('#output').trigger('click')},1000);
       autoClick();  

    }
</script>
@endsection

