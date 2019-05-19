$( '#navbarNavDropdown .navbar-nav a' ).on( 'click', function () {
	$( '#navbarNavDropdown .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});
