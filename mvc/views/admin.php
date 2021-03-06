<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  crossorigin="anonymous">
    <title>Quan Ly Nhan Su</title>

    <style>
    *{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
    }

    header{
        height: 100px;
        background-color: #666;
        color: white;
        padding: 10px;
        display: flex;
        justify-content: space-between;

    }
    #login{
        border: 2px solid white;
        border-radius: 50px;
        font-weight: bold;
        width: 130px;
        height: 50px;
        margin: auto;
        padding: 10px;

        margin-right: 10px;
        text-align: center;
        align-items: center;
    }
    #login > a{
        width: 100px;
        color: white;
        margin: auto;
        padding: 10px 10px;
    }
    h1 > a{
        text-decoration: none;
        color: white;
    }
    html, body{
    height: 100%;
    }
    body{
        background-color: #F0F2F5;
    }
    footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #666666;
    color: white;
        display: flex;
        height: 100px;
        justify-content: space-between;
        align-items: center;
    }
    #info{
        margin-left: 40px;
    }
    #info > p{
        margin: 10px;
    }
  
    #select{
        margin-right: 60px;
    }
    #select > ul >li >a{
       
        color: white;

    }
    #select > ul >  li {
        display: inline-block;
        list-style-type: none;
        margin: 10px;
}
    #row{
        display: flex;
        justify-content: space-between;

    }
    #col-sm-3{
        margin-left: 10px;
        margin-top: 10px;
        border: 1px solid black;
        border-radius: 3px;
        background-color: #FFFFFF;
        width: 206px;
    }
    #col-sm-3 ul > li > a{
        color: #65676B;
    }
    #col-sm-3 ul > li{
        list-style-type: none;
        margin-left: 2px;
    }
    #col-sm-9{
        margin-top: 10px;
        margin-right: 10px;
        width: 1050px;
        background-color: #FFFFFF;
    }


    </style>
</head>
<body>


    <header>
        <div>
            <h1><a href="http://localhost/quanlynhansu/Home/SayHi">Qu???n l?? nh??n s???</a></h1>
            <p>?????i H???c B??ch Khoa - ?????i H???c ???? N???ng</p>
        </div>

        <div id="login">            
            <a href="http://localhost/quanlynhansu/Login/logout">????ng xu???t</a>
        </div>
        
    </header>
    <section>
        <div id="content">          
            <div id="row">
                <div id="col-sm-3">
                    <ul>
                        <li><a href="http://localhost/quanlynhansu/XemNV/XemNV">Xem danh s??ch nh??n vi??n</a></li>
                        <li><a href="http://localhost/quanlynhansu/XemPB/XemPB">Xem danh s??ch ph??ng ban</a></li>
                        <li><a href="http://localhost/quanlynhansu/TimNV/display">T??m ki???m nh??n vi??n</a></li>
                        <li><a href="http://localhost/quanlynhansu/ThemNV/display">Th??m nh??n vi??n</a></li>
                        <li><a href="http://localhost/quanlynhansu/CapNhatPB/Display">C???p nh???t th??ng tin ph??ng ban</a></li>
                        <li><a href="http://localhost/quanlynhansu/XoaNV/display">X??a nh??n vi??n</a></li>
                        <li><a href="http://localhost/quanlynhansu/XoaNhieuNV/display">X??a nhi???u nh??n vi??n</a></li>
                    </ul>
                </div>
                <div id="col-sm-9">
                    <?php require_once "./mvc/views/pages/".$data["Page"].".php" ?>
                </div>
            </div>   
        </div>
    </section>
    <footer>
        <div id="info">
            
            <p>TR?????NG ?????I H???C B??CH KHOA - ?????I H???C ???? N???NG</p>
            <p>?????a ch???: 54 Nguy???n L????ng B???ng</p>
            <p>??i???n tho???i: 02363.842.308 - Email: dhbk@dut.udn.vn</p>
            
        </div>

        <div id="select">
            <ul>
                
                <li><a href="#">TRANG CH???</a></li>
                <li><a href="#">GI???I THI???U</a></li>
                <li><a href="#">TH??NG B??O</a></li>
                <li><a href="#">LI??N H???</a></li>
                
            </ul>
        </div>
    </footer>
 
</body>
</html>

