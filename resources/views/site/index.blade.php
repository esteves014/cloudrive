@extends('site.layout')
@section('titulo', 'Inicio-Cloudrive')
@section('conteudo')

    <main class="container-fluid">
        <section id="banner" class="p-4 mt-5" id="home">
            <div id="conteudo-header" class="d-flex align-items-center text-center text-white p-5">
                <div id="particles-js"></div>
                <div class="position-relative z-3 text">
                    <h1>Clique. Guarde. Acesse. Simples assim.</h1>
                    <p class="lead mt-3 mb-5 ">Sua vida digital organizada, sem esforço.</p>
                    <a href="#metodos" class="btn-banner mt-5 ">Cadastrar</a>
                </div>
            </div>
        </section>

        <section id="projeto" class="container">
            <div class="row">
                <div class="container col-lg-6 col-12">
                    <h1>Sobre o Projeto</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut distinctio nobis corporis officiis nemo
                        numquam vero repellendus fugit rerum, impedit recusandae ex inventore delectus reiciendis temporibus
                        ullam deleniti repellat dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste amet
                        architecto eum, itaque impedit sit esse laudantium vel adipisci deserunt. Reiciendis, atque sit
                        tenetur rem saepe expedita maxime voluptatum ea. Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Repellendus voluptate facilis doloribus temporibus impedit. Tempore dicta, cupiditate
                        recusandae quo assumenda adipisci? Eos provident facilis repudiandae voluptate, autem tempore?
                        Accusantium, delectus. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, quas
                        dicta? Mollitia officia, magni excepturi quis vero cumque distinctio ipsam, quaerat asperiores
                        molestias unde sequi commodi praesentium explicabo corporis corrupti.</p>
                </div>
                <img src="https://img.freepik.com/free-photo/saas-concept-collage_23-2149399281.jpg?semt=ais_hybrid&w=740&q=80"
                    class="rounded shadow-lg col-lg-6 col-12 p-0" alt="">
            </div>
        </section>

        <!-- Contato -->
        <section id="contato">

            <div class="container py-5">
                <div class="row g-4">
                    <!-- Informações de contato -->
                    <div class="col-lg-4">
                        <div class="text-white p-4 rounded-3" id="contato-informacoes">
                            <h1 class="fs-3 fw-bold">Meios de contato</h1>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-transparent text-white"><i class="bi bi-whatsapp"></i> (14)
                                    99999-9999</li>
                                <li class="list-group-item bg-transparent text-white"><i class="bi bi-linkedin"></i> <a
                                        class="text-decoration-none text-white"
                                        href="https://www.linkedin.com/in/vitor-miguel-da-silva-esteves-274248241/">Vitor
                                        Miguel Esteves</a></li>
                                <li class="list-group-item bg-transparent text-white"><i class="bi bi-github"></i> <a
                                        class="text-decoration-none text-white"
                                        href="https://github.com/esteves014">esteves014</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Formulário -->
                    <div class="col-lg-8 shadow-lg" id="contato-formulario">
                        <div class="bg-light p-4 rounded-3 shadow-sm">
                            <h1 class="fs-3">Entre em <span class="text">contato!</span></h1>
                            <form>
                                <div class="row g-3">
                                    <!-- Nome e E-mail -->
                                    <div class="col-md-6">
                                        <label for="nome" class="form-label">Digite seu Nome <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="nome" class="form-control btt-email"
                                            placeholder="Digite aqui..." maxlength="60">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email_sup" class="form-label">Digite seu E-mail <span
                                                class="text-danger">*</span></label>
                                        <input type="email" id="email_sup" class="form-control btt-email"
                                            placeholder="Digite aqui..." maxlength="100">
                                    </div>

                                    <!-- Telefone e Celular -->
                                    <div class="col-md-6">
                                        <label for="tel" class="form-label">Digite seu Telefone</label>
                                        <input type="tel" id="tel" class="form-control btt-email"
                                            placeholder="Digite aqui..." maxlength="20">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="cell" class="form-label">Digite seu Celular <span
                                                class="text-danger">*</span></label>
                                        <input type="tel" id="cell" class="form-control btt-email"
                                            placeholder="Digite aqui..." maxlength="20">
                                    </div>

                                    <!-- Assunto -->
                                    <div class="col-12">
                                        <label for="assunto" class="form-label">Digite seu Assunto <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="assunto" class="form-control btt-email"
                                            placeholder="Digite aqui..." maxlength="60">
                                    </div>

                                    <!-- Mensagem -->
                                    <div class="col-12">
                                        <label for="msg" class="form-label">Digite sua Mensagem <span
                                                class="text-danger">*</span></label>
                                        <textarea id="msg" class="form-control btt-email" rows="4" placeholder="Digite aqui..." maxlength="255"></textarea>
                                    </div>

                                    <!-- Captcha -->
                                    <div class="col-12">
                                        <label class="form-label">Digite os caracteres ao lado <span
                                                class="text-danger">*</span></label>
                                        <div
                                            class="d-flex flex-column flex-md-row align-items-start align-items-md-center">
                                            <div class="d-flex align-items-center mb-2 mb-md-0">
                                                <div id="captcha" class="bg-dark text-white px-3 py-1 rounded captcha">
                                                </div>
                                                <button type="button" id="refreshCaptcha"
                                                    class="btn btn-link text-decoration-none ms-2 bg-dark text-white rounded-circle">
                                                    <i class="bi bi-arrow-clockwise"></i>
                                                </button>
                                            </div>
                                            <input type="text" id="text-Captcha"
                                                class="form-control w-100 w-md-auto ms-0 ms-md-2 btt-email"
                                                placeholder="Digite aqui" maxlength="5">
                                        </div>
                                    </div>



                                    <!-- Política de privacidade -->
                                    <div class="col-12">
                                        <p class="small">Os dados captados nesse formulário não serão utilizados por
                                            terceiros,
                                            apenas para uso interno de acordo com a LGPD. Ao enviar sua mensagem você
                                            concorda
                                            com nossa política de privacidade.</p>
                                    </div>

                                    <!-- Botões -->
                                    <div class="col-12 d-flex justify-content-center g-3">
                                        <button type="button" id="enviar" class="btn me-2">Enviar
                                            mensagem</button>
                                        <button type="reset" class="btn" id="btn-cancelar-contato">Cancelar
                                            mensagem</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('particulas')
    {{-- Particles.js --}}
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js "></script>
    <script src="{{ asset('js/script.js') }}"></script>
@endpush
