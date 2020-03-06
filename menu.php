<?php 

function listarConteudo($titulo,$lista){
    echo '<ul>';
    foreach($lista as $item => $value): ?>
        <li>
            <a href="exercicio.php?dir=<?=$titulo?>&file=<?=strtolower($item)?>"><?=$value?> X</a>
        </li>
    <?php endforeach;
    echo '</ul>';
}

?>

<nav class="modulos">
    <div class="modulo green">
        <h3>Módulo 01 - Básico</h3>
        <?php 
        $modulo1 = array(
            'hello'=>'Hello World',
            'html'=>'Integração HTML',
            'css'=>'Integração CSS',
            'desafio'=>'Desafio'
        );
        listarConteudo('basico',$modulo1);
        ?>

    </div>
    <div class="modulo integracao">
        <h3>Módulo 02 - Tipos</h3>
        <?php
        $modulo2 = array(
            'int'=>'Integer',
            'float'=>'Float',
            'aritmeticas'=>'Operações Aritméticas',
            'string'=>'String',
            'boolean'=>'Boolean',
            'conversao'=>'Conversões'
        );
        listarConteudo('tipos',$modulo2);
        ?>
    </div>

    <div class="modulo basicos">
        <h3>Módulo 03 - Variáveis</h3>
        <?php
        $modulo3 = array(
            'basico'=>'Básico',
            'interpolacao'=>'Interpolação',
            'varvariaveis'=>'Varia.Variaveis',
            'constantes'=>'Constantes'
        );
        listarConteudo('variaveis',$modulo3);
        ?>
    </div>
    
    <div class="modulo vars">
        <h3>Módulo 07 - Array</h3>
        <?php
        $modulo7 = array(
            'basico'=>'Básico',
            'constantes'=>'Arrays Constantes',
            'get'=>'$_GET',
            'post'=>'$_POST'
        );
        listarConteudo('array',$modulo7);
        ?>
    </div>
    
    <div class="modulo estrutControl">
        <h3>Módulo 08 - Estruturas de Controle</h3>
        <?php
        $modulo8 = array(
            'for'=>'For',
            'foreach'=>'Foreach'
        );
        listarConteudo('estrutura_controle',$modulo7);
        ?>
    </div>
    
    <div class="modulo funcoes">
        <h3>Módulo 09 - Funções</h3>
        <?php
        $modulo9 = array(
            'escopo'=>'Escopo',
            'arg_variavel'=>'Argumentos Variáveis',
            'arg_padrao'=>'Argumento Padrão',
            'map_filter'=>'Mas e Filter'
        );
        listarConteudo('funcao',$modulo9);
        ?>
    </div>
    
    <div class="modulo poo">
        <h3>Módulo 10 - Poo</h3>
        <?php
        $modulo10 = array(
            'membros'=>'Testes',
            'classe'=>'Primeira Classe',
            'const_dest'=>'Construtor e Destrutor',
            'heranca'=>'Herança',
            'estatico'=>'Membros Estáticos',
            'interface'=>'Interface',
            'abstratic_class'=>'Classe Abstrata',
            'final'=>'Modificador Final',
            'traits'=>'Traits #01',
            'traits_2'=>'Traits #02',
            'magic_methods'=>'Métodos Mágicos',
            'polimorfismo'=>'Polimorfismo'
        );
        listarConteudo('poo',$modulo10);
        ?>
    </div>
    
    <div class="modulo includes">
        <h3>Módulo 11 - Includes</h3>
        <ul>
            <li>
                <a href="exercicio.php?dir=includes&file=include">Include</a>
            </li>
            <li>
                <a href="exercicio.php?dir=includes&file=include_funcao">Include Função</a>
            </li>
            <li>
                <a href="exercicio.php?dir=includes&file=include_require">Include Vs Require</a>
            </li>
            <li>
                <a href="exercicio.php?dir=includes&file=require_return">Require & Return</a>
            </li>
        </ul>
    </div>

    <div class="modulo namespace">
        <h3>Módulo 12 - Namespace</h3>
        <ul>
            <li>
                <a href="exercicio.php?dir=namespace&file=basico">Básico</a>
            </li>
        </ul>
    </div>

    <div class="modulo tratErro">
        <h3>Módulo 13 - Tratamento de Erro</h3>
        <ul>
            <li>
                <a href="exercicio.php?dir=tratamento_erro&file=try_catch">Try/Catch</a>
            </li>
            <li>
                <a href="exercicio.php?dir=tratamento_erro&file=erros_personalizados">Erros Personalizados</a>
            </li>
            <li>
                <a href="exercicio.php?dir=tratamento_erro&file=gerenciador_erro">Error Handler</a>
            </li>
        </ul>
    </div>

    <div class="modulo sessaoCookie">
        <h3>Módulo 14 - Sessão & Cookie</h3>
        <ul>
            <li>
                <a href="exercicio.php?dir=sessao&file=basico_sessao">Básico Sessão</a>
            </li>
            <li>
                <a href="exercicio.php?dir=sessao&file=gerenciando_sessao">Gerenciando Sessão</a>
            </li>
        </ul>
    </div>

    <div class="modulo api">
        <h3>Módulo 15 - API</h3>
        <ul>
            <li>
                <a href="exercicio.php?dir=api&file=datas_01">Datas #01</a>
            </li>
            <li>
                <a href="exercicio.php?dir=api&file=datas_02">Datas #02</a>
            </li>
            <li>
                <a href="exercicio.php?dir=api&file=escrever_arquivo">Escrevendo Arquivo</a>
            </li>
            <li>
                <a href="exercicio.php?dir=api&file=ler_arquivo">Lendo Arquivo</a>
            </li>
            <li>
                <a href="exercicio.php?dir=api&file=upload">Upload</a>
            </li>
            <li>
                <a href="exercicio.php?dir=api&file=download">Download</a>
            </li>
            <li>
                <a href="exercicio.php?dir=api&file=imagens">Imagens</a>
            </li>
        </ul>
    </div>

    <div class="modulo formulario">
        <h3>Módulo 16 - Formulário</h3>
        <ul>
            <!-- <li>
                <a href="exercicio.php?dir=/&file=teste">TESTE</a>
            </li> -->
            <li>
                <a href="exercicio.php?dir=formulario&file=formulario">Formulário</a>
            </li>
            <?php $lista = array('Alfa','Omega','Beta');
            
            foreach($lista as $item => $value): ?>
                
                <li>
                    <a href="exercicio.php?dir=api&file=<?=strtolower($value)?>"><?= $value ?></a>
                </li>
                
            <?php endforeach; ?>
            ?>
        </ul>
    </div>

</nav>