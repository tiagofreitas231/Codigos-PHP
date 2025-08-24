<?php
	while ($row = $resultSet->fetch(PDO::FETCH_ASSOC){
	echo $row['id_cliente']; 
	echo $row['nome_cliente'];
	echo preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4",$row['cpf_cliente']); 
	

echo $row['email_cliente']; 
	echo date('d/m/Y', strtotime($row['data_nascimento_cliente'])); 
	}
?>