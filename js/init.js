

/*========Initializing Jquery pluigins and other custom scripts========*/
( function( $ ) {
	"use strict";


	$('#ic_chattext_first').one('keyup', function () {
		$('#comm100-button-2662 a').trigger('click');
	});

	$('#remote-link').on('click', function () {
		var strPixel = '<img src="https://birect-nammer.com/conversion.gif?cid=OPTIONAL&payout=OPTIONAL&txid=OPTIONAL" width="1" height="1"/>';
		$( this ).find('.hidden').empty().append( strPixel );
		var win = window.open('https://birect-nammer.com/1cfcc592-bb13-49eb-bf77-b19082c3284a', '_blank');
  		win.focus();
	});

}( jQuery ) );
