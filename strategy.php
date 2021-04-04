<?php



/*

[ my understand ]

This pattern jsut help you change the context, or a object method of the code 
at runtime of the program, like change the algoritms;

*/

$data = array(1,2,3,5,46,5,65,76,8,68,7,87,8,79,9);

class QuickSort {

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function sort(){
        echo $this->data;
    }
}

class MergeSort {

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function sort(){
        echo $this->data. " wowo ";
    }
}

function sortArr(Array &$data){
    if(count($data) > 20){
        $tempData = new QuickSort($data);
    }else{
        $tempData = new MergeSort($data);
    }

    $tempData->sort();
}


sortArr($data);


?>