<section class="content">
    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-md-5">
                <h2>Já pensou em ter todas as suas séries e filmes em um lugar só?</h2>
                <p class="mt-5">
                    A <strong>MAXIMUS</strong> é a solução para você! Nosso hub reúne o catálogo de todos seus serviços de streaming em um lugar só!<br>

                </p>
                <p>
                    Temos parceria com os maiores serviços de streaming do mundo, como Netflix, Amazon Prime Video, Disney+ e muito mais!
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/cinema.png" class="img-fluid rounded-lg" alt="Imagem de um cinema">
            </div>
        </div>
    </div>
    <div class="container mt-5 pt-5">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <img src="img/streaming.png" class="img-fluid rounded-lg" alt="Foto de TV com serviço de streaming">
            </div>
            <div class="col-md-5">
                <h2>Assine agora e tenha acesso a todos os seus filmes e séries favoritos!</h2>
                <p class="mt-5">
                    Nunca mais perca tempo procurando em qual serviço de streaming está aquela série que você quer assistir! Assine a <strong>MAXIMUS</strong> e tenha acesso a todos os seus filmes e séries favoritos em um só lugar!
                </p>
            </div>
        </div>
    </div>

    <div class="container mt-5 pt-5" id="devices">
        <div class="row justify-content-between">
            <div class="col-md-5">
                <h2>Assista de onde estiver!</h2>
                <p class="mt-5">
                    A <strong>MAXIMUS</strong> é compatível com todos os dispositivos! Assista de onde estiver, seja no seu celular, tablet, computador ou smart TV!
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/devices.jpg" class="img-fluid rounded-lg" alt="Dispositivos">
            </div>
        </div>
    </div>


    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-12" id="stats">
                <h2>Os serviços de streaming mais vistos no Brasil</h2>
                <p class="mt-5 mb-5">
                    Confira abaixo o gráfico com os serviços de streaming mais vistos no Brasil em 2021:
                </p>
                <?php include('includes/component/graph.php') ?>
                <p>
                    Fonte: <a href="https://www.reddit.com/r/dataisbeautiful/comments/g0p0fo/oc_heres_some_data_on_which_video_streaming/#lightbox">Reelgood</a>
                </p>
                <p>
                    Isso nos mostra a quantidade de serviços de streaming que estão disponíveis no mercado e como a <strong>MAXIMUS</strong> é essencial para quem quer ter acesso a todos eles em um só lugar!
                </p>
            </div>
        </div>
    </div>

    <div class="container mt-5 pt-5" id="services">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Serviços de Streaming</h2>
                <p class="mt-5 mb-5">

                </p>
                <?php include('includes/component/table.php') ?>
            </div>
        </div>
    </div>


    <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <a href="form_page.php" class="btn btn-primary btn-lg rounded-pill w-100">Assine agora!</a>
        </div>
    </div>
</section>