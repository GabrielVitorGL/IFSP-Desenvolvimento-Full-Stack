<?php include('libraries/form_helper.php') ?>
<section class="content">
    <div class="container mt-5 pt-5">
        <div class="col-md-12 dark-mode px-0">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Inscreva-se já!</h3>
                </div>

                <form id="quickForm" action="subscribe.php" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Escolha seu plano</label>
                            <?php
                            $numPlanos = count($planos);
                            $planoDoMeio = floor($numPlanos / 2);
                            foreach ($planos as $plano): ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="plan" value="<?= htmlspecialchars($plano['id']) ?>"
                                        id="plan<?= htmlspecialchars($plano['id']) ?>" <?= $plano['id'] == $planos[$planoDoMeio]['id'] ? 'checked' : '' ?>>
                                    <label class="form-check-label"><b><?= htmlspecialchars($plano['nome']) ?> - R$ <?= number_format($plano['valor'], 2, ',', '.') ?></b></label>
                                    <p><?= htmlspecialchars($plano['descricao']) ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Digite seu nome" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefone</label>
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Digite seu telefone" required minlength="11">
                        </div>
                        <div class="form-group">
                            <label for="birth">Data de nascimento</label>
                            <input type="date" name="birth" class="form-control" id="birth" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Digite sua senha" required minlength="6">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirme sua senha</label>
                            <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirme sua senha" required minlength="6" equalTo="#password">
                        </div>
                        <div class="form-group mb-0">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1" required>
                                <label class="custom-control-label" for="exampleCheck1">Eu concordo com os termos de serviço.</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Inscrever-se</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    $(function() {
        $.validator.setDefaults({
            submitHandler: function(form) {
                form.submit();
            }
        });
        $('#quickForm').validate({
            rules: {
                name: {
                    required: true,
                },
                phone: {
                    required: true,
                    minlength: 11
                },
                birth: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 6
                },
                confirm_password: {
                    required: true,
                    minlength: 6,
                    equalTo: "#password"
                },
                terms: {
                    required: true
                },
            },
            messages: {
                name: {
                    required: "Por favor, insira seu nome"
                },
                phone: {
                    required: "Por favor, insira seu telefone",
                    minlength: "Seu telefone deve ter no mínimo 11 caracteres"
                },
                birth: {
                    required: "Por favor, insira sua data de nascimento"
                },
                email: {
                    required: "Por favor, insira um endereço de email",
                    email: "Por favor, insira um endereço de email válido"
                },
                password: {
                    required: "Por favor, forneça uma senha",
                    minlength: "Sua senha deve ter no mínimo 6 caracteres"
                },
                confirm_password: {
                    required: "Por favor, forneça uma senha",
                    minlength: "Sua senha deve ter no mínimo 6 caracteres",
                    equalTo: "Por favor, insira a mesma senha que acima"
                },
                terms: "Por favor, concorde com nossos termos"
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>