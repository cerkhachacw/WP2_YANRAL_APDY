<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/add-student-form.css">
</head>
<body>
    <div class="container">
        <form action="/student/add_student" method="POST">
            <div class="row">
                <a href="/student/form_add">< Kembali</a>
                <h4 style="text-align: center;">Data Siswa</h4>
                <div class="input-group input-group-icon">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="<?= $data['name']?>" readonly />
                </div>
                <div class="input-group input-group-icon">
                    <label for="name">NIS</label>
                    <input type="text" name="nis" value="<?= $data['nis']?>" readonly />
                </div>
                <div class="input-group input-group-icon">
                    <label for="name">Tanggal Lahir</label>
                    <input type="date" name="dob" value="<?= $data['dob']?>" readonly />
                </div>
                <div class="input-group input-group-icon">
                    <label for="name">Tempat Lahir</label>
                    <input type="text" name="birth_place" value="<?= $data['birth_place']?>" readonly />
                </div>
                <div class="input-group input-group-icon">
                    <label for="name">Jenis Kelamin</label>
                    <input type="text" name="sex" value="<?= $data['sex']?>" readonly />
                </div>
                <div class="input-group input-group-icon">
                    <label for="name">Agama</label>
                    <input type="text" name="religion" value="<?= $data['religion']?>" readonly />
                </div>
            </div>
        </form>
    </div>
</body>
</html>