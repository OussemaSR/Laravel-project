<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([

                [
                    "answer" => "answer0",
                    "ansr_type" =>"none"
                ],

                [
                    "answer" => "Je cherche un artisan",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Je cherche de l'inspiration et veux des conseils",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Je veux une estimation pré-achat immobilier",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "J'ai déjà des devis et je veux comparer",
                    "ansr_type" =>"btn"
                    ],

                [
                    "answer" => "Autre",
                    "ansr_type" =>"txt"
                    ],

                [
                    "answer" => "Oui",
                    "ansr_type" =>"btn"
                    ],

                
                [
                    "answer" => "Non",
                    "ansr_type" =>"btn"
                    ],

                [
                    "answer" => "Hauteur",
                    "ansr_type" =>"dim"
                    ],

                [

                    "answer" => "Longeur",
                    "ansr_type" =>"dim"
                    ],

                [
                    "answer" => "Largeur",
                    "ansr_type" =>"dim"
                    ],

                [

                    "answer" => "Entrer de gamme",
                    "ansr_type" =>"btn"
                    ],

                [

                    "answer" => "Milieu de gamme",
                    "ansr_type" =>"btn"
                    ],

                [

                    "answer" => "Haut de gamme",
                    "ansr_type" =>"btn"
                    ],

                [

                    "answer" => "Contemporain",
                    "ansr_type" =>"btn"
                    ],

                [

                    "answer" => "Traditionel",
                    "ansr_type" =>"btn"
                    ],

                [

                    "answer" => "Industriel",
                    "ansr_type" =>"btn"
                    ],


                [
                

                    "answer" => "Douche encastrée",
                    "ansr_type" =>"btn"
                    ],

                [

                    "answer" => "WC posé",
                    "ansr_type" =>"btn"
                    ],

                [

                    "answer" => "Lavabo",
                    "ansr_type" =>"btn"
                    ],

                [

                    "answer" => "Radiateur eau chaude",
                    "ansr_type" =>"btn"
                    
                ],

                [

                    "answer" => "Douche cabine",
                    "ansr_type" =>"btn"
                    
                ],

                [

                    "answer" => "Meuble de salle de bain",
                    "ansr_type" =>"btn"
                    
                ],

                [

                    "answer" => "WC suspendu",
                    "ansr_type" =>"btn"
                    
                ],

                [

                    "answer" => "Ballon d'eau chaude",
                    "ansr_type" =>"btn"
                    
                ],

                [

                    "answer" => "Baignoire",
                    "ansr_type" =>"btn"
                    
                ],

                [

                    "answer" => "Bidet",
                    "ansr_type" =>"btn"
                    
                ],

                [

                    "answer" => "Radiateur electrique",
                    "ansr_type" =>"btn"
                    
                ],


                [
                    "answer" => "Lavabo posé",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Raccordement machine à laver",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Douche large vitrée",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Baignoire d'angle",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Lavabo suspendu",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Douche à l'italienne",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Baignoire balnéo",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Lavabo double vasque",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Sèche-serviette",
                    "ansr_type" =>"btn"
                    
                ],


                [
                    "answer" => "Je ne sais pas",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Carrelage",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Parquet",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Lino/PVC",
                    "ansr_type" =>"btn"
                    
                ],

                
                [
                    "answer" => "Déposer du revêtement actuel",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Déposer du nouvel revêtement",
                    "ansr_type" =>"btn"
                    
                ],

                
                [
                    "answer" => "Carreaux+peinture en haut des murs",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Peinture+ carreaux coin/baingoire/douche",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Carreaux uniquement",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Peinture uniquement",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Lambris",
                    "ansr_type" =>"btn"
                    
                ],

                
                [
                    "answer" => "Bon état",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Etat moyen/trace d'humidité",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Mauvée état/surface abîmée",
                    "ansr_type" =>"btn"
                    
                ],


                [
                    "answer" => "Nettoyage et remise à neuf de la ventilation actuelle",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Nouvelle ventilation",
                    "ansr_type" =>"btn"
                    
                ],

                [
                    "answer" => "Prise electrique",
                    "ansr_type" =>"nbr"
                    
                ],

                [
                    "answer" => "Spot encastré",
                    "ansr_type" =>"nbr"
                    
                ],

                [
                    "answer" => "Prise machine à laver",
                    "ansr_type" =>"nbr"
                    
                ],

                [
                    "answer" => "Plafonnier",
                    "ansr_type" =>"nbr"
                    
                ],

                [
                    "answer" => "Prise séche-serviette",
                    "ansr_type" =>"nbr"
                    
                ],
                //ID : 59//
                [
                    "answer" => "Interrupteur",
                    "ansr_type" =>"nbr"     
                ],

                //ID : 60//
                [
                    "answer" => "Achetée et installée par l'entreprise",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 61//
                [
                    "answer" => "Installée par l'interprise uniquement",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 62//
                [
                    "answer" => "Aucune intervention de l'entreprise",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 63//
                [
                    "answer" => "En I",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 64//
                [
                    "answer" => "En L",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 65//
                [
                    "answer" => "En face-à-face: II",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 66//
                [
                    "answer" => "En U",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 67//
                [
                    "answer" => "Stratifié",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 68//
                [
                    "answer" => "Compact",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 69//
                [
                    "answer" => "Bois",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 70//
                [
                    "answer" => "Inox",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 71//
                [
                    "answer" => "Verre",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 72//
                [
                    "answer" => "Aucun,j'ai ce qu'il me faut",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 73//
                [
                    "answer" => "(plaques,hotte,four)",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 74//
                [
                    "answer" => "(plaques,hotte,four,frigo,micro-onde,lave-vaisselle)",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 75//
                [
                    "answer" => "Parquet flottant",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 76//
                [
                    "answer" => "Parquet massif",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 77//
                [
                    "answer" => "Chappe béton ciré",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 78//
                [
                    "answer" => "Nouveau revêtement",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 79//
                [
                    "answer" => "Réfection du revêtement actuel (parquet massif)",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 80//
                [
                    "answer" => "Éclairage sous meuble",
                    "ansr_type" =>"nbr"     
                ],
                
                //ID : 81//
                [
                    "answer" => "Moquette",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 82//
                [
                    "answer" => "Peinture",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 83//
                [
                    "answer" => "Toile de verre",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 84//
                [
                    "answer" => "Papier peint",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 85//
                [
                    "answer" => "Aluminium",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 86//
                [
                    "answer" => "PVC",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 87//
                [
                    "answer" => "Acier",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 88//
                [
                    "answer" => "Fenêtres",
                    "ansr_type" =>"nbr"     
                ],
                
                //ID : 89//
                [
                    "answer" => "Portes fenêtres",
                    "ansr_type" =>"nbr"     
                ],
                
                //ID : 90//
                [
                    "answer" => "Baies vitrées",
                    "ansr_type" =>"nbr"     
                ],
                
                //ID : 91//
                [
                    "answer" => "Acune aide",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 92//
                [
                    "answer" => "aucun",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 93//
                [
                    "answer" => "aucun",
                    "ansr_type" =>"aucun"     
                ],
                
                //ID : 94//
                [
                    "answer" => "aucun",
                    "ansr_type" =>"aucun"     
                ],
                
                //ID : 95//
                [
                    "answer" => "aucun",
                    "ansr_type" =>"aucun"     
                ],
                
                //ID : 96//
                [
                    "answer" => "aucun",
                    "ansr_type" =>"aucun"     
                ],
                
                //ID : 97//
                [
                    "answer" => "aucun",
                    "ansr_type" =>"aucun"     
                ],
                
                //ID : 98//
                [
                    "answer" => "aucun",
                    "ansr_type" =>"aucun"     
                ],
                
                //ID : 99//
                [
                    "answer" => "Ma Prime Rénov",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 100//
                [
                    "answer" => "Eco-prêt à taux zéro (PTZ)",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 101//
                [
                    "answer" => " Crédit d'impot",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 102/
                [
                    "answer" => "Certificats d'economies d'energie",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 103//
                [
                    "answer" => "Rénovation",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 104//
                [
                    "answer" => "Installation neuve",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 105//
                [
                    "answer" => "Toiture",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 106//
                [
                    "answer" => "Charpente",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 107//
                [
                    "answer" => "Combles",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 108//
                [
                    "answer" => "Tuiles",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 109//
                [
                    "answer" => "Bac-acier/Tôle",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 110//
                [
                    "answer" => "Ardoise",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 111//
                [
                    "answer" => "Zinc",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 112//
                [
                    "answer" => "Toiture-terrasse",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 113//
                [
                    "answer" => "Métallique",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 114//
                [
                    "answer" => "Béton",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 115//
                [
                    "answer" => "surface en m2",
                    "ansr_type" =>"dim"     
                ],
                 
                //ID : 116//
                [
                    "answer" => "Maison individuelle ",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 117//
                [
                    "answer" => "Appartement",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 118//
                [
                    "answer" => "Immeuble",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 119//
                [
                    "answer" => "Commerce",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 120//
                [
                    "answer" => "Hauteur en mètres",
                    "ansr_type" =>"dim"     
                ],
                
                //ID : 121//
                [
                    "answer" => "Isolation",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 122//
                [
                    "answer" => "Chauffage",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 123//
                [
                    "answer" => "Climatisation",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 124//
                [
                    "answer" => "Sols",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 125//
                [
                    "answer" => "Murs",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 126//
                [
                    "answer" => "Électrique",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 127//
                [
                    "answer" => "Fioul",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 128//
                [
                    "answer" => "Gaz",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 129//
                [
                    "answer" => "Pompe à Chaleur",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 130//
                [
                    "answer" => "Monobloc",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 131//
                [
                    "answer" => "Split",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 132//
                [
                    "answer" => "Réversible",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 133//
                [
                    "answer" => "Centralisé",
                    "ansr_type" =>"btn"     
                ],

                 
                //ID : 134//
                [
                    "answer" => "À définir",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 135//
                [
                    "answer" => "1",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 136//
                [
                    "answer" => "2",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 137//
                [
                    "answer" => "3",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 138//
                [
                    "answer" => "4",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 139//
                [
                    "answer" => "5",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 140//
                [
                    "answer" => "Plus de 5",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 141//
                [
                    "answer" => "surface en m2 (approximative)",
                    "ansr_type" =>"dim"     
                ],
                 
                //ID : 142//
                [
                    "answer" => "Cuisine",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 143//
                [
                    "answer" => "Salle de bain",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 144//
                [
                    "answer" => "Salon",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 145//
                [
                    "answer" => "Salle à manger",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 146//
                [
                    "answer" => "Chambre",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 147//
                [
                    "answer" => "Couloir",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 148//
                [
                    "answer" => "Buanderie",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 149//
                [
                    "answer" => "Toilettes",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 150//
                [
                    "answer" => "Bureau",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 151//
                [
                    "answer" => "Dressing",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 152//
                [
                    "answer" => "Garage",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 153//////////////////////non used/////
                [
                    "answer" => "Autre",
                    "ansr_type" =>"btn"     
                ],//////////////////////////////////////////
                 
                //ID : 154//
                [
                    "answer" => "Sous goulotte",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 155//
                [
                    "answer" => "Encastréé en saignée",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 156//
                [
                    "answer" => "Interrupteur ou variateur",
                    "ansr_type" =>"nbr"     
                ],
                
                //ID : 157//
                [
                    "answer" => "Interrupteur Va et Vient ou bouton pousoir",
                    "ansr_type" =>"nbr"     
                ],
                 
                //ID : 158//
                [
                    "answer" => "Applique",
                    "ansr_type" =>"nbr"     
                ],
                
                //ID : 159//
                [
                    "answer" => "Prise Rj45 ou antenne TV",
                    "ansr_type" =>"nbr"     
                ],
                 
                //ID : 160//
                [
                    "answer" => "Radiateur électrique",
                    "ansr_type" =>"nbr"     
                ],
                
                //ID : 161//
                [
                    "answer" => "Démolition / création de cloisons",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 162//
                [
                    "answer" => "Modification de structure",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 163//
                [
                    "answer" => "Plafonds",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 164//
                [
                    "answer" => "Menuiserie",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 165//
                [
                    "answer" => "Plomberie",
                    "ansr_type" =>"btn"     
                ],
                 
                //ID : 166//
                [
                    "answer" => "Électricité",
                    "ansr_type" =>"btn"     
                ],
                
                //ID : 167//
                [
                    "answer" => "Chaudière",
                    "ansr_type" =>"btn"     
                ],
                   
                //ID : 168//
                [
                    "answer" => "Pièce principale",
                    "ansr_type" =>"btn"     
                ],
                   
                //ID : 169//
                [
                    "answer" => "Kitchenette",
                    "ansr_type" =>"btn"     
                ],
                   
                //ID : 170//
                [
                    "answer" => "Salle d'eau",
                    "ansr_type" =>"btn"     
                ],
                   
                //ID : 171//
                [
                    "answer" => "Maison plain-pied",
                    "ansr_type" =>"btn"     
                ],
                   
                //ID : 172//
                [
                    "answer" => "Maison à étages",
                    "ansr_type" =>"btn"     
                ],
                   
                //ID : 173//
                [
                    "answer" => "Année à 4 chiffres",
                    "ansr_type" =>"nbr"     
                ],
                   
                //ID : 174//
                [
                    "answer" => "Parpaing",
                    "ansr_type" =>"btn"     
                ],
                   
                //ID : 175//
                [
                    "answer" => "Brique",
                    "ansr_type" =>"btn"     
                ],
                   
                //ID : 176//
                [
                    "answer" => "Extension",
                    "ansr_type" =>"btn"     
                ],
                   
                //ID : 177//
                [
                    "answer" => "Surélévation",
                    "ansr_type" =>"btn"     
                ],
                   
                //ID : 178//
                [
                    "answer" => "Bar",
                    "ansr_type" =>"btn"     
                ],
                   
                //ID : 179//
                [
                    "answer" => "Restaurant",
                    "ansr_type" =>"btn"     
                ],
                   
                //ID : 180//
                [
                    "answer" => "Locaux techniques",
                    "ansr_type" =>"btn"     
                ],
                   
                //ID : 181//
                [
                    "answer" => "Extérieur (vitrine,enseigne,…)",
                    "ansr_type" =>"btn"     
                ],
                   
                //ID : 182//
                [
                    "answer" => "Équipement de cuisine professionnelle",
                    "ansr_type" =>"btn"     
                ],
                   
                //ID : 183//
                [
                    "answer" => "Réagencement",
                    "ansr_type" =>"btn"     
                ],
                   
                //ID : 184//
                [
                    "answer" => "Extraction",
                    "ansr_type" =>"btn"     
                ],
                   
                //ID : 185//
                [
                    "answer" => "En cours",
                    "ansr_type" =>"btn"     
                ],

                //ID : 186//
                [
                    "answer" => "Salle ou surface de vente",
                    "ansr_type" =>"btn"     
                ],

                //ID : 187//
                [
                    "answer" => "Fenêtres",
                    "ansr_type" =>"btn"     
                ]

                   

        ]);
    }
}
