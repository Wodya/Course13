<?php
// Обратная польская нотация через дерево
// Идея такова, что более приоритетные идут налево, менее приоритетные направо.
// Таким образом осуществив LNR выбрем все операции в порядке приоритета
// Для формирования польской нотации используется очередь, для обратной польской нотации нужно использовать стэк
// Для вычисления выражения используется стэк, куда кладутся числа и результаты вычислений

use JetBrains\PhpStorm\Pure;
/**
 * Class Node
 * Node $left
 * Node $right
 * array $numbers
 * int $priority
 */
class Node{
    public $operand;
    public $left;
    public $right;
    public $numbers = [];
    public $priority;

    public function __construct($operand, $priority)
    {
        $this->operand = $operand;
        $this->priority = $priority;
    }
}
/**
 * Class Tree
 * Node $root;
 * int $priority;
 * int $value
 */
class Tree{
    public $root;
    private SplQueue $queue;

    public function Add(string $operand, int $priority): Node
    {
        $node = new Node($operand, $priority);
        $this->AddNode($node, $this->root);
        return $node;
    }
    public static function Compare(Node $node1, Node $node2) : bool
    {
        if($node1->priority != $node2->priority)
            return $node1->priority > $node2->priority;
        $opPriority1 = self::getPriority($node1->operand);
        $opPriority2 = self::getPriority($node2->operand);
        return $opPriority1 >= $opPriority2;
    }
    private static function getPriority(string $operand) : int
    {
        if($operand === "^")
            return 2;
        if(in_array($operand, ['*','/']))
            return 1;
        return 0;
    }
    private function AddNode(Node $node, ?Node &$sub){
        if($sub === null)
            $sub = $node;
        else if(static::Compare($sub, $node))
            $this->AddNode($node, $sub->right);
        else
            $this->AddNode($node, $sub->left);
    }
    // Обход дерева LNR
    public function TraversLNR() : SplQueue
    {
        $this->queue = new SplQueue();
        if($this->root != null)
            $this->TraversLNRInternal($this->root);
        return $this->queue;
    }
    private function TraversLNRInternal(?Node $node)
    {
        if($node == null)
            return;
        $this->TraversLNRInternal($node->left);
        foreach ($node->numbers as $number)
            $this->queue->enqueue($number);
        $this->queue->enqueue($node->operand);
        $this->TraversLNRInternal($node->right);
    }
}
// Формирование очереди для польской нотации
function PolishNotation(string $formulaStr) :SplQueue
{
    //Все операции с меньшим или равным приоритетом идут направо от текущей, а с большим налево. Числа вписываем в ноду. Потом используем обход LNR
    $number = null;
    $formula = str_split($formulaStr);
    $priority = 0;
    $tree = new Tree();
    $lastNode = null;
    for ($pos = 0; $pos < count($formula); $pos++) {
        $char = $formula[$pos];
        if ($char === ' ')
            continue;
        if (is_numeric($char))
            $number = 10*($number??0) + $char;
        else {
            if ($char === '(')
                $priority++;
            elseif ($char === ')') {
                $priority--;
                if ($lastNode !== null)
                    $lastNode->numbers[] = $number;
                $lastNode = null;
                $number = null;
            } else {
                $node = $tree->Add($char, $priority);
                if($number !== null){
                    if ($lastNode !== null && Tree::Compare($lastNode, $node))
                        $lastNode->numbers[] = $number;
                    else
                        $node->numbers[] = $number;
                }
                $number = null;
                $lastNode = $node;
            }
        }
    }
    if ($number !== null && $lastNode !== null)
        $lastNode->numbers[] = $number;

    return $tree->TraversLNR();
}

// Вычисление результата
function CalculateQueue(SplQueue $queue):int
{
    $stackNumbers = new SplStack();
    while($queue->count() > 0){
        $item = $queue->dequeue();
        if (is_numeric($item))
            $stackNumbers->push(+$item);
        else{
            $num2 = $stackNumbers->pop();
            $num1 = $stackNumbers->pop();
            $result = operate($num1, $num2, $item);
            $stackNumbers->push($result);
        }
    }
    return $stackNumbers->pop();

}
function operate(int $num1, int $num2, string $operand) : int
{
    if($operand == "+")
        return $num1 + $num2;
    if($operand == "-")
        return $num1 - $num2;
    if($operand == "*")
        return $num1 * $num2;
    if($operand == "/")
        return $num1 / $num2;
    if($operand == "^")
        return pow($num1, $num2);
}

$queue = PolishNotation('(10+42)^2+7*5-3');
foreach ($queue as $item)
    echo $item . " ";
$result = CalculateQueue($queue);
echo PHP_EOL . "Результат = {$result}";
