 
  $(function() {
    var name = $( "#name" ),
      email = $( "#email" ),
      password = $( "#password" ),
      allFields = $( [] ).add( name ).add( email ).add( password ),
      tips = $( ".validateTips" );
 
     
    $( "#login-form" ).dialog({
      autoOpen: false,
      height: 500,
      width: 550,
      modal: true,
      buttons: {
        "login an account": function() {
          var bValid = true;
          allFields.removeClass( "ui-state-error" );
 
           
            $( "#users tbody" ).append( "<tr>" +
              "<td>" + name.val() + "</td>" +
              "<td>" + email.val() + "</td>" +
              "<td>" + password.val() + "</td>" +
            "</tr>" );
            $( this ).dialog( "close" );
          
        },
        Cancel: function() {
          $( this ).dialog( "close" );
        }
      },
      close: function() {
        allFields.val( "" ).removeClass( "ui-state-error" );
      }
    });
 
    $( "#login-user" )
      .button()
      .click(function() {
        $( "#login-form" ).dialog( "open" );
      });
	   
  });
   