<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologieTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('technologie_translations')->insert([
            [
                'locale' => 'pt_BR',
                'description' => 'O React é uma biblioteca front-end JavaScript de código aberto com foco em criar interfaces de usuário em páginas web.',
                'technologie_id' => 1
            ],
            [
                'locale' => 'en',
                'description' => 'React is an open-source JavaScript front-end library focused on creating user interfaces on web pages.',
                'technologie_id' => 1
            ],
            [
                'locale' => 'en',
                'description' => 'Laravel is a free and open-source PHP framework created by Taylor B. Otwell for developing web systems.',
                'technologie_id' => 2
            ],
            [
                'locale' => 'pt_BR',
                'description' => 'Laravel é um framework PHP livre e open-source criado por Taylor B. Otwell para o desenvolvimento de sistemas web.',
                'technologie_id' => 2
            ],
            [
                'locale' => 'en',
                'description' => 'PHP is a free interpreted language, originally used only for the development of applications present and active on the server side.',
                'technologie_id' => 3
            ],
            [
                'locale' => 'pt_BR',
                'description' => 'PHP é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor.',
                'technologie_id' => 3
            ],
            [
                'locale' => 'en',
                'description' => 'Cascading Style Sheets is a mechanism for adding styles to a web page.',
                'technologie_id' => 4
            ],
            [
                'locale' => 'pt_BR',
                'description' => 'Cascading Style Sheets é um mecanismo para adicionar estilos a uma página web.',
                'technologie_id' => 4
            ],
            [
                'locale' => 'en',
                'description' => 'JavaScript is a structured, high-level scripting, weakly dynamically typed, multi-paradigm interpreted programming language.',
                'technologie_id' => 5
            ],
            [
                'locale' => 'pt_BR',
                'description' => 'JavaScript é uma linguagem de programação interpretada estruturada, de script em alto nível com tipagem dinâmica fraca e multiparadigma.',
                'technologie_id' => 5
            ],
        ]);
    }
}
