<?php

class Filme {
    private array $notas;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero
    ) {
        $this->notas = [];
    }

        //Getter
        public function anoLancamento(): int 
        {
            return $this->anoLancamento;
        }

        //Getter
        public function nome(): string 
        {
            return $this->nome;
        }

        //Getter
        public function genero(): string 
        {
            return $this->genero;
        }


        public function avalia(float $nota) : void 
        {
            $this->notas[] = $nota;
        }

        public function media(): float 
        {
            $somaNotas = array_sum($this->notas);
            $quantidadeDeNotas = count($this->notas);

            return $somaNotas / $quantidadeDeNotas;
        }

    }   