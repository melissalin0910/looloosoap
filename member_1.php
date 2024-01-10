<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>抱皂美人-首頁</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/mine.css" />
    <link rel="shortcut icon" href="./images/logo/virgo_logo2.png" type="image/x-icon" />

    <style>
        .container {
            font-family: "標楷體", "Tahoma";
        }

        section {
            background-image: url(./images/soap07.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        h3 a {
            color: var(--mycolor24);
        }

        .member {
            background-color: rgb(189, 142, 98);
            background: linear-gradient(135deg, rgba(189, 142, 98, 1) 0%, rgba(189, 142, 98, 0.3) 30%, rgba(189, 142, 98, 0.5) 70%, rgba(189, 142, 98, 0.9) 100%);
            border-radius: 20px;
            border: 1px solid var(--mycolor26);
            color: var(--mycolor14);
        }

        h3 {
            color: rgb(21, 21, 21);
            padding: 10px;
        }

        label {
            color: black;
            font-size: 14px;
        }

        .btn-success {
            background-color: var(--mycolor16);
            border-radius: 10px;
            color: var(--mycolor14);
        }

        .btn-primary {
            background-color: var(--mycolor16);
            font-size: 20px;
            color: var(--mycolor14);
            border-radius: 10px;
        }

        .btn-success:hover,
        .btn-primary:hover {
            background-color: var(--mycolor14);
            color: var(--mytext02);
        }

        .member .row input {
            font-size: 16px;
            color: blue;
            border: 1px solid blue;
        }
    </style>
</head>

<body>
    <div class="container">
        <section class="bg-cover p-5">
            <div class="row align-items-start">

                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                    <div class="row align-items-center flex flex-column">

                        <div class="col-12 col-sm-10 col-lg-8 text-center bg-cover">
                            <a href="./index.html" class="m-3">
                                <img style="height: 15vh;" src="./images/logo/virgo_logo5.png" title="抱皂美人圖標" alt="抱皂美人圖標" />
                            </a>
                        </div>

                        <div class="col-12 col-sm-12 col-lg-10 text-center text-bg-light my-5">
                            <h5 class="py-2 text-muted">簡單 不簡單</h5>
                            <h6 class="my-5">
                                <a href="login.html" class="text-decoration-none d-inline-flex">會員登入</a>
                                <hr />
                                <a href="member_1.php" class="text-decoration-none">註冊新會員</a>
                            </h6>
                        </div>

                        <div class="col-12 col-sm-10 col-lg-8 text-center text-bg-light my-5">
                            <h6>More info. :</h6>
                            <hr />
                            <div class="d-inline-flex">
                                <a href="#">
                                    <img class="m-1" src="./images/Icons/facebook.svg" alt="臉書粉絲團" width="30px" /></a>
                                <a href="#"><img class="m-1" src="./images/Icons/instagram.svg" alt="IG粉絲團" width="30px" /></a>
                                <a href="#"><img class="m-1" src="./images/Icons/youtube.svg" alt="youtube介紹" width="30px" /></a>
                                <a href="#"><img class="m-1" src="./images/Icons/twitter.svg" alt="twitter專訪" width="30px" /></a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-10 col-lg-8 text-center text-bg-light my-3">
                            <h6>與我聯絡 :</h6>
                            <img class="mb-4" src="./images/Icons/抱皂美人信箱.png" alt="抱皂美人信箱" width="80vw" />
                        </div>

                    </div>
                </div>
                
                <div class="col-12 col-sm-12 col-md-10 col-lg-8 ms-5 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="fw-bold">會員註冊資料</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="username" class="form-label">帳號</label>
                                <input type="text" placeholder="帳號需介於5至8個字以內" class="form-control" id="username" name="username" required>
                                <div class="valid-feedback">帳號名稱字數符合規定!</div>
                                <div class="invalid-feedback">帳號名稱字數不符合規定! </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">密碼</label>
                                <input type="password" placeholder="密碼需介於8至10個字以內" class="form-control" id="password" name="password" required>
                                <div class="valid-feedback">密碼字數符合規定!</div>
                                <div class="invalid-feedback">密碼字數不符合規定!</div>
                            </div>
                            <div class="mb-3">
                                <label for="re_password" class="form-label">確認密碼</label>
                                <input type="password" placeholder="密碼需介於8至10個字以內" class="form-control" id="re_password" name="re_password" required>
                                <div class="valid-feedback">確認密碼符合規定!</div>
                                <div class="invalid-feedback">確認密碼不符合規定!</div>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">姓名</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="food" class="form-label">最喜歡的食物</label>
                                <input type="text" id="food" name="food" class="form-control" list="food_list">
                                <datalist id="food_list">
                                    <option value="中式"></option>
                                    <option value="西式"></option>
                                    <option value="義式"></option>
                                    <option value="日式"></option>
                                    <option value="泰式"></option>
                                </datalist>
                            </div>
                            <div class="mb-3">
                                <label for="edu" class="form-label">學歷</label>
                                <select name="edu" id="edu" class="form-control">
                                    <option value="博士">博士</option>
                                    <option value="研究所">研究所</option>
                                    <option value="大(專)學">大(專)學</option>
                                    <option value="高中職">高中職</option>
                                    <option value="其它">其它</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="interest" class="form-label">興趣</label>
                                <select name="interest" id="interest" class="form-control">
                                    <option value="閱讀">閱讀</option>
                                    <option value="電影">電影</option>
                                    <option value="美食">美食</option>
                                    <option value="動漫">動漫</option>
                                    <option value="運動">運動</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="blood" class="form-label">血型</label>
                                <select name="blood" id="blood" class="form-control">
                                    <option value="A型">A型</option>
                                    <option value="B型">B型</option>
                                    <option value="AB型">AB型</option>
                                    <option value="O型">O型</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label" id="age_text">年齡(8~120歲)</label>
                                <input type="range" name="age" id="age" class="form-range" min="12" max="100" step="1" placeholder="25">
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input type="checkbox" name="switch01" id="switch01" class="form-check-input" role="switch">
                                    <label for="switch01" class="form-check-label">同意遵守會員守則</label>
                                </div>
                            </div>
                            <div class="text-end">
                                <button class="btn btn-secondary" id="cancel_btn">取消</button>
                                <button class="btn btn-info" id="ok_btn">確認</button>
                            </div>
                        </div>
                    </div>
                    <div id="showmsg"></div>
                </div>
               
                

                <div class="row p-2">
                    <div class="col-12">
                        <footer class="text-muted text-end">
                            <h6>@此網站由抱皂美人設計團隊維護</h6>
                        </footer>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/jquery-3.7.1.min.js"></script>
<script>
    var flag_username = false;
    var flag_password = false;
    var flag_re_password = false;
    $(function() {
                //帳號需介於 5 至 8 個字以內、密碼需介於 8 至 10 個字以內，否則會出現警告訊息
                $("#username").bind("input propertychange", function() {
                    // console.log($(this).val().length);
                    if ($(this).val().length > 4 && $(this).val().length < 9) {
                        //符合規定
                        $("#username").removeClass("is-invalid");
                        $("#username").addClass("is-valid");
                        flag_username = true;
                    } else {
                        //不符合規定
                        $("#username").removeClass("is-valid");
                        $("#username").addClass("is-invalid");
                        flag_username = false;
                    }
                });

                $("#password").bind("input propertychange", function() {
                    // console.log($(this).val().length);
                    if ($(this).val().length > 7 && $(this).val().length < 11) {
                        //符合規定
                        $("#password").removeClass("is-invalid");
                        $("#password").addClass("is-valid");
                        flag_password = true;
                    } else {
                        //不符合規定
                        $("#password").removeClass("is-valid");
                        $("#password").addClass("is-invalid");
                        flag_password = false;
                    }
                });

                $("#re_password").bind("input propertychange", function() {
                    if ($(this).val() == $("#password").val()) {
                        //符合規定
                        $("#re_password").removeClass("is-invalid");
                        $("#re_password").addClass("is-valid");
                        flag_re_password = true;
                    } else {
                        //不符合規定
                        $("#re_password").removeClass("is-valid");
                        $("#re_password").addClass("is-invalid");
                        flag_re_password = false;
                    }
                });
                
                var isAgree; //公有變數 紀錄同意或不同意的狀態
                var myAge; //公有變數 紀錄年紀
                $(function() {
                    //cancel_btn 監聽
                    $("#cancel_btn").bind("click", function() {
                        // console.log("cancel_btn");
                        location.href = "member_1.php";
                    });

                    //range 監聽
                    $("#age").change(function() {
                        // console.log($(this).val());
                        $("#age_text").text("年齡: " + $(this).val() + "歲");
                        myAge = $(this).val();
                    });

                    //switch change 監聽
                    $("#switch01").change(function() {
                        // console.log($(this).val());
                        if ($(this).is(':checked')) {
                            console.log("同意");
                            $(this).next().text("同意遵守會員守則");
                            isAgree = true;
                        } else {
                            console.log("不同意");
                            $(this).next().text("不同意遵守會員守則");
                            isAgree = false;
                        }
                    });

                    $("#ok_btn").bind("click", function() {
                        if (isAgree == true) {
                            //帳號
                            console.log($("#username").val());
                            //密碼
                            console.log($("#password").val());
                             //姓名
                            console.log($("#name").val());
                             //信箱
                            console.log($("#email").val());
                            //最喜歡的食物
                            console.log($("#food").val());
                            //學歷
                            console.log($("#edu").val());
                            //興趣                            
                            console.log($("#interest").val());
                            //血型                            
                            console.log($("#blood").val());
                            //年齡
                            console.log(myAge);
                            if (flag_username && flag_password && flag_re_password) {
                        //欄位皆正確
                        //傳遞至後端member_api.php

                        
                        if (confirm("確認註冊嗎")) {
                            $.ajax({
                                type: "POST",
                                url: "member_api.php",
                                data: {
                                    username: $("#username").val(),
                                    password: $("#password").val(),
                                    name:$("#name").val(),
                                    email: $("#email").val(),
                                    food: $("#food").val(),
                                    edu: $("#edu").val(),
                                    interest: $("#interest").val(),
                                    blood: $("#blood").val(),
                                    age: $("#age").val(),
                                },
                                success: showdata,
                                error: function() {
                                    alert("資料錯誤!");
                                }
                            });
                            window.location.assign("index.html");
                        } else {
                            location.href = "member_1.php";
                        }
                    } else {
                        //欄位有錯誤
                        alert("欄位有錯誤");
                    }
                        } else {
                            alert("必須同意遵守會員守則!");
                        }

                    });
                });

               
            });
      
                function showdata(data) {
                    console.log(data);
                    alert(data);
                    
                }
</script>
</body>

</html>