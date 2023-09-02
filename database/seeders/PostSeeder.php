<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $post = new Post;
    $post->title="Las Tendencias Tecnológicas que Cambiarán el Mundo en 2023";
    $post->summary="Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptatem beatae deleniti natus fugit saepe. Aperiam temporibus suscipit accusamus, sequi explicabo modi quae reiciendis quidem doloremque rem, sed minima voluptas!";
    $post->content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptatem beatae deleniti natus fugit saepe. Aperiam temporibus suscipit accusamus, sequi explicabo modi quae reiciendis quidem doloremque rem, sed minima voluptas!";
    $post->user_id="1";
    $post->tag_id="1";
    $post->save();

    $post = new Post;
    $post->title="Descubriendo la Magia de Kioto: Un Viaje a Japón";
    $post->summary="Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptatem beatae deleniti natus fugit saepe. Aperiam temporibus suscipit accusamus, sequi explicabo modi quae reiciendis quidem doloremque rem, sed minima voluptas!";
    $post->content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptatem beatae deleniti natus fugit saepe. Aperiam temporibus suscipit accusamus, sequi explicabo modi quae reiciendis quidem doloremque rem, sed minima voluptas!";
    $post->user_id="2";
    $post->tag_id="2";
    $post->save();

    $post = new Post;
    $post->title="10 Consejos para una Rutina Matutina Saludable";
    $post->summary="Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptatem beatae deleniti natus fugit saepe. Aperiam temporibus suscipit accusamus, sequi explicabo modi quae reiciendis quidem doloremque rem, sed minima voluptas!";
    $post->content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptatem beatae deleniti natus fugit saepe. Aperiam temporibus suscipit accusamus, sequi explicabo modi quae reiciendis quidem doloremque rem, sed minima voluptas!";
    $post->user_id="2";
    $post->tag_id="3";
    $post->save();


    $post = new Post;
    $post->title="Cómo Emprender con Éxito en la Era Digital";
    $post->summary="Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptatem beatae deleniti natus fugit saepe. Aperiam temporibus suscipit accusamus, sequi explicabo modi quae reiciendis quidem doloremque rem, sed minima voluptas!";
    $post->content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptatem beatae deleniti natus fugit saepe. Aperiam temporibus suscipit accusamus, sequi explicabo modi quae reiciendis quidem doloremque rem, sed minima voluptas!";
    $post->user_id="3";
    $post->tag_id="4";
    $post->save();

    $post = new Post;
    $post->title="El Futuro de la Exploración Espacial: Marte y Más Allá";
    $post->summary="Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptatem beatae deleniti natus fugit saepe. Aperiam temporibus suscipit accusamus, sequi explicabo modi quae reiciendis quidem doloremque rem, sed minima voluptas!";
    $post->content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptatem beatae deleniti natus fugit saepe. Aperiam temporibus suscipit accusamus, sequi explicabo modi quae reiciendis quidem doloremque rem, sed minima voluptas!";
    $post->user_id="4";
    $post->tag_id="5";
    $post->save();

    }
}
