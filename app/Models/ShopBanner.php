<?php
#app/Models/ShopBanner.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopBanner extends Model
{
    public $table = 'shop_banner';
    protected $guarded = [];

/**
 * Get banner status ON
 * @param  integer $limit
 * @param  string  $orderBy field
 * @param  string  $sort    asc|desc
 */
    public static function getAllOn($limit = 8, $orderBy = 'id', $sort = 'desc')
    {
        return self::where('status', 1)->orderBy($orderBy, $sort)
            ->limit($limit)->get();
    }
/*
Get thumb
 */
    public function getThumb()
    {
        return sc_image_get_path_thumb($this->image);
    }

/*
Get image
 */
    public function getImage()
    {
        return sc_image_get_path($this->image);

    }
//Scort
    public function scopeSort($query, $column = null)
    {
        $column = $column ?? 'sort';
        return $query->orderBy($column, 'asc')->orderBy('id', 'desc');
    }

}
