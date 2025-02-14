```markdown
# Ponto de Entrada Principal para a Aplicação de E-commerce

Este script lida com o roteamento com base no caminho solicitado e no método HTTP. Ele inicializa a sessão, verifica a autenticação do usuário e delega solicitações aos controladores apropriados.

## Rotas

- `/` ou `/login`: Exibe a visualização de login e lida com solicitações de login.
- `/logout`: Lida com o logout do usuário.
- `/novo-usuario`: Exibe o formulário de registro de novo usuário e lida com solicitações de registro.
- `/usuarios`: Exibe a lista de usuários.
- `/produtos`: Exibe a lista de produtos.
- `/editar-produto`: Exibe o formulário de edição de produto e lida com solicitações de edição de produto.
- Padrão: Exibe uma mensagem de "Página não encontrada".

## Controladores Usados

- `Ecommerce\editProduct\EditProduct`
- `Ecommerce\editProductForm\EditProductForm`
- `Ecommerce\login\LoginController`
- `Ecommerce\entidade\Usuario`
- `Ecommerce\loginAcessUser\LoginAcessUserController`
- `Ecommerce\logoutAcessUser\LogoutController`
- `Ecommerce\novoUsuario\NovoCadastroController`
- `Ecommerce\formularioNovoUsuario\FormCadastroController`
- `Ecommerce\produtoController\ListagemProdutoController`
- `Ecommerce\usuario\ListagemUsuarioController`
- `Ecommerce\produtoController\NewProdutoController`

## Sessão

- Inicia uma sessão e verifica se o usuário está logado.
- Redireciona para a página de login se o usuário não estiver autenticado e tentar acessar uma rota protegida.

**@package Ecommerce**
```