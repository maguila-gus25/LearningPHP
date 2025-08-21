<?php

class Filme {
        private string $nome = 'Nome padrão';
        private int $anoLancamento = 2024;
        private string $genero = 'ação';
        private array $notas = [];

        //Getter
        public function anoLancamento(): int {
            return $this->anoLancamento;
        }
        //Setter
        public function defineAnoLancamento(int $anoLancamento) {
            $this->anoLancamento = $anoLancamento;
        }
        //Getter
        public function nome(): string {
            return $this->nome;
        }
        //Setter
        public function defineNome(string $nome) {
            $this->nome = $nome;
        }
        //Getter
        public function genero(): string {
            return $this->genero;
        }
        //Setter
        public function defineGenero(string $genero) {
            return $this->genero = $genero;
        }

        public function avalia(float $nota) : void {
            $this->notas[] = $nota;
        }

        public function media(): float {
            $somaNotas = array_sum($this->notas);
            $quantidadeDeNotas = count($this->notas);

            return $somaNotas / $quantidadeDeNotas;
        }
    }   