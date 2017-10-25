<?php
/**
 * Game of Life in PHP
 * @package hacker-mom\phpgameoflife
 * @author hacker-mom
 * @since PHP 7.x
 * @license http://opensource.org/licenses/MIT
 *
 */

class Cell{
    protected $x;
    protected $y;
    protected $state;
    protected $newstate;

    public function __construct($x, $y, $state){
        $this->x = $x;
        $this->y = $y;
        $this->state =$state;
    }

    public function setState($state){
        $this->state = $state;
    }

    public function __get($variable){
        return $this->variable;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function persist()
    {
        $this->state = $this->newState;
    }

    public function __toString(){
        if($this->state){
            return '<div class="cell alive"></div>';
        }else{
            return '  <div class="cell"></div>';
        }
    }

}