$('#cep').change(function () {
    var cep = $('#cep').val();
    var url = 'https://webmaniabr.com/api/1/cep/' + cep + '/?app_key=hK9n0Ezx9XM7PMRpPt6RLV2UUqlVXSLK&app_secret=IYTRvghml819jMZrpmJfkZ4LUo0ZzxLjXBoPcZtYLL9ireJh';    
    $.getJSON(url, function (retorno) {
        var resultado = eval(retorno);
        $('#endereco').val(resultado.endereco);
        $('#bairro').val(resultado.bairro);
        $('#cidade').val(resultado.cidade);
        $('#estado').val(resultado.uf);
    });
});

