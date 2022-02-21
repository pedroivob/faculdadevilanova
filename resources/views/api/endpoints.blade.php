@extends('layouts.single')
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1><strong>Endpoints</strong></h1> <hr>
                <br><br>
Listagem de professores<br>
Listagem de alunos por curso<br>
Listagem aulas por curso<br>
Cursos disponíveis<br>
Cursos indisponiveis<br>
Filtragem de resultados por campos nas consultas principais<br>
Aulas do aluno + valor da mensalidade com desconto<br>
                    </div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1><strong>Diagrama de caso de uso</strong></h1> <hr>
                <br><br>
                <img src="https://github.com/gustavogbi/aceleracao-dev-avaliacao/raw/main/FaculdadeVilaNova/diagrama_casos_de_uso.jpeg">
                    </div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1><strong>Autenticação</strong></h1> <hr>
                <br><br>
                Basic auth
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1><strong>Endpoint listagem de professores</strong></h1> <hr>
                <br><br>
                GET Listar Professores
api/professores
                <div class="card-body">
                RESPONSE
                <div class="bg-secondary text-dark">
                <div class="highlight highlight-source-json position-relative overflow-auto"><pre>{
    <span class="pl-ent">"data"</span>: [
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">1</span>,
            <span class="pl-ent">"nome"</span>: <span class="pl-s"><span class="pl-pds">"</span>Guy Will<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"matricula"</span>: <span class="pl-s"><span class="pl-pds">"</span>597<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"datanascimento"</span>: <span class="pl-s"><span class="pl-pds">"</span>1988-03-19<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idade"</span>: <span class="pl-s"><span class="pl-pds">"</span>23<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"responsavelFinanceiro"</span>: <span class="pl-s"><span class="pl-pds">"</span>Bernadine Senger Jr.<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"cpf"</span>: <span class="pl-s"><span class="pl-pds">"</span>69995875899<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idcursos"</span>: <span class="pl-c1">1</span>,
            <span class="pl-ent">"idplano"</span>: <span class="pl-c1">2</span>,
            <span class="pl-ent">"created_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:04.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"updated_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:04.000000Z<span class="pl-pds">"</span></span>
        },
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">4</span>,
            <span class="pl-ent">"nome"</span>: <span class="pl-s"><span class="pl-pds">"</span>Vanessa Gorczany<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"matricula"</span>: <span class="pl-s"><span class="pl-pds">"</span>564<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"datanascimento"</span>: <span class="pl-s"><span class="pl-pds">"</span>1975-12-05<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idade"</span>: <span class="pl-s"><span class="pl-pds">"</span>87<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"responsavelFinanceiro"</span>: <span class="pl-s"><span class="pl-pds">"</span>Abner Kiehn<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"cpf"</span>: <span class="pl-s"><span class="pl-pds">"</span>56669501009<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idcursos"</span>: <span class="pl-c1">1</span>,
            <span class="pl-ent">"idplano"</span>: <span class="pl-c1">2</span>,
            <span class="pl-ent">"created_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:04.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"updated_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:04.000000Z<span class="pl-pds">"</span></span>
        },
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">6</span>,
            <span class="pl-ent">"nome"</span>: <span class="pl-s"><span class="pl-pds">"</span>Hassan Roob<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"matricula"</span>: <span class="pl-s"><span class="pl-pds">"</span>40<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"datanascimento"</span>: <span class="pl-s"><span class="pl-pds">"</span>1978-03-22<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idade"</span>: <span class="pl-s"><span class="pl-pds">"</span>35<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"responsavelFinanceiro"</span>: <span class="pl-s"><span class="pl-pds">"</span>Demarco Bergstrom MD<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"cpf"</span>: <span class="pl-s"><span class="pl-pds">"</span>45726563584<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idcursos"</span>: <span class="pl-c1">1</span>,
            <span class="pl-ent">"idplano"</span>: <span class="pl-c1">2</span>,
            <span class="pl-ent">"created_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:04.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"updated_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:04.000000Z<span class="pl-pds">"</span></span>
        },
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">8</span>,
            <span class="pl-ent">"nome"</span>: <span class="pl-s"><span class="pl-pds">"</span>Dr. Norwood Quigley III<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"matricula"</span>: <span class="pl-s"><span class="pl-pds">"</span>887<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"datanascimento"</span>: <span class="pl-s"><span class="pl-pds">"</span>1976-07-29<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idade"</span>: <span class="pl-s"><span class="pl-pds">"</span>93<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"responsavelFinanceiro"</span>: <span class="pl-s"><span class="pl-pds">"</span>Howell Wilkinson<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"cpf"</span>: <span class="pl-s"><span class="pl-pds">"</span>34348051060<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idcursos"</span>: <span class="pl-c1">1</span>,
            <span class="pl-ent">"idplano"</span>: <span class="pl-c1">2</span>,
            <span class="pl-ent">"created_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:04.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"updated_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:04.000000Z<span class="pl-pds">"</span></span>
        }
    ],
    <span class="pl-ent">"informação importante"</span>: <span class="pl-s"><span class="pl-pds">"</span>Essa API não está em produção, é apenas de homologação e testes<span class="pl-pds">"</span></span>
}</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;nome&quot;: &quot;Guy Will&quot;,
            &quot;matricula&quot;: &quot;597&quot;,
            &quot;datanascimento&quot;: &quot;1988-03-19&quot;,
            &quot;idade&quot;: &quot;23&quot;,
            &quot;responsavelFinanceiro&quot;: &quot;Bernadine Senger Jr.&quot;,
            &quot;cpf&quot;: &quot;69995875899&quot;,
            &quot;idcursos&quot;: 1,
            &quot;idplano&quot;: 2,
            &quot;created_at&quot;: &quot;2021-12-31T05:16:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-31T05:16:04.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;nome&quot;: &quot;Vanessa Gorczany&quot;,
            &quot;matricula&quot;: &quot;564&quot;,
            &quot;datanascimento&quot;: &quot;1975-12-05&quot;,
            &quot;idade&quot;: &quot;87&quot;,
            &quot;responsavelFinanceiro&quot;: &quot;Abner Kiehn&quot;,
            &quot;cpf&quot;: &quot;56669501009&quot;,
            &quot;idcursos&quot;: 1,
            &quot;idplano&quot;: 2,
            &quot;created_at&quot;: &quot;2021-12-31T05:16:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-31T05:16:04.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;nome&quot;: &quot;Hassan Roob&quot;,
            &quot;matricula&quot;: &quot;40&quot;,
            &quot;datanascimento&quot;: &quot;1978-03-22&quot;,
            &quot;idade&quot;: &quot;35&quot;,
            &quot;responsavelFinanceiro&quot;: &quot;Demarco Bergstrom MD&quot;,
            &quot;cpf&quot;: &quot;45726563584&quot;,
            &quot;idcursos&quot;: 1,
            &quot;idplano&quot;: 2,
            &quot;created_at&quot;: &quot;2021-12-31T05:16:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-31T05:16:04.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;nome&quot;: &quot;Dr. Norwood Quigley III&quot;,
            &quot;matricula&quot;: &quot;887&quot;,
            &quot;datanascimento&quot;: &quot;1976-07-29&quot;,
            &quot;idade&quot;: &quot;93&quot;,
            &quot;responsavelFinanceiro&quot;: &quot;Howell Wilkinson&quot;,
            &quot;cpf&quot;: &quot;34348051060&quot;,
            &quot;idcursos&quot;: 1,
            &quot;idplano&quot;: 2,
            &quot;created_at&quot;: &quot;2021-12-31T05:16:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-31T05:16:04.000000Z&quot;
        }
    ],
    &quot;informação importante&quot;: &quot;Essa API não está em produção, é apenas de homologação e testes&quot;
}" tabindex="0" role="button">
      <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-copy js-clipboard-copy-icon m-2">
    <path fill-rule="evenodd" d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path><path fill-rule="evenodd" d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path>
</svg>
      <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-check js-clipboard-check-icon color-fg-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1><strong>Endpoint listagem de aulas por curso</strong></h1> <hr>
                <br><br>
                <div class="card-body">
                GET Listar aulas por curso
api/aulas/{idcurso}<br>
RESPONSE<br>
<div class="bg-secondary text-dark">
<div class="highlight highlight-source-json position-relative overflow-auto"><pre>{
    <span class="pl-ent">"data"</span>: [
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">1</span>,
            <span class="pl-ent">"num_aula"</span>: <span class="pl-c1">30</span>,
            <span class="pl-ent">"tema"</span>: <span class="pl-s"><span class="pl-pds">"</span>Jammie Funk<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"duracao"</span>: <span class="pl-s"><span class="pl-pds">"</span>80<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"observacao"</span>: <span class="pl-s"><span class="pl-pds">"</span>Aliquam exercitationem iste eaque sint non. Voluptatibus et quo et laborum voluptatem. Tempore nihil excepturi debitis saepe pariatur.<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idcurso"</span>: <span class="pl-c1">1</span>,
            <span class="pl-ent">"idprofessor"</span>: <span class="pl-c1">3</span>,
            <span class="pl-ent">"created_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:05.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"updated_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:05.000000Z<span class="pl-pds">"</span></span>
        },
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">11</span>,
            <span class="pl-ent">"num_aula"</span>: <span class="pl-c1">61</span>,
            <span class="pl-ent">"tema"</span>: <span class="pl-s"><span class="pl-pds">"</span>Prof. Sam Macejkovic<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"duracao"</span>: <span class="pl-s"><span class="pl-pds">"</span>37<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"observacao"</span>: <span class="pl-s"><span class="pl-pds">"</span>Eius sit distinctio aut ratione eum expedita voluptatem voluptates. Corporis nemo et exercitationem.<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idcurso"</span>: <span class="pl-c1">1</span>,
            <span class="pl-ent">"idprofessor"</span>: <span class="pl-c1">10</span>,
            <span class="pl-ent">"created_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:05.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"updated_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:05.000000Z<span class="pl-pds">"</span></span>
        },
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">16</span>,
            <span class="pl-ent">"num_aula"</span>: <span class="pl-c1">26</span>,
            <span class="pl-ent">"tema"</span>: <span class="pl-s"><span class="pl-pds">"</span>Arjun Goyette<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"duracao"</span>: <span class="pl-s"><span class="pl-pds">"</span>99<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"observacao"</span>: <span class="pl-s"><span class="pl-pds">"</span>Aspernatur et aut aut sint mollitia. Vitae quia nihil deleniti qui doloremque eos aut. Sed consequatur quis voluptatem tenetur.<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idcurso"</span>: <span class="pl-c1">1</span>,
            <span class="pl-ent">"idprofessor"</span>: <span class="pl-c1">5</span>,
            <span class="pl-ent">"created_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:05.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"updated_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:05.000000Z<span class="pl-pds">"</span></span>
        }
    ],
    <span class="pl-ent">"informação importante"</span>: <span class="pl-s"><span class="pl-pds">"</span>Essa API não está em produção, é apenas de homologação e testes<span class="pl-pds">"</span></span>
}</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;num_aula&quot;: 30,
            &quot;tema&quot;: &quot;Jammie Funk&quot;,
            &quot;duracao&quot;: &quot;80&quot;,
            &quot;observacao&quot;: &quot;Aliquam exercitationem iste eaque sint non. Voluptatibus et quo et laborum voluptatem. Tempore nihil excepturi debitis saepe pariatur.&quot;,
            &quot;idcurso&quot;: 1,
            &quot;idprofessor&quot;: 3,
            &quot;created_at&quot;: &quot;2021-12-31T05:16:05.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-31T05:16:05.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;num_aula&quot;: 61,
            &quot;tema&quot;: &quot;Prof. Sam Macejkovic&quot;,
            &quot;duracao&quot;: &quot;37&quot;,
            &quot;observacao&quot;: &quot;Eius sit distinctio aut ratione eum expedita voluptatem voluptates. Corporis nemo et exercitationem.&quot;,
            &quot;idcurso&quot;: 1,
            &quot;idprofessor&quot;: 10,
            &quot;created_at&quot;: &quot;2021-12-31T05:16:05.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-31T05:16:05.000000Z&quot;
        },
        {
            &quot;id&quot;: 16,
            &quot;num_aula&quot;: 26,
            &quot;tema&quot;: &quot;Arjun Goyette&quot;,
            &quot;duracao&quot;: &quot;99&quot;,
            &quot;observacao&quot;: &quot;Aspernatur et aut aut sint mollitia. Vitae quia nihil deleniti qui doloremque eos aut. Sed consequatur quis voluptatem tenetur.&quot;,
            &quot;idcurso&quot;: 1,
            &quot;idprofessor&quot;: 5,
            &quot;created_at&quot;: &quot;2021-12-31T05:16:05.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-31T05:16:05.000000Z&quot;
        }
    ],
    &quot;informação importante&quot;: &quot;Essa API não está em produção, é apenas de homologação e testes&quot;
}" tabindex="0" role="button" style="display: inherit;">
      <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-copy js-clipboard-copy-icon m-2">
    <path fill-rule="evenodd" d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path><path fill-rule="evenodd" d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path>
</svg>
      <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-check js-clipboard-check-icon color-fg-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1><strong>Endpoint listagem de cursos disponíveis</strong></h1> <hr>
                <br><br>
                <div class="card-body">
                GET Listar cursos disponíveis
api/cursos/disponiveis
<br>
RESPONSE<br>
<div class="bg-secondary text-dark">
<div class="highlight highlight-source-json position-relative overflow-auto"><pre>{
    <span class="pl-ent">"data"</span>: [
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">1</span>,
            <span class="pl-ent">"nomedocurso"</span>: <span class="pl-s"><span class="pl-pds">"</span>Willy Hane<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"qntmax"</span>: <span class="pl-c1">8</span>,
            <span class="pl-ent">"descricao"</span>: <span class="pl-s"><span class="pl-pds">"</span>Consectetur porro debitis placeat sed necessitatibus eveniet nesciunt. Ipsum itaque autem doloribus perspiciatis. Incidunt eveniet eum libero similique.<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"datacriacao"</span>: <span class="pl-s"><span class="pl-pds">"</span>2007-01-14T08:47:46.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"dataupdate"</span>: <span class="pl-s"><span class="pl-pds">"</span>1974-06-16T01:13:13.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"categoria"</span>: <span class="pl-s"><span class="pl-pds">"</span>repellat<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"mensalidade"</span>: <span class="pl-c1">2235.02</span>,
            <span class="pl-ent">"status"</span>: <span class="pl-s"><span class="pl-pds">"</span>Disponível<span class="pl-pds">"</span></span>
        },
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">4</span>,
            <span class="pl-ent">"nomedocurso"</span>: <span class="pl-s"><span class="pl-pds">"</span>Cassandre Kuhn V<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"qntmax"</span>: <span class="pl-c1">8</span>,
            <span class="pl-ent">"descricao"</span>: <span class="pl-s"><span class="pl-pds">"</span>Labore inventore doloribus amet est voluptas expedita. Vel ea voluptates excepturi. Harum ut dolores est sunt assumenda et. Voluptatem eum sunt maiores ab ut.<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"datacriacao"</span>: <span class="pl-s"><span class="pl-pds">"</span>1973-11-05T17:21:18.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"dataupdate"</span>: <span class="pl-s"><span class="pl-pds">"</span>2020-05-18T22:11:51.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"categoria"</span>: <span class="pl-s"><span class="pl-pds">"</span>nihil<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"mensalidade"</span>: <span class="pl-c1">2395.38</span>,
            <span class="pl-ent">"status"</span>: <span class="pl-s"><span class="pl-pds">"</span>Disponível<span class="pl-pds">"</span></span>
        },
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">6</span>,
            <span class="pl-ent">"nomedocurso"</span>: <span class="pl-s"><span class="pl-pds">"</span>Mrs. Alexa McClure<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"qntmax"</span>: <span class="pl-c1">7</span>,
            <span class="pl-ent">"descricao"</span>: <span class="pl-s"><span class="pl-pds">"</span>Minus libero voluptas sunt est impedit autem. Quidem inventore quo aut eum. Aut voluptas facere reiciendis non eos doloremque.<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"datacriacao"</span>: <span class="pl-s"><span class="pl-pds">"</span>2016-08-23T01:04:01.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"dataupdate"</span>: <span class="pl-s"><span class="pl-pds">"</span>2016-01-26T13:03:38.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"categoria"</span>: <span class="pl-s"><span class="pl-pds">"</span>vitae<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"mensalidade"</span>: <span class="pl-c1">9593.85</span>,
            <span class="pl-ent">"status"</span>: <span class="pl-s"><span class="pl-pds">"</span>Disponível<span class="pl-pds">"</span></span>
        },
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">7</span>,
            <span class="pl-ent">"nomedocurso"</span>: <span class="pl-s"><span class="pl-pds">"</span>Lindsey Yost<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"qntmax"</span>: <span class="pl-c1">6</span>,
            <span class="pl-ent">"descricao"</span>: <span class="pl-s"><span class="pl-pds">"</span>Eveniet sed quo et aspernatur ipsam enim nulla et. Voluptas debitis rerum labore voluptas. Similique aut aliquid esse enim. Et dolorem facere rerum voluptate fuga rerum ullam.<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"datacriacao"</span>: <span class="pl-s"><span class="pl-pds">"</span>1993-11-24T22:06:20.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"dataupdate"</span>: <span class="pl-s"><span class="pl-pds">"</span>1991-03-05T00:29:15.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"categoria"</span>: <span class="pl-s"><span class="pl-pds">"</span>atque<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"mensalidade"</span>: <span class="pl-c1">3112.47</span>,
            <span class="pl-ent">"status"</span>: <span class="pl-s"><span class="pl-pds">"</span>Disponível<span class="pl-pds">"</span></span>
        }
    ],
    <span class="pl-ent">"informacao"</span>: <span class="pl-s"><span class="pl-pds">"</span>Essa API não está em produção, é apenas de homologação e testes<span class="pl-pds">"</span></span>
}</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;nomedocurso&quot;: &quot;Willy Hane&quot;,
            &quot;qntmax&quot;: 8,
            &quot;descricao&quot;: &quot;Consectetur porro debitis placeat sed necessitatibus eveniet nesciunt. Ipsum itaque autem doloribus perspiciatis. Incidunt eveniet eum libero similique.&quot;,
            &quot;datacriacao&quot;: &quot;2007-01-14T08:47:46.000000Z&quot;,
            &quot;dataupdate&quot;: &quot;1974-06-16T01:13:13.000000Z&quot;,
            &quot;categoria&quot;: &quot;repellat&quot;,
            &quot;mensalidade&quot;: 2235.02,
            &quot;status&quot;: &quot;Disponível&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;nomedocurso&quot;: &quot;Cassandre Kuhn V&quot;,
            &quot;qntmax&quot;: 8,
            &quot;descricao&quot;: &quot;Labore inventore doloribus amet est voluptas expedita. Vel ea voluptates excepturi. Harum ut dolores est sunt assumenda et. Voluptatem eum sunt maiores ab ut.&quot;,
            &quot;datacriacao&quot;: &quot;1973-11-05T17:21:18.000000Z&quot;,
            &quot;dataupdate&quot;: &quot;2020-05-18T22:11:51.000000Z&quot;,
            &quot;categoria&quot;: &quot;nihil&quot;,
            &quot;mensalidade&quot;: 2395.38,
            &quot;status&quot;: &quot;Disponível&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;nomedocurso&quot;: &quot;Mrs. Alexa McClure&quot;,
            &quot;qntmax&quot;: 7,
            &quot;descricao&quot;: &quot;Minus libero voluptas sunt est impedit autem. Quidem inventore quo aut eum. Aut voluptas facere reiciendis non eos doloremque.&quot;,
            &quot;datacriacao&quot;: &quot;2016-08-23T01:04:01.000000Z&quot;,
            &quot;dataupdate&quot;: &quot;2016-01-26T13:03:38.000000Z&quot;,
            &quot;categoria&quot;: &quot;vitae&quot;,
            &quot;mensalidade&quot;: 9593.85,
            &quot;status&quot;: &quot;Disponível&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;nomedocurso&quot;: &quot;Lindsey Yost&quot;,
            &quot;qntmax&quot;: 6,
            &quot;descricao&quot;: &quot;Eveniet sed quo et aspernatur ipsam enim nulla et. Voluptas debitis rerum labore voluptas. Similique aut aliquid esse enim. Et dolorem facere rerum voluptate fuga rerum ullam.&quot;,
            &quot;datacriacao&quot;: &quot;1993-11-24T22:06:20.000000Z&quot;,
            &quot;dataupdate&quot;: &quot;1991-03-05T00:29:15.000000Z&quot;,
            &quot;categoria&quot;: &quot;atque&quot;,
            &quot;mensalidade&quot;: 3112.47,
            &quot;status&quot;: &quot;Disponível&quot;
        }
    ],
    &quot;informacao&quot;: &quot;Essa API não está em produção, é apenas de homologação e testes&quot;
}" tabindex="0" role="button" style="display: inherit;">
      <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-copy js-clipboard-copy-icon m-2">
    <path fill-rule="evenodd" d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path><path fill-rule="evenodd" d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path>
</svg>
      <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-check js-clipboard-check-icon color-fg-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1><strong>Endpoint listagem de cursos indisponiveis</strong></h1> <hr>
                <br><br>
                <div class="card-body">
                GET Listar cursos indisponiveis
api/cursos/indisponiveis
<br>
RESPONSE<br>
<div class="bg-secondary text-dark">
<div class="highlight highlight-source-json position-relative overflow-auto"><pre>{
    <span class="pl-ent">"data"</span>: [
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">2</span>,
            <span class="pl-ent">"nomedocurso"</span>: <span class="pl-s"><span class="pl-pds">"</span>Teresa Lebsack<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"qntmax"</span>: <span class="pl-c1">2</span>,
            <span class="pl-ent">"descricao"</span>: <span class="pl-s"><span class="pl-pds">"</span>Fugit veniam totam occaecati et non. Atque vero voluptates quam blanditiis amet maxime dolore. Voluptatem est ut iusto qui quibusdam asperiores.<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"datacriacao"</span>: <span class="pl-s"><span class="pl-pds">"</span>1989-01-17T20:34:57.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"dataupdate"</span>: <span class="pl-s"><span class="pl-pds">"</span>2000-12-07T01:35:31.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"categoria"</span>: <span class="pl-s"><span class="pl-pds">"</span>atque<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"mensalidade"</span>: <span class="pl-c1">917.86</span>,
            <span class="pl-ent">"status"</span>: <span class="pl-s"><span class="pl-pds">"</span>Indisponível<span class="pl-pds">"</span></span>
        },
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">3</span>,
            <span class="pl-ent">"nomedocurso"</span>: <span class="pl-s"><span class="pl-pds">"</span>Merritt Rosenbaum V<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"qntmax"</span>: <span class="pl-c1">2</span>,
            <span class="pl-ent">"descricao"</span>: <span class="pl-s"><span class="pl-pds">"</span>Qui nemo quia laborum et ut placeat. Quasi voluptas officia doloribus adipisci omnis laudantium occaecati rerum. Voluptas velit aut nihil vitae commodi odio.<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"datacriacao"</span>: <span class="pl-s"><span class="pl-pds">"</span>1972-05-03T18:17:43.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"dataupdate"</span>: <span class="pl-s"><span class="pl-pds">"</span>1992-02-11T04:54:22.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"categoria"</span>: <span class="pl-s"><span class="pl-pds">"</span>voluptas<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"mensalidade"</span>: <span class="pl-c1">5457.61</span>,
            <span class="pl-ent">"status"</span>: <span class="pl-s"><span class="pl-pds">"</span>Indisponível<span class="pl-pds">"</span></span>
        },
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">5</span>,
            <span class="pl-ent">"nomedocurso"</span>: <span class="pl-s"><span class="pl-pds">"</span>Mr. Ryan Ryan III<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"qntmax"</span>: <span class="pl-c1">4</span>,
            <span class="pl-ent">"descricao"</span>: <span class="pl-s"><span class="pl-pds">"</span>Et aut non repudiandae et. Consequuntur eos qui molestiae est sit ut et.<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"datacriacao"</span>: <span class="pl-s"><span class="pl-pds">"</span>2009-11-01T16:20:24.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"dataupdate"</span>: <span class="pl-s"><span class="pl-pds">"</span>1988-08-11T18:44:07.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"categoria"</span>: <span class="pl-s"><span class="pl-pds">"</span>vitae<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"mensalidade"</span>: <span class="pl-c1">4189.54</span>,
            <span class="pl-ent">"status"</span>: <span class="pl-s"><span class="pl-pds">"</span>Indisponível<span class="pl-pds">"</span></span>
        },
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">8</span>,
            <span class="pl-ent">"nomedocurso"</span>: <span class="pl-s"><span class="pl-pds">"</span>Prof. Ernesto Reinger DDS<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"qntmax"</span>: <span class="pl-c1">1</span>,
            <span class="pl-ent">"descricao"</span>: <span class="pl-s"><span class="pl-pds">"</span>Corporis similique aut dolor et ut. Voluptatem commodi laboriosam aut ea et blanditiis. Ab facere sit sint facere. Ea quas minus atque qui.<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"datacriacao"</span>: <span class="pl-s"><span class="pl-pds">"</span>1972-06-29T09:20:39.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"dataupdate"</span>: <span class="pl-s"><span class="pl-pds">"</span>1988-08-26T09:36:51.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"categoria"</span>: <span class="pl-s"><span class="pl-pds">"</span>nam<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"mensalidade"</span>: <span class="pl-c1">8457.11</span>,
            <span class="pl-ent">"status"</span>: <span class="pl-s"><span class="pl-pds">"</span>Indisponível<span class="pl-pds">"</span></span>
        }
    ],
    <span class="pl-ent">"informacao"</span>: <span class="pl-s"><span class="pl-pds">"</span>Essa API não está em produção, é apenas de homologação e testes<span class="pl-pds">"</span></span>
}</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 2,
            &quot;nomedocurso&quot;: &quot;Teresa Lebsack&quot;,
            &quot;qntmax&quot;: 2,
            &quot;descricao&quot;: &quot;Fugit veniam totam occaecati et non. Atque vero voluptates quam blanditiis amet maxime dolore. Voluptatem est ut iusto qui quibusdam asperiores.&quot;,
            &quot;datacriacao&quot;: &quot;1989-01-17T20:34:57.000000Z&quot;,
            &quot;dataupdate&quot;: &quot;2000-12-07T01:35:31.000000Z&quot;,
            &quot;categoria&quot;: &quot;atque&quot;,
            &quot;mensalidade&quot;: 917.86,
            &quot;status&quot;: &quot;Indisponível&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;nomedocurso&quot;: &quot;Merritt Rosenbaum V&quot;,
            &quot;qntmax&quot;: 2,
            &quot;descricao&quot;: &quot;Qui nemo quia laborum et ut placeat. Quasi voluptas officia doloribus adipisci omnis laudantium occaecati rerum. Voluptas velit aut nihil vitae commodi odio.&quot;,
            &quot;datacriacao&quot;: &quot;1972-05-03T18:17:43.000000Z&quot;,
            &quot;dataupdate&quot;: &quot;1992-02-11T04:54:22.000000Z&quot;,
            &quot;categoria&quot;: &quot;voluptas&quot;,
            &quot;mensalidade&quot;: 5457.61,
            &quot;status&quot;: &quot;Indisponível&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;nomedocurso&quot;: &quot;Mr. Ryan Ryan III&quot;,
            &quot;qntmax&quot;: 4,
            &quot;descricao&quot;: &quot;Et aut non repudiandae et. Consequuntur eos qui molestiae est sit ut et.&quot;,
            &quot;datacriacao&quot;: &quot;2009-11-01T16:20:24.000000Z&quot;,
            &quot;dataupdate&quot;: &quot;1988-08-11T18:44:07.000000Z&quot;,
            &quot;categoria&quot;: &quot;vitae&quot;,
            &quot;mensalidade&quot;: 4189.54,
            &quot;status&quot;: &quot;Indisponível&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;nomedocurso&quot;: &quot;Prof. Ernesto Reinger DDS&quot;,
            &quot;qntmax&quot;: 1,
            &quot;descricao&quot;: &quot;Corporis similique aut dolor et ut. Voluptatem commodi laboriosam aut ea et blanditiis. Ab facere sit sint facere. Ea quas minus atque qui.&quot;,
            &quot;datacriacao&quot;: &quot;1972-06-29T09:20:39.000000Z&quot;,
            &quot;dataupdate&quot;: &quot;1988-08-26T09:36:51.000000Z&quot;,
            &quot;categoria&quot;: &quot;nam&quot;,
            &quot;mensalidade&quot;: 8457.11,
            &quot;status&quot;: &quot;Indisponível&quot;
        }
    ],
    &quot;informacao&quot;: &quot;Essa API não está em produção, é apenas de homologação e testes&quot;
}" tabindex="0" role="button" style="display: inherit;">
      <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-copy js-clipboard-copy-icon m-2">
    <path fill-rule="evenodd" d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path><path fill-rule="evenodd" d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path>
</svg>
      <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-check js-clipboard-check-icon color-fg-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container">

    @include('layouts.alerts')
    <div class="row ">
        <div class="col-md-12">
            
        </div>
    </div>
    @endsection