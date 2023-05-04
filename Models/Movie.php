<?php
    class Movie
    {
        public $title;
        public $genre;
        public $director;

        function __construct($_title, $_genre,  $_director)
        {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->director = $_director;
        }

        function get_title()
        {
            return $this->title;
        }

        function get_genre()
        {
            return $this->genre;
        }
        function get_director()
        {
            return $this->director;
        }

    }

?>