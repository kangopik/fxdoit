<footer class="footer main-footer full-width clear-left">
	<div class="footer-wrap">
		<div class="footer-inner">
			<div class="sub-copy">
				Forexware offers software solutions and technology for larger firms, institutions and small firms. Forexware offers tier 1 liquidity and allows hedge funds and brokerage firms access to non-bank liquidity providers around the world. Our ForexStarterKit helps small businesses build up their customer base and Forexware offers white label solutions that allow our clients to provide easy, flexible Forex trading solutions to their customers with advanced dealing and risk management capabilities. Our white label offerings are designed for financial institutions that can hold funds on behalf of their clients and offer a full suite of powerful, efficient and easy to manage FX trading solutions with risk management and back-office solutions. 
			</div>
			<br clear="all">
			<img src="<?php echo base_url()?>assets/img/forexware-white.png" alt="Forexware Footer Logo" title="Forexware Footer" class="footer-logo">
			<span class="copy">© 2017 Fxdoit. All Rights reserved.</span>
			<ul class="footer-nav">
				<li><a class="" href="http://forexware.com/en/fx-starter-kit/">FXStarterKit™</a></li>
				<li><a class="" href="http://forexware.com/en/total-broker-solution/">TotalBrokerSolution™</a></li>
				<li><a class="" href="http://forexware.com/en/platforms/">Platforms</a></li>
				<li><a class="" href="http://markets.forexware.com/en/">Liquidity</a></li>
			</ul>
		</div>
	</div>
</footer>
<div id="glt-translate-trigger">
	<span class="notranslate">Translate &#187;</span>
</div>
<div id="glt-toolbar"></div>
<div id="flags" style="display:none">
  	<ul id="sortable" class="ui-sortable">
   		<li id='English'><a title='English' class='notranslate flag en united-states' data-lang="English"></a></li>
   		<li id='Indonesian'><a title='Indonesian' class='notranslate flag id Indonesian' data-lang="Indonesian"></a></li>
   	</ul>
</div>
<div id="google_translate_element" style="display: none;"></div>

<script type="text/javascript">
	  function googleTranslateElementInit() {
	    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
	  }
	</script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	
    
<script type="text/javascript">
    $('.ui-sortable a').click(function() {
        var lang_text = $(this).data('lang');
        var simple = $('.goog-te-menu-frame:first'); 
        if (!simple.size()) {
          alert("Error: Could not find Google translate frame.");
          return false;
        }

        var simpleValue = simple.contents().find('.goog-te-menu2-item span.text:contains('+lang_text+')');
        simpleValue.click(); 
        $(".tool-container").hide();
        0==$("body > #google_language_translator").length&&$("#glt-footer").html("<div id='google_language_translator'></div>");
        return false;
      });
</script>