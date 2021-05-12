<?php
class Stack {
    private $data = [];
    private $limit = 5;

    //push: đưa vào
    public function push( $element ){
        if( !$this->isFull() ){
            array_unshift( $this->data, $element );
        }else{
            throw new Exception('Hộp đầy rồi !');
        }
        
    }

    //pop: lấy ra
    public function pop(){
        if( $this->isEmpty() ){
            throw new Exception('Hộp rỗng');
        }else{
            return array_shift( $this->data );
        }
    }

    public function isFull(){
        if( count( $this->data ) < $this->limit ){
            return false;
        }else{
            return true;
        }
    }

    public function isEmpty(){
        if( count( $this->data ) == 0 ){
            return true;
        }else{
            return false;
        }
    }
}

$objStack = new Stack();
$objStack->push('Hùng');
$objStack->push('Đạt');
$objStack->push('Anh Hà');
$objStack->push('Châu');
$objStack->push('Hoàn');
//$objStack->push('Ngọc Anh');

echo '<br>'.$objStack->pop(); //Lấy hoàn
echo '<br>'.$objStack->pop(); //Lấy Châu
echo '<br>'.$objStack->pop(); //Lấy Anh Hà
echo '<br>'.$objStack->pop(); //Lấy Đạt
echo '<br>'.$objStack->pop(); //Lấy Hùng
echo '<br>'.$objStack->pop(); //
echo '<br>'.$objStack->pop(); //

/*
    Hoàn
    Châu
    Anh Hà
    Đạt
    Hùng
*/

/*
[0] => Hoàn
[1] => Châu
[2] => Anh Hà
[3] => Đạt
[4] => Hùng
*/

