<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="style.css"  rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <title>Admin is Here</title>
        <style>
            body{
                font-family: "Poppins";
            }
            section{
                padding-bottom :5rem;
            }
            .form{
                padding-left:20px;  
                padding-right: 20px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#89D636;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Supply.In</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav" style="padding-left: 6cm;">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#product">Product</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#shop">Shop</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#order">Order</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Stock</a>
                </li>
            </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <button class="btn">
                    <i class="fas fa-user-alt" style="font-size: 22px"></i>
                </button>
            </div>
        </div>
        </nav>
        <section id="dashboard">
            <div class="container p-2 d-flex justify-content-center">
            <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
            <script>
                var xValues = [50,60,70,80,90,100,110,120,130,140,150];
                var yValues = [7,8,8,9,9,9,10,11,14,14,15];

                new Chart("myChart", {
                type: "line",
                data: {
                    labels: xValues,
                    datasets: [{
                    fill: false,
                    lineTension: 0,
                    backgroundColor: "rgba(0,0,255,1.0)",
                    borderColor: "rgba(0,0,255,0.1)",
                    data: yValues
                    }]
                },
                options: {
                    legend: {display: false},
                    scales: {
                    yAxes: [{ticks: {min: 6, max:16}}],
                    }
                }
                });
            </script>
            </div>
        </section>

        <section id="product">
            <div class="container mb-5">
            <form class="" style="padding-left: 8cm; padding-right:8cm;">
                <center><h3>Add Products</h3></center>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Product</label>
                    <input type="email" class="form-control" id="namaProduk" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Kemasan</label>
                    <select class="form-select" aria-label="Default select example" name="kemasan">
                        <option selected>Pilih salah satu</option>
                        <option value="1">1 pack (250 gram)</option>
                        <option value="2">1 Pack (500 gram)</option>
                        <option value="3">1 Pack (1 Kg)</option>
                        <option value="4">1 Pack (2.5 Kg)</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Category</label>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Vegetables</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Fruits</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                    <label class="form-check-label" for="inlineRadio3">Dairy Products</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                    <label class="form-check-label" for="inlineRadio3">New Items</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Gambar Produk</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" aria-label="Upload">
                    </div>
                </div>
                <center><button type="button" class="btn" style="background-color:#FD4501; color: white; width:100%"><i class="fas fa-plus" name="tambah"></i> Tambah</button></center>
            </form>
            </div>
        </section>

        <section id="shop">
            <div class="container mb-">
            <form class="" style="padding-left: 8cm; padding-right:8cm;">
                <center><h3>Add Shop</h3></center>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Toko</label>
                    <input type="email" class="form-control" id="namaToko" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                    <input type="number" class="form-control" id="alamat">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Rating</label>
                    <input type="number" class="form-control" id="rating">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Status</label>
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option selected>Pilih salah satu</option>
                        <option value="1">Open</option>
                        <option value="2">Closed</option>
                    </select>
                </div>
                <div>
                    <label for="exampleInputText1" class="form-label">Delivery Partner</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">GoSend</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">GrabExpress</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                        <label class="form-check-label" for="inlineCheckbox3">Delivree</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                        <label class="form-check-label" for="inlineCheckbox3">Anterin</label>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Foto Shop</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" aria-label="Upload">
                    </div>
                </div>
                <center><button type="button" class="btn" style="background-color:#FD4501; color: white; width:100%"><i class="fas fa-plus" name="tambah"></i> Tambah</button></center>
                </form>
            </div>
        </section>

        <section id="order">
            <div class="container text-center">
            <center><h3>Order Management</h3></center>
            <table class="table mt-3">
                <thead>
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">ID</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Address</th>
                    <th scope="col">Customer Type</th>
                    <th scope="col">Status</th>
                    <th scope="col">Payment</th>
                    <th scope="col">Total</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>001</td>
                    <td>nanda</td>
                    <td>Bandung</td>
                    <td>B2C Membership</td>
                    <td><button class="btn btn-primary">Confirmed</button></td>
                    <td><button class="btn btn-secondary">Unpaid</td>
                    <td>Rp 200.000</td>
                    <td>01-01-2022</td>
                    <td><i class="far fa-edit" style="font-size:25px"></td>
                    </tr>
                    <!---button on delivery-->
                    <tr>
                    <th scope="row">2</th>
                    <td>002</td>
                    <td>niput</td>
                    <td>Lombok</td>
                    <td>B2B Membership</td>
                    <td><button class="btn btn-warning">On Delivery</button></td>
                    <td><button class="btn" style="background-color:#FD4501; color:white;">Paid</td>
                    <td>Rp 200.000</td>
                    <td>01-01-2022</td>
                    <td><i class="far fa-edit" style="font-size:25px"></td>
                    </tr>
                    <!----button completed-->
                    <tr>
                    <th scope="row">3</th>
                    <td>003</td>
                    <td>niput</td>
                    <td>Lombok</td>
                    <td>Non Membership</td>
                    <td><button class="btn btn-success">Complete</button></td>
                    <td><button class="btn" style="background-color:#FD4501; color:white;">Paid</td>
                    <td>Rp 200.000</td>
                    <td>01-01-2022</td>
                    <td><button type="button" class="btn btn primary"  data-bs-toggle="modal" data-bs-target="#updateModal"><i class="far fa-edit" style="font-size:25px"></button></td>
                    </tr>
                </tbody>
            </table>
            </div>

            <!--MODAL-->
            <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form class="" style="padding-left: 8cm; padding-right:8cm;">
                <center><h3>Add Products</h3></center>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Product</label>
                    <input type="email" class="form-control" id="namaProduk" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Kemasan</label>
                    <select class="form-select" aria-label="Default select example" name="kemasan">
                        <option selected>Pilih salah satu</option>
                        <option value="1">1 pack (250 gram)</option>
                        <option value="2">1 Pack (500 gram)</option>
                        <option value="3">1 Pack (1 Kg)</option>
                        <option value="4">1 Pack (2.5 Kg)</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Category</label>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Vegetables</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Fruits</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                    <label class="form-check-label" for="inlineRadio3">Dairy Products</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                    <label class="form-check-label" for="inlineRadio3">New Items</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Gambar Produk</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" aria-label="Upload">
                    </div>
                </div>
                <center><button type="button" class="btn" style="background-color:#FD4501; color: white; width:100%"><i class="fas fa-plus" name="tambah"></i> Tambah</button></center>
            </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
            </div>
        </section>
    </body>
</html>