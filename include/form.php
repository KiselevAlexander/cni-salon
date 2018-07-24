			<form id="THEFORM" action="javascript:void(null);">
				<fieldset>
					<div class="field1">
						<input class="name_input name1" type="text" name="name_input" value="Ваше имя:" onblur="if(this.value == '') { this.value='Ваше имя:'}" onfocus="if (this.value == 'Ваше имя:') {this.value=''}" />
						<span class="unit1"></span>
					</div>
					<div class="field2">
						<input class="phone_input phone1" type="text" name="phone_input" value="Ваш телефон:"  onblur="if(this.value == '') { this.value='Ваш телефон:'}" onfocus="if (this.value == 'Ваш телефон:') {this.value=''}" />
						<span class="unit2"></span>
					</div>
					<div class="field3">
						<input class="submit_upload" type="submit" value="Записаться" />
					</div>
				</fieldset>
			</form>
			<div class="msg"></div>
<script>
	$('.submit_upload').click(function(){
		var name = $('.name1').val();
        var phone= $('.phone1').val();
        
        if(name=='' || name=='Ваше имя:'){
            $('.name1').css({'border' : '1px solid red'});
            var name = false;
        }else{
            $('.name1').css({'border' : '1px solid #fff'});
            var name = true;
        }

        if(phone=='' || phone=='Ваш телефон:'){
            $('.phone1').css({'border' : '1px solid red'});
            var phone = false;
        }else{
            $('.phone1').css({'border' : '1px solid #fff'});
            var phone = true;
        }
        
        
if (name && phone) {

		var msg   = $('#THEFORM').serialize();
		$.ajax({
	          type: 'POST',
	          url: '/request.php',
	          data: msg,
	          success: function(data) {
	          	fbq('track', 'Lead');
	          	$('#THEFORM').css('display', 'none');
	          	$('.msg').html(data);
	          	if (window.location.pathname.split('/')[1] == 'services' || window.location.pathname.split('/')[1] == 'mens'){
	          		// yaCounter38449515.reachGoal('zap5');
	          		yaCounter38449515.reachGoal('send');
	          	}else{
	          		yaCounter38449515.reachGoal('zap1');
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