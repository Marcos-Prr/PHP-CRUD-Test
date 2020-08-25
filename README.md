# CRUD-PHP puro -Cadastro de produtos 


### Sumario
 2. [Requisitos](#requisiction)
 3. [Instalação](#installation)
 4. [Executando](#running)
 

 ## Requisitos 

 - PHP 5.5.30 ;
 - xampp ;
 
 ## Instalação
   Primeiro de tudo você precisa clonar este repositório:
    
     git clone https://github.com/Marcos-Prr/PHP-CRUD-Test
  
   Após isso , realize o download e a instalação do xampp no link a seguir:
    ``https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/5.5.30/xampp-portable-win32-5.5.30-7-VC11-installer.exe/download``
      
   Após instalar, extraia o arquivo php.rar para o seguinte diretório e faça a substituição:
			  	``.xampp\``
				
   Mova o  projeto para o workspace do xampp  localizado em :
     
     ..xampp\htdocs\
   

  ## Executando
   execute na pasta xamp o xampp control  para iniciar os serviços apache e mysql ou inicie manualmente executando :
     
     #service  apache start
     #service mysql start
    
    
   Para importar a tabela CRUD_Produtos basta seguir os passos:
    
     - Acesse o localhost e prossiga para o phpmyadmin.
     - Selecione o banco que deseja importar a tabela.
     - Após selecionado o banco, vá na opção importar e selecione o arquivo Crud_produtos.sql.
     - Arquivo selecionado basta clicar em executar e a tabela estará criada.

    
    Com a tabela Criada Acesse a pasta da aplicação: 
     http://Localhost/PHP-CRUD-Test/Index
        

## Comentários
Este projeto apresenta um sistema CRUD básico de cadastro de produtos utilizando padrão MVC,singleton e com php puro.

## Autor
- **Marcos Pereira da Silva Júnior **  - [GitHub](https://github.com/Marcos-Prr) - Email: [marcosprr34@gmail.com]
    

   
   
  
  
