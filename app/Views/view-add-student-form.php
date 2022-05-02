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
                <h4>Input Data Siswa</h4>
                <div class="input-group input-group-icon">
                    <label for="name">Name</label>
                    <input type="text" placeholder="Full Name" name="name"/>
                </div>
                <div class="input-group input-group-icon">
                    <label for="name">NIS</label>
                    <input type="text" placeholder="Nomor Induk Siswa" name="nis"/>
                </div>
                <div class="input-group input-group-icon">
                    <label for="name">Tanggal Lahir</label>
                    <input type="date" placeholder="Kelas" name="dob"/>
                </div>
                <div class="input-group input-group-icon">
                    <label for="name">Tempat Lahir</label>
                    <input type="text" placeholder="Tempat Lahir" name="birth_place"/>
                </div>
                <div class="input-group input-group-icon">
                    <label for="name">Jenis Kelamin</label>
                    <div class="radio-container">
                        <label class="rad-label">
                            <input type="radio" class="rad-input" name="sex" value="male">
                            <div class="rad-design"></div>
                            <div class="rad-text">Male</div>
                        </label>
                        <label class="rad-label">
                            <input type="radio" class="rad-input" name="sex" value="female">
                            <div class="rad-design"></div>
                            <div class="rad-text">Female</div>
                        </label>
                    </div>
                </div>
                <div class="input-group input-group-icon">
                    <label for="name">Agama</label>
                    <select name="religion">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                </div>
            </div>
            <input class="input-group submit" type="submit"></button>
        </form>
    </div>
</body>
</html>