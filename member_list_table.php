<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員資料列表</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mine.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-lg-10 pt-5">
                <table class="table table-bordered table-striped table-rwd">
                    <thead class="table-dark">
                        <tr>
                            <th>會員編號</th>
                            <th>會員帳號</th>
                            <th>會員密碼</th>
                            <th>會員姓名</th>
                            <th>會員Email</th>
                            <th>最愛食物</th>
                            <th>會員學歷</th>
                            <th>會員興趣</th>
                            <th>會員血型</th>
                            <th>會員年齡</th>
                        </tr>
                    </thead>
                    <tbody id="mytable">
                        <tr>
                            <td data-th="會員編號">XX</td>
                            <td data-th="會員帳號">XXX</td>
                            <td data-th="會員密碼">XX</td>
                            <td data-th="會員姓名">XX</td>
                            <td data-th="會員Email">XX</td>
                            <td data-th="最愛食物">XX</td>
                            <td data-th="會員學歷">XXX</td>
                            <td data-th="會員興趣">XX</td>
                            <td data-th="會員血型">XX</td>
                            <td data-th="會員年齡">XX</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script>
        $(function () {
            $.ajax({
                type: "GET",
                url: "member_list_api.php",
                dataType: "json",
                success: showdata,
                error: function () {
                    alert("資料錯誤!");
                }
            });
        });
        function showdata(data) {
            console.log(data);

            $("#mytable").empty();
            data.forEach(function(item){
                console.log(item.Pname);
                var strHTML = '<tr><td data-th="會員編號">' + item.ID + '</td><td data-th="會員帳號">' + item.username + '</td><td data-th="會員密碼">' + item.password + '</td><td data-th="會員姓名">' + item.name + '</td><td data-th="會員Email">' + item.email + '</td><td data-th="最愛食物">' + item.food + '</td><td data-th="會員學歷">' + item.edu + '</td><td data-th="會員興趣">' + item.interest + '</td><td data-th="會員血型">' + item.blood + '</td><td data-th="會員年齡">' + item.age + '</td></tr>';
                $("#mytable").append(strHTML);
            });
        }
    </script>
</body>

</html>