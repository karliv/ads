<?php

//class ClosureTree
//{
//    protected $closureTable = [];
//    protected $indexTable = [];
//
//    public function __construct(array $table = [])
//    {
//        $this->closureTable = $table;
//        $this->indexClosure();
//    }
//
//    public function closureToAdjanced($node)
//    {
//        if (!isset($this->indexTable['parents'][$node])) {
//            return [];
//        }
//        $level = $this->indexTable['levels']['forward'][$node];
//        $tree = array_intersect(
//            $this->indexTable['parents'][$node],
//            $this->indexTable['levels']['backward'][$level + 1]
//        );
//        $result = count($tree)
//            ? array_combine(
//                $tree,
//                array_fill(1, count($tree), [])
//            )
//            : [];
//        foreach ($result as $child => $subtree) {
//            if (count($this->indexTable['parents'][$child]) > 1) {
//                $result[$child] = $this->closureToAdjanced($child);
//            }
//        }
//        return $result;
//    }
//
////reset index & build it
//    protected function indexClosure()
//    {
//        $this->indexTable = [];
//        foreach ($this->closureTable as $item) {
//            $this->indexTable['parents'][$item['parent']][] = $item['child'];
//            $this->indexTable['childs'][$item['child']][] = $item['parent'];
//            $this->indexTable['levels']['forward'][$item['child']] =
//                isset($this->indexTable['levels']['forward'][$item['child']])
//                    ? $this->indexTable['levels']['forward'][$item['child']] + 1
//                    : 1;
//        }
//        foreach ($this->indexTable['levels']['forward'] as $key => $level) {
//            $this->indexTable['levels']['backward'][$level][] = $key;
//        }
//    }
//}
//
//$data = [
//    ['parent'=>'P', 'child'=>'P'],
//    ['parent'=>'P', 'child'=>'Q'],
//    ['parent'=>'Q', 'child'=>'Q'],
//    ['parent'=>'P', 'child'=>'R'],
//    ['parent'=>'R', 'child'=>'R'],
//    ['parent'=>'P', 'child'=>'S'],
//    ['parent'=>'R', 'child'=>'S'],
//    ['parent'=>'S', 'child'=>'S'],
//    ['parent'=>'P', 'child'=>'T'],
//    ['parent'=>'R', 'child'=>'T'],
//    ['parent'=>'T', 'child'=>'T'],
//    ['parent'=>'P', 'child'=>'U'],
//    ['parent'=>'R', 'child'=>'U'],
//    ['parent'=>'T', 'child'=>'U'],
//    ['parent'=>'U', 'child'=>'U']
//];
//
//
//$tree = new ClosureTree($data);
//var_dump($tree->closureToAdjanced('P'));
















//function isPalindrome($w){
//    for($i = 0, $l = strlen($w)-1, $il = ceil($l/2); $i < $il; ++$i) {
//        if ($w[$i] != $w[$l - $i])
//            return false;
//    }
//
//    return true;
//}
//
//$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
// ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
//  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
//   esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
//    sunt in culpa qui officia deserunt mollit anim id est laborum.';
//
//preg_match_all('/\b(\w{5})\b/i', $text, $m);
//for($i = 0, $il = sizeof($m[1]); $i < $il; ++$i) {
//    if (isPalindrome($m[1][$i]))
//        echo $m[1][$i], '<br />'; // а можно и в массив записать, чтобы использовать в дальнейшем
//}


function Palindrome($string) {

    if ((strlen($string) == 1) || (strlen($string) == 0)) {
        return " STRING IS PALINDROME";
    }

    else {

        if (substr($string,0,1) == substr($string,(strlen($string) - 1),1)) {
            return Palindrome(substr($string,1,strlen($string) -2));
        }
        else { return " STRING IS NOT A PALINDROME"; }
    }
}

$text2 = 'minim';
echo Palindrome($text2);