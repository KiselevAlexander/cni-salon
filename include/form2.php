<div class="form-container">
    <form id="THEFORM2" action="javascript:void(null);">
        <fieldset>
            <div class="field1">
                <input
                        class="name_input name2"
                        type="text"
                        name="name_input"
                        value="Ваше имя:"
                        data-placeholder="Ваше имя:"
                />
                <span class="unit1"></span>
            </div>
            <div class="field2">
                <input
                        class="phone_input phone2"
                        type="text"
                        name="phone_input"
                        value="Ваш телефон:"
                        data-placeholder="Ваш телефон:"
                />
                <span class="unit2"></span>
            </div>
            <div class="field3">
                <input class="submit_upload2" type="submit" value="Записаться" />
            </div>
        </fieldset>
    </form>
    <div class="msg2"></div>
</div>

<script>
    (function(){
        var $form = $('#THEFORM2');

        $form.find('[data-placeholder]').focus(function(event){
            var target = event.target;
            if (target.value === this.dataset.placeholder){
                target.value = '';
            }
        });

        $form.find('[data-placeholder]').blur(function(event){
            var target = event.target;
            if (target.value === ''){
                target.value = this.dataset.placeholder;
            }
        });

        $('input.submit_upload2').click(function(){
            var $name = $('.name2');
            var $phone = $('.phone2');
            var name = false;
            var phone = false;

            if($name.val() ==='' || $name.val() ==='Ваше имя:'){
                $name.css({'border' : '1px solid red'});
            } else{
                $name.css({'border' : '1px solid #d6d6d6'});
                name = true;
            }

            if($phone.val() ==='' || $phone.val() ==='Ваш телефон:'){
                $phone.css({'border' : '1px solid red'});
            } else{
                $phone.css({'border' : '1px solid #d6d6d6'});
                phone = true;
            }


            if (name && phone) {

                var msg   = $form.serialize();
                $.ajax({
                    type: 'POST',
                    url: '/request.php',
                    data: msg,
                    success: function(data) {

                        var $msg2 = $('.msg2');

                        $form.css('display', 'none');
                        $msg2.css('display', 'block');
                        $msg2.html(data);

                        if (
                            window.location.pathname.split('/')[1] === 'services'
                            || window.location.pathname.split('/')[1] === 'mens'
                        ) {
                            // yaCounter38449515.reachGoal('zap6');
                            yaCounter38449515.reachGoal('send');
                        } else{
                            yaCounter38449515.reachGoal('zap2');
                        }

                        fbq('track', 'Lead');
                        //$('.overlay').css('display', 'none');
                    },
                    error:  function(xhr, str){
                        alert('Возникла ошибка: ' + xhr.responseCode);
                    }
                });
            }

        });
    })()
</script>