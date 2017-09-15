<?php

namespace Portal\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Portal\Models\Configuracao
 *
 * @property int $id
 * @property string $titulo
 * @property string $email
 * @property string $url_site
 * @property string $telefone
 * @property string $horario_atendimento
 * @property string $endereco
 * @property string $rodape
 * @property string $facebook
 * @property string $twitter
 * @property string $google_plus
 * @property string $youtube
 * @property string $instagram
 * @property string $palavra_chave
 * @property string $descricao_site
 * @property string $og_tipo_app
 * @property string $og_titulo_site
 * @property string $od_url_site
 * @property string $od_autor_site
 * @property string $facebook_id
 * @property string $token
 * @property string $analytcs_code
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereTitulo($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereUrlSite($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereTelefone($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereHorarioAtendimento($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereEndereco($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereRodape($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereFacebook($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereTwitter($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereGooglePlus($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereYoutube($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereInstagram($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao wherePalavraChave($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereDescricaoSite($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereOgTipoApp($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereOgTituloSite($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereOdUrlSite($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereOdAutorSite($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereFacebookId($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereToken($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereAnalytcsCode($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Portal\Models\Configuracao whereDeletedAt($value)
 * @mixin \Eloquent
 */
class Configuracao extends Model implements Transformable
{
    use TransformableTrait, Auditable, SoftDeletes;

    protected $fillable = [
        'titulo', 'email', 'url_site', 'telefone', 'horario_atendimento', 'endereco', 'rodape',
        'facebook', 'twitter', 'google_plus', 'youtube', 'instagram', 'palavra_chave', 'descricao_site',
        'og_tipo_app', 'og_titulo_site', 'od_url_site', 'od_autor_site', 'facebook_id', 'token', 'analytcs_code'
    ];

    protected  $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];

}
