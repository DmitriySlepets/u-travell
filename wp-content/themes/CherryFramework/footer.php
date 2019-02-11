		<footer class="motopress-wrapper footer">
			<div class="container">
				<div class="row">
					<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="wrapper/wrapper-footer.php" data-motopress-wrapper-type="footer" data-motopress-id="<?php echo uniqid() ?>">
						<?php get_template_part('wrapper/wrapper-footer'); ?>
					</div>
				</div>
			</div>
		</footer>
		<!--подключаем счетчики-->
		<div class="visual_counters">
			<div class="item_count">
				<script type="text/javascript" async src="https://scripts.witstroom.com/watch/418"></script>
				<script id="witstroom_informer" type="text/javascript" async src="https://scripts.witstroom.com/informer/418"></script>
			</div>
			
			<div class="item_count">
				<!--LiveInternet counter-->
				<script type="text/javascript">
				document.write("<a href='//www.liveinternet.ru/click' "+
				"target=_blank><img src='//counter.yadro.ru/hit?t52.6;r"+
				escape(document.referrer)+((typeof(screen)=="undefined")?"":
				";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
				screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
				";h"+escape(document.title.substring(0,150))+";"+Math.random()+
				"' alt='' title='LiveInternet: показано число просмотров и"+
				" посетителей за 24 часа' "+
				"border='0' width='88' height='31'><\/a>")
				</script><!--/LiveInternet-->
				<!--/LiveInternet-->
			</div>
			
			<div class="item_count">
				<!-- Top100 (Kraken) Widget -->
				<span id="top100_widget"></span>
				<!-- END Top100 (Kraken) Widget -->
				<!-- Top100 (Kraken) Widget -->
				<span id="top100_widget"></span>
				<!-- END Top100 (Kraken) Widget -->
				<!-- Top100 (Kraken) Widget -->
				<span id="top100_widget"></span>
				<!-- END Top100 (Kraken) Widget -->

				<!-- Top100 (Kraken) Counter -->
				<script>
					(function (w, d, c) {
					(w[c] = w[c] || []).push(function() {
						var options = {
							project: 6467870,
							trackHashes: true,
							user_id: null,
						};
						try {
							w.top100Counter = new top100(options);
						} catch(e) { }
					});
					var n = d.getElementsByTagName("script")[0],
					s = d.createElement("script"),
					f = function () { n.parentNode.insertBefore(s, n); };
					s.type = "text/javascript";
					s.async = true;
					s.src =
					(d.location.protocol == "https:" ? "https:" : "http:") +
					"//st.top100.ru/top100/top100.js";

					if (w.opera == "[object Opera]") {
					d.addEventListener("DOMContentLoaded", f, false);
				} else { f(); }
				})(window, document, "_top100q");
				</script>
				<noscript>
				  <img src="//counter.rambler.ru/top100.cnt?pid=6467870" alt="Топ-100" />
				</noscript>
				<!-- END Top100 (Kraken) Counter -->
			</div>
			
			<div class="item_count">
				<!-- Rating@Mail.ru counter -->
				<script type="text/javascript">
				var _tmr = window._tmr || (window._tmr = []);
				_tmr.push({id: "3074222", type: "pageView", start: (new Date()).getTime()});
				(function (d, w, id) {
				  if (d.getElementById(id)) return;
				  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
				  ts.src = "https://top-fwz1.mail.ru/js/code.js";
				  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
				  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
				})(document, window, "topmailru-code");
				</script><noscript><div>
				<img src="https://top-fwz1.mail.ru/counter?id=3074222;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
				</div></noscript>
				<!-- //Rating@Mail.ru counter -->

				<!-- Rating@Mail.ru logo -->
				<a href="https://top.mail.ru/jump?from=3074222">
				<img src="https://top-fwz1.mail.ru/counter?id=3074222;t=479;l=1" style="border:0;" height="31" width="88" alt="Top.Mail.Ru" /></a>
				<!-- //Rating@Mail.ru logo -->
			</div>
			
			<div class="item_count">
				<!--Яндекс Икс-->
				<a href="https://webmaster.yandex.ru/sqi?host=domtradera.ru"><img width="88" height="31" alt="" border="0" src="https://yandex.ru/cycounter?domtradera.ru&theme=light&lang=ru"/></a>
				<!--/Яндекс Икс-->
			</div>

            <div class="item_count">
                <!-- Yandex.Metrika informer -->
                <a href="https://metrika.yandex.ru/stat/?id=51650171&amp;from=informer"
                   target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/51650171/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                                                       style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="51650171" data-lang="ru" /></a>
                <!-- /Yandex.Metrika informer -->

                <!-- Yandex.Metrika counter -->
                <script type="text/javascript" >
                    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
                    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

                    ym(51650171, "init", {
                        id:51650171,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true
                    });
                </script>
                <noscript><div><img src="https://mc.yandex.ru/watch/51650171" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                <!-- /Yandex.Metrika counter -->
            </div>
		</div>
		<!--End #motopress-main-->
	</div>
	<div id="back-top-wrapper" class="visible-desktop">
		<p id="back-top">
			<?php echo apply_filters( 'cherry_back_top_html', '<a href="#top"><span></span></a>' ); ?>
		</p>
	</div>
	<?php if(of_get_option('ga_code')) { ?>
		<script type="text/javascript">
			<?php echo stripslashes(of_get_option('ga_code')); ?>
		</script>
		<!-- Show Google Analytics -->
	<?php } ?>

	<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work properly -->
</body>
</html>