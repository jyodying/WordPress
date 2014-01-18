<?php

define("OGGETTO_MAIL", "Contact from the site.");

########################################################################
/*#################		TEMPLATE MAIL		##########################*/
########################################################################
$str_contenuto_email = "
You are receiving this email because someone used the card of contacts on your website.

Here the personal information that we have contacted:

-------------------------------------------------------------
Name and Surname: {name}
E-mail: {mail}
IP Address: {ip}
-------------------------------------------------------------

This is the user's request:

-------------------------------------------------------------
Message: {corpo}
-------------------------------------------------------------

{url}";
?>