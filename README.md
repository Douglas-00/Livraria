# Livraria
Sistema -> Gerenciamento de uma livraria
# Guia para executar na máquina Local.
1- Clone o repositório para a máquina de destino usando o comando git clone <URL do repositório>.<br>
2- Navegue até a pasta raiz do projeto Laravel e execute o comando composer install para instalar as dependências do projeto.
3- Configure o arquivo .env para configurações do banco local com os dados  nome do banco, nome de usuário e senha.
4- Gere a chave com o comando php artisan key:generate Isso irá gerar uma nova chave de aplicativo no arquivo .env, que é usada para criptografar cookies e outros dados sensíveis

#5 - Após configurar o banco de dados, execute o comando php artisan migrate.

# Execute a aplicação -> php artisan serve, observar se estiver utilizando Xampp, Nginx ver as portas para não dar conflito.
 O projeto será executado no endereço http://localhost:8000 por padrão.

Apache: Configure um novo host virtual no Apache para apontar para a pasta public do projeto Laravel. Certifique-se de ter as configurações corretas no arquivo de host virtual, como o caminho para a pasta do projeto e as permissões corretas.

Nginx: Configure um novo bloco de servidor no Nginx para apontar para a pasta public do projeto Laravel. Novamente, verifique se as configurações do arquivo de configuração estão corretas, como o caminho para a pasta do projeto e as permissões adequadas.

