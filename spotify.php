<?php
class Song
{
    public $artist;
    public $title;
    public $duration;

    public function __construct($artist, $title, $duration)
    {
        $this->artist = $artist;
        $this->title = $title;
        $this->duration = $duration;
    }
}

class Playlist
{
    public $songs = array();
    public $totalMedias = 0;

    public function addMedia(Song $song)
    {
        $this->songs[] = $song;
        $this->totalMedias++;
    }

    public function __toString()
    {
        $totalSeconds = 0;
        foreach($this->songs as $song) {
            list($minutes, $seconds) = explode(':', $song->duration);
            $totalSeconds += $minutes * 60 + $seconds;
        }

        $hours = floor($totalSeconds / 3600);
        $minutes = floor(($totalSeconds / 60) % 60);
        $seconds = $totalSeconds % 60;

        return 'Songs added: '.$this->totalMedias."\nPlaylist length: ".$hours.'h '.$minutes.'m '.$seconds.'s';
    }
}

class App
{
    private $content;

    public function setContent($content) 
    {
        $this->content = $content;
    }

    public function start()
    {
        $playlist = new Playlist();

        foreach($this->content as $line) {
            list($artist, $title, $duration) = explode(';', $line);
            $song = new Song(trim($artist), trim($title), trim($duration));
            $playlist->addMedia($song);
        }

        echo $playlist;
    }

//     setContent(array) : sets the content to what is passed as parameter
// readLine(bool): read the contents of the output buffer
// write(string): write a new line with in the output buffer


   public function readLine($bool = false)
    {
        if ($bool) {
            return fgets(STDIN);
        } else {
            return trim(fgets(STDIN));
        }
    }

    public function write($string)
    {
        echo $string . PHP_EOL;
    }

    public function writeLine($string)
    {
        echo $string;
    }
}

$app = new App();
$app->setContent(["ABBA;Mamma Mia;3:35\n", "Harry Styles;Watermelon Sugar;2:54\n", "LF SYSTEM;Affraid To Feel;2:58"]);
$app->start();
?>