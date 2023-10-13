<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $document;
    public $type;

    /**
     * @return mixed
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param mixed $document
     * @return self
     */
    public function setDocument($document): self
    {
        $this->document = $document;
        $this->setType();
        return $this;
    }

    private function setType(): void
    {
        $this->type = 'CPF';
        if (strlen($this->document) >= 15) {
            $this->type = 'CNPJ';
        }
    }
}
