<?php
    class Movie
    {
        public $title;
        public $genres;
        public $director;

        function __construct($_title, array $genres,  $_director)
        {
            $this->title = $_title;
            $this->genres = $genres;
            $this->director = $_director;
        }

        function get_title()
        {
            return $this->title;
        }

        function get_All_genres()
        {
            $generi='';

            foreach($this->genres as $genre){
                $generi .= $genre .'<br />';
            }
    
            return $generi;
        }
        function get_director()
        {
            return $this->director;
        }

    }

?>