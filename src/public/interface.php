<?php
// interfaceについてのコード例

// インターフェースの宣言
interface test1 
{
    public function interface_method1();
}
interface test2 
{
    public function interface_method2(int $id): string;
}

// インターフェースを実装、子クラス(継承)
class Child implements test1, test2
{
    protected $child1 = "継承クラスで定義１";
    protected $child2 = "継承クラスで定義２";

    // インターフェースで宣言したメソッドをすべてオーバーライド
    public function interface_method1() {
        return $this->child1;
    }
    public function interface_method2(int $id): string {
        return $this->child2;
    }
}

$item = new Child();
$id = 42;
echo $item->interface_method1(); //実装結果　子クラス（継承）クラスで定義１
echo "<br>";
echo $item->interface_method2($id);//実装結果　子クラス（継承）クラスで定義２

// インターフェースはメソッド名、引数、返り値の型のみしか宣言できない。(プロパティの宣言は不可）
// interface インターフェース名で宣言する
// アクセス修飾子はpublicのみしか使用できない
// 実装（継承）にはclass 継承クラス名 implements インターフェース名という書き方をする。
// インターフェースは複数のインターフェースを実装することができる。（複数継承）
// インターフェースはクラスではないのでインスタンス化はできない。
// インターフェースで宣言したメソッドは全てオーバーライドする必要がある。