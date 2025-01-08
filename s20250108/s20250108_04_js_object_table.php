<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Data Table</h2>

        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>mobile</th>
                    <th>address</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <td>2</td>
                    <td>台中店</td>
                    <td>0922</td>
                    <td>台中市中正路2號</td>
                </tr> -->
            </tbody>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
    $(document).ready(function() {
        // $.ajax({
        //      type: "method",
        //      url: "url",
        //      data: "data",
        //      dataType: "dataType",
        //      success: function (response) {
        //          data = response.data;
        //              // foreach append 
        //      }
        // });


        let data = [{
                'id': '1',
                'name': '台北店',
                'mobile': '0911-111-111',
                'address': '台北市中正路1號'
            },
            {
                'id': '2',
                'name': '台中店',
                'mobile': '0922-222-222',
                'address': '台中市中正路2號'
            },
            {
                'id': '3',
                'name': '高雄店',
                'mobile': '0933-333-333',
                'address': '高雄市中正路3號'
            },
        ]
        console.log('data', data);

        // 1.bind
        const myTable = $('#myTable');
        const myTbody = myTable.find('tbody');
        console.log('myTable', myTable);
        console.log('myTbody', myTbody);

        // 2.action
        // data -> append table

        // 方法一
        .class
        $(selector).each(function(index,element){
        element == this
        })

        // 方法二
        $.each(data, function(key, value) {
            console.log('key', key);
            console.log('value', value);

            let tmp = `
            <tr>
                <td>${value['id']}</td>
                <td>${value['name']}</td>
                <td>${value['mobile']}</td>
                <td>${value['address']}</td>
            </tr>    
            `;
            myTbody.append(tmp);

        });
    });
    </script>


</body>

</html>