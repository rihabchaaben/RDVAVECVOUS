<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $fillable = ['nom', 'adresse', 'cp', 'fichier', 'demandeur_id', 'ville_id', 'description', 'status', 'categorie_id', 'type_devis', 'type_commentaire'];

    const NEW = 0;
    const ANNULE = 1;
    const ACCEPTE = 2;
    const ATTENTE = 3;
    const DEVI = 4;
    const IMAGE_PATH = 'demande_images';
    const TYPE_DEVIS = 1;
    const TYPE_INTERVENTION = 2;

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }

    public function demandeur()
    {
        return $this->belongsTo(Demandeur::class);
    }

    public function demandeFiles()
    {
        return $this->hasMany(DemandeFile::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function propositions()
    {
        return $this->hasMany(Proposition::class);
    }

    public function avis()
    {
        return $this->hasMany(Avis::class);
    }

    public function specialDemandes()
    {
        return $this->belongsToMany(Professionnel::class, 'special_demandes',
            'demande_id', 'professionnel_id');
    }

    public function devis()
    {
        return $this->hasManyThrough('App\Devis', 'App\Proposition');
    }

    public function notifications()
    {
        return $this->morphMany('App\Notification', 'notifiable');
    }

    public function demandeBycolor($id)
    {
        switch ($this->getDemandeStatus($id)) {
            case 1:
                return 'fc-event-solid-danger fc-event-light';
                break;
            case 2:
                return 'fc-event-solid-success fc-event-light';
                break;
            case 3:
                return 'fc-event-solid-warning fc-event-light';
                break;

           case 4:
                    return 'fc-event-light fc-event-solid-dangerr';
                    break;
        }

    }

    public function getDemandeStatus($demandeId)
    {
        if ($this->propositions()->exists() && $this->propositions()->where('status', '!=', Proposition::DEVIS)->where('status', '!=', Proposition::ACCEPTE)->where('status','<>', Proposition::REFUSE)->first()) {
            return 1;
        } else if (Proposition::whereHas('demande', function ($query) use ($demandeId) {
            $query->where('id', $demandeId);
        })->where('status', Proposition::ACCEPTE)->first()) {
            return 2;
        }
        //ligne ajoute
        else if (Proposition::whereHas('demande', function ($query) use ($demandeId) {
            $query->where('id', $demandeId);
        })->where('status', Proposition::DEVIS)->first()) {
            return 2;
        }
        //fin ligne


        else if (Proposition::whereHas('demande', function ($query) use ($demandeId) {
            $query->where('id', $demandeId);
        })->where('status', 1)->first()) {
            return 4;
        }


        else if (Proposition::whereHas('demande', function ($query) use ($demandeId) {
            $query->where('id', $demandeId);
        })->where('status', 3)->first()) {
            return 3;
        }
        
         
        
        else {
            return 3;
        }
    }

    public static function demandeTotal()
    {
        return self::count();
    }


}
