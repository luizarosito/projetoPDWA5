<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<data>
@foreach($registros as $item)
    <item>
        <data_saida>{{ $item->data_saida }}</data_saida>
        <data_retorno>{{ $item->data_retorno }}</data_retorno>
        <preço>{{ $item->preço }}</preço>
        <descrição>{{ $item->descrição }}</descrição>
        <status>{{ $item->status == 0 ? "inativado" : "ativo" }}</status>
    </item>
@endforeach
</data>
