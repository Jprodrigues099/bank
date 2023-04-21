<x-layout bodyClass="">

    <div>
        <div class="container position-sticky z-index-sticky top-0">
            <div class="row">
                <div class="col-12">
                    <!-- Navbar -->
                    <x-navbars.navs.guest signin='login' signup='register'></x-navbars.navs.guest>
                    <!-- End Navbar -->
                </div>
            </div>
        </div>
        <main class="main-content  mt-0">
            <section>
                <div class="page-header min-vh-100">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                                <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                                    style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
                                </div>
                            </div>
                            <div
                                class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                                <div class="card card-plain">
                                    <div class="card-header">
                                        <h4 class="font-weight-bolder">Registre-se</h4>
                                        <p class="mb-0">Crie sua conta EzyBank</p>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register') }}" id="register">
                                            @csrf
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Nome Completo</label>
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ old('name') }}">
                                            </div>
                                            @error('name')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Nome Social</label>
                                                <input type="text" class="form-control" name="social_name"
                                                    value="{{ old('social_name') }}">
                                            </div>
                                            @error('social_name')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">CPF</label>
                                                <input type="text" class="form-control" name="cpf"
                                                    value="{{ old('cpf') }}">
                                            </div>
                                            @error('cpf')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                {{-- <label class="form-label">Data de Nascimento</label> --}}
                                                <input type="date" class="form-control" name="birthdate"
                                                    value="{{ old('birthdate') }}">
                                            </div>
                                            @error('birthdate')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Número de Celular</label>
                                                <input type="text" class="form-control" name="phone"
                                                    value="{{ old('phone') }}">
                                            </div>
                                            @error('phone')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Nome da mãe</label>
                                                <input type="text" class="form-control" name="mothers-name"
                                                    value="{{ old('mothers-name') }}">
                                            </div>
                                            @error('mothers-name')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email"
                                                    value="{{ old('email') }}">
                                            </div>
                                            @error('email')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                             {{-- ----------------------------------------------- --}}
                                            {{-- DIVISÃO DE COLUNAS --}}
                                            {{-- ----------------------------------------------- --}}
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">CEP</label>
                                                <input type="text" class="form-control" name="zipcode"
                                                    value="{{ old('zipcode') }}">
                                            </div>
                                            @error('zipcode')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Rua</label>
                                                <input type="text" class="form-control" name="address"
                                                    value="{{ old('address') }}">
                                            </div>
                                            @error('address')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Numero</label>
                                                <input type="text" class="form-control" name="address_number"
                                                    value="{{ old('address_number') }}">
                                            </div>
                                            @error('address_number')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Complemento</label>
                                                <input type="text" class="form-control" name="address_complement"
                                                    value="{{ old('address_complement') }}">
                                            </div>
                                            @error('address_complement')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Bairro</label>
                                                <input type="text" class="form-control" name="district"
                                                    value="{{ old('district') }}">
                                            </div>
                                            @error('district')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Cidade</label>
                                                <input type="text" class="form-control" name="city"
                                                    value="{{ old('city') }}">
                                            </div>
                                            @error('city')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Estado</label>
                                                <input type="text" class="form-control" name="state"
                                                    value="{{ old('state') }}">
                                            </div>
                                            @error('state')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            {{-- ----------------------------------------------- --}}
                                            {{-- DIVISÃO DE COLUNAS --}}
                                            {{-- ----------------------------------------------- --}}
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Senha</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                            @error('password')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Repetir senha</label>
                                                <input type="password" class="form-control" name="password_confirmation">
                                            </div>
                                            @error('password_confirmation')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="form-check form-check-info text-start ps-0 mt-3">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    id="flexCheckDefault" name="optin">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Eu li e concordo com os <a href="{{ route('privacy-policy') }}"
                                                        class="text-dark font-weight-bolder">Termos de uso</a>
                                                </label>
                                            </div>
                                            @error('optin')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="text-center">
                                                <button type="submit"
                                                    class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Cadastrar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                        <p class="mb-2 text-sm mx-auto">
                                            Já possui uma conta?
                                            <a href="{{ route('login') }}"
                                                class="text-primary text-gradient font-weight-bold">Faça login</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    @push('js')
    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.mask.min.js"></script>
    <script>
        $(function() {
            var text_val = $(".input-group input").val();
            if (text_val === "") {
                $(".input-group").removeClass('is-filled');
            } else {
                $(".input-group").addClass('is-filled');
            }
            
            // Mascara campos formulário
            $("input[name='phone']").mask("(99) 99999-9999");
            $("input[name='cpf']").mask("999.999.999-99");
            $("input[name='zipcode']").mask("99999-999");
            $("#register").submit(function() {
                $("input[name='phone']").unmask();
                $("input[name='cpf']").unmask();
                $("input[name='zipcode']").unmask();
            });

            //Buscar CEP - API ViaCEP
            $("input[name='zipcode']").bind("keyup blur", function() {
                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g,'');
                //Verifica se campo cep possui valor informado.
                if (cep != "" && (parseInt($("input[name='zipcode']").val().length) == 9)) {
                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;
                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {
                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("input[name='address']").val(dados.logradouro);
                                $("input[name='district']").val(dados.bairro);
                                $("input[name='city']").val(dados.localidade);
                                $("input[name='state']").val(dados.uf);

                                $("input[name='address']").parent().addClass('is-filled');
                                $("input[name='district']").parent().addClass('is-filled');
                                $("input[name='city']").parent().addClass('is-filled');
                                $("input[name='state']").parent().addClass('is-filled');

                                $("input[name='address_number']").focus();
                            } //end if.
                            else {
                                // CEP não encontrado
                                // toastr["warning"]("CEP não encontrado!");
                                return true;
                            }
                        });
                    } //end if.
                    else {
                        // CEP inválido
                        // toastr["warning"]("Formato de CEP inválido!");
                        return true;
                    }
                }
            });
        });
    </script>
    @endpush
</x-layout>