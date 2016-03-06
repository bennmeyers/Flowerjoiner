/*****
version 1.2.0
*****/
var gsMainSKU = 'FABR-CH32-U';
var giMainRes = '120';
var gsPipingSKU = 'FABR-CH32-U';
var giPipingRes = '120';
var gsMainTitle = '<span class="fabric_selected_title">White Twill</span>';
var gsMainTitleBuy = ' <a href="http://www.serenaandlily.com/Fabric/Fabrics-White-Twill-Upholstery-Weight">buy swatch</a>';
var gsPipingTitle = '<span class="fabric_selected_title">White Twill</span>';
var gsPipingTitleBuy = ' <a href="http://www.serenaandlily.com/Fabric/Fabrics-White-Twill-Upholstery-Weight">buy swatch</a>';
var gsLink = "http://www.serenaandlily.com/Fabric/Fabrics";
var gaMainNames = new Array()
var gaPipingNames = new Array()

var gsHTML = '<div style="display: none;" class="box" id="box_Icon"> <!-- using code from http://teamtutorials.com/web-development-tutorials/jquery-pop-over-effects --><div id="quickLook_Icon" class="quickLook"><div class="listItemPopup"><div class="popupMainArea"><div class="popupHead"><img src="/site/images/sl-close.gif" alt="close" id="close_Icon" class="close"></div><div class="popupFill"></div><!-- .popupFill --></div><!-- .popupMainArea --></div><!-- .listItemPopup --></div><!-- .quickLook --></div><!-- .box--><div class="popover_mask modal_mask close" style="display:none;margin:0"></div><!-- .modal_mask -->';
var lsBoxWidth = '490';

$(document).ready(function(){
	$("#outerwrapper").parent().prepend(gsHTML);
	$('.close').click(function(){
		$('#box_Icon').hide();
		$('.option_1_buttons').hide();
		$('.option_2_buttons').hide();
		$('.option_3_buttons').hide();
		$('.option_4_buttons').hide();
		$('.option_5_buttons').hide();
		$('.option_box').hide();
		$('.modal_mask').hide();
		$("select").show(); // show all select menus
		$('#box_Icon .popupFill').empty();
	});
	$('.popup').click(function(event){
		event.preventDefault();
		var lsURL = $(this).attr("href");
		var lsTop = parseInt($(window).scrollTop());
		lsTop += 92;
		$('#quickLook_Icon .popupMainArea').css({'height' : '405px','width' : lsBoxWidth + 'px'});
		$('#quickLook_Icon').css({'height' : '405px','width' : lsBoxWidth + 'px'});
		$('#box_Icon').show();
		$('.popover_mask').show();
		$('#box_Icon .popupFill').load(lsURL);
		$("select").hide(); // hide all select menus (IE6/7 overrides)
		$("#slb_menu_tabs div").css({'z-index' : '1'}); // tabs showing up over mask
		var lsLeft = ($(window).width() - lsBoxWidth)/2 - 5;
		if(!$.browser.msie){lsLeft = lsLeft + 15;}
		$('#box_Icon').css({'left' : lsLeft});
		var lsHeight = $('#outerwrapper').height() + 20;
		$('.popover_mask').css({'background' : '#000','height' : lsHeight,'left' : '0','margin' : '0', 'opacity' : '0.2','position' : 'absolute','top' : '0','width' : $(window).width(),'z-index' : '2'});
		$('#box_Icon').css({'top' : lsTop + 'px', 'z-index' : '3'});
	});
	$('.down_wrap').click(function(event){
		$('#quickLook_Icon .popupMainArea').css({'height' : '275px'});
		$('#quickLook_Icon').css({'height' : '275px'});
	});
 	$('.slipcover').click(function(event){
		$('#quickLook_Icon .popupMainArea').css({'height' : '245px'});
		$('#quickLook_Icon').css({'height' : '245px'});
	});
	$('.option_1').click(function(event){
		event.preventDefault();
		var lsHeight = $('#outerwrapper').height() + 20;
		var lsTop = parseInt($(window).scrollTop());
		lsTop += 92;
		$("select").hide(); // hide all select menus (IE6/7 overrides)
		$("#slb_menu_tabs div").css({'z-index' : '1'}); // tabs showing up over mask
		var lsLeft = ($(window).width() - lsBoxWidth)/2 - 5;
		if(!$.browser.msie){lsLeft = lsLeft + 15;}
		if(!$.browser.msie){
			$('.option_box').css({'left' : lsLeft});
			$('.option_popover_mask').css({'background' : '#000','height' : lsHeight,'left' : '0','margin' : '0', 'opacity' : '0.2','position' : 'absolute','top' : '0','width' : $(window).width(),'z-index' : '2'});
			$('.option_box').css({'position' : 'absolute', 'top' : lsTop + 'px', 'z-index' : '3'})
			$('.option_box').show();
			$('.option_1_buttons').show();
			$('.option_popover_mask').show();
		} else {
			$('#quickLook_Icon .popupMainArea').css({'height' : '405px','width' : lsBoxWidth + 'px'});
			$('#quickLook_Icon').css({'height' : '405px','width' : lsBoxWidth + 'px'});
			$('#box_Icon').css({'left' : lsLeft});
			$('.popover_mask').css({'background' : '#000','height' : lsHeight,'left' : '0','margin' : '0', 'opacity' : '0.2','position' : 'absolute','top' : '0','width' : $(window).width(),'z-index' : '2'});
			$('#box_Icon').css({'top' : lsTop + 'px', 'z-index' : '3'});
			$('#box_Icon').show();
			$('.popover_mask').show();
			$('#box_Icon .popupFill').html($('.option_1_buttons').html())
			$('.listItemOptions a').click(function(event){
				event.preventDefault();
				return true
			})
		} // if
	}); // .option_1
	$('.option_2').click(function(event){
		event.preventDefault();
		var lsHeight = $('#outerwrapper').height() + 20;
		var lsTop = parseInt($(window).scrollTop());
		lsTop += 92;
		$("select").hide(); // hide all select menus (IE6/7 overrides)
		$("#slb_menu_tabs div").css({'z-index' : '1'}); // tabs showing up over mask
		var lsLeft = ($(window).width() - lsBoxWidth)/2 - 5;
		if(!$.browser.msie){lsLeft = lsLeft + 15;}
		if(!$.browser.msie){
			$('.option_box').css({'left' : lsLeft});
			$('.option_popover_mask').css({'background' : '#000','height' : lsHeight,'left' : '0','margin' : '0', 'opacity' : '0.2','position' : 'absolute','top' : '0','width' : $(window).width(),'z-index' : '2'});
			$('.option_box').css({'position' : 'absolute', 'top' : lsTop + 'px', 'z-index' : '3'})
			$('.option_box').show();
			$('.option_2_buttons').show();
			$('.option_popover_mask').show();
		} else {
			$('#box_Icon').css({'left' : lsLeft});
			$('.popover_mask').css({'background' : '#000','height' : lsHeight,'left' : '0','margin' : '0', 'opacity' : '0.2','position' : 'absolute','top' : '0','width' : $(window).width(),'z-index' : '2'});
			$('#box_Icon').css({'top' : lsTop + 'px', 'z-index' : '3'});
			$('#box_Icon').show();
			$('.popover_mask').show();
			$('#box_Icon .popupFill').html($('.option_2_buttons').html())
		} // if
	}); // .option_2
	$('.option_3').click(function(event){
		event.preventDefault();
		var lsHeight = $('#outerwrapper').height() + 20;
		var lsTop = parseInt($(window).scrollTop());
		lsTop += 92;
		$("select").hide(); // hide all select menus (IE6/7 overrides)
		$("#slb_menu_tabs div").css({'z-index' : '1'}); // tabs showing up over mask
		var lsLeft = ($(window).width() - lsBoxWidth)/2 - 5;
		if(!$.browser.msie){lsLeft = lsLeft + 15;}
		if(!$.browser.msie){
			$('.option_box').css({'left' : lsLeft});
			$('.option_popover_mask').css({'background' : '#000','height' : lsHeight,'left' : '0','margin' : '0', 'opacity' : '0.2','position' : 'absolute','top' : '0','width' : $(window).width(),'z-index' : '2'});
			$('.option_box').css({'position' : 'absolute', 'top' : lsTop + 'px', 'z-index' : '3'})
			$('.option_box').show();
			$('.option_3_buttons').show();
			$('.option_popover_mask').show();
		} else {
			$('#box_Icon').css({'left' : lsLeft});
			$('.popover_mask').css({'background' : '#000','height' : lsHeight,'left' : '0','margin' : '0', 'opacity' : '0.2','position' : 'absolute','top' : '0','width' : $(window).width(),'z-index' : '2'});
			$('#box_Icon').css({'top' : lsTop + 'px', 'z-index' : '3'});
			$('#box_Icon').show();
			$('.popover_mask').show();
			$('#box_Icon .popupFill').html($('.option_3_buttons').html())
		} // if
	}); // .option_3
	$('.option_4').click(function(event){
		event.preventDefault();
		var lsHeight = $('#outerwrapper').height() + 20;
		var lsTop = parseInt($(window).scrollTop());
		lsTop += 92;
		$("select").hide(); // hide all select menus (IE6/7 overrides)
		$("#slb_menu_tabs div").css({'z-index' : '1'}); // tabs showing up over mask
		var lsLeft = ($(window).width() - lsBoxWidth)/2 - 5;
		if(!$.browser.msie){lsLeft = lsLeft + 15;}
		if(!$.browser.msie){
			$('.option_box').css({'left' : lsLeft});
			$('.option_popover_mask').css({'background' : '#000','height' : lsHeight,'left' : '0','margin' : '0', 'opacity' : '0.2','position' : 'absolute','top' : '0','width' : $(window).width(),'z-index' : '2'});
			$('.option_box').css({'position' : 'absolute', 'top' : lsTop + 'px', 'z-index' : '3'})
			$('.option_box').show();
			$('.option_4_buttons').show();
			$('.option_popover_mask').show();
		} else {
			$('#box_Icon').css({'left' : lsLeft});
			$('.popover_mask').css({'background' : '#000','height' : lsHeight,'left' : '0','margin' : '0', 'opacity' : '0.2','position' : 'absolute','top' : '0','width' : $(window).width(),'z-index' : '2'});
			$('#box_Icon').css({'top' : lsTop + 'px', 'z-index' : '3'});
			$('#box_Icon').show();
			$('.popover_mask').show();
			$('#box_Icon .popupFill').html($('.option_4_buttons').html())
		} // if
	}); // .option_4
	$('.option_5').click(function(event){
		event.preventDefault();
		var lsHeight = $('#outerwrapper').height() + 20;
		var lsTop = parseInt($(window).scrollTop());
		lsTop += 92;
		$("select").hide(); // hide all select menus (IE6/7 overrides)
		$("#slb_menu_tabs div").css({'z-index' : '1'}); // tabs showing up over mask
		var lsLeft = ($(window).width() - lsBoxWidth)/2 - 5;
		if(!$.browser.msie){lsLeft = lsLeft + 15;}
		if(!$.browser.msie){
			$('.option_box').css({'left' : lsLeft});
			$('.option_popover_mask').css({'background' : '#000','height' : lsHeight,'left' : '0','margin' : '0', 'opacity' : '0.2','position' : 'absolute','top' : '0','width' : $(window).width(),'z-index' : '2'});
			$('.option_box').css({'position' : 'absolute', 'top' : lsTop + 'px', 'z-index' : '3'})
			$('.option_box').show();
			$('.option_5_buttons').show();
			$('.option_popover_mask').show();
		} else {
			$('#box_Icon').css({'left' : lsLeft});
			$('.popover_mask').css({'background' : '#000','height' : lsHeight,'left' : '0','margin' : '0', 'opacity' : '0.2','position' : 'absolute','top' : '0','width' : $(window).width(),'z-index' : '2'});
			$('#box_Icon').css({'top' : lsTop + 'px', 'z-index' : '3'});
			$('#box_Icon').show();
			$('.popover_mask').show();
			$('#box_Icon .popupFill').html($('.option_5_buttons').html())
		} // if
	}); // .option_5
	$(".scene_7_popup_cust").click(function(event){
		event.preventDefault();
		var lsURL = $(this).attr('href');
		var laSKUFull = lsURL.split("&");
		var laSKU = laSKUFull[1].replace(/sku=/,"").split("_");
		var lsSKU = "sku=" + laSKU[0];
		laSKUFull[1] = lsSKU;
		lsURL = laSKUFull.join("&");
		window.open(lsURL,'_blank','width=810,height=810');
	});
    
	$("#custcol_cover_fabric option").each(function(i){ // main fabric
		var lsMainClass = $(this).text();
		var lsMainClassNospace = lsMainClass.replace(/ /ig,"_");
		var lsMainClassNospace = lsMainClassNospace.replace(/\//ig,"_");
		$(this).addClass("dm_" + lsMainClassNospace);
		gaMainNames[i] = lsMainClass;
	});
    
	$("#custcol_piping_fabric option").each(function(i){ // piping fabric
		var lsPipingClass = $(this).text();
		var lsPipingClassNospace = lsPipingClass.replace(/ /ig,"_");
		var lsPipingClassNospace = lsPipingClassNospace.replace(/\//ig,"_");
		$(this).addClass("dp_" + lsPipingClassNospace);
		gaPipingNames[i] = lsPipingClass;
	});
	
	jQuery.get("/xml/fabrics.xml",{},function(xml) {
		$('fabric_item',xml).each(function() {
			lsItemName = $(this).find("name").text();
			for(i=0;i<gaMainNames.length;i++){
				var lsMainClass = gaMainNames[i];
				var lsMainClassNospace = lsMainClass.replace(/ /ig,"_");
				var lsMainClassNospace = lsMainClassNospace.replace(/\//ig,"_");
				if(lsItemName == lsMainClass) {
					lsSKU = $(this).find("sku").text();
					$('.fabric_main_swatches').append('<a href="#" class="m_' + lsMainClassNospace + ' swatch"><img src="http://s7d5.scene7.com/is/image/SerenaandLily/' + lsSKU + '?$tileSwatch$"  alt="' + lsMainClass + '" /></a>');
				}
			}
			for(i=0;i<gaPipingNames.length;i++){
				var lsPipingClass = gaPipingNames[i];
				var lsPipingClassNospace = lsPipingClass.replace(/ /ig,"_");
				var lsPipingClassNospace = lsPipingClassNospace.replace(/\//ig,"_");
				if(lsItemName == lsPipingClass) {
					lsSKU = $(this).find("sku").text();
					$('.fabric_piping_swatches').append('<a href="#" class="p_' + lsPipingClassNospace + ' swatch"><img src="http://s7d5.scene7.com/is/image/SerenaandLily/' + lsSKU + '?$tileSwatch$"  alt="' + lsPipingClass + '" /></a>');
				}
			}
			$(".m_White_Twill").addClass('fabric_selected');
			$('.main .title .fabric_name').html(gsMainTitle);
			$('.main .title .buy').html(gsMainTitleBuy);
			$(".p_White_Twill").addClass('fabric_selected');
			$('.piping .title .fabric_name').html(gsPipingTitle);
			$('.piping .title .buy').html(gsPipingTitleBuy);
		});
			
			$('.main .swatch').mouseover(function(){
				$(this).addClass('fabric_hover');
				var lsSwatch = $(this).children().attr("alt");
				$('.main .title .fabric_name').html(lsSwatch);
				$('fabric_item',xml).each(function() {
					lsItemName = $(this).find("name").text();
					if(lsItemName == lsSwatch) {
						lsBuySwatch = $(this).find("link").text();
						$('.main .title .buy').html(' <a href="' + lsBuySwatch + '">buy swatch</a>');
					}
				});
			});
			$('.main .swatch').mouseout(function(){
				var lsMainTitle = '<span class="fabric_selected_title">' + gsMainTitle + '</span>';
				$('.main .title .fabric_name').html(lsMainTitle);
				$('.main .title .buy').html(gsMainTitleBuy);
				$(this).removeClass('fabric_hover');
			});
			$('.main .swatch').click(function(event){
				event.preventDefault();
				var lsSwatch = $(this).children().attr("alt");
				var lsSwatchTitle = '<span class="fabric_selected_title">' + lsSwatch + '</span>';
				gsMainTitle = lsSwatch;
				$('fabric_item',xml).each(function() {
					lsItemName = $(this).find("name").text();
					if(lsItemName == lsSwatch) {
						lsBuySwatch = $(this).find("link").text();
						gsMainTitleBuy = ' <a href="' + lsBuySwatch + '">buy swatch</a>';
						$('.main .title .buy').html(' <a href="' + lsBuySwatch + '">buy swatch</a>');
					}
				});
				var lsMainClassNospace = lsSwatch.replace(/ /ig,"_");
				var lsMainClassNospace = lsMainClassNospace.replace(/\//ig,"_");
				var lsMainClassReformat = lsMainClassNospace.replace(/_/ig," ");
				fnChangeMain(lsMainClassReformat);
				$('.main .title .fabric_name').html(lsSwatchTitle);
				$(".fabric_main_swatches .fabric_selected").removeClass('fabric_selected');
				$(this).addClass('fabric_selected');
				jQuery("#custcol_cover_fabric option[selected]").removeAttr("selected");
				jQuery("#custcol_cover_fabric option[class='dm_" + lsMainClassNospace + "']").attr("selected", "selected");
			});
			
			$('.piping .swatch').mouseover(function(){
				$(this).addClass('fabric_hover');
				var lsSwatch = $(this).children().attr("alt");
				$('.piping .title .fabric_name').html(lsSwatch);
				$('fabric_item',xml).each(function() {
					lsItemName = $(this).find("name").text();
					if(lsItemName == lsSwatch) {
						lsBuySwatch = $(this).find("link").text();
						$('.piping .title .buy').html(' <a href="' + lsBuySwatch + '">buy swatch</a>');
					}
				});
			});
			$('.piping .swatch').mouseout(function(){
				var lsPipingTitle = '<span class="fabric_selected_title">' + gsPipingTitle + '</span>';
				$('.piping .title .fabric_name').html(lsPipingTitle);
				if (gsPipingTitle != 'Self-Piping') {
					$('.piping .title .buy').html(gsPipingTitleBuy);
				} else {
					$('.piping .title .buy').html('');
				}
				$(this).removeClass('fabric_hover');
			});
			$('.piping .swatch').click(function(event){
				event.preventDefault();
				var lsSwatch = $(this).children().attr("alt");
				var lsSwatchTitle = '<span class="fabric_selected_title">' + lsSwatch + '</span>';
				gsPipingTitle = lsSwatch;
				$('fabric_item',xml).each(function() {
					lsItemName = $(this).find("name").text();
					if(lsItemName == lsSwatch) {
						lsBuySwatch = $(this).find("link").text();
						gsPipingTitleBuy = ' <a href="' + lsBuySwatch + '">buy swatch</a>';
						$('.piping .title .buy').html(' <a href="' + lsBuySwatch + '">buy swatch</a>');
					}
				});
				var lsPipingClassNospace = lsSwatch.replace(/ /ig,"_");
				var lsPipingClassNospace = lsPipingClassNospace.replace(/\//ig,"_");
				var lsPipingClassReformat = lsPipingClassNospace.replace(/_/ig," ");
				fnChangePiping(lsPipingClassReformat);
				$('.piping .title .fabric_name').html(lsSwatchTitle);
				$(".fabric_piping_swatches .fabric_selected").removeClass('fabric_selected');
				$(this).addClass('fabric_selected');
				jQuery("#custcol_piping_fabric option[selected]").removeAttr("selected");
				jQuery("#custcol_piping_fabric option[class='dp_" + lsPipingClassNospace + "']").attr("selected", "selected");
			});
		
		$("#custcol_cover_fabric").change(function(){ // main fabric
			var selectedFabric = $("#custcol_cover_fabric :selected").attr('class');
			selectedFabric = selectedFabric.replace(/dm_/ig,"");
			selectedFabricTitle = $("#custcol_cover_fabric :selected").text();
			gsMainTitle = selectedFabricTitle;
			$('fabric_item',xml).each(function() {
				lsItemName = $(this).find("name").text();
				if(lsItemName == selectedFabricTitle) {
					lsBuySwatch = $(this).find("link").text();
					gsMainTitleBuy = ' <a href="' + lsBuySwatch + '">buy swatch</a>';
					$('.main .title .buy').html(' <a href="' + lsBuySwatch + '">buy swatch</a>');
				}
			});
			var lsMainTitle = '<span class="fabric_selected_title">' + selectedFabricTitle + '</span>';
			$('.main .title .fabric_name').html(lsMainTitle);
			$(".fabric_main_swatches .fabric_selected").removeClass('fabric_selected');
			$(".fabric_main_swatches .m_" + selectedFabric).addClass('fabric_selected');
			fnChangeMain(selectedFabric)
		});
		$("#custcol_piping_fabric").change(function(){ // piping fabric
			var selectedFabric = $("#custcol_piping_fabric :selected").attr('class');
			selectedFabric = selectedFabric.replace(/dp_/ig,"");
			selectedFabricTitle = $("#custcol_piping_fabric :selected").text();
			gsPipingTitle = selectedFabricTitle;
			$('fabric_item',xml).each(function() {
				lsItemName = $(this).find("name").text();
				if(lsItemName == selectedFabricTitle) {
					lsBuySwatch = $(this).find("link").text();
					gsPipingTitleBuy = ' <a href="' + lsBuySwatch + '">buy swatch</a>';
					$('.piping .title .buy').html(' <a href="' + lsBuySwatch + '">buy swatch</a>');
				} else {
					$('.piping .title .buy').html('');
				}
			});
			var lsPipingTitle = '<span class="fabric_selected_title">' + selectedFabricTitle + '</span>';
			$('.piping .title .fabric_name').html(lsPipingTitle);
			$(".fabric_piping_swatches .fabric_selected").removeClass('fabric_selected');
			$(".fabric_piping_swatches .p_" + selectedFabric).addClass('fabric_selected');
			fnChangePiping(selectedFabric)
		});
	});
	
  function fnChangeMain(psSelected){
		var lsSelected = psSelected.replace(/_/ig," ");
	  jQuery.get("/xml/fabrics.xml",{},function(xml){
				
			// Run the function for each item tag in the XML file
			$('fabric_item',xml).each(function(i) {
				itemName = $(this).find("name").text();
				if(itemName == lsSelected) {
					lsMainSKU = $(this).find("sku").text();
					liMainRes = $(this).find("resolution").text();
				}
			});
			
			// Update the IMG src with the generated HTML string
			fnChangeImage(lsMainSKU,liMainRes,'','')
		});
	}
	
	function fnChangePiping(psSelected){
		var lsSelected = psSelected.replace(/_/ig," ");
		jQuery.get("/xml/fabrics.xml",{},function(xml) {
				
			// Run the function for each item tag in the XML file
			$('fabric_item',xml).each(function(i) {
				itemName = $(this).find("name").text();
				if(itemName == lsSelected) {
					lsPipingSKU = $(this).find("sku").text();
					liPipingRes = $(this).find("resolution").text();
				}
			});
			
			// Update the IMG src with the generated HTML string
			fnChangeImage('','',lsPipingSKU,liPipingRes)
		});
	}

	function fnChangeImage(psMainSKU,piMainRes,psPipingSKU,piPipingRes) {
		!psMainSKU ? psMainSKU = gsMainSKU : gsMainSKU = psMainSKU;
		!piMainRes ? piMainRes = giMainRes : giMainRes = piMainRes;
	  !psPipingSKU ? psPipingSKU = gsPipingSKU : gsPipingSKU = psPipingSKU;
		!piPipingRes ? piPipingRes = giPipingRes : giPipingRes = piPipingRes;
	  $('.changing_image').attr('src','http://s7d4.scene7.com/ir/render/SerenaandLilyRender/G-HAYES-VIG?wid=285&obj=main&src=' + psMainSKU + '&res=' + piMainRes + '&obj=piping&src=' + psPipingSKU + '&res=' + piPipingRes + '&sharpen=1&cache=off');
		$(".scene_7_popup_cust").attr('href','http://s7d4.scene7.com/ir/render/SerenaandLilyRender/G-HAYES-VIG?wid=790&obj=main&src=' + psMainSKU + '&res=' + piMainRes + '&obj=piping&src=' + psPipingSKU + '&res=' + piPipingRes + '&sharpen=1&cache=off');
	}
	jQuery("#custcol_cover_fabric option[class='dm_White_Twill']").attr("selected", "selected");
	jQuery("#custcol_piping_fabric option[class='dp_White_Twill']").attr("selected", "selected");
});