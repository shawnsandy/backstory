<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 2/22/2017
     * Time: 10:03 PM
     */

    namespace ShawnSandy\Backstory;

    use ShawnSandy\Backstory\App\StoryCategory;
    use ShawnSandy\Backstory\App\Story;
    use Illuminate\Support\Facades\Storage;
    use Collective\Html\FormFacade as Forms;

    class Backstory
    {

        public function routes(){
            require  __DIR__.'/routes.php';
        }

        public function formClass($class = [])
        {
            if(empty($class));
            $class = config("backstory.form_class");

            return $class;

        }

        public function label($name, $label_for, $class = 'label')
        {
            return html()->label($name, $label_for)->class($class);
        }

        public function input($name, $class  = [])
        {
            return html()->text('title')->class(['input', 'is-large']);
        }

        public function email($name, $class  = ['input'])
        {
            return html()->email($name)->class($class);
        }


        public function textarea($name, $value = null, $class  = ['input'])
        {
            return html()->textarea($name, $value)->class(config($class));
        }

        public function checkbox($name, $checked = false, $value = 1)
        {
            return html()->checkbox($name)->checked($checked)->class($this->formClass());
        }


        public function title($placeholder = 'Enter a catchy title for your story', $class = 'is-large input')
        {

//            return html()->text('title')->class($size)->placeholder($placeholder);
            return Forms::text('title', null,  ["class" => $class, "placeholder" => $placeholder]);

        }

        public function introduction($placeholder = 'Pitch (introduce) the story', $class = 'textarea is-medium')
        {
//            return html()->textarea('introduction')->class($class)->placeholder($placeholder);
            return Forms::textarea('introduction', null, ['class' => $class, 'placeholder' => $placeholder]);
        }

        public function content($placeholder = 'Lets write the next block buster', $class = ['textarea', 'content', 'is-medium'])
        {
            return Forms::textarea('content', null, ['id' => 'content', 'class' => 'textarea content is-medium'] );
        }

        /**
         * Marks a story as featured
         *
         * @param mixed $value
         * @return void
         */
        public function featured($value = null)
        {
           // return html()->select('featured', , $value)
           // ->class('select is-fullwidth')->placeholder('Would you like this story featured');
        return Forms::select('featured', ['1' => 'Yes', '0' => 'No'], null, ['class' => 'select is-fullwidth', 'id' => 'featured'] );
        }

        public function type($value = null)
        {
            // return html()->select('type', config("backstory.story_types"), $value)
            // ->class('select is-fullwidth')->placeholder('Select a story type');
            return Forms::select('type', config("backstory.story_types"), null, ['id' => "type", 'class' => 'select is-fullwidth']);
        }

        /**
         * Story status select field set the status of your post
         *
         * @param string $value
         * @return void
         */
        public function status($value = null)
        {
            // html()->select('status', config("backstory.story_status"), $value)
            // ->class('select is-fullwidth is-medium');
            return Forms::select('status', config("backstory.story_status"), null, ['id' => "status", 'class' => 'select is-fullwidth']);
        }


        /**
         * Creates the form open tag for a new story
         *
         * @param array $model
         * @return void
         */
        public function newForm($model = null)
        {
            if(!is_null($model)):
            return Forms::model($model, ['url' => "/story/create/{$model->id}", "method" => "put", 'files' => true]);
            endif;

            return Forms::open(['url' => "/story/create", 'method' => 'post', 'files' => true]);
        }

        /**
         * Create the Form close from tag for story
         *
         * @param boolean $close_model
         * @return void
         */
        public function formClose($close_model = false)
        {
            Forms::close();
        }

         /**
         * Story categories select field
         *
         * @param string $value
         * @return void
         */
        public function category($categories = [], $value = null)
        {
            if(empty($categories))
            $categories = StoryCategory::pluck('name', 'id');

            // return html()->multiselect('category', $categories, $value)
            // ->class('is-fullwidth', 'is-medium');
            return Forms::select('category', $categories, null, ['id' => 'category', 'class' => 'select is-fullwidth', 'multiple']);
        }


        /**
         * Get the latest stories
         *
         * @param integer $limit
         * @return void
         */
        public function latestStories($limit =20)
        {
            return Story::latest()->take($limit)->get();
        }

        /**
         * Get the images from
         *
         * @param string $disk
         * @param string $directory
         * @return array
         */
        public function getImgs($disk = 'images', $directory = 'img')
        {
            return Storage::disk($disk)->files($directory);
        }

        public function imgFly($image, $size = 'small')
        {
            return "/imgfly/public/$image".config("backstory.img.$size");
        }


    }
