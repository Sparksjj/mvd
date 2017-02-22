<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['inventory_number', 'type', 'storage', 'title_ru', 'category_id', 'description_ru'];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
	public function sources()
	{
		return $this->hasMany('App\Source');
	}
    public function join_documents() {
        return $this->belongsToMany('App\Document', 'documents_documents', 'document_id_from', 'document_id_to');
    }
}