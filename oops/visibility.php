<?php
class foo {
    private function m() {
        echo 'foo->m() ';
    }
    public function call() {
        $this->m();
    }
}

class bar extends foo {
    private function m() {
        echo 'bar->m() ';
    }
    public function callbar() {
        $this->m();
    }
}

$bar = new bar;

$bar->call();
$bar->callbar();