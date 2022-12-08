$(document).ready(function() {
        //Envia os dados do Form para o Controller de cadastro
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $('#enviar').on('click',function() {
           
    
            var nome = $('#nome').val();
            var email = $('#email').val();
            var telefone = $('#telefone').val();
        
            $.ajax({
                url: '/nova-inscricao',
                type: 'POST',
                dataType:'json',
                data:{
                    nome:nome,
                    email:email,
                    telefone:telefone,
                },
    
                success: function() {
                    
                },
                error: function(error) {
                    console.log(error)
                }
            });
        })


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $('#verIncristos').on('click',function() {
  
            $.ajax({
                url: '/total-inscritos',
                type: 'GET',
                dataType:'json',
    
                success: function() {
                    
                },
                error: function(error) {
                    console.log(error)
                }
            });
        })
});