<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
        /* 去掉邊框重疊 */
    }

    table,
    th,
    td {
        border: 1px solid black;
        /* 設定表格及單元格邊框 */
    }

    th,
    td {
        padding: 8px;
        /* 設定單元格內邊距 */
        text-align: left;
        /* 文字左對齊 */
    }
    </style>
</head>

<body>
    <table>


        <?php
    
    $datas = [
        [   
            "id" => 1,
            "name" => "台北",
            "mobile" => "0911-111-111",
            "address" => "台北中正路1號"
        ],
        [
            "id" => 2,
            "name" => "台中",
            "mobile" => "0922-222-222",
            "address" => "台中中正路1號"
        ],
        [
            "id" => 3,
            "name" => "高雄",
            "mobile" => "0933-333-333",
            "address" => "高雄中正路1號"
        ]
    ];
    function dd($d){
        echo "<pre>";
        echo print_r($d);
        echo "</pre>";    
    }
    dd($datas);
    
    foreach ($datas as $keys => $value) {
        echo "<tr>";
        echo "<td>".$value['id']."</td>";
        echo "<td>".$value['name']."</td>";
        echo "<td>".$value['mobile']."</td>";
        echo "<td>".$value['address']."</td></tr>";
    }
    ?>
    </table>
    <!-- <script>
    object = {
        name: "台北",
        mobile: "0911-111-111",
        address: "台北中正路1號"
    };
    </script> -->
</body>

</html>