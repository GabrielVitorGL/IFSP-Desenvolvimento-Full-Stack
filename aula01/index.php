<style>
    html, body {
        background-color: #352f36;
        color: #FBFFF4;
        font-family: Arial, Helvetica, sans-serif;
        align-items: center;
        display: flex;
        justify-content: center;
        vertical-align: middle;
        flex-direction: column;
        padding: 1rem;
    }

    table {
        border: 2px solid #FBFFF4;
        border-radius: 10px;
        padding: 1rem 2rem;
    }
</style>

<h1>PHP is the best...</h1>

<table>
    <?php

        for ($i = 0; $i < 5; $i++)
            echo '<tr><td>Seja bem vindo à disciplina Full Stack - 2024/2</td></tr> <br/>';

    ?>
</table>