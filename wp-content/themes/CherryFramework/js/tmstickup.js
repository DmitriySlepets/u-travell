(function($){
	$.fn.tmStickUp=function(options){

		var getOptions = {
			correctionSelector: $('.correctionSelector')
		,	listenSelector: $('.listenSelector')
		,	active: false
		,	pseudo: true
		}
		$.extend(getOptions, options);

		var
			_this = $(this)
		,	_window = $(window)
		,	_document = $(document)
		,	thisOffsetTop = 0
		,	thisOuterHeight = 0
		,	thisMarginTop = 0
		,	thisPaddingTop = 0
		,	documentScroll = 0
		,	pseudoBlock
		,	lastScrollValue = 0
		,	scrollDir = ''
		,	tmpScrolled
		;

		if (_this.length != 0) {
			init();
		}

		function init(){
			thisOffsetTop = parseInt(_this.offset().top);
			thisMarginTop = parseInt(_this.css("margin-top"));
			thisOuterHeight = parseInt(_this.outerHeight(true));

			if(getOptions.pseudo){
				$('<div class="pseudoStickyBlock"></div>').insertAfter(_this);
				pseudoBlock = $('.pseudoStickyBlock');
				pseudoBlock.css({"position":"relative", "display":"block"});
			}

			if(getOptions.active){
				addEventsFunction();
			}
		}//end init

		function addEventsFunction(){
		if ( $(window).width() > 767 ){
				
				_document.on('scroll', function() {
					tmpScrolled = $(this).scrollTop();
						if (tmpScrolled > lastScrollValue){
							scrollDir = 'down';
						} else {
							scrollDir = 'up';
						}
					lastScrollValue = tmpScrolled;

					if(getOptions.correctionSelector.length != 0){
						correctionValue = getOptions.correctionSelector.outerHeight(true);
					}else{
						correctionValue = 0;
					}

					documentScroll = parseInt(_window.scrollTop());
					if(thisOffsetTop - correctionValue < documentScroll){
						_this.addClass('isStuck').css('padding-top','18px').css('margin-top','-34px');
						if ( !$('.logo').hasClass('cloned') ) {
							$('.social-nets-wrapper').clone().prependTo( _this.children() ).addClass('cloned').removeClass('span6');
							$('.logo').clone().prependTo( _this.children() ).addClass('cloned');
						}else{
							$('.social-nets-wrapper.cloned').show();
							$('.logo.cloned').show();
						};
						
						getOptions.listenSelector.addClass('isStuck');
						
						if(getOptions.pseudo){
							_this.css({position:"fixed", top:correctionValue});
							pseudoBlock.css({"height":thisOuterHeight});
						}else{
							_this.css({position:"fixed", top:correctionValue});
						}
                        /**
						 * codeking 11.02.19
						 * fixed tags
                         */
						$("ul.tags").addClass("fixed");
                        $("ul.tags").attr("style","width:" + $(".container").width() + "px;");
					}else{
						$('.social-nets-wrapper.cloned').hide();
						$('.logo.cloned').hide();
						_this.removeClass('isStuck').css('padding-top','0').css('margin-top','34px');
						getOptions.listenSelector.removeClass('isStuck');
						if(getOptions.pseudo){
							_this.css({position:"relative", top:0});
							pseudoBlock.css({"height":0});
						}else{
							_this.css({position:"absolute", top:0});
						}
                        /**
                         * codeking 11.02.19
                         * unfixed tags
                         */
                        $("ul.tags").removeClass("fixed");
                        $("ul.tags").removeAttr("style");
					}
				}).trigger('scroll');

				_document.on("resize", function() {
					if(_this.hasClass('isStuck')){
						if( thisOffsetTop != parseInt(pseudoBlock.offset().top) ) thisOffsetTop = parseInt(pseudoBlock.offset().top);
					} else {
						if( thisOffsetTop != parseInt(_this.offset().top) ) thisOffsetTop = parseInt(_this.offset().top);
					}
				})
			}
		}
	}//end tmStickUp function
})(jQuery)