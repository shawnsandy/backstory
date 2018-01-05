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
		return $this->belongsTo(User::class, 'user_id');
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
			}
			]);

		}
		return null;

	}

    /**
     * Find stories by category id
     *
     * @param [type] $query
     * @param [type] $id
     * @return void
     */
	public function scopeHasCategory($query, $id)
	{
		return $query->with('categories', 'author')->whereHas('categories', function($qry) use($id) {

			$qry->where('id', $id);

		}
		);
	}




	/**
	* Find category by name
	     *
	     * @param mixed $query
	     * @param string $name
	     * <code> Story::categoryName('general')->get();
	</code>
	     *
	     * @return void
	     */
	    public function scopeCategoryName($query, $name = null)
	    {
		if(!is_null($name)) {

			return $query->with(['categories' => function($query) use ($name){
				$query->where('name', $name);
			}
			]);

		}
		return null;

    }


    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }


    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }


    public function scopePublished($query)
    {

        return $query->where('status', 'PUBLISHED');

    }

    public function scopeFullStory($query)
    {
        return $query->with(['author', 'categories']);
    }

    public function getCategoryAttribute(){

		return $this->categories->pluck(['id']);

	}

	public function getByAttribute()
	    {
		return $this->author->name;
	}

	public function getCoverThumbnailAttribute()
	    {
		// 		return "/imgfly/public/".$this->cover_photo.config("backstory.img.thumbs");
		return backstory()->imgFly($this->cover_photo);
	}

	public function getCoverAttribute()
	    {

		if($this->cover_photo)
		        return backstory()->imgFly($this->cover_photo, 'cover');

    }


}
