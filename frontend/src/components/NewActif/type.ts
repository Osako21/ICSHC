export type Actif_Type = {
  id: number;
  numero_serie: string;
  nom: string;
  adresse_mac: string;
  date_retour: string;
  note: string;
  id_client: number;
  id_modele_commande: number;
  id_statut: number;
  id_emplacement: number;
  id_proprietaire: number;
  id_utilisation: number;
  id_categorie: number;
  id_modele: number;
  est_en_entrepot: boolean;
  assigne_a: string; // Type approprié pour les utilisateurs ou null si non assigné
  categorie: string; // Type approprié pour les catégories ou null si non spécifié
  modele: string; // Type approprié pour les modèles ou null si non spécifié
  emplacement: string; // Type approprié pour les emplacements ou null si non spécifié
  entrepot: string; // Type approprié pour les entrepôts ou null si non spécifié
  statut: string; // Type approprié pour les statuts ou null si non spécifié
  utilisation: string; // Type approprié pour les utilisations ou null si non spécifié
  proprietaire: string; // Type approprié pour les propriétés ou null si non spécifié
  propriete: string; // Type approprié pour les propriétés ou null si non spécifié
  date_creation: string; // Type approprié pour les dates de création ou null si non spécifié
};
