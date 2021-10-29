<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                "quest_id"=>"1",
                "question"=>"Quel est le but de  votre recherche ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],
            [
                "quest_id"=>"2",
                "question"=>"Connaisez-vous la dimension de la pièce ?",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"
            ],
            [
                "quest_id"=>"3",
                "question"=>"Quelles sont la dimension de cette pièce ?",
                "type"=>"btn",
                "commentary"=>"A remplir"
            ],
            [
                "quest_id"=>"4",
                "question"=>"Quel niveau de gamme souhaitez-vous pour tous les matériaux fournis ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],
            [
                "quest_id"=>"5",
                "question"=>"Quel style de rénovation cherchez-vous ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],
            [
                "quest_id"=>"6",
                "question"=>"Souhaitez-vous démolir un mur ou ouvrir une cloison ?",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"  
            ],
            [
                "quest_id"=>"7",
                "question"=>"Quelle est la longeur approximative de la cloison ?",
                "type"=>"btn",
                "commentary"=>"A remplir"
            ],
            [
                "quest_id"=>"8",
                "question"=>"Souhaitez-vous supprimer des équipements de votre salle de bain ?",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"
            ],
            [
                "quest_id"=>"9",
                "question"=>"Quels équipements souhaitez-vous supprimer ?",
                "type"=>"btn",
                "commentary"=>"plusieurs choix possibles"
            ],
            [
                "quest_id"=>"10",
                "question"=>"Souhaitez-vous ajouter de nouveaux équipements pour la salle de bain",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"
            ],
            [
                "quest_id"=>"11",
                "question"=>"Quels équipements souhaitez-vous ajouter ?",
                "type"=>"btn",
                "commentary"=>"plusieurs choix possibles"
            ],
            [
                "quest_id"=>"12",
                "question"=>"Les équipements ajoutés sont-ils mêmes emplacements que les anciens ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],
            [
                "quest_id"=>"13",
                "question"=>"Souhaitez-vous rénover le revêtement au sol ?",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"
            ],
            [
                "quest_id"=>"14",
                "question"=>"Quel est le revêtement actuel ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],
            [
                "quest_id"=>"15",
                "question"=>"Quelle préparation souhaitez-vous ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],

            [
                "quest_id"=>"16",
                "question"=>"Quel nouveau revêtement souhaitez-vous ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],

            [
                "quest_id"=>"17",
                "question"=>"Souhaitez-vous rénover les revêtements muraux ?",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"
            ],

            [
                "quest_id"=>"18",
                "question"=>"Quel est le revêtement actuel ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible" 
            ],

            [
                "quest_id"=>"19",
                "question"=>"Quel est l'état global des murs ?",
                "type"=>"no_btn",
                "commentary"=>"1 seul choix possible"
            ],

            [
                "quest_id"=>"20",
                "question"=>"Quel nouveau revêtement souhaitez-vous ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],

            [
                "quest_id"=>"21",
                "question"=>"Souhaitez-vous crée faux plafonds ?",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"
            ],

            [
                "quest_id"=>"22",
                "question"=>"Souhaitez-vous repreindre les plafonds ?",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"
            ],

            [
                "quest_id"=>"23",
                "question"=>"Quel est l'état global des plafonds",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],

            [
                "quest_id"=>"24",
                "question"=>"Faut-il revoir la ventilation ?",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"
            ],

            [
                "quest_id"=>"25",
                "question"=>"Quel type d'intervention souhaitez-vous ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],

            [
                "quest_id"=>"26",
                "question"=>"Souhaitez-vous modifier l'installation électrique ?",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"
            ],

            [
                "quest_id"=>"27",
                "question"=>"Quels sont les éléments à modifier ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"28",
                "question"=>"Faut-il démonter une cuisine existante ?",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"
            ],

            [
                "quest_id"=>"29",
                "question"=>"Pour l'achat de lan nouvelle cuisine ?",
                "type"=>"no_btn",
                "commentary"=>"1 seul choix possible "
            ],

            [
                "quest_id"=>"30",
                "question"=>"Quelle sera l'implantation de votre cuisine ?",
                "type"=>"no_btn",
                "commentary"=>"1 seul choix possible"
            ],

            [
                "quest_id"=>"31",
                "question"=>"Quel type de plan de travail souhaitez-vous ?",
                "type"=>"no_btn",
                "commentary"=>"1 seul choix possible"
            ],

            [
                "quest_id"=>"32",
                "question"=>"Pour l'électroménager, de combien d'appareils avez-vous besoin ?",
                "type"=>"no_btn",
                "commentary"=>"1 seul choix possible"
            ],

            [
                "quest_id"=>"33",
                "question"=>"Souhaitez-vous un nouveau revêtement ou la réflexion du revêtement actuel ?",
                "type"=>"no_btn",
                "commentary"=>"1 seul choix possible"
            ],

            [
                "quest_id"=>"34",
                "question"=>"Quel type de matériau souhaitez-vous pour vos nouvelles fenêtres ?",
                "type"=>"no_btn",
                "commentary"=>"1 seul choix possible"
            ],

            [
                "quest_id"=>"35",
                "question"=>"Quells sont les ouvertures à modifier ?",
                "type"=>"btn",
                "commentary"=>"plusieurs choix possibles"
            ],

            [
                "quest_id"=>"36",
                "question"=>" Ce projet est-il sujet à des aides financières (rénovation énérgétique) ?
                 Nous pouvons vous aider ou vous orienter vers le bon dispositif.",
                "type"=>"btn",
                "commentary"=>"plusieurs choix possibles"
            ],

            [
                "quest_id"=>"37",
                "question"=>"Aver-vous d'autres travaux de rénovation à effectuer ? ",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"
            ],

            [
                "quest_id"=>"38",
                "question"=>"Quelle est la nature de vos travaux ?",
                "type"=>"no_btn",
                "commentary"=>"1 seul choix possible"
            ],

            [
                "quest_id"=>"39",
                "question"=>"Quel(s) type(s) de travaux souhaitez-vous réaliser ?",
                "type"=>"btn",
                "commentary"=>"plusieurs choix possibles"
            ],

            [
                "quest_id"=>"40",
                "question"=>"Quel type de toiture ?",
                "type"=>"no_btn",
                "commentary"=>"1 seul choix possible"
            ],

            [
                "quest_id"=>"41",
                "question"=>"Quel type de Charpente ?",
                "type"=>"no_btn",
                "commentary"=>"1 seul choix possible"
            ],

            [
                "quest_id"=>"42",
                "question"=>"Préciser la surface de la toiture :",
                "type"=>"btn",
                "commentary"=>"À remplir"
            ],

            [
                "quest_id"=>"43",
                "question"=>"Pour quel type de batiment ?",
                "type"=>"no_btn",
                "commentary"=>"1 seul choix possible"
            ],

            [
                "quest_id"=>"44",
                "question"=>"Préciser la hauteur du batiment :",
                "type"=>"btn",
                "commentary"=>"À remplir"
            ],

            [
                "quest_id"=>"45",
                "question"=>"Avez-vous d'autres travaux de renovation à effectuer ? (extension,aménagement combles, etc) ?",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"
            ],

            [
                "quest_id"=>"46",
                "question"=>"Que souhaitez-vous isoler ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"47",
                "question"=>"Quel type de chauffage / production d'eau chaude ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"48",
                "question"=>"Quel type de climatisation ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],

            [
                "quest_id"=>"49",
                "question"=>" Combien de pièces sont concernées par les travaux ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],

            [
                "quest_id"=>"50",
                "question"=>"Préciser la surface totale concernée par les travaux :",
                "type"=>"btn",
                "commentary"=>"À remplir"
            ],

            [
                "quest_id"=>"51",
                "question"=>"Dans quelles pièces souhaitez-vous modifier l'installation électrique ? ",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"52",
                "question"=>"Quelle type d'intallation désirez-vous ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],

            [
                "quest_id"=>"53",
                "question"=>"Le tableau électrique doit-il être changé ?",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"
            ],

            [
                "quest_id"=>"54",
                "question"=>"Le chauffage est-il électrique ?",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"
            ],

            [
                "quest_id"=>"55",
                "question"=>"Les radiateurs électrique doivent-ils êtres changés ?",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"
            ],

            [
                "quest_id"=>"56",
                "question"=>"Cuisine : quels équipements désirez-vous ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"57",
                "question"=>"Salle de bain : quels équipements désirez-vous ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"58",
                "question"=>"Salon : quels équipements désirez-vous ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"59",
                "question"=>"Salle à manger : quels équipements désirez-vous ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"60",
                "question"=>"Chambre : quels équipements désirez-vous ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"61",
                "question"=>"Couloir : quels équipements désirez-vous ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"62",
                "question"=>"Buanderie : quels équipements désirez-vous ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"63",
                "question"=>"Toilettes : quels équipements désirez-vous ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"64",
                "question"=>"Bureau : quels équipements désirez-vous ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"65",
                "question"=>"Dressing : quels équipements désirez-vous ?",
                "type"=>"btn",
                "commentary"=>""
            ],

            [
                "quest_id"=>"66",
                "question"=>"Garage : quels équipements désirez-vous ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"67",
                "question"=>"Autre : quels équipements désirez-vous ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"68",
                "question"=>"Quelles sont les pièces à rénover ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"69",
                "question"=>"Avez-vous des plans d'architecte?",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"
            ],

            [
                "quest_id"=>"70",
                "question"=>"Souhaitez vous l'aide d'un architecte ou d'un décorateur d'interieur ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],

            [
                "quest_id"=>"71",
                "question"=>"Précisez la surface totale du logement",
                "type"=>"btn",
                "commentary"=>"À remplir"
            ],

            [
                "quest_id"=>"72",
                "question"=>"Que souhaitez-vous rénover dans votre studio ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"73",
                "question"=>" Pour quel type de maison souhaitez-vous faire des travaux ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],

            [
                "quest_id"=>"74",
                "question"=>"Précisez l'année de construction de votre maison :",
                "type"=>"btn",
                "commentary"=>"À remplir"
            ],

            [
                "quest_id"=>"75",
                "question"=>"En quel matériau votre maison a été construite ?",
                "type"=>"no_btn",
                "commentary"=>"1 seul choix possible"
            ],

            [
                "quest_id"=>"76",
                "question"=>"Quel type d'agandissement souhaitez-vous réaliser ?",
                "type"=>"no_btn",
                "commentary"=>"1 seul choix possible"
            ],

            [
                "quest_id"=>"77",
                "question"=>"Précisez la surface totale de l'extension / surélévation :",
                "type"=>"btn",
                "commentary"=>"À remplir"
            ],

            [
                "quest_id"=>"78",
                "question"=>"Quel type de construction souhaitez-vous pour votre projet ?",
                "type"=>"no_btn",
                "commentary"=>"1 seul choix possible"
            ],

            [
                "quest_id"=>"79",
                "question"=>"Avez-vous déposé un permis de construire ou une déclaration préalable pour votre project ?",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"
            ],

            [
                "quest_id"=>"80",
                "question"=>"Quel type d'établissement souhaitez-vous rénover ?",
                "type"=>"no_btn",
                "commentary"=>"1 seul choix possible"
            ],

            [
                "quest_id"=>"81",
                "question"=>"Quel(s) type(s) d'espace(s) souhaitez-vous rénover ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"82",
                "question"=>"Pour la salle ou la surface de vente,avez-vous besoin d'un décorateur ou d'un architecte ?",
                "type"=>"no_btn",
                "commentary"=>"Optionnel"
            ],

            [
                "quest_id"=>"83",
                "question"=>"Pour la cuisine, quel est votre besoin ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possible"
            ],

            [
                "quest_id"=>"84",
                "question"=>"Précisez la surface totale de l'établissement :",
                "type"=>"btn",
                "commentary"=>"À remplir"
            ],

            [
                "quest_id"=>"85",
                "question"=>"Quel est le revêtement actuel ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],
            
            [
                "quest_id"=>"86",
                "question"=>"Quel nouveau revêtement souhaitez-vous ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],
            
            [
                "quest_id"=>"87",
                "question"=>"Quels sont les élements à modifier ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],
            
            [
                "quest_id"=>"88",
                "question"=>"Quel est le revêtement actuel ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],
            
            [
                "quest_id"=>"89",
                "question"=>"Quel nouveau revêtement souhaitez-vous ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],

            
            [
                "quest_id"=>"90",
                "question"=>"Quel est le revêtement mural actuel ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],
            
            [
                "quest_id"=>"91",
                "question"=>"Quel nouveau revêtement souhaitez-vous ?",
                "type"=>"no_btn",
                "commentary"=>"1 choix possible"
            ],
            
            [
                "quest_id"=>"92",
                "question"=>"Quel(s) type(s) de travaux souhaitez-vous réaliser ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ],

            [
                "quest_id"=>"93",
                "question"=>"Quel(s) type(s) de travaux souhaitez-vous réaliser ?",
                "type"=>"btn",
                "commentary"=>"Plusieurs choix possibles"
            ]


        ]);
    }
}
