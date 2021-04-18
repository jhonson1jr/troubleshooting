<?php namespace Model\Contract;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model {

    protected $table = 'contract';
    public $primaryKey = 'contract_id';
    public $timestamps = false;
    
    protected $keyType = 'string';
    
    public function contract()
    {
        return $this->belongsTo('Model\Customer\Customer', 'customer_id', 'customer_id');
    }

    public function items()
    {
        return $this->hasMany('Model\ContractItems\Item', 'contract_id', 'contract_id');
    }

    public function scopeFields($query)
    {
        return $query->select('contract_id AS id', 'customer_id','description');
    }
}