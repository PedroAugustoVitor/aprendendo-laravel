<html>
    <head>
		<title>Passo 3</title>
	</head>
    <body>
        <form action="{{url('/calculo')}}" method="post">
            @csrf
            <label for="peso">Peso atual em quilogramas</label>
            <input type="float" class="campoTexto" name="peso" required />
            <label for="altura">Sua altura</label>
            <input type="float" class="campoTexto" name="altura" required />
            <button class="botao" type="submit">Calcular</button>
        </form>
    </body>
</html>