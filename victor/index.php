<?php
/*
INTEGRES:	É UM SISTEMA PARA AUTOMATIZAR CADASTROS DE PRODUTOS PARA E-COMMERCE,
			FORNECENDO DESCRIÇÃO COMPLETA DE PRODUTOS (MEDIDAS, PESO, CARACTERÍSTICAS, IMAGENS E VIDEOS). UMA DE SUAS MAIORES FUNCIONALIDADES É A POSSIBILIDADE DE EXPORTAÇÃO DE SEU CATALOGO PARA SEUS CLIENTES.
VANTAGENS: 	FIM DOS ERROS DE DIGITAÇÃO, ECONOMIA DE TEMPO E RETRABALHO, REDUÇÃO DE CUSTOSS OPERACIONAIS, INFORMAÇÕES COMPLETAS E PADRONIZADAS,
			ACOMPANHAMENTO DE PRODUTOS ATIVOS NO MOMENTO

*/
session_start();
session_unset();
unset($_SESSION);
session_destroy();
header("Location: login.php");
?>
