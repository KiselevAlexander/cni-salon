<div class="form-container">
			<form id="THEFORM3" action="javascript:void(null);">
				<fieldset>
					<div class="field1">
						<input class="name_input name3" type="text" name="name_input" value="Ваше имя:" onblur="if(this.value == '') { this.value='Ваше имя:'}" onfocus="if (this.value == 'Ваше имя:') {this.value=''}" />
						<span class="unit1"></span>
					</div>
					<div class="field2">
						<input class="phone_input phone3" type="text" name="phone_input" value="Ваш телефон:"  onblur="if(this.value == '') { this.value='Ваш телефон:'}" onfocus="if (this.value == 'Ваш телефон:') {this.value=''}" />
						<span class="unit2"></span>
					</div>
					<div class="field3">
						<input class="submit_upload3" type="submit" value="Записаться" />
					</div>
				</fieldset>
			</form>
			<div class="msg3"></div>
</div>
<script>
	$('.submit_upload3').click(function(){
		var name = $('.name3').val();
        var phone= $('.phone3').val();
        
        if(name=='' || name=='Ваше имя:'){
            $('.name3').css({'border' : '1px solid red'});
            var name = false;
        }else{
            $('.name3').css({'border' : '1px solid #d6d6d6'});
            var name = true;
        }

        if(phone=='' || phone=='Ваш телефон:'){
            $('.phone3').css({'border' : '1px solid red'});
            var phone = false;
        }else{
            $('.phone3').css({'border' : '1px solid #d6d6d6'});
            var phone = true;
        }
        
        
if (name && phone) {

		var msg   = $('#THEFORM3').serialize();
		$.ajax({
	          type: 'POST',
	          url: '/request.php',
	          data: msg,
	          success: function(data) {
	          	$('#THEFORM3').css('display', 'none');
	          	$('.msg3').css('display', 'block');
	          	$('.msg3').html(data);
	          	if (window.location.pathname.split('/')[1] == 'services' || window.location.pathname.split('/')[1] == 'mens'){
	          		// yaCounter38449515.reachGoal('zap7');
	          		yaCounter38449515.reachGoal('send');
	          	}else{
	          		yaCounter38449515.reachGoal('zap3');
	          	}
	          	fbq('track', 'Lead');
	            //$('.overlay').css('display', 'none');
	          },
	          error:  function(xhr, str){
		    		alert('Возникла ошибка: ' + xhr.responseCode);
	          }
	    });
};
	});
</script>