<?php
     /* Este script conecta um banco de dados MySQL conforme os 
     parâmetros enviados */
     $servidor = "localhost";
   $nome_banco = "imagiaria";
   $usuario = "root";
   $senha = "123456";
   
   // Conectando ao servidor MySQL
   if (!($conexao = mysql_connect($servidor, $usuario, $senha)))
    {
            echo "<p align = \'center\"><big><strong>Não foi possível 
   conectar-se ao MySQL. Por favor, entre em contato com o Administrador do 
   Sistema!!!</strong></big></p>";
            exit;
    }
  else 
  echo "<p align = \"center\"><big><strong>Conexão com a base de Dados do MySQL 
  $nome_banco estabelecida com sucesso!!!!</strong></big></p>";
  // Selecionando a Base de Dados
  if (!($conectado = mysql_select_db($nome_banco, $conexao)))
     {
            echo "<p align = \"center\"><big><strong>Não foi possível estabelecer                                             
   uma conexão com a Base de Dados do MySQL $nome_banco. 
   Por favor, entre em contato com o Administrador do Sistema!!!!!!</strong></big></p>";
           exit;
     }
?>            

