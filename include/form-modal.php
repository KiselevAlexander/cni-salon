			<form id="THEFORM4" action="javascript:void(null);">
				<fieldset>
					<input type="hidden" name="callback" value="Обратная связь" value="обратная связь" />
					<div class="field1">
						<input class="name_input name4" type="text" name="name_input" value="Ваше имя:" onblur="if(this.value == '') { this.value='Ваше имя:'}" onfocus="if (this.value == 'Ваше имя:') {this.value=''}" />
						<span class="unit1"></span>
					</div>
					<div class="field2">
						<input class="phone_input phone4" type="text" name="phone_input" value="Ваш телефон:"  onblur="if(this.value == '') { this.value='Ваш телефон:'}" onfocus="if (this.value == 'Ваш телефон:') {this.value=''}" />
						<span class="unit2"></span>
					</div>
					<div class="field3">
						<input class="submit_upload4" type="submit" value="Отправить" />
					</div>
				</fieldset>
			</form>
			<div class="msg4"></div>
<script>
	$('.submit_upload4').click(function(){
		var name = $('.name4').val();
        var phone= $('.phone4').val();
        
        if(name=='' || name=='Ваше имя:'){
            $('.name4').css({'border' : '1px solid red'});
            var name = false;
        }else{
            $('.name4').css({'border' : '1px solid #d6d6d6'});
            var name = true;
        }

        if(phone=='' || phone=='Ваш телефон:'){
            $('.phone4').css({'border' : '1px solid red'});
            var phone = false;
        }else{
            $('.phone4').css({'border' : '1px solid #d6d6d6'});
            var phone = true;
        }
        
        
if (name && phone) {

		var msg   = $('#THEFORM4').serialize();
		console.log(msg)
		$.ajax({
	          type: 'POST',
	          url: '/request.php',
	          data: msg,
	          success: function(data) {
	          	$('#THEFORM4').css('display', 'none');
	          	$('.msg4').css('display', 'block');
	          	$('.msg4').html(data);
	          	if (window.location.pathname.split('/')[1] == 'services' || window.location.pathname.split('/')[1] == 'mens'){
	          		// yaCounter38449515.reachGoal('zap8');
	          		yaCounter38449515.reachGoal('send');
	          	}else{
	          		yaCounter38449515.reachGoal('zap4');
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