<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    // 1. Nome da tabela (opcional, caso a tabela não siga a convenção pluralizada de nomes)
    protected $table = 'medicos';

    // 2. Atribuição em massa - Defina quais colunas podem ser atribuídas em massa
    protected $fillable = [
        'nome',        // Nome do médico
        'especialidade', // Especialidade médica
        'crm',         // Registro do médico no conselho
        'telefone',    // Telefone do médico
        'email',       // Email do médico
    ];

    // 3. Propriedades ocultas (opcional) - Colunas que você quer esconder ao serializar o modelo
    protected $hidden = [
        'password',     // Exemplo de campo sensível
        'remember_token', // Campo do Laravel para autenticação
    ];

    // 4. Casts - Converte os dados para os tipos especificados automaticamente
    protected $casts = [
        'created_at' => 'datetime', // Converte 'created_at' em um objeto DateTime
        'updated_at' => 'datetime', // Converte 'updated_at' em um objeto DateTime
    ];

    // 5. Relacionamentos - Defina relacionamentos com outros modelos, por exemplo, um médico pode ter muitos pacientes
    public function pacientes()
    {
        return $this->hasMany(Paciente::class); // Relacionamento um-para-muitos
    }

    // 6. Escopos Locais - Defina filtros para reutilizar consultas comuns
    public function scopeAtivos($query)
    {
        return $query->where('ativo', 1); // Filtra médicos ativos
    }

    // 7. Métodos personalizados - Funções que podem ser usadas para lógica específica
    public function nomeCompleto()
    {
        return $this->nome . ' - ' . $this->especialidade;
    }
}
