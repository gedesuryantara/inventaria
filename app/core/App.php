<?php 


class App {

    protected $controller = 'Home';
    protected $method = 'index';  //properti
    protected $params = [];

    public function __construct() //method
    {
        $url = $this->parseURL();

        // controller
        if( isset($url[0]) ) {
            if( file_exists('../app/controllers/' . $url[0] . '.php') ) { //mencari file yang telah diinputkan ke url dan mencari file tersebut di dalam file app controller
                $this->controller = $url[0]; // jika tidak ada berarti akan membuat controller baru dan menimpa controller lama
                unset($url[0]); // menghilangkan controller dari element array 
            }
        }

        require_once '../app/controllers/' . $this->controller . '.php'; // membuat controler baru
        $this->controller = new $this->controller; // instaniasi controller baru

        // method 
        if( isset($url[1]) ) { // mengecek controller apakah ada atau tidak 
            if( method_exists($this->controller, $url[1]) ) { // mengecehck method
                $this->method = $url[1]; // kalau ada menimpa method dari method sebelumnya
                unset($url[1]);
            }
        }

        // params
        if( !empty($url) ) {
            $this->params = array_values($url);
        }

        // jalankan Controller dan method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    public function parseURL() //method
    {
        if( isset($_GET['url']) ) {
            $url = rtrim($_GET['url'], '/'); //ambil url dari get
            $url = filter_var($url, FILTER_SANITIZE_URL); //memfilter url supaya tidak ada huruf aneh
            $url = explode('/', $url); //memfilter string menjadi array
            return $url;
        }
    }

}