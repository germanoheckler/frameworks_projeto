<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Suponhamos que você deseja adicionar um post ao primeiro usuário
        $user = Usuario::first();

        Post::create([
            'usuario_id' => $user->id,
            'titulo' => 'Post de Exemplo',
            'conteudo' => 'Este é o corpo do post de exemplo.',
        ]);
    }
}
