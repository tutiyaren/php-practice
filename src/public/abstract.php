<?php
// abstractについてのコード例

// 抽象クラス
abstract class ParentClass
{
    protected $parent = '親の抽象クラス';

    public function nomal() {
        echo $this->parent;
    }

    // 子クラス（継承メソッド）でオーバーライドする必要がある
    abstract public function abstract_method(int $id): string;
}

// 子クラス
class Child extends ParentClass
{
    protected $children = '子で定義した文字列'; // 今回の出力

    // 親クラスのメソッドをオーバーライド
    public function abstract_method(int $id): string {
        return $this->children;
    }
}

$child = new Child();
$id = 15;
echo $child->abstract_method($id);


// abstract class 抽象クラス名で、抽象クラスを定義する。
// １つの子クラスにつき、１つの親クラスのみしか継承できない（単一継承）
// 抽象クラスは継承することを前提として使用するため、抽象クラスのインスタンス化はできない。
// class 継承先のクラス名 extends 抽象クラス名という書き方で継承できる。
// 抽象メソッドにはメソッド名、返り値の型、引数のみしか指定できない。(引数と返り値の型は任意)
// 抽象メソッドはabstract アクセス修飾子 function 抽象メソッド名(引数の型 引数): 返り値の型;という構文からなる。
// 抽象クラスのメソッドを継承先のクラスですべて使用する必要はないが、抽象メソッドで定義したものについては必ず継承先のクラスでオーバーライドする必要がある。
// 抽象メソッドとは対照的に抽象プロパティは存在しない