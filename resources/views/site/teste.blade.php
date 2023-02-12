{{ $p3}}
{{"teste"}}
<?= "teste "?>
@php
    //TESTE PURO PHP
      echo "teste";
@endphp

<?php
echo "teste";
?>


@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Fornecedores Localizados ate 10 </h3>
@elseif(count($fornecedores)>10)
    <h3>Existem mais de 10 cadastrados</h3>
@else
    <h3>
        Fonecedores nao localizados
    </h3>
@endif




