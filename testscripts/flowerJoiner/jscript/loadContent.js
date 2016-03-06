function fnXMLHTTPRequest(psURL, psContainer)
{																					// fill the content from an external file
	var loXMLHttpRequest = "";																								// Reset loXMLHttpRequest to nothing
	var loContainer = document.getElementById(psContainer);
					
    	if (window.XMLHttpRequest)
        {																							// Mozilla, Safari, Firefox, Opera...
            loXMLHttpRequest = new XMLHttpRequest();// declares http_request
            if (loXMLHttpRequest.overrideMimeType)
            {
                loXMLHttpRequest.overrideMimeType('text/xml');												// overRide the MIME Type to be XML
            }
        }
        else if (window.ActiveXObject)
        {																				// IE
            try
            {
                loXMLHttpRequest = new ActiveXObject("Msxml2.XMLHTTP");								// declares http_request for IE
            }
            catch (e)
            {
            }			
            																										// catch any errors
            try
			{
                loXMLHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");					// declares http_request
            }
            catch (e)
            {
            }																												// catch any errors
        }
	
        if (!loXMLHttpRequest)
        {
            return "";
        }
        
        loXMLHttpRequest.onreadystatechange = function()
        {
            if (loXMLHttpRequest.readyState == 4)
            {
                if (loXMLHttpRequest.status == 200)
                {
                    loContainer.innerHTML += loXMLHttpRequest.responseText;
                }
            }
        }
        
        psURL = psURL + "?sid="+Math.random();
        loXMLHttpRequest.open("GET", psURL, true);
        loXMLHttpRequest.send(null); 		
}