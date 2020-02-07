<?php
/*********************************************************************
    ipclient.inc.php

    File included on index page

    Vito Renda <vitorenda@gmail.com>
    
    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

**********************************************************************/
function get_client_ip() {
  return ($ip=getenv('HTTP_CLIENT_IP' )) ? $ip :
	( ($ip=getenv('HTTP_X_FORWARDED_FOR' )) ? $ip :
		( ($ip=getenv('HTTP_X_FORWARDED' )) ? $ip :
			( ($ip=getenv('HTTP_FORWARDED_FOR' )) ? $ip :
				( ($ip=getenv('HTTP_FORWARDED' )) ? $ip :
					( ($ip=getenv('REMOTE_ADDR' )) ? $ip : false )
				)
			)
		)
	);
}

$clientIP = get_client_ip();
if ($clientIP){ ?>
	<p class="client-ip"> Indirizzo IP da comunicare<br><span><?php echo $clientIP; ?></span></p>
<?php } ?>
