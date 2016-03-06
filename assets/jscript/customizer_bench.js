/*****
version 1.2.0
*****/
$(document).ready(function(){
	var gsImageSKU = $('.customizer').attr('id');
	
	var gsCookieSet = $.cookie("c" + gsImageSKU);
	if(gsCookieSet){
		gsCookieSet = gsCookieSet.split(/___/ig);
	}
	
	var gsMainSKU = (gsCookieSet) ? gsCookieSet[0] : 'FABR-CH32-U'; // the default sku of the main fabric to show in the image
	var giMainRes = (gsCookieSet) ? gsCookieSet[1] : '120'; // the default resolution of the sku of the main fabric to show in the image
	var gsMainTitle = (gsCookieSet) ? gsCookieSet[2] : 'White Twill'; // the default title of the main fabric
	var gsMainLink = (gsCookieSet) ? gsCookieSet[3] : 'http://www.serenaandlily.com/Fabric/Fabrics-White-Twill-Upholstery-Weight'; // the default url of the main fabric
	
	var gsPipingSKU = (gsCookieSet) ? gsCookieSet[4] : 'FABR-CH32-U'; // the default sku of the piping fabric to show in the image
	var giPipingRes = (gsCookieSet) ? gsCookieSet[5] : '120'; // the default resolution of the sku of the piping fabric to show in the image
	var gsPipingTitle = (gsCookieSet) ? gsCookieSet[6] : 'White Twill'; // the default title of the piping fabric
	var gsPipingLink = (gsCookieSet) ? gsCookieSet[7] : 'http://www.serenaandlily.com/Fabric/Fabrics-White-Twill-Upholstery-Weight'; // the default url of the piping fabric
	
	var gsPipingOption = 'dp_White_Twill';
	var gbSelf = '0';
	var gsLink = "http://www.serenaandlily.com/Fabric/Fabrics";
		
	var gsMainClass = gsMainTitle.replace(/ /ig,"_"); // remove the spaces from the title
	gsMainClass = gsMainClass.replace(/\//ig,"_"); // remove the slashes(/) from the Title
	
	var gsPipingClass = gsPipingTitle.replace(/ /ig,"_"); // remove the spaces from the title
	gsPipingClass = gsPipingClass.replace(/\//ig,"_"); // remove the slashes(/) from the Title
		
	var gaMainNames = new Array();
	var gaPipingNames = new Array();
	
	jQuery("#custcol64 option[class='dm_" + gsMainClass + "']").attr("selected", "selected");
	jQuery("#custcol66 option[class='dp_" + gsPipingClass + "']").attr("selected", "selected");
	
	$('.changing_image').attr('src','http://s7d4.scene7.com/ir/render/SerenaandLilyRender/' + gsImageSKU + '-VIG?wid=285&obj=main&src=' + gsMainSKU + '&res=' + giMainRes + '&obj=piping&src=' + gsPipingSKU + '&res=' + giPipingRes + '&sharpen=1&cache=off');

	$('.listItemOptions table td:first').css({'width' : '100px'});
	$('.listItemOptions select').attr('disabled', '');
	$('#trim_fabric_self').change(function(){
		if ($('#trim_fabric_self').hasClass('checked').toString() == "true") {
			$('#trim_fabric_self').removeClass('checked');
			$('.listItemOptions select').attr('disabled', '');
			$('.listItemOptions select:last').css({'color' : '#333','background' : '#fff'});
			$('.piping .title .fabric_name').html('<span class="fabric_selected_title">' + gsMainTitle + '</span>');
			$('.piping .title .buy').html(' <a href="' + gsPipingLink + '">buy swatch</a>');
			var lsPipingSwatch = gsPipingClass.replace(/dp/,'p');
			$('.' + lsPipingSwatch).addClass('fabric_selected');
			$('.piping .title .fabric_name').html('<span class="fabric_selected_title">' + gsPipingTitle + '</span>');
			$('.piping .title .buy').html(' <a href="' + gsPipingLink + '">buy swatch</a>');
			$(".listItemOptions select:last option[class='dp_" + gsPipingClass + "']").attr("selected", "selected");
			gbSelf = "0";
		} else {
			$('#trim_fabric_self').addClass('checked');
			jQuery(".listItemOptions select:last option[class='dp_Self-Piping']").attr("selected", "selected");
			$(".fabric_piping_swatches .fabric_selected").removeClass('fabric_selected');
			gsPipingSKU = "Self-Piping";
			$('.piping .title .fabric_name').html('<span class="fabric_selected_title">Self-Piping</span>');
			$('.piping .title .buy').html('');
			fnChangePiping('','1');
			gbSelf = "1";
		}
	});
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
    
	$("#custcol64 option").each(function(i){ // main fabric
		var lsMainClass = $(this).text();
		var lsMainClassNospace = lsMainClass.replace(/ /ig,"_");
		var lsMainClassNospace = lsMainClassNospace.replace(/\//ig,"_");
		$(this).addClass("dm_" + lsMainClassNospace);
		gaMainNames[i] = lsMainClass;
	});
    
	$("#custcol66 option").each(function(i){ // piping fabric
		var lsPipingClass = $(this).text();
		var lsPipingClassNospace = lsPipingClass.replace(/ /ig,"_");
		var lsPipingClassNospace = lsPipingClassNospace.replace(/\//ig,"_");
		$(this).addClass("dp_" + lsPipingClassNospace);
		gaPipingNames[i] = lsPipingClass;
	});
	
	jQuery.get("http://www.serenaandlily.com/site/xml/fabrics.xml",{},function(xml) {
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
			$(".m_" + gsMainClass).addClass('fabric_selected');
			$('.main .title .fabric_name').html(gsMainTitle);
			$('.main .title .buy').html(' <a href="' + gsMainLink + '">buy swatch</a>');
			$(".p_" + gsPipingClass).addClass('fabric_selected');
			$('.piping .title .fabric_name').html(gsPipingTitle);
			$('.piping .title .buy').html(' <a href="' + gsPipingLink + '">buy swatch</a>');
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
				$('.main .title .buy').html(' <a href="' + gsMainLink + '">buy swatch</a>');
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
						gsMainLink = $(this).find("link").text();
						$('.main .title .buy').html(' <a href="' + gsMainLink + '">buy swatch</a>');
					}
				});
				var lsMainClassNospace = lsSwatch.replace(/ /ig,"_");
				var lsMainClassNospace = lsMainClassNospace.replace(/\//ig,"_");
				var lsMainClassReformat = lsMainClassNospace.replace(/_/ig," ");
				fnChangeMain(lsMainClassReformat);
				$('.main .title .fabric_name').html(lsSwatchTitle);
				$(".fabric_main_swatches .fabric_selected").removeClass('fabric_selected');
				$(this).addClass('fabric_selected');
				jQuery("#custcol64 option[selected]").removeAttr("selected");
				jQuery("#custcol64 option[class='dm_" + lsMainClassNospace + "']").attr("selected", "selected");
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
				if (gbSelf != '1') {
					$('.piping .title .buy').html(' <a href="' + gsPipingLink + '">buy swatch</a>');
				} else {
					$('.piping .title .fabric_name').html('<span class="fabric_selected_title">Self-Piping</span>');
					$('.piping .title .buy').html('');
				}
				$(this).removeClass('fabric_hover');
			});
			$('.piping .swatch').click(function(event){
				event.preventDefault();
				if(gbSelf == "0"){
					var lsSwatch = $(this).children().attr("alt");
					var lsSwatchTitle = '<span class="fabric_selected_title">' + lsSwatch + '</span>';
					gsPipingTitle = lsSwatch;
					$('fabric_item',xml).each(function() {
						lsItemName = $(this).find("name").text();
						if(lsItemName == lsSwatch) {
							gsPipingLink = $(this).find("link").text();
							$('.piping .title .buy').html(' <a href="' + gsPipingLink + '">buy swatch</a>');
						}
					});
					var lsPipingClassNospace = lsSwatch.replace(/ /ig,"_");
					var lsPipingClassNospace = lsPipingClassNospace.replace(/\//ig,"_");
					var lsPipingClassReformat = lsPipingClassNospace.replace(/_/ig," ");
					fnChangePiping(lsPipingClassReformat);
					$('.piping .title .fabric_name').html(lsSwatchTitle);
					$(".fabric_piping_swatches .fabric_selected").removeClass('fabric_selected');
					$(this).addClass('fabric_selected');
					jQuery("#custcol66 option[selected]").removeAttr("selected");
					jQuery("#custcol66 option[class='dp_" + lsPipingClassNospace + "']").attr("selected", "selected");
				}
			});
		
		$("#custcol64").change(function(){ // main fabric
			var selectedFabric = $("#custcol64 :selected").attr('class');
			selectedFabric = selectedFabric.replace(/dm_/ig,"");
			selectedFabricTitle = $("#custcol64 :selected").text();
			gsMainTitle = selectedFabricTitle;
			
			$('fabric_item',xml).each(function() {
				lsItemName = $(this).find("name").text();
				if(lsItemName == selectedFabricTitle) {
					gsMainLink = $(this).find("link").text();
					$('.main .title .buy').html(' <a href="' + gsMainLink + '">buy swatch</a>');
				}
			});
			var lsMainTitle = '<span class="fabric_selected_title">' + selectedFabricTitle + '</span>';
			$('.main .title .fabric_name').html(lsMainTitle);
			$(".fabric_main_swatches .fabric_selected").removeClass('fabric_selected');
			$(".fabric_main_swatches .m_" + selectedFabric).addClass('fabric_selected');
			fnChangeMain(selectedFabric)
		});
		$("#custcol66").change(function(){ // piping fabric
			var selectedFabricClass = $("#custcol66 :selected").attr('class');
			var selectedFabric = selectedFabricClass.replace(/dp_/ig,"");
			var selectedFabricTitle = $("#custcol66 :selected").text();
			var lsPipingTitle = '<span class="fabric_selected_title">' + selectedFabricTitle + '</span>';
			gsPipingTitle = selectedFabricTitle;
			gsPipingOption = selectedFabricClass;
			
			$('fabric_item',xml).each(function() {
				lsItemName = $(this).find("name").text();
				if(lsItemName == selectedFabricTitle) {
					var gsPipingLink = $(this).find("link").text();
					$('.piping .title .buy').html(' <a href="' + gsPipingLink + '">buy swatch</a>');
				}
			});
			$('.piping .title .fabric_name').html(lsPipingTitle);
			$(".fabric_piping_swatches .fabric_selected").removeClass('fabric_selected');
			$(".fabric_piping_swatches .p_" + selectedFabric).addClass('fabric_selected');
			
			if(selectedFabric == "Self-Piping") {
				fnChangePiping(selectedFabric,'1');
				$('.piping .title .buy').html('');
				$('#trim_fabric_self').attr('checked', 'checked'); // change the check box to be checked
				gbSelf = "1";
			} else {
				fnChangePiping(selectedFabric);
				$('#trim_fabric_self').attr('checked', ''); // change the check box to be unchecked
			}
		});
	});
	
  function fnChangeMain(psSelected){
		var lsSelected = psSelected.replace(/_/ig," ");
	  jQuery.get("http://www.serenaandlily.com/site/xml/fabrics.xml",{},function(xml){
				
			// Run the function for each item tag in the XML file
			$('fabric_item',xml).each(function(i) {
				itemName = $(this).find("name").text();
				if(itemName == lsSelected) {
					lsMainSKU = $(this).find("sku").text();
					liMainRes = $(this).find("resolution").text();
				}
			});
			
			// Update the IMG src with the generated HTML string
			if(gbSelf == "1"){
				fnChangeImage(lsMainSKU,liMainRes,lsMainSKU,liMainRes)
			} else {
				fnChangeImage(lsMainSKU,liMainRes,'','')
			}
		});
	}
	
	function fnChangePiping(psSelected,pbSelf){
		var lsSelected = psSelected.replace(/_/ig," ");
		var lbSelf = pbSelf ? pbSelf : '';
		jQuery.get("http://www.serenaandlily.com/site/xml/fabrics.xml",{},function(xml) {
				
			// Run the function for each item tag in the XML file
			$('fabric_item',xml).each(function(i) {
				itemName = $(this).find("name").text();
				if(itemName == lsSelected) {
					lsPipingSKU = $(this).find("sku").text();
					liPipingRes = $(this).find("resolution").text();
				}
			});
			
			// Update the IMG src with the generated HTML string
			if(lbSelf == "1") {
				fnChangeImage('','',gsMainSKU,giMainRes);
			} else {
				fnChangeImage('','',lsPipingSKU,liPipingRes);
			}
		});
	}

	function fnChangeImage(psMainSKU,piMainRes,psPipingSKU,piPipingRes) {
		if(psMainSKU){gsMainSKU = psMainSKU}; // if there is a passed value for the main SKU set the global value to it
		if(piMainRes){giMainRes = piMainRes}; // if there is a passed value for the main resolution set the global value to it
		if(psPipingSKU){gsPipingSKU = psPipingSKU}; // if there is a passed value for the piping SKU set the global value to it
		if(piPipingRes){giPipingRes = piPipingRes}; // if there is a passed value for the piping resolution set the global value to it
		
		$.cookie("c" + gsImageSKU,gsMainSKU + "___" + giMainRes + "___" + gsMainTitle + "___" + gsMainLink + "___" + gsPipingSKU + "___" + giPipingRes + "___" + gsPipingTitle + "___" + gsPipingLink,{ expires : 1 }); // set a cookie with the item information 
	  $('.changing_image').attr('src','http://s7d4.scene7.com/ir/render/SerenaandLilyRender/' + gsImageSKU + '-VIG?wid=285&obj=main&src=' + gsMainSKU + '&res=' + giMainRes + '&obj=piping&src=' + gsPipingSKU + '&res=' + giPipingRes + '&sharpen=1&cache=off');
		$(".scene_7_popup_cust").attr('href','http://s7d4.scene7.com/ir/render/SerenaandLilyRender/' + gsImageSKU + '-VIG?wid=790&obj=main&src=' + gsMainSKU + '&res=' + giMainRes + '&obj=piping&src=' + gsPipingSKU + '&res=' + giPipingRes + '&sharpen=1&cache=off');
	}
	jQuery("#custcol64 option[class='dm_" + gsMainClass + "']").attr("selected", "selected");
	jQuery("#custcol66 option[class='dp_" + gsPipingClass + "']").attr("selected", "selected");
});