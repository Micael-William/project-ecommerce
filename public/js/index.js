const btnAbrir = document.querySelector('.menu-mobile');
const btnFechar = document.querySelector('.close');

const container = document.querySelector('.abrir-menu');
const containerFechar = document.querySelector('.fechar-menu');

const body = document.querySelector('body');
const html = document.querySelector('html');

btnAbrir.addEventListener('click', () => {
  container.classList.add('abrir');
  body.classList.add('overflow-hidden');
  html.classList.add('overflow-hidden-html');

  if(container.classList.contains('fechar'))
  {
   container.classList.remove('abrir');
  }
})

btnFechar.addEventListener('click', () => {
  containerFechar.classList.add('fechar');

  if (body.classList.contains('overflow-hidden') && html.classList.contains('overflow-hidden-html'))
  {
    html.classList.remove('overflow-hidden-html');
    body.classList.remove('overflow-hidden');
  }

  if(container.classList.contains('fechar'))
  {
   containerFechar.classList.remove('fechar');
   container.classList.remove('abrir');

  }else
  {
    console.log('não tem classe para fechar');
  }
})


$(document).ready(function(){
  $('.btn-carrinho').each(function(){
    $(this).click(function(e){
      $.ajax({
        url: '/produtos/json',
        datatype: 'json',
        success:function(data){
          //converte o json para objeto
          var dados = JSON.parse(data);
          console.log( dados);
          
        },
        error: function(error){
          console.log(error);
        }
      });
      
    })
  })
});