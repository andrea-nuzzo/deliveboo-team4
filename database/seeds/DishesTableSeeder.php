<?php

use App\Dish;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dishes = [

            // RISTORANTE PORCA VACCA

            // [
            //     'name' => 'Pinsa bufalotta',
            //     'ingredients' => 'Basilico fresco, mozzarella bufala, polpa pomodoro, pomodori confit',
            //     'description' => '',
            //     'price' => 6.90,
            //     'visible' => 1,
            //     'image' => 'uploads/pinsa-bufalotta.jpeg',
            //     // ognuno deve inserire lo user id del proprio Porca Vacca
            //     'user_id' => 1,
            //     'category_id' => null,
            // ],
            // [
            //     'name' => 'Angus Anto spacca',
            //     'ingredients' => 'Pane, anelli di cipolla, friarielli, hamburger di angus, mozzarella intera, anelli di peperoncino, pomodoro',
            //     'description' => '',
            //     'price' => 9.50,
            //     'visible' => 1,
            //     'image' => 'uploads/angus-anto-spacca.jpeg',
            //     // ognuno deve inserire lo user id del proprio Porca Vacca
            //     'user_id' => 1,
            //     'category_id' => null,
            // ],
            // [
            //     'name' => 'Crispy tacos',
            //     'ingredients' => 'Tortillas, insalata, pepite di pollo, pomodoro, salsa miky',
            //     'description' => '',
            //     'price' => 6.90,
            //     'visible' => 1,
            //     'image' => 'uploads/crispy-tacos.jpeg',
            //     // ognuno deve inserire lo user id del proprio Porca Vacca
            //     'user_id' => 1,
            //     'category_id' => null,
            // ],
            // [
            //     'name' => 'Chili hot dog',
            //     'ingredients' => 'Pane, BBQ, fagioli al chili, würstel gigante, bacon, tabasco',
            //     'description' => '',
            //     'price' => 6.50,
            //     'visible' => 1,
            //     'image' => 'uploads/chili-hot-dog.jpeg',
            //     // ognuno deve inserire lo user id del proprio Porca Vacca
            //     'user_id' => 1,
            //     'category_id' => null,
            // ],
            // [
            //     'name' => 'Gallotto',
            //     'ingredients' => 'Galletto intero, spezie piccanti, olio',
            //     'description' => '',
            //     'price' => 9.50,
            //     'visible' => 1,
            //     'image' => 'uploads/gallotto.jpeg',
            //     // ognuno deve inserire lo user id del proprio Porca Vacca
            //     'user_id' => 1,
            //     'category_id' => null,
            // ],
            [
                'name' => 'Profondo blu salad',
                'ingredients' => 'Tortilla, cipolla rossa, filetto di Alaska, mix di insalate, pomodoro, salsa tartara',
                'description' => null,
                'price' => 7.90,
                'visible' => 1,
                'image' => 'uploads/profondo-blu-salad.jpeg',
                // ognuno deve inserire lo user id del proprio Porca Vacca
                'user_id' => 1,
                'category_id' => null,
            ],


            // RISTORANTE MONDO KEBAB

            [
                'name' => 'Panino kebab',
                'ingredients' => 'Carne kebab, pomodori, cipolla, insalata, salsa piccante, salsa yogurt',
                'description' => null,
                'price' => 5.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Mondo Kebab
                'user_id' => 5,
                'category_id' => null,
            ],

            [
                'name' => 'Piadina kebab',
                'ingredients' => 'Carne kebab, pomodori, cipolla, insalata, salsa piccante, salsa yogurt, cavolo',
                'description' => null,
                'price' => 6.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Mondo Kebab
                'user_id' => 5,
                'category_id' => null,
            ],

            [
                'name' => 'Hot dog',
                'ingredients' => 'Carne di pollo e tacchino, salsa di pomodoro',
                'description' => null,
                'price' => 3.60,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Mondo Kebab
                'user_id' => 5,
                'category_id' => null,
            ],

            [
                'name' => 'Pizza kebab',
                'ingredients' => 'Pomodoro, carne kebab, mozzarella',
                'description' => null,
                'price' => 9.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Mondo Kebab
                'user_id' => 5,
                'category_id' => null,
            ],

            [
                'name' => 'Piadina con nutella',
                'ingredients' => 'Pane, nutella',
                'description' => null,
                'price' => 3.80,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Mondo Kebab
                'user_id' => 5,
                'category_id' => null,
            ],

            [
                'name' => 'Anelli di cipolla',
                'ingredients' => 'Farina, scipolla',
                'description' => null,
                'price' => 3.80,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Mondo Kebab
                'user_id' => 5,
                'category_id' => null,
            ],

            // RISTORANTE SAKURA FUSION

            [
                'name' => 'Involtini primavera',
                'ingredients' => 'Farina, verdure',
                'description' => null,
                'price' => 2.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Mondo Kebab
                'user_id' => 6,
                'category_id' => null,
            ],

            [
                'name' => 'Yaki udon',
                'ingredients' => 'Spaghetti di udon con verdure',
                'description' => null,
                'price' => 7.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Mondo Kebab
                'user_id' => 6,
                'category_id' => null,
            ],

            [
                'name' => 'Pollo alle mandorle',
                'ingredients' => 'pollo, mandorle',
                'description' => null,
                'price' => 5.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Mondo Kebab
                'user_id' => 6,
                'category_id' => null,
            ],

            [
                'name' => 'Spiedini di gamberi',
                'ingredients' => 'gamberi',
                'description' => null,
                'price' => 6.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Mondo Kebab
                'user_id' => 6,
                'category_id' => null,
            ],

            [
                'name' => 'Tempura mista',
                'ingredients' => 'gamberi',
                'description' => null,
                'price' => 9.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Mondo Kebab
                'user_id' => 6,
                'category_id' => null,
            ],

            [
                'name' => 'Spaghetti di riso con verdure',
                'ingredients' => 'spaghetti, verdure',
                'description' => null,
                'price' => 5.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Mondo Kebab
                'user_id' => 6,
                'category_id' => null,
            ],

            // RISTORANTE DOLCE MAZZINI

            [
                'name' => 'Cornetto al pistacchio',
                'ingredients' => 'sfoglia, pistacchio',
                'description' => null,
                'price' => 1.60,
                'visible' => 1,
                'image' => 'uploads/cornetto-pistacchio.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 7,
                'category_id' => null,
            ],

            [
                'name' => 'Bombolone con panna montata',
                'ingredients' => 'farina, uova, panna',
                'description' => null,
                'price' => 2.20,
                'visible' => 1,
                'image' => 'uploads/bombolone-panna.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 7,
                'category_id' => null,
            ],

            [
                'name' => 'Waffle con nutella',
                'ingredients' => 'farina, uova, nutella',
                'description' => null,
                'price' => 2.50,
                'visible' => 1,
                'image' => 'uploads/waffle-nutella.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 7,
                'category_id' => null,
            ],

            [
                'name' => 'Kinder waffle bounty',
                'ingredients' => 'farina, uova, bounty',
                'description' => null,
                'price' => 3.00,
                'visible' => 1,
                'image' => 'uploads/kinder-waffle-bounty.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 7,
                'category_id' => null,
            ],

            [
                'name' => 'Gelato bombolone',
                'ingredients' => 'farina, uova, gelato',
                'description' => null,
                'price' => 4.00,
                'visible' => 1,
                'image' => 'uploads/gelato-bombolone.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 7,
                'category_id' => null,
            ],

            [
                'name' => 'Cornetto kinder bueno',
                'ingredients' => 'sfoglia, cioccolato',
                'description' => null,
                'price' => 1.80,
                'visible' => 1,
                'image' => 'uploads/cornetto-kinder-bueno.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 7,
                'category_id' => null,
            ],

            // RISTORANTE MIRICE POKE - POKERIA

            [
                'name' => 'Pokè salmone teriyaki',
                'ingredients' => 'Riso bianco, salmone crudo, avocado, insalata, salsa pokè e sesamo',
                'description' => null,
                'price' => 10.00,
                'visible' => 1,
                'image' => 'uploads/salmone-teriyaki.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 8,
                'category_id' => null,
            ],

            [
                'name' => 'Pokè mix',
                'ingredients' => 'Riso bianco, salmone, pesce bianco, tonno, avocado, uova di salmone, salsa pokè e sesamo',
                'description' => null,
                'price' => 14.00,
                'visible' => 1,
                'image' => 'uploads/mix.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 8,
                'category_id' => null,
            ],

            [
                'name' => 'Pokè tonno',
                'ingredients' => 'Riso bianco, avocado, insalata rossa, salsa pokè e sesamo',
                'description' => null,
                'price' => 13.00,
                'visible' => 1,
                'image' => 'uploads/tonno.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 8,
                'category_id' => null,
            ],

            [
                'name' => 'Pokè fish mix',
                'ingredients' => 'Riso bianco, salmone, polipo, gamberi cotti, edemame, gomma wakame, salsa pokè e sesamo',
                'description' => null,
                'price' => 13.00,
                'visible' => 1,
                'image' => 'uploads/fish-mix.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 8,
                'category_id' => null,
            ],

            [
                'name' => 'Pokè vege 1',
                'ingredients' => 'Riso bianco, edemame, avocado, olive, mais, tofu, salsa pokè e sesamo, vegetariano',
                'description' => null,
                'price' => 10.00,
                'visible' => 1,
                'image' => 'uploads/vege-uno.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 8,
                'category_id' => null,
            ],

            [
                'name' => 'Pokè vege 2',
                'ingredients' => 'Riso bianco, pomodorini, cetrioli, gomma wakame, edemame, carote e cavolo rosso, vegetariano',
                'description' => null,
                'price' => 10.00,
                'visible' => 1,
                'image' => 'uploads/vege-due.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 8,
                'category_id' => null,
            ],


            // RISTORANTE DOLCEAMARO

            [
                'name' => 'Tiramisù per 4 persone - senza glutine',
                'ingredients' => 'Mousse con pan di Spagna al cacao senza glutine, crema al mascarpone aromatizzata al caffè, latte e derivati, uova',
                'description' => 'Tenere fuori dal frigo per 1 ora circa prima di consumarlo. Va conservata in frigorifero a +4',
                'price' => 15.00,
                'visible' => 1,
                'image' => 'uploads/tiramisu.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 9,
                'category_id' => null,
            ],

            [
                'name' => 'Mousse cioccolato e crema 4 persone',
                'ingredients' => 'Mousse al cioccolato e crema su pan di spagna al cacao senza glutine, latte e derivati, uova e possibilità di frutta secca',
                'description' => 'Tenere fuori dal frigo per 1 ora circa prima di consumarlo. Va conservata in frigorifero a +4',
                'price' => 15.00,
                'visible' => 1,
                'image' => 'uploads/mousse.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 9,
                'category_id' => null,
            ],

            [
                'name' => 'Torta Sacher 6 persone',
                'ingredients' => 'Mousse al cioccolato fondente, pan di spagna, marmellata di albicocche, ganache al cioccolato, latte e derivati, uova, frutta in guscio, può contenere soia e derivati.',
                'description' => 'Tenere fuori dal frigo per 1 ora circa prima di consumarlo. Va conservata in frigorifero a +4',
                'price' => 20.00,
                'visible' => 1,
                'image' => 'uploads/sacher.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 9,
                'category_id' => null,
            ],

            [
                'name' => 'Torta cheesecake frutti di bosco per 4 persone',
                'ingredients' => 'Mousse di formaggio spalmabile, riduzione di frutti di bosco, burro, mandorle, nocciole,  latte e derivati, uova, frutta in guscio, può contenere soia e derivati.',
                'description' => 'Tenere fuori dal frigo per 1 ora circa prima di consumarlo. Va conservata in frigorifero a +4',
                'price' => 15.00,
                'visible' => 1,
                'image' => 'uploads/cheesecake.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 9,
                'category_id' => null,
            ],

            [
                'name' => 'Torta Rocher 4 persone',
                'ingredients' => 'Pan di Spagna al cacao senza glutine , croccantino nocciola, mousse rocher(mascarpone e crema di nocciole) glassa cioccolato al latte croccante. Allergeni - latte derivati,uova, frutta a guscio.',
                'description' => 'Tenere fuori dal frigo per 1 ora circa prima di consumarlo. Va conservata in frigorifero a +4',
                'price' => 15.00,
                'visible' => 1,
                'image' => 'uploads/rocher.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 9,
                'category_id' => null,
            ],

            [
                'name' => 'Goloso gianduia',
                'ingredients' => 'Gianduia, crumble al cacao, cioccolato',
                'description' => 'Tolto dal congelatore si consuma dopo 15 minuti',
                'price' => 3.00,
                'visible' => 1,
                'image' => 'uploads/gianduia.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 9,
                'category_id' => null,
            ],


            // RISTORANTE LA MAISON DEL TRAMEZZINO


            [
                'name' => 'Tramezzino boscaiolo',
                'ingredients' => 'Salsa funghi, prosciutto cotto, mozzarella, lattuga',
                'description' => null,
                'price' => 6.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 10,
                'category_id' => null,
            ],

            [
                'name' => 'Tramezzino Estroso',
                'ingredients' => 'Salsa formaggi, prosciutto cotto, pomodoro, lattuga',
                'description' => null,
                'price' => 6.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 10,
                'category_id' => null,
            ],

            [
                'name' => 'Focaccia Enea',
                'ingredients' => 'Salame toscano, cipolla, tabasco, fontina, salsa messicana',
                'description' => null,
                'price' => 6.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 10,
                'category_id' => null,
            ],

            [
                'name' => 'Focaccia Eva Henger',
                'ingredients' => 'Salame, pancetta, tacchino, cipolla',
                'description' => null,
                'price' => 6.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 10,
                'category_id' => null,
            ],

            [
                'name' => 'Toast messicano',
                'ingredients' => 'Salsa messicana, peperoni, wurstel, brie, insalata',
                'description' => null,
                'price' => 6.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 10,
                'category_id' => null,
            ],

            [
                'name' => 'Tiramisù artigianale',
                'ingredients' => 'Pan di Spagna, mascarpone, caffè, latte e derivati, uova',
                'description' => null,
                'price' => 5.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 10,
                'category_id' => null,
            ],

            // RISTORANTE OH MY CHICKEN FAST FOOD

            [
                'name' => 'Cheeseburger',
                'ingredients' => 'Panino con burger di manzo, formaggio, cipolla e insalata',
                'description' => null,
                'price' => 4.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 12,
                'category_id' => null,
            ],

            [
                'name' => 'Chicken royal',
                'ingredients' => 'Panino con filetto di pollo impanato, formaggio, frittella di patate e insalata',
                'description' => null,
                'price' => 6.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 12,
                'category_id' => null,
            ],

            [
                'name' => 'Filet o fish',
                'ingredients' => 'Panino con filetto di pesce impanato, formaggio e insalata',
                'description' => null,
                'price' => 5.20,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 12,
                'category_id' => null,
            ],

            [
                'name' => 'Insalata mista',
                'ingredients' => 'Insalata verde con mais, olive e pomodorini',
                'description' => null,
                'price' => 4.50,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 12,
                'category_id' => null,
            ],

            [
                'name' => 'Chicken mix',
                'ingredients' => '2 pezzi di pollo grandi e 4 alette',
                'description' => null,
                'price' => 5.50,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 12,
                'category_id' => null,
            ],

            [
                'name' => 'Onion rings - 6 pezzi',
                'ingredients' => 'Anelli di cipolla impanati',
                'description' => null,
                'price' => 4.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 12,
                'category_id' => null,
            ],


            // RISTORANTE ALIBABA - OTTIMO KEBAB

            [
                'name' => 'Chicken fillet burger',
                'ingredients' => 'Panino con filetto di pollo impanato e insalata',
                'description' => null,
                'price' => 3.90,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 13,
                'category_id' => null,
            ],

            [
                'name' => 'Burger fillet o fish',
                'ingredients' => 'Panino con filetto di pesce, formaggio e insalata',
                'description' => null,
                'price' => 3.90,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 13,
                'category_id' => null,
            ],

            [
                'name' => 'Chicken roll',
                'ingredients' => 'Piadina con pollo, pomodoro e insalata',
                'description' => null,
                'price' => 5.90,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 13,
                'category_id' => null,
            ],

            [
                'name' => 'Seekh wrap',
                'ingredients' => 'Piadina con insalata, pomodoro e 2 pezzi di seekh wrap',
                'description' => null,
                'price' => 5.90,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 13,
                'category_id' => null,
            ],

            [
                'name' => 'Alette hot spicy',
                'ingredients' => '6 alette impanate piccanti',
                'description' => null,
                'price' => 6.90,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 13,
                'category_id' => null,
            ],

            [
                'name' => 'Acqua naturale 50cl',
                'ingredients' => 'acqua',
                'description' => null,
                'price' => 1.00,
                'visible' => 1,
                'image' => null,
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 13,
                'category_id' => null,
            ],


            // RISTORANTE LA PIAZZETTA GELATERIA

            [
                'name' => 'Torta cremino',
                'ingredients' => 'Fiordilatte con tre strati di gianduia tipo Nutella',
                'description' => 'Semifreddo da mantenere in frizer -18°, mettere fuori dal frizer 5 minuti prima della consumazione',
                'price' => 14.00,
                'visible' => 1,
                'image' => 'uploads/cremino.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 14,
                'category_id' => null,
            ],

            [
                'name' => 'Profiteroles',
                'ingredients' => '6 BIGNE Profiteroles, ripieni di crema chantilly',
                'description' => 'Torta PASTICCERIA da mantenere in frigo +4 - prima di consumare mettere fuori dal frigo 30 minuti',
                'price' => 24.00,
                'visible' => 1,
                'image' => 'uploads/profiteroles.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 14,
                'category_id' => null,
            ],

            [
                'name' => 'Torta PIST/NOCC',
                'ingredients' => 'Semifreddo ai gusti pistacchio e nocciola con copertura di crema al pistacchio',
                'description' => 'Semifreddo da mantenere in frizez -18°, mettere fuori dal frizer 5 minuti prima della consumazione',
                'price' => 20.00,
                'visible' => 1,
                'image' => 'uploads/pistacchio.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 14,
                'category_id' => null,
            ],

            [
                'name' => 'Torta Ciocc/Nocc',
                'ingredients' => 'Semifreddo: cioccolato e nocciola copertura: crema Fondente',
                'description' => 'Semifreddo da mantenere in frizer -18°, mettere fuori dal frizer 5 minuti prima della consumazione',
                'price' => 20.00,
                'visible' => 1,
                'image' => 'uploads/nocciole.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 14,
                'category_id' => null,
            ],

            [
                'name' => 'Crepe',
                'ingredients' => 'Con ripieno a scelta',
                'description' => null,
                'price' => 4.50,
                'visible' => 1,
                'image' => 'uploads/crepe.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 14,
                'category_id' => null,
            ],

            [
                'name' => 'Waffles',
                'ingredients' => 'Con ripieno a scelta',
                'description' => null,
                'price' => 4.00,
                'visible' => 1,
                'image' => 'uploads/waffle.jpeg',
                // ognuno deve inserire lo user id del proprio Dolce Mazzini
                'user_id' => 14,
                'category_id' => null,
            ],
        ];

        foreach ($dishes as $dish) {
            $newDish = new Dish();
            $newDish->name = $dish['name'];
            $newDish->ingredients = $dish['ingredients'];
            $newDish->description = $dish['description'];
            $newDish->price = $dish['price'];
            $newDish->visible = $dish['visible'];
            $newDish->image = $dish['image']; 
            $newDish->user_id = $dish['user_id'];
            $newDish->category_id = $dish['category_id'];
            $newDish->save();
        }
    }
}
