<?php 
    $this->view('home/cabecario');
?>
        <!-- Navigation-->
        <?php
            $this->view('home/menu');
        ?>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Graziela
                        <span class="text-primary">R. T. R.</span>
                    </h1>
                    <div class="subheading mb-5">
                        Rua Verde, Bairro Azul, Cidade Negra, 47 0000-0000
                        <a href="mailto:name@email.com">graziela.tecari@email.com</a>
                    </div>
                    <p class="lead mb-5"> Sou especialista em Gestão Pública Municipal e tecnóloga em processos gerenciais. Atualmente trabalhando como investidora na B3. </p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://github.com/grazirtr"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experiência</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Trader B3</h3>
                            <div class="subheading mb-3">Autônoma</div>
                            <p>Fazendo operações de compra e venda de ativos.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Janeiro de 2017 - Presente</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Aconcelhamento em Finanças Pessoais</h3>
                            <div class="subheading mb-3">Autônoma</div>
                            <p>Auxiliando na organização financeira familiar com ênfase no SER e não no TER.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Janeiro de 2016 - Presente</span></div>
                    </div>
                   
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Educação</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">IFSC - Instituto Federal de Santa Catarina</h3>
                            <div class="subheading mb-3">Especialização em Gestão Pública Municipal</div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2017 - 2019</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Centro Universitário Leonardo da Vinci</h3>
                            <div class="subheading mb-3">Tecnólogo em Processos Gerenciais</div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2007 - 2009</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Habilidades</h2>
                    <div class="subheading mb-3">Gestão de Recursos Financeiros</div>
                    <div class="subheading mb-3">Análise gráfica para B3</div>
					<div class="subheading mb-3">Gestão de ativos</div>
					
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                <?php 
                    $this->view('home/form');
                ?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
         </div>
       
<?php 
    $this->view('home/rodape');
?>