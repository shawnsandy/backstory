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


        public function title($placeholder = 'Enter a catchy title for your story', $size = ['is-large', 'input'])
        {

            return html()->text('title')->class($size)->placeholder($placeholder);
        }

        public function introduction($placeholder = 'Pitch (introduce) the story', $class = ['textarea'])
        {
            return html()->textarea('introduction')->class($class)->placeholder($placeholder);
        }

        public function content($placeholder = 'Lets write the next block buster', $class = ['textarea', 'content'])
        {
            return html()->textarea('content')->class($class)->placeholder($placeholder);
        }

        /**
         * Marks a story as featured
         *
         * @param mixed $value
         * @return void
         */
        public function featured($value = null)
        {
            return html()->select('featured', $options = [ null => '', '1' => 'Yes', '0' => 'No'], $value)
            ->class('select is-fullwidth');
        }

        public function type($value = null)
        {
            return html()->select('type', config("backstory.story_types"), $value)
            ->class('select is-fullwidth');
        }

        /**
         * Story status select field set the status of your post
         *
         * @param string $value
         * @return void
         */
        public function status($value = null)
        {
            return html()->select('status', config("backstory.story_status"), $value)
            ->class('select is-fullwidth');
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
                //$model = Story::with('author')->where("id", $model)->first();
            return html()->modelForm($model, 'PUT', "/story/create/{$model->id}")
            ->acceptsFiles()->open();
            endif;

            return html()->form('POST', "/story/create")->acceptsFiles()->open();

        }

        /**
         * Create the Form close from tag for story
         *
         * @param boolean $close_model
         * @return void
         */
        public function formClose($close_model = false)
        {
            if($close_model)
            return html()->closeModelForm();

            return html()->form()->close();

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

            return html()->select('status', $categories, $value)
            ->class('select is-fullwidth');
        }


        public function latestStories($limit =20)
        {

            return Story::latest()->take($limit)->get();

        }



    }
