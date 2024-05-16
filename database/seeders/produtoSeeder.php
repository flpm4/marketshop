<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produtoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert(
            [
                [
                    'name'=> 'Camiseta Vermelha',
                    'descricao'=> 'Camiseta para ser usada como camiseta, e a cor dela é vermelha',
                    'valor'=> 120,
                    'foto' => 'https://rsv-ink-images-production.s3.sa-east-1.amazonaws.com/images/product_art/final_image/b0a5cbe97e9d4aaa75a02575b8309224.webp',
                    'user_id' => 1,

                ],

                [
                    'name'=> 'Ferrari Vermelha',
                    'descricao'=> 'Carro para ostentar na rua de cor vermelha',
                    'valor'=> 3.300000,
                    'foto' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQtt8MXMC1FzkHVsHcmAF8UBjYuXS9XiujppJdtoI7DxZjWCr0f3oYN62bxh9xdcdKNssyckGZ-tGqIJ34SIcilQxp5nH9j9ZMEASEMI6lXka3Ro5CJvIZH&usqp=CAE',
                    'user_id' => 1,

                ],

                [
                    'name'=> 'Perfume Bolsonaro',
                    'descricao'=> 'fragrância amadeirada e cítrica, homenagem à liderança forte do Brasil. Explosão de frescor com laranja, limão e tangerina',
                    'valor'=> 200,
                    'foto' => 'https://lojadodivo.com/cdn/shop/files/IMG-1887_1200x1200.png?v=1715802699',
                    'user_id' => 1,

                ],

                [
                    'name'=> 'Ursinho Pooh',
                    'descricao'=> 'é um urso fictício criado pelo escritor inglês Alan Alexander Milne e os direitos sobre as suas histórias pertencem à Disney.',
                    'valor'=> 110,
                    'foto' => 'https://veja.abril.com.br/wp-content/uploads/2023/08/Design-sem-nome-41.jpg?crop=1&resize=1212,909',
                    'user_id' => 1,

                ],
                

            ]

            );
    }
}
