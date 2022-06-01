<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;


class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::create(['image' => 'originalimage1.jpg', 'title' => 'After Pablo Picasso Acrobats Family, hand-painted transposition into glass', 'thumbnail' => 'image1.png'],);
        Image::create(['image' => 'originalimage2.jpg', 'title' => 'Church scene', 'thumbnail' => 'image2.png'],);
        Image::create(['image' => 'originalimage3.jpg', 'title' => 'After Edgar Degas The Blue Dancers, hand-painted transposition into glass', 'thumbnail' => 'image3.png'],);
        Image::create(['image' => 'originalimage4.jpg', 'title' => 'Abstract art landscape', 'thumbnail' => 'image4.png'],);
        Image::create(['image' => 'originalimage5.jpg', 'title' => 'Abstract art boat', 'thumbnail' => 'image5.png'],);
        Image::create(['image' => 'originalimage6.jpg', 'title' => 'Abstract art flowers', 'thumbnail' => 'image6.png'],);
        Image::create(['image' => 'originalimage7.jpg', 'title' => 'Abstract art green flowers', 'thumbnail' => 'image7.png'],);
        Image::create(['image' => 'originalimage8.jpg', 'title' => 'Abstract art wavy shapes', 'thumbnail' => 'image8.png'],);
        Image::create(['image' => 'originalimage9.jpg', 'title' => 'Abstract art water shapes', 'thumbnail' => 'image9.png'],);
        Image::create(['image' => 'originalimage10.jpg', 'title' => 'Abstract art quadratic and circular shapes', 'thumbnail' => 'image10.png'],);
        Image::create(['image' => 'originalimage11.jpg', 'title' => 'Trees on a field landscape', 'thumbnail' => 'image11.png'],);
        Image::create(['image' => 'originalimage12.jpg', 'title' => 'Two colourful parrots', 'thumbnail' => 'image12.png'],);
        Image::create(['image' => 'originalimage13.jpg', 'title' => 'Abstract art quadratic shapes', 'thumbnail' => 'image13.png'],);
        Image::create(['image' => 'originalimage14.jpg', 'title' => 'Abstract art wavy shapes', 'thumbnail' => 'image14.png'],);


    }
}
