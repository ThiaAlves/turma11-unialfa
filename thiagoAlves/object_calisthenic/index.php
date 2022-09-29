<?php

class Cliente
{
    private int $codigoPromocao;

    public function buscaCodigoPromocao(string $nomePromocao)
    {
        !$this->codigoPromocao ? throw new Exception('Cliente sem código de promoção') : null;

        $this->codigoPromocaoExpirou() ? throw new Exception('Promoção Expirada') : null;

        $this->nomePromocao != $nomePromocao ? throw new Exception('Promoção não existe mais') : null;

        return $this->codigoPromocao;
    }

    public function codigoPromocaoExpirou()
    {
        //codigo...
    }
}