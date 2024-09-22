<section class="content">
    <div class="container mt-5 pt-5">
        <div class="col-md-12 dark-mode px-0">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Inscreva-se já!</h3>
                </div>
                <form id="quickForm">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Digite seu email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Confirme sua senha</label>
                            <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword2" placeholder="Confirme sua senha">
                        </div>
                        <div class="form-group mb-0">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
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
            submitHandler: function() {
                // go to success.php page
                window.location.href = 'success.php';

            }
        });
        $('#quickForm').validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#exampleInputPassword1"
                },
                terms: {
                    required: true
                },
            },
            messages: {
                email: {
                    required: "Por favor, insira um endereço de email",
                    email: "Por favor, insira um endereço de email válido"
                },
                password: {
                    required: "Por favor, forneça uma senha",
                    minlength: "Sua senha deve ter no mínimo 5 caracteres"
                },
                confirm_password: {
                    required: "Por favor, forneça uma senha",
                    minlength: "Sua senha deve ter no mínimo 5 caracteres",
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