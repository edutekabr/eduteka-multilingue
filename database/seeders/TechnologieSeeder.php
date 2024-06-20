<?php

namespace Database\Seeders;

use App\Models\Technologie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('technologies')->insert([
            [
                'name' => 'React JS',
                'description' => 'O React é uma biblioteca front-end JavaScript de código aberto com foco em criar interfaces de usuário em páginas web.',
                'num_classes' => 1,
                'type' => Technologie::FRONTEND
            ],
            [
                'name' => 'Laravel',
                'description' => 'Laravel é um framework PHP livre e open-source criado por Taylor B. Otwell para o desenvolvimento de sistemas web.',
                'num_classes' => 4,
                'type' => Technologie::BACKEND
            ],
            [
                'name' => 'PHP',
                'description' => 'PHP é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor.',
                'num_classes' => 2,
                'type' => Technologie::BACKEND
            ],
            [
                'name' => 'CSS',
                'description' => 'Cascading Style Sheets é um mecanismo para adicionar estilos a uma página web.',
                'num_classes' => 0,
                'type' => Technologie::FRONTEND
            ],
            [
                'name' => 'JavaScript',
                'description' => 'JavaScript é uma linguagem de programação interpretada estruturada, de script em alto nível com tipagem dinâmica fraca e multiparadigma.',
                'num_classes' => 3,
                'type' => Technologie::FRONTEND
            ]
        ]);
    }
}
