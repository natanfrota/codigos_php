<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 20px;
            font-weight: bold;
            margin: 0;
            padding: 0;
            display: grid;
            grid-template-areas:
                "header header header"
                "aside1 main aside2";
            gap: 1rem;
        }

        header {
            background-color: lightskyblue;
            padding: 2rem;
            color: white;
            font-size: 2rem;
            text-align: center;
            grid-area: header;
        }

        main {
            grid-area: main;
        }

        aside {
            background-color: lightcoral;
        }

        .lateral1 {
            grid-area: aside1;
        }

        .lateral2 {
            grid-area: aside2;
        }

        h1 {
            text-align: center;
        }

        form {
            font: inherit;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        input,
        textarea {
            font: inherit;
            padding: .5rem;
        }

        textarea {
            resize: none;
            line-height: 20px;
        }
    </style>
</head>

<body>
    <header>
        <span>Folha</span>
    </header>
    <aside class="lateral1"></aside>
    <main>
        <h1>Publicar</h1>
        <form action="salvar.php" method="post">
            <input type="text" name="titulo" id="titulo" value="Texto: o que é e qual é a sua finalidade">
            <textarea name="texto" id="texto" rows=20>
        O texto faz uma relação importante com o contexto. Uma lista de compras é um texto se ela fizer sentido para quem a recebe, ou seja, de acordo com o seu contexto.

        O contexto é o grupo de elementos que permitem compreender uma mensagem. Situação, participantes, finalidade são características do contexto.

        Se você encontrar uma lista de compras num ônibus, não pode considerá-la um texto, porque não faz sentido para você, ou seja, está fora do seu contexto.

        O mesmo acontece com a palavra "silêncio" nas paredes dos hospitais, está atrelado ao contexto e, por isso, é considerada um texto.

        Dessa maneira, fica claro que os textos podem ser curtos, com somente uma palavra, ou expresso por meio de um conjunto delas. Contudo, devemos ter atenção às características e os critérios essenciais de um texto.
            </textarea>
            <input type="submit" value="Publicar">
        </form>
    </main>
    <aside class="lateral2"></aside>
</body>

</html>