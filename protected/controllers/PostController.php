<?php
/**
 * Created by PhpStorm.
 * User: dmitry.zaicev
 * Date: 26.06.14
 * Time: 13:15
 */

class PostController {

    public function accessRules()
    {
        return array(
            array('allow',  // позволим всем пользователям выполнять действия 'list' и 'show'
                'actions'=>array('index', 'view'),
                'users'=>array('*'),
            ),
            array('allow', // позволим аутентифицированным пользователям выполнять любые действия
                'users'=>array('@'),
            ),
            array('deny',  // остальным запретим всё
                'users'=>array('*'),
            ),
        );
    }

} 