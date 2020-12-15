<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Professionnel extends Model
{


    protected $fillable = ['nom', 'adresse','description_garantie','nom_assurance', 'cp', 'site', 'description', 'avatar', 'ville_id', 'user_id', 'siret', 'tva', 'telephone', 'nom_societe', 'mobile'];


    public function factures()
    {
        return $this->hasMany(Facture::class);
    }


    public function last(){
 
        return $this->factures()->orderBy('created_at', 'desc');
    
    }



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }

    public function devis()
    {
        return $this->hasMany(Devis::class);
    }

    public function propositions()
    {
        return $this->hasMany(Proposition::class);
    }

    public function avis()
    {
        return $this->hasMany(Avis::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }

    public function kbis()
    {
        return $this->hasMany(KbisFile::class);
    }

    

    public function debiteur()
    {
        return $this->hasOne(Debiteur::class);
    }

    public function zoneDeTravaillesVil()
    {
        return $this->belongsToMany(Ville::class, 'zone_de_travailles',
            'professionnel_id', 'ville_id');
    }

    public function zoneDeTravaillesDep()
    {
        return $this->belongsToMany(Departement::class, 'zone_de_travailles',
            'professionnel_id', 'departement_id');
    }


    public function specialDemandes()
    {
        return $this->belongsToMany(Demande::class, 'special_demandes',
            'professionnel_id', 'demande_id');
    }

    public function vendeur()
    {
        return $this->belongsToMany(Vendeur::class);
    }

    public function promoPayments()
    {
        return $this->belongsToMany(Proposition::class, 'promo_payments',
            'professionnel_id', 'proposition_id');
    }

    public function vip()
    {
        return $this->belongsToMany(Demandeur::class, 'vip_professionnels',
            'professionnel_id', 'demandeur_id');
    }


    public function isvip($id){

       
        if($this->vip()->where('demandeur_id',$id)->count()==0) return false;
        if($this->vip()->where('demandeur_id',$id)->count()>0)
        return true;
    }

    public function cardless()
    {
        return $this->hasOne(Cardless::class);
    }
}
