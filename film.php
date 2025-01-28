<?php 
declare(strict_types = 1);

class Film {

    private $title;
    private $length;
    private $director;

    public function __construct(string $title, int $length, string $director) {
        $this->title = $title;
        $this->length = $length;
        $this->director = $director;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getLength(): int {
        return $this->length;
    }

    public function getDirector(): string {
        return $this->director;
    }

    public function __toString() : string {
        return $this->title . ', ' . $this->length . ' minutos, ' . $this->director . '.' . PHP_EOL;
    }

}

?>