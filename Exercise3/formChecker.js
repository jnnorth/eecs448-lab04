function validSubmission()
{
  var shipping = document.getElementById('shipping').value;
  var password = document.getElementById('pass').value;
  var email = document.getElementById('user').value;
  var display_message = "";

  if (shipping == "")
  {
    display_message = display_message + " Please select a shipping method! ";
  }

  if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)))
  {
    display_message = display_message + " Invalid Email Address! ";
  }

  if (password = "")
  {
    display_message = display_message + " Please enter a password! ";
  }

  var xbox = document.getElementById('xboxonex').value;
  var cont = document.getElementById('controller').value;
  var nswitch = document.getElementById('nswitch').value;

  if (xbox < 0 || xbox = "")
  {
    display_message = display_message + " Xbox field must be at least 0! ";
  }

  if (cont < 0 || cont = "" )
  {
    display_message = display_message + " Controller field must be at least 0! ";
  }

  if (nswitch < 0 || nswitch = "")
  {
    display_message = display_message + " Nintendo Switch field must be at least 0! ";
  }

  if (display_message = "")
  {
    alert("Success!");
  }

  else
  {
    alert(display_message);
  }
}
