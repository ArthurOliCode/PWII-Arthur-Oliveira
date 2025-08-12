# PWII-Arthur-Oliveira

Aulas Web PWII com os professores João Siles e Ricardo Palhares.

  

Welcome! :wave:

  

Olá! Me chamo Arthur Oliveira, e este, é um repositório feito para o registro das minhas atividades com a matéria de Programação Web II.

Estou iniciando meus estudos no mundo da programação em geral, e este, é um dos lugares que desejo deixar marcado meus primeiros passos! :smiley:

  

# Documentação

  

#### Configuração do GitHub

Para a __configuração__ da sua __conta do GitHub__ para acessar seus projetos. __É necessário que você__:

- Tenha um conta já criada na plataforma;

- Tenha instalado o git Bash

- Ter um projeto já criado na plataforma;

---

Iniciando os passos para tal, primeiro, é primordial que você configure e insira seus dados como conta e nome no sistema. Os comandos para isso são:

>O endereço de email, deve corresponder ao cadastrado no site [github](https://github.com/)

  

- Comandos:

1.  `git config --global user.name " "`

2.  `git config --global user.email " "`

  

Com esses passos feitos, agora basta clonar seu repositório:

1.  `git clone (url do seu projeto)`

Feito isto, para adicionar as alterações e realizar commits, basta utilizar esta sequência de comandos:

-  `git add .`

-  `git commit --m "(descrição do projeto)"`

---
## Projeto Laravel

#### Configuração do projeto:
- Instalação do PHP

	Caso você não possua o PHP instalado, basta seguir  o seguinte comando no Windows Power: 
	
	`# Run as administrator...
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))` 

- Instalação do Laravel 

	Após instalar o PHP e o Composer corretamente, basta realizar o download do Laravel via Composer:
	
	`composer global require laravel/installer`
	
####  Aplicação Laravel

Realizando os passos acima podemos passar para a configuração de um projeto com o web framework.
Em seu framework de preferência utilize o comando:
 
`laravel new example-app`

Tendo a aplicação já criada, você poderá iniciar um local de desenvolvimento para o Laravel utilizando o comando `dev` do Composer.

`cd example-app`
`npm install && npm run build`
`composer run dev` 


---
- Passos para configuração correta do projeto já inicializado:
> Comando para visualizar os arquivos do projeto e verificar se está na pasta do projeto `ls` no powershell
1. Duplicar o arquivo `.env.example` e renomear o arquivo  como `.env`
2. Instalar as dependências PHP da pasta Vendor pelo composer `composer install`
3. Instalar as dependências node e criar a pasta `node_modules` com o comando `npm install`
4. Instalar as dependências do Vite na máquina com o comando `npm run build`
5. Inicializar o servidor com `composer run dev`
6. Utilizar o comando `php artisan key:generate` gerar a chave que irá ser inserida no key do arquivo `.env`
7. Iniciar o banco de dados do projeto com o Laravel ORM eloquent com o comando `php artisan migrate`
> Ele irá gerar a pasta `database` com o arquivo `database.sqlite`