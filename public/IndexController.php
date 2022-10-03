<?php

//urls
// http://localhost:7200
// http://localhost:7200/index.php?index/list?type=1
// http://localhost:7200/index.php?index/detail?id=1

class IndexController
{
    public function actionIndex()
    {
        // $conn = new mysqli('localhost', 'root', 'root', 'test', 33060) or die('Error : ' . mysqli_connect_error());
        // var_dump($conn->host_info);
        // exit;
        // var_dump($conn);
        // exit;
        // $sql = 'select count(*), type, name from blogs group by type';
        // $ret = $conn->query($sql);
        // $rows = $ret->fetch_all(MYSQLI_ASSOC);
        // var_dump($rows);

        // $conn->close();

        // $user = 'root';
        // $pass = 'root';

        // try {
        //     $dbh = new PDO('mysql:host=localhost:33060;dbname=test', $user, $pass);
        //     var_dump($dbh);
        //     exit;
        //     foreach($dbh->query('SELECT * from blogs') as $row) {
        //         print_r($row);
        //     }
        //     $dbh = null;
        // } catch (PDOException $e) {
        //     print "Error!: " . $e->getMessage() . "<br/>";
        //     die();
        // }

        // 查询数据库一直报错，解决办法TBD
        

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
        require_once dirname(__DIR__) . '/views/index/index.html';
    }

    public function actionTest()
    {
        echo "this is IndexController test action";
    }

    public function actionList()
    {

        $queryString = $_SERVER ['QUERY_STRING'];
        $realQueryString = explode('?', $queryString);
        $params = explode('=', $realQueryString[1]);
        $type = $params[1];
        // var_dump($type);
        // exit;
        // exit;

        // mock data
        $list = [
            [
                'id' => 1,
                'type' => 2,
                'title' => 'this is title',
                'content' => 'this is content',
                'created_at' => '2022-09-15 18:20:00',
            ],
            [
                'id' => 2,
                'type' => 2,
                'title' => 'this is title',
                'content' => 'this is content',
                'created_at' => '2022-09-15 18:20:00',
            ],
            [
                'id' => 3,
                'type' => 2,
                'title' => 'this is title',
                'content' => 'this is content',
                'created_at' => '2022-09-15 18:20:00',
            ],
        ];

        require_once dirname(__DIR__) . '/views/index/list.html';
    }

    public function actionDetail()
    {
        $row = [
            'id' => 3,
            'title' => 'this is title',
            'content' => 'this is content',
            'created_at' => '2022-09-15 18:20:00',
        ];
        require_once dirname(__DIR__) . '/views/index/detail.html';
    }
}