<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ActifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {

        $clients = DB::table('client')->pluck('id'); // Assuming you have a 'clients' table

            DB::table('actif')->insert([
                [
                'numero_serie' => 'SER000000000001',
                'nom' => '068-JGagnon-01',
                'en_entrepot' => FALSE,
                'adresse_mac' => '00:1A:2B:3C:4D:5E',
                'date_retour' => '2023-09-18',
                'note' => 'Cet actif est en bon état.',
                'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                'id_modele' => rand(1, 7),
                'id_statut' => rand(1, 3),
                'id_emplacement' => 1,
                'id_proprietaire' => 1,
                'id_utilisation' => 1,
                'numero_commande' => 69123456789,
                'id_client' => $clients[1],
                ],
                [
                    'numero_serie' => 'SER000000000002',
                    'nom' => '069-KTremblay-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 2,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[1],
                ],
                [
                    'numero_serie' => 'SER000000000003',
                    'nom' => '068-Jdoe-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 1,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[2],
                ],
                [
                    'numero_serie' => 'SER000000000004',
                    'nom' => '069-Jsmith-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 2,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[3],
                ],
                [
                    'numero_serie' => 'SER000000000005',
                    'nom' => '099-BJohnson-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 3,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[4],
                ],
                [
                    'numero_serie' => 'SER000000000006',
                    'nom' => '007-ABrown-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 4,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[5],
                ],
                [
                    'numero_serie' => 'SER000000000007',
                    'nom' => '068-MDavis-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 1,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[6],
                ],
                [
                    'numero_serie' => 'SER000000000008',
                    'nom' => '069-EWilson-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 2,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[7],
                ],

                [
                    'numero_serie' => 'SER000000000009',
                    'nom' => '007-DLee-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 4,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[8],
                ],
                [
                    'numero_serie' => 'SER000000000010',
                    'nom' => '068-SKim-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 1,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[9],
                ],
                [
                    'numero_serie' => 'SER000000000011',
                    'nom' => '069-TWilson-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 2,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[10],
                ],
                [
                    'numero_serie' => 'SER000000000012',
                    'nom' => '099-ODavis-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 3,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[11],
                ],
                [
                    'numero_serie' => 'SER000000000013',
                    'nom' => '007-CBrown-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 4,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[12],
                ],
                [
                    'numero_serie' => 'SER000000000014',
                    'nom' => '068-EJohnson-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 1,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[13],
                ],
                [
                    'numero_serie' => 'SER000000000015',
                    'nom' => '069-AWilson-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 2,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[14],
                ],
                [
                    'numero_serie' => 'SER000000000016',
                    'nom' => '099-GLee-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 3,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[15],
                ],
                [
                    'numero_serie' => 'SER000000000017',
                    'nom' => '007-Lkim-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 4,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[16],
                ],
                [
                    'numero_serie' => 'SER000000000018',
                    'nom' => '068-CDavis-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 1,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[17],
                ],
                [
                    'numero_serie' => 'SER000000000019',
                    'nom' => '069-MBrown-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 2,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[18],
                ],
                [
                    'numero_serie' => 'SER000000000020',
                    'nom' => '099-LJohson-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 3,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[19],
                ],
                [
                    'numero_serie' => 'SER000000000021',
                    'nom' => '007-JWilson-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 4,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[0],
                ],
                [
                    'numero_serie' => 'SER000000000022',
                    'nom' => '068-SLee-01',
                    'en_entrepot' => FALSE,
                    'adresse_mac' => '00:1A:2B:3C:4D:5E',
                    'date_retour' => '2023-09-18',
                    'note' => 'Cet actif est en bon état.',
                    'modele_descriptif' => 'Actif de modèle ' . rand(1, 7),
                    'id_modele' => rand(1, 7),
                    'id_statut' => rand(1, 3),
                    'id_emplacement' => 1,
                    'id_proprietaire' => 1,
                    'id_utilisation' => 1,
                    'numero_commande' => 69123456789,
                    'id_client' => $clients[0],
                ],
            ]



        );
        }
    }

