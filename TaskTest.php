<?php
class TaskTest extends PHPUnit_Framework_TestCase
{
    public function testTitle()
    {
        $task  = new Task;
        $title = 'Teste';
        $task->setTitle($title);
        $this->assertEquals($title, $task->getTitle());
        $this->assertEquals($title, (string) $task);
    }
}