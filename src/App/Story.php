<?php

namespace ShawnSandy\Backstory\App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{

    protected $fillable = [
        'title',
        'content',
        'content_plain',
        'introduction',
        'cover_photo',
        'status',
        'type',
        'tags',
    ];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(StoryCategory::class);
    }

    public function attachments()
    {
        return $this->belongsToMany(StoryAttachment::class);
    }

    public function options()
    {
        return $this->hasMany(StoryOption::class);
    }

    /**
     * Find category by id
     *
     *
     * @param mixed $query
     * @param string $tag
     * <code> Story::getTag('red')->get();</code>
     * @return void
     */
    public function scopeGetTag($query, $tag = null)
    {
        if(is_null($tag))
        return null;

        return $query->where('tags', 'like', "%{$tag}%");
    }

    /**
     * Find category by Id
     *
     * @param mixed $query
     * @param string $id
     * <code>Story::categoryId(1)->get();</code>
     *
     * @return void
     */
    public function scopeCategoryId($query, $id = null)
    {
        if(!is_null($id)) {

            return $query->with(['categories' => function($query) use ($id){
                $query->where('id', $id);
            }]);

        }
        return null;

    }

    /**
     * Find category by name
     *
     * @param mixed $query
     * @param string $name
     * <code> Story::categoryName('general')->get();</code>
     *
     * @return void
     */
    public function scopeCategoryName($query, $name = null)
    {
        if(!is_null($name)) {

            return $query->with(['categories' => function($query) use ($name){
                $query->where('name', $name);
            }]);

        }
        return null;

    }

    public function getCategoryAttribute(){

       return $this->categories->pluck(['id']);

    }

    public function getCoverThumbnailAttribute()
    {
    //    return "/imgfly/public/".$this->cover_photo.config("backstory.img.thumbs");
        return backstory()->imgFly($this->cover_photo);
    }


}
