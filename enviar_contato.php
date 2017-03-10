<?php
//Variáveis

$nome = $_POST['nome'];
$email = $_POST['email'];
$ddd_tel = $_POST['ddd_tel'];
$tel = $_POST['tel'];
$mensagem = $_POST['mensagem'];
$mensagemt =  wordwrap( $mensagem, 60, "<BR>", 1);
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

// Compo E-mail
  $arquivo = "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title>Entre em contato conosco</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
</head>
<body style='margin: 0; padding: 0;'>
	<table border='0' cellpadding='0' cellspacing='0' width='100%'>	
		<tr>
			<td style='padding: 10px 0 30px 0;'>
			  <table align='center' border='0' cellpadding='0' cellspacing='0' width='600' style='border: 1px solid #cccccc; border-collapse: collapse;'>
					<tr>
						<td height='80' align='center' bgcolor='#0000CD' style='padding: 0px 0 0px 0; color: #ffffff; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;'>Contato pelo site - $nome
							
						</td>
					</tr>
					<tr>
						<td bgcolor='#ffffff' style='padding: 30px 20px 30px 20px;'>
							<table border='0' cellpadding='0' cellspacing='0' width='100%'>
								<tr>
									<td style='color: #153643; font-family: Arial, sans-serif; font-size: 24px;'>
										<b>Voce recebeu um contato de $nome!</b>
									</td>
								</tr>
								<tr>
									<td style='padding: 20px 10px 20px 10px; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
										<p align='justify'>Você recebeu  a mensagem com as informa&ccedil;&otilde;es abaixo no dia <b>$data_envio</b> &agrave;s <b>$hora_envio</b>.</p></td>
								</tr>
								<tr>
									<td>
										<table border='0' cellpadding='0' cellspacing='0' width='100%'>
											<tr>
												<td width='260' valign='top'>
													<table border='0' cellpadding='0' cellspacing='0' width='100%'>
														<tr>
															<td style='padding: 20px 10px 20px 10p; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
																<table width='500' border='1' cellpadding='2' cellspacing='1' bgcolor='#CCCCCC' align='center'>
              <tr>
              	<td width='20'>Nome:</td><td width='300'>$nome</td>
              </tr>
             
              <tr>
                  <td width='20'>E-mail:</td><td width='300'><strong>$email</strong></td>
   			  </tr>
              
              <tr>
                  <td width='20'>Telefone:</td><td width='300'><b>($ddd_tel) $tel</b></td>
             </tr>
            
            <tr>
                  <td width='20'>Mensagem:</td><td width='300'>$mensagemt</td>
            </tr> 	 			  
             
        </table>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
                                <tr>
								  <td style='padding: 20px 10px 20px 10px; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>Esta mensagem foi direcionado ao seu email pelo contato do site da SGV Online! <br/></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor='#0000CD' style='padding: 10px 10px 10px 10px;'>
							<table border='0' cellpadding='0' cellspacing='0' width='100%'>
								<tr>
									<td style='color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;' width='500'>
										<p align='center'> SGV Online</p>
								  </td>
									<td align='right' width='38'><span style='font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;'><img align='center' src='images/facebook.png' alt='Facebook' width='38' height='38' style='display: block;' border='0' />
					
											</tr>
										</table>
									</td>
				  				</tr>
							</table>
						</td>
					</tr>
				
			</td>
		</tr>
	</table>
</body>
</html>
  ";
  
  //infos da empresa
   $remetente= $email;
   $empresa = "SGV Online";
  
  //enviar  
  // emails para quem será enviado o formulário
  $emailenviar = "luisbeskow@gmail.com";
  $destino = $emailenviar;
  $assunto = $nome." - Contato pelo Site";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: '.$remetente;
  //$headers .= "Bcc: $EmailPadrao\r\n";
  
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  echo ("<script>
		{	
		alert('Contato enviado com sucesso');
		location.href='index.php';
		}
		</script>
		<meta http-equiv='refresh' content='10;URL=contato.php'>
		");
		
  } else {
  echo ("<script>
		{	
		alert('Houve um erro no envio do contato!');
		location.href='index.php';
		}
		</script>");
  }
?>
