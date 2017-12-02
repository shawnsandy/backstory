<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 2/22/2017
     * Time: 10:03 PM
     */

    namespace ShawnSandy\Backstory;


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

        public function featured($value = null)
        {
            return html()->select('featured', $options = [ null => '', '1' => 'Yes', '0' => 'No'], $value)
            ->class('select');
        }

        public function type($value = null)
        {
            return html()->select('type', $options = [
                 null => '',
                 'post' => 'Post',
                 'article' => 'Article',
                'podcast' => 'Podcast'
                ], $value)
            ->class('select');
        }

        public function status($value = null)
        {
            return html()->select('status', $options = [
                 null => '',
                 'DRAFT' => 'DRAFT',
                 'PUBLISHED' => 'PUBLISHED',
                 'REVIEW' => 'PENDING REVIEW',
                'ARCHIVED' => 'ARCHIVED'
                ], $value)
            ->class('select');
        }

    }
