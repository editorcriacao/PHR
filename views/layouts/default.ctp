<?php echo $this->Html->doctype()?>
<html>
    <head>
        <title>PHR</title>
        <?php echo $this->Html->charset()?>
        <?php echo $this->Html->css(array('reset', 'estrutura', 'tipografia'))?>
        <?php echo $this->Html->script(array('jquery'))?>
    </head>
    <body>
        <div id="bg-header"></div>
        <div id="todo">

            <ul id="header">
                <li class="logo"><?php echo $this->Html->image('logo.png')?></li>
                <li class="menu">
                    <ul id="menu-header">
                        <li class="azul"><a href="">EMPRESA</a></li>
                        <li class="rosa"><a href="">PORTFÓLIO</a></li>
                        <li class="amarelo"><a href="">SERVIÇOS</a></li>
                        <li class="preto"><a href="">CONTATO</a></li>
                    </ul>
                </li>
                <li class="header-img"><?php echo $this->Html->image('bg-header-2.png')?></li>
            </ul>


        </div>
        <div id="bg-footer"></div>
    </body>
</html>