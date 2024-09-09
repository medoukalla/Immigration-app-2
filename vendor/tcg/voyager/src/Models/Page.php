<?php

namespace TCG\Voyager\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Traits\Translatable;

class Page extends Model
{
    use Translatable;

    protected $translatable = ['title', 'slug', 'body'];

    /**
     * Statuses.
     */
    public const STATUS_ACTIVE = 'ACTIVE';
    public const STATUS_INACTIVE = 'INACTIVE';

    /**
     * List of statuses.
     *
     * @var array
     */
    public static $statuses = [self::STATUS_ACTIVE, self::STATUS_INACTIVE];

    protected $guarded = [];

    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->author_id && Auth::user()) {
            $this->author_id = Auth::user()->getKey();
        }

        return parent::save();
    }

    /**
     * Scope a query to only include active pages.
     *
     * @param  $query  \Illuminate\Database\Eloquent\Builder
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', static::STATUS_ACTIVE);
    }


    static function get_lang_link($page) {
        $lang_link = null;
        // if this page in spa return frensh link
        if ( $page->lang == 'fr' ) {
    
            switch ($page->slug) {

                // PRÉPARATION DE DOSSIER VISA
                case 'preparation-de-dossier-visa':
                    $lang_link = route('frontend.sp.page', 'preparacion-de-expediente-de-visdao');
                    break;

                // QU'EST CE QUE JE PEUX ÉTUDIER EN ESPAGNE?
                case 'etudier-en-espagne':
                    $lang_link = route('frontend.sp.page', 'estudiar-en-espana');
                    break;
                
                // ÉTUDIER EN ESPAGNE SANS SELECTIVIDAD
                case 'Etudier-en-espagne-sans-Selectividad':
                    $lang_link = route('frontend.sp.page', 'Estudiar-en-Espana-sin-Selectividad');
                    break;

                // ETUDIER LA LANGUE EN ESPAGNE
                case 'etudier-la-langue-en-espagne':
                    $lang_link = route('frontend.sp.page', 'estudiar-el-idioma-en-espana');
                    break;

                // ETUDIER LA SELECTIVIDAD EN ESPAGNE
                case 'etudier-la-selectividad-en-espagne':
                    $lang_link = route('frontend.sp.page', 'estudiar-selectividad-en-espana');
                    break;

                // ÉTUDIER UNE LICENCE EN ESPAGNE
                case 'etudier-la-licence-en-espagne':
                    $lang_link = route('frontend.sp.page', 'estudiar-la-licenciatura-en-espana');
                    break;

                // ÉTUDIER UN MASTER EN ESPAGNE
                case 'etudier-le-master-en-espagne':
                    $lang_link = route('frontend.sp.page', 'estudia-el-master-en-espana');
                    break;

                // ÉTUDIER LE GRADO SUPERIOR EN ESPAGNE
                case 'etudier-le-grado-superior-en-espagne':
                    $lang_link = route('frontend.sp.page', 'estudiar-el-grado-superior-en-espana');
                    break;

                // ARRAIGO POUR LA FORMATION
                case 'enracinement-pour-la-formation':
                    $lang_link = route('frontend.sp.page', 'arraigo-para-la-formacion');
                    break;

                // ARRAIGO FAMILIALES
                case 'enracinement-familiales':
                    $lang_link = route('frontend.sp.page', 'arraigo-familiar');
                    break;

                // ARRAIGO DU TRAVAIL
                case 'enracinement-du-travail':
                    $lang_link = route('frontend.sp.page', 'arraigo-laboral');
                    break;

                // ARRAIGO SOCIALES
                case 'enracinement-sociales':
                    $lang_link = route('frontend.sp.page', 'arraigo-social');
                    break;

                // RÉSIDENCE NON LUCRATIVE
                case 'residence-non-lucrative':
                    $lang_link = route('frontend.sp.page', 'residencia-no-lucrativa');
                    break;

                // RENOUVELLEMENT DE LA CARTE SÉJOUR (NIE)
                case 'renouvellement-de-la-carte-sejour-nie':
                    $lang_link = route('frontend.sp.page', 'renovacion-de-la-tarjeta-de-residencia-nie');
                    break;

                // RÉSIDENCE EN ESPAGNE POUR LES ÉTUDES
                case 'residence-en-espagne-pour-etudes':
                    $lang_link = route('frontend.sp.page', 'autorizacion-de-estancia-por-estudios');
                    break;

                // RECOURS ADMINISTRATIF
                case 'appel-administratif':
                    $lang_link = route('frontend.sp.page', 'apelacion-administrativa');
                    break;

            }
    
        }elseif ( $page->lang == 'es' ) {

            switch ($page->slug) {

                // PRÉPARATION DE DOSSIER VISA
                case 'preparacion-de-expediente-de-visdao':
                    $lang_link = route('frontend.page', 'preparation-de-dossier-visa');
                    break;

                // QU'EST CE QUE JE PEUX ÉTUDIER EN ESPAGNE?
                case 'estudiar-en-espana':
                    $lang_link = route('frontend.page', 'etudier-en-espagne');
                    break;
                
                // ÉTUDIER EN ESPAGNE SANS SELECTIVIDAD
                case 'Estudiar-en-Espana-sin-Selectividad':
                    $lang_link = route('frontend.page', 'Etudier-en-espagne-sans-Selectividad');
                    break;

                // ETUDIER LA LANGUE EN ESPAGNE
                case 'estudiar-el-idioma-en-espana':
                    $lang_link = route('frontend.page', 'etudier-la-langue-en-espagne');
                    break;

                // ETUDIER LA SELECTIVIDAD EN ESPAGNE
                case 'estudiar-selectividad-en-espana':
                    $lang_link = route('frontend.page', 'etudier-la-selectividad-en-espagne');
                    break;

                // ÉTUDIER UNE LICENCE EN ESPAGNE
                case 'estudiar-la-licenciatura-en-espana':
                    $lang_link = route('frontend.page', 'etudier-la-licence-en-espagne');
                    break;

                // ÉTUDIER UN MASTER EN ESPAGNE
                case 'estudia-el-master-en-espana':
                    $lang_link = route('frontend.page', 'etudier-le-master-en-espagne');
                    break;

                // ÉTUDIER LE GRADO SUPERIOR EN ESPAGNE
                case 'estudiar-el-grado-superior-en-espana':
                    $lang_link = route('frontend.page', 'etudier-le-grado-superior-en-espagne');
                    break;

                // ARRAIGO POUR LA FORMATION
                case 'arraigo-para-la-formacion':
                    $lang_link = route('frontend.page', 'enracinement-pour-la-formation');
                    break;

                // ARRAIGO FAMILIALES
                case 'arraigo-familiar':
                    $lang_link = route('frontend.page', 'enracinement-familiales');
                    break;

                // ARRAIGO DU TRAVAIL
                case 'arraigo-laboral':
                    $lang_link = route('frontend.page', 'enracinement-du-travail');
                    break;

                // ARRAIGO SOCIALES
                case 'arraigo-social':
                    $lang_link = route('frontend.page', 'enracinement-sociales');
                    break;

                // RÉSIDENCE NON LUCRATIVE
                case 'residencia-no-lucrativa':
                    $lang_link = route('frontend.page', 'residence-non-lucrative');
                    break;

                // RENOUVELLEMENT DE LA CARTE SÉJOUR (NIE)
                case 'renovacion-de-la-tarjeta-de-residencia-nie':
                    $lang_link = route('frontend.page', 'renouvellement-de-la-carte-sejour-nie');
                    break;

                // RÉSIDENCE EN ESPAGNE POUR LES ÉTUDES
                case 'autorizacion-de-estancia-por-estudios':
                    $lang_link = route('frontend.page', 'residence-en-espagne-pour-etudes');
                    break;

                // RECOURS ADMINISTRATIF
                case 'apelacion-administrativa':
                    $lang_link = route('frontend.page', 'appel-administratif');
                    break;

            }

        }
         
        
        return $lang_link;
    }
}
