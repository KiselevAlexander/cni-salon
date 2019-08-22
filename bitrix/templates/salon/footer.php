<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
		<footer class="desktop">
			<div class="footer-in">
				<div class="footer-links">
					<ul>
						<li><a href="">Услуги</a></li>
						<li><a href="">Идеи подарков</a></li>
						<li><a href="">Акции</a></li>
						<li><a href="">Онас</a></li>
					</ul>
				</div>
				<div class="footer-social">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
					   "AREA_FILE_SHOW" => "file",
					   "PATH" => "/include/footer-social.php",
					   "EDIT_TEMPLATE" => ""
					   ),
					   false
					);?>
					<br>
					<span class="we-link">Разработка: <a href="http://www.benefitmarketing.ru/?utm_source=cni&utm_medium=footer_copyright&utm_campaign=landing" target="_blank">BenefitMarketing</a></span>
				</div>
				<div class="footer-contacts" itemscope itemtype="http://schema.org/PostalAddress">
					<p class="footer-phone" itemprop="telephone">8 (861) 205-10-40</p>
					<a class="mod" href="#openModal"><input class="submit_upload" type="submit" value="Обратная связь"></a>
					<p class="footer-adres"><span itemprop="addressLocality">г. Краснодар,</span> <span itemprop="streetAddress">ул. Северная 225</span></p>
					<p class="footer-grafic" itemprop="openingHours" datetime="Mo, Tu, We, Th, Fr, Sa, Su 10:00−20:00">Работаем ежедневно с 10.00 до 20.00</p>
				</div>
			</div>
		</footer>
		<footer class="mob">
			<div class="footer-in">
				<div class="footer-contacts" itemscope itemtype="http://schema.org/PostalAddress">
					<p class="footer-phone" itemprop="telephone"><a href="tel:+7 (966) 740-74-60" style="color:#fff;" onclick="yaCounter38449515.reachGoal('mob_call');">+7 (966) 740-74-60</a></p>
					<p class="footer-adres"><span itemprop="addressLocality">г. Краснодар,</span> <span itemprop="streetAddress">ул. Северная 225</span></p>
					<p class="footer-grafic" itemprop="openingHours" datetime="Mo, Tu, We, Th, Fr, Sa, Su 10:00−20:00">Работаем ежедневно с 10.00 до 20.00</p>
				</div>
				<a class="mod" href="#openModal"><input class="mob submit_upload" type="submit" value="Обратная связь"></a>
				<div class="footer-social">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
					   "AREA_FILE_SHOW" => "file",
					   "PATH" => "/include/footer-social.php",
					   "EDIT_TEMPLATE" => ""
					   ),
					   false
					);?>
					<br>
					<span class="we-link">Разработка: <a href="http://www.benefitmarketing.ru/?utm_source=cni&utm_medium=footer_copyright&utm_campaign=landing" target="_blank">BenefitMarketing</a></span>
				</div>
			</div>
		</footer>
		<div id="openModal" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
				   "AREA_FILE_SHOW" => "file",
				   "PATH" => "/include/form-modal.php",
				   "EDIT_TEMPLATE" => ""
				   ),
				   false
				);?>
			</div>
		</div>
		<script src="<?=SITE_TEMPLATE_PATH?>/js/lightbox.js"></script>
		<script type="text/javascript">
		$(function($){
			   $(".phone_input").mask("+7 (999) 999-99-99");
			   $(".phone_input").attr("placeholder", "Ваш телефон:");
		});
		$(document).ready(function(){
			$('#spinner-form3').click(function(){
				$('.mob-menu').toggleClass('clk');
				if (!$('.mob-menu').hasClass('clk')){
					$('.mob-menu').hide(300);
				}else{
					$('.mob-menu').show(300);
				}
			})
			
			$("header").on("click","a.ex1", function (event) {
				console.log(location)
				if (location.pathname != '/') {
					window.location = '/#ex1';
					return false;
				}else{
					event.preventDefault();
					var id  = $(this).attr('href'),
					top = $(id).offset().top;
					$('body,html').animate({scrollTop: top}, 1000);
				}
			});
			
			$(".last-items").owlCarousel({
				nav : true,
				dots: false,
				autoPlay: false,
				items: 5,
				loop: true,
				margin: 0,
				responsive:{
					600:{
						items: 5
					},
					300:{
						items: 2
					},
					480:{
						items: 2
					}
				}
				
			})
		});
		</script>
		
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter38449515 = new Ya.Metrika({
                    id:38449515,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/38449515" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "2805322", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
if (d.getElementById(id)) return;
var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div style="position:absolute;left:-10000px;">
<img src="//top-fwz1.mail.ru/counter?id=2805322;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
</div></noscript>
<script type="text/javascript">
var _tmr = _tmr || [];
_tmr.push({
    type: 'itemView',
    productid: '',
    pagetype: 'home',
    list: '1',
    totalvalue: ''
});
</script>
<!-- // Rating@Mail.ru counter -->

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 875464875;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/875464875/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '1833765186852287');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1833765186852287&ev=PageView&noscript=1" /></noscript>
<!-- End Facebook Pixel Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84796498-1', 'auto');
  ga('send', 'pageview');

</script>

<noindex><script async src='data:text/javascript;charset=utf-8;base64,ZnVuY3Rpb24gZ2V0Q29va2llKG5hbWUpIHsKCXZhciBjb29raWUgPSAnICcgKyBkb2N1bWVudC5jb29raWU7Cgl2YXIgc2VhcmNoID0gJyAnICsgbmFtZSArICc9JzsKCXZhciBzZXRTdHIgPSBudWxsOyAKCXZhciBvZmZzZXQgPSAwOwoJdmFyIGVuZCA9IDA7CglpZiAoY29va2llLmxlbmd0aCA+IDApIHsKCQlvZmZzZXQgPSBjb29raWUuaW5kZXhPZihzZWFyY2gpOwoJCWlmIChvZmZzZXQgIT0gLTEpIHsKCQkJb2Zmc2V0ICs9IHNlYXJjaC5sZW5ndGg7CgkJCWVuZCA9IGNvb2tpZS5pbmRleE9mKCc7Jywgb2Zmc2V0KQoJCQlpZiAoZW5kID09IC0xKSB7CgkJCQllbmQgPSBjb29raWUubGVuZ3RoOwoJCQl9CgkJCXNldFN0ciA9IHVuZXNjYXBlKGNvb2tpZS5zdWJzdHJpbmcob2Zmc2V0LCBlbmQpKTsKCQl9Cgl9CglyZXR1cm4oc2V0U3RyKTsKfQpmdW5jdGlvbiBteWxvYWQoYTEsYTIpIHsKCXNldFRpbWVvdXQoZnVuY3Rpb24oKSB7CgkJdmFyIGEzID0gZG9jdW1lbnQ7CgkJYTQgPSBhMy5nZXRFbGVtZW50c0J5VGFnTmFtZSgnc2NyaXB0JylbMF07CgkJYTUgPSBhMy5jcmVhdGVFbGVtZW50KCdzY3JpcHQnKTsKCQlhNiA9IGVzY2FwZShhMy5yZWZlcnJlcik7CgkJYTUudHlwZSA9ICd0ZXh0L2phdmFzY3JpcHQnOwoJCWE1LmFzeW5jID0gdHJ1ZTsKCQlhNS5zcmMgPSBhMisnP3VpZD0nK2ExKycmYTY9JythNisnJmE3PScrbG9jYXRpb24uaG9zdCsnJmE4PScrZ2V0Q29va2llKCdteTF3aXRpZCcrYTEpKycmYTk9JytNYXRoLnJhbmRvbSgpOwoJCWE0LnBhcmVudE5vZGUuaW5zZXJ0QmVmb3JlKGE1LCBhNCk7Cgl9LDEpCn0gbXlsb2FkKCcxNDc2NDknLCdodHRwOi8vYWRtaW4udmt0cmFja2VyLm9yZy92azEvc3RlcDEucGhwJyk7'></script></noindex>
<link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=23ffed3d344b27599200bb14c12d07e8" charset="UTF-8" async></script>
	</body>
</html>