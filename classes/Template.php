<?php class Template{
    //Path to template
    protected $template;
    //Vars passed in
    protected $vars=array();

    //Constructor
    public function __construct($template){
        $this->template=$template;
    }

    //Get 
    public function __get($key){
        return $this->vars[$key];
    }

    //Set
    public function __set($key,$value){
        $this->vars[$key]=$value;
    }

    //To string
    public function __toString(){
        extract($this->vars);
        chdir(dirname($this->template));
        ob_start();

        include basename($this->template);

        return ob_get_clean();
    }
}

?>