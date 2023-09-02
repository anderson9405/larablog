<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $tag = new Tag;
    $tag->name="Tecnología";
    $tag->description="Artículos relacionados con avances tecnológicos, gadgets, software y tendencias en la industria tecnológica.";
    $tag->save();

    $tag = new Tag;
    $tag->name="Viajes";
    $tag->description="Entradas que cubren destinos turísticos, consejos de viaje, experiencias de viaje y aventuras en diferentes lugares del mundo.";
    $tag->save();

    $tag = new Tag;
    $tag->name="Salud y Bienestar";
    $tag->description="Contenido centrado en la salud física y mental, nutrición, ejercicios, consejos de bienestar y autocuidado.";
    $tag->save();

    $tag = new Tag;
    $tag->name="Negocios";
    $tag->description="Artículos sobre emprendimiento, gestión empresarial, estrategias de marketing, finanzas y desarrollo profesional.";
    $tag->save();

    $tag = new Tag;
    $tag->name="Ciencia";
    $tag->description="Contenido sobre avances científicos, descubrimientos, investigaciones y noticias relacionadas con la ciencia.";
    $tag->save();

    $tag = new Tag;
    $tag->name="Deporte";
    $tag->description="Contenido relacionado con eventos deportivos, equipos, atletas, noticias deportivas y consejos de entrenamiento.";
    $tag->save();


    }

}
