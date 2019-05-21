$( '#navbarNavDropdown .navbar-nav a' ).on( 'click', function () {
	$( '#navbarNavDropdown .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});

$('h1').fadeToggle(5000);


var totalCount = 4;

function ChangeIt(){

	var num = Math.ceil( Math.random() * totalCount );

	$('.herobox').css('background-image', 'url('+num+'.jpeg');
	
	console.log($('.herobox').background = num+'.jpeg');
		
}

