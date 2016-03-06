var $cjq = jQuery.noConflict();
$cjq(document).ready(function(){
	$cjq.ajax({
	        url: "assets/csvs/nest.csv",
	        dataType: 'text',
	        cache: false
	 }).done(function(csvAsString){
	        csvAsArray=csvAsString.csvToArray();
	alert(csvAsArray[1]);
	 });
	csvAsStringA = 'Header 1,Header 2,Header 3\r\n'
	             +',"","Test ""Quotes"""\r\n'
	             +'"Test , Separator","Test \r\nCRLF",   Test    White   Space   \r\n'
	             +' '; //Some accidental white space on optional last row

	csvAsArrayA = csvAsStringA.csvToArray();
	document.getElementById("result").innerHTML='<pre>'+csvAsArrayA+'</pre>';
});

