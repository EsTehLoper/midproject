<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Bootstrap 5 icons CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>CRUD PT Chipi Chapa</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div class="HEADER">

    <h1>PT. Chipi Chapa</h1>
    <img src="{{ asset('images/chipi-chipi-chapa-chapa.gif') }}" alt="Animated GIF">

</div>

<section class="p-3">

    <div class="row">
        <div class="col-12">
            <button class="btn btn-primary newUser" data-bs-toggle="modal" data-bs-target="#userForm">New User <i class="bi bi-people"></i></button>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover mt-3 text-center table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No Telp</th>
                    <th>Posisi</th>
                    <th>Tanggal Masuk</th>
                    <th>Tindakan</th>
                </tr>
                </thead>
                <tbody id="data"></tbody>
            </table>
        </div>
    </div>

</section>

<!--Modal Form-->
<div class="modal fade" id="userForm">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Fill the Form</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" id="myForm">
                    <div class="card imgholder">
                        <label for="imgInput" class="upload">
                            <input type="file" name="" id="imgInput">
                            <i class="bi bi-plus-circle-dotted"></i>
                        </label>
                        <img src="{{ asset('images/Profile-Icon.jpg') }}" alt="" width="200" height="200" class="img">
                        
                    </div>
                    <div class="inputField">
                        <div>
                            <label for="name">Nama:</label>
                            <input type="text" name="" id="name" required>
                        </div>
                        <div>
                            <label for="age">Umur:</label>
                            <input type="number" name="" id="age" required>
                        </div>
                        <div>
                            <label for="city">Alamat:</label>
                            <input type="text" name="" id="city" required>
                        </div>
                        <div>
                            <label for="email">Email:</label>
                            <input type="email" name="" id="email" required>
                        </div>
                        <div>
                            <label for="phone">No Telp:</label>
                            <input type="text" name="" id="phone" minlength="9" maxlength="12" required>
                        </div>
                        <div>
                            <label for="post">Posisi:</label>
                            <input type="text" name="" id="post" required>
                        </div>
                        <div>
                            <label for="sDate">Tanggal Masuk:</label>
                            <input type="date" name="" id="sDate" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="myForm" class="btn btn-primary submit">Submit</button>
            </div>
        </div>
    </div>
</div>

<!--Read Data Modal-->
<div class="modal fade" id="readData">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Profile</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" id="myForm">
                    <div class="card imgholder">
                        <img src="{{ asset('./image/Profile Icon.webp') }}" alt="" width="200" height="200" class="showImg">
                    </div>
                    <div class="inputField">
                        <div>
                            <label for="name">Nama:</label>
                            <input type="text" name="" id="showName" disabled>
                        </div>
                        <div>
                            <label for="age">Umur:</label>
                            <input type="number" name="" id="showAge" disabled>
                        </div>
                        <div>
                            <label for="city">Alamat:</label>
                            <input type="text" name="" id="showCity" disabled>
                        </div>
                        <div>
                            <label for="email">Email:</label>
                            <input type="email" name="" id="showEmail" disabled>
                        </div>
                        <div>
                            <label for="phone">No Telp:</label>
                            <input type="text" name="" id="showPhone" minlength="9" maxlength="12" disabled>
                        </div>
                        <div>
                            <label for="post">Posisi:</label>
                            <input type="text" name="" id="showPost" disabled>
                        </div>
                        <div>
                            <label for="sDate">Tanggal Masuk:</label>
                            <input type="date" name="" id="showsDate" disabled>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <section class="FOOTER">
        <h1>PT Chipi Chapa @ 2024 - All rights reserved</h1>
    </section>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


