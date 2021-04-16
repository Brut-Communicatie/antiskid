console.log('Contact form GA listener loaded - Brut Communicatie');
//Add event listener to a succesfull form submission
document.addEventListener( 'wpcf7mailsent', function( event ) {
    //Send the information to Google Analytics
    ga( 'send', 'event', 'Contact Form', 'submit' ); 
  }, false );