<?php if ( ! defined('ABSPATH')) exit; ?>

<div class="wrap">

<?php
if ( $this->logged_in ) {
	echo '<p class="alert">Logado</p>';
}
?>

	<form method="post">
		<table class="form-table">
			<tr>
				<td>User</td> 
				<td><input name="userdata[user]"></td>
			</tr>
			<tr>
				<td>Password </td>
				<td><input type="password" name="userdata[user_password]"></td>
			</tr>
			<?php
			if ( $this->login_error ) {
				echo '<tr><td colspan="2" class="error">' . $this->login_error . '</td></tr>';
			}
			?>
			<tr>
				<td colspan="2">
					<input type="submit" value="Enter"> 
				</td>
			</tr>
		</table>
	</form>
	
</div> <!-- .wrap -->


<footer class="wrap">

	<p><strong>Fatec Franca &ndash; Dr. Thomas Novelino &ndash;</strong><br />
	<p><strong>Analise e Desenvolvimento de Sistemas 6° ciclo Noturno</strong><br />
	<p><strong>Alisson Salvador e Robinson Mendes</strong><br />
		<a href="http://fatecfranca.edu.br">fatecfranca.edu.br</a>
	</p>
	<p>&copy; Copyright 2016&ndash; <a href="mailto:robinho.cripta@gmail.com">Robinson Cesar Mendes</a> /
		<a href="mailto:alisson_we_salvador@hotmail.com">Alisson Salvador</a>. Todos os direitos reservados.</p></p

</footer> <!-- .wrap -->