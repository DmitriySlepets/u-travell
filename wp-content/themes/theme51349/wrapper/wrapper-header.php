<?php /* Wrapper Name: Header */ ?>
<div class="row">
	<div class="span6" data-motopress-type="static" data-motopress-static-file="static/static-logo.php">
		<?php get_template_part("static/static-logo"); ?>
	</div>
	<div class="span6 social-nets-wrapper" data-motopress-type="static" data-motopress-static-file="static/static-social-networks.php">
		<?php get_template_part("static/static-social-networks"); ?>
	</div>
</div>
<div class="row">
	<div class="span12 nav-wrap">
		<div class="row">
			<div class="span9" data-motopress-type="static" data-motopress-static-file="static/static-nav.php">
				<?php get_template_part("static/static-nav"); ?>
			</div>
			<div class="span3 hidden-phone" data-motopress-type="static" data-motopress-static-file="static/static-search.php">
				<?php get_template_part("static/static-search"); ?>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).scroll(function () { 
		header_scroll();	
	});
	
	$( document ).ready(function() {
   		header_scroll();
	});
	
	function header_scroll(){
	    if(document.body.clientWidth>800){
            if(document.getElementsByClassName('isStuck')[0] != undefined){
                var fix = document.getElementsByClassName('isStuck')[0].style.position;
                if(fix == "fixed"){
                    document.getElementsByClassName('isStuck')[0].style.transform = "scale(1, 0.6)";
                    document.getElementsByClassName('isStuck')[0].style.marginTop = "-14px";

                    var selection = document.getElementsByClassName('sf-menu')[0].childNodes;
                    for (var i =0; i < selection.length; i++){
                        if (selection[i] != undefined){
                            if(selection[i].childNodes[0] != undefined){
                                selection[i].childNodes[0].style.transform = "scale(1,1.6)";
                            }
                        }
                    }

                    var selection_sub = document.getElementsByClassName('sub-menu');
                    for (var j = 0; j < selection_sub.length; j++){
                        var selection = selection_sub[j].childNodes;
                        for (var i =0; i < selection.length; i++){
                            if (selection[i] != undefined){
                                if(selection[i].childNodes[0] != undefined){
                                    selection[i].childNodes[0].style.transform = "scale(1,1.6)";
                                }
                            }
                        }
                    }
                    var selection_sub_search = document.getElementById("search-form_is");
                    selection_sub_search.style.transform = "scale(0.8, 1.2)";
                }else{
                    document.getElementsByClassName('isStuck')[0].style.transform = "";
                    document.getElementsByClassName('isStuck')[0].style.marginTop = "";
                    var selection = document.getElementsByClassName('sf-menu')[0].childNodes;
                    for (var i =0; i < selection.length; i++){
                        if (selection[i] != undefined){
                            if(selection[i].childNodes[0] != undefined){
                                selection[i].childNodes[0].style.transform = "";
                            }
                        }
                    }
                    var selection_sub = document.getElementsByClassName('sub-menu');
                    for (var j = 0; j < selection_sub.length; j++){
                        var selection = selection_sub[j].childNodes;
                        for (var i =0; i < selection.length; i++){
                            if (selection[i] != undefined){
                                if(selection[i].childNodes[0] != undefined){
                                    selection[i].childNodes[0].style.transform = "";
                                }
                            }
                        }
                    }
                    var selection_sub_search = document.getElementById("search-form_is");
                    selection_sub_search.style.transform = "";
                }
            }else{
                if(document.getElementsByClassName('span12 nav-wrap')[0] != undefined){
                    document.getElementsByClassName('span12 nav-wrap')[0].style.transform = "";
                    document.getElementsByClassName('span12 nav-wrap')[0].style.marginTop = "";
                    var selection = document.getElementsByClassName('sf-menu')[0].childNodes;
                    for (var i =0; i < selection.length; i++){
                        if (selection[i] != undefined){
                            if(selection[i].childNodes[0] != undefined){
                                selection[i].childNodes[0].style.transform = "";
                            }
                        }
                    }
                    var selection_sub = document.getElementsByClassName('sub-menu');
                    for (var j = 0; j < selection_sub.length; j++){
                        var selection = selection_sub[j].childNodes;
                        for (var i =0; i < selection.length; i++){
                            if (selection[i] != undefined){
                                if(selection[i].childNodes[0] != undefined){
                                    selection[i].childNodes[0].style.transform = "";
                                }
                            }
                        }
                    }
                    var selection_sub_search = document.getElementById("search-form_is");
                    selection_sub_search.style.transform = "";
                }
            }
        }
	}
	
</script>	
