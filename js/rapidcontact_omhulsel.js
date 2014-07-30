$( document ).ready(function() {
  
  $sHTML = "<li><div class='box'><div class='left-top-corner'><div class='right-top-corner'><div class='border-top'></div></div></div><div class='xcontent'><div class='border-left'><div class='border-right'><div class='inner'><div class='img-box'></div></div></div></div></div><div class='left-bot-corner'><div class='right-bot-corner'><div class='border-bot'></div></div></div></div></li>";
  
  if ($("div").hasClass('rapid_contact')) {
       
	   $( ".box-list" ).prepend($sHTML);
	   $(".rapid_contact:first").appendTo(".img-box");
	   $('.rapid_contact form').attr('id', 'contacts-form');
	   $('.rapid_contact .button ').attr('id', 'rapid_contact_customsendbutton');
	   
	   $("#rapid_contact_customsendbutton").parent().append( '<input class="rapid_contact button" type="button" value="Verwijder alle tekst" id="rapid_contact_customclearbutton" >' );
	}
	
	$("#rapid_contact_customclearbutton").click(function() {
		document.getElementById('contacts-form').reset();
	});
});