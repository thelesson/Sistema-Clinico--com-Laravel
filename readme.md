# Sistema de Consultas e exames - Laravel

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

## Introdução

Esboço de um simples sistema de consultas e exames clinicos.


## Ações disponiveis

CRUD de usuário com 3 niveis diferentes de acesso(Amin,paciente e profissional da saúde)

CRUD de consultas, exames e serviços médicos

Recuperação de senha, envio de email de recuperação de senha(mailChip)

Para envio de email, substitua os seguintes itens no arquivo .env :

	MAIL_DRIVER=smtp
	MAIL_HOST=smtp.gmail.com
	MAIL_PORT=465
	MAIL_USERNAME=thelesson.souza@gmail.com
	MAIL_PASSWORD=SUA_SENHA
	MAIL_ENCRYPTION=ssl

## ScreenShots

![Inicio](screenshots/01.PNG)

![Inicio](screenshots/02.PNG)

![Inicio](screenshots/03.PNG)

![Inicio](screenshots/04.PNG)

![Inicio](screenshots/05.png)

![Inicio](screenshots/06.png)

![Inicio](screenshots/07.PNG)

![Inicio](screenshots/08.PNG)

![Inicio](screenshots/09.PNG)

![Inicio](screenshots/10.PNG)

![Inicio](screenshots/11.PNG)

![Inicio](screenshots/12.PNG)

![Inicio](screenshots/13.PNG)

![Inicio](screenshots/14.PNG)

![Inicio](screenshots/15.PNG)

![Inicio](screenshots/16.PNG)

![Inicio](screenshots/17.PNG)

![Inicio](screenshots/18.PNG)

![Inicio](screenshots/19.png)

![Inicio](screenshots/20.png)

![Inicio](screenshots/21.png)

![Inicio](screenshots/22.png)

![Inicio](screenshots/23.png)

![Inicio](screenshots/24.PNG)

![Inicio](screenshots/25.png)

![Inicio](screenshots/26.png)



## Instalação


Abrir o arquivo .env e substituir as linhas : DB_DATABASE=SUA_BASE_DE_DADOS /// DB_USERNAME=SEU_NOME_DE_USUARIO /// DB_PASSWORD=SUA_SENHA

Para logar-se como ADMIN, acesse a url http://SEU_LOCAL_HOST/admin/login

Login e senha padrão: *login:* admin // *senha:*admin ou *login:* thelesson.souza@gmail.com *senha:*admin


## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
