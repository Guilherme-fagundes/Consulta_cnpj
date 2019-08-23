####Definição dos tipos de erros

* <b>Sua versão do php é inferior à 7.0:</b><br>
Está bíblioteca foi desenvolvida para atuar em servidores com versão do php igual ou superior a 7.0.

* <b>Requisição inválida:</b><br>
Este erro aparece quando você informa como <b>true</b> no construtor da classe e a sua aplicação não
está utilizando HTTPS.
Abos devem estar identicos.
Caso informe no construtor da classe como <b>false</b>, sua aplicação deve utilizar HTTP.<br>
<i>É aconselhavel utilizar https em sua aplicação!</i>

* <b>Extensão openssl não habilitada:</b><br>
Este erro é apresentado quando a extensão <i>openssl</i> não está ativada em seu php.ini. Para ativa-la, acesse o arquivo e descomente a linha<br>
```extension=php_openssl``` 

[voltar](README.md)
   