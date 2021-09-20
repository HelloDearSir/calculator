
<?php
$result = "";
class calc
{
    var $a;
    var $b;


    function oper($operate)
    {
        switch ($operate) {
            case 'x':
                return $this->a * $this->b;
                break;

            case '-':
                return $this->a - $this->b;
                break;

            case '/':
                return $this->a / $this->b;
                break;

            case '+':
                return $this->a + $this->b;
                break;
        }
    }
    function results($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->oper($c);
    }
}

$cal = new calc();
if (isset($_POST['submit'])) {
    $result = $cal->results($_POST['num1'], $_POST['num2'], $_POST['ops']);
}

?>