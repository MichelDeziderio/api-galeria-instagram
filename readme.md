Autor : Michel Deziderio e Silva
Descrção : Aqui está uma ferramenta extremamente forte e com vários fins de uso.
Autor URL : www.micheldeziderio.com.br

Olá você que está lendo este artigo.

Vou mostrar duas formas simples de usar a API de fotos do Instagram como galeria fotos para o seu site.
Eu tenho certeza que vão gostar dessa. 😀

Mas antes de eu começar a mostrar os códigod da API, vou falar dos prós e os contras.

Prós:

– Felizmente temos a vantagem de poder estilizar a API de galeria da forma que bem entender.

– Teremos uma galeria dinâmica onde não teremos nenhum problema de atualizações em nosso site ou site dos nossos clientes.

Contras:

– Infelizmente a API só nos deixa carregar até 30 fotos, mesmo com o Ajax para tentar forçar o carregamento das demais, sendo que eu acho que ninguém vai precisar demais de 15 fotos em sua galeria.

– Vídeos, sim os vídeos. Vou deixa-los um pouco triste em dizer que quando é uma postagem de dum vídeo o instagram nos envia para a API aquela thumbnail que é carregada no nosso feed. Tudo isso por causa da segurança rigorosa do facebook, para não ter a possibilidade de outras pessoas baixar os seus vídeos quando é carregado em seu site. Porém podemos colocar links aonda o usuário final possa acessar o link direto da sua postagem dentro do aplicativo ou do web instagram.

– API que tenho desenvolvida é em PHP, mas tem o seu pró também da possiblidade de ser gerada em outras linguagens que preferir, pois as fotos, links e textos são gerados por um Json.

Tudo isso não é maneiro? 🙂

Agora vamos botar a mão na massa?

1º É necessário que entre na sua conta do Instagram pelo browser.
Acesse este link:
https://www.instagram.com/developer/

2º Click em registar aplicação, para registar é bem simples, basta clicar em Register You Apllication e preencher o formulário.

http://micheldeziderio.com.br/wp-content/uploads/2018/07/instagram-resister-application.png

3º Você tem que criar um token para que o nosso API possa acessar suas fotos.
CLick nesse link:
http://instagram.pixelunion.net

4º Guarde o token em um lugar em lugar para poder inserir no código adiante.

Abaixo está a conexão com o Json da API do instagram.

http://micheldeziderio.com.br/wp-content/uploads/2018/07/conexao-json.png

Criando o loop e imprimindo a galeria e modal com Bootstrap.

http://micheldeziderio.com.br/wp-content/uploads/2018/07/codigo-api.png

Ele vai ficar como no modelo de exemplo do link abaixo.

http://micheldeziderio.com.br/exemplos/galeria-instagram/
