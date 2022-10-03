<?php

//urls
// http://localhost:7200
// http://localhost:7200/index.php?index/list?type=1
// http://localhost:7200/index.php?index/detail?id=1

class SiteController
{
    public function actionIndex()
    {
        // 渲染试图
        $list = [
            [
                'count' => 1,
                'type' => 1,
                'name' => '分类1',
            ],
            [
                'count' => 2,
                'type' => 2,
                'name' => '分类2',
            ],
            [
                'count' => 3,
                'type' => 3,
                'name' => '分类3',
            ],
        ];
        require_once dirname(__DIR__) . '/views/site/index.php';
    }

    public function actionList()
    {
        $row = [
            'id' => 3,
            'title' => 'this is title',
            'content' => 'this is content',
            'created_at' => '2022-09-15 18:20:00',
        ];
        
        echo json_encode($row);
    }
}