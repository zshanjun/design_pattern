<?php

/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 9:25
 */
class SportLesson implements LessonStrategy
{
    public function cost(Lesson $lesson)
    {
        return $lesson->discount * $lesson->num * 300;
    }

    public function type(Lesson $lesson)
    {
        return '你购买了'.$lesson->type.'体育课程';
    }
}